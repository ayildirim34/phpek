<?php

namespace App\View;

use App\Controller\UserController;

require_once("./app/controller/UserController.php");
require_once("./app/view/BaseView.php");
class RegisterView extends BaseView
{
    public UserController $userController;
    public string $email;
    public string $password;
    public ?string $component;
    public function __construct()
    {
        $this->userController = new UserController();
        $this->email = "";
        $this->password = "";
        $this->component = "";
    }

    public function validateUserPost()
    {
        if (isset($_POST['email'])) {
            $email = trim($_POST['email']);
            if ($this->userController->checkEmailFormatValidity($email)) {
                $this->email = $email;
            } else {
                $this->component = $this->alert('warning', 'email is not valid format');
            }
        }
        if (isset($_POST['password'])) {
            if (strlen($_POST['password']) < 3) {
                $this->component = $this->alert('warning', 'password must hav at least 4 charechter');
            } else {
                $this->password = $_POST['password'];
            }
        }
    }

    public function checkIfUserExisted(): bool
    {
        $result = true;
        if ($this->email) {
            $userExisted =  $this->userController->checkIfUserExisted($this->email);
            if ($userExisted) {
                $this->component = $this->alert('warning', 'this email is already registered');
            } else {
                $result = false;
            }
        }
        return $result;
    }


    public function register()
    {
        $registeringProcess = false;
        if ($this->email && $this->password) {
            $registeringProcess =  $this->userController->register($this->email, $this->password);
        }

        if ($registeringProcess) {
            $this->component = $this->alert('success', 'you are successfully registered');
        } else {
            $error = $this->userController->getError();
            $this->component = $this->alert('warning', "please try again later: $error ");
        }
        unset($_POST);
    }
}