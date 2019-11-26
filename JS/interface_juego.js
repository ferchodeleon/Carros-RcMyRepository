

var fomularioConteoVehiculos = document.fomularioConteoVehiculos; // Forma de acceder al formulario en general
//var campoCantidad = document.fomularioConteoVehiculos.cantidadVehiculos; // Forma de acceder a un elemento, diferente a document.getElementById("cantidadVehiculos")
var seleccion = document.getElementsByName("preguntas");


for ( var i= 0; i < seleccion.length; i++ ){

    console.log("El elemento seleccionado es: " + seleccion[i].value + "\nSeleccion " + seleccion[i].checked);
}