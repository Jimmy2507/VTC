<?php class reservation { 
/*****************Attributs***************** */
	 private $_idReservation;
	 private $_dateReservation;
	 private $_adresseDepart;
	 private $_destination;
	 private $_idUser;
/*****************Accesseurs***************** */
public function getIdReservation(){
	return $this->_idReservation;
}
public function setIdReservation($idReservation){
	$this->_idReservation = $idReservation;
}
public function getDateReservation(){
	return $this->_dateReservation;
}
public function setDateReservation($dateReservation){
	$this->_dateReservation = $dateReservation;
}
public function getAdresseDepart(){
	return $this->_adresseDepart;
}
public function setAdresseDepart($adresseDepart){
	$this->_adresseDepart = $adresseDepart;
}
public function getDestination(){
	return $this->_destination;
}
public function setDestination($destination){
	$this->_destination = $destination;
}
public function getIdUser(){
	return $this->_idUser;
}
public function setIdUser($idUser){
	$this->_idUser = $idUser;
}
/*****************Constructeur******************/ 
public function __construct(array $options = [])
{
    if (!empty($options)) // empty : renvoi vrai si le tableau est vide
    {
        $this->hydrate($options);
    }
}
public function hydrate($data)
{
    foreach ($data as $key => $value)
    {
        $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
        if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
        {
            $this->$methode($value);
        }
    }
}
/*****************Autres Méthodes***************** */ 
    /**
    * Transforme l'objet en chaine de caractères
    *
    * @return String
    */
   public function toString()
   {
       return "";
   }

   /**
    * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
    *
    * @param [type] $obj
    * @return bool
    */
   public function equalsTo($obj)
   {
       return true;
   }
   /**
    * Compare 2 objets
    * Renvoi 1 si le 1er est >
    *        0 si ils sont égaux
    *        -1 si le 1er est <
    *
    * @param [type] $obj1
    * @param [type] $obj2
    * @return void
    */
   public static function compareTo($obj1, $obj2)
   {
       return 0;
   }
}