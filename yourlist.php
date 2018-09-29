
<!doctype html>
<html lang="en-us" class="list-mine" >
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" >
	
<title>Yourlist</title>
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



	<div class="container">
					<h1>Your List:<?php echo isset($_POST['name']);?> </h1>
			
		
	</div>
</div><!-- end of header -->

<div class="container content-container">
	<div class="content">
				<div class="row">
		
<div class="span16">

	<div class="pull-right" id="list-details" style="margin: -10px 0 10px">
			<a href="/list/edit/983">Edit list details</a>
			|
			<a href="mylist.php">Back to lists</a>
	</div>
</div>




<div class="span10">
	<h3>Gifts on this list</h3>
			<p><b>Event Date - 2018-09-26</b></p>
			<form action="" method="post">
	

		
			
	
		
		 
	
</form>
	<div class="well nobg">
		<input type="button" class="btn primary" value="Add gifts" onclick="location.href='/gift/browse/983'"/>
	</div>
	
</div>



<div class="span6">

	<h3>Friends with this list</h3>

	<div>

		<div class="alert-message warning">You haven't added any friends to this list yet. Add friends so they can see what to buy you!</div>
		
		<div class="well nobg">
			<input type="button" class="btn primary" value="Add friends" onclick="location.href='askfriends.php'"/>
		</div>
	</div>

</div>
		</div><!-- .row -->
	</div><!-- .content -->
</div><!-- .container -->

</div>

</body>
</html>
