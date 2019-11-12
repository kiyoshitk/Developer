<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<head>
          <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
</head>
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
         
         <fieldset>
          <div class="view" style="background-image: url('../library/img/LOGO HORIZONTAL.png');max-width:600px;margin:60px auto;background-size: cover; overflow: hidden; width: 350px; height: 100px;background-color: white;">   
         </div>
         </fieldset>   
        <div class="container">
             
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="https://webserv.in/Certificado/functions/login.php" method="post" style='max-width:600px;margin:-50px auto;'>
                            <h3 class="text-center text-info" style="color:#662483 !important;">Login Certificados</h3>
                            <div class="form-group">
                                <label for="username" class="text-info" style="color:#662483 !important;">Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info" style="color:#662483  !important;">Password:</label><br>
                                <input type="password" name="senha" id="senha" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info" style="color:#662483  !important;"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-secondary btn-md" value="Logar">
                            </div>
<!--                             <div id="register-link" class="text-right">
                                <a href="https://webserv.in/Certificado/main/laboratorio.php" class="text-info">Register here</a>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
