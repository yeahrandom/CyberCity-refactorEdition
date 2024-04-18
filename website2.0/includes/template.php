<?php require_once 'config.php'; ?>
<head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/Styles.css">
</head>




<head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/Styles.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar_Dark navbar-bg-dark">
    <a class="navbar-brand" href="#"><img src="../assets/img/CCLogo.png" alt="logo" height="30">TBW</a>
    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="" -->

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>

            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>

            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>

            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>

            </li>





        </ul>















    </div>













</nav>






<?php
if (isset($_SESSION['flash_message'])) {
    $message = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
//    echo $message;
    ?>
    <div class="position-absolute bottom-0 end-0">
        <?= $message ?>
    </div>
    <?php
}
?>


<script src="/assets/js/bootstrap.bundle.js"></script>


<?php
function sanitise_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function outputFooter()
{
    date_default_timezone_set('Australia/Canberra');
    $filename = basename($_SERVER["SCRIPT_FILENAME"]);
    $footer = "This page was last modified: " . date("F d Y H:i:s.", filemtime($filename));
    return $footer;
}


/*
 * This function confirms if the user is authorised to access individual pages or not.
 * @params
 * @return  true if user is authorised to access page.
 *          false if user is not authorised to access page.
 */
function authorisedAccess($unauthorisedUsers, $users, $admin)
{
    // Unauthenticated User
    if (!isset($_SESSION["username"])) { // user not logged in
        if ($unauthorisedUsers == false) {
            $_SESSION['flash_message'] = "<div class='bg-danger'>Access Denied</div>";
            return false;
        }
    } else {

        // Regular User
        if ($_SESSION["access_level"] == 1) {
            if ($users == false) {
                $_SESSION['flash_message'] = "<div class='bg-danger'>Access Denied</div>";
                return false;
            }
        }

        // Administrators
        if ($_SESSION["access_level"] == 2) {
            if ($admin == false) {
                return false;
            }
        }
    }

    // otherwise, let them through
    return true;
}
?>
