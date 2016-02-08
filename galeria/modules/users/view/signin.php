<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Acceso de usuarios</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="users/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="users/assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="users/assets/css/form-elements.css">
        <link rel="stylesheet" href="users/assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

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
                                    <h3>Acceso de usuarios</h3>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-pencil"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="?op=log&do=in" method="post" class="registration-form">
                                    <div class="form-group">
                                        <label for="alias" class="white-font">Alias</label>
                                        <input type="text" name="alias" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="white-font">Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <button type="submit" class="btn">Aceptar</button>
                                </form>
                                <br/>
                                <div class="form-group">
                                    <div class="control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                            Registrarme 
                                        <a href="?op=signup&do=view">
                                            Pulsa aqui
                                        </a>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            
                        </div>
                    </div>
                </div>
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>
</html>




