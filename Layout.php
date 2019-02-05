<?php

namespace Theme\CleanBlog;

use PHPTheme;
use PHPTheme\Widget;

class Layout extends Widget
{
	
	public $content;
	
	public $header = [];
	
	public $footer = [];
	
	public $navigation = [];

	public $title = 'Clean Blog - Start Bootstrap Theme';

	public function render()
	{
		return PHPTheme::view('layout', [
			'content' => $this->content,
			'header' => $this->header,
			'navigation' => $this->navigation,
			'footer' => $this->footer,
			'title' => $this->title
		]);
	}

}
