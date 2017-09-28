
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $pageTitle; ?></title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
    <!-- Navigation Start -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">One Piece</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">One Piece</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li<?php if($pageTitle == 'Home')    echo ' class="active"'; ?>><a href="#">Home</a></li>
            <li<?php if($pageTitle == 'About')   echo ' class="active"'; ?>><a href="#">About</a></li>
            <li<?php if($pageTitle == 'Contact') echo ' class="active"'; ?>><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navigation End -->