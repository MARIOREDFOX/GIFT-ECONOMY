
<!doctype html>
<html lang="en-us" class="home-dashboard" >
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" >
	


    <title>MyCircle</title>
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
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
	
<!-- footer -->

<script type='text/javascript'>
    function expandToWindow(container, footer) {
         var footerSize = window.innerHeight - container.offsetHeight - 138 ;
         var footerSizePX = footerSize.toString() + "px";
         footer.style.height = footerSizePX;
    }
</script>

<!-- TradeDoubler site verification 1992396 -->

<meta property="og:title" content="Giftcircle" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://home.giftcircle.co.uk/" />
<meta property="og:image" content="http://www.giftcircle.co.uk/static/img/giftcircle-logo.png" />
<meta property="og:site_name" content="giftcirle.co.uk" />
<meta property="fb:admins" content="100000216342006" />

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

<div class="topbar">
	
		
	<div class="container">
					<h1 class="title">Friends</h1>
			
	</div>	
	
</div><!-- end of header -->

<div class="container content-container">
	<div class="content">
				<div class="row">
		
<div class="span12">

		<!--<input type="hidden" id="list-id" name="list-id" value="979">-->
			
	<input type="hidden" id="list-id" name="list-id" value="977">
	
		
		  <input id="ask_friends" name="ask_friends" type="button" class="btn primary" value="ASK FRIENDS"  onclick="location.href='askfriends.php';" />
	<!-- <input id="invite_friends" name="invite_friends" type="button" class="btn primary" value="Invite to Gift Circle" />	-->
	
	<br />
	<br />
	
	<p>There’s no one here yet. To invite friends click ask for lists. </p>

	
</div>
<a href="welcome.php" class="btn btn-warning">HOME</a>

<div class="span4">
	<table>
<thead>
<tr>
<h3>Friendship Key</h3>

<thead>
			<tr>
				<th class="{sorter: false}"> <alt="Confirmed"  title="Confirmed" class="confirmed" /></th>
				<th>Friendship Confirmed</th>
			</tr>
			<tr>
				<th class="{sorter: false}"> <alt="Pending"  title="Pending" class="pending" /></th>
				<th>Friendship Pending</th>
			</tr>
		</thead>
</table></div>

<script>
$('#ask_friends').click(function()
{   
	var url;
	url ='/friend/ask_friend/' + $('#list-id').attr('value');
	location.href = url ;
});

$('#invite_friends').click(function()
{   
	var url;
	if ($('#selected-list')[0] === undefined) {
		url ='/friend/invite_friend/' + $('#list-id').attr('value');
	}else{	
		url ='/friend/invite_friend/' + $('#selected-list').attr('value');
	}
   	location.href = url ;
});
</script>
		</div><!-- .row -->
	</div><!-- .content -->
</div><!-- .container -->

</div>

	
</div>
</div>

<!--[if lt IE 7 ]>
<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->
</body>
</html>
