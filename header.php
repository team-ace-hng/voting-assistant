<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php 
    if (isset($pageTitle)) {
        echo "You Choose - ".$pageTitle;
    } else {
        echo "You Choose";
    }
    ?>    	
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
	<nav class="navbar navbar-inverse">
	    <div class="container-fluid" >
		    <div class="navbar-header">
		      <a class="navbar-brand" id="logo" href="home.php">LOGO</a>
		    </div>
		    
		    <ul class="nav navbar-nav navbar-right">
			      <li><a href="home.php" class="nav-list" > Home</a></li>
			      <li><a href="home.php" class="nav-list"> About</a></li>
			      <li><a href="home.php" class="nav-list"> FAQ</a></li>
		    </ul>
		</div>
    </nav>
    
<!-- content wrapper -->
<div class="wrapper">