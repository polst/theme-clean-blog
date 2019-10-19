<?php

use BasicApp\System\SystemEvents;
use BasicApp\Helpers\CliHelper;

if (class_exists(SystemEvents::class))
{
    SystemEvents::onUpdate(function()
    {
        $themeDir = FCPATH . 'themes' . DIRECTORY_SEPARATOR . 'startbootstrap-clean-blog';

        if (is_dir($themeDir))
        {
            return;
        }

        CliHelper::downloadToFile(
            'https://codeload.github.com/BlackrockDigital/startbootstrap-clean-blog/zip/master', 
            $themeDir . '.zip'
        );

        CliHelper::zipExtractTo($themeDir . '.zip', $themeDir);

        CliHelper::delete($themeDir . '.zip');

        $dirs = ['vendor', 'js', 'img', 'css'];

        foreach($dirs as $dir)
        {
            CliHelper::copy(
                $themeDir . DIRECTORY_SEPARATOR . 'startbootstrap-clean-blog-master' . DIRECTORY_SEPARATOR . $dir, 
                $themeDir . DIRECTORY_SEPARATOR . $dir
            );
        }

        CliHelper::delete($themeDir . DIRECTORY_SEPARATOR . 'startbootstrap-clean-blog-master');

        CliHelper::copy(
            dirname(__DIR__) . DIRECTORY_SEPARATOR . 'custom.css', 
            $themeDir . DIRECTORY_SEPARATOR . 'custom.css'
        );
    });
}

if (class_exists(SystemEvents::class))
{
    SystemEvents::onThemes(function($event)
    {
        $class = BasicApp\CleanBlogTheme\Theme::class;

        $event->result[$class] = 'Start Bootstrap - Clean Blog';
    });
}