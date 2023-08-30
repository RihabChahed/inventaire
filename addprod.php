<?php
    $servername ="localhost";
    $username ="inventaire";
    $password ="QgiwGjq95L0e"  ; 
    $dbname="inventaire";
     
    ////create connection 
    $check=mysqli_connect($servername,$username,$password,$dbname);

    $NomArt = $_POST["NomArt"];
    $Descri = $_POST["Descri"];
    $Type = $_POST["Type"];
    $QteStock = $_POST["QteStock"];
    $QteAffectee = $_POST["QteAffectee"];
    $Etat = $_POST["Etat"];
    $DateSortie = $_POST["DateSortie"];
    $DateRecu = $_POST["DateRecu"];
    $Unite = $_POST["Unite"];
    $Marque = $_POST["Marque"];
    $Num_serie =$_POST["Num_serie"];
    $Cond = $_POST["Cond"];
    $Bureau = $_POST["Bureau"];
    $Id_empl = $_POST["Id_empl"];

    $sql = "INSERT INTO Materiels (NomArt,Descri ,Type ,QteStock ,QteAffectee,Etat,DateSortie,DateRecu, Unite,Marque ,Num_serie ,Cond,Bureau ,Id_empl)
        VALUES ('$NomArt','$Descri' ,'$Type' ,'$QteStock' ,'$QteAffectee','$Etat','$DateSortie','$DateRecu',' $Unite','$Marque' ,'$Num_serie' ,'$Cond','$Bureau' ,'$Id_empl')";
    
    
if ($check->query($sql) === TRUE) {
    echo "Data saved successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $check->error;
}

    ?>









        