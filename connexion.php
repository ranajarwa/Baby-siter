
<?php
class Connexion {
    private $connexion;

    public function __construct() {
        $param_hote="localhost";
        $param_port="3306";
        $param_nom_bd="Babysiter";
        $param_utilisateur="adminBaby";
        $param_mot_passe="B@bysist3r";

        // pour tester s'il y a des fautes
        try {
            $this->connexion = new PDO (
             'mysql:host='.$param_hote. // nom de chemin de mon base de données, si on ne utilise pas my-sql on mit un autre mots place my_sql
             ';dbname='.$param_nom_bd,$param_utilisateur,$param_mot_passe);
        } catch (Exception $e){
            echo "Erreur:" .$e->getMessage().'<br/>';
            echo 'N°: ' .$e->getCode();
        }   
    }


    function getContrat($id){
        $contrat= $connexion->prepare(
            "SELECT c.id, b.nom as nomBabysiter, b.prenom as prenomBabysiter, b.age as ageBabysite, p.nom as  nomParent, p.prenom as prenomParent, p.adress as adress, e.nom as nomEnfant, e.prenom as prenomEnfant,e.age as ageEnfant, c.dateDebut as dateDebut 
            from Contrat c
                        inner join Parent p on c.parent=p.id
                        inner join Enfant e on c.enfant=e.id
                        inner join Babysiter b on c.babysiter=b.id
                        where c.id = 1"):
        $contact->execute(array("id"=>$id);
        $contacts = $contact->fetchAll(PDO::FETCHobject);
        return $contacts;
    }

    function getAllContrat(){
        $contrat= $connexion->prepare(
            "SELECT * from Contrat 
            inner join Parent p on c.parent=p.id
            inner join Enfant e on c.enfant=e.id
            inner join Babysiter b on c.babysiter=b.id
            where c.id = :idContact");
        $contact->execute(array("id"=>$id);
        $allContacts = $contact->fetchAll(PDO::FETCH_CLASS,"Contrat");
        return $contacts;
    }

    

}



?>