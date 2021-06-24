<?php
class rolesManager
{
    public static function add(roles $objet)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO roles(idRole,nomRole) VALUES (:idRole,:nomRole)");
        $q->bindValue(":idRole", $objet->getIdRole());
        $q->bindValue(":nomRole", $objet->getNomRole());
        $q->execute();
    }

    public static function update(roles $objet)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE role SET ***** WHERE *****");
        $q->bindValue(":idRole", $objet->getIdRole());
        $q->bindValue(":nomRole", $objet->getNomRole());
        $q->execute();
    }

    public static function delete(roles $objet)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM role WHERE idRole=" . $objet->getIdRole());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;  //Verifie pour eviter injection sql
        $q = $db->query("SELECT * FROM role WHERE idrole=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new roles($results);
        } else {
            return false;
        }
    }
    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM role order by nomRole");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new roles($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Roles
    }
}
