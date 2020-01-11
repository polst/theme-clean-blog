<?php

namespace BasicApp\CleanBlogTheme;

use PhpTheme\Html\HtmlHelper;

class Theme extends ThemeAbstract implements \BasicApp\Site\SiteThemeInterface
{

    public function __construct()
    {
        parent::__construct();

        $this->head .= HtmlHelper::linkCss($this->baseUrl . '/custom.css'); 
    }

}