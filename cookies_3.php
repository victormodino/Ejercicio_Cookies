<?php 

include 'head.php';



if (isset($_REQUEST['entrar']))//boton entrar
    {
        if (isset($_request['guardar_password']))
        {//definimos usuario y contraseña
            //a cada usuario y contraseña le damos un tiempo de duracion para guardar la cookie
            setcookie("usuario",$_REQUEST['usuario'],time()+2424);
            setcookie("password".$_REQUEST['password'],time()+2424);
// ahora ponemos que nos imprima las cookies de usuario y password
            echo $_COOKIE['usuario'], "<br>", $_COOKIE['password'];

        }

    }
    if(isset($_COOKIE['usuario']))
    {
        $usuario=$_COOKIE['usuario'];
    }



echo'<h1>Autenticar usuario y guardar en una cookie con PHP</h1><br><br>';
echo'<form action="cookies_3.php" method="post">
<table>
<tr>
<td>Usuario:</td>
<td><input type="text" name="usuario"  required></td>
</tr><tr>
<td>Clave:</td>
<td><input type="password" name="clave"  required></td>
</tr><tr>
<td colspan="2"><input type="checkbox" name="guardar_clave" value="1"> Memorizar el usuario en este ordenador</td>
</tr><tr>

<td><input type="submit" value="Entrar"></td>
</tr>
</table>
</form> ';



include 'pie.php';