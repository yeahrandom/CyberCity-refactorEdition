<?php include "includes/template.php";
/** @var $conn */ ?>


<title>Cyber City</title>






<div class = "wideBox">
    <div class ="subBoxWhite">
        <div class = "title" >

            <h1>Welcome to the Cyber City CTF Game</h1>

            <?php

            if (isset($_SESSION["username"])) {
                echo
                "<h2 class=''>You're logged in, you may now play the CyberCity CTF game</h2>";

                ?>
                <?php
            } else {
                echo

                "<h2 class=''> Please log in or register to participate in the CyberCity CTF Challenge</h2>";
            }
            ?>



        </div>
    </div>
</div>











<div class = "wideBox">
    <div class ="subBoxWhite">
        <div class = "title" >

            <h1 style ="color: cornflowerblue">Learn</h1>
            <h2>The basics of Cyber</h2>

        </div>
    </div>

    <div class ="subBoxWhite">
        <div class = "title" >

            <h1 style ="color: lightgreen">Master</h1>
            <h2>The Art of mogging Kalden</h2>

        </div>
    </div>

    <div class ="subBoxWhite">
        <div class = "title" >

            <h1 style ="color: yellow">Mog</h1>
            <h2>Do what's never been done</h2>

        </div>
    </div>


</div>








<div class = "wideBox">
    <div class ="subBoxWhite">
        <div class = "title" >

            <h1>4 Years or more in the making...</h1>

        </div>
    </div>


    <div class ="subBoxWhite">
        <div class = "title" >

            <h1>Presenting:</h1>
            <h2>Cyber City: Refactor Edition</h2>

        </div>
    </div>
</div>
<p></p>