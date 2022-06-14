<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/TousCompte.css" rel="stylesheet" >
    <title>Liste des Comptes</title>
</head>
<body>
<?php   
        if($_SESSION["role"]==1){
            $requete = "SELECT * FROM compte";
            $result = mysqli_query($conn,$requete); 
            while ($row = mysqli_fetch_assoc($result)){
                $pp=$row["PhotoProfil"];
                $prenom=$row["Prenom"];
                $nom=$row["Nom"];
                $dateCreation=$row["DateCreation"];
                $id=$row["IdCompte"]
                ?>
                <br/>
                <div class="compte">
                    <img class="ppImgAutre" src="..\images\PhotoProfil\<?php if($pp!=NULL){echo $pp;}else{echo "defaultpp.jpg";} ?>">
                    <div class="InfosCompte"> 
                        <p><?php echo $prenom." ".$nom; ?>
                        <p>Compte créé le: <?php echo $dateCreation;?></p>
                        <form action="Profil.php" method="post">
                        <input type="hidden" name="CompteId" value="<?php echo $id; ?>">
                        <input type="submit" value="Modifier/Supprimer" >
                    </form>
                    </div>
                    
                </div>
                <br/>
                <?php
            }
        }
        else{
            ?>
                <script type="text/javascript">
                    alert("Tu n'est pas admin");
                    location="home.php";
                </script>
            <?php
        }

        
        ?>
</body>
</html>
