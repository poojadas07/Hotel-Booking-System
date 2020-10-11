<!DOCTYPE html>
<html>
<head>
	<title>SignIn</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="google-signin-client_id" content="483824520391-b4n29pl5tmd2eg6v4mc3gc8e3vu8ijtd.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
    
    <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-sm-6 left">
				<h1>Welcome Back</h1>
				<h3>Sign In <br> to Continue Access</h3>
			</div>
			<div class="col-sm-6 right ">
				<h1 class="pb-3 pt-5 pl-5 pr-5">Sign In</h1>

				<div class="row pl-5 pr-5">
				    <div class="col-12">
				      <div class="md-form mt-0">
				      	<input type="text" id="form1" class="form-control" width="50%">
						<label for="form1">Username / Email</label>
				      </div>
				    </div>
				    <div class="col-12">
				      <div class="md-form mt-0">
				        <input type="text" id="form1" class="form-control">
						<label for="form1">Password</label>
				      </div>
				    </div>
				</div>
				<div class="row ml-4 mr-4">
					<a class="btn btn-primary btn-lg active btn-block" role="button" aria-pressed="true">Continue <b class="pl-2"> &gt; &gt;</b></a>
				</div>
				<br>
				<p style="text-align: center;">or Connect with Social Media</p>

				<div class="row ml-5 mr-4">
					<div id="my-signin2"></div>

					
					
				</div>

			</div>
		</div>
	</div>


	<script>
	    function onSuccess(googleUser) {
	      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
	    }
	    function onFailure(error) {
	      console.log(error);
	    }
	    function renderButton() {
	      gapi.signin2.render('my-signin2', {
	        'scope': 'profile email',
	        'width': 420,
	        'height': 40,
	        'longtitle': true,
	        'theme': 'dark',
	        'onsuccess': onSuccess,
	        'onfailure': onFailure
	      });
	    }
	  </script>


	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


</body>
</html>