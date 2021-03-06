<?php require( 'blog/wp-blog-header.php');?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <title>xabertum.es</title>

    <!-- CSS  -->
    <link href="css/materialize.css" type="text/css" rel="stylesheet">
    <link href="css/style.css" type="text/css" rel="stylesheet">

    <!-- GITHUB embed  -->
    <link rel='stylesheet' href='css/github.css' />


    <script type="text/javascript" src="js/underscore-min.js"></script>
    <script type="text/javascript" src='js/github.js'></script>


    <!-- Modernizr -->
    <script src="js/modernizr.js"></script>


</head>

<body id="top" class="scrollspy">

    <div id="openModal" class="modalDialog">
        <div id="contactPopup" class="contact">
            <iframe class="contact" src="contact.html" id="iframe1" marginheight="0" frameborder="0" onLoad="autoResize('iframe1');"></iframe>
        </div>
    </div>

    <div id="openModal2" class="modalDialog2">
        <div id="contactPopup" class="contact">
            <iframe class="contact" frameborder="0" src="googleMaps.html" seamless height="320" width="480"></iframe>
        </div>
    </div>


    <!-- Pre Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>

    <div class="navbar-fixed">
        <nav id="nav_f" class="default_color" role="navigation">
            <div class="container">
                <div class="nav-wrapper"><a id="logo-container" href="#top" class="brand-logo"><span class="hide-on-small-only">{</span> <span id="xabertum">xabertum</span> <span class="hide-on-small-only">}</span></a>
                    <ul id="nav-mobile" class="right side-nav">
                        <li><a href="http://xabertum.es/blog">Snippets of Code</a></li>
                        <li><a href="#work">Works</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul><a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>

                </div>
            </div>
        </nav>
    </div>

    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <h1 class="text_h center header cd-headline letters type">
      <span>My favourite programming language is</span> 
      <span class="cd-words-wrapper waiting">
        <b class="is-visible">PHP</b>
        <b>JavaScript</b>
        <b>Python</b>
      </span>
    </h1>
        </div>
    </div>

    <div id="intro" class="section scrollspy">
        <div class="container">
            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12">
                    <h2 class="center header text_h2">There are<span class="span_h2"> only 10 types </span>of people in the world: those who understand<span class="span_h2"> binary</span >, and those who don't.    </h2>
                </div>

            </div>
        </div>
    </div>
    <div id="intro2" class="section scrollspy">
        <div class="container valign-wrapper">

            <div class="row">

                <div class="col s6">
                    <h2 class="header text_b"> Last Snippets </h2>

                    <div id="postsWP">
                        <?php $args=array( 'posts_per_page'=> 2, 'order'=> 'DESC', 'orderby' => 'date' ); $postslist = get_posts( $args ); foreach ( $postslist as $post ) : setup_postdata( $post ); ?>
                        <div>
                            <div class="tituloWP">
                                <?php the_date(); ?>
                            </div>
                            <br />
                            <div id="cardID" class="card">
                                <div class="tituloWP">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </div>
                                <?php the_category(); ?>
                                <?php the_excerpt(); ?>
                            </div>

                        </div>
                        <?php endforeach; wp_reset_postdata(); ?>

                    </div>
                </div>
                <div class="col s6">
                    <h2 class="header text_b">GitHub Activity </h2>
                    <p>Plugin authored and maintained by Akshay Sharma.</p>
                    <div class="gitHub">
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>

    <div class="container valign-wrapper">
        <div class="row">
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-action-favorite"></i>
                    <h5 class="promo-caption">Materializecss</h5>
                    <p class="light center">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components.</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-communication-phone"></i>
                    <h5 class="promo-caption">Simplifies</h5>
                    <p class="light center">By utilizing elements and principles of Material Design, we were able to create a framework that focuses on User Experience.</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-communication-stay-current-portrait"></i>
                    <h5 class="promo-caption">Lorem Ipsum</h5>
                    <p class="light center">We have provided detailed documentation as well as specific code examples to help new users get started.</p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="section scrollspy" id="work">
        <div class="container">
            <h2 class="header text_b">LastWorks.find()</h2>
            <div class="row">
                <div class="col s12 m4 l4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a class="imgOnCard" href="https://play.google.com/store/apps/details?id=es.xabertum.weatheron"><img class="imgOnCard" src="img/google-play-icon.png" alt="" /></a>
                            <img class="activator" src="img/3.1.png">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">App - WeatherOn <i class="mdi-navigation-more-vert right"></i></span>
                            <p><a href="https://play.google.com/store/apps/details?id=es.xabertum.weatheron">Link to Google Play</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">WeaherOn <i class="mdi-navigation-close right"></i></span>
                            <p>Accurate, simple & fast local weather forecast app. Powered by The Dark Sky Forecast API.</p>
                            <center>
                                <a href="https://play.google.com/store/apps/details?id=es.xabertum.weatheron"><img src="img/google-play-icon.png" width="245" alt="" /></a>
                            </center>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4 l4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/3.1.png">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">App - Chat Client Bot <i class="mdi-navigation-more-vert right"></i></span>
                            <p><a href="apk/xabertum.example.ChatClientBotStartUp.rar" download>Download .apk</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Chat Client Bot<i class="mdi-navigation-close right"></i></span>
                            <p>Little Chat Client Bot, that is always in good mood. Exercise from an edX MOOC.</p>
                            <a class="waves-effect waves-light btn"><i class="mdi-file-cloud left"></i>Github Repo</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4 l4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/04.1.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Web - ACOMA <i class="mdi-navigation-more-vert right"></i></span>
                            <p><a href="http://xabertum.es/acoma">View Work</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Web - ACOMA <i class="mdi-navigation-close right"></i></span>
                            <p>Web of an imaginary association. It has a MySql Data Base to personalize pages for different users.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col s12 m4 l4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/04.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Coming Soon <i class="mdi-navigation-more-vert right"></i></span>
                            <p><a href="#">This is a link</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Coming Soon<i class="mdi-navigation-close right"></i></span>
                            <p>Coming Soon.</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4 l4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/05.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Coming Soon<i class="mdi-navigation-more-vert right"></i></span>
                            <p><a href="#">This is a link</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Coming Soon <i class="mdi-navigation-close right"></i></span>
                            <p>Coming Soon.</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4 l4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/03.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Coming Soon<i class="mdi-navigation-more-vert right"></i></span>
                            <p><a href="#">This is a link</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Coming Soon <i class="mdi-navigation-close right"></i></span>
                            <p>Coming Soon.</p>
                            <a class="waves-effect waves-light btn"><i class="mdi-file-cloud left"></i>button</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer id="contact" class="page-footer default_color scrollspy">
        <div class="container">
            <div class="row">

                <div class="col l6 s12">
                    <h5 class="white-text">Bio</h5>
                    <img src="img/05.1.jpg" alt="" width="80" height="80" class="circle responsive-img" id="imgBio">
                    <p id="textBio" class="white-text">
                        I'm Javier Delgado, a committed and enthusiastic career-changer who is studying programming as full time job. Comments and suggestions about this site and its contents are greatly welcome.</p>


                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Contact Info</h5>
                    <ul class="white-text">
                        <li><img src="img/emailFooter.png" width="33" height="22" alt="" /><a class="colorText popUp" href="#1">Send an Email</a></li>
                        <li><img src="img/pin56.png" width="32" height="22" alt="" /><a class="colorText popUp2" href="#1">Open Map</a></li>
                        <li><img src="img/telFooter.png" width="32" height="23" alt="" /><a class="colorText" href="tel:+0034678899107">Give me a Call</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Social</h5>
                    <ul id="socialIcons">
                        <li>
                            <a class="white-text" href="https://github.com/xabertum"><img id="github" src="img/github100.png" width="30" height="29" alt="" /></a>
                        </li>
                        <li>
                            <a class="white-text" href="https://twitter.com/xabertum"><img id="twitter" src="img/twitter100.png" width="30" height="30" alt="" /></a>
                        </li>
                        <br/>
                        <li>
                            <a class="white-text" href="https://plus.google.com/102691326819028507880/posts"><img id="google" src="img/google+100.png" width="30" height="30" alt="" /></a>
                        </li>
                        <li>
                            <a class="white-text" href="es.linkedin.com/in/xabertum"><img id="linkedin" src="img/linkedin100.png" width="30" height="30" alt="" /></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright default_color">
            <div class="container">
                © 2015 - developed by <a class="white-text" href="#">xabertum</a>
            </div>
        </div>
    </footer>

    <!--  Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>


    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-58943080-3', 'auto');
        ga('send', 'pageview');
    </script>

</body>

</html>