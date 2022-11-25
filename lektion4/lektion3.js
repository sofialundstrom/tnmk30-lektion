function changeColor(id) {
    let numberOfClicks = parseInt(document.getElementById("clickCounter").textContent);
    document.getElementById("clickCounter").textContent=numberOfClicks+1;

    if (id=="left") {
        document.getElementById("left").style.backgroundColor="#ff7d00";
        document.getElementById("mid").style.backgroundColor="#a6a6a6";
        document.getElementById("right").style.backgroundColor="#a6a6a6";
        
    } else if (id=="mid") {
        document.getElementById("mid").style.backgroundColor="#ff7d00";
        document.getElementById("left").style.backgroundColor="#a6a6a6";
        document.getElementById("right").style.backgroundColor="#a6a6a6";
    } else {
        document.getElementById("right").style.backgroundColor="#ff7d00";
        document.getElementById("mid").style.backgroundColor="#a6a6a6";
        document.getElementById("left").style.backgroundColor="#a6a6a6";
    }
}

function resetPage() {
    document.getElementById("clickCounter").textContent=0;
    document.getElementById("mid").style.backgroundColor="#ff7d00";
    document.getElementById("left").style.backgroundColor="#a6a6a6";
    document.getElementById("right").style.backgroundColor="#a6a6a6";
}
lektion2