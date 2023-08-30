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
    <title>Document</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li>
                <a href="Acceuil.php" class="active"><i class="fa fa-fw fa-home"></i><span>Acceuil</span></a>
            </li>
            <li>
                <a href="produits.php"><i class="fa fa-fw fa-cubes"></i><span>Produits</span></a>
            </li>
            <li>
                <a href="inventaire.php"><i class="fa fa-fw fa-building-o"></i><span>Inventaire</span></a>
            </li>
            <li>
                <a href="utilisateurs.php"><i class="fa fa-fw fa-users"></i><span>Utilisateurs</span></a>
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
 <!--card container-->
            <div class="cards">
                <div class="products-card">
                    <div class="card-header">
                        <div class="amount">
                            <span class="title">Produits Disponibles</span>
                            <span class="amount-value">***</span>
                        </div>
                    </div>
                        <span class="carddetails">------------</span>
                    
                </div><br><br>

                <div class="products-card">
                  <div class="card-header">
                      <div class="amount">
                          <span class="title">Produits Reçu</span>
                          <span class="amount-value">***</span>
                      </div>
                  </div>
                      <span class="carddetails">-----------</span>
              </div>

              <div class="products-card">
                <div class="card-header">
                    <div class="amount">
                        <span class="title">En cours</span>
                        <span class="amount-value">***</span>
                    </div>
                </div>
                    <span class="carddetails">-----------</span>
            </div>
            <div class="products-card">
                <div class="card-header">
                    <div class="amount">
                        <span class="title">Inventaires Totales</span>
                        <span class="amount-value">***</span>
                    </div>
                </div>
                    <span class="carddetails">-----------</span>
            </div>



            </div>
                
                    
               

           
       





    </div>
    
</body>
</html>