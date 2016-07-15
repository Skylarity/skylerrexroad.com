<?php
$CURRENT_DIR = __DIR__;
$PAGE_TITLE = "Skyler Rexroad";
?>
<?php require_once("lib/partials/head-utils.php"); ?>
<div id="landing" class="landing">
	<?php require_once("lib/partials/header.php"); ?>
	<div class="jumbotron">
		<div class="container">
			<h1 class="main-h text-center">Developer, Designer, Musician</h1>
			<p class="text-center">Go on, take a scroll.</p>
		</div>
	</div>
	<div class="container">
		<div class="text-center">
			<a href="#portfolio"><i class="white-text fa fa-5x fa-arrow-circle-o-down"></i></a>
		</div>
	</div>
</div>
<div id="portfolio" class="portfolio">
	<div class="container">
		<h2 class="main-h blue-text">Previous Work</h2>
		<div class="row row-flex">
			<div class="col-md-6">
				<div class="thumbnail">
					<img class="img-responsive" src="lib/images/thumbs/trufork.png" alt="">
					<div class="caption">
						<h3>
							TruFork
						</h3>
						<p>
							A play on Urbanspoon, TruFork looks at the city of Albuquerque's restaurant violation data
							in order to determine what restaurants you may (or may not) want to eat at.
						</p>
						<p>
							I designed and implemented almost the entire user experience and interface as well as
							created the d&aelig;mon
							that scans and stores the city's open restaurant data.
						</p>
					</div>
					<div class="caption-padding">
						<a href="//trufork.com" target="_blank" class="btn btn-primary" role="button"><i
								class="fa fa-lg fa-external-link"></i></a>
						<a href="//github.com/Skylarity/trufork" target="_blank" class="btn btn-default pull-right"
						   role="button"><i class="fa fa-lg fa-github"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="thumbnail">
					<img class="img-responsive" src="lib/images/thumbs/game-idea-generator.png" alt="">
					<div class="caption">
						<h3>
							Game Idea Generator
						</h3>
						<p>
							Generates a main character, setting, game genre, and tone for a video game.
						</p>
					</div>
					<div class="caption-padding">
						<a href="//skylerrexroad.com/~skyler/game-idea-generator/" target="_blank"
						   class="btn btn-primary" role="button"><i
								class="fa fa-lg fa-external-link"></i></a>
						<a href="//github.com/Skylarity/game-idea-generator" target="_blank"
						   class="btn btn-default pull-right"
						   role="button"><i class="fa fa-lg fa-github"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<iframe width="100%" height="450" scrolling="no" frameborder="no"
						src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/8186758&amp;color=508cff&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false"></iframe>
			</div>
		</div>
	</div>
</div>
<div id="contact" class="contact">
	<div class="container">
		<h2 class="main-h sr-only"><span>Contact me</span></h2>
	</div>
	<a href="mailto:skyler.rexroad@gmail.com">
		<div class="ribbon ribbon-right email">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="titillium">
							<i class="fa fa-lg fa-envelope"></i>
							skyler.rexroad@gmail.com
						</div>
					</div>
				</div>
			</div>
		</div>
	</a>
	<a href="//github.com/Skylarity" target="_blank">
		<div class="ribbon ribbon-left github">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-4">
						<div class="pull-right">
							<div class="titillium">
								<i class="fa fa-lg fa-github"></i>
								@Skylarity
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</a>
	<a href="//twitter.com/Skylarity" target="_blank">
		<div class="ribbon ribbon-right twitter">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="titillium">
							<i class="fa fa-lg fa-twitter"></i>
							@Skylarity
						</div>
					</div>
				</div>
			</div>
		</div>
	</a>
</div>
<?php require_once("lib/partials/foot-utils.php"); ?>
