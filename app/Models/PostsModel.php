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
        return $this->orderBy('id')
                    ->limit(3)
                    ->findAll();
    }

    public function getPost(int $id)
    {
        return $this->find($id);
    }
}