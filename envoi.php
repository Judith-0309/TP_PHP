
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
        $requete="INSERT INTO `cliententreprise`(`idEntreprise`, `nomEntreprise`, `ninea`, `registreCom`, `adresse`, 
        `email`, `telephone`, `raison_sociale`) VALUES (NULL,?,?,?,?,?,?,?)";
       $preparedstatement=$cnx->prepare($requete);
       $result=$preparedstatement->execute(array($_POST["nomEntreprise"], $_POST["ninea"], $_POST["registreCom"], $_POST["adresse"],
        $_POST["email"], $_POST["telephone"],$_POST["raison_sociale"]));
       
        if($result){
            echo 'compte ouvert';
            var_dump($_POST);
        }
}
catch (PDOException $e)
{
    echo $e->getMessage();
}
}

 ?>





 





 





 