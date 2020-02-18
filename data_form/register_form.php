<!DOCTYPE html>
<html>
<head>
	<title></title>
	<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/register_form.css">
</head>
<body>
	<div class="container">
		<div class="reg_div">
			<form action="" >
					<div class="form-group bg-success text-white text-center heading">
						<p class="heading_text">Registation</p>
					</div>
					<div class="container">
						<div class="form-group was-validated">
							<span for="gmail">Email:</span>
							<input type="email" name="gmail" class="form-control" id="gmail" placeholder="Enter Email" required>
							<div class="valid-feedback" >Valid.</div>
							<div class="invalid-feedback">Please fill out this filed</div>
						</div>
						<div class="form-group was-validated">
							<span for="pass">Password: </span>
							<input type="password" name="pass" class="form-control" id="uname" placeholder="Enter Password" required>
							<div class="valid-feedback" min="8">Valid.</div>
							<div class="invalid-feedback">Please fill out this filed</div>
						</div>
						<div class="form-group">
							<span for="name">Name: </span>
							<input type="text" name="firstname"  class="form-control border-success name" placeholder="Firstname" required>
							<input type="text" name="lastname" class="form-control border-success name2" id="name" placeholder="Lastname" required>
							<!-- <div class="valid-feedback">Valid.</div> -->
							<!-- <div class="invalid-feedback">Please fill out this filed</div> -->
						</div>
						<div class="form-group">
							<span for="name">Gender: </span>
							<input type="radio" name="gender" value="male" checked class="gender"> Male
		  					<input type="radio" name="gender" value="female" class="gender2"> Female<br>
						</div>
						
						<div class="form-group">
							<span>District: </span><br>
							<select class="form-control district border-success" name="district">
								<option>select</option>
							</select>
						</div>
						<div class="form-group">
							<span>Phone: </span><br>
							<input type="text" name="phone" class="form-control district border-success" placeholder="+880">
						</div>
						<div class="form-group">
							<span>Image:</span><br>
							<input type="file" name="img" class="form-control border-success">
							<input type="file" name="img" class="form-control border-success">
							<input type="file" name="img" class="form-control border-success">
						</div>
						<div class="form-group">
							<input type="checkbox" name="checked" checked>
							<span class=" privacy border-success">I agree to the <a href=""> Privacy Policy</a></span>
						</div>
						<div class="form-group bg-success text-center button">
							<a class="text-white" href="create_profile.php">NEXT</a>
						</div>
						<div class="form-group text-center">
							<label class="account">Already a member?</label>
							<a class="log text-success" href="log_in.php">log in</a>
						</div>
					</div>
				</form>
		</div>
	</div>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>