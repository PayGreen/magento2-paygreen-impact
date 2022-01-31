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
 * @version   1.0.1
 *
 */
!function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="../",n(n.s="Ad0k")}({Ad0k:function(e,t){var n="pgbutton__hidden";e={install:function(){this.initListener()},initListener:function(){document.querySelector(".pgtreegenerate__button").addEventListener("click",this.generateCSV.bind(this)),document.querySelector(".pgtreeregenerate__button").addEventListener("click",this.generateCSV.bind(this))},generateCSV:function(){this.resetGeneration();var e=window.paygreen_generate_product_catalog_url;this.makeXmlHttpRequest("POST",e)},resetGeneration:function(){this.enableLoader(),this.cleanButton(),this.cleanWarning(),this.cleanNoticesList()},handleResponse:function(e){this.disableLoader(),0!==e.data.notices.length&&this.addNoticesList(e.data.notices),e.success?this.enableExport():(null!=e.data.error&&this.addWarning(e.data.error),this.disableExport())},enableLoader:function(){var e=document.querySelector(".pgtreeloader");this.pgEnableElement(e)},disableLoader:function(){var e=document.querySelector(".pgtreeloader");this.pgDisableElement(e)},cleanButton:function(){var e=document.querySelector(".pgtreegenerate__button"),t=document.querySelector(".pgtreeregenerate__button"),n=document.querySelectorAll(".pgtreeexport__button");this.pgDisableElement(e),this.pgDisableElement(t),n&&n.forEach(function(e){this.pgDisableElement(e)}.bind(this))},cleanNoticesList:function(){var e=document.querySelector(".pgtreegenerate__div");this.pgDisableElement(e),document.querySelector(".pgtreegenerate__list").innerHTML=""},addNoticesList:function(e){var t=document.querySelector(".pgtreegenerate__div");this.pgEnableElement(t);var n=document.querySelector(".pgtreegenerate__list");e.forEach((function(e){n.innerHTML+="<li>"+e+"</li>"}))},cleanWarning:function(){document.querySelector(".pgtreegenerate__warning").innerHTML=""},addWarning:function(e){document.querySelector(".pgtreegenerate__warning").innerHTML='<p class="pgbutton__warning">'+e+"</p>"},enableExport:function(){var e=document.querySelector(".pgtreeregenerate__button"),t=document.querySelectorAll(".pgtreeexport__button");this.pgEnableElement(e),t&&t.forEach(function(e){this.pgEnableElement(e)}.bind(this))},disableExport:function(){var e=document.querySelector(".pgtreeregenerate__button"),t=document.querySelectorAll(".pgtreeexport__button");this.pgEnableElement(e),t&&t.forEach(function(e){this.pgDisableElement(e)}.bind(this))},makeXmlHttpRequest:function(e,t){var n=!(arguments.length>2&&void 0!==arguments[2])||arguments[2],r=new XMLHttpRequest;r.open(e,t,n),r.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8"),r.setRequestHeader("X-Requested-With","XMLHttpRequest"),r.onreadystatechange=function(){if(4===r.readyState){var e=JSON.parse(r.response);this.handleResponse(e)}}.bind(this),r.send()},pgDisableElement:function(e){e.classList.contains(n)||e.classList.add(n)},pgEnableElement:function(e){e.classList.contains(n)&&e.classList.remove(n)}};window.addEventListener("DOMContentLoaded",(function(t){e.install()}))}});