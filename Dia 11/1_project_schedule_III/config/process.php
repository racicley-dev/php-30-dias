<?php

session_start();

include_once('connection.php');
include_once('url.php');

$data = $_POST;

//CHANGE DATA
if(!empty($data)){

    //Create contact
    if($data["type"] === "create"){
        $name = $data['name'];
        $phone = $data['phone'];
        $observations = $data['observations'];

        $query = "INSERT INTO contacts(name, phone, observations) VALUES (:name, :phone,:observations)";
        
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":name",$name);
        $stmt->bindParam(":phone",$phone);
        $stmt->bindParam(":observations",$observations);
        

        try {
            $stmt->execute();
            $_SESSION['msg'] = "Sucess! Contact created!";
        }catch(PDOException $e){
            //Connection error
            $error = $e->getMessage();
            echo "Error: $error";
        }

    //Edit Contact
    }else if($data["type"] === "edit"){
        $id = $data['id'];
        $name = $data['name'];
        $phone = $data['phone'];
        $observations = $data['observations'];

        $query = "UPDATE contacts SET name = :name, phone = :phone, observations = :observations WHERE id = :id";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":name",$name);
        $stmt->bindParam(":phone",$phone);
        $stmt->bindParam(":observations",$observations);
        $stmt->bindParam(":id",$id);
        try {
            $stmt->execute();
            $_SESSION['msg'] = "Sucess! Contact updated!";
        }catch(PDOException $e){
            //Connection error
            $error = $e->getMessage();
            echo "Error: $error";
        }

        
    }
    //Redirect HOME
    header("Location:" . $BASE_URL . "../index.php");
//SELECT DATA
} else {
    $id;

    if(!empty($_GET)){
        $id = $_GET['id'];
    }
    //Single contact
    if(!empty($id)){
        $query = "SELECT * FROM contacts WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        $contact = $stmt->fetch();
    }else{
        //All contacts
        $query = "SELECT * FROM contacts";

        $stmt = $conn->prepare($query);
        $stmt->execute();
        $contacts = $stmt->fetchAll();
    }
}




//CLOSE
$conn = null;
