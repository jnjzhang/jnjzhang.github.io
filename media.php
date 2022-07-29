<?php
$page = new stdClass();
$page->title = "Junjie Zhang - Environmental Economics - Media";
$page->template = "templates/template.php";
?>
<?php ob_start(); /* head   */ ?>
<meta name="description" content="Junjie Zhang's media clips and op-ed">
<?php $page->head = ob_get_clean();
?>
<?php ob_start(); /* content */ ?>
<div>
    <div class="submenu">
        <h1>News &#xbb; 
            <a href="#op-ed">English</a> &bull; 
            <a href="#op-ed-cn">Chinese</a> </h1>
    </div>
    
    <h2 id="op-ed">Op-Ed</h2><hr>
        <?php include "media/enoped.php" ?>
    
    <h2 id="tv">TV/Radio Interviews</h2><hr>
        <?php include "media/entv.php" ?>

    <h2 id="op-ed-cn">Chinese Op-Ed</h2><hr>
        <?php include "media/cnopeden.php" ?>

    <h2 id="tv-cn">Chinese TV Interviews</h2><hr>
        <?php include "media/cntven.php" ?>
</div>

<?php $page->content = ob_get_clean(); ?>
<?php $page->foot = ob_get_clean(); ?>
<?php include_once $page->template; ?>
