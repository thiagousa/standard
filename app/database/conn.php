<?php

namespace app\database;

class Conn

{
   

    private $local ;
    private $user;
    private $password;
    private  $database;
   
    public function __construct(){
   
       $this->local = '127.0.0.1';
       $this->user = 'root';
       $this->password = '';
       $this->database = 'standard';
   
   
    }
   
    public function conn(){
     
   
      if(!$link= mysqli_connect($this->getLocal(),$this->getUser(),$this->getPassword(),$this->getDatabase())){
   
       echo "Error: Unable to connect to MySQL." . PHP_EOL;
       echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
       echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
       exit;
   
       }
       else{
   
           echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
           echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
            }
      
       
    }
   
    public function close(){
       
       if($link != null){
           mysqli_close($link);
           echo 'connect to MySQ is close';
       }
   
       else{
         
           echo "connect to MySQ isn't close";
         
       }
      
    }
   
   
    private function getLocal()
    {
   
       return $this->local;
    }
   
    private function setLocal($local)
    
    {
       $this->local = $local;
   
    }
   
    private function getUser()
    {
   
       return $this->user;
    }
   
    private function setUser($user)
    
    {
       $this->user = $user;
   
    }
    private function getPassword()
    {
   
       return $this->password;
    }
   
    private  function setPassword($password)
    
    {
       $this->password = $password;
   
    }
    private function getDatabase()
    {
   
       return $this->database;
    }
   
    private function setDatabase($database)
    
    {
       $this->database = $database;
   
    }
   
   
   
}