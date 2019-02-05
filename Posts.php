<?php

namespace Theme\CleanBlog;

use PHPTheme;
use PHPTheme\Widget;

class Posts extends Widget
{

	public $items = [];
	
	public $button;

	public function render()
	{
        $button = $this->button;

        if ($button)
        {
            $button['align'] = 'right';
        }

		return PHPTheme::view('posts', [
			'items' => $this->items,
			'button' => $button
		]);
	}

}
