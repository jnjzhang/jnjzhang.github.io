<?php
$page = new stdClass();
$page->title = "张俊杰-环境经济学-首页";
$page->template = "../templates/cntemplate.php";
?>
<?php ob_start(); /* head */ ?>
    <meta name="description" content="张俊杰的中文网站">
<?php $page->head = ob_get_clean(); ?>
<?php ob_start(); /* content */ ?>
<div>
    <div class="index_left">
        <p><a href="../images/Junjie_Zhang.jpg"><img alt="Junjie Zhang" src="../images/Zhang_low_px.jpg" width="140" height="140"></a></p>
        <p>&#9993; <a href="mailto:junjie.zhang@duke.edu">电子邮件</a></p>
        <div class="mobile-hide">
            <p>+86 (512) 3665-7068<br></p>
            <p>江苏省昆山市杜克大道8号<br>创新楼3045<br>邮编：215316</p>
        </div>
    </div>
    <div class="index_title">
        <h1>张俊杰 博士</h1>
        <p>昆山杜克大学可持续投资研究项目主任<br>
            杜克大学尼古拉斯环境学院副教授<br>
            清华大学苏世民书院可持续发展访问讲席教授
        </p>
        <p>
            [<a href="../cv/cv_junjie_zhang.pdf">学术简历</a>]
            [<a href="https://scholars.duke.edu/person/junjie.zhang">杜克主页</a>]
            [<a href="https://scholar.google.com/citations?user=XCLp_zgAAAAJ&hl=en">谷歌学术</a>]
        </p>
        <hr>
    </div> 
    <div class="index_right">
        <p>张俊杰是昆山杜克大学可持续投资研究项目主任、美国杜克大学尼古拉斯环境学院副教授、清华大学苏世民书院可持续发展访问讲席教授。</p>

        <p>他的主要研究方向为环境经济学，擅长将经济学与环境科学方法相结合，研究空气污染、能源转型和气候变化等政策的实证问题。他的研究项目得到了国家自然科学基金会、生态环境部、中国环境与发展国际合作委员会、美国国家科学基金会、美国国家海洋和大气管理局、能源基金会、世界银行、以及亚洲开发银行等机构的资助。</p>

        <p>他担任多项社会职务，包括中国环境科学会环境经济学分会副主任委员、尼古拉斯环境政策研究所顾问委员、绿色金融60人论坛首席经济学家等。他也担任国际期刊Journal of Economic Behavior & Organization (JEBO) 副主编、Journal of Environmental Economics & Management (JEEM) 编委、Journal of the Association of Environmental & Resource Economists (JAERE) 编委。</p>

        <p>他创办了昆山杜克大学环境研究中心与环境政策硕士专业并担任创始主任（2016-2021）。此前，他曾任加州大学圣地亚哥分校全球政策与战略学院助理教授、副教授，并兼任美国亚洲协会资深顾问、亚洲环境与资源经济学会监事、环球中国环境专家协会理事、国际期刊China Economic Review (CER) 共同主编等社会职务。</p>
            
        <p>张俊杰于2001年从中国人民大学获得环境经济学学士学位，同年从清华大学获得环境工程第二学士学位，2003年从清华大学获得环境工程硕士学位，2008年从美国杜克大学获得环境与资源经济学博士学位。</p>
    </div>
</div>
<?php $page->content = ob_get_clean(); ?>
<?php $page->foot = ob_get_clean(); ?>
<?php include_once $page->template; ?>