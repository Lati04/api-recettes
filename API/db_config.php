<?php
// Connexion à la base de donnée
class DB_config {
    private $host = 'sql313.byethost14.com';
    private $db_name = 'b14_39005182_api_db';
    private $username = 'b14_39005182';
    private $password = '@Lati09@';

    public function getConnection(){
        try{
            $dsn ='mysql:host='. $this->host.';dbname='.$this->db_name;
            $pdo =new PDO($dsn, $this->username, $this->password);
            $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            echo 'Erreur de connexion à la base de données:'. $e->getMessage();
        }
        return $pdo;
    }
}
?>