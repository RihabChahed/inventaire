<?php
    $servername ="localhost";
    $username ="inventaire";
    $password ="QgiwGjq95L0e"  ; 
    $dbname="inventaire";
     
    ////create connection 
    $check=mysqli_connect($servername,$username,$password,$dbname);

    $Statut =$_POST['Statut'];
    $Description =$_POST['Description'];
    $DateInv =$_POST['DateInv'];
    $Utilisateur =$_POST['Utilisateur'];

    $sql = "INSERT INTO Inventaire (Statut, Description, DateInv, Utilisateur) VALUES ('$Statut', '$Description','$DateInv','$Utilisateur')";
    
    
if ($check->query($sql) === TRUE) {
    echo "Data saved successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $check->error;
}

    ?>