<?php

  include 'lib/config.php';
  include 'lib/utils.php';

  init();

?>

<!DOCTYPE HTML>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo page_title(); ?> | <?php echo site_name(); ?></title>
  <link href="/dist/style.min.css" rel="stylesheet" type="text/css" /> 
</head>

<body>
	<header>
    <h1><?php site_name(); ?></h1>
		<nav>
			<ul>
				<li>Your menu</li>
			</ul>
		</nav>
	</header>
	
	<section>
		<article>
			<header>
        <h2><?php echo page_title(); ?></h2>
			</header>
			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      <p>Posted on <time datetime="2009-09-04T16:31:24+02:00">September 4th 2009</time> by <a href="#">Writer</a> - <a href="#comments">6 comments</a></p>
		</article>
		
		<article>
			<header>
				<h2>Article title</h2>
				<p>Posted on <time datetime="2009-09-04T16:31:24+02:00">September 4th 2009</time> by <a href="#">Writer</a> - <a href="#comments">6 comments</a></p>
			</header>
			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
		</article>
	</section>

	<aside>
		<h2>About section</h2>
		<p>Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
	</aside>

	<footer>
    <small>&copy;<?php echo date('Y'); ?> <?php echo site_name(); ?> <?php echo site_version(); ?></small>
	</footer>
</body>
</html>