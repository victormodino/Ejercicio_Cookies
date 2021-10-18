<?php

include 'head.php';
    
$usuario="";
$password="";

if(isset($_REQUEST['entrar']))//boton entrar
{
    if(isset($_REQUEST['guardar_password']))//si pulsas el check sigue por aquí
    {//a cada usuario y contraseña le damos un tiempo de duracion para guardar la cookie
        setcookie('user',$_REQUEST['usuario'], time()+ 3600);
        setcookie('pass',$_REQUEST['clave'], time()+ 3600);
    }

}//fin de entrar   
    // ahora ponemos que nos guarde las cookies de usuario y password
    
if(isset($_COOKIE['user']))
{
    $user=$_COOKIE['user'];
    $pass=$_COOKIE['pass'];
}


//ahora en el input usuario y contraseña tenemos que meter la variable en el value
echo'<h1>Autenticar usuario y guardar en una cookie con PHP</h1><br><br>';
echo'<form action="cookies_3.php" method="post">
<table>
<tr>
<td>Usuario:</td>
<td><input type="text" name="usuario" value="'.$usuario.'" required></td>
</tr><tr>
<td>Contraseña:</td>
<td><input type="password" name="clave" value="'.$password.'" required></td>
</tr><tr>
<td colspan="2"><input type="checkbox" name="guardar_password" value="1" checked="checked"> Memorizar el usuario en este ordenador</td>
</tr><tr>

<td><input type="submit" name="entrar" value="Entrar"></td>
</tr>
</table>
</form> ';


include 'pie.php';