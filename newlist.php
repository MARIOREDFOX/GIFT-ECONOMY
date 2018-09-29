
<!doctype html>
<html lang="en-us" class="list-add" >
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" >
	
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
	
<body onload='expandToWindow(document.getElementById("container"), document.getElementById("footer"))' onresize='expandToWindow(document.getElementById("container"), document.getElementById("footer"))'>
<div id="container">


<div class="container">
					<h1 class="title">Start a new List</h1>
			
		
	</div>
<div class="container content-container">
	<div class="content">
				<div class="row">
		<div class="span12">
	<p>
		Give your list a name and an event date.
	</p>

	<form action="yourlist.php" method="POST">
		<fieldset>
			<div class="clearfix">
				<label>List name</label>
				<input name="name" placeholder="eg '30th Birthday'">
			</div>

			<div class="clearfix">
				<label>Event date</label>
				<center><div class="input">
					<input name="expiry" placeholder="eg '01/01/2018'" type="date">
					<span class="help-inline">Optional (dd/mm/yyyy)</span>
				</div></center>
			</div>
			
			<div class="clearfix">
				<label>Child's List</label>
				<div class="input">
					<input name="child" type="checkbox" value="child">
					<span class="help-inline">If you are creating this list for a child check this box</span>
				</div>
    </div>
			<!--
			<div class="clearfix">
				<label>Public List</label>
				<div class="input">
					<input type=checkbox name="public">
					<span class="help-inline">If you want to allow anyone to see this list then tick the box</span>
				</div>
			</div>
			-->
			
			<div class="actions">
				<a href="yourlist.php" class="btn btn-warning">YOUR LIST</a> or
				<a href="mylist.php">cancel</a>
			</div>
		</fieldset>
	</form>
</div>



		</div><!-- .row -->
	</div><!-- .content -->
</div><!-- .container -->

</div>


</body>
</html>
