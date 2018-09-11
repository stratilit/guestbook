<?php

class View
{
    protected $data = [];

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function display($template)
    {
        foreach ($this->data as $key => $value) {
            $$key = $value;
        }
        include $template;
    }

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
