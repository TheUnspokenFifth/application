<?php

/*
 * 328/application/controllers/controller.php
 * The Controller class for my Job application
 * @author Joshua Curtiss
 * @version 1.0
 */
class controller
{
    private $_f3; //Fat-free router

    function __construct($f3)
    {
        $this->_f3;
    }

    function home()
    {
        //Display a view page
        $view = new Template();
        echo $view->render('views/home.html');
    }

    function experience()
    {
        if (isset($_POST['experience']) and Validate::validExperience($_POST['experience'])){
            $experience = $_POST['experience'];
        }
        else {
            $this->_f3->set('errors["experience"]',"Please select a valid Years Experience.");
        }
    }


}