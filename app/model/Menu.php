<?php

/**
 * Description of Menu
 *
 * @author Admin
 */
class Menu extends BaseManager
{
	
	/**
	 * id
	 * @var int
	 */
	protected $id;
	
	/**
	 * title
	 * @var text
	 */
	protected $title;
	
	/**
	 * parentId
	 * @var int
	 */
	protected $parentId;
	
	
	public function getId()
	{
		return $this->id;
	}
	
	public function getTitle()
	{
		return $this->title;
	}
	
	public function getParentId()
	{
		return $this->parentId;
	}
	
	
	public function setId($id)
	{
		$this->id = $id;
	}
	
	public function setTitle($title)
	{
		$this->title = $title;
	}
	
	public function setParentId($parentId)
	{
		$this->parentId = $parentId;
	}
	
	
	/**
	 * vybere vsechny polozky menu
	 * @return DibiRow
	 */
    public function fetchAll()
    {
		return $this->dibi->fetchAll('
			SELECT
				id,
				title,
				parent_id
			FROM
				menu
		');
    }
    
	
	/**
	 * vybere polozky podle parentId
	 * @param int $parentId
	 */
	public function fetchAllByParentId($parentId)
	{
		return $this->dibi->fetchAll('
			SELECT
				id,
				title,
				parent_id
			FROM
				menu
			WHERE
				parent_id = %i
		', $parentId);
	}
	
	/**
	 * nacte informace o polozce menu
	 * @param int $id
	 * @return DibiRow
	 */
	public function fetch($id)
	{
		return $this->dibi->fetch('
			SELECT
				id,
				title,
				parent_id
			FROM
				menu
			WHERE
				id = %i
		', $id);
		
	}
	
}

?>
