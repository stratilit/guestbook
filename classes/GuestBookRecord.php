<?php

class GuestBookRecord
{

    protected $message;

    public function __construct($message)
    {
        $this->message = preg_replace('/[\r\n\s]+/', ' ', $message);
    }

    public function getMessage()
    {
        return $this->message;
    }
}