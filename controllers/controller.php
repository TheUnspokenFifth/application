<?php

/*
 * 328/application/controllers/controller.php
 * The Controller class for my Job application
 * @author Joshua Curtiss
 * @version 1.0
 */
class Controller
{
    private $_f3; //Fat-free router

    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    function home()
    {
        //Display a view page
        $view = new Template();
        echo $view->render('views/home.html');
    }

    //Personal Information Page comes first

    function personalinformation()
    {
        if($_SERVER['REQUEST_METHOD']== 'POST'){
            // initialize variables
            $fName = "";
            $lName = "";
            $email = "";
            $state = "";
            $phone = "";

            //
        }
    }

    function experience()
    {
        //If the form has been submitted
        if($_SERVER['REQUEST_METHOD']== 'POST'){

            //initialize variable(s)
            $experience = "";
            $url = "";


            //validate the experience year radio box
            if (isset($_POST['experience']) and Validate::validExperience($_POST['experience'])){
                $experience = $_POST['experience'];
            }
            else {
                $this->_f3->set('errors["experience"]',"Please select a valid Years Experience.");
            }

            //If there are no errors
            if(empty($this->_f3->get('errors'))){

                //
            }
        }

    }

    function jobopeningsmailinglists()
    {

    }

    function summary()
    {

    }


}