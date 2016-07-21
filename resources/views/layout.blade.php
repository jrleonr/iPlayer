<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>iPlayer</title>
  <link type="text/css" rel="stylesheet" href="/css/app.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img alt="Brand" src="http://static.bbci.co.uk/tviplayer/1.116.1/img/navigation/iplayer_pink.svg">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">A-Z</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
	 @yield('content')
  </div>

	<script src="/js/main.js"></script>
</body>
</html>
