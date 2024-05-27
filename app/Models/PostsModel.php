<?php

namespace App\Models;

use CodeIgniter\Model;

class PostsModel extends Model
{
    protected $table = 'blog_posts';
    protected $primaryKey = 'id';

    protected $allowedFields = ['post_title', 'post_content'];

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

    public function getAllPosts()
    {
        return $this->findAll();
    }

    public function createPost($title, $content)
    {
        $data = [
            'post_title' => $title,
            'post_content' => $content,
        ];
        
        // Inserts data and returns inserted row's primary key
        $this->insert($data);
    }
}