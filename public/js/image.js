
var file =  document.getElementById('file');
var Image     =  document.getElementById('Image');
var imagesrc    =  document.getElementById('imagesrc');
file.onchange = function changeValue(){
    Image.src = window.URL.createObjectURL(this.files[0]);
    imagesrc.textContent = file.value;
}