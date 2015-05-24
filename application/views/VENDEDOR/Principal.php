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
        cb_vendedor();
        $("#bt_ventas").button().click(function (){
            bt_ventas();
        });
        grilla_ventas();
</script>



<div id="tabs">

    <ul>
        <li><a href="#tabs-1">Ingresar Compra</a></li>                            
    </ul>

    <div id="tabs-1">
        <table>
            <tr>
                <td>Fecha: </td>
                <td><input id="fecha" type="text" class="input input2 fecha" placeholder="yyyy/mm/dd" size="15"></td>                
            </tr>
            <tr>
                <td>Cliente:</td>
                <td><select id="cb_cliente"></select></td>
            </tr>
            <tr>
                <td>Auto:</td>
                <td><select id="cb_auto"></select></td>
            </tr>
            <tr>
                <td>Accesorios:</td>
                <td><select id="cb_accesorio1"  onclick="cb_accesorio2();"></select></td>                
            </tr>
            <tr>
                <td></td>
                <td><select id="cb_accesorio2"></select></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button id="bt_ventas">Vender</button></td>
            </tr>
        </table>
            
        <div id="ventas" class="datagrid">
            
        </div>

    </div>
</div>
<br>
<br>           
