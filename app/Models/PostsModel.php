<?php

namespace App\Models;

use CodeIgniter\Model;

class PostsModel extends Model
{
    protected $table = 'blog_posts';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'email'];

    public function getRecentPosts()
    {
        $builder = $this->builder();
        return $this->orderBy('id')
                    ->limit(3)
                    ->findAll();
    }
}