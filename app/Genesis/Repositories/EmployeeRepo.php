<?php

namespace Genesis\Repositories;
use Genesis\Entities\Employee;

class EmployeeRepo extends BaseRepository{

	public function getModel()
	{
		return new Employee;
	}
} 