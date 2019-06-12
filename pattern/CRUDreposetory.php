<?php 


namespace pattern;

use Contract\DatabaseInterface\CRUDInterface;
use pattern\Model;

class CRUDreposetory   implements CRUDInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }
}