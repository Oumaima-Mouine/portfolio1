<h1>Votre réservation est envoyer</h1>
<?php
$login="DEV102@cmc.ma";
$motdepasse="_1234567_";

if(isset($_GET["send"])){

$email=$_GET["email"];
$password=$_GET["password"];

if($login==$email && $motdepasse==$password)
{
    echo 'Bienvenue '.$email;
}
else{
    header("location:EXERCICE.html");
    echo "login erroné";
}



}