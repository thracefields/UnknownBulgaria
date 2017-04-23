var clearButton=document.getElementById("clear");
clearButton.addEventListener('click', clearAll);
function clearAll(){
context.clearRect(0, 0, canvas.width, canvas.height);
}
