<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <LINK REL=StyleSheet HREF="Register.css" TYPE="text/css" MEDIA=screen>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <style>
            body {
                background: url("img/Gif_Canon_For_Register.gif") no-repeat center center fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-color: black;
            }
        </style>

    
    </head>


    <body>

        <div class="col-12 right_content" style="text-align: center;">
            <form action="verificationLogin.php" method="get">
                <div class="container">
                    <h1 class="display-3" style="text-shadow: 2px 2px 5px white; margin-top:20%; margin-right:40px;">Game Of Life</h1>
                    <div class="row">
                        
                        <div class="form__group col-md-12">
                            <span> 
                                <input class="balloon" id="state" type="text" value="" placeholder="" />
                                <label for="state">Firts Name</label> 
                            </span> 
                        </div>
                        <div class="form_group col-md-12">
                            <span> 
                                <input class="balloon" id="state" type="text" value="" placeholder="" />
                                <label for="state">Last Name</label> 
                            </span> 
                        </div>
                        <div class="form_group col-md-12">
                            <span> 
                                <input class="balloon" id="state" name="" type="text" value="" placeholder="" />
                                <label for="state">UserName</label> 
                            </span> 
                        </div>
    
                        <div class="form_group col-md-12">
                            <span> 
                                <input class="balloon" id="email" type="email" name="email" value="" placeholder="" required />
                                <label for="state">Email</label>
                            </span> 
                        
                        </div>
    
                        <div class="form_group col-md-12">
                            <span> 
                                <input class="balloon" id="state" type="password" value="" placeholder="" />
                                <label for="state">Password</label> 
                            </span> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-lg" href="#">
                                <span>Register</span>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </body>

    <footer class="page-footer">
        <div class="footer-copyright text-center py-3">© 2021 Copyright:
            <a style="color:#2FDDEA" href=""> MyJPActimel</a>
          </div>
    </footer>
</html>