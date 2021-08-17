<?php
class userManager
{
    public static function add(user $objet)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO user(idUser,nomUser,prenomUser,mailUser,telUser,mdpUser,idRole) VALUES (:idUser,:nomUser,:prenomUser,:mailUser,:telUser,:mdpUser,:idRole)");
        $q->bindValue(":idUser", $objet->getIdUser());
        $q->bindValue(":nomUser", $objet->getNomUser());
        $q->bindValue(":prenomUser", $objet->getPrenomUser());
        $q->bindValue(":mailUser", $objet->getMailUser());
        $q->bindValue(":telUser", $objet->getTelUser());
        $q->bindValue(":mdpUser", $objet->getMdpUser());
        $q->bindValue(":idRole", $objet->getIdRole());
        $q->execute();
    }

    public static function update(user $objet)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE user SET ***** WHERE *****");
        $q->bindValue(":idUser", $objet->getIdUser());
        $q->bindValue(":nomUser", $objet->getNomUser());
        $q->bindValue(":prenomUser", $objet->getPrenomUser());
        $q->bindValue(":mailUser", $objet->getMailUser());
        $q->bindValue(":mdpUser", $objet->getMdpUser());
        $q->bindValue(":idRole", $objet->getIdRole());
        $q->execute();
    }

    public static function delete(user $objet)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM user WHERE idUser=" . $objet->getIdUser());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;  //Verifie pour eviter injection sql
        $q = $db->query("SELECT * FROM user WHERE iduser=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new user($results);
        } else {
            return false;
        }
    }
    public static function findByMail($mailUser){
        $db = DbConnect::getDb();
        if (!strstr($mailUser,";")){
            $requete = $db->query("SELECT * FROM user WHERE mailUser ='".$mailUser."'");
            $resultats = $requete->fetch(PDO::FETCH_ASSOC);
            if ($resultats != false){
                return new User($resultats);
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM user order by nomRole");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new user($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Roles
    }
}
