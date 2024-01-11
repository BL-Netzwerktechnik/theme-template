<?php

namespace example\views\controllers;


use crisp\core\Themes;




class StartPageController {

    public function preRender(): void
    {
        echo Themes::render("views/start.twig");
    }

    public function postRender(): void
    {

    }
}
