function agregardatos(id_operario, identificacion, nombres, apellidos, observaciones){
    cadena = "id_operario=" + id_operario +
    "&identificacion=" + identificacion +
    "&nombres=" + nombres +
    "&apellidos=" + apellidos +
    "&observaciones=" + observaciones;

    accion = "registrar";
    mensaje_si = "Cliente agregado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}
function agregaform(datos) {
    d = datos.split('||');
    $('#id_operariou').val(d[0]);
    $('#identificacionu').val(d[1]);
    $('#nombresu').val(d[2]);
    $('#apellidosu').val(d[3]);
    $('#observacionesu').val(d[4]);
}

function modificarCliente(){
    id_operario = $('#id_operariou').val();
    identificacion = $('#identificacionu').val();
    nombres = $('#nombresu').val();
    apellidos = $('#apellidosu').val();
    observaciones = $('#observacionesu').val();
    cadena = "id_operario=" + id_operario +
    "&identificacion=" + identificacion +
    "&nombres=" + nombres +
    "&apellidos=" + apellidos +
    "&observaciones=" + observaciones;

    accion = "modificar";
    mensaje_si = "Cliente modificado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function preguntarSiNo(id_operario) {
    var opcion = confirm("¿Esta seguro de eliminar el registro?");
    if (opcion == true) {
        alert("El registro será eliminado.");
        eliminarDatos(id_operario);
    } else {
        alert("El proceso de eliminación del registro ha sido cancelado.");
    }
}

function eliminarDatos(id_operario) {
    cadena = "id_operario=" + id_operario;

    accion = "eliminar";
    mensaje_si = "Cliente borrado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function a_ajax(cadena, accion, mensaje_si, mensaje_no){
    $.ajax({
        type: "POST",
        url: "../modelo/accionesOperarios.php?accion="+accion,
        data: cadena,
        success: function (r){
            if (r == 1) {
            $('#tabla').load('../vista/componentes/vista_operarios.php');
                alert(mensaje_si);
            } else {
                alert(mensaje_no);
            }
        }
    });
}
