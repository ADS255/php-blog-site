<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
        
        // Start the session if it's not already started
        if (session_status() == PHP_SESSION_NONE) {
            session()->start();
        }
    }

    public function index(): string
    {
        // Display the login form
        return 
        view('Templates/header', array('title' => 'Admin'))
        .view('login')
        .view('Templates/footer');
    }

    public function login(): \CodeIgniter\HTTP\RedirectResponse
    {
        // Validate form input
        $validation = \Config\Services::validation();

        $validation->setRules([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Validation failed
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Get the input values
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();
        $user = $userModel->getUser($username);

        // Check if user exists and password is correct
        if ($user && password_verify($password, $user['password'])) {
            // Set session or perform login actions
            session()->set([
                'isLoggedIn' => true,
                'username' => $username,
                'user_id' => $user['id'],
            ]);
            return redirect()->to(base_url('/admin'));
        } else {
            // Invalid credentials
            return redirect()->back()->withInput()->with('error', 'Invalid login credentials');
        }
    }

    public function logout(): \CodeIgniter\HTTP\RedirectResponse
    {
        session()->destroy();
        return redirect()->to(base_url('/login'));
    }
}