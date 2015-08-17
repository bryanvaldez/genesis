<?php

namespace Genesis\Repositories;

abstract class BaseRepository{

	protected $model;

	public function __construct()
	{
		$this->model = $this->getmodel();
	}

	abstract public function getModel();

	public function find($id)
	{
		return $this->model->find($id);
	}

} 
