<?php
class Home_controller extends Controller
{
    function __construct()
    {
        require GLOBAL_SYS_PATH.'models/home.php'; 
        $home = new Home();
    }

    function index()
    {
        $this->render("index");
    }
}