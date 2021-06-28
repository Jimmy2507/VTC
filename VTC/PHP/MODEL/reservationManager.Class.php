<?php
class reservationManager
{
    public static function add(reservation $objet)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO reservation (idReservation,dateReservation,adresseDepart,destination,idUser) VALUES (:idReservation,:dateReservation,:adresseDepart,:destination,:idUser)");
        $q->bindValue(":idReservation", $objet->getIdReservation());
        $q->bindValue(":dateReservation", $objet->getDateReservation());
        $q->bindValue(":adresseDepart", $objet->getAdresseDepart());
        $q->bindValue(":destination", $objet->getDestination());
        $q->bindValue(":idUser", $objet->getIdUser());
        $q->execute();
    }

    public static function update(reservation $objet)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE reservation SET ***** WHERE *****");
        $q->bindValue(":idReservation", $objet->getIdReservation());
        $q->bindValue(":dateReservation", $objet->getDateReservation());
        $q->bindValue(":adresseDepart", $objet->getAdresseDepart());
        $q->bindValue(":destination", $objet->getDestination());
        $q->bindValue(":idUser", $objet->getIdUser());
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
    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM reservation order by nomRole");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new reservation($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Roles
    }
}
