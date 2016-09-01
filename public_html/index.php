<!DOCTYPE html>
<html>
<head>
	<title>
		Ajax Live Search
	</title>
</head>

<body>

 	<h1 style="text-align: center;">Ajax Live-Search</h1>
 	<h2 style="text-align: center;">Search Cutomers</h2>
 	<form>
	 	

 		<div style="text-align:center;">
 			<label for="customer-name" style="margin-right:15px;">Customer Name:</label>
 			<input type="text" id="customer-name" placeholder="Customer Name" name="" style="width:200px;height:25px;">
 		</div>

 		<div style="text-align:center;margin-top:20px;">
	 		<label>Sort By</label>
	 		<input type="radio" value="first_name" name="sort" checked><label>First Name</label>
	 		<input type="radio" value="last_name" name="sort"><label>Last Name</label>
	 		<input type="radio" value="email_address" name="sort"><label>Email</label>
	 		
	 	</div>
 		<img src="http://placehold.it/400x300">
 		<div style="text-align:left;margin-top:20px;font-size:20px; width:1000px;float:right;">
 			<span id="results"></span><br>
 		</div>
 		
 	</form>


</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>

</html>