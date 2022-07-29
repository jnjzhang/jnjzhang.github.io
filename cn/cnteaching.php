<?php
$page = new stdClass();
$page->title = "张俊杰-环境经济学-教学";
$page->template = "../templates/cntemplate.php";
?>
<?php ob_start(); /* head   */ ?>
<meta name="description" content="张俊杰的教学">
<?php $page->head = ob_get_clean();
?>
<?php ob_start(); /* content */ ?>

<div class="submenu"> 
    <h1><a href="cncv.php">履历</a> &#xbb; 
    	教学 &#xbb; 
    	<a href="#DKU">当前教学</a> &bull; 
    	<a href="#UCSD">以往课程</a></h1>
</div>

<h2 id="DKU">ENVIRON 805K 环境经济学</h2>
	<p>本课程全面介绍环境经济学的理论与方法，为分析环境问题并识别政策解决方案引入经济学分析工具。课程的第一部分建立环境经济学的微观经济学基础，重点讨论市场效率和市场失灵。第二部分介绍费用效益分析等环境政策决策工具，侧重于环境价值评估，尤其是显示偏好法和叙述偏好法的应用。第三部分讨论环境监管，内容包括命令控制型管理、基于市场的政策手段、以及行为干预等。本课程也将讨论环境经济学方法在现实世界面临的挑战，比如时间和空间、风险和不确定性、守法和执法等。通过本课程的学习，学生能够对环境挑战和政策解决方案开展批判性思考。</p>

<h2>ENVIRON 561K 中国环境政策</h2>
	<p>本课程引导学生探讨中国环境和能源政策的最新进展。 我们将分析中国环境和能源问题的成因与后果；我们将研究中国的环境和能源治理，包括环境保护、能源生产和消费的制度和法律法规；我们也将讨论中国应对新兴环境和能源问题的政策措施，包括本国和全球的环境与气候变化问题。在本课程的学习中，学生将根据每次课程的主题，选择学术、政策、媒体领域的相关文章，分析这些文章的内容，以书面和口头的形式介绍这些文章的主要观点，并在课堂带领学生讨论文章的价值与缺陷。</p>

<h2 id="UCSD">以往课程（加州大学圣地亚哥分校）</h2><hr>
	<p><a href="../files/ECON267_Methods_Zhang.pdf">ECON 267: 数据与方法</a>（经济系博士生）</p>
	<p><a href="../files/ECON267_ResEcon_ZHANG.pdf">ECON 267: 自然资源经济学</a>（经济系博士生）</p>
	<p><a href="../files/IRGN453_SD_ZHANG.pdf">IRGN 453: 可持续发展</a></p>
	<p><a href="../files/IRGN458_IEPP_ZHANG.pdf">IRGN 458: 国际环境政策与政治</a></p>
	<p><a href="../files/IRGN467_CEEP_Zhang.pdf">IRGN 467: 中国环境与能源政策</a></p>
	<p><a href="../files/IRGN414_EEP_ZHANG.pdf">IRGN 414: 能源经济学</a></p>
	<p><a href="../files/Econ_Prep_Syllabus.pdf">经济学暑期课程</a></p>

<?php $page->content = ob_get_clean(); ?>
<?php $page->foot = ob_get_clean(); ?>
<?php include_once $page->template; ?>