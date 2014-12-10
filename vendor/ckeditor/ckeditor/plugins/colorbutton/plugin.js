﻿/*
 Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.md or http://ckeditor.com/license
*/
CKEDITOR.plugins.add("colorbutton",{requires:"panelbutton,floatpanel",lang:"af,ar,bg,bn,bs,ca,cs,cy,da,de,el,en,en-au,en-ca,en-gb,eo,es,et,eu,fa,fi,fo,fr,fr-ca,gl,gu,he,hi,hr,hu,id,is,it,ja,ka,km,ko,ku,lt,lv,mk,mn,ms,nb,nl,no,pl,pt,pt-br,ro,ru,si,sk,sl,sq,sr,sr-latn,sv,th,tr,tt,ug,uk,vi,zh,zh-cn",icons:"bgcolor,textcolor",hidpi:!0,init:function(c){function o(m,g,d,h){var i=new CKEDITOR.style(j["colorButton_"+g+"Style"]),k=CKEDITOR.tools.getNextId()+"_colorBox";c.ui.add(m,CKEDITOR.UI_PANELBUTTON,{label:d,
title:d,modes:{wysiwyg:1},editorFocus:0,toolbar:"colors,"+h,allowedContent:i,requiredContent:i,panel:{css:CKEDITOR.skin.getPath("editor"),attributes:{role:"listbox","aria-label":f.panelTitle}},onBlock:function(a,b){b.autoSize=!0;b.element.addClass("cke_colorblock");b.element.setHtml(q(a,g,k));b.element.getDocument().getBody().setStyle("overflow","hidden");CKEDITOR.ui.fire("ready",this);var e=b.keys,d="rtl"==c.lang.dir;e[d?37:39]="next";e[40]="next";e[9]="next";e[d?39:37]="prev";e[38]="prev";e[CKEDITOR.SHIFT+
9]="prev";e[32]="click"},refresh:function(){c.activeFilter.check(i)||this.setState(CKEDITOR.TRISTATE_DISABLED)},onOpen:function(){var a=c.getSelection(),a=a&&a.getStartElement(),a=c.elementPath(a),b;if(a){a=a.block||a.blockLimit||c.document.getBody();do b=a&&a.getComputedStyle("back"==g?"background-color":"color")||"transparent";while("back"==g&&"transparent"==b&&a&&(a=a.getParent()));if(!b||"transparent"==b)b="#ffffff";this._.panel._.iframe.getFrameDocument().getById(k).setStyle("background-color",
b);return b}}})}function q(m,g,d){var h=[],i=j.colorButton_colors.split(","),k=c.plugins.colordialog&&!1!==j.colorButton_enableMore,a=i.length+(k?2:1),b=CKEDITOR.tools.addFunction(function(a,b){if("?"==a){var e=arguments.callee,d=function(a){this.removeListener("ok",d);this.removeListener("cancel",d);"ok"==a.name&&e(this.getContentElement("picker","selectedColor").getValue(),b)};c.openDialog("colordialog",function(){this.on("ok",d);this.on("cancel",d)})}else{c.focus();m.hide();c.fire("saveSnapshot");
c.removeStyle(new CKEDITOR.style(j["colorButton_"+b+"Style"],{color:"inherit"}));if(a){var f=j["colorButton_"+b+"Style"];f.childRule="back"==b?function(a){return p(a)}:function(a){return!(a.is("a")||a.getElementsByTag("a").count())||p(a)};c.applyStyle(new CKEDITOR.style(f,{color:a}))}c.fire("saveSnapshot")}});h.push('<a class="cke_colorauto" _cke_focus=1 hidefocus=true title="',f.auto,'" onclick="CKEDITOR.tools.callFunction(',b,",null,'",g,"');return false;\" href=\"javascript:void('",f.auto,'\')" role="option" aria-posinset="1" aria-setsize="',
a,'"><table role="presentation" cellspacing=0 cellpadding=0 width="100%"><tr><td><span class="cke_colorbox" id="',d,'"></span></td><td colspan=7 align=center>',f.auto,'</td></tr></table></a><table role="presentation" cellspacing=0 cellpadding=0 width="100%">');for(d=0;d<i.length;d++){0===d%8&&h.push("</tr><tr>");var e=i[d].split("/"),l=e[0],n=e[1]||l;e[1]||(l="#"+l.replace(/^(.)(.)(.)$/,"$1$1$2$2$3$3"));e=c.lang.colorbutton.colors[n]||n;h.push('<td><a class="cke_colorbox" _cke_focus=1 hidefocus=true title="',
e,'" onclick="CKEDITOR.tools.callFunction(',b,",'",l,"','",g,"'); return false;\" href=\"javascript:void('",e,'\')" role="option" aria-posinset="',d+2,'" aria-setsize="',a,'"><span class="cke_colorbox" style="background-color:#',n,'"></span></a></td>')}k&&h.push('</tr><tr><td colspan=8 align=center><a class="cke_colormore" _cke_focus=1 hidefocus=true title="',f.more,'" onclick="CKEDITOR.tools.callFunction(',b,",'?','",g,"');return false;\" href=\"javascript:void('",f.more,"')\"",' role="option" aria-posinset="',
a,'" aria-setsize="',a,'">',f.more,"</a></td>");h.push("</tr></table>");return h.join("")}function p(c){return"false"==c.getAttribute("contentEditable")||c.getAttribute("data-nostyle")}var j=c.config,f=c.lang.colorbutton;CKEDITOR.env.hc||(o("TextColor","fore",f.textColorTitle,10),o("BGColor","back",f.bgColorTitle,20))}});CKEDITOR.config.colorButton_colors="000,800000,8B4513,2F4F4F,008080,000080,4B0082,696969,B22222,A52A2A,DAA520,006400,40E0D0,0000CD,800080,808080,F00,FF8C00,FFD700,008000,0FF,00F,EE82EE,A9A9A9,FFA07A,FFA500,FFFF00,00FF00,AFEEEE,ADD8E6,DDA0DD,D3D3D3,FFF0F5,FAEBD7,FFFFE0,F0FFF0,F0FFFF,F0F8FF,E6E6FA,FFF";
CKEDITOR.config.colorButton_foreStyle={element:"span",styles:{color:"#(color)"},overrides:[{element:"font",attributes:{color:null}}]};CKEDITOR.config.colorButton_backStyle={element:"span",styles:{"background-color":"#(color)"}};