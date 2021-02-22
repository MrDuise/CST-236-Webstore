<?php

require_once '../../Autoloader.php';
class UserBuisnessService
{
    
    function makeNew($user) {
        $dbService = new UserDataService();
        return  $dbService->makeNew($user);
    }
    
    function deleteUser($user) {
        ;
    }
    
    function editUser($id, $user){
        $dbService = new UserDataService();
        return  $dbService->editUser($id, $user);
    }
}

