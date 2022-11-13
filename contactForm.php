<?php
namespace starlabsProject;
use database;
include_once ('database.php');
use PDO;
use PDOException;

class ContactForm extends Database{

    protected $id;
    protected $firstname;
    protected $surname;
    protected $email;
    protected $phone;
    protected $projecttitle;
    protected $descproject;

    public function getID(){
        return $this->id;
    }
    public function setID($id){
        $this->id=$id;
    }
    public function getFirstName(){
        return $this->firstname;
    }
    public function setFirstName($firstname){
        $this->firstname=$firstname;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function setSurname($surname){
        $this->surname=$surname;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function getPhone(){
        return $this->phone;
    }
    public function setPhone($phone){
        $this->phone=$phone;
    }
    public function getProjecttitle(){
        return $this->projecttitle;
    }
    public function setProjectTitle($projecttitle){
        $this->projecttitle=$projecttitle;
    }
    public function getDescription(){
        return $this->descproject;
    }
    public function setDescription($descproject)
    {
        return $this->descproject = $descproject;
    }
    public function store(){
        try{
            $sql="INSERT INTO contact_form(firstname,surname,email,phone,projecttitle,descrproject) VALUES(:firstname,:surname,:email,:phone,:projecttitle,:descrproject)";
            $res=$this->prepare($sql);
            $res->bindParam(':firstname',$this->firstName);
            $res->bindParam(':surname',$this->surname);
            $res->bindParam(':email',$this->email);
            $res->bindParam(':phone',$this->phone);
            $res->bindParam(':projecttitle',$this->projecttitle);
            $res->bindParam(':descrproject',$this->descproject);
            $res->execute();
        }catch (\PDOException $e){
            echo "Error ".$e->getMessage();
        }
    }


}
?>

