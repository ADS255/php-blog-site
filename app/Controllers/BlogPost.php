<?php

namespace App\Controllers;

use App\Models\PostsModel;

class BlogPost extends BaseController
{
    public function index($id): string
    {
        $postModel = new PostsModel();

        $postData = $postModel->getPost($id);

        return
        view('Templates/header',array('title' => $postData['post_title']))
        .view('blogPost',$postData)
        .view('Templates/footer');
    }
}
