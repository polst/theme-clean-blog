<?php

namespace Theme\CleanBlog;

use PHPTheme;
use PHPTheme\Widget;

class Button extends Widget
{

	public $url = '#';

	public $label = 'Older Posts &rarr;';

    public $align = 'left';

	public function render()
	{
        $alignClass = '';

        if ($this->align == 'right')
        {
            $alignClass = ' float-right';
        }

		return PHPTheme::view('button', [
			'url' => $this->url,
			'label' => $this->label,
            'alignClass' => $alignClass
		]);
	}

}
