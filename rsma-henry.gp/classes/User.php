<?php
class User
{
    //propriétés
    private $_civilite;
    private $_nom;
    private $_prenom;
    private $_tel;
    private $_email;
    private $_motdepasse;
    private $_adresse;
    private $_complementaire;
    private $_postal;
    private $_ville;
    private $_pays;



    //méthodes
    public function __construct(){

    }


    public function formulaire(array $data){
        // affectation données
        print_r($data);
        $this->set_civilite($this->nettoyer($data["civilite"]));
        $this->set_nom(strtoupper($this->nettoyer($data["nom"])));
        $this->set_prenom(ucfirst($this->nettoyer($data["prenom"])));
        $this->set_tel($this->nettoyer($data["telephone"]));
        $this->set_email(strtolower($this->nettoyer($data["email"])));
        $this->set_motdepasse($this->nettoyer($data["motdepasse"]));
        $this->set_adresse($this->nettoyer($data["adresse"]));
        $this->set_complementaire($this->nettoyer($data["complementaire"]));
        $this->set_postal($this->nettoyer($data["postal"]));
        $this->set_pays($this->nettoyer($data["pays"]));
    }

    public function insert_data(){
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
     * Get the value of _civilite
     */ 
    public function get_civilite()
    {
        return $this->_civilite;
    }

    /**
     * Set the value of _civilite
     *
     * @return  self
     */ 
    public function set_civilite($_civilite)
    {
        $this->_civilite = $_civilite;

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
     * Get the value of _motdepasse
     */ 
    public function get_motdepasse()
    {
        return $this->_motdepasse;
    }

    /**
     * Set the value of _motdepasse
     *
     * @return  self
     */ 
    public function set_motdepasse($_motdepasse)
    {
        $this->_motdepasse = $_motdepasse;

        return $this;
    }

    /**
     * Get the value of _adresse
     */ 
    public function get_adresse()
    {
        return $this->_adresse;
    }

    /**
     * Set the value of _adresse
     *
     * @return  self
     */ 
    public function set_adresse($_adresse)
    {
        $this->_adresse = $_adresse;

        return $this;
    }

    /**
     * Get the value of _complementaire
     */ 
    public function get_complementaire()
    {
        return $this->_complementaire;
    }

    /**
     * Set the value of _complementaire
     *
     * @return  self
     */ 
    public function set_complementaire($_complementaire)
    {
        $this->_complementaire = $_complementaire;

        return $this;
    }

    /**
     * Get the value of _postal
     */ 
    public function get_postal()
    {
        return $this->_postal;
    }

    /**
     * Set the value of _postal
     *
     * @return  self
     */ 
    public function set_postal($_postal)
    {
        $this->_postal = $_postal;

        return $this;
    }

    /**
     * Get the value of _ville
     */ 
    public function get_ville()
    {
        return $this->_ville;
    }

    /**
     * Set the value of _ville
     *
     * @return  self
     */ 
    public function set_ville($_ville)
    {
        $this->_ville = $_ville;

        return $this;
    }

    /**
     * Get the value of _pays
     */ 
    public function get_pays()
    {
        return $this->_pays;
    }

    /**
     * Set the value of _pays
     *
     * @return  self
     */ 
    public function set_pays($_pays)
    {
        $this->_pays = $_pays;

        return $this;
    }

}

?>