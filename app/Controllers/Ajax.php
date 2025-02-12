<?php

namespace App\Controllers;

use App\Models\NewsModel;

class Ajax extends BaseController
{
	public function index($slug = null)
	{
		$model = model(NewsModel::class);
		$data = $model->getNews($slug);

		print(json_encode($data));
	}
	
}