!function(e){function a(o){if(t[o])return t[o].exports;var l=t[o]={i:o,l:!1,exports:{}};return e[o].call(l.exports,l,l.exports,a),l.l=!0,l.exports}var t={};a.m=e,a.c=t,a.d=function(e,t,o){a.o(e,t)||Object.defineProperty(e,t,{configurable:!1,enumerable:!0,get:o})},a.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(t,"a",t),t},a.o=function(e,a){return Object.prototype.hasOwnProperty.call(e,a)},a.p="",a(a.s=0)}([function(e,a,t){t(1),t(2),t(3),t(4),t(5),t(6),e.exports=t(7)},function(e,a,t){"use strict";if(console.log("Это сайт компании Автобагаж"),console.log("Сейчас сайт работает нормально"),window.localStorage)for(var o=document.querySelectorAll("[name]"),l=0,s=o.length;l<s;l++)!function(e){var a=e.getAttribute("name");e.value=localStorage.getItem(a)||"",e.onkeyup=function(){localStorage.setItem(a,e.value)}}(o[l])},function(e,a,t){"use strict";$(function(){$(".guestbook__tab-add").click(function(){$(".tabs__item").removeClass("tabs__item--active"),$(".guestbook__tab").removeClass("guestbook__tab--active"),$(".guestbook__tab-add").addClass("tabs__item--active"),$(".guestbook__rewiews-add").addClass("guestbook__tab--active")}),$(".guestbook__tab-rewiew").click(function(){$(".guestbook__tab-add").removeClass("tabs__item--active"),$(".guestbook__rewiews-add").removeClass("guestbook__tab--active"),$(".guestbook__tab-rewiew").addClass("tabs__item--active"),$(".guestbook__rewiews").addClass("guestbook__tab--active")})})},function(e,a,t){"use strict";$(function(){$(".special__tab-komm").click(function(){$(".tabs__item").removeClass("tabs__item--active"),$(".special__tab").removeClass("special__tab--active"),$(".special__tab-komm").addClass("tabs__item--active"),$(".special__komm").addClass("special__tab--active")}),$(".special__tab-sale").click(function(){$(".special__tab-komm").removeClass("tabs__item--active"),$(".special__komm").removeClass("special__tab--active"),$(".special__tab-sale").addClass("tabs__item--active"),$(".special__sale").addClass("special__tab--active")})})},function(e,a,t){"use strict";$(".rewiew__text-wrap").each(function(){""===$(this).text()&&$(this).remove()}),$(".rewiew__answer").each(function(){""===$(this).text()&&$(this).remove()})},function(e,a,t){"use strict";$(function(){$(".modal-call__button").click(function(){$(".modal-call").addClass("modal-call--active"),$(".modal-call__overlay").addClass("modal-call__overlay--active")}),$(".modal-call__close").click(function(){$(".modal-call").removeClass("modal-call--active"),$(".modal-call__overlay").removeClass("modal-call__overlay--active")}),$(".modal-call__overlay").click(function(){$(".modal-call").removeClass("modal-call--active"),$(".modal-call__overlay").removeClass("modal-call__overlay--active")})})},function(e,a,t){"use strict";$(".gallery__tag").each(function(){""===$(this).text()&&$(this).remove()})},function(e,a){}]);