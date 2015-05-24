<script type="text/javascript" src="<?= base_url(); ?>../js/funcionesAdmin.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>../public/Highcharts/js/highcharts.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>../public/Highcharts/js/modules/exporting.js"></script>
<script src="<?php echo base_url() ?>../js/ajaxfileupload.js"></script>
<script src="<?php echo base_url() ?>../js/site.js"></script>
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
    $('.fecha').datepicker({renderer: $.ui.datepicker.defaultRenderer,
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
            'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
            'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Mi&eacute;rcoles', 'Jueves', 'Viernes', 'S&aacute;bado'],
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mi&eacute;', 'Juv', 'Vie', 'S&aacute;b'],
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'S&aacute;'],
        dateFormat: 'yy-mm-dd',
        firstDay: 1,
        prevText: '&#x3c;Ant', prevStatus: '',
        prevJumpText: '&#x3c;&#x3c;', prevJumpStatus: '',
        nextText: 'Sig&#x3e;', nextStatus: '',
        nextJumpText: '&#x3e;&#x3e;', nextJumpStatus: '',
        currentText: 'Hoy', currentStatus: '',
        todayText: 'Hoy', todayStatus: '',
        clearText: '-', clearStatus: '',
        closeText: 'Cerrar', closeStatus: '',
        yearStatus: '', monthStatus: '',
        weekText: 'Sm', weekStatus: '',
        dayStatus: 'DD d MM',
        defaultStatus: '',
        isRTL: false});

    $("#verificar_rut").button().click(function() {
        verificar_rut();
    });
   
    $("#guardar_carta").button().click(function() {
        guardar_carta();
    });

    $("#guardar_excel").button().click(function() {
        guardar_excel();
    });
    $("#limpiar_excel").button().click(function() {
        notificacion("Se limpiara la pagina sin guardar");
        archivo_txt();
    });
    
    bloquear_id();
</script>
<script type="text/javascript">
    $(function () {
    $('#chartsIz').highcharts({
        title: {
            text: 'Monthly Average Temperature',
            x: -20 //center
        },
        subtitle: {
            text: 'Source: WorldClimate.com',
            x: -20
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Temperature (°C)'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Tokyo',
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
        }, {
            name: 'New York',
            data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
        }, {
            name: 'Berlin',
            data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
        }, {
            name: 'London',
            data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
        }]
    });
});
</script>
<script type="text/javascript">
    $(function () {
    $('#chartsD').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Monthly Average Rainfall'
        },
        subtitle: {
            text: 'Source: WorldClimate.com'
        },
        xAxis: {
            categories: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Rainfall (mm)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Tokyo',
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

        }, {
            name: 'New York',
            data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

        }, {
            name: 'London',
            data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

        }, {
            name: 'Berlin',
            data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

        }]
    });
});
</script>
<div id="tabs">    
        <ul>
            <li><a href="#tabs-1">Dashboard</a></li>
            <li><a href="#tabs-2">Archivos</a></li>            
            <li><a href="#tabs-3">Correspondencia</a></li> 
            <li><a href="#tabs-4">Receptores</a></li>
            <li><a href="#tabs-5">Resumen Mensual</a></li>
            <li><a href="#tabs-6">Buscar</a></li>
        </ul>
        <div id="tabs-1">
            <div id="graficos">
                <div id="chartsIz" class="contenido-left">             
                </div>
                <br>
                <div id="chartsD" class="contenido-rigth" style="margin-top: 22px !important;">             
                </div>
            </div>
            
        </div>
        <div id="tabs-2">
            <div class="post">                

                <p>Elegir archivos</p>
                <div class="entry">
                    <p>                                
                    <form method="post" action="" id="leerExcelSupervisor">                        
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
                            <td><button id="guardar_excel" disabled>Guardar</button></td>
                            <td><button id="limpiar_excel" disabled>Limpiar</button></td>
                        </tr>
                    </table>
                </p>
                <div id="lecturaExcel" class="datagrid"></div>
            </div>
        </div>
        <div id="tabs-3">
            
            <table>
                <tr>                

                    <td>N°</td>
                    <td><input class="ui-corner-all" id="id_corres" type="text" size="10" maxlength="10"/></td>
                           
                    <td>R.I.T</td>
                    <td><input class="ui-corner-all" id="rit_corres" type="text" size="10" maxlength="10"/></td>                             
                    
                    <td>N° Empresa</td>
                    <td><input class="ui-corner-all" id="rit_corres" type="text" size="10" maxlength="10"/></td>                     


                </tr>

                <tr>
                    

                    <td>Fecha entrega</td>
                    <td><input id="fecha_entrega" type="text" size="10" class="input input2 fecha" placeholder="yyyy/mm/dd"></td>

                    <td>Fecha entrega</td>
                    <td><input id="fecha_entrega" type="text" size="10" class="input input2 fecha" placeholder="yyyy/mm/dd"></td>

                    <td>Fecha entrega</td>
                    <td><input id="fecha_entrega" type="text" size="10" class="input input2 fecha" placeholder="yyyy/mm/dd"></td>


                </tr>
                <tr>

                    
                    <td>Emisor</td>
                    <td><input class="ui-corner-all" id="nombre_corres" type="text" size="10" maxlength="10"/></td>                

                    <td>Dirección</td>
                    <td><input class="ui-corner-all" id="nombre_corres" type="text" size="10" maxlength="10"/></td>                

                    <td>Nombre destinatario</td>
                    <td><input class="ui-corner-all" id="nombre_corres" type="text" size="10" maxlength="10"/></td>                                    


                </tr>                
                <tr>
                    

                    <td>Receptor</td>
                    <td><input class="ui-corner-all" id="direccion_corres" type="text" size="10" maxlength="10"/></td>                

                    <td>R.U.N Receptor</td>
                    <td><input class="ui-corner-all" id="receptor_corres" type="text" size="10" maxlength="10"/>-<input class="ui-corner-all" id="receptor_corres" type="text" size="1" maxlength="1"/></td>

                    <td>Telefono</td>
                    <td><input class="ui-corner-all" id="receptor_corres" type="text" size="10" maxlength="10"/></td>                    


                </tr>
                <tr>
                    
                    
                    <td>Observacion: </td>
                    <td>
                        <textarea class="ui-corner-all" type="text" id="obsllll" size="16" /></textarea>                        
                    </td>

                    <td>Tipo</td>
                    <td>
                        <select id="TipoCarta">
                            <option>Oficio</option>
                            <option>Certificada</option>
                            <option>23</option>
                            <option>Otros</option>
                        </select>
                    </td>

                    <td>Ciudad: </td>
                    <td>
                        <select id="sector_ciudad"></select>
                    </td> 

                </tr>
                    <td>Empresa</td>
                    <td>
                        <select id="TipoCarta">
                            <option>Juzgado Familia</option>                         
                        </select>
                    </td>
                    <td>Estado</td>
                    <td>
                        <select id="TipoCarta_jjj">
                            <option>Habilitado</option>                         
                        </select>
                    </td>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>                    
                    <td><button id="guardar_carta">Guardar</button></td>                    
                </tr>
            </table>
        </div> 
        <div id="tabs-4">
        </div>
        <div id="tabs-5">
        </div>
        <div id="tabs-6">
        </div> 
</div>
<br>
<br>