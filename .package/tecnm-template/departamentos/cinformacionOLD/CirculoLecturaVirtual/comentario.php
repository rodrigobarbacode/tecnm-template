<!DOCTYPE html><html class=''>
<head><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="canonical" href="http://codepen.io/JanKantyPawelski/pen/snkuo" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel='stylesheet prefetch' href='//plugins.pawelski.io/ripple.min.css'>
<style class="cp-pen-styles">@import url(//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic&subset=latin,latin-ext);
* {
  margin: 0;
  padding: 0;
  background: none;
  border: 0 solid #000;
  outline: 0 solid #000;
  border-radius: 0;
  box-sizing: border-box;
  box-shadow: 0 0 0 0 #000;
  color: inherit;
  font: inherit;
  text-align: inherit;
  text-rendering: geometricPrecision;
  line-height: inherit;
  vertical-align: top;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  z-index: inherit;
  cursor: inherit;
  -webkit-tap-highlight-color: transparent;
}

body {
  color: #000;
  font: 16px sans-serif;
  text-align: left;
  line-height: 1.4;
  z-index: 0;
  cursor: default;
}

input,
textarea {
  -webkit-user-select: text;
     -moz-user-select: text;
      -ms-user-select: text;
          user-select: text;
  cursor: text;
  -webkit-appearance: textfield;
}

a,
button,
[type="checkbox"],
[type="radio"],
[type="button"] {
  cursor: pointer;
}

input[disabled],
textarea[disabled],
button[disabled],
select[disabled],
[type="checkbox"][disabled],
[type="radio"][disabled],
[type="button"][disabled] {
  cursor: not-allowed;
}

body {
  margin: 0 auto;
  padding: 20px;
  width: 100%;
  max-width: 640px;
  background: #e5e5e5;
  font-family: Lato, sans-serif;
}

body {
  max-width: 840px;
}

ul {
  padding-left: 80px;
  list-style: none;
}
ul li {
  background: #fff;
  border-radius: 2px;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
  position: relative;
}
ul li:not(:first-child) {
  margin-top: 20px;
}
ul li:before {
  content: "";
  border-width: 10px 10px 10px 0;
  border-style: solid;
  border-color: transparent #fff;
  position: absolute;
  top: 10px;
  left: -10px;
}
ul li header {
  border-bottom: 1px solid #e5e5e5;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}
ul li header * {
  display: block;
}
ul li header h1 {
  padding-left: 20px;
  font-weight: normal;
  line-height: 40px;
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
}
ul li header h1 a {
  text-decoration: none;
  display: inline-block;
}
ul li header h1.author, ul li header h1.author * {
  color: #9a3;
}
ul li header h1.author:after {
  content: "Author";
  margin: 10px 0 10px 10px;
  padding: 0 5px;
  background: #9a3;
  border-radius: 2px;
  color: #fff;
  font-size: 10px;
  font-weight: normal;
  text-transform: uppercase;
  line-height: 20px;
  position: absolute;
}
ul li header button {
  padding: 10px;
}
ul li header button svg {
  width: 20px;
  height: 20px;
}
ul li header button svg * {
  fill: #999;
}
ul li header button:hover svg * {
  fill: #666;
}
ul li header button.loved svg * {
  fill: #f66;
}
ul li header img {
  width: 60px;
  height: 60px;
  background: #fff;
  border: 4px solid #fff;
  border-radius: 2px;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
  position: absolute;
  top: 0;
  left: -80px;
}
ul li article {
  padding: 20px;
  white-space: pre-line;
  overflow-x: hidden;
}
ul li article .reply {
  color: #9a3;
}
ul li article strong {
  font-weight: 500;
}
ul li article em {
  font-style: italic;
}
ul li article a {
  text-decoration: underline;
}
ul li article a:hover {
  text-decoration: none;
}
ul li article code {
  font-family: "Source Code Pro", monospace;
}

form {
  margin-top: 20px;
  padding: 20px 20px 20px 100px;
  background: #fff;
  border-radius: 2px;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
  position: relative;
  -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
          flex-wrap: wrap;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}
form:before {
  content: "";
  border-width: 10px 10px 10px 0;
  border-style: solid;
  border-color: transparent rgba(229, 229, 229, 0.5);
  position: absolute;
  top: 30px;
  left: 90px;
}
form input,
form textarea {
  padding: 9px 20px;
  width: 100%;
  background: rgba(229, 229, 229, 0.5);
  display: block;
}
form input:not(:first-child),
form textarea:not(:first-child) {
  margin-top: 2px;
}
form input[type='email'],
form textarea[type='email'] {
  width: 50%;
  border-right: 1px solid #fff;
}
form input[type='url'],
form textarea[type='url'] {
  width: 50%;
  border-left: 1px solid #fff;
}
form input::-webkit-input-placeholder,
form textarea::-webkit-input-placeholder {
  color: #666;
}
form input::-moz-placeholder,
form textarea::-moz-placeholder {
  color: #666;
}
form input:-ms-input-placeholder,
form textarea:-ms-input-placeholder {
  color: #666;
}
form input::placeholder,
form textarea::placeholder {
  color: #666;
}
form input.ng-dirty.ng-invalid, form input.ng-dirty.ng-invalid::-webkit-input-placeholder,
form textarea.ng-dirty.ng-invalid,
form textarea.ng-dirty.ng-invalid::-webkit-input-placeholder {
  color: #f66;
}
form input.ng-dirty.ng-invalid, form input.ng-dirty.ng-invalid::-moz-placeholder,
form textarea.ng-dirty.ng-invalid,
form textarea.ng-dirty.ng-invalid::-moz-placeholder {
  color: #f66;
}
form input.ng-dirty.ng-invalid, form input.ng-dirty.ng-invalid:-ms-input-placeholder,
form textarea.ng-dirty.ng-invalid,
form textarea.ng-dirty.ng-invalid:-ms-input-placeholder {
  color: #f66;
}
form input.ng-dirty.ng-invalid, form input.ng-dirty.ng-invalid::placeholder,
form textarea.ng-dirty.ng-invalid,
form textarea.ng-dirty.ng-invalid::placeholder {
  color: #f66;
}
form textarea {
  padding: 20px;
  height: 120px;
  resize: none;
}
form p {
  margin-top: 10px;
  padding: 10px 0;
  width: 50%;
}
form p a {
  text-decoration: underline;
}
form p a:hover {
  text-decoration: none;
}
form button {
  margin: 10px auto 0;
  padding: 10px 0;
  width: 50%;
  background: #9a3;
  border-radius: 2px;
  color: #fff;
  font-weight: normal;
  text-align: center;
  display: block;
}
form img {
  width: 60px;
  height: 60px;
  background: rgba(229, 229, 229, 0.5);
  border: 4px solid rgba(229, 229, 229, 0.5);
  border-radius: 2px;
  position: absolute;
  top: 20px;
  left: 20px;
}

@media (max-width: 440px) {
  ul {
    padding: 0;
  }
  ul li:before {
    content: none;
  }
  ul li header img {
    clip: rect(0, 0, 0, 0);
  }
  ul li header h1.author:after {
    content: none;
  }

  form {
    padding-left: 20px;
  }
  form:before {
    content: none;
  }
  form img {
    clip: rect(0, 0, 0, 0);
  }
  form input,
  form textarea {
    padding: 10px;
  }
  form textarea {
    height: 80px;
  }
  form p,
  form button {
    margin: 10px 10px 0;
    width: 100%;
  }
  form p {
    padding: 0;
  }
}
</style></head><body>

<svg viewBox="0 0 100 100" style="display:none">
  <defs>
    <path id="icon_love" d="M73.4,6c-10.2,0-19,5.7-23.4,14.1C45.5,11.7,36.7,6,26.6,6C11.9,6,0,18,0,32.7C0,68.9,50,94,50,94 s50-25.1,50-61.3C100,18,88.1,6,73.4,6L73.4,6z"></path>
    <path id="icon_reply" d="M75.9,100C87,79.9,88.9,49.2,45.4,50.2V75L8,37.5L45.4,0v24.3C97.4,22.9,103.2,70.4,75.9,100z"></path>
  </defs>
</svg>
<div ng-app="comments" ng-controller="commentsCtrl">
  <ul ng-if="comments.length">
    <li ng-repeat="comment in comments">
      <header>
        <h1 ng-if="comment.author.website.length == 0" ng-class="{ author: isAuthor(comment.author.email) }">{{ comment.titulo }}</h1>
        <h1 ng-if="comment.author.website.length &gt; 0" ng-class="{ author: isAuthor(comment.author.email) }"><a ng-href="//{{ comment.author.website }}">{{ comment.author.name }}</a></h1>
        <button ng-click="loveComment(comment.id)" ng-class="{ loved: comment.loved }" class="love">
          <svg viewBox="0 0 100 100">
            <use xlink:href="#icon_love"></use>
          </svg>
        </button>
        <button ng-click="addReply(comment.author.name)" class="reply">
          <svg viewBox="0 0 100 100">
            <use xlink:href="#icon_reply"></use>
          </svg>
        </button><img ng-src="{{ getGravatar(comment.author.email) }}"/>
      </header>
      <article ng-bind-html="parseContent(comment.content)"></article>
    </li>
  </ul>
  <form name="form" ng-submit="form.$valid &amp;&amp; addNewComment()" novalidate="novalidate">
    <input type="text" placeholder="First and second name" ng-pattern="/[a-zA-Z.,-]+/" ng-model="newComment.author.name" required="required"/>
    <textarea placeholder="Comment" ng-model="newComment.content" required="required"></textarea>
    <input type="email" placeholder="Email" ng-model="newComment.author.email" required="required"/>
    <input type="url" placeholder="Website" ng-model="newComment.author.website"/>
    <button type="submit" class="ripple">Add comment</button><img id="newCommentAvatar" ng-src="{{ getGravatar(newComment.author.email) }}"/>
  </form>
</div>
<script src='//ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js'></script><script src='//www.myersdaily.org/joseph/javascript/md5.js'></script><script src='//plugins.pawelski.io/ripple.min.js'></script>
<script>
(function() {
 var app = angular.module('comments', []);
app.controller('commentsCtrl', function ($scope, $http) {
    $http.get('http://localhost/CirculoLecturaVirtual/controller/bibliotecaController.php?libros=libros').success(function (data) {
        $scope.posts = data;
        $scope.random = function () {
            return 0.5 - Math.random();
        };
    }).error(function (data) {
    });
});



//@ sourceURL=pen.js
</script>
<script src='http://codepen.io/assets/editor/live/css_live_reload_init.js'></script>
</body></html>