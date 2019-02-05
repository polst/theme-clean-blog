<?php

namespace Theme\CleanBlog;

use PHPTheme;
use PHPTheme\Widget;

class FormField extends Widget
{

	public $template = 'form-field';

	public $error;

	public $value;

	public $type;

	public $label;

	public $placeholder;

	public $options = [];

	public function render()
	{
		return PHPTheme::view($this->template , [
			'error' => $this->error,
			'type' => $this->type,
			'value' => $this->value,
			'placeholder' => $this->placeholder,
			'label' => $this->label,
			'options' => $this->options
		]);
	}

}
