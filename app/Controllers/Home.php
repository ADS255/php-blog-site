<?php

namespace App\Controllers;

use App\Models\PostsModel;

class Home extends BaseController
{
    public function index(): string
    {
        $postModel = new PostsModel();

        $postsData['posts'] = $postModel->getRecentPosts();

        return
        view('Templates/header',array('title' => 'Home'))
        .view('nav')
        .view('home',$postsData)
        .view('Templates/footer');
    }
}
