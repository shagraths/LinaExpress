$(function() {    

    $('#leerExcel').submit(function(e) {
        notificacion("Espere un momento");
        e.preventDefault();
        $.ajaxFileUpload({
            url: base_url + "controllerSubirArchivo/leerExcel",
            secureuri: false,
            fileElementId: 'userfile',
            dataType: 'json',
            data: {
            },
            success: function(data)
            {                       
                if (data.status !== 'error')
                {                                        
                    $("#nombre").val(data.nombre);
                    MostrarExcel(data.nombre);
                    $("#guardar_excelCliente").button("enable");
                    $("#limpiar_excelCliente").button("enable");
                } else {
                    error(data.msg);
                }
            }
        });        
        return false;
    });

    $('#leerExcelSupervisor').submit(function(e) {
        notificacion("Espere un momento");
        e.preventDefault();
        $.ajaxFileUpload({
            url: base_url + "controllerSubirArchivo/leerExcelSupervisor",
            secureuri: false,
            fileElementId: 'userfile',
            dataType: 'json',
            data: {
            },
            success: function(data)
            {                       
                if (data.status !== 'error')
                {                                        
                    $("#nombre").val(data.nombre);
                    MostrarExcelSupervisor(data.nombre);
                    $("#guardar_excel").button("enable");
                    $("#limpiar_excel").button("enable");
                } else {
                    error(data.msg);
                }
            }
        });        
        return false;
    });

});







function MostrarExcel(nombre) {    
    $.post(
            base_url + "controllerSubirArchivo/MostrarExcel",
            {nombre: nombre},
    function(ruta, datos) {
        $("#lecturaExcel").hide();
        $("#lecturaExcel").html(ruta, datos);
        $("#lecturaExcel").show('slow');
        $("#tiempo").hide();
    }
    );
}

function MostrarExcelSupervisor(nombre) {    
    $.post(
            base_url + "controllerSubirArchivo/MostrarExcelSupervisor",
            {nombre: nombre},
    function(ruta, datos) {
        $("#lecturaExcel").hide();
        $("#lecturaExcel").html(ruta, datos);
        $("#lecturaExcel").show('slow');
        $("#tiempo").hide();
    }
    );
}

function guardar_excel() {
    $("#mostrar_txt").hide();
    //mostrar_cargar();
    var nombre = $("#nombre").val();
    $.post(
            base_url + "controllerSubirArchivo/guardar_Excel",
            {nombre: nombre},
    function(datos) {
        $("#tiempo").hide();
        $("#guardar_excel").button("disable");
        $("#limpiar_excel").button("disable");
        if (datos.perdidos == 0) {
            alert("total datos= " + datos.total + " guardados= " + datos.guardados + " perdidos= " + datos.perdidos);
            alert("bien!!");
        } else {
            alert("total datos= " + datos.total + " guardados= " + datos.guardados + " perdidos= " + datos.perdidos);
        }
    },
            'json'
            );
}

function guardar_excelCliente() {
    $("#mostrar_txt").hide();
    //mostrar_cargar();
    var nombre = $("#nombre").val();
    $.post(
            base_url + "controllerSubirArchivo/guardar_excelCliente",
            {nombre: nombre},
    function(datos) {
        $("#tiempo").hide();
        $("#guardar_excelCliente").button("disable");
        $("#limpiar_excelCliente").button("disable");
        if (datos.perdidos == 0) {
            bien("total datos= " + datos.total + " guardados= " + datos.guardados + " perdidos= " + datos.perdidos);            
        } else {
            notificacion("total datos= " + datos.total + " guardados= " + datos.guardados + " perdidos= " + datos.perdidos);
        }
        pdf_excelClientePlanilla(nombre);
    },
            'json'
            );
}

function  pdf_excelClientePlanilla(nombreArchivo) {    
    window.open(base_url + "reporte/excelClientePlanilla_lista?nombreArchivo=" + nombreArchivo);
}