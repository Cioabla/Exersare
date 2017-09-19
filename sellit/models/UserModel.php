<?php

    class UserModel extends Model {

        public function checkLogin()
        {
            if (isset($_SESSION['username'])) {
                relocate('/home/index');
            }
        }

        public function checkIsNotLogged()
        {
            if (!isset($_SESSION['username'])) {
                relocate('/login/login');
            }
        }

        public function getUserByUsernameAndPassword($username, $password){
            $query = "SELECT * FROM `users` WHERE 
            `username` = '" . self::escape($username) . "' AND 
            `password` = '" . md5($password) . "';";
            $user = self::get_custom($query);
            if($user) {

                return $user[0];
            }
            return false;
        }

        public function handleLogin($user){
            $_SESSION['username']=$user['username'];
            if (isset($_POST['remember'])) {
                setcookie('remember', $user['id'], 3600, '/');
            }
            relocate('/home/index');
        }

        public function validateData($post){
            $errors = array();
            if(!isset($post['name']) || empty($post['name'])){
                $errors['name'] = 'Please insert your name';
            }

            if(!isset($post['password']) || empty($post['password'])){
                $errors['password'] = 'Please insert your password';
            }

            if(self::check_if_exists('email', $post['email'], 'users')){
                $errors['email'] = 'Email is taken';
            }

            if(!isset($post['email']) || empty($post['email'])){
                $errors['email'] = "Please insert your email";
            }

            if (!isset($post['username']) || empty($post['username'])) {
                $errors['username'] = 'Please add your username';
            }

            if (self::check_if_exists('username', $post['username'], 'users')) {
                $errors['username'] = 'Username is taken';
            }

            if(!isset($post['retype_password']) || empty($post['retype_password'])){
                $errors['retype_password'] = 'Please retype your password';
            }

            if($post['password'] != $post['retype_password']){
                $errors['retype_password'] = 'Wrong password';
            }

            return $errors;

        }

        public function registerUser($post)
        {
            $query = "INSERT INTO users SET 
            name = '" . self::escape($post['name']) . "', 
            email = '" . self::escape($post['email']) . "', 
            username = '" . self::escape($post['username']) . "', 
            created = '" . date('Y-m-d H:i:s') . "', 
           password = '" . md5($post['password']) . "'";

            $result = self::execute($query);

            $result2 = self::getUserByUsernameAndPassword($post['username'],$post['password']);

            return $result2;
        }

        /**
         * @param $userId
         */
        public function handleRegisterSession($userId)
        {
            $_SESSION['username'] = $userId;

            relocate(SITE_URL);
        }

    }