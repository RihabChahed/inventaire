<?php

$servername ="localhost";
$username ="inventaire";
$password ="QgiwGjq95L0e"  ;      /*EivAko2FgvxA   QgiwGjq95L0e*/
$dbname="inventaire";
 
////connection 
$check=mysqli_connect($servername,$username,$password,$dbname);
if($check){
    /*header("Location: utilisateurs.html ");*/
    echo "Connection success";
}
else{
    echo "Connection failed";
}

/*checking the user*/

session_start();
$email=$_POST['email'];
$pass=$_POST['password'];


$data="SELECT Email, mdp FROM Utilisateurs Where Email='$email' && mdp='$pass'";
$excute=mysqli_query($check,$data);
$count=mysqli_num_rows($excute);
if($count>=1){
    $_SESSION["email"] = $email;
    header("Location: Acceuil.php ");
}
else{
   /*echo '<script>alert("Invalid credentials")</script>';*/
   header("Location: index.php ");
}
?>

