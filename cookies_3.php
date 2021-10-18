<?php 

include 'head.php';

$usuario="";
$pass="";


if (isset($_REQUEST['entrar']))//boton entrar
{
    if($_request['guardar_password'])//si pulsas el check sigue por aquí
    {//definimos usuario y contraseña
            //a cada usuario y contraseña le damos un tiempo de duracion para guardar la cookie
    setcookie("user",$_REQUEST['usuario'],time()+2424);
    setcookie("clave",$_REQUEST['clave'],time()+2424);
    }

}//fin de entrar
    // ahora ponemos que nos guarde las cookies de usuario y password
if(isset($_COOKIE['user']))
{
    $usuario=$_COOKIE['user'];
    $pass=$_COOKIE['clave'];
}


//ahora en el input usuario y contraseña tenemos que meter la variable en el value
echo'<h1>Autenticar usuario y guardar en una cookie con PHP</h1><br><br>';
echo'<form action="cookies_3.php" method="post">
<table>
<tr>
<td>Usuario:</td>
<td><input type="text" name="usuario" value="'.$usuario.'" required></td>
</tr><tr>
<td>Clave:</td>
<td><input type="password" name="clave" value="'.$pass.'" required></td>
</tr><tr>
<td colspan="2"><input type="checkbox" name="guardar_clave" value="1"> Memorizar el usuario en este ordenador</td>
</tr><tr>

<td><input type="submit" value="Entrar"></td>
</tr>
</table>
</form> ';



include 'pie.php';