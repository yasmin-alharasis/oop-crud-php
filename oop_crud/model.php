<?php
    class Model{
    private $db= "oop_crud";
    private $host = "localhost";
    private $username = "root";
    private $password ;
    public $conn;



    public function __construct()
    {
        try {

            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);
            // return $this->conn;
            // echo 'true';
        } catch (PDOExecption $exception) {
            echo $exception->getMessage();
        }
    }

    public function insert(){
        if(isset($_POST['submit'])){
            //echo 'submit';
             if(isset($_POST['name'])&& isset($_POST['email'])&& isset($_POST['mobile'])&& isset($_POST['address'])){
                 if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['address'])){
                    $name =$_POST['name'];
                    $mobile=$_POST['mobile'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];

                    $query ="INSERT INTO records (name,email,mobile,address) VALUES ('$name','$email','$mobile','$address')";
                    if($sql=$this->conn->query($query)){
                        echo "<script>alert('records added successfully');</script>";
                        echo "<script>window.location.href='index.php';</script>";
                    }
                    else{
                        echo "<script>alert('falied');</script>";
                        echo "<script>window.location.href='index.php';</script>";
                    }
                 }else{
                     echo "<script>alert('empty');</script>";
                     echo "<script>window.location.href='index.php';</script>";
                 }
             }
        }
    }
     public function fetch(){
         //$data = null;
         $query ="SELECT * FROM records";
            $sql=$this->conn->prepare($query);
            $sql->execute();
            $row = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $row;
            }

     public function delete($id){
         //echo $id;
         $query = "DELETE FROM records WHERE id = '$id'";
            $sql=$this->conn->prepare($query);
            return $sql->execute();
            } 
            
     public function fetch_single($id){
         
         $query = "SELECT * FROM records WHERE id = '$id'";
         $sql=$this->conn->prepare($query);
         $sql->execute();
         $row = $sql->fetchAll(PDO::FETCH_ASSOC);
         return $row;

      }
     
       public function edit($id){
           //echo $id; 
           $query = "SELECT * FROM records WHERE id = '$id'";
           $sql=$this->conn->prepare($query);
           $sql->execute();
           $row = $sql->fetchAll(PDO::FETCH_ASSOC);
           return $row;

       }

       public function update($data){
           //var_dump($data);

            $query="UPDATE records SET name='$data[name]',email='$data[email]',mobile='$data[mobile]',address='$data[address]' WHERE id='$data[id]'";
            $sql=$this->conn->prepare($query);
            $sql->execute();
       
        }
     }                 
    

    
?>