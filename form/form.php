<?php
// multiple recipients
$to  = 'julia.kerouac@live.com' . ', '; // note the comma
$to .= 'julia.kerouac@gmail.com';
// subject
$subject = 'Ready and Able Tree Services Consulation';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);

$message = '
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Fullscreen Form Interface</title>
		<meta name="description" content="Form for scheduling a consultation with Ready and Able Tree Services" />
		<meta name="keywords" content="tree removal, landscaping, demolition, concrete driveway, tree services" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../img/RxA.ico">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Archivo+Narrow:400,700,400italic" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="form-css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="form-css/demo.css" />
		<link rel="stylesheet" type="text/css" href="form-css/component.css" />
		<link rel="stylesheet" type="text/css" href="form-css/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="form-css/cs-skin-boxes.css" />
		<script src="form-js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">

			<div class="fs-form-wrap" id="fs-form-wrap">
				<div class="fs-title">
					<h1 id="green">Schedule a consultation and tell us how we can serve you!</h1>
					<div class="codrops-top">
						<a class="codrops-icon codrops-icon-prev" href="../index.html"><span>Home</span></a>
						<!-- <a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=19520"><span>Back to the Codrops Article</span></a> -->
						<a class="codrops-icon codrops-icon-info" href="#"><span>We will never share your contact information</span></a>
					</div>
				</div>
				<form action="" medthod="post" id="myform" class="fs-form fs-form-full" autocomplete="off">
					<ol class="fs-fields">
						<li>
							<label class="fs-field-label fs-anim-upper" for="q1">What's your name?</label>
							<input class="fs-anim-lower" id="q1" name="name" type="text" placeholder="Paul Bunyan" required/>
						</li>

						<li>
							<label class="fs-field-label fs-anim-upper" for="q2" data-info="We won't send you spam, we promise">What's your email address?</label>
							<input class="fs-anim-lower" id="q2" name="email" type="email" placeholder="paulbunyan@email.com" required/>
						</li>

						<li>
							<label class="fs-field-label fs-anim-upper" for="q3" data-info="We won't share your number either, we promise">What number should we call?</label>
							<input class="fs-anim-lower" id="q3" name="number" type="tel" placeholder="012-345-6789" required/>
						</li>

						<li>
							<label class="fs-field-label fs-anim-upper" for="q3" data-info="We'll work around your schedule">When's a good time to call you?</label>
							<input class="fs-anim-lower" id="q4" name="time" type="text" placeholder="Weeknights between 6PM and 9PM" required/>
						</li>

						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q5" data-info="Help get the conversation started">What services do you require?</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q5a" name="service" type="radio" value="tree-removal"/><label for="q5a" class="radio-tree-removal">Tree Removal</label></span>
								<span><input id="q5b" name="service" type="radio" value="landscaping"/><label for="q5b" class="radio-landscaping">Landscaping</label></span>
								<span><input id="q5c" name="service" type="radio" value="driveway"/><label for="q5c" class="radio-driveway">Concrete Driveway</label></span>
								<span><input id="q5d" name="service" type="radio" value="roofing"/><label for="q5d" class="radio-roofing">Roofing</label></span>
								<span><input id="q5e" name="service" type="radio" value="demo"/><label for="q5e" class="radio-demo">Demolition</label></span>
							</div>
						</li>

						<li>
							<label class="fs-field-label fs-anim-upper" for="q6">Care to elaborate?</label>
							<textarea class="fs-anim-lower" id="q6" name="details" placeholder="Give us as many details as you'd like"></textarea>
						</li>

						<li>
							<label class="fs-field-label fs-anim-upper" for="q7">What's your budget?</label>
							<input class="fs-mark fs-anim-lower" id="q7" name="budget" type="number" placeholder="1000" step="100" min="100"/>
						</li>
					</ol><!-- /fs-fields -->
					<button class="fs-submit" name="submit" type="submit">Submit</button>
				</form><!-- /fs-form -->
			</div><!-- /fs-form-wrap -->

			<!-- Related demos -->
			<!-- <div class="related">
				<p>If you enjoyed this demo you might also like:</p>
				<a href="http://tympanus.net/Development/MinimalForm/">
					<img src="img/relatedposts/minimalform1-300x162.png" />
					<h3>Minimal Form Interface</h3>
				</a>
				<a href="http://tympanus.net/Development/ButtonComponentMorph/">
					<img src="img/relatedposts/MorphingButtons-300x162.png" />
					<h3>Morphing Buttons Concept</h3>
				</a>
			</div>
		</div> -->
		<!-- /container -->
		<script src="form-js/classie.js"></script>
		<script src="form-js/selectFx.js"></script>
		<script src="form-js/fullscreenForm.js"></script>
		<script>
			(function() {
				var formWrap = document.getElementById( "fs-form-wrap" );

				[].slice.call( document.querySelectorAll( "select.cs-select" ) ).forEach( function(el) {	
					new SelectFx( el, {
						stickyPlaceholder: false,
						onChange: function(val){
							document.querySelector("span.cs-placeholder").style.backgroundColor = val;
						}
					});
				} );

				new FForm( formWrap, {
					onReview : function() {
						classie.add( document.body, "overview" ); // for demo purposes only
					}
				} );
			})();
		</script>
	</body>
</html>
';
?>