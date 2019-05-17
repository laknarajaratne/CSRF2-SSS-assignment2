<?php
    if (isset($_POST['resource_name']) && isset($_POST['csrfToken'])) {//similar to the handler.php page
        $resource = $_POST['resource_name'];
        $valid_request = false;

        /***
         * The following code checks if the request csrfToken is 
         * identical to the csrf token contained in the cookie
         * If they are equal action would be allowed
         */
        if(isset($_COOKIE['tokenID'])){
            if($_COOKIE['tokenID'] == $_POST['csrfToken']){
                $valid_request = true;
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<?php include 'head.php';?>
<body>

    <?php include 'common.php';?>
	<div class="container">
		<div class="row">
            <?php
                if ($valid_request) {
                    echo '<p> Deleted Successfully!! </p>';
                } else {
                    echo '<p> Resource was not deleted, please try again! </p>';
                }
            ?>
		</div>
	</div>

</body>

</html>