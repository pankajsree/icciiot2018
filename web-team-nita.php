<?php
    require_once("common.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Web Team - ICCIIoT 2018</title>
        <meta name="keywords" content="web-developers, developers, web desiner, webteam" />
        <meta name="description"  content="Web-Team ... International Conference on Computational Intelligence & IoT (ICCIIoT) 2018" />

        <?= $head ?>

        <link rel="stylesheet" href="css/web-team-nita.css">
    </head>
    <body id="body-committee">

        <?= $nav ?>
        <?= $anchor ?>
        <?= $conf_details ?>

        <h1 class="page-heading">Web Team @ NIT Agartala</h1>

        <section id="committee-mem-content" class="container sub-topic">
            <div class="row mem-individual">
                <div class="col-12 col-sm-3 col-md-2">
                    <img src="images/web-team-nita/ashimsaha.jpg" class="img-res" title="Dr. Ashim Saha" alt="Ashim Saha">
                </div>
                <div class="col-12 col-sm-9 col-md-10">
                    <div class="committee-mem-name">Dr. Ashim Saha - Webmaster and Co-ordinator</div>
                    <div class="committee-mem-institute">Assistant Professor, NIT Agartala</div>
                    <div class="committee-mem-det">

                        <div class="email">
                            <span class="bold">Email: </span>
                            <a href="mailto:ashim.nita@gmail.com">ashim.nita@gmail.com</a>, <a href="mailto:ashim.cse@nita.ac.in">ashim.cse@nita.ac.in</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mem-individual">
                <div class="col-12 col-sm-3 col-md-2">
                    <img src="images/web-team-nita/pankajsreedas.jpg" class="img-res" title="Pankajsree Das" alt="Pankajsree Das">
                </div>
                <div class="col-12 col-sm-9 col-md-10">
                    <div class="committee-mem-name">Pankajsree Das - Web Designer and Developer</div>
                    <div class="committee-mem-institute">Student, CSE, NIT Agartala (2015-19)</div>
                    <div class="committee-mem-det">
                        <div class="email">
                            <span class="bold">Email: </span>
                            <a href="mailto:daspankajsree@gmail.com">daspankajsree@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?= $footer ?>
        <?= $script ?>

    </body>
</html>
