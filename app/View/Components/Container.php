<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Container extends Component
{
	public $class;
	public $style;
	public function __construct($class = "", $style = "")
	{
		$this->class = $class;
		$this->style = $style;
	}
	public function render()
	{
		return view('components.container');
	}
}
