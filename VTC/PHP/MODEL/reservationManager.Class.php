<?php
class reservationManager
{
    public static function add(reservation $objet)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO reservation (idReservation,dateReservation,adresseDepart,destination,idUser,terminer) VALUES (:idReservation,:dateReservation,:adresseDepart,:destination,:idUser,:terminer)");
        $q->bindValue(":idReservation", $objet->getIdReservation());
        $q->bindValue(":dateReservation", $objet->getDateReservation());
        $q->bindValue(":adresseDepart", $objet->getAdresseDepart());
        $q->bindValue(":destination", $objet->getDestination());
        $q->bindValue(":idUser", $objet->getIdUser());
        $q->bindValue(":terminer", $objet->getTerminer());
        $q->execute();
    }

    public static function update(reservation $objet)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE reservation SET dateReservation=:dateReservation,adresseDepart=:adresseDepart,destination=:destination,idUser=:idUser,idChauffeur=:idChauffeur,terminer=:terminer WHERE idReservation=:idReservation");
        $q->bindValue(":idReservation", $objet->getIdReservation());
        $q->bindValue(":dateReservation", $objet->getDateReservation());
        $q->bindValue(":adresseDepart", $objet->getAdresseDepart());
        $q->bindValue(":destination", $objet->getDestination());
        $q->bindValue(":idUser", $objet->getIdUser());
        $q->bindValue(":idChauffeur", $objet->getIdChauffeur());
        $q->bindValue(":terminer", $objet->getTerminer());
        $q->execute();
    }

    public static function delete(reservation $objet)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM reservation WHERE idReservation=" . $objet->getIdReservation());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;  //Verifie pour eviter injection sql
        $q = $db->query("SELECT * FROM reservation WHERE idreservation=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new reservation($results);
        } else {
            return false;
        }
    }

    public static function getList($idUser)
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM reservation WHERE idUser=". $idUser);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new reservation($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Roles
    }

    public static function getListAttente()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM reservation WHERE ISNULL(idChauffeur) = 1 ");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new reservation($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Roles
    }

    public static function getListEnCour()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM reservation WHERE terminer = 0 ");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new reservation($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Roles
    }
}
