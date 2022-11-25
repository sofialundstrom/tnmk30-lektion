function clock() {
    let date = new Date();
    let hour = date.getHours();
    let min = date.getMinutes();
    hour = (hour < 10) ? "0" + hour : hour;
    min = (min < 10) ? "0" + min : min; 

    let time = hour + ":" + min;

    document.getElementById("clock").textContent = time;
    //let t = setInterval(clock(), 10000);

}

function changeBackground() {
    document.body.style.backgroundColor = "#4EA5D9";

}

function onLoadSite(){
    clock();
    uppdate = setInterval(clock, 1000);
  
}


function changeFont() {
    document.getElementById("rubrik").style.fontFamily = "Gill sans";

}