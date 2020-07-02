
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
        
        $cnx=getConnexion();
        $requete="INSERT INTO `compte`(`idCompte`, `typeCompte`, `idEntreprise`, `idClientPhysique`, `Numero_Compte`, `Cle_Rib`, `Etat_Compte`, `Depot_initial`, `Date_ouverture`) VALUES(NULL,?,?,?,?,?,?,?,?)";
       $preparedstatement=$cnx->prepare($requete);
       $result=$preparedstatement->execute(array($_POST["typeCompte"],NULL,NULL, $_POST["Numero_Compte"], $_POST["Cle_Rib"], $_POST["Etat_Compte"], $_POST["Depot_initial"],$_POST["Date_ouverture"]));
       
        if($result){
            echo ' compte  bien cree';
           
           
        }
}
catch (PDOException $e)
{
    echo $e->getMessage();
}
}

 ?>





 