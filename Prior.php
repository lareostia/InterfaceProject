<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Prior to admission</title>
	<meta name="author" content="pele" />
	<link href="Styles/DocList.css" rel="stylesheet" type="text/css" />
	<!-- Date: 2013-08-04 -->
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  	<script>
  	function Save(){
	  $(function() {
	    $( "#dialog-confirm-Save" ).dialog({
	      resizable: false,
	      height:140,
	      modal: true,
	      buttons: {
	        "OK": function() {
	          $( this ).dialog( "close" );
	          window.location.assign('options.html')
	        }
	      }
	    });
	  });
	  }
	  
	  function Cancel(){
		  $(function() {
		    $( "#dialog-confirm-Cancel" ).dialog({
		      resizable: false,
		      height:140,
		      modal: true,
		      buttons: {
		        "Stay on this page": function() {
		          $( this ).dialog( "close" );
		        },
		        "Exit without saving": function() {
		          $( this ).dialog( "close" );
		          window.location.assign('options.html')
		        }
		      }
		    });
		  });
	  }
  	</script>
</head>
<body>
	<!--<div id = "breadcrumbstrail" style = "float: left">
		
		<div id = "homeBreadCrumb" style ="float: left" >
			<a href="options.html" >HOME &nbsp;</a>
		</div>
		<div id = "priorBreadCrumb" style ="float: left" >
			<a href="prior.php"> >>Prior to Admission</a>			
		</div>
		
	</div> -->
	<div id="dialog-confirm-Save" title="Your changes have been saved">
  		<p><span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>See you soon!</p>
	</div>
	<div id="dialog-confirm-Cancel" title="Exit without saving?">
  		<p><span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>Your changes will be discarded. Are you sure you want to exit?</p>
	</div>
	<div id="homeCrumb" style ="float: left" >
		<a href="options.html" >HOME &nbsp;</a>
	</div></br>
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
	'Certification of finances',
	'Document number two',
	'Document number three',
	'Document number four'
);
foreach (array_keys($documents) as $key) {
	echo '<li type="none" content="none" class="listElement"><input type="checkbox" id="Checkbox'.$key.'"></input><a class="link" href="document.php?'.$key.'">'.$documents[$key].'</a></li>';
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