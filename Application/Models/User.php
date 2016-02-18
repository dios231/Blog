<?php
namespace Application\Models;
Class User{
    //Usersname.
    protected $username;
    //Password.
    protected $password;
    //User's id.
    protected $id;
    //User status (online/offline).
    protected $isOnline;
    
   
    
    public function setUsername($username){
        $this->username = $username;
    }
    
    public function setPassowrd($passowrd){
        $this->password = $passowrd;
    }
    public function setId($id){
        $this->id = $id;
    }
    
    //set TRUE if online. FALSE if offline.
    public function setStatus($status){
        $this->isOnline = $status;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function getId(){
        return $this->id;
    }
    //Retrun TRUE if user is online. FALSE if offline.
    public function getStatus(){
        return $this->isOnline;
    }
    
    //A set function to initialize all the user properties.
    public function setValues($arrayOfValues){
        $this->id = $arrayOfValues['ID'];
        $this->username = $arrayOfValues['username'];
        $this->password = $arrayOfValues['password'];
    }
}