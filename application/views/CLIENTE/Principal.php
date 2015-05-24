<script type="text/javascript" src="<?= base_url(); ?>../js/funcionesCliente.js"></script>

<script>
    $(function() {
        var tabs = $("#tabs").tabs();
        tabs.find(".ui-tabs-nav").sortable({
            axis: "x",
            stop: function() {
                tabs.tabs("refresh");
            }
        });
    });   
    $("#guardar_excelCliente").button().click(function() {
        guardar_excelCliente();
    });
    $("#limpiar_excelCliente").button().click(function() {
        notificacion("Se limpiara la pagina sin guardar");
        archivo_txt();
    });
    tablaMisArchivosCliente();
</script>
<script src="<?php echo base_url() ?>../js/ajaxfileupload.js"></script>
<script src="<?php echo base_url() ?>../js/site.js"></script>

<div id="tabs">   
        <ul>
            <li><a href="#tabs-1">Subir Archivos</a></li>
            <li><a href="#tabs-2" onclick="tablaMisArchivosCliente()">Mis Archivos</a></li>                  
        </ul>
        <div id="tabs-1">            
            <div class="post">                

                <p>Elegir archivos</p>
                <div class="entry">
                    <p>
                    <div id="imagen_bd">

                    </div>                    
                    <form method="post" action="" id="leerExcel">                        
                        <table>                                                                            
                            <tr>
                                <td><label for="userfile">Seleccione un Archivo</label></td>
                                <td><input type="file" name="userfile" id="userfile" size="20" /></td> 
                            </tr>                     
                     
                            <tr>
                                <td><input id="hola" hidden/></td>
                                <td></td>
                                <td>
                                    <input type="submit" name="submit" id="submit" />
                                </td>
                            </tr>
                        </table>
                    </form>
                    <table>
                        <tr>
                            <td><input disabled id="nombre" type="hidden"></td>        
                            <td><button id="guardar_excelCliente" disabled>Guardar</button></td>
                            <td><button id="limpiar_excelCliente" disabled>Limpiar</button></td>
                        </tr>
                    </table>
                    </p>
                    <div id="lecturaExcel" class="datagrid">
                    </div>
                </div>
            </div>
        </div>    
        <div id="tabs-2">
            <div id="tablaMisArchivosCliente" class="datagrid">
            </div>
        </div>      
</div>
<br>
<br>