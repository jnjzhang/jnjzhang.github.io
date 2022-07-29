<?php header("Content-Type: text/html; charset=UTF-8"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $page->title; ?></title>
        <link rel="stylesheet" href="css/style.css" media="screen" />
        <link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32" />
        <meta name="viewport" content="width=device-width">
        <meta charset="utf-8">
        <?php echo $page->head; ?>
    </head>
    <body>
        <div class="container">
            <header>
                <div class="logo">
                    <div class="mobile-hide">
                    <div class="school-logo">
                        <a href="https://dukekunshan.edu.cn/en/academics/master-environmental-policy"><img alt="School Logo" src="images/logo.png" width="162" height="52"></a>
                    </div>

                    <div class="name-logo">
                        <span id="entop"><a href="index.php">Junjie Zhang</a></span>
                        <span id="bottom"><a href="cn/cnindex.php">中文</a></span>
                    </div>
                    </div>
                    <div class="mobile-logo">
                        <div class="mobile-school-logo">
                            <a href="http://junjiezhang.org/">Junjie Zhang</a>
                        </div>
                        <div class="mobile-name-logo">
                            <a href="cn/cnindex.php">中文版</a>
                        </div>
                    </div>
                </div>
                <div id="navcontainer">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="cv.php">Vita</a>
                            <ul>
                                <li><a href="cv/cv_junjie_zhang.pdf">CV.pdf</a>
                            </ul>
                        </li>
                        <li><a href="publication.php">Papers</a></li>
                        <li><a href="media.php">News</a></li>
                    </ul>
                </div>
            </header>
            <div id="content">                
                <?php echo $page->content; ?>                
            </div>            
            <footer>                
                <div id="footer">
                    <hr>
                    <p>Copyright &copy; 2008-2022 Junjie Zhang<br>
                    8 Duke Avenue, Kunshan, Jiangsu 215316, China</p>
                </div>                
            </footer>
        </div>
    </body>
    <?php echo $page->foot; ?>
</html>