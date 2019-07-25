<?php

namespace BasicApp\CleanBlogTheme;

use PhpTheme\Helpers\Html;

class Theme extends ThemeAbstract
{

    public function __construct()
    {
        parent::__construct();

        $this->head .= Html::linkCss($this->baseUrl . '/custom.css'); 
    }

}