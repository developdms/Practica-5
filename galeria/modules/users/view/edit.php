<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edicion de usuario</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="users/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="users/assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="users/assets/css/form-elements.css">
        <link rel="stylesheet" href="users/assets/css/style.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="users/assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="users/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="users/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="users/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="users/assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>     
        <div class="container">
            <div class="row">
                <div class="col-sm-5 form-box" style="margin: 0 auto;">
                    <div class="form-top">
                        <div class="form-top-left">
                            <a href="?op=panel&do=view">Salir</a>
                            <h3>Edición de usuario</h3>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-pencil"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="?op=edit&do=set" method="post" class="registration-form" id="formu">
                            <div class="form-group">
                                <input type="hidden" name="old-email" class="form-first-name form-control" value="{email}">
                            </div>
                            <div class="form-group">
                                <label for="email" class="white-font">e-mail</label>
                                <input type="text" name="email" class="form-first-name form-control" value="{email}">
                            </div>
                            <div class="form-group" class="white-font">
                                <label for="alias" class="white-font">Alias</label>
                                <input type="text" name="alias" class="form-last-name form-control" value="{alias}">
                            </div>
                            <div class="form-group">
                                <label for="password" class="white-font">Password</label>
                                <input type="password" name="password" id="password" class="form-last-name form-control">
                            </div>
                            <div class="form-group">
                                <label for="rpassword" class="white-font">Repite password</label>
                                <input type="password" name="rpassword" id="rpassword" class="form-last-name form-control">
                            </div>
                            
                            <div class="form-group col-sm-4 col-lg-4 col-md-4">
                                <label for="password" class="white-font" style="display: block; text-align: center;">Activo</label>
                                {activo}
                                <!--<input type="checkbox" name="active" value="1" class="form-control">-->
                            </div>
                            <div class="form-group col-sm-4 col-lg-4 col-md-4" style="display: block; text-align: center;">
                                <label for="password" class="white-font">Administrador</label>
                                {administrador}
                                <!--<input type="checkbox" name="administrator" value="1" class="form-control">-->
                            </div>
                            <div class="form-group col-sm-4 col-lg-4 col-md-4" style="display: block; text-align: center;">
                                <label for="password" class="white-font">Personal</label>
                                {pers}
                                <!--<input type="checkbox" name="administrator" value="1" class="form-control">-->
                            </div>
                            <button type="submit" class="btn">Aceptar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="users/assets/js/jquery-1.11.1.min.js"></script>
        <script src="users/assets/js/jquery.backstretch.min.js"></script>
        <script src="users/assets/js/scripts.js"></script>
        <script src="users/assets/js/process.js"></script>
    </body>
</html>
