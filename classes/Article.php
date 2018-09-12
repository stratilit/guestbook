<?php

/**
 * Class Article
 * модель одной новости
 */
class Article
{
    protected $news;

    public function __construct(string $news)
    {
        $this->news =  $news;
    }


    /**
     * Возвращает текст новости
     * @return string текст новости
     */
    public function getMessage()
    {
        return $this->news;
    }

}