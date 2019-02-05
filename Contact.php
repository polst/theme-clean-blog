<?php

namespace Theme\CleanBlog;

use PHPTheme;
use PHPTheme\Widget;

class Contact extends Widget
{

	public $text;

	public $form;

	public function render()
	{
		return PHPTheme::view('contact', [
			'text' => $this->text,
			'form' => $this->form
		]);
	}

}
