var saveButton=document.getElementById('save');
saveButton.addEventListener('click', saveImage );
function saveImage(){
  var data =canvas.toDataURL();
document.getElementById('canvasImg').alt = 'Съхрани снимката';
document.getElementById('canvasImg').src= data;
}
