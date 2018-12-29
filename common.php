<?php

    $head = "
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"images/logo/favicon.png\" />
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" integrity=\"sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB\" crossorigin=\"anonymous\" />
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\" crossorigin=\"anonymous\" />
    <link href=\"https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"css/style.css\" />
    ";

    $nav = "
    <nav class=\"navbar navbar-expand-xl bg-light navbar-light fixed-top\">
        <a class=\"navbar-brand\" href=\"index.php\">
            <span class=\"nav-brand-bg\">ICCIIoT</span>&nbsp;2018
        </a>
        <button id=\"btn-collapse\" class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsibleNavbar\">
            <span class=\"navbar-toggler-icon\"></span>
            <span class=\"cross\"><i class=\"fas fa-times\"></i></span>
        </button>
        <div class=\"collapse navbar-collapse flex-row-reverse\" id=\"collapsibleNavbar\">
            <ul class=\"navbar-nav justify-content-end\">
                <li id=\"nav-home\" class=\"nav-item\">
                    <a class=\"nav-link\" href=\"index.php\">Home</a>
                </li>
                <li id=\"nav-call-for-papers\" class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Call for Papers</a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"call-for-papers.php\">About ICCII<span class=\"text-lowercase\">o</span>T 2018</a>
                        <a class=\"dropdown-item\" href=\"call-for-papers.php#imp-dates\">Important Dates</a>
                        <a class=\"dropdown-item\" href=\"call-for-papers.php#guidelines\">Submission Guidelines</a>
                        <a class=\"dropdown-item\" href=\"call-for-papers.php#indexing-papers\">Indexing</a>
                        <a class=\"dropdown-item\" href=\"call-for-papers.php#tracks\">Conference Tracks</a>
                    </div>
                </li>
                <li id=\"nav-committees\" class=\"nav-item\">
                    <a class=\"nav-link\" href=\"committees.php\">Committees</a>
                </li>
                <li id=\"nav-registration\" class=\"nav-item\">
                    <a class=\"nav-link\" href=\"register.php\">Registration</a>
                </li>
                <li id=\"nav-sessions\" class=\"nav-item\">
                    <a class=\"nav-link\" href=\"sessions.php\">Special Sessions</a>
                </li>
                <li id=\"nav-sponsors\" class=\"nav-item\">
                    <a class=\"nav-link\" href=\"sponsors.php\">Sponsors</a>
                </li>
                <li id=\"nav-venue\" class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Venue</a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink2\">
                        <a class=\"dropdown-item\" href=\"venue.php\">Conference Venue</a>
                        <a class=\"dropdown-item\" href=\"venue.php#conf-accomodation\">Accommodation</a>
                        <a class=\"dropdown-item\" href=\"venue.php#transportation\">Transportation</a>
                        <a class=\"dropdown-item\" href=\"venue.php#things-to-do\">Things to Do</a>
                    </div>
                </li>
                <li id=\"nav-contact\" class=\"nav-item\">
                    <a class=\"nav-link\" href=\"contact.php\">Contact</a>
                </li>
                <li class=\"nav-item\">
                    <div class=\"nav-link d-inline-block\"><img src=\"images/sponsors/elsevier2.png\" title=\"Elsevier\" alt=\"Elsevier\"></div>
                    <a class=\"nav-link d-inline-block d-xl-none\" href=\"http://www.nita.ac.in/index.php\" target=\"_blank\"><img src=\"images/sponsors/nita-logo.png\" class=\"sm-menu-nita\" title=\"NIT Agartala\"alt=\"NIT Agartala\"></a>
                </li>
                <li class=\"nav-item nita\">
                    <a class=\"nav-link\" href=\"http://www.nita.ac.in/index.php\" target=\"_blank\"><img src=\"images/sponsors/nita-logo.png\" title=\"NIT Agartala\" alt=\"NIT Agartala\"></a>
                </li>
            </ul>
        </div>
        <div id=\"nita-xl\">
            <a href=\"http://www.nita.ac.in/index.php\" target=\"_blank\"><img src=\"images/sponsors/nita-logo.png\" title=\"NIT Agartala\" alt=\"NIT Agartala\"></a>
        </div>
    </nav>
    ";

    $anchor = "
    <div id=\"anchor-top\"><i class=\"fas fa-angle-up\"></i></div>
    <div id=\"anchor-bottom\"><i class=\"fas fa-angle-down\"></i></div>
    ";

    $conf_details = "
    <div class=\"row flex-row no-h-mar\">
        <div class=\"col-12 intro-text pad-top-5\">
            <div class=\"intro-heading bold\">International Conference on Computational&nbsp;Intelligence & IoT&nbsp;(ICCIIoT)&nbsp;2018</div>
            <div class=\"time-venue\"><span class=\"text-underline\">14-15 December 2018</span><br />
            National Institute of Technology Agartala, Tripura, India</div>
            <div class=\"content\">
                <div class=\"caption d-none d-sm-block\"><span id=\"collab\">In Collaboration with</span></div>
                <img id=\"gm-img\" class=\"d-none d-sm-inline-block\" title=\"Center for Global Management, California State University, San Bernardino\" alt=\"Center for Global Management, California State University, San Bernardino\" src=\"images/sponsors/gm.png\">
            </div>
            <div class=\"row pad-btm-rem\">
                <div class=\"col-12\">
                    <div class=\"caption\">Conference Proceedings</div>
                    <div class=\"text\">
                        <span class=\"bold\">ALL ACCEPTED & PRESENTED</span> papers will be included in <span class=\"bold\">ELSEVIER-SSRN</span> Digital Library.
                    </div>
                    <img class=\"elsevier d-none d-sm-inline-block\" src=\"images/sponsors/elsevier.png\" title=\"Elsevier\" alt=\"ELSEVIER\">
                    <div class=\"last-date\">
                        <div class=\"marquee\">
                            <span class=\"marquee-text\">Submission&nbsp;Deadline:&nbsp;August&nbsp;25,&nbsp;2018</span>
                        </div>
                    </div>
                </div>
            </div>
            <a href=\"#\" class=\"submit-now\">Submit&nbsp;Now</a>
        </div>
    </div>
    ";

    $footer = "
    <footer class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-8 col-sm-12\">
                <div class=\"disclaimer\">Disclaimer: This site is designed by <a href=\"web-team-nita.php\">Web Team @ NIT Agartala</a> and the contents are provided by IAASSE.</div>
                <div class=\"copyright\">
                    Copyright ©2018. All trade marks and images are the property of their respective owners.
                </div>
            </div>
            <div class=\"social col-md-4 col-sm-12 text-right\">
                <a href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                <a href=\"https://www.facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                <a href=\"mailto:icciiot2018@nita.ac.in\"><i class=\"fas fa-envelope\"></i></a>
            </div>
        </div>
    </footer>
    ";

    $script = "
    <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\" integrity=\"sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T\" crossorigin=\"anonymous\"></script>
    <script src=\"js/common.js\"></script>
    ";

?>
