function tablaMisArchivosCliente() {
    $.post(
            base_url + "controllerCliente/tablaMisArchivosCliente",
            {},
            function(ruta, datos) {
                $("#tablaMisArchivosCliente").hide();
                $("#tablaMisArchivosCliente").html(ruta, datos);
                $("#tablaMisArchivosCliente").show('slow');
            }
    );
}

function eliminarArchivo(id) {
    alerta(id);
    $.post(
            base_url + "controllerCliente/eliminarArchivo", {id: id},
            function(data){                
                if (data.valor == 0) {
                    alerta(data.valor)
                    bien("Sector eliminado correctamente");
                }else{
                    error("El sector se esta utilizando");
                };
            },'json'
    );
    tablaMisArchivosCliente();
}