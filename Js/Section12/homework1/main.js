const button = document.querySelector("button");
const pE1 = document.getElementById("color");
const bgE1 = document.getElementById("container");

const color = ['Red', 'Green', 'Blue', 'Yellow', 'Pink', 'Purple', 'Gray', 'Chocolate', 'Coral', 'Cyan'];

button.addEventListener('click', changeBackground);

function changeBackground() {
    const colorsIndex = Math.floor(Math.random()*color.length);
    button.style.backgroundColor = color[colorsIndex];
    bgE1.style.backgroundColor = color[colorsIndex];
    pE1.innerHTML = color[colorsIndex];
}
