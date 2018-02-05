<?php
namespace App\Layout;

use \Pabana\Mvc\Layout;

class Application extends Layout
{
	public function initialize()
	{
		$this->Html->Doctype->set('HTML5');
		$this->Html->Head->Charset->set('UTF-8');
		$this->Html->Head->Meta->setUaCompatible('IE=edge')
							   ->setViewport('width=device-width, initial-scale=1, shrink-to-fit=no');
		$this->Html->Head->Title->set('Pabana - ');
		$this->Html->Head->Css->appendLibrary('bootstrap', 'bootstrap.min.css')
							  ->appendLibrary('font-awesome', 'font-awesome.min.css')
							  ->appendFile('pabana.css');
		$this->Html->Head->Icon->append('favicon.png');
		$this->Html->Script->appendLibrary('jquery', 'jquery.min.js')
						   ->appendLibrary('popper', 'popper.min.js')
						   ->appendLibrary('bootstrap', 'bootstrap.min.js')
						   ->appendFile('pabana.js');
	}
}