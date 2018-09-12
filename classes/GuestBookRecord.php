<?php

/**
 * Class GuestBookRecord модель записи гостевой книги
 */
class GuestBookRecord
{

    protected $message;

    public function __construct($message)
    {
        $this->message = (string)preg_replace('/[\r\n\s]+/', ' ', $message);
    }

    /**
     * Возвращает запись гостевой книги
     * @return string тексе записи
     */
    public function getMessage()
    {
        return $this->message;
    }
}