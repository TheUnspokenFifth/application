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

    static function validPhone($phone)
    {
        //make sure the phone number is only digits and either 7 numbers or 10 numbers long
        return is_numeric($phone) and (strlen($phone) == 7 | strlen($phone)== 10);

    }

    static function validEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}