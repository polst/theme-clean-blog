<?php

namespace Theme\CleanBlog;

use PHPTheme;
use PHPTheme\Widget;

class ContactForm extends Widget
{

	public $url;

	public $submit = 'Send';

	public $message;

	public function render()
	{
		return PHPTheme::view('contact-form', [
			'url' => $this->url,
			'submit' => $this->submit,
			'message' => $this->message
		]);
	}

}
