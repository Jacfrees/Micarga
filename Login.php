<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    
</head>
<body>
  
        <div class="Login">
          <form method="post" class="signin" action="index.php?c=home&a=Login" name="Login">
            <h1>BIENVENIDOS</h1>
                <fieldset class="textbox">
                <label class="username">
                
                <input id="username" required="" name="Login[Documento]"  type="text" autocomplete="on" placeholder="Documento">
                </label>
                
                <label class="password">
                
                <input type="password" required="" id="password" name="Login[Contrasena]"   type="password" placeholder="Contrase&ntilde;a">
                </label>
                
                <button  class="btn btn-primary btn-block btn-large" class="submit button" type="submit" value="Ingresar">Iniciar Sesion</button>
                    
                </fieldset>
  
          </form>
        </div>

  <li class="nav-item">
              <a class="nav-link" href="tipodecuenta.php">VOLVER</a>
            </li>
   </body>
   </html> 