const countdown = () => {
    const countDate = new Date("November 20, 2022 00:00:00").getTime();
    const now = new Date().getTime();
    const gap = countDate - now;
    // Time works 
    const second  = 1000;
    const minuts = second * 60;
    const hour = minuts * 60;
    const day = hour * 24;

    // calculate
    const textDay = Math.floor(gap / day);
    const textHour = Math.floor((gap % day) / hour)
    const textMinuts = Math.floor((gap % day) / minuts)
    const textSecond = Math.floor((gap % minuts) / second)


    // Display in DOM 
    document.querySelector ("#day").innerHTML = textDay;
    document.querySelector ("#hour").innerHTML = textHour;
    document.querySelector ("#minute").innerHTML = textMinuts;
    document.querySelector ("#second").innerHTML = textSecond;
};

setInterval(countdown, 1000)
