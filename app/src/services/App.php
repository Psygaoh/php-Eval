<?php

namespace App\services;

use App\structures\Service;
use App\features\Runnable;
use App\features\RunnableInterface;
use App\resources\Router;
use App\functions as fn;

class App extends Service implements AppInterface, RunnableInterface
{
    /**
     * Here we declare that we are using Runnable.php
     */
	use Runnable;

	protected function runnable_run()
	{
        /**
         * This function will TRY to create an array of the routes as defined in router.php and then display it
         * if there is an error, it will use the function defined in debug to display in the html the error message
         *      as contained in the CATCH block
         */
		try 
		{
			$routes = [];
			$router = new Router($routes);
			echo $router();
		}
		catch (\Throwable $exception)
		{
			die(fn\exceptionToHtml($exception));
		}
	}
}