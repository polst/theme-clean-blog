<?php

namespace BasicApp\Themes\CleanBlog;

use BasicApp\Helpers\HtmlHelper;

class Theme extends \PhpTheme\Themes\CleanBlog\Theme implements \BasicApp\Site\SiteThemeInterface
{

    public $baseUrl = '/themes/startbootstrap-clean-blog';

    public function __construct()
    {
        parent::__construct();

        $this->head .= HtmlHelper::linkCss($this->baseUrl . '/custom.css'); 
    }

}