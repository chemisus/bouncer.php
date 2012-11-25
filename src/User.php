<?php
class User {
    private $id;
    
    private $name;
    
    private $roles;
    
    public function id() {
        return $this->id;
    }
    
    public function name() {
        return $this->name;
    }
    
    public function roles() {
        return $this->roles;
    }
    
    public function __construct($id, $name, $roles) {
        $this->id = $id;
        
        $this->name = $name ? $name : "guest";
        
        $this->roles = $roles ? $roles : array('admin');
    }
}