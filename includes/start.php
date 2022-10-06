<?php
use crisp\api\Helper;
use crisp\models\ThemePage;
use Twig\Environment;


class start extends ThemePage  {

    public function preRender(array $variables, Environment $TwigTheme): ?array
    {
        return ["welcome_text" => "Hello welcome to my first website!"];
    }

    public function postRender(array $variables, Environment $TwigTheme): ?array
    {
        return null;
    }
}
