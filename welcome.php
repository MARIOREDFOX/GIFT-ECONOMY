<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!doctype html>
<html lang="en-us" class="home-dashboard" >
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" >
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script type="text/javascript" src="/static/js/cufon-yui.js"></script>
	<script type="text/javascript" src="/static/js/HouschkaAltBlackRegular_900.font.js"></script>
	<script type="text/javascript" src="/static/js/VAGLight_700.font.js"></script>
	<script type="text/javascript" src="/static/js/nevisBold_700.font.js"></script>
	<script type="text/javascript" src="/static/js/engage.itoggle.js"></script>
	<script type="text/javascript" src="/static/js/jquery.metadata.js"></script>
	<script type="text/javascript" src="/static/js/jquery.tablesorter.min.js"></script>
	<script type="text/javascript" src="/static/js/functions.js"></script>
	<script type="text/javascript" src="/static/js/test/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="/static/js/test/bootstrap.min.js"></script>


<script>try{Typekit.load();}catch(e){}</script>

<!-- footer -->

<script type='text/javascript'>
    function expandToWindow(container, footer) {
         var footerSize = window.innerHeight - container.offsetHeight - 138 ;
         var footerSizePX = footerSize.toString() + "px";
         footer.style.height = footerSizePX;
    }
</script>

<!-- TradeDoubler site verification 1992396 -->



<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body onload='expandToWindow(document.getElementById("container"), document.getElementById("footer"))' onresize='expandToWindow(document.getElementById("container"), document.getElementById("footer"))'>
<div id="container">

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

window.fbAsyncInit = function() {
        FB.init({
          appId      : '1493544874236368',
          xfbml      : true,
          version    : 'v2.1'
        });
};
 
</script>


    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<style>
body  {
    background-color: rgba(255, 1, 0, 0.1);
}
</style>

	<form method="post" action="mycircle.php">
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
		<a href="index.php" class="btn btn-warning">GIFT ECONOMY</a>

    </p>
	<div class="title">
    <h1>GIFT ECONOMY USER PAGE</h1><br>
    <h3><p>A gift economy is an open group of people, who meet-up regularly with the aim to help each other, by
     stating their needs and offering their services without the expectation of anything in return.<br> The exchange of those gifts is moderated by the structure of the gift economy.</p></h3><br>
	</div>
	<div>
	 <a href="mycircle.php" class="btn btn-warning">MyCircle</a>
	</div>


	<div class="container">
					<h1 class="title">Notifications</h1>
			
		
	</div>
</div><!-- end of header -->

<div class="container content-container">
	<div class="content">
				<div class="row">
		
<div class="span12">

	<h3>Pending friend requests</h3>
	<p style="text-align:left">Friend requests you receive will appear here. </p>
	
 



<!-- table -->
	<h3>Your lists</h3>
	
	
<table class="zebra-striped sort">
	<thead>
		<tr>
			<th>List name</th>
			<th width="150">Friends Shared with</th>
			<th width="100">Total gifts</th>
		</tr>
	</thead>
	<tbody>
				<tr>
			<td>
				<a href="/list/mine/979">
					new list				</a>
			</td>
			<td style="text-align:right">1</td>
			<td style="text-align:right">2</td>
		</tr>
				<tr>
			<td>
				<a href="/list/mine/978">
					new list				</a>
			</td>
			<td style="text-align:right">0</td>
			<td style="text-align:right">0</td>
		</tr>
			</tbody>
</table>


<!-- table -->

	<div class="well">
		<input type="button" class="btn primary" value="New list" onclick="location.href='newlist.php'"/>
				<a class="btn" href="all_list.php">All your lists</a>
			</div>
			
			
	<h3>Shopping List</h3>

	 <p style="text-align:left">Gifts you’re thinking of buying will appear here and on your shopping list.</p>
		
	<h3 style="clear:both">Most recently updated friends' lists</h3>
	

				<p>Your friends' lists will appear here. Ask for lists by adding friends using the button below.</p>
			<div class="well nobg">
		To ask friends for lists go to MY Circle and click 'Ask for lists' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn" href="mycircle.php">My Circle</a>
	</div>



</div>

	    
  
</body>
</html>



