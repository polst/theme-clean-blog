<?php

BasicApp\System\SystemEvents::onInstall(function()
{
    PhpTheme\Helpers\FileHelper::copy(dirname(__DIR__) . '/custom.css', FCPATH . 'themes/startbootstrap-clean-blog/custom.css');
});

BasicApp\System\SystemEvents::onThemeList(function($event)
{
    $class = BasicApp\CleanBlogTheme\Theme::class;

    $event->result[$class] = 'Start Bootstrap - Clean Blog';
});