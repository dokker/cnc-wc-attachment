<?php
namespace cncWATT;
class Controller {
	public function __construct()
	{
		require_once('ACF.php');
		new ACF();
	}
}