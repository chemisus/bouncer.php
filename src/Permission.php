<?php
class Permission {
    public function authorize($user) {
        return false;
    }
    
    public function isUser($user, $name) {
        return $user()->name() === $name;
    }
    
    public function inRole($user, $name) {
        return array_search($name, $user()->roles(), true) !== false;
    }
}
