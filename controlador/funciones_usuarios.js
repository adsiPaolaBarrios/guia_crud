function agregardatos(id_usuario, identificacion, nombres, apellidos, usuario, contrasena, email, telefono, rol, estado, departamento, ciudad){
    cadena = "id_usuario=" + id_usuario +
    "&identificacion=" + identificacion +
    "&nombres=" + nombres +
    "&apellidos=" + apellidos +
    "&usuario=" + usuario +
    "&contrasena=" + contrasena +
    "&email=" + email +
    "&telefono=" + telefono +
    "&rol=" + rol +
    "&estado=" + estado +
    "&departamento=" + departamento +
    "&ciudad=" + ciudad;

    accion = "registrar";
    mensaje_si = "Cliente agregado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}
function agregaform(datos) {
    d = datos.split('||');
    $('#id_usuariou').val(d[0]);
    $('#identificacionu').val(d[1]);
    $('#nombresu').val(d[2]);
    $('#apellidosu').val(d[3]);
    $('#usuariou').val(d[4]);
    $('#contrasenau').val(d[5]);
    $('#emailu').val(d[6]);
    $('#telefonou').val(d[7]);
    $('#rolu').val(d[8]);
    $('#estadou').val(d[9]);
    $('#departamentou').val(d[10]);
    $('#ciudadu').val(d[11]);
}

function modificarCliente(){
    id_usuario = $('#id_usuariou').val();
    identificacion = $('#identificacionu').val();
    nombres = $('#nombresu').val();
    apellidos = $('#apellidosu').val();
    usuario = $('#usuariou').val();
    contrasena = $('#contrasenau').val();
    email = $('#emailu').val();
    telefono = $('#telefonou').val();
    rol = $('#rolu').val();
    estado = $('#estadou').val();
    departamento = $('#departamentou').val();
    ciudad = $('#ciudadu').val();
    cadena = "id_usuario=" + id_usuario +
    "&identificacion=" + identificacion +
    "&nombres=" + nombres +
    "&apellidos=" + apellidos +
    "&usuario=" + usuario +
    "&contrasena=" + contrasena +
    "&email=" + email +
    "&telefono=" + telefono +
    "&rol=" + rol +
    "&estado=" + estado +
    "&departamento=" + departamento +
    "&ciudad=" + ciudad;

    accion = "modificar";
    mensaje_si = "Cliente modificado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function preguntarSiNo(id_usuario) {
    var opcion = confirm("¿Esta seguro de eliminar el registro?");
    if (opcion == true) {
        alert("El registro será eliminado.");
        eliminarDatos(id_usuario);
    } else {
        alert("El proceso de eliminación del registro ha sido cancelado.");
    }
}

function eliminarDatos(id_usuario) {
    cadena = "id_usuario=" + id_usuario;

    accion = "eliminar";
    mensaje_si = "Cliente borrado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function a_ajax(cadena, accion, mensaje_si, mensaje_no){
    $.ajax({
        type: "POST",
        url: "../modelo/accionesUsuarios.php?accion="+accion,
        data: cadena,
        success: function (r){
            if (r == 1) {
            $('#tabla').load('../vista/componentes/vista_usuarios.php');
                alert(mensaje_si);
            } else {
                alert(mensaje_no);
            }
        }
    });
}
