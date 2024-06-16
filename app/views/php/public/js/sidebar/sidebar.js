/* Sidebar Toggles */
import * as SBNav from "functionality.js"

const c_elements = getElementById('content-holder')

//Toggles Visibility of the Submenu
function toggleSubmenu(submenu_name) {
    var elements = document.getElementsByClassName(submenu_name);
    
    for (let i = 0; i < elements.length; i++) {
        if (elements[i].classList.contains('sidebar-collapse')) {
            elements[i].classList.remove('sidebar-collapse')
            elements[i].classList.add('sidebar-collapse-reverse')
            elements[i].classList.toggle('d-none')
        } else if (elements[i].classList.contains('sidebar-collapse-reverse')) {
            elements[i].classList.remove('sidebar-collapse-reverse')
            elements[i].classList.add('sidebar-collapse')
            setTimeout(() => {  elements[i].classList.toggle('d-none') }, 320);
        } else {
            elements[i].classList.add('sidebar-collapse-reverse')
            elements[i].classList.toggle('d-none')
        }
    }
        
        

    var element = document.getElementById(submenu_name)
    if (element.classList.contains('arrow-flip')) {
        element.classList.remove('arrow-flip')
        element.classList.add('arrow-flip-reverse')
        
    } else if (element.classList.contains('arrow-flip-reverse')) {
        element.classList.remove('arrow-flip-reverse')
        element.classList.add('arrow-flip')
    } else {
        element.classList.add('arrow-flip')
    }
}

//Toggles Visibility of the Sidebar
function toggleSidebar() {
    var elements = [ document.getElementById('sidebar'), document.getElementById('collapser') ]
    
    
    elements.forEach(element => {
        if (element.classList.contains('sidebar-collapse')) {
            element.classList.remove('sidebar-collapse')
            element.classList.add('sidebar-collapse-reverse')
        } else if (element.classList.contains('sidebar-collapse-reverse')) {
            element.classList.remove('sidebar-collapse-reverse')
            element.classList.add('sidebar-collapse')
        } else {
            element.classList.add('sidebar-collapse')
        }
        
    })

    var s_holder = document.getElementById('sidebar-holder')
    s_holder.classList.toggle('col-md-2')
    s_holder.classList.toggle('col')

    var c_holder = document.getElementById('content-holder')
    c_holder.classList.toggle('col-md-9')
    c_holder.classList.toggle('mx-auto')
    c_holder.classList.toggle('col-md-10')

    var element = document.getElementById('collapser-icon')
    if (element.classList.contains('arrow-flip')) {
        element.classList.remove('arrow-flip')
        element.classList.add('arrow-flip-reverse')
        
    } else if (element.classList.contains('arrow-flip-reverse')) {
        element.classList.remove('arrow-flip-reverse')
        element.classList.add('arrow-flip')
    } else {
        element.classList.add('arrow-flip')
    }
}


