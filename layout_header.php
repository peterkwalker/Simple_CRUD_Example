<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title><?php echo $page_title; ?></title>
 
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  
    <!-- our custom CSS -->
    <link rel="stylesheet" href="libs/css/custom.css" />
  
</head>
<body>
 
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administration <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="add_stuff.php">Add New Stuff</a></li>
          </ul>
        </li>
      </ul>
    
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
 
 
 
    <!-- container -->
    <div class="container-fluid">
    
    <div class="row">
    	<div class="col-md-6">
    		   <?php
        // show page header
        echo "<div style='margin-bottom:30px;'>
                <h1>{$page_title}</h1>
            </div>";
        ?>
    		
    	</div>
    	<div class="col-md-6">
    		 <img src="img/coffee-shop-logo.png" class="pull-right"/>
    		
    	</div>
    </div>
    
 
     
        
       