<?php

require_once('libs/Smarty.class.php');

class UsersView {
             
    private $smarty;
    
    function __construct() {
        $this->smarty = new Smarty();
    }
    
    function showDeleteUsers($users) {
        $this->smarty->assign('users', $users);
        $this->smarty->display('templates/navbar.tpl');
        echo('<h3 class="my-2 ml-3">Lista de usuarios en la base de datos</h3>');
        foreach ($users as $user) {
            $this->smarty->assign('username', $user->username);
            $this->smarty->assign('userId', $user->id);
            $this->smarty->assign('isAdmin', $user->isAdmin);
            $this->smarty->display('templates/listUsers.tpl');
        }
    }
}