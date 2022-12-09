var btn = document.querySelector(".submit1");

btn.addEventListener("click", function(){

    var div = document.querySelector(".etapa2");

    if(div.style.display === "block"){
        div.style.display = "none";
    }else {
        div.style.display = "none"
    }
})