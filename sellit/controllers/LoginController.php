<?php
/**
 * Created by PhpStorm.
 * User: Rio
 * Date: 9/11/2017
 * Time: 1:09 PM
 */

class LoginController extends Controller
{
    public function loginAction() {

        $userModel = $this->model->load('user');

        $userModel ->checkLogin();

        if(isset($_POST['user'])){
            $user = $userModel->getUserByUsernameAndPassword($_POST['user'], $_POST['password']);
            if($user) {
                $userModel->handleLogin($user);
            }else {
                $data['error'] = 'Invalid username or password';
            }
        }

        $data['pageTitle'] = 'Login';
        $this->view->generate(null, 'login.php', $data);
    }
}