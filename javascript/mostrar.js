let panel = document.querySelector('.panel');

let botonLunes = document.querySelector('.botonLunes');
let botonMartes = document.querySelector('.botonMartes');
let botonMiercoles = document.querySelector('.botonMiercoles');
let botonJueves = document.querySelector('.botonJueves');
let botonViernes = document.querySelector('.botonViernes');
let botonSabado = document.querySelector('.botonSabado');
let botonDomingo = document.querySelector('.botonDomingo');


let botonPanelLunes = document.querySelector('.panelLunes');
let botonPanelMartes = document.querySelector('.panelMartes');
let botonPanelMiercoles = document.querySelector('.panelMiercoles');
let botonPanelJueves = document.querySelector('.panelJueves');
let botonPanelViernes = document.querySelector('.panelViernes');
let botonPanelSabado = document.querySelector('.panelSabado');
let botonPanelDomingo = document.querySelector('.panelDomingo');

let lunes = document.querySelector('.lunes');
let martes = document.querySelector('.martes');
let miercoles = document.querySelector('.miercoles');
let jueves = document.querySelector('.jueves');
let viernes = document.querySelector('.viernes');
let sabado = document.querySelector('.sabado');
let domingo = document.querySelector('.domingo');

//LUNES--------------------------------------------------

botonLunes.addEventListener('click',function(){

    panel.classList.remove("aparecer");
    panel.classList.add("desaparecer");

    lunes.classList.remove("desaparecer")
    lunes.classList.add("aparecer")
})

botonPanelLunes.addEventListener('click',function(){
    panel.classList.remove("desaparecer");
    panel.classList.add("aparecer");

    lunes.classList.remove("aparecer")
    lunes.classList.add("desaparecer")
})

//MARTES----------------------------------------------------

botonMartes.addEventListener('click',function(){

    panel.classList.remove("aparecer");
    panel.classList.add("desaparecer");

    martes.classList.remove("desaparecer")
    martes.classList.add("aparecer")

})

botonPanelMartes.addEventListener('click',function(){

    panel.classList.remove("desaparecer");
    panel.classList.add("aparecer");

    martes.classList.remove("aparecer")
    martes.classList.add("desaparecer")

})

//MIERCOLES--------------------------------------------------

botonMiercoles.addEventListener('click',function(){

    panel.classList.remove("aparecer");
    panel.classList.add("desaparecer");

    miercoles.classList.remove("desaparecer")
    miercoles.classList.add("aparecer")

})

botonPanelMiercoles.addEventListener('click',function(){

    panel.classList.remove("desaparecer");
    panel.classList.add("aparecer");

    miercoles.classList.remove("aparecer")
    miercoles.classList.add("desaparecer")

})

//JUEVES-----------------------------------------------------

botonJueves.addEventListener('click',function(){

    panel.classList.remove("aparecer");
    panel.classList.add("desaparecer");

    jueves.classList.remove("desaparecer")
    jueves.classList.add("aparecer")

})

botonPanelJueves.addEventListener('click',function(){

    panel.classList.remove("desaparecer");
    panel.classList.add("aparecer");

    jueves.classList.remove("aparecer")
    jueves.classList.add("desaparecer")

})

//VIERNES-----------------------------------------------------

botonViernes.addEventListener('click',function(){

    panel.classList.remove("aparecer");
    panel.classList.add("desaparecer");

    viernes.classList.remove("desaparecer")
    viernes.classList.add("aparecer")

})

botonPanelViernes.addEventListener('click',function(){

    panel.classList.remove("desaparecer");
    panel.classList.add("aparecer");

    viernes.classList.remove("aparecer")
    viernes.classList.add("desaparecer")

})

//SABADO------------------------------------------------------

botonSabado.addEventListener('click',function(){

    panel.classList.remove("aparecer");
    panel.classList.add("desaparecer");

    sabado.classList.remove("desaparecer")
    sabado.classList.add("aparecer")

})

botonPanelSabado.addEventListener('click',function(){

    panel.classList.remove("desaparecer");
    panel.classList.add("aparecer");

    sabado.classList.remove("aparecer")
    sabado.classList.add("desaparecer")

})

//DOMINGO-----------------------------------------------------

botonDomingo.addEventListener('click',function(){

    panel.classList.remove("aparecer");
    panel.classList.add("desaparecer");

    domingo.classList.remove("desaparecer")
    domingo.classList.add("aparecer")

})

botonPanelDomingo.addEventListener('click',function(){

    panel.classList.remove("desaparecer");
    panel.classList.add("aparecer");

    domingo.classList.remove("aparecer")
    domingo.classList.add("desaparecer")

})

//FLECHA DERECHA 
//LUNES

let derechaLunes = document.querySelector('.derechaLunes');

derechaLunes.addEventListener('click',function(){
    lunes.classList.remove("aparecer");
    lunes.classList.add("desaparecer");

    martes.classList.remove("desaparecer")
    martes.classList.add("aparecer")
})

//MARTES

let derechaMartes = document.querySelector('.derechaMartes');

derechaMartes.addEventListener('click',function(){
    martes.classList.remove("aparecer");
    martes.classList.add("desaparecer");

    miercoles.classList.remove("desaparecer")
    miercoles.classList.add("aparecer")
})

//MIERCOLES

let derechaMiercoles = document.querySelector('.derechaMiercoles');

derechaMiercoles.addEventListener('click',function(){
    miercoles.classList.remove("aparecer");
    miercoles.classList.add("desaparecer");

    jueves.classList.remove("desaparecer")
    jueves.classList.add("aparecer")
})

//JUEVES

let derechaJueves = document.querySelector('.derechaJueves');

derechaJueves.addEventListener('click',function(){
    jueves.classList.remove("aparecer");
    jueves.classList.add("desaparecer");

    viernes.classList.remove("desaparecer")
    viernes.classList.add("aparecer")
})

//VIERNES

let derechaViernes = document.querySelector('.derechaViernes');

derechaViernes.addEventListener('click',function(){
    viernes.classList.remove("aparecer");
    viernes.classList.add("desaparecer");

    sabado.classList.remove("desaparecer")
    sabado.classList.add("aparecer")
})  

//SABADO

let derechaSabado = document.querySelector('.derechaSabado');

derechaSabado.addEventListener('click',function(){
    sabado.classList.remove("aparecer");
    sabado.classList.add("desaparecer");

    domingo.classList.remove("desaparecer")
    domingo.classList.add("aparecer")
})  

//DOMINGO 

let derechaDomingo = document.querySelector('.derechaDomingo');

derechaDomingo.addEventListener('click',function(){
    domingo.classList.remove("aparecer");
    domingo.classList.add("desaparecer");

    lunes.classList.remove("desaparecer")
    lunes.classList.add("aparecer")
})  

//FLECHA IZQUIERDA

//LUNES

let izquierdaLunes = document.querySelector('.izquierdaLunes');

izquierdaLunes.addEventListener('click',function(){
    lunes.classList.remove("aparecer");
    lunes.classList.add("desaparecer");

    domingo.classList.remove("desaparecer")
    domingo.classList.add("aparecer")
})

//MARTES

let izquierdaMartes = document.querySelector('.izquierdaMartes');

izquierdaMartes.addEventListener('click',function(){
    martes.classList.remove("aparecer");
    martes.classList.add("desaparecer");

    lunes.classList.remove("desaparecer")
    lunes.classList.add("aparecer")
})

//MIERCOLES

let izquierdaMiercoles = document.querySelector('.izquierdaMiercoles');

izquierdaMiercoles.addEventListener('click',function(){
    miercoles.classList.remove("aparecer");
    miercoles.classList.add("desaparecer");

    martes.classList.remove("desaparecer")
    martes.classList.add("aparecer")
})

//JUEVES

let izquierdaJueves = document.querySelector('.izquierdaJueves');

izquierdaJueves.addEventListener('click',function(){
    jueves.classList.remove("aparecer");
    jueves.classList.add("desaparecer");

    miercoles.classList.remove("desaparecer")
    miercoles.classList.add("aparecer")
})

//VIERNES

let izquierdaViernes = document.querySelector('.izquierdaViernes');

izquierdaViernes.addEventListener('click',function(){
    viernes.classList.remove("aparecer");
    viernes.classList.add("desaparecer");

    jueves.classList.remove("desaparecer")
    jueves.classList.add("aparecer")
})  

//SABADO

let izquierdaSabado = document.querySelector('.izquierdaSabado');

izquierdaSabado.addEventListener('click',function(){
    sabado.classList.remove("aparecer");
    sabado.classList.add("desaparecer");

    viernes.classList.remove("desaparecer")
    viernes.classList.add("aparecer")
})  

//DOMINGO 

let izquierdaDomingo = document.querySelector('.izquierdaDomingo');

izquierdaDomingo.addEventListener('click',function(){
    domingo.classList.remove("aparecer");
    domingo.classList.add("desaparecer");

    sabado.classList.remove("desaparecer")
    sabado.classList.add("aparecer")
})  

