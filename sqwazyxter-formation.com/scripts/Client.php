<?php
class Client
{
    //propriétés
    private $_daterdv;
    private $_heure;
    private $_nom;
    private $_prenom;
    private $_tel;
    private $_email;
    private $_raison;
    private $_DBConnect;



    //méthodes
    public function __construct($connectOBJ){
        //instance PDO
        $this->set_DBConnect($connectOBJ->pdo);
    }


    public function prise_rdv(array $data){
        $dates = date("Y-m-d H:m:s");
        // affectation données
        $this->set_prenom(ucfirst($this->nettoyer($data["prenomFrm"])));
        $this->set_nom(strtoupper($this->nettoyer($data["nomFrm"])));
        $this->set_tel($this->nettoyer($data["telFrm"]));
        $this->set_email(strtolower($this->nettoyer($data["emailFrm"])));
        $this->set_raison($this->nettoyer($data["raisonFrm"]));
        $this->set_daterdv($this->nettoyer($data["rdvFrm"]));
        $this->set_heure($this->nettoyer($data["heureFrm"]));

        //requete insert
        $requete = "INSERT INTO rendez_vous (nom, prenom, telephone, email, raison, rdvFrm, heureFrm, dateAdd, dateUpdate)
        VALUES ('".$this->get_nom()."', '".$this->get_prenom()."', '".$this->get_tel()."', '".$this->get_email()."', '".$this->get_raison()."', '".$this->get_daterdv()."', '".$this->get_heure()."', '".$dates."', '".$dates."')";

        $dbh = $this->get_DBConnect()->query($requete);
        print_r($dbh);
    }

    public function insert_data($pdo){
        if(preg_match('/[0-9]+/', $this->get_tel) == true){
            echo $this->get_tel;
        }
        else{
            return false;
        }
    }

    public function nettoyer($chaine){
        
        $chaine = trim(strip_tags($chaine));
        return $chaine;
    }

    /*Getter & setter*/

    /**
     * Get the value of _daterdv
     */ 
    public function get_daterdv()
    {
        return $this->_daterdv;
    }

    /**
     * Set the value of _daterdv
     *
     * @return  self
     */ 
    public function set_daterdv($_daterdv)
    {
        $this->_daterdv = $_daterdv;

        return $this;
    }

    

        

    /**
     * Get the value of _heure
     */ 
    public function get_heure()
    {
        return $this->_heure;
    }

    /**
     * Set the value of _heure
     *
     * @return  self
     */ 
    public function set_heure($_heure)
    {
        $this->_heure = $_heure;

        return $this;
    }


    

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
     * Get the value of _raison
     */ 
    public function get_raison()
    {
        return $this->_raison;
    }

    /**
     * Set the value of _raison
     *
     * @return  self
     */ 
    public function set_raison($_raison)
    {
        $this->_raison = $_raison;

        return $this;
    }
}
?>