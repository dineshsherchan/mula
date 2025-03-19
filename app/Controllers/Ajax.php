<?php

namespace App\Controllers;

use App\Models\UserModel;

class Ajax extends BaseController
{
	public function index($slug = False)
	{
		$model = model(UserModel::class);
		$data = $model->getUsers($slug);

		print(json_encode($data));
	}
	
}