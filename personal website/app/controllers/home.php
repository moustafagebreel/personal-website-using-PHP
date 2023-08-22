<?php
require_once('../app/models/UserModel.php');

class HomeController {
    public function index() {
        $user = new UserModel("John Doe");
        require_once('../app/views/home.php');
    }
}
?>
