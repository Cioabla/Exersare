<?php
/**
 * Created by PhpStorm.
 * User: Rio
 * Date: 9/12/2017
 * Time: 1:00 PM
 */

class SignupController extends Controller
{
    public function signupAction() {
        $userModel=$this->model->load('user');

        $userModel -> checkLogin();

        $errors = array();
        $postVariable = array();

        if(isset($_POST['name'])){
            $postVariable = $_POST;
            $errors = $userModel->validateData($postVariable);

            if(empty($errors)){
                $userId = $userModel->registerUser($postVariable);
                $userModel->handleRegisterSession($userId['username']);
            }
        }

        $data['pageTitle'] = 'Register';
        $data['errors'] = $errors;
        $data['data'] = $postVariable;

        $this->view->generate(null, 'signup.php', $data);
    }
}