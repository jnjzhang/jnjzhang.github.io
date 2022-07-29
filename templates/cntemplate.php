<?php header("Content-Type: text/html; charset=UTF-8"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $page->title; ?></title>
        <link rel="stylesheet" href="../css/style.css" media="screen" />
        <link rel="icon" type="image/png" href="../images/favicon-32x32.png" sizes="32x32" />
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
                        <a href="https://dukekunshan.edu.cn/en/academics/master-environmental-policy"><img alt="School Logo" src="../images/logo.png" width="162" height="52"></a>
                    </div>
                    <div class="name-logo">
                        <div class="mobile-hide">
                        <span id="cntop"><a href="cnindex.php">张俊杰</a></span>
                        </div>
                        <span id="bottom"><a href="../index.php">English</a></span>
                    </div>
                    </div>
                    <div class="mobile-logo">
                        <div class="mobile-school-logo">
                            <a href="http://junjiezhang.org/">张俊杰</a>
                        </div>
                        <div class="mobile-name-logo">
                            <a href="../index.php">English</a>
                        </div>
                    </div>
                </div>
                <div id="navcontainer">
                    <ul>
                        <li><a href="cnindex.php">首页</a></li>
                        <li><a href="cncv.php">履历</a>
                            <ul>
                                <li><a href="../cv/cv_junjie_zhang.pdf">英文简历.pdf</a>
                            </ul>
                        </li>
                        <li><a href="cnpublication.php">发表</a></li>
                        <li><a href="cnmedia.php">媒体</a></li>
                    </ul>
                </div>
            </header>
            <div id="content">                
                <?php echo $page->content; ?>                
            </div>            
            <footer>                
                <div id="footer">
                    <hr>
                    <p>网站版权 &copy; 2008-2022 张俊杰<br>
                    江苏省昆山市杜克大道8号，215316</p>
                </div>                
            </footer>
        </div>
    </body>
    <?php echo $page->foot; ?>
</html>