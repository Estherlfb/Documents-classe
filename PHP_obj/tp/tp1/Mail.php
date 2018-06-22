<?php

class Mail{
    const MAX_QUEUE = 10;

    private $sender;
    private $receiver;

    public function __construct($email1, $email2){
        $this->sender = $email1;
        $this->receiver = $email2;
    }

    public function send(){
        if($this->checkMail($this->sender) && $this->checkMail($this->receiver) === true){
            return "ok";
        } else{
            return "nok";
        }
    }

    private function checkMail($email){
       return true;
    }
}