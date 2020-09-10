<?php

class view{

    const PATH = 'C:\\wamp64\\www\\realWEB\\';
    private $template;

    public function __construct($template){
        $this->template = $template;
    }

    public function render(Array $data){
        extract($data);
        ob_start();
        include(self::PATH.$this->template);
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

}

?>