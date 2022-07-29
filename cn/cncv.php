<?php
$page = new stdClass();
$page->title = "张俊杰-环境经济学-简历";
$page->template = "../templates/cntemplate.php";
?>
<?php ob_start(); /* head   */ ?>
    <meta name="description" content="张俊杰的中文简历">
<?php $page->head = ob_get_clean();
?>
<?php ob_start(); /* content */ ?>
<div id="cv_list">
    <div class="submenu">
        <h1>履历 &#xbb; 
            <a href="../cv/cv_junjie_zhang.pdf">英文简历.pdf</a>
        </h1>
    </div>

    <h2>教育背景</h2><hr>
    <ul>
        <li>2008，杜克大学，环境与资源经济学，博士</li>
        <li>2003，清华大学，环境工程，硕士</li>
        <li>2001，清华大学，环境工程，第二学士</li>
        <li>2001，中国人民大学，环境经济学，学士</li>
    </ul>

    <h2>工作经历</h2><hr>
    <ul>
        <li>2022-，昆山杜克大学，可持续投资研究项目，主任</li>
        <li>2016-，杜克大学，尼古拉斯环境学院，副教授</li>
        <li>2016-2021，昆山杜克大学，环境研究中心主任、环境政策硕士项目主任</li>
        <li>2015-2016，加州大学圣地亚哥分校，全球政策与战略学院，副教授</li>
        <li>2008-2015，加州大学圣地亚哥分校，国际关系与太平洋研究学院，助理教授</li>
    </ul>

    <h2>学术兼职</h2><hr>
    <ul>
        <li>2021-2022，清华大学，苏世民书院，可持续发展访问讲席教授</li>
        <li>2011秋季，加州大学圣塔芭芭拉分校，布伦环境科学与管理学院，UCE<sup>3</sup>访问学者</li>
    </ul>

    <h2>社会兼职</h2><hr>
    <ul>
        <li>2021-，绿色金融60人论坛，首席经济学家</li>
        <li>2017-，中国环境科学会环境经济学分会，副主任委员</li>
    	<li>2016-，尼古拉斯环境政策研究院，顾问委员</li>
        <li>2015-2020，环球中国环境专家协会，理事</li>
        <li>2017-2019，亚洲环境与资源经济学协会，监事</li>
        <li>2012-2016，美国亚洲协会，高级顾问</li>
    </ul>

    <h2>杂志编辑</h2><hr>
    <ul>
        <li>2021-，<em>Journal of Economic Behavior & Organization</em>，副主编</li>
        <li>2020-，<em>Journal of the Association of Environmental & Resource Econonomics</em>，编委
        <li>2018-，<em>Journal of Environmental Economics & Management</em>，编委</li>
        <li>2018-2021，<em>China Economic Review</em>，共同主编</li>
        <li>2016-2021，<em>Journal of Environment and Development</em>，编委</li>
        <li>2011-2016，<em>Marine Resource Economics</em>，副主编</li>
    </ul>

    <h2>研究兴趣</h2><hr>
    <ul>
        <li>环境经济学</li>
        <li>应用计量经济学</li>
        <li>环境管理</li>
        <li>环境政策</li>
    </ul>

    <h2>课程教学</h2><hr>
    <ul>
        <li>环境经济学（研究生）</li>
        <li>中国环境政策（本科生）</li>
    </ul>

</div>
<?php $page->content = ob_get_clean();?>
<?php $page->foot = ob_get_clean();?>
<?php include_once $page->template;?>