<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
      <div id="logo-wrap">
<div id="logo">
	<h1><a href="#">chiptuneDB.com </a></h1>
	<h2> The Chiptune Database!</h2>
</div>
</div>

<!-- start header -->
<div id="header">
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="homepage">Home</a></li>
			<li><a href="<?php echo url_for('album/index') ?>">Albums</a></li>
			<li><a href="<?php echo url_for('artist/index') ?>">Artists</a></li>
			<li><a href="about">About</a></li>
			<li class="last"><a href="contact">Contact</a></li>
		</ul>
	</div>
</div>
<!-- end header -->
<!-- start page -->
<div id="wrapper">
<div id="wrapper-btm">
<div id="page">
    <!-- start sidebar -->
	<div id="sidebar">
		<ul>
			<li id="search">
				<h2>Search</h2>
				<form method="get" action="">
					<fieldset>
					<input type="text" id="s" name="s" value="" />
					<input type="submit" id="x" value="Search" />
					</fieldset>
				</form>
                                <br />Add an album from ##FORM##<br />
                                 Add an artist</li>
			<li>
				<h2>Friends</h2>
				<ul>
					<li><a href="http://8bc.org">8bit Collective</a></li>
					<li><a href="#">Eget tempor eget nonummy</a></li>
					<li><a href="#">Magna lacus bibendum mauris</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<!-- end sidebar -->
    <div id=""content">
    <?php if ($sf_user->hasFlash('notice')): ?>
          <div class="flash_notice">
            <?php echo $sf_user->getFlash('notice') ?>
          </div>
        <?php endif; ?>

        <?php if ($sf_user->hasFlash('error')): ?>
          <div class="flash_error">
            <?php echo $sf_user->getFlash('error') ?>
          </div>
        <?php endif; ?>
	<?php echo $sf_content ?>
</div>
        <div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
</div>
</div>
<!-- start footer -->
<div id="footer">
	<div id="footer-wrap">
	<p id="legal">(c) 2007 YourSite. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
	</div>
</div>
    
  </body>
</html>
