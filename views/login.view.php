<?php

require_once('libs/Smarty.class.php');

class LoginView {
         
    private $smarty;
    
    function __construct() {
        $this->smarty = new Smarty();
    }

    function showLogin() {
        $this->smarty->display('templates/navbar.tpl');
        $this->smarty->display('templates/login.tpl');
    }

    function showLoginFail() {
        //seteamos los parámetros para el alert
        $this->smarty->assign('alertType', 'alert-danger');
        $this->smarty->assign('alertTitle', 'Error en el login');
        $this->smarty->assign('alertDescription', 'El usuario o la contraseña no son correctos');

        $this->smarty->display('templates/navbar.tpl');
        $this->smarty->display('templates/alert.tpl');
        $this->smarty->display('templates/login.tpl');
    }

    function showRegister() {
        $this->smarty->display('templates/navbar.tpl');
        $this->smarty->display('templates/register.tpl');
    }

    function showRegisterFail() {
        $this->smarty->assign('alertType', 'alert-danger');
        $this->smarty->assign('alertTitle', 'Usuario ya existente');
        $this->smarty->assign('alertDescription', 'El usuario ya existe en la base de datos');

        $this->smarty->display('templates/navbar.tpl');
        $this->smarty->display('templates/alert.tpl');
        $this->smarty->display('templates/register.tpl');
    }
}