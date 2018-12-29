<?php
    require_once("common.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact us - ICCIIoT 2018</title>
        <meta name="keywords" content="contact, ICCIIoT, Conference, Computational Intelligence, IoT, Internet of Things, nitagartala, nita, National Institute of Technology Agartala, agartala, nit" />
        <meta name="description"  content="Contact details ... International Conference on Computational Intelligence & IoT (ICCIIoT) 2018" />

        <?= $head ?>

    </head>
    <body id="body-contact">

        <?= $nav ?>
        <?= $anchor ?>
        <?= $conf_details ?>

        <h1 class="page-heading">Contact Us</h1>

        <div class="container pad-top-rem">
            <p>For any Query or issue you are welcome to contact us by sending a mail at the following E mail ID:</p>
            <p>
                E-mail - <a href="javascript:void(0);">icciiot2018@domain</a>
                <br />
                Organizer - <a href="www.iaasse.org">www.iaasse.org</a>
            </p>
            <p>
                Conference Venue:
                <address class="row">
                    <div class="col-12 pad-btm-2">
                        National Institute of Technology, Agartala<br />
                        P.O.: Former Tripura Engineering College<br />
                        Barjala, Jirania, TRIPURA (W)<br />
                        Pin: 799046
                    </div>
                    <div class="col-12">
                        <div id="map"></div>
                    </div>
                </address>
            </p>
             <div class="imp">** All content management, financial and legal liabilities of the conference is lying with IAASSE, NIT Agartala is a host institute only.</div>
        </div>

        <?= $footer ?>
        <?= $script ?>
        <script src="js/contact.js"></script>
        <script>
            $("#nav-contact").addClass("active");
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCq8x9xnqp6xJrmvFCqavA75KTG4wK9WaU&callback=initMap" type="text/javascript"></script>

    </body>
</html>
