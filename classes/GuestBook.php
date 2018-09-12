<?php
require_once __DIR__ . '/GuestBookRecord.php';

/**
 * Class GuestBook модель гостевой книги
 */
class GuestBook
{

    protected $path;
    protected $data = [];


    public function __construct()
    {
        $this->path = __DIR__ . '/../data.txt';
        $lines = file($this->path, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line) {
            $this->data[] = new GuestBookRecord($line);
        }
    }

    /**
     * Возвращает массив объектов записей гостевой книги из модели
     * @return array
     */
    public function getRecords()
    {
        return $this->data;
    }


    /**
     * Добавляет в модель объект записи
     * @param GuestBookRecord $record з
     * апись для добавления в модель
     * @return $this GuestBook
     * объект модель гостевой книги
     */
    public function append(GuestBookRecord $record)
    {
        $this->data[] = $record;
        return $this;
    }

    /**
     * Сохраняет модель гостеой книгу в хранилище
     * @return $this GuestBook
     * объект модель гостевой книги
     */
    public function save()
    {
        $lines = [];
        foreach ($this->data as $record) {
            $lines[] = $record->getMessage();
        }
        file_put_contents($this->path, implode("\n", $lines));
        return $this;
    }


}