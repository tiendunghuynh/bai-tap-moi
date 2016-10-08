
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>semaphore - Kỹ Năng Trại</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="http://localhost/skill/views/search_css.css">
        <link rel="stylesheet" href="http://localhost/skill/views/icon/css/font-awesome.css">
        <link rel="stylesheet" href="http://localhost/skill/views/icon/css/font-awesome.min.css">
        <link rel='stylesheet' id='woocommerce-layout-css'  href='//demo.athemes.com/areview/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=2.5.5' type='text/css' media='all' />
        <link rel='stylesheet' id='woocommerce-smallscreen-css'  href='//demo.athemes.com/areview/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=2.5.5' type='text/css' media='only screen and (max-width: 768px)' />
        <link rel='stylesheet' id='areview-bootstrap-css'  href='http://demo.athemes.com/areview/wp-content/themes/areview/bootstrap/bootstrap.min.css?ver=1' type='text/css' media='all' />
        <link rel='stylesheet' id='areview-style-css'  href='http://demo.athemes.com/areview/wp-content/themes/areview/style.css?ver=4.5.3' type='text/css' media='all' />
        <style id='areview-style-inline-css' type='text/css'>
            .site-title a { color: #ffffff; }
            .entry-title, .entry-title a { color: #505050; }
            .decoration-bar { 
                background: #00A0B0;
                background: -moz-linear-gradient(left, #00A0B0 0%, #00A0B0 20%, #4ECDC4 20%, #4ECDC4 40%, #EDC951 40%, #EDC951 60%, #FF6B6B 60%, #FF6B6B 80%, #C44D58 80%, #C44D58 100%);
                background: -webkit-gradient(left top, right top, color-stop(0%, #00A0B0), color-stop(20%, #00A0B0), color-stop(20%, #4ECDC4), color-stop(40%, #4ECDC4), color-stop(40%, #EDC951), color-stop(60%, #EDC951), color-stop(60%, #FF6B6B), color-stop(80%, #FF6B6B), color-stop(80%, #C44D58), color-stop(100%, #C44D58));
                background: -webkit-linear-gradient(left, #00A0B0 0%, #00A0B0 20%, #4ECDC4 20%, #4ECDC4 40%, #EDC951 40%, #EDC951 60%, #FF6B6B 60%, #FF6B6B 80%, #C44D58 80%, #C44D58 100%);
                background: -o-linear-gradient(left, #00A0B0 0%, #00A0B0 20%, #4ECDC4 20%, #4ECDC4 40%, #EDC951 40%, #EDC951 60%, #FF6B6B 60%, #FF6B6B 80%, #C44D58 80%, #C44D58 100%);
                background: -ms-linear-gradient(left, #00A0B0 0%, #00A0B0 20%, #4ECDC4 20%, #4ECDC4 40%, #EDC951 40%, #EDC951 60%, #FF6B6B 60%, #FF6B6B 80%, #C44D58 80%, #C44D58 100%);
                background: linear-gradient(to right, #00A0B0 0%, #00A0B0 20%, #4ECDC4 20%, #4ECDC4 40%, #EDC951 40%, #EDC951 60%, #FF6B6B 60%, #FF6B6B 80%, #C44D58 80%, #C44D58 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00A0B0', endColorstr='#C44D58', GradientType=1 );					
            }

        </style>
        <script type='text/javascript' src='http://demo.athemes.com/areview/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
        <script type='text/javascript' src='http://demo.athemes.com/areview/wp-content/themes/areview/js/scripts.js?ver=1'></script>
        <script type="text/javascript">
            var dem = 0;
            var chay;
            var s = '<?php echo $b; ?>';
            s = s.split("");
            function next() {
                if (dem == s.length) {
                    document.duc.src = "http://localhost/skill/img/semaphore/semaphore.svg";
                    clearInterval();
                    exit();
                }
                if (s[dem] == ' ') {
                    document.duc.src = "http://localhost/skill/img/semaphore/semaphore.svg";
                } else if (s[dem] !== '.') {
                    document.duc.src = "http://localhost/skill/img/semaphore/" + s[dem] + ".gif";
                }
                dem++;
            }
            chay = setInterval(function () {
                next()
            }, <?php echo $level; ?>);
        </script>
    </head>

    <body class="home blog custom-background">
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
            <header id="masthead" class="site-header" role="banner">
                <div class="container">
                    <div class="site-branding row">
                        <div class="col-md-5"><h1 class="site-title"><a href="http://demo.athemes.com/areview/" rel="home">BLOG KỸ NĂNG</a></h1></div>
                        <div class="col-md-7"><form class="searchform cf" style="float:right" style="position: relative;">
                                <input type="text" placeholder="Nhập từ khóa cần tìm...">
                                <button type="submit">Search</button>
                            </form>
                        </div>
                    </div>

                </div>
            </header>
            <div class="clearfix">
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <div class="container">
                        <button class="menu-toggle btn"><i class="fa fa-bars"></i></button>

                        <span class="home-icon"><a href="http://localhost/skill/index.php" rel="home"><i class="fa fa-home"></i></a></span>

                        <div class="menu-all-pages-container">
                            <ul id="menu-all-pages" class="menu">
                                <li id="menu-item-4017" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                    <a href="http://localhost/skill/index.php?controller=homepage&action=book">Library</a>
                                </li>
                                <li id="menu-item-4017" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                    <a href="http://localhost/skill/index.php?controller=semaphore" style="color: chartreuse;">semaphore</a>
                                </li>
                                <li id="menu-item-4020" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                    <a href="http://localhost/skill/index.php?controller=morse">Morse</a>
                                </li>
                                <li id="menu-item-4007" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                    <a href="http://localhost/skill/index.php?controller=homepage&action=blog&id=2">About</a>
                                </li>
                            </ul>
                        </div>			</div>
                </nav><!-- #site-navigation -->
                <div class="decoration-bar"></div>
            </div>

            <div class="carousel-wrapper" style="color:white;">
                <div class="carousel container">
                    <center>
                        <img src="http://localhost/skill/img/semaphore/semaphore.svg" name="duc" width="60%" height="auto">
                        <a href="http://localhost/skill/index.php?controller=semaphore"><input type="submit" value="Rewrite" class="btn btn-warning" style="margin-left: 1%;"></a>
                    </center>
                </div>
                <div class="decoration-bar"></div>	
            </div>
            <footer id="colophon" class="site-footer" role="contentinfo">
                <div class="decoration-bar"></div>
                <div class="site-info container">
                    <a href="http://wordpress.org/">Proudly powered by WordPress</a>
                    <span class="sep"> | </span>
                    Theme: <a href="http://athemes.com/theme/areview">aReview</a> by aThemes		</div><!-- .site-info -->
            </footer><!-- #colophon -->
        </div><!-- #page -->
        <script>
            $(document).ready(function () {
                $(".input22").focus(function () {
                    $(this).css("background-color", "tomato");
                    $(this).css("font-size", "120%");
                    $(this).css("font-weight", "bold");
                    $(this).css("font-family", "Arial");
                });
            });
        </script>
        <script type="text/javascript" src="http://localhost/skill/views/morse.js"></script>
    </body>
</html>
