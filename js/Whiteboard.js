const canvas = document.getElementById('whiteboard');
const ctx = canvas.getContext('2d');
const clear = document.getElementById('clear');

ctx.strokeStyle = '#000';
ctx.lineWidth = 10;
ctx.lineCap = 'round';

let isDrawing = false;
let lastX = 0;
let lastY = 0;

canvas.addEventListener('mousedown', (event) => {
    isDrawing = true;
    const {offsetX,offsetY} = event;
    lastX = offsetX;
    lastY = offsetY;
})

canvas.addEventListener('mousemove', (event) => {
    const {offsetX, offsetY} = event;
    if (isDrawing) {
        ctx.beginPath();
        ctx.moveTo(lastX,lastY);
        ctx.lineTo(offsetX,offsetY);
        ctx.stroke();
        lastX = offsetX;
        lastY = offsetY;
    }
})

canvas.addEventListener('mouseup',() => {
    isDrawing = false;
})

canvas.addEventListener('mouseleave',() => {
    isDrawing = false;
})

canvas.addEventListener('click',() => {

})

clear.addEventListener('click', (event) => {
    event.preventDefault();
    ctx.clearRect(0,0, canvas.clientWidth, canvas.clientHeight)
})