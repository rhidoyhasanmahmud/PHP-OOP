<?php

class App {
     private static $_user;

     public function User( ) {
          if( $this->_user == null ) {
               $this->_user = new User();
          }
          return $this->_user;
     }

}

class User {
     private $_name;

     public function __construct() {
          $this->_name = "Joseph Crawford Jr.";
     }

     public function GetName() {
          return $this->_name;
     }
}

$app = new App();

echo $app->User()->GetName();

?>