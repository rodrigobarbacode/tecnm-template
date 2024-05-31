/************************************************************************************************************
(C) www.dhtmlgoodies.com, October 2005

Update log:
Version 1.1 December, 1st 2005: Critical update for the new Firefox 1.5 browser
Version 1.2: December, 21th 2005 : Mouseover effect when mouse moves outside of a submenu items text

This is a script from www.dhtmlgoodies.com. You will find this and a lot of other scripts at our website.

Terms of use:
You are free to use this script as long as the copyright message is kept intact. However, you may not
redistribute, sell or repost it without our permission.

Thank you!

www.dhtmlgoodies.com
Alf Magne Kalleland

************************************************************************************************************/

/*


Blog y Web | blogyweb.blogspot.com 


*/

var dhtmlgoodies_menuObj; // Referencía al div del menú
var currentZIndex = 1000;
var liIndex = 0;
var visibleMenus = new Array();
var activeMenuItem = false;
var timeBeforeAutoHide = 1200; // Cantidad de microsegundos antes de que los menús se oculten automaticamente
var dhtmlgoodies_menu_arrow = 'arrow.gif'; //Ruta a la imagen de flecha hacia abajo

var MSIE = navigator.userAgent.indexOf('MSIE')>=0?true:false;
var navigatorVersion = navigator.appVersion.replace(/.*?MSIE ([0-9]\.[0-9]).*/g,'$1')/1;
var menuBlockArray = new Array();
var menuParentOffsetLeft = false;
function getTopPos(inputObj)
{

var returnValue = inputObj.offsetTop;
if(inputObj.tagName=='LI' && inputObj.parentNode.className=='menuBlock1'){
var aTag = inputObj.getElementsByTagName('A')[0];
if(aTag)returnValue += aTag.parentNode.offsetHeight;
}
while((inputObj = inputObj.offsetParent) != null)returnValue += inputObj.offsetTop;
return returnValue;
}

function getLeftPos(inputObj)
{
var returnValue = inputObj.offsetLeft;
while((inputObj = inputObj.offsetParent) != null)returnValue += inputObj.offsetLeft;
return returnValue;
}

function showHideSub()
{
var attr = this.parentNode.getAttribute('currentDepth');
if(navigator.userAgent.indexOf('Opera')>=0){
attr = this.parentNode.currentDepth;
}

this.className = 'currentDepth' + attr + 'over';

if(activeMenuItem && activeMenuItem!=this){
activeMenuItem.className=activeMenuItem.className.replace(/over/,'');
}
activeMenuItem = this;

var numericIdThis = this.id.replace(/[^0-9]/g,'');
var exceptionArray = new Array();
// Mostrar subitem LI
var sub = document.getElementById('subOf' + numericIdThis);
if(sub){
visibleMenus.push(sub);
sub.style.display='';
sub.parentNode.className = sub.parentNode.className + 'over';
exceptionArray[sub.id] = true;
}

// Showing parent items of this one

var parent = this.parentNode;
while(parent && parent.id && parent.tagName=='UL'){
visibleMenus.push(parent);
exceptionArray[parent.id] = true;
parent.style.display='';

var li = document.getElementById('dhtmlgoodies_listItem' + parent.id.replace(/[^0-9]/g,''));
if(li.className.indexOf('over')<0)li.className = li.className + 'over';
parent = li.parentNode;

}

hideMenuItems(exceptionArray);
}
function hideMenuItems(exceptionArray)
{
/*
Ocultar el menú visible en ese momento
*/
var newVisibleMenuArray = new Array();
for(var no=0;no<visibleMenus.length;no++){
if(visibleMenus[no].className!='menuBlock1' && visibleMenus[no].id){
if(!exceptionArray[visibleMenus[no].id]){
var el = visibleMenus[no].getElementsByTagName('A')[0];
visibleMenus[no].style.display = 'none';
var li = document.getElementById('dhtmlgoodies_listItem' + visibleMenus[no].id.replace(/[^0-9]/g,''));
if(li.className.indexOf('over')>0)li.className = li.className.replace(/over/,'');
}else{
newVisibleMenuArray.push(visibleMenus[no]);
}
}
}
visibleMenus = newVisibleMenuArray;
}


var menuActive = true;
var hideTimer = 0;
function mouseOverMenu()
{
menuActive = true;
}

function mouseOutMenu()
{
menuActive = false;
timerAutoHide();
}

function timerAutoHide()
{
if(menuActive){
hideTimer = 0;
return;
}

if(hideTimer<timeBeforeAutoHide){
hideTimer+=100;
setTimeout('timerAutoHide()',99);
}else{
hideTimer = 0;
autohideMenuItems();
}
}

function autohideMenuItems()
{
if(!menuActive){
hideMenuItems(new Array());
if(activeMenuItem)activeMenuItem.className=
activeMenuItem.className.replace(/over/,'');
}
}


function initSubMenus(inputObj,initOffsetLeft,currentDepth)
{
var subUl = inputObj.getElementsByTagName('UL');
if(subUl.length>0){
var ul = subUl[0];

ul.id = 'subOf' + inputObj.id.replace(/[^0-9]/g,'');
ul.setAttribute('currentDepth' ,currentDepth);
ul.currentDepth = currentDepth;
ul.className='menuBlock' + currentDepth;
ul.onmouseover = mouseOverMenu;
ul.onmouseout = mouseOutMenu;
currentZIndex+=1;
ul.style.zIndex = currentZIndex;
menuBlockArray.push(ul);
var topPos = getTopPos(inputObj);
var leftPos = getLeftPos(inputObj)/1 + initOffsetLeft/1;
ul = dhtmlgoodies_menuObj.appendChild(ul);
ul.style.position = 'absolute';
ul.style.left = leftPos + 'px';
ul.style.top = topPos + 'px';
var li = ul.getElementsByTagName('LI')[0];
while(li){
if(li.tagName=='LI'){
li.className='currentDepth' + currentDepth;
li.id = 'dhtmlgoodies_listItem' + liIndex;
liIndex++;
var uls = li.getElementsByTagName('UL');
li.onmouseover = showHideSub;
if(uls.length>0){
var offsetToFunction = li.getElementsByTagName('A')[0].offsetWidth+2;
if(navigatorVersion<6 && MSIE)offsetToFunction+=15; // MSIE 5.x fix
initSubMenus(li,offsetToFunction,(currentDepth+1));
}
if(MSIE){
var a = li.getElementsByTagName('A')[0];
a.style.width=li.offsetWidth+'px';
a.style.display='block';
}
}
li = li.nextSibling;
}
ul.style.display = 'none';
if(!document.all){
//dhtmlgoodies_menuObj.appendChild(ul);
}
}
}

function resizeMenu()
{
var offsetParent = getLeftPos(dhtmlgoodies_menuObj);

for(var no=0;no<menuBlockArray.length;no++){
var leftPos = menuBlockArray[no].style.left.replace('px','')/1;
menuBlockArray[no].style.left = leftPos + offsetParent - menuParentOffsetLeft + 'px';
}
menuParentOffsetLeft = offsetParent;
}

/*
Inicialización del menú
*/
function initDhtmlGoodiesMenu()
{
dhtmlgoodies_menuObj = document.getElementById('dhtmlgoodies_menu');


var aTags = dhtmlgoodies_menuObj.getElementsByTagName('A');
for(var no=0;no<aTags.length;no++){
var subUl = aTags[no].parentNode.getElementsByTagName('UL');
if(subUl.length>0 && aTags[no].parentNode.parentNode.parentNode.id != 'dhtmlgoodies_menu'){
var img = document.createElement('IMG');
img.src = dhtmlgoodies_menu_arrow;
aTags[no].appendChild(img);
}
}

var mainMenu = dhtmlgoodies_menuObj.getElementsByTagName('UL')[0];
mainMenu.className='menuBlock1';
mainMenu.style.zIndex = currentZIndex;
mainMenu.setAttribute('currentDepth' ,1);
mainMenu.currentDepth = '1';
mainMenu.onmouseover = mouseOverMenu;
mainMenu.onmouseout = mouseOutMenu;
var mainMenuItemsArray = new Array();
var mainMenuItem = mainMenu.getElementsByTagName('LI')[0];
mainMenu.style.height = mainMenuItem.offsetHeight + 2 + 'px';
while(mainMenuItem){

mainMenuItem.className='currentDepth1';
mainMenuItem.id = 'dhtmlgoodies_listItem' + liIndex;
mainMenuItem.onmouseover = showHideSub;
liIndex++;
if(mainMenuItem.tagName=='LI'){
mainMenuItem.style.cssText = 'float:left;';
mainMenuItem.style.styleFloat = 'left';
mainMenuItemsArray[mainMenuItemsArray.length] = mainMenuItem;
initSubMenus(mainMenuItem,0,2);
}

mainMenuItem = mainMenuItem.nextSibling;

}
for(var no=0;no<mainMenuItemsArray.length;no++){
initSubMenus(mainMenuItemsArray[no],0,2);
}

menuParentOffsetLeft = getLeftPos(dhtmlgoodies_menuObj);
window.onresize = resizeMenu;
dhtmlgoodies_menuObj.style.visibility = 'visible';
}

window.onload = initDhtmlGoodiesMenu;