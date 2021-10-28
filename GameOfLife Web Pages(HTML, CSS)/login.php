<!DOCTYPE html>
<html>
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
    <link href="../Css/Login.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title></title>
    
    <style>
          
          .slider{
          /* background: url("../img/Chivacola.jpg"); */
          /* Ocupara toda la altura disponible */
          height: 100vh;
          /* La imagen de adapte al tamaño del despoditivo */
          background-size: cover;
          /* La imagen estara centrada */
          background-position: center;
      }
    
    .right_content {
        margin-top:8%;
    }

    input {
        margin-top:5%;
    }

    .child {
        margin-top: 10%;
    }
    </style>
    
    </head>
    
    <body>
          <div class="container-fluid">
        
            <div class="row ">

                <div class="col-6 d-flex justify-content-center align-items-center slider" style="background-image: url('img/Gif_Canon_For_Register.gif');">
            
                </div> 
           
                <div class="col-6 right_content" style="text-align: center;">
                    <h1 class="display-3">Game Of Life</h1>
                    <form action="verificationLogin.php" class="child" method="get"> 
                        <div class="form-group" style="margin-left:25%">
                            <input type="text" name="username" placeholder="User Name" class="form-control col-md-8" style="border-radius:1rem;">
                        </div>
                        <div class="form-group" style="margin-left:25%">
                            <input type="password" name="password" placeholder="Password" class="form-control col-md-8" style="border-radius:1rem;">
                        </div>
                            
                        <div class="form-group d-flex flex-row justify-content-center" style="margin-top:5%;">
                            <button class="btn btn-dark " style="border-radius:1rem; padding-right:50px; padding-left:50px">Login</button>
                        </div>
                        <div class="form-group d-flex flex-row justify-content-center" style="margin-top:5%;">
                            <p>Is it your first time on our page?
                                <a href="url">Sign Up !</a>
                            </p>
                        </div>
                     </form>
                </div>      
            </div> 
        </div>
    </body>

</html>