<?php
class Database{

    private $server = "localhost";
    private $db = "crud";
    private $user = "root";
    private $password = "";
    private $conn;

    public function __construct(){
        try {
            $this->conn = new PDO("mysql:host=$this->server;dbname=$this->db", $this->user, $this->password);
            } catch (PDOException $e) {
                die ($e->getMessage());
            }
    }

    public function register_product($description, $quantity, $price){
        $sql = "INSERT INTO produto (descript, quantity, price) VALUES ('$description', $quantity, $price)";
        $this->conn->exec($sql);

        echo "Product registered. Redirecting after 2 seconds";
        header("refresh:2; ../index.php");
        //exit();
    }

    public function fetch_product(){
        $sql = $this->conn->prepare("SELECT * FROM produto");

        if($sql->execute()){
            if($sql->rowCount() > 0){
                // return $sql->fetch(PDO::FETCH_OBJ);
                return $sql->fetchAll();
            }
        }
    }

    public function update_product($Id, $description, $quantity, $price){
        $sql = $this->conn->prepare("UPDATE produto SET descript=?, quantity=?, price=? WHERE Id=?");
        $sql->execute([$description, $quantity, $price, $Id]);

        echo "Product updated. Redirecting after 2 seconds";
        header("refresh:2; ../index.php");
    }

    public function delete_product($Id){
        $sql = $this->conn->prepare("DELETE FROM produto WHERE Id=?");
        $sql->execute([$Id]);

        echo "Product removed. Redirecting after 2 seconds";
        header("refresh:2; ../index.php");
    }


}