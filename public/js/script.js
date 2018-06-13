/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//cookie policy
function getCookie(a) {
    cName = "";
    var b = new Array();
    b = document.cookie.split("; ");
    for (bb = 0; bb < b.length; bb++) {
        var c = new Array();
        c = b[bb].split("=");
        if (c[0] === a) {
            cName = unescape(c[1]);
        }
    }
    return cName;
}

function setCookie(c, e, a, g, d, f) {
    var b = c + "=" + escape(e) + "; ";
    if (a) {
        b += "expires=" + a.toUTCString() + "; ";
    }
    if (g) {
        b += "path=" + g + "; ";
    }
    if (d) {
        b += "domain=" + d + "; ";
    }
    if (f) {
        b += "secure; ";
    }
    document.cookie = b;
}
function aP() {
    setHasVisited();
    k.style.display = "none";
}

function setHasVisited() {
    var a = new Date();
    a.setDate(a.getDate() + 5 * 365);
    setCookie("hasVisited", "true", a, "/");
}
//change the navigation class to hilight the active page
function activePage(){
    var pageName = $(location).attr('pathname').split('/')[$(location).attr('pathname').split('/').length-1],
        links =  $('nav > ul > li > a');
    for(var i =0, j = links.length;i<j;i++){
        var arr = links[i].href.split('/');
        if(arr[arr.length-1]===pageName){
          links[i].parentElement.className = "active";
          break;
      }
    }
}
window.onload = function(){
    var cookieValue = getCookie("hasVisited");
    if (cookieValue === "") {
        k = document.getElementById("cookiePolicy");
        k.style.display = "block";
    } else {
        setHasVisited();
    }
    activePage();
    console.log("If you like what you see why not email me at contact@jamesdewes.com");
};
