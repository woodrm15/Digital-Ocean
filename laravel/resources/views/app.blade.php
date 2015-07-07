<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		* {
			text-align: center;
			margin: auto;
		}
	  	table, thead, tbody ,th ,tr ,td {
	  		border: 1px solid black;


	  	}

	  	input {	
	  		width: 150px;
	  		height: 50px;
	  		margin-top: 10px;
	  		font-size: 12pt;
	  		
	  	}
	</style>
</head>
<body>
	<div id='container'>
		@yield('content')
	</div>
</body>
</html>