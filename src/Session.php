<?php
class Session {
    private $users = array();
    
    public function user() {
        return reset($this->users);
    }
    
    public function current() {
        return end($this->users);
    }
    
    public function __construct($user) {
        $this->assume($user);
    }

    public function assume($user) {
        $this->users[] = $user;
    }
    
    public function unassume() {
        array_pop($this->users);
    }
}
