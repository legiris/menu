<?php

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

	public function renderDefault()
	{	
		$this->template->menu = $this->getTree(0);
	}
	
	
	public function getTree($parentId = NULL)
	{
		$items = $this->menu->fetchAllByParentId($parentId);
		
		if (count($items) == 0) { return NULL; }
		
		$data = array();
		
		foreach ($items as $item)
		{			
			$data[$item->id]['id'] = $item;
			$data[$item->id]['children'] = $this->getTree($item->id);
		}
	
		return $data;
		
	}
	
	
}
