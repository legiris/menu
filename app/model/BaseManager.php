<?php

/**
 * Description of BaseManager
 *
 * @author Admin
 */
class BaseManager extends Nette\Object
{
    /** @var DibiConnection */
    public $dibi;
    
    public function __construct(DibiConnection $connection)
    {
        $this->dibi = $connection;
    }
       
}


