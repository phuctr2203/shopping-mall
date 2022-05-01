//Declaring the variables

let slidestore1 = document.getElementsByClassName("slide-store1");
let slidestore2 = document.getElementsByClassName("slide-store2");
let slider1 = document.getElementById("slider1");
let slider2 = document.getElementById("slider2");

//Creating the autoplay function for the first carousel

const maxScrollLeft1 = slider1.scrollWidth - slider1.clientWidth;

function Autoplay1() {
    if (slider1.scrollLeft > (maxScrollLeft1 - 1)) {
        slider1.scrollLeft -= maxScrollLeft1;
    } 
    else {
        slider1.scrollLeft += 1;
    }
}

//Making the first autoplay carousel stop on hover, then continue scrolling on mouseout

let run1 = setInterval(Autoplay1, 10);

for (let i = 0; i < slidestore1.length; i++) {
    slidestore1[i].addEventListener("mouseover", () => {
        clearInterval(run1);
    })
    slidestore1[i].addEventListener("mouseout", () => {
        return run1 = setInterval(Autoplay1, 10);
    })
}

//Creating the autoplay function for the second carousel

const maxScrollLeft2 = slider2.scrollWidth - slider2.clientWidth;

function Autoplay2() {
    if (slider2.scrollLeft > (maxScrollLeft2 - 1)) {
        slider2.scrollLeft -= maxScrollLeft2;
    } 
    else {
        slider2.scrollLeft += 1;
    }
}

//Making the second autoplay carousel stop on hover, then continue scrolling on mouseout

let run2 = setInterval(Autoplay2, 10);

for (let i = 0; i < slidestore2.length; i++) {
    slidestore2[i].addEventListener("mouseover", () => {
        clearInterval(run2);
    })
    slidestore2[i].addEventListener("mouseout", () => {
        return run2 = setInterval(Autoplay2, 10);
    })
}