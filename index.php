<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Whiteboard</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        #whiteboard-container {
            text-align: center;
        }

        #whiteboard {
            border: 2px solid #000;
            cursor: crosshair;
            margin-bottom: 10px;
        }

        #tools {
            text-align: center;
        }

        .tool {
            cursor: pointer;
            margin-right: 10px;
        }
    </style>
</head>
<body>
<div id="whiteboard-container">
    <canvas id="whiteboard" width="800" height="600"></canvas>
    <div id="tools">
        <button class="tool" id="pencil">Pencil</button>
        <button class="tool" id="eraser">Eraser</button>
        <input type="color" id="colorPicker" value="#000">
        <input type="range" id="thickness" min="1" max="50" value="10">
        <button id="clear">Clear</button>
        <button id="undo">Undo</button>
    </div>
</div>

<script>
    const canvas = document.getElementById('whiteboard');
    const ctx = canvas.getContext('2d');
    const clear = document.getElementById('clear');
    const pencilBtn = document.getElementById('pencil');
    const eraserBtn = document.getElementById('eraser');
    const colorPicker = document.getElementById('colorPicker');
    const thicknessRange = document.getElementById('thickness');
    const undoBtn = document.getElementById('undo');

    let isDrawing = false;
    let lastX = 0;
    let lastY = 0;
    let currentColor = '#000';
    let currentThickness = 10;
    let strokes = [];

    ctx.strokeStyle = currentColor;
    ctx.lineWidth = currentThickness;
    ctx.lineCap = 'round';

    function startDrawing(event) {
        isDrawing = true;
        const { offsetX, offsetY } = event;
        lastX = offsetX;
        lastY = offsetY;
    }

    function draw(event) {
        const { offsetX, offsetY } = event;
        if (isDrawing) {
            ctx.beginPath();
            ctx.moveTo(lastX, lastY);
            ctx.lineTo(offsetX, offsetY);
            ctx.stroke();
            lastX = offsetX;
            lastY = offsetY;
        }
    }

    function stopDrawing() {
        isDrawing = false;
        strokes.push(ctx.getImageData(0, 0, canvas.width, canvas.height));
    }

    function changeTool(tool) {
        if (tool === 'pencil') {
            ctx.globalCompositeOperation = 'source-over'; // Normal drawing mode
            ctx.strokeStyle = currentColor;
        } else if (tool === 'eraser') {
            ctx.globalCompositeOperation = 'destination-out'; // Erase mode
            ctx.strokeStyle = '#ffffff'; // Use white color to erase
        }
    }

    function updateColor() {
        currentColor = colorPicker.value;
        ctx.strokeStyle = currentColor;
    }

    function updateThickness() {
        currentThickness = thicknessRange.value;
        ctx.lineWidth = currentThickness;
    }

    function undo() {
        if (strokes.length > 0) {
            strokes.pop();
            redraw();
        }
    }

    function redraw() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        strokes.forEach(stroke => {
            ctx.putImageData(stroke, 0, 0);
        });
    }

    canvas.addEventListener('mousedown', startDrawing);
    canvas.addEventListener('mousemove', draw);
    canvas.addEventListener('mouseup', stopDrawing);
    canvas.addEventListener('mouseleave', stopDrawing);

    pencilBtn.addEventListener('click', () => changeTool('pencil'));
    eraserBtn.addEventListener('click', () => changeTool('eraser'));
    colorPicker.addEventListener('input', updateColor);
    thicknessRange.addEventListener('input', updateThickness);
    undoBtn.addEventListener('click', undo);

    clear.addEventListener('click', () => {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        strokes = [];
    });
</script>
</body>
</html>
