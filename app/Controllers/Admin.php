<?php

namespace App\Controllers;

use App\Models\PostsModel;

class Admin extends BaseController
{
    public function __construct() 
    {
    }

    public function index(): string
    {
        $postsModel = new PostsModel();
        $posts = $postsModel-> getAllPosts();

        return
        view('Templates/header', ['title' => 'Admin'])
        .view('adminNav')
        .view('managePosts', ['posts' => $posts])
        .view('Templates/footer');
    }

    public function createPost():string
    {
        return
        view('Templates/header',array('title' => 'Create Post'))
        .view('adminNav')
        .view('createPost')
        .view('Templates/footer');
    }

    public function storePost()
    {
        $title = $this->request->getPost('title');
        $content = $this->request->getPost('content');

        $postsModel = new PostsModel();
        $postsModel -> createPost($title, $content);

        return redirect()->to(base_url('/admin/createpost'));
    }
}