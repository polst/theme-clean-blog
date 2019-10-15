<?php

use BasicApp\System\SystemEvents;
use BasicApp\Helpers\CliHelper;

SystemEvents::onUpdate(function()
{
    $themeDir = FCPATH . 'themes' . DIRECTORY_SEPARATOR . 'startbootstrap-clean-blog';

    CliHelper::downloadToFile('https://codeload.github.com/BlackrockDigital/startbootstrap-clean-blog/zip/master', $themeDir . '.zip');

    CliHelper::zipExtractTo($themeDir . '.zip', $themeDir);

    CliHelper::delete($themeDir . '.zip');

    CliHelper::copy($themeDir . DIRECTORY_SEPARATOR . 'startbootstrap-clean-blog-master/css', $themeDir . DIRECTORY_SEPARATOR . 'css');

    CliHelper::copy($themeDir . DIRECTORY_SEPARATOR . 'startbootstrap-clean-blog-master/img', $themeDir . DIRECTORY_SEPARATOR . 'img');

    CliHelper::copy($themeDir . DIRECTORY_SEPARATOR . 'startbootstrap-clean-blog-master/js', $themeDir . DIRECTORY_SEPARATOR . 'js');

    CliHelper::copy($themeDir . DIRECTORY_SEPARATOR . 'startbootstrap-clean-blog-master/vendor', $themeDir . DIRECTORY_SEPARATOR . 'vendor');

    CliHelper::delete($themeDir . DIRECTORY_SEPARATOR . 'startbootstrap-clean-blog-master');

    CliHelper::copy(dirname(__DIR__) . '/custom.css', FCPATH . 'themes/startbootstrap-clean-blog/custom.css');
});

SystemEvents::onThemeList(function($event)
{
    $class = BasicApp\CleanBlogTheme\Theme::class;

    $event->result[$class] = 'Start Bootstrap - Clean Blog';
});