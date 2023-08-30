<?php
session_start();
// Vérifier si l'utilisateur est connecté

if (!isset($_SESSION["email"])) {

    header("Location: index.php"); // Rediriger vers la page de connexion

    exit();
}
$email = $_SESSION["email"];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="acceuil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li>
                <a href="Acceuil.php" ><i class="fa fa-fw fa-home"></i><span>Acceuil</span></a>
            </li>
            <li>
                <a href="produits.php"><i class="fa fa-fw fa-cubes"></i><span>Produits</span></a>
            </li>
            <li>
                <a href="inventaire.php"><i class="fa fa-fw fa-building-o"></i><span>Inventaire</span></a>
            </li>
            <li>
                <a href="utilisateurs.php" class="active"><i class="fa fa-fw fa-users"></i><span>Utilisateurs</span></a>
            </li>
            <li>
                <a href="logout.php"><i class="fa fa-sign-out"></i><span>Se déconnecter</span></a>
            </li>
        </ul>
    </div>
    <div class="main-content">
        <div class="header">
            <div class="header-title">
                <h2>Dashboard</h2>
            </div>
            <div class="user-info">
                <div class="search-box">
                    <i class="fa fa-search"></i><input type="text" placeholder="Search..">
                </div>
                
            </div>
        </div>

        <h2>Les utilisateurs</h2><br><br><br>
        <table class="table" >
         <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Tel</th>
            </tr>
         </thead>
    
     <tbody>
     <?php 
        $servername ="localhost";
        $username ="inventaire";
        $password ="QgiwGjq95L0e"  ; 
        $dbname="inventaire";
         
        ////create connection 
        $check=mysqli_connect($servername,$username,$password,$dbname);
        //table 
        $sqll="SELECT * FROM Utilisateurs";
        $resultt=$check->query($sqll);

        if(!$resultt){
            die("Invalid query: " . $check->error);
        }
        
        while($row = $resultt->fetch_assoc()){
            echo"
            <tr>
            <td>" . $row["Nom"] . "</td>
            <td> ". $row["Prenom"] . "</td>
            <td> ". $row["Email"] . "</td>
            <td> ". $row["Tel"] . "</td>
            </tr>" ;
        }
        ?>
     
     </tbody>
     </table>





    </div>
    
</body>
</html>