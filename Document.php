<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Document</title>
	<meta name="author" content="pele" />
	<link href="Styles/Document.css" rel="stylesheet" type="text/css" />
	<!-- Date: 2013-08-04 -->
	<script type="text/javascript">
		function Save(){
		}

</script>
</head>
<body class="body">
	<?php
	//$key = $_GET["$key"];
	$key = 1;
	if ($key != 1)
	{
		echo '<p>Page not yet ready for demostration. <a href="prior.php">Go back.</a></p>';
	}
	else {
		$title = 'Certification of finances';
		$introduction = 'This document is required in order to proove that the student has enough resources to complete his/hers degree. In order to prove this,
		the university requires financial documents that verify that the student will have the neccessary funds to complete his/hers studies without going through
		economical difficulties. The usual document that students provide is a bank letter certifying that there is a bank account under the name of the student
		or his/hers parents that contains the required funds. This would be an example of such a letter:';
		$image = 'Images/Certification.jpg';
		$DetailedExplanation = 'The College Board Certification of Finances Form must be completed and certified by a bank official. 
		The minimum assured support amount should cover the total cost of the first year of attendance. 
		It is important that the Certificate of Finance include the applicant; name exactly as it appears in our records. 
		Our inability to match your financial documentation with your application may result in the closure of your file.';
	}
	?>
	<div id="homeCrumb" style ="float: left" >
		<a href="options.html" >HOME &nbsp;</a>
	</div>
	<div id="priorCrumb" style ="float: left" >
		<a href="prior.php"> >>Prior to Admission</a>			
	</div>
	</br>
	<div class="Title">
		<p><?php echo $title?></p>
	</div>
	<div class="Introduction">
		<p><?php echo $introduction?></p>
	</div>
	<div>
		<?php echo '<img class="Picture" src="'.$image.'">'?>
	</div>
	<div class="DetailedExplanation">
		<p><?php echo $DetailedExplanation?></p>
	</div>
	<p class="LinksTitle">Helpful links</p>
	<div>
		<ul>
			<li class="link">
				<a href="http://www.scu.edu/ugrad/international/upload/2013-Certification-of-Finances-Guidelines_1.pdf">Guideline of finances certification</a>
			</li>
			<li class="link">
				<a href="http://www.scu.edu/financialaid/Cost-of-Attendance.cfm">Estimated costs of attendance.</a>
			</li>
		</ul>
	</div>
</body>
