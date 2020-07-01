
<?php
function getConnexion()
{
    $serveur= 'localhost';
    $dbname='activite_bancaire';
    $user='root';
    $mdp='';
    try{
        $conn = new PDO("mysql:host=$serveur;dbname=$dbname", $user, $mdp);
        return $conn;
    }
    catch (PDOException $e)
    {
         die('Erreur de connexion');
    }
    
}
if(isset($_POST) && !empty($_POST)){
    
    try{
        
        //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $cnx=getConnexion();
        $requete="INSERT INTO `clientphysique`(`idClientPhysique`, `nom`, `prenom`, `telephone`, `genre`, `email`, `adresse`, `profession`, `salarie`, `salaire_actuel`, `nom_employeur`, `cni`) VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?)";
       $preparedstatement=$cnx->prepare($requete);
       $result=$preparedstatement->execute(array($_POST["nom"], $_POST["prenom"], $_POST["telephone"], $_POST["Genre"], $_POST["Email"], $_POST["Adresse"], $_POST["Profession"],$_POST["salarie"],$_POST["salaire_actuel"],$_POST["nom_employeur"],$_POST["cni"]));
       
        if($result){
            echo 'client ajoute';
            var_dump($_POST);
        }
}
catch (PDOException $e)
{
    echo $e->getMessage();
}
}

 ?>





 