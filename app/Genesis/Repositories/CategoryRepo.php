<?php

namespace Genesis\Repositories;
use Genesis\Entities\Category;

class CategoryRepo extends BaseRepository{

	public function getModel()
	{
		return new Category;
	}
} 