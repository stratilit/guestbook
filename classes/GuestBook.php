<?php
require_once __DIR__ . '/TextFile.php';

/**
 * Class GuestBook работа с гостевой книгой
 */
class GuestBook extends TextFile
{

    protected $msg;
    protected $path;

    /**
     * GuestBook constructor.
     * @param string $path путь к файлу данных гостевой книги
     */
    public function __construct($path)
    {
        $this->path = $path;
        if (is_readable($this->path)) {
            $this->msg = file($this->path, FILE_IGNORE_NEW_LINES);
        } else {
            $this->msg = null;
        }
    }

    /**
     * возвращает массив записей гостевой книги
     * @return array записей гостевой книги
     */
    public function getData()
    {
        return $this->msg;
    }

    /**
     * добавляет новую запись к массиву записей гостевой книги
     * @param string $text добавляемый текст
     */
    public function append($text)
    {
        $this->msg[] = str_replace(array("\n", "\r"), ' ', $text);
    }

    /**
     *сохраняет массив данных гостевой книги в файл
     */
    public function save()
    {
        $fresurs = fopen($this->path, 'w');
        foreach ($this->msg as $item) {
            fwrite($fresurs, $item . PHP_EOL);
        }
        fclose($fresurs);
    }

}