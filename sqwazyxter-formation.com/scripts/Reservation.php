<?php
class Reservation
{
    //propriétés
    private $_nom;
    private $_prenom;
    private $_salle;
    private $_datereservation;
    private $_DBConnect;
    private $_reservation;
    private $_email;
    private $_tel;
    private $_heureD;
    private $_heureF;


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
        $this->set_salle($this->nettoyer($data["salleFrm"]));
        $this->set_datereservation($this->nettoyer($data["rdvFrm"]));
        $this->set_email($this->nettoyer($data["email"]));
        $this->set_tel($this->nettoyer($data["tel"]));
        $this->set_heureD($this->nettoyer($data["heureD"]));
        $this->set_heureF($this->nettoyer($data["heureF"]));

        //requete insert
        $requete = "INSERT INTO reservation (nom, prenom, salle, rdvFrm, email, tel, heureD, heureF, dateAdd, dateUpdate)
        VALUES ('".$this->get_nom()."', '".$this->get_prenom()."', '".$this->get_salle()."', '".$this->get_datereservation()."', '".$this->get_email()."', '".$this->get_tel()."', '".$this->get_heureD()."', '".$this->get_heureF()."', '".$dates."', '".$dates."')";

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

    /**
     * Get the value of _email
     */ 
    public function get_email()
    {
        return $this->_email;
    }

    /**
     * Set the value of _email
     *
     * @return  self
     */ 
    public function set_email($_email)
    {
        $this->_email = $_email;

        return $this;
    }

    /**
     * Get the value of _tel
     */ 
    public function get_tel()
    {
        return $this->_tel;
    }

    /**
     * Set the value of _tel
     *
     * @return  self
     */ 
    public function set_tel($_tel)
    {
        $this->_tel = $_tel;

        return $this;
    }

    /**
     * Get the value of _heureD
     */ 
    public function get_heureD()
    {
        return $this->_heureD;
    }

    /**
     * Set the value of _heureD
     *
     * @return  self
     */ 
    public function set_heureD($_heureD)
    {
        $this->_heureD = $_heureD;

        return $this;
    }

    /**
     * Get the value of _heureF
     */ 
    public function get_heureF()
    {
        return $this->_heureF;
    }

    /**
     * Set the value of _heureF
     *
     * @return  self
     */ 
    public function set_heureF($_heureF)
    {
        $this->_heureF = $_heureF;

        return $this;
    }
}
?>