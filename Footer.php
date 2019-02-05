<?php

namespace Theme\CleanBlog;

use PHPTheme;
use PHPTheme\Widget;

class Footer extends Widget
{

	public $copyright = 'Copyright &copy; Your Website {year}';

	public $buttons = [];

	public function render()
	{
		$copyright = strtr($this->copyright, ['{year}' => date('Y')]);

		return PHPTheme::view('footer', [
			'copyright' => $copyright,
			'buttons' => $this->buttons
		]);
	}

}
