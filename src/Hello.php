<?php

namespace Muxiaoqi\Test;

class Hello
{
	private $name;

	public function __construct($name='word')
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function hello()
	{
		return 'Hello' . $this->name . '!';
	}
}