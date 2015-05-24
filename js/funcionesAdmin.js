function bloquear_id() {
    $("#id_ciudad").attr("readonly", true);
    $("#id_ciudad").css("background", "lightseagreen");
    $("#id_carta").attr("readonly", true);
    $("#id_carta").css("background", "lightseagreen");
    $("#id_sector").attr("readonly", true);
    $("#id_sector").css("background", "lightseagreen");

    reporte_ciudad();
    reporte_carta();
    //reporte_usuario();
    cargar_ciudades();
    reporte_sector();
}
//TODO SECTOR
function cargar_ciudades() {
    //combobox
    $.post(
            base_url + "controllerAdmin/cargar_ciudades",
            {},
            function(ruta, datos) {
                $("#sector_ciudad").html(ruta, datos);
            }
    );
}
function guardar_sector() {
    var s_c = $("#sector_ciudad").val();
    var nombre = $("#nombre_sector").val();
    var obs = $("#obs_sector").val();
    var estado = $("#estado_sector").val();
    if (estado == 'SELECCIONE' || nombre == '') {
        alerta('Faltan datos!!');
    } else {
        if (obs == '') {
            obs = 'sin observacion';
        }
        $.post(
                base_url + "controllerAdmin/guardar_sector",
                {s_c: s_c, nombre: nombre, obs: obs, estado: estado},
        function(data) {
            if (data.valor == 0) {
                bien('Sector agregado con exito!');
                $("#obs_sector").val("");
                $("#nombre_sector").val("");
                $("#estado_sector").val("SELECCIONE");
                reporte_sector();
            } else {
                error("sector ya existe!!");
            }
        }, 'json'
                );
    }
}
function reporte_sector() {
    $.post(
            base_url + "controllerAdmin/reporte_sector",
            {},
            function(ruta, datos) {
                $("#reporte_sector").hide();
                $("#reporte_sector").html(ruta, datos);
                $("#reporte_sector").show('slow');
            }
    );
}
function cargar_sector(id, nombre_s, nombre_c, obs, estado) {
    $("#id_sector").val(id);
    $("#nombre_sector").val(nombre_s);
    $("#sector_ciudad").val(nombre_c);
    $("#obs_sector").val(obs);
    $("#estado_sector").val(estado);
    $("#actualizar_sector").button("enable");
    $("#guardar_sector").button("disable");
}
function actualizar_sector() {
    var id = $("#id_sector").val();
    var s_c = $("#sector_ciudad").val();
    var nombre = $("#nombre_sector").val();
    var obs = $("#obs_sector").val();
    var estado = $("#estado_sector").val();
    if (estado == 'SELECCIONE' || nombre == '') {
        alerta('Faltan datos!!');
    } else {
        if (obs == '') {
            obs = 'sin observacion';
        }
        $.post(
                base_url + "controllerAdmin/actualizar_sector",
                {id: id, s_c: s_c, nombre: nombre, obs: obs, estado: estado},
        function(data) {
            if (data.valor == 0) {
                bien('Sector actualizado con exito!');
                $("#id_sector").val("");
                $("#obs_sector").val("");
                $("#nombre_sector").val("");
                $("#estado_sector").val("SELECCIONE");
                $("#actualizar_sector").button("disable");
                $("#guardar_sector").button("enable");    
                reporte_sector();
            } else {
                error("error al actualizar!!");
            }
        }, 'json'
                );
    }
}
function eliminar_sector(id) {
    alerta(id);
    $.post(
            base_url + "controllerAdmin/eliminar_sector", {id: id},
            function(data){                
                if (data.valor == 0) {
                    alerta(data.valor)
                    bien("Sector eliminado correctamente");
                }else{
                    error("El sector se esta utilizando");
                };
            },'json'
    );
    reporte_sector();
}
function reporte_usuario() {
    $.post(
            base_url + "controllerAdmin/reporte_usuario",
            {},
            function(ruta, datos) {
                $("#reporte_usuario").hide();
                $("#reporte_usuario").html(ruta, datos);
                $("#reporte_usuario").show('slow');
            }
    );
}
//TODO CIUDAD
function guardar_ciudad() {
    var tipo = $("#tipo_ciudad").val();
    var nombre = $("#nombre_ciudad").val();
    var obs = $("#obs_ciudad").val();
    var estado = $("#estado_ciudad").val();
    if (estado == 'SELECCIONE' || nombre == '' || tipo == 'SELECCIONE') {
        alerta('Faltan datos!!');
    } else {
        if (obs == '') {
            obs = 'sin observacion';
        }
        $.post(
                base_url + "controllerAdmin/guardar_ciudad",
                {tipo: tipo, nombre: nombre, obs: obs, estado: estado},
        function(data) {
            if (data.valor == 0) {
                bien('ciudad agregada con exito!');
                $("#obs_ciudad").val("");
                $("#nombre_ciudad").val("");
                $("#estado_ciudad").val("SELECCIONE");
                $("#tipo_ciudad").val("SELECCIONE");
                reporte_ciudad();
            } else {
                error("ciudad ya existe!!");
            }
        }, 'json'
                );
    }
}
function reporte_ciudad() {
    $.post(
            base_url + "controllerAdmin/reporte_ciudad",
            {},
            function(ruta, datos) {
                $("#reporte_ciudad").hide();
                $("#reporte_ciudad").html(ruta, datos);
                $("#reporte_ciudad").show('slow');
            }
    );
}
function eliminar_ciudad(id_ciudad) {    
    $.post(
            base_url + "controllerAdmin/eliminar_ciudad", {id_ciudad: id_ciudad},
            function(data){                
                if (data.valor == 0) {
                    bien("Ciudad eliminada correctamente");
                }else{
                    error("La ciudad se esta utilizando");
                };
            },'json'
    );
    alerta("salii");
    reporte_ciudad();
}
function cargar_ciudad(id, nombre, tipo, obs, estado) {        
    $("#id_ciudad").val(id);
    $("#tipo_ciudad").val(tipo);
    $("#nombre_ciudad").val(nombre);
    $("#obs_ciudad").val(obs);
    
    $("#estado_ciudad").val(estado);   

    $("#actualizar_ciudad").button("enable");
    $("#guardar_ciudad").button("disable");
}
function actualizar_ciudad() {
    var id = $("#id_ciudad").val();
    var tipo = $("#tipo_ciudad").val();
    var nombre = $("#nombre_ciudad").val();
    var obs = $("#obs_ciudad").val();
    var estado = $("#estado_ciudad").val();
    if (estado == 'SELECCIONE' || nombre == '' || tipo == 'SELECCIONE') {
        alerta('Faltan datos!!');
    } else {
        if (obs == '') {
            obs = 'sin observacion';
        }
        $.post(
                base_url + "controllerAdmin/actualizar_ciudad",
                {id: id, tipo: tipo, nombre: nombre, obs: obs, estado: estado},
        function(data) {
            if (data.valor == 0) {
                bien('ciudad actualizada con exito!');
                $("#id_ciudad").val("");
                $("#obs_ciudad").val("");
                $("#nombre_ciudad").val("");
                $("#tipo_ciudad").val("SELECCIONE");
                $("#estado_ciudad").val("SELECCIONE");                
                $("#actualizar_ciudad").button("disable");
                $("#guardar_ciudad").button("enable");
                reporte_ciudad();
            } else {
                error("error al actualizar!!");
            }
        }, 'json'
                );
    }

}
//TODO CARTA
function guardar_tipo_carta() {
    var tipo = $("#txt_tipo").val();
    var obs = $("#txt_observacion").val();
    var estado = $("#estado_carta").val();
    if (tipo == '' || estado == 'SELECCIONE') {
        alerta('Faltan datos!!');
    } else {
        if (obs == '') {
            obs = 'sin observacion';
        }
        $.post(
                base_url + "controllerAdmin/guardar_tipo_carta",
                {tipo: tipo, obs: obs, estado: estado},
        function(data) {
            if (data.valor == 0) {
                bien('carta agregada con exito!');
                $("#tipo").val("");
                $("#txt_tipo").val("");
                $("#txt_observacion").val("");
                $("#estado_carta").val("SELECCIONE");
                reporte_carta();
            } else {
                error("carta ya existe!!");
            }
        }, 'json'
                );
    }
}
function actualizar_tipo_carta() {
    var id = $("#id_carta").val();
    var tipo = $("#txt_tipo").val();
    var obs = $("#txt_observacion").val();
    var estado = $("#estado_carta").val();
    if (tipo == '' || estado == 'SELECCIONE') {
        alerta('Faltan datos!!');
    } else {
        if (obs == '') {
            obs = 'sin observacion';
        }
        $.post(
                base_url + "controllerAdmin/actualizar_tipo_carta",
                {id: id, tipo: tipo, obs: obs, estado: estado},
        function(data) {
            if (data.valor == 0) {
                bien('carta actualizada con exito!');
                $("#id_carta").val("");
                $("#txt_tipo").val("");
                $("#txt_observacion").val("");
                $("#estado_carta").val("SELECCIONE");
                $("#actualizar_tipo_carta").button("disable");
                reporte_carta();
            } else {
                error("error al actualizar!!");
            }
        }, 'json'
                );
    }
}
function reporte_carta() {
    $.post(
            base_url + "controllerAdmin/reporte_carta",
            {},
            function(ruta, datos) {
                $("#reporte_carta").hide();
                $("#reporte_carta").html(ruta, datos);
                $("#reporte_carta").show('slow');
            }
    );
}
function eliminar_carta(id_carta) {
    $.post(
            base_url + "controllerAdmin/eliminar_carta", {id_carta: id_carta},
            function(data){
                if (data.valor = 0) {
                    bien("");
                }else{
                    error("");
                };
            },'json'
    );
    reporte_carta();
}
function cargar_carta(id, tipo, obs, estado) {    
    $("#id_carta").val(id);
    $("#txt_observacion").val(obs);
    $("#txt_tipo").val(tipo);
    $("#estado_carta").val(estado);
    $("#actualizar_tipo_carta").button("enable");
    $("#guardar_tipo_carta").button("disable");
}
