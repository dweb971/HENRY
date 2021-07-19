<?php

/*


*/

class Connect
{
    // propriétés 
    public $host;
    public $user;
    public $password;
    public $db;
    public $DBConnect;
    public $pdo;







    //methodes
    public function __construct()
    {
        //indiquer informations de connexions db
        $this->host = 'localhost'; // ou 127.0.0.1
        $this->user = 'projets'; // jamais ecrire root
        $this->password = 'F5fgG88Ei';
        $this->db = 'projets';


       $this->instance_db($this->host, $this->db, $this->user, $this->password);


    } // construteur fin.

    public function instance_db($host, $db, $user, $pass)
    {
        // instance PDO

        /**
         * dsn = Data Source Name 
         * username = nom utilisateur db
         * passwd = mot de passe utilisateur db 
         */
        try {
            // création objet PDO avec propriété en parametre
            $this->pdo = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pass);
            $this->pdo->exec('SET CHARACTER SET utf8');
            $this->pdo->exec('SET NAMES SET utf8');
            return $this->pdo; //retourné objet pdo

        } catch (PDOException $event) {
            //lever une exception = attraper une erreur et l'afficher
            echo'ERREUR DE CONNEXION'.$event->getMessage(), $event->getCode();
        }





    } // fin instance

    public function db_connexion()
    {
        //affiche ou renvoi le nom de la data base
        return $this->db;

    }// fin db connexion


}// fin class connect.