<?php
class Reservation
{
    //propriétés
    private $_nom;
    private $_prenom;
    private $_periode;
    private $_salle;
    private $_datereservation;
    private $_DBConnect;
    private $_reservation;


    //méthodes
    public function __construct($connectOBJ){
        //instance PDO
        $this->set_DBConnect($connectOBJ->pdo);
    }


    public function reservation(array $data){

        $dates = date("Y-m-d H:m:s");

        // affectation données
        $this->set_nom(strtoupper($this->nettoyer($data["nomForm"])));
        $this->set_prenom(ucfirst($this->nettoyer($data["prenomForm"])));
        $this->set_periode($this->nettoyer($data["periodeFrm"]));
        $this->set_salle($this->nettoyer($data["salleFrm"]));
        $this->set_datereservation($this->nettoyer($data["rdvFrm"]));

        //requete insert
        $requete = "INSERT INTO reservation (nom, prenom, periode, salle, rdvFrm, dateAdd, dateUpdate)
        VALUES ('".$this->get_nom()."', '".$this->get_prenom()."', '".$this->get_periode()."', '".$this->get_salle()."', '".$this->get_datereservation()."', '".$dates."', '".$dates."')";

        $dbh = $this->get_DBConnect()->query($requete);
        echo ('Informations envoyés!');

    }

    public function nettoyer($chaine){
        
        $chaine = trim(strip_tags($chaine));
        return $chaine;
    }

    /*Getter & setter*/

    /**
     * Get the value of _nom
     */ 
    public function get_nom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of _nom
     *
     * @return  self
     */ 
    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    /**
     * Get the value of _prenom
     */ 
    public function get_prenom()
    {
        return $this->_prenom;
    }

    /**
     * Set the value of _prenom
     *
     * @return  self
     */ 
    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    /**
     * Get the value of _periode
     */ 
    public function get_periode()
    {
        return $this->_periode;
    }

    /**
     * Set the value of _periode
     *
     * @return  self
     */ 
    public function set_periode($_periode)
    {
        $this->_periode = $_periode;

        return $this;
    }

    /**
     * Get the value of _DBConnect
     */ 
    public function get_DBConnect()
    {
        return $this->_DBConnect;
    }

    /**
     * Set the value of _DBConnect
     *
     * @return  self
     */ 
    public function set_DBConnect($_DBConnect)
    {
        $this->_DBConnect = $_DBConnect;

        return $this;
    }

    /**
     * Get the value of _salle
     */ 
    public function get_salle()
    {
        return $this->_salle;
    }

    /**
     * Set the value of _salle
     *
     * @return  self
     */ 
    public function set_salle($_salle)
    {
        $this->_salle = $_salle;

        return $this;
    }

    /**
     * Get the value of _datereservation
     */ 
    public function get_datereservation()
    {
        return $this->_datereservation;
    }

    /**
     * Set the value of _datereservation
     *
     * @return  self
     */ 
    public function set_datereservation($_datereservation)
    {
        $this->_datereservation = $_datereservation;

        return $this;
    }
}
?>