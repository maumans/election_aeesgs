
window.addEventListener('load',function () {
    oui.checked=false;
    non.checked=false;
})
var divoui=document.querySelector("#divoui");
var divnon=document.querySelector("#divnon");

var oui=document.querySelector("#oui");
var non=document.querySelector("#non");

divoui.addEventListener('click',function (e) {
    oui.checked?oui.checked=false:oui.checked=true;
    non.checked=false;

    if(divoui.classList.contains("divbtn"))
    {

        divoui.classList.remove("divbtn");
        divoui.classList.add("divbtnactiveoui");

        divnon.classList.add("divbtn");
        divnon.classList.remove("divbtnactivenon");
    }
    else
    {
        divoui.classList.add("divbtn");
        divoui.classList.remove("divbtnactiveoui");
    }

});

divnon.addEventListener('click',function () {
    non.checked?non.checked=false:non.checked=true;
    oui.checked=false;

    if(divnon.classList.contains("divbtn"))
    {
        divnon.classList.remove("divbtn");
        divnon.classList.add("divbtnactivenon");

        divoui.classList.add("divbtn");
        divoui.classList.remove("divbtnactiveoui");
    }
    else
    {
        divnon.classList.add("divbtn");
        divnon.classList.remove("divbtnactivenon");
    }
});
