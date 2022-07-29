<?php
$page = new stdClass();
$page->title = "Junjie Zhang - Environmental Economics - Publications";
$page->template = "templates/template.php";
?>
<?php ob_start(); /* head   */ ?>
    <meta name="description" content="Junjie Zhang's selected publications">
<?php $page->head = ob_get_clean();
?>
<?php ob_start(); /* content */ ?>
<div>
    <div class="submenu"> 
        <h1>Publication &#xbb; 
            <a href="#pub">English</a> &bull; 
            <a href="#cnjournal">Chinese</a> </h1>
    </div>   

    <h2 id="pub">Journal Publications<br></h2><hr>
    <?php include "publication/journals.php" ?>

    <h2 id="op">Book Chapters and Reports</h2><hr>
    <?php include "publication/chapters.php" ?>

    <h2 id="wp">Permanent Working Papers</h2><hr>
    <?php include "publication/workingpapers.php" ?>

    <h2 id="cnjournal">Chinese Papers</h2><hr>    
    <?php include "publication/cnpubsen.php" ?>

</div>
<?php $page->content = ob_get_clean(); ?>
<?php $page->foot = ob_get_clean(); ?>
<?php include_once $page->template; ?>