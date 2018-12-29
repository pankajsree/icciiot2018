<?php
    require_once("common.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home - ICCIIoT 2018</title>
        <meta name="keywords" content="ICCIIoT, conference, Computational Intelligence, Computational, Intelligence, IoT, data, Internet of Things, nitagartala, nita, National Institute of Technology Agartala, agartala, nit" />
        <meta name="description"  content="International Conference on Computational Intelligence & IoT (ICCIIoT) 2018 ... NIT Agartala ... December 14-15" />

        <?= $head ?>

    </head>

    <body id="body-index">

        <?= $nav ?>
        <?= $anchor ?>

        <!-- Conference Details & Carousel -->

        <div class="container-fluid home">
            <div class="row flex-row-reverse">
                <div class="col-sm-12 col-lg-6 intro-text">
                    <div class="intro-heading bold">International Conference on Computational&nbsp;Intelligence & IoT&nbsp;(ICCIIoT)&nbsp;2018</div>
                    <div class="time-venue"><span class="text-underline">14-15 December 2018</span><br />
                    National Institute of Technology Agartala, Tripura, India</div>
                    <div class="content">
                        <div class="caption d-block"><span id="collab">In Collaboration with</span></div>
                        <img id="gm-img" class="d-inline-block" title="Center for Global Management, California State University, San Bernardino" alt="Center for Global Management, California State University, San Bernardino" src="images/sponsors/gm.png">
                    </div>
                    <div class="row pad-btm-rem">
                        <div class="col-12">
                            <div class="caption">Conference Proceedings</div>
                            <div class="text">
                                <span class="bold">ALL ACCEPTED & PRESENTED</span> papers will be included in <span class="bold">ELSEVIER-SSRN</span> Digital Library.
                            </div>
                            <img class="elsevier" src="images/sponsors/elsevier.png" title="Elsevier" alt="ELSEVIER">
                            <div class="last-date">
                                <div class="marquee">
                                    <span class="marquee-text">Submission&nbsp;Deadline:&nbsp;August&nbsp;25,&nbsp;2018</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="submit-now">Submit&nbsp;Now</a>
                </div>
                <div class="col-sm-12 col-lg-6 intro-img">
                    <div class="container-fluid home-carousel-container">
                        <div id="home-carousel" data-pause="false"  class="carousel slide">
                            <ul class="carousel-indicators">
                                <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#home-carousel" data-slide-to="1"></li>
                                <li data-target="#home-carousel" data-slide-to="2"></li>
                                <li data-target="#home-carousel" data-slide-to="3"></li>
                                <li data-target="#home-carousel" data-slide-to="4"></li>
                                <li data-target="#home-carousel" data-slide-to="5"></li>
                                <li data-target="#home-carousel" data-slide-to="6"></li>
                                <li data-target="#home-carousel" data-slide-to="7"></li>
                                <li data-target="#home-carousel" data-slide-to="8"></li>
                            </ul>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/content1.jpg" title="Ujjayanta Palace (Tripura State Museum)" alt="Ujjayanta Palace (Tripura State Museum)">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/content2.jpg" title="Unakoti" alt="Unakoti Tripura">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/content3.jpg" title="Neermahal" alt="Neermahal (Neer Mahal) Tripura">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/content4.jpg" title="National Institute of Technology, Agartala" alt="National Institute of Technology, Agartala">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/content5.jpg" title="Entrance Gate - NIT Agartala" alt="Entrance Gate - NIT Agartala">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/content6.jpg" title="NITA Entrance" alt="NITA Entrance">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/content7.jpg" title="CSE, NITA" alt="CSE, NIT Agartala">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/content8.jpg" title="NIT Agartala" alt="NIT Agartala">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/content9.jpg" title="Computer Science &amp; Engineering Department, NIT Agartala" alt="Computer Science &amp; Engineering (CSE), NIT Agartala">
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#home-carousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#home-carousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Conference Introduction -->

        <section id="about" class="container">
            <h1 class="font-size-2"><span class="bb-short-underline">ICCIIoT 2018 Conference</span></h1>
            <div class="about-text">
                <p>The proposed <span class="bold">International Conference on Computational Intelligence & IoT (ICCIIoT), 2018</span> will be held at National Institute of Technology, Agartala, India to enable researchers build connections between different digital technologies based on Computational Intelligence and Internet of Things (IoT).</p>
                <p>Through sharing and networking, ICCIIoT 2018 will provide an opportunity for researchers, practitioners and educators to exchange research evidence, practical experiences and innovative ideas on issues related to the Conference theme.</p>
                <p>Please consider submitting to this conference.  We are interested in the entire range of concepts from theory to practice, including case studies, works-in-progress, and conceptual explorations.</p>
                <p>Now smart sensors can collaborate directly with machine without human involvement to automate decision making or to control a task using Computational Intelligence. Smart technologies including green electronics, green radios, fuzzy neural approaches and intelligent signal processing techniques play important roles for the developments of the wearable health care systems. This conference aims at providing a forum to discuss the recent advances on enabling technologies in Computational Intelligence and its applications for IoT.</p>
                <a href="call-for-papers.php" class="read-more">Read More<br /><div id="read-more-underline"></div></a>
            </div>
        </section>

        <!-- ICCIIoT Key Points -->

        <section id="conf-content-fluid" class="parallax container-fluid">
            <div class="cover"></div>
            <div class="container conference-content">
                <div class="row">
                    <div class="col-md-12 col-lg-6 conference-spacing bb-1">
                        <div class="tabs md-br-1">
                            <div class="row flex-row-reverse">
                                <div class="col-3 text-right">
                                    <i class="fas fa-random"></i>
                                </div>
                                <div class="col-9 text-right">
                                    <div class="content-topic">Focussed Networking</div>
                                    <div class="content-text">Provides a free and open atmosphere where attendees talk and engage in creative ways.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 conference-spacing bb-1">
                        <div class="tabs">
                            <div class="row">
                                <div class="col-3 text-left">
                                    <i class="fas fa-microphone"></i>
                                </div>
                                <div class="col-9 text-left conference-left-padding">
                                    <div class="content-topic">Expert Speakers</div>
                                    <div class="content-text">Our speakers represent the cream of research and development practitioners worldwide.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-6 conference-spacing bb-1">
                        <div class="tabs md-br-1">
                            <div class="row flex-row-reverse">
                                <div class="col-3 text-right">
                                    <i class="far fa-lightbulb"></i>
                                </div>
                                <div class="col-9 text-right">
                                    <div class="content-topic">Brilliant Ideas</div>
                                    <div class="content-text">High-impact, collaborative and new approaches to some of the world’s toughest problems.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 conference-spacing bb-1">
                        <div class="tabs">
                            <div class="row">
                                <div class="col-3 text-left">
                                    <i class="fas fa-book-open"></i>
                                </div>
                                <div class="col-9 text-left conference-left-padding">
                                    <div class="content-topic">Exceptional Program</div>
                                    <div class="content-text">Includes demonstrations, keynote speeches, plenary panel, breakout sessions as well as the industry program.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-6 conference-spacing md-bb-1">
                        <div class="tabs md-br-1">
                            <div class="row flex-row-reverse">
                                <div class="col-3 text-right">
                                    <i class="fas fa-globe"></i>
                                </div>
                                <div class="col-9 text-right">
                                    <div class="content-topic">Global Participation</div>
                                    <div class="content-text">Anticipating attendees from various countries all over the world.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 conference-spacing">
                        <div class="tabs">
                            <div class="row">
                                <div class="col-3 text-left">
                                    <i class="far fa-comment-alt"></i>
                                </div>
                                <div class="col-9 text-left conference-left-padding">
                                    <div class="content-topic">Inspirational Learning</div>
                                    <div class="content-text">Bringing together a researchers from several fields to collaborate together and create lasting change.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ICCIIoT 2018 Key Note Speaker -->

        <section id="key-note" class="container sub-topic">
            <h2><span class="bb-short-underline">Key Note Speaker</span></h2>
            <div class="row mem-individual">
                <div class="col-12 col-sm-10 col-md-12">
                    <div class="row pad-btm-1">
                        <div class="col-12 col-sm-3">
                            <img src="images/KS1.jpg" style="margin-bottom: 1rem" class="img-res" alt="Prof. Kaoru Sakatani image" />
                        </div>
                        <div class="col-12 col-sm-9">
                            <div class="mem-name">Prof. Kaoru Sakatani,</div>
                            <div class="mem-institute">Nihon University, Tokyo, Japan.</div>
                            <div class="mem-det">
                                Prof. Kaoru Sakatani is a Professor of Electrical and Electronic Engineering, College of Engineering, Nihon University, Japan. He is also concurrently serving as Professor of Neurosurgery Science in the same University. He has completed MD in Medicine and D.M.Sc. in Neurosurgery from Osaka Medical College, Japan. Prof. Sakatani also obtained PhD in Information Engineering from Faculty of Engineering, Hokkaido University (Japan) and PDF from New York University.
                                <br />
                                His domain of expertise includes the area of Human Computer Interaction and biomedical engineering research integrating the fields of medicine and engineering. His team has developed a next generation regional inclusive care system ("Koriyama model") utilizing cutting-edge technologies such as IoT, Big Data, AI and collaborate with Koriyama City to conduct social implementation of the research model.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ICCIIoT 2018 Timeline -->

        <section id="timeline-fluid" class="container-fluid no-pad">
            <div class="cover"></div>
            <div id="timeline-container" class="index-page container sub-topic">
                <h2 class="timeline-caption"><span class="bb-short-underline-white-center">Timeline</span></h2>
                <div id="line"></div>
                <div class="row no-h-mar row-reverse">
                    <span id="icon-first" class="icon">
                        <i class="fas fa-bullhorn"></i>
                    </span>
                    <div class="col-sm-12 col-md-6">
                        <div class="timeline-grid text-center">
                            <h4>Call for Papers</h4>
                            <p>June 25, 2018</p>
                        </div>
                    </div>
                </div>
                <div class="row no-h-mar flex-row">
                    <span class="icon">
                        <i class="fas fa-upload"></i>
                    </span>
                    <div class="col-sm-12 col-md-6">
                        <div class="float-md-right float-sm-left timeline-grid">
                            <h4>Submission</h4>
                            <p>August 25, 2018</p>
                        </div>
                    </div>
                </div>
                <div class="row no-h-mar row-reverse">
                    <span class="icon">
                        <i class="fas fa-check"></i>
                    </span>
                    <div class="col-sm-12 col-md-6">
                        <div class="timeline-grid">
                            <h4>Acceptance</h4>
                            <p>October 20, 2018</p>
                        </div>
                    </div>
                </div>
                <div class="row no-h-mar flex-row">
                    <span class="icon">
                        <i class="fas fa-camera"></i>
                    </span>
                    <div class="col-sm-12 col-md-6">
                        <div class="float-md-right float-sm-left timeline-grid">
                            <h4>Camera Ready</h4>
                            <p>November 20, 2018</p>
                        </div>
                    </div>
                </div>
                <div class="row no-h-mar row-reverse">
                    <span class="icon">
                        <i class="fas fa-desktop"></i>
                    </span>
                    <div class="col-sm-12 col-md-6">
                        <div class="timeline-grid">
                            <h4>Registration</h4>
                            <p>November 20, 2018</p>
                        </div>
                    </div>
                </div>
                <div class="row no-h-mar flex-row">
                    <span id="icon-last" class="icon">
                        <i class="fas fa-graduation-cap"></i>
                    </span>
                    <div class="col-sm-12 col-md-6">
                        <div class="float-md-right float-sm-left timeline-grid">
                            <h4>Conference</h4>
                            <p>December 14-15, 2018</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ICCIIoT Indexing -->

        <div class="index-bg sub-topic">
            <section id="indexing" class="container">
                <h2><span class="bb-short-underline">Indexing</span></h2>
                <div class="index-text">
                    <p>Post conference, proceedings will be made available to the following indexing services:</p>
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-3 indexing-pad sm-bb-1">
                            <div class="index-grid br-1">
                                <img src="images/indexing/scopus.png" title="Scopus" alt="Scopus">
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3 indexing-pad sm-bb-1">
                            <div class="index-grid sm-br-1">
                                <img src="images/indexing/dblp.png" title="dblp - computer science bibliography" alt="dblp - computer science bibliography">
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3 indexing-pad">
                            <div class="index-grid br-1">
                                <img src="images/indexing/clarivate-analytics.png" title="Clarivate Analytics" alt="Clarivate Analytics">
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3 indexing-pad">
                            <div class="index-grid">
                                <img src="images/indexing/google-scholar.png" title="google scholar" alt="google scholar">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- ICCIIoT 2018 Countdown -->

        <div id="counter-container" class="text-center sub-topic">
            <div class="countdown-text container">
                <h2><span class="bb-short-underline-black-center">Countdown</span></h2>
                <p>Enthusiastic minds will be all together on the same floor to exchange ideas, share the trends and converge towards a usable knowledge application in the fascinating world of IoT.</p>
                <p>Yes, with you we are also counting moments, see you during the workshop. </p>
            </div>

            <!-- Countdown Timer -->

            <section id="counter" class="container">
                <div class="cover-dark"></div>
                <div class="coming-soon container text-center">
                    <div class="conf-name text-center">ICCIIoT 2018</div>
                    <div class="date text-center">14 - 15 December, 2018, NIT Agartala</div>
                    <div id="time-left">
                        <div class="row">
                            <div class="col-3">
                                <div id="days"></div>
                                <div class="text">Days</div>
                            </div>
                            <div class="col-3">
                                <div id="hrs"></div>
                                <div class="text">Hours</div>
                            </div>
                            <div class="col-3">
                                <div id="mins"></div>
                                <div class="text">Minutes</div>
                            </div>
                            <div class="col-3">
                                <div id="secs"></div>
                                <div class="text">Seconds</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- ICCIIoT 2018 Conference Tracks -->

        <div class="tracks-bg">
            <section id="tracks" class="container sub-topic">
                <h2 class="caption text-center"><span class="bb-short-underline-white-center">IoT Conference Tracks</span></h2>
                <div class="row text-center">
                    <div class="col-sm-6 col-12 pad-v-1">
                        <div class="track-block">
                            <div class="topic">Computational Intelligence & Applications</div>
                            <ul>
                                <li>Data Cleaning & Preprocessing</li>
                                <li>Computational Learning Theory</li>
                                <li>Big Data Analytics</li>
                                <li>Soft Computing</li>
                                <li>Ubiquitous Computing</li>
                                <li>Bioinformatics & Scientific Computing</li>
                                <li>Natural Language processing</li>
                                <li>Machine Learning</li>
                                <li>Cognitive Science</li>
                                <li>Statistical computing</li>
                                <li>Artificial Intelligence</li>
                                <li>Advance Optimization techniques</li>
                                <li>Autonomous Computing</li>
                                <li>Extreme Learning Machines</li>
                                <li>Hybrid Intelligent Systems</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 pad-v-1">
                        <div class="track-block">
                            <div class="topic">Computational Techniques for Vision & Image Processing</div>
                            <ul>
                                <li>Emotional Computing</li>
                                <li>Neural networks</li>
                                <li>Fuzzy logic</li>
                                <li>Brain Machine Interface</li>
                                <li>Support Vector Machine</li>
                                <li>Artificial Neural Networks</li>
                                <li>Genetic Algorithms</li>
                                <li>Pattern Recognition and Classification</li>
                                <li>Content-Based Image Retrieval</li>
                                <li>Digital Image Computing</li>
                                <li>Fuzzy Computing</li>
                                <li>Image Segmentation</li>
                                <li>Swarm Intelligence</li>
                                <li>Selection and Dimension Reduction</li>
                                <li>Rough Sets Theory</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 pad-v-1">
                        <div class="track-block">
                            <div class="topic">IoT Enabling Technologies</div>
                            <ul>
                                <li>5G Networks and IoT</li>
                                <li>IoT Large Scale Pilots and Portability</li>
                                <li>Software Defined Network (SDN) and IoT</li>
                                <li>Sensor and Actuator Networks</li>
                                <li>IoT Protocols and Standards (IPv6, 6LoWPAN, RPL, 6TiSCH, WoT, oneM2M, etc.)</li>
                                <li>Wearable, Body Sensor Networks, Smart Portable Devices</li>
                                <li>Heterogeneous Networks, Web of Things, Web of Everything</li>
                                <li>Internet of Nano Things</li>
                                <li>Sensors Data Management, IoT Mining and Data Analytics</li>
                                <li>Distributed Storage, Data Fusion</li>
                                <li>Routing and Control Protocols</li>
                                <li>Mobility, Localization and Management Aspects</li>
                                <li>Cyber-physical systems, Context Awareness, Situation Awareness, Ambient Intelligence</li>
                                <li>Machine to Machine (M2M) / Devices-to-Devices communications and IoT</li>
                                <li>Automotive, Intelligent Transport</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 pad-v-1">
                        <div class="track-block">
                            <div class="topic">IoT Applications, Services and Security</div>
                            <ul>
                                <li>Smart Cities, Smart Home, and IoT-based Building Automation</li>
                                <li>Smart Agriculture, Retails and Water Management</li>
                                <li>Smart factories and Industry 4.0</li>
                                <li>e-Health, Assisted Living and e-Wellness</li>
                                <li>Smart Grid, Energy Management</li>
                                <li>Collaborative Applications and Systems</li>
                                <li>Big data and IoT Data Analytics</li>
                                <li>Semantic Technologies, Collective Intelligence</li>
                                <li>Cognitive and Reasoning about Things and Smart Objects</li>
                                <li>Mobile Cloud Computing (MCC) and IoT</li>
                                <li>IoT Privacy and Security Concerns</li>
                                <li>Wireless Sensor Network for IoT Security</li>
                                <li>Cryptography, Key Management, Authentication and Authorization for IoT</li>
                                <li>IoT Forensic Science</li>
                                <li>Communication Security in IoT</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Footer -->
        <?= $footer ?>

        <!-- Scripts -->
        <?= $script ?>
        <script src="js/custom.js"></script>
        <script>
            $("#nav-home").addClass("active");
        </script>

    </body>
</html>
