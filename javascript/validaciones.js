let ver = document.querySelector('.ver');
let contra = document.querySelector('.contra');
let confirmar = document.querySelector('.confirmar')

ver.addEventListener('click',function(){
    if(contra.value){
        contra.type="text";
        confirmar.type="text";
    }
})