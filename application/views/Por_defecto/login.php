<link rel="stylesheet" type="text/css" href="css/style-login.css" />
<div class="container-login">
    <section id="content-login">

        <h1>INGRESAR</h1>
        <div>
            <input type="text" placeholder="USUARIO" required="" id="username" />
        </div>
        <div>
            <input type="password" placeholder="CONTRASEÑA" required="" id="password" onkeyup = "if (event.keyCode == 13)
                                            btn_conectar()"/>
        </div>
        <div>			
            <button id="conectar" class="botones">Conectar</button>                                
        </div>
        <br>
        <br>


    </section><!-- content -->
</div>