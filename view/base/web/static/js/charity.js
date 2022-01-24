/**
 * 2014 - 2022 Watt Is It
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License X11
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/mit-license.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to contact@paygreen.fr so we can send you a copy immediately.
 *
 * @author    PayGreen <contact@paygreen.fr>
 * @copyright 2014 - 2022 Watt Is It
 * @license   https://opensource.org/licenses/mit-license.php MIT License X11
 * @version   1.0.0
 *
 */
!function(t){var e={};function n(i){if(e[i])return e[i].exports;var o=e[i]={i:i,l:!1,exports:{}};return t[i].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=t,n.c=e,n.d=function(t,e,i){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:i})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var i=Object.create(null);if(n.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var o in t)n.d(i,o,function(e){return t[e]}.bind(null,o));return i},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="../",n(n.s="uKpv")}({uKpv:function(t,e){function n(t){return(n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function i(t,e){var n="undefined"!=typeof Symbol&&t[Symbol.iterator]||t["@@iterator"];if(!n){if(Array.isArray(t)||(n=function(t,e){if(!t)return;if("string"==typeof t)return o(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);"Object"===n&&t.constructor&&(n=t.constructor.name);if("Map"===n||"Set"===n)return Array.from(t);if("Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))return o(t,e)}(t))||e&&t&&"number"==typeof t.length){n&&(t=n);var i=0,r=function(){};return{s:r,n:function(){return i>=t.length?{done:!0}:{done:!1,value:t[i++]}},e:function(t){throw t},f:r}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var a,c=!0,l=!1;return{s:function(){n=n.call(t)},n:function(){var t=n.next();return c=t.done,t},e:function(t){l=!0,a=t},f:function(){try{c||null==n.return||n.return()}finally{if(l)throw a}}}}function o(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,i=new Array(e);n<e;n++)i[n]=t[n];return i}t={pgCharityPopinTemplateUrl:null,install:function(){document.querySelector("#pgcharity-container")&&(this.pgCharityPopinTemplateUrl=window.paygreen_charity_popin_template_url,this.handleClickOnCharityBlock(),this.buildCharityPopinContainer(),this.handleClickOutsideOfPopin(),this.handleClickOnCancelButtonOutsideOfPopin(),this.handleOutsideCancelButton())},handleOutsideCancelButton:function(){var t=document.querySelector(".pgcharity-button-cancel");null!==t&&t.addEventListener("click",function(){this.hideCharityPopin(),this.buildCharityPopinLoader()}.bind(this))},handlePopinCancelButton:function(){var t=document.querySelector(".pgcharity-popin-button-cancel");null!==t&&t.addEventListener("click",function(){this.hideCharityPopin(),this.buildCharityPopinLoader()}.bind(this))},handleClickOnValidateGiftButton:function(){document.querySelector(".pgcharity-popin-button-validate").addEventListener("click",function(){document.querySelector("#pgcharity-popin-gift-form").submit(),this.hideCharityPopin(),this.buildCharityPopinLoader()}.bind(this))},handleClickOnCharityBlock:function(){document.querySelector("#pgcharity-container").addEventListener("click",function(){this.buildCharityPopinLoader(),this.makeXmlHttpRequest("GET",this.pgCharityPopinTemplateUrl)}.bind(this))},handleClickOnCancelButtonOutsideOfPopin:function(){var t=document.querySelector(".pgcharity-button-cancel");null!==t&&t.addEventListener("click",(function(t){return t.stopPropagation()}))},handleClickOutsideOfPopin:function(){document.querySelector(".paygreen-charity-popin-container").addEventListener("click",function(t){this.hideCharityPopin()}.bind(this))},handleClickOnClosingOptions:function(){document.querySelectorAll(".pgcharity-popin-close-option").forEach(function(t){t.addEventListener("click",function(t){this.hideCharityPopin()}.bind(this))}.bind(this))},handleAssociationSelection:function(){var t=document.querySelector("#pgcharity-popin-gift-form input[name=pgcharity-gift-association]"),e=null;if(window.innerWidth>=768)e=document.querySelectorAll(".pgcharity-association");else{e=document.querySelectorAll(".pgcharity-association-img");var n,o=i(document.querySelectorAll(".pgcharity-association"));try{for(o.s();!(n=o.n()).done;){n.value.classList.remove("selected")}}catch(t){o.e(t)}finally{o.f()}}e.forEach(function(n){n.addEventListener("click",function(o){t.value=n.dataset.associationId;var r,a=i(e);try{for(a.s();!(r=a.n()).done;){r.value.classList.remove("selected")}}catch(t){a.e(t)}finally{a.f()}n.classList.add("selected")}.bind(this))}.bind(this))},buildCharityPopinLoader:function(){this.disableBodyScroll();var t=document.querySelector(".paygreen-charity-popin-container");t.classList.remove("pgHidden");var e=document.createElement("div");e.classList.add("pgcharity-popin-loader");var n=document.createElement("div");n.classList.add("pgloader"),n.style.borderWidth="5px",e.append(n),t.append(e)},removeCharityPopinLoader:function(){document.querySelector(".pgcharity-popin-loader").remove()},buildCharityPopinContainer:function(){var t=document.createElement("div");t.classList.add("paygreen-charity-popin-container","pgHidden"),document.querySelector("body").prepend(t)},displayCharityPopin:function(t){this.removeCharityPopinLoader();var e=document.querySelector(".paygreen-charity-popin-container");e.classList.remove("pgHidden"),e.append(this.parseHtml(t)),this.handleClickOnClosingOptions(),this.handleAssociationSelection(),this.handleClickOnValidateGiftButton(),this.handlePopinCancelButton(),document.querySelector(".pgcharity-popin").addEventListener("click",(function(t){return t.stopPropagation()}))},hideCharityPopin:function(){this.enableBodyScroll();var t=document.querySelector(".paygreen-charity-popin-container");t.innerHTML="",t.classList.add("pgHidden")},parseHtml:function(t){return(new DOMParser).parseFromString(t,"text/html").body.firstChild},enableBodyScroll:function(){document.body.style.overflow="auto"},disableBodyScroll:function(){document.body.style.overflow="hidden"},makeXmlHttpRequest:function(t,e){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{},i=!(arguments.length>3&&void 0!==arguments[3])||arguments[3],o=new XMLHttpRequest;o.open(t,e,i),o.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8"),o.setRequestHeader("X-Requested-With","XMLHttpRequest"),o.onreadystatechange=function(){4===o.readyState&&200===o.status&&this.displayCharityPopin(o.response)}.bind(this),o.send(new URLSearchParams(n))}};"object"!==n(window.pgmodules)&&(window.pgmodules={}),window.pgmodules.charityCheckout=t,window.addEventListener("DOMContentLoaded",(function(e){t.install()}))}});