let index = true;
function spin(){
    if (index){
        document.getElementById("parent").style.transition = "3s";
        document.getElementById("parent").style.transform = "rotate(360deg)";
        index = false;
    }else{
        document.getElementById("parent").style.transition = "3s";
        document.getElementById("parent").style.transform = "rotate(0deg)";
        index = true;
    }
}