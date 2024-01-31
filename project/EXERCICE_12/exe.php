<form action="exe.php" methode="get">
    <label>Email :</label>
    <input type="email" name="email"/>
    <br><br>
    <label>password :</label>
    <input type="password" name="password"/>
    <br><br>
    <input type="submit" name="send" value="login"/>

</form>
<?php
$login="DOV102@cmc.ma";
$motdepasse="_1234567_";

if(isset($_GET["send"])){

$email=$_GET["email"];
$password=$_GET["password"];

if($login==$email && $motdepasse==$password)
{
    header("location:login1.php");
    echo 'Bienvenue '.$email;
}
else{
    echo "login erroné";
}

}
?>