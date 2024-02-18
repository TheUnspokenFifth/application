    <?php
    //this is my controller

    //Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    //require autoload file
    require_once('vendor/autoload.php');

    //Instantiate the F3 Base Class
    $f3 = Base::instance();
    //Base f3 = new Base();
    $con = new Controller($f3);


    //Define a default root
    $f3->route('GET /', function(){
//        $view = new Template();
//        echo $view->render('views/home.html');
        $GLOBALS['con']->home();
    });

    //Define a personal information page route
    $f3->route('GET|POST /personalinformation', function($f3) {
        $GLOBALS['con']->personalInformation();
    });

    //Define an experience route
    $f3->route('GET|POST /experience', function($f3) {
        $GLOBALS['con']->experience();
    });

    //Define an experience route
    $f3->route('GET|POST /jobopeningsmailinglists', function($f3) {
        $GLOBALS['con']->jobopeningsmailinglists();
    });

    //Define an experience route
    $f3->route('GET|POST /summary', function($f3) {
        $GLOBALS['con']->summary();
    });

    //run fat-free
    $f3->run();
