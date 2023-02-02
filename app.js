const colorRing1 = document.querySelector (".color_ring1");
const colorRing2 = document.querySelector (".color_ring2");
const colorRing3 = document.querySelector (".color_ring3");
const colorRing4 = document.querySelector (".color_ring4");

const selectorColor1 = document.querySelector (".color-select1");
const selectorColor2 = document.querySelector (".color-select2");
const selectorColor3 = document.querySelector (".color-select3");
const selectorColor4 = document.querySelector (".color-select4");

selectorColor1.addEventListener("change", colorMix1);
selectorColor2.addEventListener("change", colorMix2);
selectorColor3.addEventListener("change", colorMix3);
selectorColor4.addEventListener("change", colorMix4);

function colorMix1() {
    if (selectorColor1.value == 0) {
        colorRing1.style.backgroundColor = "black"
    }
    if (selectorColor1.value == 1) {
        colorRing1.style.backgroundColor = "brown"
    }
    if (selectorColor1.value == 2) {
        colorRing1.style.backgroundColor = "red"
    }
    if (selectorColor1.value == 3) {
        colorRing1.style.backgroundColor = "orange"
    }
    if (selectorColor1.value == 4) {
        colorRing1.style.backgroundColor = "yellow"
    }
    if (selectorColor1.value == 5) {
        colorRing1.style.backgroundColor = "green"
    }
    if (selectorColor1.value == 6) {
        colorRing1.style.backgroundColor = "blue"
    }
    if (selectorColor1.value == 7) {
        colorRing1.style.backgroundColor = "violet"
    }
    if (selectorColor1.value == 8) {
        colorRing1.style.backgroundColor = "grey"
    }
    if (selectorColor1.value == 9) {
        colorRing1.style.backgroundColor = "white"
    }
}

function colorMix2 () {
    if (selectorColor2.value == 0) {
        colorRing2.style.backgroundColor = "black"
    }
    if (selectorColor2.value == 1) {
        colorRing2.style.backgroundColor = "brown"
    }
    if (selectorColor2.value == 2) {
        colorRing2.style.backgroundColor = "red"
    }
    if (selectorColor2.value == 3) {
        colorRing2.style.backgroundColor = "orange"
    }
    if (selectorColor2.value == 4) {
        colorRing2.style.backgroundColor = "yellow"
    }
    if (selectorColor2.value == 5) {
        colorRing2.style.backgroundColor = "green"
    }
    if (selectorColor2.value == 6) {
        colorRing2.style.backgroundColor = "blue"
    }
    if (selectorColor2.value == 7) {
        colorRing2.style.backgroundColor = "violet"
    }
    if (selectorColor2.value == 8) {
        colorRing2.style.backgroundColor = "grey"
    }
    if (selectorColor2.value == 9) {
        colorRing2.style.backgroundColor = "white"
    }    
}

function colorMix3 () {
    if (selectorColor3.value == 1) {
        colorRing3.style.backgroundColor = "black"
    }
    if (selectorColor3.value == 10) {
        colorRing3.style.backgroundColor = "brown"
    }
    if (selectorColor3.value == 100) {
        colorRing3.style.backgroundColor = "red"
    }
    if (selectorColor3.value == 1000) {
        colorRing3.style.backgroundColor = "orange"
    }
    if (selectorColor3.value == 10000) {
        colorRing3.style.backgroundColor = "yellow"
    }
    if (selectorColor3.value == 100000) {
        colorRing3.style.backgroundColor = "green"
    }
    if (selectorColor3.value == 1000000) {
        colorRing3.style.backgroundColor = "blue"
    }
    if (selectorColor3.value == 10000000) {
        colorRing3.style.backgroundColor = "violet"
    }
    if (selectorColor3.value == 100000000) {
        colorRing3.style.backgroundColor = "grey"
    }
    if (selectorColor3.value == 1000000000) {
        colorRing3.style.backgroundColor = "white"
    }
    if (selectorColor3.value == 0.01) {
        colorRing3.style.backgroundColor = "silver"
    }
    if (selectorColor3.value == 0.1) {
        colorRing3.style.backgroundColor = "gold"
    }

}



function colorMix4 () {
   
    if (selectorColor4.value == "-(+ ou -) 1%") {
        colorRing4.style.backgroundColor = "brown"
    }
    if (selectorColor4.value == "(+ ou -) 2%") {
        colorRing4.style.backgroundColor = "red"
    }
    if (selectorColor4.value == "-(+ ou -) 0,5%") {
        colorRing4.style.backgroundColor = "green"
    }
    if (selectorColor4.value == "-(+ ou -) 0,25%") {
        colorRing4.style.backgroundColor = "blue"
    }
    if (selectorColor4.value == "-(+ ou -) 0,01%") {
        colorRing4.style.backgroundColor = "violet"
    }
    if (selectorColor4.value == "-(+ ou -) 10%") {
        colorRing4.style.backgroundColor = "silver"
    }
    if (selectorColor4.value == "-(+ ou -) 5%") {
        colorRing4.style.backgroundColor = "gold"
    }
        if (selectorColor4.value == "-(+ ou -) 0,005%") {
            colorRing4.style.backgroundColor = "grey"}
    }