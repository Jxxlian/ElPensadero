let start = document.getElementById('start');
let pause = document.getElementById('pause');
let reset = document.getElementById('rest');

let wm = document.getElementById('w_minutes');
let ws = document.getElementById('w_seconds');

let bm = document.getElementById('b_minutes');
let bs = document.getElementById('b_seconds');

//store reference to a timer variable
let startTimer;
// variable to check if it's time for a long pause
let longPauseCounter = 0;
// variable to control alarm repeat
let alarmOnce = false;

function startAlarm() {    
    let sound = new Audio("sound/alarm.mp3");
    sound.play();    
}

start.addEventListener('click', function(){
    if(startTimer == undefined) {
        startTimer = setInterval(timer,1000)    
    } else {
        alert('contador ya iniciado');
    }
})

reset.addEventListener('click', function(){
    wm.innerText = "25";
    ws.innerText = "00";

    bm.innerHTML = "05";
    bs.innerText = "00"

    document.getElementById('counter').innerText = "0";
    startTimer = undefined;
})

pause.addEventListener('click', function(){
    stopInterval(startTimer);
    startTimer = undefined;
})

function timer(){
    //work countdown    
    if(ws.innerText != 0) {
        ws.innerText--;
    } else if(wm.innerText !=0 && ws.innerText == 0) {
        ws.innerText = 59;
        wm.innerText--;
    }
    //break countdown    
    if(wm.innerText == 0 && ws.innerText == 0) {        
        if(alarmOnce == false) {
            startAlarm();
            alarmOnce = true;
        }
        if(bs.innerText != 0) {
            bs.innerText--;
        } else if(bm.innerText !=0 && bs.innerText == 0) {
            bs.innerText = 59;
            bm.innerText--;
        }
    }

    //increment counter for each cycle of work/break completed
    if(wm.innerText == 0 && ws.innerText == 0 && bm.innerText == 0 && bs.innerText == 0) {
        alarmOnce = false;
        if(alarmOnce == false) {
            startAlarm();
            alarmOnce = true;
        }

        if(longPauseCounter != 4) {            
        wm.innerText = "25";
        ws.innerText = "00";

        bm.innerHTML = "05";
        bs.innerText = "00";
        
        longPauseCounter++;        
        document.getElementById('counter').innerText++;
        alarmOnce = false;
        } else {
            bm.innerHTML = "25";
            bs.innerText = "00"
            longPauseCounter="0"            
        }
    }
}

function stopInterval(){
    clearInterval(startTimer)
}