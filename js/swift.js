parcelRequire=function(e,r,t,n){var i,o="function"==typeof parcelRequire&&parcelRequire,u="function"==typeof require&&require;function f(t,n){if(!r[t]){if(!e[t]){var i="function"==typeof parcelRequire&&parcelRequire;if(!n&&i)return i(t,!0);if(o)return o(t,!0);if(u&&"string"==typeof t)return u(t);var c=new Error("Cannot find module '"+t+"'");throw c.code="MODULE_NOT_FOUND",c}p.resolve=function(r){return e[t][1][r]||r},p.cache={};var l=r[t]=new f.Module(t);e[t][0].call(l.exports,p,l,l.exports,this)}return r[t].exports;function p(e){return f(p.resolve(e))}}f.isParcelRequire=!0,f.Module=function(e){this.id=e,this.bundle=f,this.exports={}},f.modules=e,f.cache=r,f.parent=o,f.register=function(r,t){e[r]=[function(e,r){r.exports=t},{}]};for(var c=0;c<t.length;c++)try{f(t[c])}catch(e){i||(i=e)}if(t.length){var l=f(t[t.length-1]);"object"==typeof exports&&"undefined"!=typeof module?module.exports=l:"function"==typeof define&&define.amd?define(function(){return l}):n&&(this[n]=l)}if(parcelRequire=f,i)throw i;return f}({"fa2p":[function(require,module,exports) {
function e(){var e=["#97C774","#B63E98","#D18E62","#DB3E41","#1BABA5"],t=document.querySelector(".content h1");t.textContent=", I'm "+t.textContent+". ";for(var n=document.createElement("span"),a="Hello".split(""),c=0;c<a.length;c++){var d=a[c],o=document.createElement("span");o.style.color=e[c%e.length],o.textContent=d,n.appendChild(o)}t.insertBefore(n,t.childNodes[0]||null);var r=document.createElement("span");r.className="cursor",r.textContent="|",t.appendChild(r)}function t(){for(var e=document.querySelectorAll(".content h2"),t=0;t<e.length;t++){var n=e[t],a=document.createElement("span");a.textContent="print",a.className="print-cmd";var c=document.createTextNode("("),d=document.createElement("span");d.textContent='"'+n.textContent+'"',d.className="print-txt";var o=document.createTextNode(")");n.innerHTML="",n.appendChild(a),n.appendChild(c),n.appendChild(d),n.appendChild(o)}}function n(){var e=document.querySelector(".content .email"),t=document.createElement("span");t.className="let",t.textContent="let";var n=document.createTextNode(" Contact = "),a=document.createElement("span");a.className="func-cmd",a.textContent="email";var c=document.createTextNode('("'),d=e.querySelector("a"),o=document.createTextNode('", '),r=document.createElement("span");r.className="let-var",r.textContent="25";var l=document.createTextNode(")");e.innerHTML="",e.appendChild(t),e.appendChild(n),e.appendChild(a),e.appendChild(c),e.appendChild(d),e.appendChild(o),e.appendChild(r),e.appendChild(l)}function a(){var e=document.createElement("h3"),t=document.createElement("span");t.className="let",t.textContent="let";var n=document.createTextNode(" Me = "),a=document.createElement("span");a.className="func-cmd",a.textContent="links";var c=document.createTextNode("([");e.appendChild(t),e.appendChild(n),e.appendChild(a),e.appendChild(c),e.style.marginBottom="0",document.querySelector(".content .contact").insertAdjacentElement("beforeBegin",e),e=document.createElement("h3");var d=document.createTextNode("], "),o=document.createElement("span");o.className="let-var",o.textContent=Math.round(Math.random())?"true":"false";var r=document.createTextNode(")");e.appendChild(d),e.appendChild(o),e.appendChild(r),e.style.marginTop="0",document.querySelector(".content .contact").insertAdjacentElement("afterEnd",e)}function c(){var e=document.querySelector(".content .featured"),t=document.createElement("span");t.className="let",t.textContent="class";var n=document.createElement("span");n.className="print-cmd",n.textContent=" FeaturedProjects ";var a=document.createElement("span");a.className="func-cmd",a.textContent="{",e.innerHTML="",e.appendChild(t),e.appendChild(n),e.appendChild(a);var c=document.createElement("h3"),d=document.createElement("span");d.className="func-cmd",d.textContent="} ";var o=document.createElement("span");o.className="comment",o.textContent="End FeaturedProjects class",c.appendChild(d),c.appendChild(o),document.querySelector(".content .projects").insertAdjacentElement("afterEnd",c)}window._theme=function(){delete window._theme,e(),t(),n(),a(),c()};
},{}]},{},["fa2p"], null)
//# sourceMappingURL=swift.js.map