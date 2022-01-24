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
!function(t){var e={};function n(o){if(e[o])return e[o].exports;var r=e[o]={i:o,l:!1,exports:{}};return t[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=t,n.c=e,n.d=function(t,e,o){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:o})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)n.d(o,r,function(e){return t[e]}.bind(null,r));return o},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="../",n(n.s="Qo7Z")}({Qo7Z:function(t,e){function n(t){return(n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}t={pgTreeUserContributionUrl:null,pgTreeUserContritunionAmount:.01,install:function(){document.querySelector("#pgtreecontribution-container")&&(this.pgTreeUserContributionUrl=window.paygreen_climate_contribution_url,this.pgTreeUserContritunionAmount=window.paygreen_climate_contribution_amount,this.addFormtoBody(),this.handleClickOnAddContributionButton())},addFormtoBody:function(){var t=document.createElement("form");t.setAttribute("method","post"),t.setAttribute("action",this.pgTreeUserContributionUrl),t.setAttribute("id","pgtreecontribution-form");var e=document.createElement("input");e.setAttribute("type","hidden"),e.setAttribute("name","pgtreecontribution-amount"),e.setAttribute("value",this.pgTreeUserContritunionAmount),t.appendChild(e),document.body.append(t)},displayTreePopin:function(){document.querySelector(".pgtreecontribution-popin-container").classList.remove("pgHidden");var t=document.createElement("div");t.classList.add("pgtreecontribution-popin-loader");var e=document.createElement("div");e.classList.add("pgloader"),e.style.borderWidth="5px",t.append(e),document.querySelector(".pgtreecontribution-popin-container").append(t)},handleClickOnAddContributionButton:function(){var t=document.querySelector(".pgtreecontribution-choice");null!==t&&t.addEventListener("click",function(){document.querySelector("#pgtreecontribution-form").submit(),this.displayTreePopin()}.bind(this))}};"object"!==n(window.pgmodules)&&(window.pgmodules={}),window.pgmodules.treeCheckout=t,window.addEventListener("DOMContentLoaded",(function(e){t.install()}))}});