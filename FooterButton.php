<?php

namespace Theme\CleanBlog;

use PHPTheme;
use PHPTheme\Widget;

class FooterButton extends Widget
{

	public $url;

	public $icon;

	public $options = [];

	public function render()
	{
		$options = $this->options;

		$options['href'] = $this->url;

		$options['target'] = '_blank';

		return PHPTheme::view('footer-button', [
			'url' => $this->url,
			'icon' => $this->icon,
			'options' => $options
		]);
	}

}
