<?php 

class User{
    public $email;
    public $password;
    public $role;

    public function __construct($email, $password, $role){
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function setRole($role){
        $this->role = $role;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getRole(){
        return $this->role;
    }
}

