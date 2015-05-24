<!DOCTYPE html>
<html>
    <head>        
        <meta charset="utf-8"/>       
        <script type="text/javascript">
            var base_url = '<?= base_url(); ?>';
        </script>   

        <title>LinaExpress</title>
        <script type="text/javascript" src="<?= base_url(); ?>../js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>../js/jquery-ui-1.10.3.custom.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>../js/funciones.js"></script>   
        <script type="text/javascript" src="<?= base_url(); ?>../js/jquery.toastmessage.js"></script>
        <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>../css/jquery-ui-1.10.3.custom.css">
        <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>../css/jquery.toastmessage.css">
        <link rel="stylesheet" type="text/css" href="css/style.css" />

    </head>
    <body>
        <script language="Javascript">
            document.oncontextmenu = function() {
                return false
            }
            function right(e) {
                var msg = "Prohibido usar Click Derecho";
                if (navigator.appName == 'Netscape' && e.which == 3) {
                    alerta(msg); //- Si no quieres asustar a tu usuario entonces quita esta linea...
                    return false;
                }
                else if (navigator.appName == 'Microsoft Internet Explorer' && event.button == 2) {
                    alerta(msg); //- Si no quieres asustar al usuario que utiliza IE,  entonces quita esta linea...
                    //- Aunque realmente se lo merezca...
                    return false;
                }
                return true;
            }
            document.onmousedown = right;
        </script>
        <div id="wrapper">
            <div id="header-wrapper">
                <div id="header">
                    <div id="logo">
                        <!--<h1><img src="<?= base_url(); ?>../FOTOS/logofinal.png" width='215' height='130'></h1>-->
                        <h1><img src="<?= base_url(); ?>../FOTOS/logofinal.png" width='215' height='130'></h1>
                    </div>
                    <div id="cerrar_session">
                        <button id="cerrar"> cerrar sesion</button>                                                
                    </div> 
                </div>
            </div>
            <!-- end #header -->
            <div id="menu-wrapper">
                <!--                <div id="menu">
                                    <ul>
                                        <li class="current_page_item"><a href="#">Inicio</a></li>                        
                                    </ul>                       
                                </div>-->
            </div>
        </div>
        <!-- end #menu -->
        <div id="page">
            <div id="page-bgtop">
                <div id="page-bgbtm">
                    <div id="page-content">                            
<!--                            <div>nombre usuario:<input id="nombre_us" disabled></div>-->
                        <div id="content">
                            


