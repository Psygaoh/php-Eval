<?php

namespace App\structures;
/**
 * Class Service
 * @package App\structures
 * This file is here to make sure that when creating an instance of the application, it will be Unique, a singleton. 
 */

abstract class Service
{
	protected static $instance;

	public static function getInstance()
	{
		if (!static::$instance) static::$instance = new static;
		return static::$instance;
	}

	protected function __construct() { }

}