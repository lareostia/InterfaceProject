/**
 * @author Pooja
 */
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
<body>

	<div id="dialog-confirm-Save" title="Your changes have been saved">
  		<p><span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>See you soon!</p>
	</div>
	
	<div id="dialog-confirm-Cancel" title="Exit without saving?">
  		<p><span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>Your changes will be discarded. Are you sure you want to exit?</p>
	</div>
	
	<div class="Title">
		<p>Prior to admission</p>
	</div>
	<div class="Introduction">
		<p>     Congratulations on being accepted at Santa Clara University
				The list documents you will need to apply for Visa at the Us embassy in your country. 
				The following checklist will help you organise the process.
				You can keep track of the necessary docs by clicking on the documents once you receive them
				and click save. 
		</p>
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