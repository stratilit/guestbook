<?php

/**
 * Class View отображение информации из модели при помощи шаблона
 */
class View
{
    protected $data = [];

    /**
     * Добавление блока данных для отображения
     * @param $name
     * имя данных
     * @param $value
     * значение данных
     */
    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }


    /**
     * Генерирует и отображает страницу с данными находящимися в объекте
     * @param $template
     * шаблон отображаемой страницы
     */
    public function display($template)
    {
        foreach ($this->data as $key => $value) {
            $$key = $value;
        }


        include $template;
    }

    /**
     * Возвращает код сгенерированной страницы
     * @param $template
     * шаблон отображаемой страницы
     * @return false|string сгенерированная страница
     */
    public function render($template)
    {
        foreach ($this->data as $key => $value) {
            $$key = $value;
        }
        ob_start();

        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
}



