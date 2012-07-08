<?php

class footer implements quackPlugin
{
    public function name()
    {
        return "Footer";
    }
    
    public function output()
    {
        return "<i>QuackPlugin</i> made by Quackster";
    }
}

?>