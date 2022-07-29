<?php
$page = new stdClass();
$page->title = "张俊杰-环境经济学-发表";
$page->template = "../templates/cntemplate.php";
?>
<?php ob_start(); /* head   */ ?>
<meta name="description" content="张俊杰的中文发表">
<?php $page->head = ob_get_clean();
?>
<?php ob_start(); /* content */ ?>
<div>
    <div class="submenu"> 
        <h1>论文发表 &#xbb; 
            <a href="#pub">英文</a> &bull; 
            <a href="#cnjournal">中文</a> </h1>
    </div>   

    <h2 id="pub">期刊杂志<br></h2><hr>
    <?php include "../publication/journals.php" ?>

    <h2 id="op">报告专著</h2><hr>
    <?php include "../publication/chapters.php" ?>

    <h2 id="wp">工作论文</h2><hr>
    <?php include "../publication/workingpapers.php" ?>

    <h2 id="cnjournal">中文论文</h2><hr>
    <?php include "../publication/cnpubs.php" ?>    

</div>
<?php $page->content = ob_get_clean();?>
<?php $page->foot = ob_get_clean();?>
<?php include_once $page->template;?>