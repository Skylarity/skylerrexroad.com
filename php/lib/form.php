<?php

if(isset($_POST["submit"])) {

	$email = $_POST['email'];

	$message = $_POST['message'];

	$human = intval($_POST['human']);
	$from = "$email";
	$to = 'skyrex1095@gmail.com';
	$subject = "Message from $email via Portfolio";

	$body = "Email: $email" . PHP_EOL . "Message:" . PHP_EOL . "$message" . PHP_EOL;

	//Check if simple anti-bot test is correct
	if($human !== 5) {
		$errHuman = 'Your anti-spam is incorrect';
	}

	// If there are no errors, send the email
	if(!isset($errName) && !isset($errEmail) && !isset($errMessage) && !isset($errHuman)) {
		if(mail($to, $subject, $body, $from)) {
			$result = '<div>Thank You!</div>';
		} else {
			$result = '<div class="text-danger">There was an error sending your message. Please try again later.</div>';
		}
	}
}
?>
<div class="websites-bg animated fadeIn">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="websites-h1">
					Contact me!
				</h1>
			</div>
		</div>
	</div>
</div>
<div class="spacing"></div>
<div class="form">
	<div class="container animated fadeInUp">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<form class="form-horizontal" role="form" method="post"
					  action="<?php echo $PREFIX; ?>contact/index.php">
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>

						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email"
								   placeholder="" value="">
							<?php if(isset($errEmail)) {
								echo "<p class='text-danger'>$errEmail</p>";
							} ?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Message</label>

						<div class="col-sm-10">
							<textarea type="text" rows="5" class="form-control" id="message" name="message"
									  placeholder="" value=""></textarea>
							<?php if(isset($errMessage)) {
								echo "<p class='text-danger'>$errMessage</p>";
							} ?>
						</div>
					</div>
					<div class="form-group">
						<label for="human" class="col-sm-2 control-label">2 + 3 = </label>

						<div class="col-sm-10">
							<input type="text" class="form-control" id="human" name="human" placeholder="">
							<?php if(isset($errHuman)) {
								echo "<p class='text-danger'>$errHuman</p>";
							} ?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn contact-button">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php if(isset($result)) {
								echo $result;
							} ?>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>