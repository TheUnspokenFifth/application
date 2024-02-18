<?php

/*
 * Validates data for the Job app
 * 328/application/model/validate.php
 * @author Joshua Curtiss
 * @version 1.0
 */

class Validate
{

    //TODO: Make “First Name”, “Last Name”, “Email”, “Phone”, and “Years Experience” required fields. All other fields
    // are optional, including GitHub URL and the jobs checkbox selections.
    static function validName($name)
    {
        //trims the name and then checks if it only contains letters
        return ctype_alpha(trim($name));
    }

    static function validGithub($url)
    {
        //remove all illegal characters from URL
        $url = filter_var($url, FILTER_SANITIZE_URL);
        //Validate the URL
        return filter_var($url, FILTER_VALIDATE_URL);
    }

    static function validExperience($experience)
    {
        return in_array($experience, DataLayer::getExperience());
    }

    static function validPhone()
    {

    }

    static function validEmail()
    {

    }
}