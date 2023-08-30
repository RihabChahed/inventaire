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
    <!------Side bar----->
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li>
                <a href="Acceuil.php" ><i class="fa fa-fw fa-home"></i><span>Acceuil</span></a>
            </li>
            <li>
                <a href="produits.php" class="active"><i class="fa fa-fw fa-cubes"></i><span>Produits</span></a>
            </li>
            <li>
                <a href="inventaire.php"><i class="fa fa-fw fa-building-o"></i><span>Inventaire</span></a>
            </li>
            <li>
                <a href="utilisateurs.php" ><i class="fa fa-fw fa-users"></i><span>Utilisateurs</span></a>
            </li>
            <li>
                <a href="logout.php"><i class="fa fa-sign-out"></i><span>Se déconnecter</span></a>
            </li>
        </ul>
    </div>

    
    <div class="main-content">
        <!--Navbar-------->
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
        <!--Button Ajout d'un produit---->
        
            <button class="btn btn-dark " onclick="openPopup()"><a>+ Ajouter un produit</a></button>
            <div class="popup" id="popup" >
                <h5>Nouveau Produit</h5>
                <form method="post" action="addprod.php" >
                    <input type="text" placeholder="NomArt" name="NomArt">
                    <input type="text" placeholder="Descri" name="Descri">
                    <input type="text" placeholder="Type" name="Type">
                    <input type="text" placeholder="QteStock" name="QteStock">
                    <input type="text" placeholder="QteAffectee" name="QteAffectee">
                    <input type="text" placeholder="Etat" name="Etat">
                    <input type="text" placeholder="DateSortie" name="DateSortie">
                    <input type="text" placeholder="DateRecu" name="DateRecu">
                    <input type="text" placeholder="Unite" name="Unite">
                    <input type="text" placeholder="Marque" name="Marque">
                    <input type="text" placeholder="Num_serie" name="Num_serie">
                    <input type="text" placeholder="Cond" name="Cond">
                    <input type="text" placeholder="Bureau" name="Bureau">
                    <input type="text" placeholder="Id_empl" name="Id_empl">
                        
                    <button class="btn btn-primary " onclick="openPopup()"><a>Ajouter</a></button> 
                    
                </form>
                <button class="btn btn-secondary" onclick="closePopup()"><a>Annuler</a></button>
            </div>
        

        <!--table--------->
    <div class="tabledet">
        <h2>Les Produits</h2><br><br><br>
        <table class="table" >
         <thead>
            <tr>
                <th>Id_Art</th>
                <th>NomArt</th>
                <th>Descri</th>
                <th>Type</th>
                <th>QteStock</th>
                <th>QteAffectee</th>
                <th>Etat</th>
                <th>Date Sortie</th>
                <th>DateRecu</th>
                <th>Unite</th>
                <th>Marque</th>
                <th>Num_serie</th>
                <th>Cond</th>
                <th>Bureau</th>
                <th>Id_empl</th>
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
        $sqll="SELECT * FROM Materiels";
        $resultt=$check->query($sqll);

        if(!$resultt){
            die("Invalid query: " . $check->error);
        }
        
        while($row = $resultt->fetch_assoc()){
            echo"
            <tr>
            <td>" . $row["Id_Art"] . "</td>
            <td>" . $row["NomArt"] . "</td>
            <td> ". $row["Descri"] . "</td>
            <td> ". $row["Type"] . "</td>
            <td> ". $row["QteStock"] . "</td>
            <td>" . $row["QteAffectee"] . "</td>
            <td> ". $row["Etat"] . "</td>
            <td> ". $row["Date Sortie"] . "</td>
            <td> ". $row["DateRecu"] . "</td>
            <td>" . $row["Unite"] . "</td>
            <td> ". $row["Marque"] . "</td>
            <td> ". $row["Num_serie"] . "</td>
            <td> ". $row["Cond"] . "</td>
            <td> ". $row["Bureau"] . "</td>
            <td> ". $row["Id_empl"] . "</td>
            </tr>" ;
        }
        ?>
     
     </tbody>
     </table>
     </div>


    </div>
    


    
    <script>
        let popup = document.getElementById("popup");
        function openPopup(){
            popup.classList.add("open-popup");
        }
        function closePopup(){
            popup.classList.remove("open-popup");
        }
        
    </script>
</body>
</html>