<?php
$CURRENT_DIR = __DIR__;
$PAGE_TITLE = "Skyler Rexroad";
?>
<?php require_once("lib/partials/head-utils.php"); ?>
<div id="landing" class="landing">
	<?php require_once("lib/partials/header.php"); ?>
	<div class="container">
		<h2 class="main-h">Landing</h2>
	</div>
</div>
<div id="portfolio" class="portfolio">
	<div class="container">
		<h2 class="main-h blue-text">Previous Work</h2>
		<div class="row">
			<div class="col-md-6">
				<div class="thumbnail">
					<img src="lib/images/thumbs/trufork.png" alt="">
					<div class="caption">
						<h3>
							TruFork
						</h3>
						<p>
							description
						</p>
						<p>
							<a href="//trufork.com" target="_blank" class="btn btn-primary" role="button"><i
									class="fa fa-lg fa-external-link"></i></a>
							<a href="//github.com/Skylarity/trufork" target="_blank" class="btn btn-default pull-right"
							   role="button"><i class="fa fa-lg fa-github"></i></a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="thumbnail">
					<img src="//placehold.it/1600x888" alt="">
					<div class="caption">
						<h3>
							title
						</h3>
						<p>
							description
						</p>
						<p>
							<a href="#" target="_blank" class="btn btn-primary" role="button"><i
									class="fa fa-lg fa-external-link"></i></a>
							<a href="//github.com/Skylarity" target="_blank" class="btn btn-default pull-right"
							   role="button"><i class="fa fa-lg fa-github"></i></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="contact" class="contact">
	<div class="container">
		<h2 class="main-h sr-only"><span>Contact me</span></h2>
	</div>
	<a href="mailto:skyler@skylerrexroad.com">
		<div class="ribbon ribbon-right email">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="titillium">
							<i class="fa fa-envelope"></i>
							skyler@skylerrexroad.com
						</div>
					</div>
				</div>
			</div>
		</div>
	</a>
	<a href="//twitter.com/Skylarity" target="_blank">
		<div class="ribbon ribbon-left twitter">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-4">
						<div class="pull-right">
							<div class="titillium">
								<i class="fa fa-twitter"></i>
								@Skylarity
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</a>
	<a href="//github.com/Skylarity" target="_blank">
		<div class="ribbon ribbon-right github">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="titillium">
							<i class="fa fa-github"></i>
							@Skylarity
						</div>
					</div>
				</div>
			</div>
		</div>
	</a>
</div>
<?php require_once("lib/partials/foot-utils.php"); ?>
