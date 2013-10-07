<?php

/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
	/** @var Menu */
	protected $menu;
	
	
	protected function startup()
	{
		parent::startup();
		
		//instance sluzby
		$this->menu = $this->context->menu;
	}
	
	
}
