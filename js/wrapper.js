$(function()
{
 
$("#mostrarfiltro").click(function(event) { //asignamos el evento  de abrirse "slideToggle()" a el enlace mostrarfiltro
	event.preventDefault();
$("#masfiltros").slideToggle(); //evento que muestra el contenedor masfiltros
});

$("#mostrarfiltro2").click(function(event) { //asignamos el evento  de abrirse "slideToggle()" a el enlace mostrarfiltro
	event.preventDefault();
$("#masfiltros2").slideToggle(); //evento que muestra el contenedor masfiltros
});

$("#mostrarfiltro3").click(function(event) { //asignamos el evento  de abrirse "slideToggle()" a el enlace mostrarfiltro
	event.preventDefault();
$("#masfiltros3").slideToggle(); //evento que muestra el contenedor masfiltros
});

$("#mostrarfiltro4").click(function(event) { //asignamos el evento  de abrirse "slideToggle()" a el enlace mostrarfiltro
	event.preventDefault();
$("#masfiltros4").slideToggle(); //evento que muestra el contenedor masfiltros
});
 
$("#masfiltros a").click(function(event) { //asignamos el evento de cerrar al enlace contenido en mas filtros
event.preventDefault();
$("#masfiltros").slideUp(); //evento que oculta el contenedor masfiltros
});
});