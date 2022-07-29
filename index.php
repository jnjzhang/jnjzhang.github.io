<?php
$page = new stdClass();
$page->title = "Junjie Zhang - Environmental Economics - Homepage";
$page->template = "templates/template.php";
?>
<?php ob_start(); /* head */ ?>
<meta name="description" content="Junjie Zhang's academic homepage">
<?php $page->head = ob_get_clean(); ?>
<?php ob_start(); /* content */ ?>
<div class="index_left">
    <p><a href="images/Junjie_Zhang.jpg"><img alt="Junjie Zhang" src="images/Zhang_low_px.jpg" width="140" height="167"></a></p>
    <p>&#9993; <a href="mailto:junjie.zhang@duke.edu">Email</a></p>
    <div class="mobile-hide">
    	<p>T: +86 (512) 3665-7068<br></p>
    	<p>Office: IB #3045<br>8 Duke Avenue, Kunshan<br>Jiangsu, China 215316</p>
    </div>
</div>
<div class="index_title">
	<h1>Junjie Zhang, Ph.D.</h1>
	<p>Director<br> 
		Initiative for Sustainable Investment<br>
		Duke Kunshan University</p>
	<p>Associate Professor<br>
		Nicholas School of the Environment<br>
		Duke University</p>
	<p>Volkswagen Visiting Chair in Sustainability<br>
		Schwarzman Scholars Program<br>
		Tsinghua University</p>
    <p>
    	[<a href="cv/cv_junjie_zhang.pdf">CV</a>] 
    	[<a href="https://scholars.duke.edu/person/junjie.zhang">Duke</a>]
    	[<a href="https://scholar.google.com/citations?user=XCLp_zgAAAAJ&hl=en">Google</a>]
    </p> 
    <hr>
</div>    
<div class="index_right">
<p>Junjie Zhang is the Director of the Initiative for Sustainable Investment (ISI) at Duke Kunshan University (DKU) and Associate Professor of Environmental Economics in the Nicholas School of the Environment at Duke University. His research focuses on empirical issues in environmental and resource economics, with topics covering air pollution, energy transition, and climate change. He has received funding from the U.S. National Science Foundation, U.S. National Oceanic and Atmospheric Administration, China National Natural Science Foundation, China's Ministry of Ecology and Environment, China Council for International Cooperation on Environment and Development, Energy Foundation, The World Bank, and Asian Development Bank.</p>

<p>Zhang is a co-chair of the Committee of Environmental Economics in the Chinese Academy of Environmental Science, a member of the Advisory Board for the Nicholas Institute for Environmental Policy Solutions, and the Chief Economist of the Green Finance Forum of 60. Zhang is also an associate editor for the Journal of Economic Behavior & Organization (JEBO) and an editorial board member for the Journal of the Association of Environmental & Resource Economists (JAERE) and Journal of Environmental Economics & Management (JEEM). </p>

<p>Zhang served as the founding director of DKU’s Environmental Research Center and International Master of Environmental Policy Program. Before that, he was an associate professor in the School of Global Policy and Strategy at the University of California, San Diego. He was the Volkswagen Visiting Chair in Sustainability in the Schwarzman Scholars Program at Tsinghua University. He also served as a senior advisor for the Asia Society, an auditor for the Asian Association of Environmental & Resource Economics, and a co-editor for the China Economic Review.</p>

<p>Zhang holds a B.S. from Renmin University of China, a B.S. and an M.S. from Tsinghua University, and a Ph.D. from Duke University.</p>

</div>
<?php $page->content = ob_get_clean(); ?>
<?php $page->foot = ob_get_clean(); ?>
<?php include_once $page->template; ?>