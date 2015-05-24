<script type="text/javascript" src="<?= base_url(); ?>../js/funcionesAdmin.js"></script>
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
   
    $("#verificar_rut").button().click(function() {
        verificar_rut();
    });
    $("#guardar_ciudad").button().click(function() {
        guardar_ciudad();
    });

    $("#btn_guardar").button().click(function() {
        btn_guardar();
    });
    $("#guardar_tipo_carta").button().click(function() {
        guardar_tipo_carta();
    });
    $("#actualizar_ciudad").button().click(function() {
        actualizar_ciudad();
    });
    $("#actualizar_tipo_carta").button().click(function() {
        actualizar_tipo_carta();
    });
    $("#guardar_sector").button().click(function() {
        guardar_sector();
    });
    $("#actualizar_sector").button().click(function() {
        actualizar_sector();
    });  
    bloquear_id();
</script>

<div id="tabs">
    <div id="admin">
        <ul>            
            <li><a href="#tabs-1" onclick="bloquear_id()">Agregar sector</a></li>
            <li><a href="#tabs-2" onclick="bloquear_id()">Agregar ciudad</a></li>
            <li><a href="#tabs-3" onclick="bloquear_id()">Agregar tipo de carta</a></li>
            <li><a href="#tabs-4" onclick="bloquear_id()">Agregar usuarios</a></li>
        </ul>     
        <div id="tabs-1">            
            <p>Agregar sector</p>
            <table>    
                <tr>
                    <td>N°</td>
                    <td>
                        <input class="ui-corner-all" id="id_sector" type="text" size="10" maxlength="10"/>                        
                    </td>
                </tr>
                <tr>
                    <td>Nombre: </td>
                    <td>
                        <input class="ui-corner-all" id="nombre_sector" placeholder="nombre" type="text" size="20" maxlength="20"/>                        
                    </td>
                </tr>
                <tr>
                    <td>Ciudad: </td>
                    <td>
                        <select id="sector_ciudad"></select>
                    </td>  
                </tr>

                <tr>
                    <td>Observacion: </td>
                    <td>
                        <textarea class="ui-corner-all" type="text" id="obs_sector" size="16" /></textarea>                        
                    </td>
                </tr>
                <tr>
                    <td>Estado: </td>                    
                    <td>
                        <select id="estado_sector">                                
                            <option value="SELECCIONE">SELECCIONE</option>
                            <option value="ACTIVO">Activo</option>
                            <option value="PASIVO">Pasivo</option>
                        </select>
                    </td>                    
                </tr>
                <tr>                    
                    <td>
                        <button id="guardar_sector">Guardar</button>
                    </td>
                    <td>
                        <button id="actualizar_sector" disabled>Actualizar</button>
                    </td>
                </tr>
            </table>
            <div id="reporte_sector" class="datagrid">
            </div>
        </div>
        <div id="tabs-2">            
            <p>Agregar ciudad</p>
            <table>    
                <tr>
                    <td>N°</td>
                    <td>
                        <input class="ui-corner-all" id="id_ciudad" type="text" size="10" maxlength="10"/>                        
                    </td>
                </tr>
                <tr>
                    <td>Tipo: </td>
                    <td>
                        <select id="tipo_ciudad">                                
                            <option value="SELECCIONE">SELECCIONE</option>
                            <option value="URBANO">Urbano</option>
                            <option value="RURAL">Rural</option>
                        </select>
                    </td>  
                </tr>
                <tr>
                    <td>Nombre: </td>
                    <td>
                        <input class="ui-corner-all" id="nombre_ciudad" placeholder="nombre" type="text" size="10" maxlength="10"/>                        
                    </td>
                </tr>
                <tr>
                    <td>Observacion: </td>
                    <td>
                        <textarea class="ui-corner-all" type="text" id="obs_ciudad" size="16" /></textarea>                        
                    </td>
                </tr>
                <tr>
                    <td>Estado: </td>                    
                    <td>
                        <select id="estado_ciudad">                                
                            <option value="SELECCIONE">SELECCIONE</option>
                            <option value="ACTIVO">Activo</option>
                            <option value="PASIVO">Pasivo</option>
                        </select>
                    </td>                    
                </tr>
                <tr>                    
                    <td>
                        <button id="guardar_ciudad">Guardar</button>
                    </td>
                    <td>
                        <button id="actualizar_ciudad" disabled>Actualizar</button>
                    </td>
                </tr>
            </table>
            <div id="reporte_ciudad" class="datagrid">
            </div>
        </div>
        <div id="tabs-3">
            <p>Agregar tipo de carta</p>
            <table>
                <tr>
                    <td>N°</td>
                    <td>
                        <input class="ui-corner-all" id="id_carta" type="text" size="10" maxlength="10"/>                        
                    </td>
                </tr>
                <tr>
                    <td>Tipo: </td>
                    <td>
                        <input class="ui-corner-all" id="txt_tipo" placeholder="tipo" type="text" size="10" maxlength="10"/>
                    </td>
                </tr>
                <tr>
                    <td>Observacion: </td>
                    <td>
                        <textarea class="ui-corner-all" type="text" id="txt_observacion" size="16" /></textarea>                                                
                    </td>
                </tr>
                <tr>
                    <td>Estado: </td>                    
                    <td>
                        <select id="estado_carta">
                            <option value="SELECCIONE">SELECCIONE</option>
                            <option value="ACTIVO">ACTIVO</option>
                            <option value="PASIVO">Pasivo</option>
                        </select>
                    </td>
                </tr>
                <tr>                    
                    <td>
                        <button id="guardar_tipo_carta">Guardar</button>
                    </td>
                    <td>
                        <button id="actualizar_tipo_carta" disabled>Actualizar</button>
                    </td>
                </tr>
            </table>
            <div id="reporte_carta" class="datagrid">
            </div>
        </div>
        <div id="tabs-4">
            <p>Asegurese de llenar todos los campos para poder agregar un usuario</p>            
            <table>

                <td>Rut:</td>
                <td>
                    <input id="rut" class="ui-corner-all" placeholder="rut" type="text" size="8" maxlength="8"/>-
                    <input id="digito" class="ui-corner-all" placeholder="0" type="text" size="1" maxlength="1"/>                            
                    <button id="verificar_rut"><span class="ui-icon ui-icon-check"></span></button>
                </td>                                                
                </tr>                      
                <tr>
                    <td>Nombres:</td>
                    <td>
                        <input id="txt_nombre" class="ui-corner-all" placeholder="nombre" type="text" size="20" maxlength="20"/>
                    </td>
                </tr>

                <tr>
                    <td>Apellidos:</td>
                    <td>
                        <input id="txt_apellido" class="ui-corner-all" placeholder="apellidos" type="text" size="20" maxlength="20"/>
                    </td>
                </tr>
                <tr>
                    <td>Sexo:</td>
                    <td>
                        <select id="sexo">
                            <option value="SELECCIONE">SELECCIONE</option>
                            <option value="masculino">Masculino</option>
                            <option value="femenino">Femenino</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Telefono:</td>
                    <td>
                        <input id="txt_telefono" placeholder="65369965" type="text" size="8" maxlength="8"/>
                    </td>
                </tr>
                <tr>
                    <td>Direccion:</td>
                    <td>
                        <input id="txt_direccion" placeholder="carlos camus" type="text" size="20" maxlength="20"/>
                    </td>
                </tr>
                <tr>
                    <td>Mail:</td>
                    <td>
                        <input id="txt_mail" placeholder="nombre@dominio.cl" type="text" size="30" maxlength="30"/>
                    </td>
                </tr>

                <tr>
                    <td>Tipo: </td>
                    <td>
                        <select id="tipo_Usuario">                                
                            <option value="SELECCIONE">SELECCIONE</option>
                            <option value="normal">NORMAL</option>
                            <option value="administrador">ADMINISTRADOR</option>
                        </select>
                    </td>  
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button id="btn_guardar" disabled>Guardar</button>
                    </td>
                </tr>
            </table> 

            <div id="reporte_usuario" class="datagrid">
            </div>
        </div>

    </div>  
</div>
<br>
<br>