<?php
$page = new stdClass();
$page->title = "Junjie Zhang - Environmental Economics - CV";
$page->template = "templates/template.php";
?>
<?php ob_start(); /* head   */ ?>
<meta name="description" content="Junjie Zhang's Curriculum vitae">
<?php $page->head = ob_get_clean();
?>
<?php ob_start(); /* content */ ?>
<div id="cv_list">
    <div class="submenu"> 
        <h1>Vita &#xbb;
        	<a href="cv/cv_junjie_zhang.pdf">CV.pdf</a>
        </h1>
    </div>

    <h2>Education</h2><hr>
    <ul>
        <li>PhD, Environmental and Resource Economics, Duke University, <span>2008</span></li>
        <li>MS, Environmental Engineering, Tsinghua University, <span>2003</span></li>
        <li>BS, Environmental Engineering, Tsinghua University, <span>2001</span></li>
        <li>BA, Environmental Economics, Renmin University of China, <span>2001</span></li>
    </ul>

    <h2>Primary Appointments</h2><hr>
    <ul>
    	<li>Director, Initiative for Sustainable Investment, Duke Kunshan University, <span>2022-</span></li>
        <li>Associate Professor, Nicholas School of the Environment, Duke University, <span>2016-</span></li>
        <li>Director, Environment Research Center, Duke Kunshan University, <span>2016-2021</span></li>
        <li>Director, International Master of Environmental Policy Program, Duke Kunshan University, <span>2016-2021</span></li>
        <li>Associate Professor, UC San Diego, <span>2015-2016</span></li>
        <li>Assistant Professor, UC San Diego, <span>2008-2015</span></li>
    </ul>

    <h2>Visiting Appointments</h2><hr>
    <ul>
        <li>Volkswagen Visiting Chair in Sustainability, Schwarzman College, Tsinghua University, <span>2021-2022</span></li>
        <li>UCE<sup>3</sup> Visiting Scholar, Bren School, UC Santa Barbara, <span>Fall 2011</span></li>
    </ul>

    <h2>Other Affiliations</h2><hr>
    <ul>
        <li>Chief Economist, Green Finance Forum of 60, <span>2021-</span></li>
        <li>Co-Chair, Committee of Environmental Economics, Chinese Academy of Environmental Science, <span>2017-</span></li>
    	<li>Advisory Board Member, Nicholas Institute for Environmental Policy Solutions, <span>2016-</span></li>
        <li>Board Member, Professional Association for China’s Environment, <span>2015-2020</span></li>
        <li>Auditor, Asian Association of Environmental and Resource Economics, <span>2017-2019</span></li>
        <li>Senior Adviser, Asia Society, <span>2012-2016</span></li>
    </ul>

     <h2>Editorial Positions</h2><hr>
    <ul>
        <li>Associate Editor, <em>Journal of Economic Behavior & Organization</em>, <span>2021-</span></li>
        <li>Editorial Council, <em>Journal of the Association of Environmental & Resource Economists</em>, <span>2020-</span></li>
        <li>Editorial Council, <em>Journal of Environmental Economics & Management</em>, <span>2018-</span></li>
        <li>Co-Editor, <em>China Economic Review</em>, <span>2018-2022</span></li>
    	<li>Editorial Board, <em>Journal of Environment and Development</em>, <span>2016-2021</span></li>
        <li>Associate Editor, <em>Marine Resource Economics</em>, <span>2011-2016</span></li>
    </ul>

    <h2>Research</h2><hr>
    <ul>
        <li>Environmental economics</li>
        <li>Environmental management</li>
        <li>Environmental policy</li>
        <li>Applied econometrics</li>
    </ul>

    <h2>Teaching</h2><hr>
    <ul>
        <li>Environmental Economics (iMEP)</li>
        <li>Chinese Environmental Policy (GLS)</li>
    </ul>

</div>
<?php $page->content = ob_get_clean();?>
<?php $page->foot = ob_get_clean();?>
<?php include_once $page->template;?>