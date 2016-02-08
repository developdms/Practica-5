<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Panel de control</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="users/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="users/assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="users/assets/css/form-elements.css">
        <link rel="stylesheet" href="users/assets/css/style.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="users/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="users/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="users/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="users/assets/ico/apple-touch-icon-57-precomposed.png">
    </head>

    <body>   
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-inverse">
                    <div class="navbar-left" style="margin-left: 10px"><h3 class="white-font">Panel de Administrcion</h3></div>
                    <div class="container-fluid">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="?op=panel&do=view" id="lockbtn"><button class="btn" style="margin: auto 5px">Volver</button></a></li>
                            <li><a href="?op=lock&do=lock" id="lockbtn"><button class="btn" style="margin: auto 5px">Darme de baja</button></a></li>
                            <li><a href="?op=edit&do=view" id="editbtn"><button class="btn" style="margin: auto 5px">Editar mi perfil</button></a></li>
                            <li><a href="?op=log&do=out" id="logoutbtn"><button class="btn" style="margin: auto 5px">Salir</button></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="row">
                <h3>Bienvenido</h3>
            </div>
            {opciones}
        </div>
        <script src="users/assets/js/privateactions.js"></script>
        <script src="users/assets/js/jquery-1.11.1.min.js"></script>
        <script src="users/assets/js/jquery.backstretch.min.js"></script>
        <script src="users/assets/js/scripts.js"></script>
    </body>
</html>
