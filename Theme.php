<?php

namespace BasicApp\CleanBlogTheme;

class Theme extends ThemeAbstract
{

    public function __construct()
    {
        parent::__construct();

        $this->head .= Html::linkCss('/themes/startbootstrap-clean-blog/custom.css'); 
    }

}