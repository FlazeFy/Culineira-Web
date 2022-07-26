//Loading setting.
$.LoadingOverlay("show",
{
    image : "http://127.0.0.1:8000/assets/storyset/loading-1.gif",
    imageAnimation : ""  ,
    imageClass : "img-load",
    text : "Loading...",
    textColor : "#eb7336",
    textClass : "text-load",
});

setTimeout(function(){
    $.LoadingOverlay("hide");
}, 1000);
