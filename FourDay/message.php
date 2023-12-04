

<?php  

class Message{
    public $name;

    public function set($n){
        $this -> name ="Hello All, I am {$n}";
        
    }
    public function get(){
        return $this -> name;
    }
    
}

$message = new Message;

$message -> set("saif");

echo $message -> get()

?>