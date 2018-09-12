<?php

require_once __DIR__ . '/Article.php';

/**
 * Class News модель новостей
 */
class News
{
    protected $path;
    protected $data = [];


    public function __construct()
    {
        $this->path = __DIR__ . '/../news.txt';
        $lines = file($this->path, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line) {
            $this->data[] = new Article($line);
        }
    }

    /**
     * Возвращает массив объектов записей новостей из модели
     * @return array
     */
    public function getRecords()
    {
        $caption = [];
        foreach ($this->data as $datum) {
            $caption[] = mb_substr($datum->getMessage(), 0, 25).' ...';
//            $caption[] = $datum;
        }
        return $caption;
    }

    /**
     * Возвращает объек Article новость по индексу
     * @param $index
     * Номер записи новости
     * @return mixed
     * Объект Article
     */
    public function getIndex($index)
    {
        return $this->data[$index]->getMessage();
    }

}