<?php
    require_once("common.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sitemap - ICCIIoT 2018</title>
        <meta name="keywords" content="sitemap, ICCIIoT, Conference, Computational Intelligence, IoT, Internet of Things, nitagartala, nita, National Institute of Technology Agartala, agartala, nit" />
        <meta name="description"  content="Sitemap for the International Conference on Computational Intelligence & IoT (ICCIIoT) 2018" />

        <?= $head ?>

        <link rel="stylesheet" href="css/web-team-nita.css">
    </head>
    <body id="body-committee">

        <?= $nav ?>
        <?= $anchor ?>
        <?= $conf_details ?>

        <h1 class="page-heading">Sitemap</h1>

        <section class="container sub-topic">
            <ul id="sitemap-ul" class="list-square">
                <li><a href="index.php">Home</a></li>
                <li>
                    Call for Papers
                    <ul class="cus-ul pad-left-1">
                        <li><a href="call-for-papers.php">About ICCIIoT 2018</a></li>
                        <li><a href="call-for-papers.php#imp-dates">Important Dates</a></li>
                        <li><a href="call-for-papers.php#guidelines">Submission Guidelines</a></li>
                        <li><a href="call-for-papers.php#indexing-papers">Indexing</a></li>
                        <li><a href="call-for-papers.php#tracks">Conference Tracks</a></li>
                    </ul>
                </li>
                <li><a href="committees.php">Committees</a></li>
                <li><a href="register.php">Registration</a></li>
                <li><a href="sessions.php">Special Sessions</a></li>
                <li><a href="sponsors.php">Sponsors</a></li>
                <li>
                    Venue
                    <ul class="cus-ul pad-left-1">
                        <li><a href="venue.php">Conference Venue</a></li>
                        <li><a href="venue.php#conf-accomodation">Accomodation</a></li>
                        <li><a href="venue.php#transportation">Transportation</a></li>
                        <li><a href="venue.php#things-to-do">Things To Do</a></li>
                    </ul>
                </li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </section>

        <?= $footer ?>
        <?= $script ?>

    </body>
</html>
