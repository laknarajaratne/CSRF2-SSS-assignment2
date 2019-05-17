
<?php

// Authentication code
//From the values captured in the index page, the if-condition checks if the relevant values have been captured through the relevant methods
if(isset($_POST['username'], $_POST['password'])){
    $username   = $_POST['username']; //if the values have been set then they are assigned to
    $password   = $_POST['password']; // variables username and password

    /******
     * WARNING : User credentials have been hardcoded

     ******/
    //next the condition checks if the values assigned to the variable above are valid (for the purpose of the assignment
    //the values have been hardcoded
    if($username == 'admin' && $password == 'admin@123'){
        /******
         * A SessionID is created for the server to track the user
         * sessionId is stored as a cookie called Session Cookie
         * Each time the user carries out an action in the website this session cookie would be sent to the server
         * for the server to validate it is still a legitimate user
         ******/


		$sessionIdentifier = base64_encode(openssl_random_pseudo_bytes(32)); //openssl_random.. is used as a function to generate random value
        setcookie("sessionID", $sessionIdentifier, 0, "/");//making the cookie using the sessionID and
                                                                              //the encrypted string assigned to variable sessionIdentifier
		/******
         * Here the Token is generated and used as the CSRF token
         * Then stored as a cookie in the client's browser
         ******/
        $csrfToken = base64_encode(openssl_random_pseudo_bytes(32));
        setcookie("tokenID", $csrfToken);
        /******
         * Two cookies are made in the double cookie method where one contains the tokenID and the other
         * contains sessionID
         ******/
        header('Location:demo_action.php');//If the un and pw are correct the cookies are created and redirected to demo_action.php page
    } else {
        /******
         * If invalid credentials used redirect to the login page
         ******/
        header('Location:index.php');
    }
}