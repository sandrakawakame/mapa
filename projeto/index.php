
<?php 

$login = $_POST['login'];

$entrar = $_POST['entrar'];

$senha = MD5($_POST['senha']);

$connect = mysql_connect('localhost','root','');

$db = mysql_select_db('mapa');

$select = mysql_query($query_select,$connect);

$array = mysql_fetch_array($select);

$logarray = $array['login'];


if (isset($entrar)) {
            
      $verifica = mysql_query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index1.html';</script>";
          
          die();

        }else{
          //setcookie("login",$login);
          header("Location: mapa.php");
        }
    }
?>
