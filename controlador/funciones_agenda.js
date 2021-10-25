function agregardatos(id_agenda, fecha_hora, placa, marca, producto, operario_id, valor, comision, observaciones){
    cadena = "id_agenda=" + id_agenda +
    "&fecha_hora=" + fecha_hora +
    "&placa=" + placa +
    "&marca=" + marca +
    "&producto=" + producto +
    "&operario_id=" + operario_id +
    "&valor=" + valor +
    "&comision=" + comision +
    "&observaciones=" + observaciones;

    accion = "registrar";
    mensaje_si = "Cliente agregado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}
function agregaform(datos) {
    d = datos.split('||');
    $('#id_agendau').val(d[0]);
    var date = new Date(d[1]);
    var ano = date.getFullYear();
    var mes = (date.getMonth()+1).toString();
    var dia = (date.getDay()+1).toString();
    var hora = (date.getHours()).toString();
    var minutos = date.getMinutes().toString();
    hora = date.getHours()+1<10? "0"+hora : hora;
    minutos = date.getMinutes()=== 0? "00" : minutos;
    minutos = date.getMinutes()<10? "0"+minutos : minutos;
    $('#fechau').val(ano+"-"+mes+"-10");
    $('#horau').val(hora+":"+minutos);
    $('#placau').val(d[2]);
    $('#marcau').val(d[3]);
    $('#productou').val(d[4]);
    $('#operario_idu').val(d[5]);
    $('#valoru').val(d[6]);
    $('#comisionu').val(d[7]);
    $('#observacionesu').val(d[8]);
}

function modificarCliente(){
    id_agenda = $('#id_agendau').val();
    fecha_hora = $('#fechau').val() +" "+ $('#horau').val();
    placa = $('#placau').val();
    marca = $('#marcau').val();
    producto = $('#productou').val();
    operario_id = $('#operario_idu').val();
    valor = $('#valoru').val();
    comision = $('#comisionu').val();
    observaciones = $('#observacionesu').val();
    cadena = "id_agenda=" + id_agenda +
    "&fecha_hora=" + fecha_hora +
    "&placa=" + placa +
    "&marca=" + marca +
    "&producto=" + producto +
    "&operario_id=" + operario_id +
    "&valor=" + valor +
    "&comision=" + comision +
    "&observaciones=" + observaciones;

    accion = "modificar";
    mensaje_si = "Cliente modificado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function preguntarSiNo(id_agenda) {
    var opcion = confirm("¿Esta seguro de eliminar el registro?");
    if (opcion == true) {
        alert("El registro será eliminado.");
        eliminarDatos(id_agenda);
    } else {
        alert("El proceso de eliminación del registro ha sido cancelado.");
    }
}

function eliminarDatos(id_agenda) {
    cadena = "id_agenda=" + id_agenda;

    accion = "eliminar";
    mensaje_si = "Cliente borrado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function a_ajax(cadena, accion, mensaje_si, mensaje_no){
    $.ajax({
        type: "POST",
        url: "../modelo/accionesAgenda.php?accion="+accion,
        data: cadena,
        success: function (r){
            if (r == 1) {
            $('#tabla').load('../vista/componentes/vista_agenda.php');
                alert(mensaje_si);
            } else {
                alert(mensaje_no);
            }
        }
    });
}
