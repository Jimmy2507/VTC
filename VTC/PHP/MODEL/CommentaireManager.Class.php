<?php
class CommentaireManager
{
    public static function add(Commentaire $objet)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Commentaire(idCommentaire,idUser,commentaire) VALUES (:idCommentaire,:idUser,:commentaire)");
        $q->bindValue(":idCommentaire", $objet->getIdCommentaire());
        $q->bindValue(":idUser", $objet->getIdUser());
        $q->bindValue(":commentaire", $objet->getCommentaire());
        $q->execute();
    }

    public static function update(Commentaire $objet)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Commentaire SET ***** WHERE *****");
        $q->bindValue(":idCommentaire", $objet->getIdCommentaire());
        $q->bindValue(":idUser", $objet->getIdUser());
        $q->bindValue(":commentaire", $objet->getCommentaire());
        $q->execute();
    }

    public static function delete(Commentaire $objet)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Commentaire WHERE idCommentaire=" . $objet->getIdCommentaire());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;  //Verifie pour eviter injection sql
        $q = $db->query("SELECT * FROM Commentaire WHERE idCommentaire=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Commentaire($results);
        } else {
            return false;
        }
    }
    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Commentaire");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new Commentaire($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Roles
    }
}
