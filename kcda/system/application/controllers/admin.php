<?php
class Admin extends Controller {

    function Admin()
    {
        parent::Controller();
    }

    function index()
    {
        redirect('super-admin/home');
    }
}