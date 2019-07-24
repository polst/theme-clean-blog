<?php

BasicApp\System\SystemEvents::onThemeList(function($event) {

    $class = BasicApp\CleanBlogTheme\Theme::class;

    $event->result[$class] = 'Start Bootstrap - Clean Blog';

});