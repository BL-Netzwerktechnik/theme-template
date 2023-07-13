<?php
use crisp\core\ThemeVariables;
use crisp\models\ThemePage;


class start extends ThemePage  {

    public function preRender(): void
    {
        ThemeVariables::set("welcome_text", "Hello World!");
    }

    public function postRender(): void
    {

    }
}
