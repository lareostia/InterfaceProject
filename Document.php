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
<body>
<body>
	<div class="Title">
		<p>Prior to admission</p>
	</div>
	<div class="Introduction">
		<p>     These are the documents you will be needing for applying to Santa Clara University. If you have received a document you can mark it as received
			by clicking the corresponding checkbox and saving your state. The system will remember your selections and display them the next time you visit us.
			Each document provides you with explanatory pictures and detailed information, along with specific links that will help you resolve any doubt 
			that may come up during the application process.</p>
	</div>
<?php
// We will recover from the database:
/*
 * 1- The necessary documents for this section
 * 2- The user information and the documents that the user has marked as "received"
 * 
 * For simulation purposes we are going to use a simulated user and simulated documents putted directly in the code.*/
 
//Simulated documents list:
echo '<ul>';
$documents = array
(
	'Document number one',
	'Document number two',
	'Document number three',
	'Document number four'
);
foreach (array_keys($documents) as $key) {
	echo '<li type="none" content="none" class="listElement"><input type="checkbox" id="Checkbox'.$key.'"></input> This is the way of displaying the document: <a class="link" href="document.php?'.$key.'">'.$documents[$key].'</a></li>';
}
echo '</ul>';
?>

<div>
	<table class="tableButtons">
		<tr>
			<td class="button" align="center"><a href="#" class="buttonText" onclick="Save();">Save</h1></td>
			<td class="button" align="center"><a href="#" class="buttonText" onclick="return Cancel()">Cancel</h2></td>
		</tr>
	</table>
</div>
</body>
