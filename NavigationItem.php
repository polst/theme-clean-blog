<?php

namespace Theme\CleanBlog;

use PHPTheme;
use PHPTheme\Widget;

class NavigationItem extends Widget
{

	public $url;

	public $label;

	public $options = [];

	public function render()
	{
		$options = $this->options;

		$options['class'] = 'nav-link';

		$options['href'] = $this->url;

		return PHPTheme::view('navigation-item', [
			'url' => $this->url,
			'label' => $this->label,
			'options' => $options 
		]);
	}

}
