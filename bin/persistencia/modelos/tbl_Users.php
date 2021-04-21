<?php

class tbl_Users extends ModeloGenerico{

    protected $id_user;
    protected $role_user;
    protected $photo;
    protected $username;
    protected $name_user;
    protected $last_name;
    protected $description_user;
    protected $email;
    protected $password_user;
    protected $registered_date;
    protected $date_of_last_change;

    public function __construct($propiedades = null){
        parent::__construct("tbl_users", tbl_Users::class, $propiedades);
    }

    public function getId_user() {
        return $this->id_user;
    }

    public function getRole_user() {
        return $this->role_user;
    }

    public function getPhoto() {
        return $this->photo;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getName_user() {
        return $this->name_user;
    }

    public function getLast_name() {
        return $this->last_name;
    }

    public function getDescription_user() {
        return $this->description_user;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword_user() {
        return $this->password_user;
    }

    public function getRegistered_date() {
        return $this->registered_date;
    }

    public function getDate_of_last_change() {
        return $this->date_of_last_change;
    }

    public function setId_user($id_user): void {
        $this->id_user = $id_user;
    }

    public function setRole_user($role_user): void {
        $this->role_user = $role_user;
    }

    public function setPhoto($photo): void {
        $this->photo = $photo;
    }

    public function setUsername($username): void {
        $this->username = $username;
    }

    public function setName_user($name_user): void {
        $this->name_user = $name_user;
    }

    public function setLast_name($last_name): void {
        $this->last_name = $last_name;
    }

    public function setDescription_user($description_user): void {
        $this->description_user = $description_user;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setPassword_user($password_user): void {
        $this->password_user = $password_user;
    }

    public function setRegistered_date($registered_date): void {
        $this->registered_date = $registered_date;
    }

    public function setDate_of_last_change($date_of_last_change): void {
        $this->date_of_last_change = $date_of_last_change;
    }

}
