<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
   protected $table = 'users';
   public function getNews($slug = false)
    {
        if ($slug === null) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}