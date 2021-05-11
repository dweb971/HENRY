<?php

class Config {
    # propriétés
    private $_nom;
    private $_prenom;
    private $_tel;
    private $_naissance;
    private $_login;
    private $_pass;
    private $_connectDB;

    # méthodes
    public function __construct($db){
        // instanciation Connect
        $this->set_connectDB($db->pdo);
        
    }

    public function ajouter_user(array $data){
        $this->set_nom($this->nettoyer(strtoupper($data["nom"])));
        $this->set_prenom($this->nettoyer(ucfirst($data["prenom"])));
        $this->set_tel($this->nettoyer($data["telephone"]));
        $this->set_naissance($this->nettoyer($data["naissance"]));
        $this->set_login($this->nettoyer(strtolower($data["email"])));
        $this->set_pass($this->nettoyer(password_hash($data["password"], PASSWORD_DEFAULT)));
        //echo $this->get_pass();

        //insert table profil puis user

        //print_r($_SESSION);

        if(!isset($_SESSION["login"])){

        }
        else{
            $dates = date("Y-m-d H:i:s"); //heure locale de la machine
            $reqI = "INSERT INTO profil (nom, prenom, telephone, date_naissance, dateAdd, dateUpdate)
            VALUES ('".$this->get_nom()."', '".$this->get_prenom()."', '".$this->get_tel()."', '".$this->get_naissance()."', '".$dates."', '".$dates."')";
            $dbh = $this->get_connectDB()->query($reqI);
            $idprofil = $this->get_connectDB()->lastInsertId();

            if($idprofil < 0){
                // error

            }
            else{
                // insert into user
                $reqU = "INSERT INTO user (idprofil, login, password, dateAdd, dateUpdate)
                VALUES ('".$idprofil."', '".$this->get_login()."', '".$this->get_pass()."', '".$dates."', '".$dates."')";
                $dbh = $this->get_connectDB()->query($reqU);

                if($dbh->rowCount() === 1){
                    //insert ok
                    $_SESSION["msg"] = "<p>L'ajout user $idprofil est réussi.</p>";
                    //redirection vers page login.php
                    /* Ceci produira une erreur. Notez la sortie ci-dessus,
                    * qui se trouve avant l'appel à la fonction header() */
                    header('Location: https://'.$_SERVER["HTTP_HOST"].'/backend/index.php?m=use');
                    exit;
                }
                else{

                }
            }
        }
    }

    public function update_pass(array $data){
        $this->set_login($this->nettoyer(strtolower($data["email"])));
        $log = $this->get_login();
        $this->set_pass($this->nettoyer($data["password"]));
        if($log != "" && $this->get_pass() != ""){
            //crypte mot de passe
            $newP = password_hash($this->get_pass(), PASSWORD_DEFAULT);
            $dates = date("Y-m-d H:i:s"); //heure locale de la machine
            //mise a jour pass
            $reqU = "UPDATE user SET password = '".$newP."', dateUpdate = '".$dates."' WHERE login = '".$log."' ";
            $dbh = $this->get_connectDB()->query($reqU);
            //redirection page login
            if($dbh->rowCount() === 1){
                //redirection et session vide
                $_SESSION["email"] = array();
                $_SESSION["error"] = array();
                $_SESSION = array();
                //redirection vers page login.php
                /* Ceci produira une erreur. Notez la sortie ci-dessus,
                * qui se trouve avant l'appel à la fonction header() */
                header('Location: https://'.$_SERVER["HTTP_HOST"].'/backend/login.php');
                exit;
            }
            else{
                //error update
                $_SESSION["error"] = "<p>ERREUR MISE A JOUR, contacter le webmaster.</p>";
            }
        }
    }

    public function new_pass($email){
        $this->set_login($this->nettoyer(strtolower($email)));
        $log = $this->get_login();
        $reqS = "SELECT * FROM user WHERE login = '".$log."'";
        $dbh = $this->get_connectDB()->query($reqS);

        if($dbh->rowCount() != 0){
            foreach($dbh as $row){
                $_SESSION["email"] = $row["login"];
            }
            // si email ok redirection vers fichier pass_ok
            /* Ceci produira une erreur. Notez la sortie ci-dessus,
            * qui se trouve avant l'appel à la fonction header() */
            header('Location: https://'.$_SERVER["HTTP_HOST"].'/backend/pass_ok.php');
            exit;
        }
        else {
            $_SESSION["error"] = "<p>Erreur de login / mot de passe, vérifier votre saisie.</p>";
            //redirection vers page login.php
            /* Ceci produira une erreur. Notez la sortie ci-dessus,
            * qui se trouve avant l'appel à la fonction header() */
            header('Location: https://'.$_SERVER["HTTP_HOST"].'/backend/login.php');
            exit;
        }
    }

    public function login(array $data){
        $this->set_login($this->nettoyer(strtolower($data["email"])));
        $log = $this->get_login();
        $reqS = "SELECT * FROM user WHERE login='".$log."'";

        $dbh = $this->get_connectDB()->query($reqS);
        if($dbh->rowCount() === 0){
            echo "Aucun résultat";
        }
        else{
            //print_r($dbh);
            foreach($dbh as $row){
                //print_r($row);
                $idp = $row["idprofil"];
                if(password_verify($data["password"], $row["password"])){
                    //echo "mot de passe ok";
                    $reqSP = "SELECT * FROM profil WHERE id = '".$idp."'";
                    $dbh = $this->get_connectDB()->query($reqSP);

                    if($dbh->rowCount() === 1){
                        //nom et prenom en session + email en session
                        foreach($dbh as $rowP){
                            $_SESSION["nom"] = $rowP["nom"];
                            $_SESSION["prenom"] = $rowP["prenom"];
                            $_SESSION["login"] = $row["login"];
                            /* Ceci produira une erreur. Notez la sortie ci-dessus,
                            * qui se trouve avant l'appel à la fonction header() */
                            header('Location: https://'.$_SERVER["HTTP_HOST"].'/backend/index.php');
                            exit;
                        }
                    }
                    else{
                        //redirection page login
                        /* Ceci produira une erreur. Notez la sortie ci-dessus,
                        * qui se trouve avant l'appel à la fonction header() */
                        header('Location: https://'.$_SERVER["HTTP_HOST"].'/backend/login.php');
                        exit;
                    }
                }
                else {
                    $_SESSION["error"] = "<p>Erreur de login / mot de passe, vérifier votre saisie.</p>";
                    /* Ceci produira une erreur. Notez la sortie ci-dessus,
                    * qui se trouve avant l'appel à la fonction header() */
                    header('Location: https://'.$_SERVER["HTTP_HOST"].'/backend/login.php');
                    exit;
                }
            }
        }
    }

    public function nettoyer($chaine){
        
        $chaine = trim(strip_tags($chaine));
        return $chaine;
    }

    # getter / setter
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
     * Get the value of _naissance
     */ 
    public function get_naissance()
    {
        return $this->_naissance;
    }

    /**
     * Set the value of _naissance
     *
     * @return  self
     */ 
    public function set_naissance($_naissance)
    {
        $this->_naissance = $_naissance;

        return $this;
    }

    /**
     * Get the value of _login
     */ 
    public function get_login()
    {
        return $this->_login;
    }

    /**
     * Set the value of _login
     *
     * @return  self
     */ 
    public function set_login($_login)
    {
        $this->_login = $_login;

        return $this;
    }

    /**
     * Get the value of _pass
     */ 
    public function get_pass()
    {
        return $this->_pass;
    }

    /**
     * Set the value of _pass
     *
     * @return  self
     */ 
    public function set_pass($_pass)
    {
        $this->_pass = $_pass;

        return $this;
    }

    /**
     * Get the value of _connectDB
     */ 
    public function get_connectDB()
    {
        return $this->_connectDB;
    }

    /**
     * Set the value of _connectDB
     *
     * @return  self
     */ 
    public function set_connectDB($_connectDB)
    {
        $this->_connectDB = $_connectDB;

        return $this;
    }
}