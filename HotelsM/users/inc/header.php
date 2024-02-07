<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../allboots1/css/bootstrap.css">
	<title>NAgastyCodes</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">PEACETEL</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="rooms.php">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="about.php">About</a>
        </li>
        
      </ul>
      <div class="d-flex" role="search">
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModel">Login	</button>
        <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModel">Register	</button>
      </div>
    </div>
  </div>
</nav>

<div class="modal fade" id="loginModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form>
    		<div class="modal-header">
        	<h5 class="modal-title d-flex align-items-center">
        	<i class="bi bi-person-circle fs-3 me-2">User Login</i>
        	</h5>
        	<button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      		</div>
      		<div class="modal-body">
        	<div class="mb-3">
    			<label class="form-label">Email address</label>
    			<input type="email" class="form-control shadow-none">
  			  </div>
  			<div class="mb-4">
    			<label class="form-label">Password</label>
    			<input type="password" class="form-control shadow-none">
  			</div>
  			<div class="d-flex align-items-center justify-content-between mb-2">
  				<button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
  				<a href="JavaScript: void(0)" class="text-secondary text-decoration-none" >Forgot Password</a>
  			</div>
      		</div>
      		<div class="modal-footer">
        	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        	<button type="button" class="btn btn-primary">Understood</button>
      		</div>
    	</form>
      
    </div>
  </div>
</div>

<div class="modal fade" id="registerModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	
    	<form>
    		<div class="modal-header">
        	<h5 class="modal-title d-flex align-items-center">
        	<i class="bi bi-person-lines-fill fs-3 me-2">User Registration</i>
        	</h5>
        	<button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      		</div>
      		<div class="modal-body">
      			<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">Note: Your details must match with your ID (Aadhaar card, passport, driving license, etc.) that will be required during check-in.
    			</span>
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md-6 ps-0 mb-3">
    					<label class="form-label">Name</label>
    					<input type="text" class="form-control shadow-none">
    				</div>
    				<div class="col-md-6 p-0">
    					<label class="form-label">Email</label>
    					<input type="email" class="form-control shadow-none">
    				</div>
    				<div class="col-md-6 ps-0 mb-3">
    					<label class="form-label">Phone Number</label>
    					<input type="number" class="form-control shadow-none">
    				</div>
    				<div class="col-md-6 p-0">
    					<label class="form-label">Picture</label>
    					<input type="file" class="form-control shadow-none">
    				</div>
    				<div class="col-md-12 p-0">
    					<label class="form-label">Address</label>
    					<textarea class="form-control shadow-none" rows="1"></textarea>
    				</div>
    				<div class="col-md-6 ps-0 mb-3">
    					<label class="form-label">Pin Code</label>
    					<input type="number" class="form-control shadow-none">
    				</div>
    				<div class="col-md-6 p-0">
    					<label class="form-label">Date of Birth</label>
    					<input type="number" class="form-control shadow-none">
    				</div>
    				<div class="col-md-6 ps-0 mb-3">
    					<label class="form-label">Password</label>
    					<input type="passport" class="form-control shadow-none">
    				</div>
    				<div class="col-md-6 p-0">
    					<label class="form-label">Confirm Password</label>
    					<input type="passport" class="form-control shadow-none">
    				</div>
    				<div class="text-center my-1">
    					<button type="submit" class="btn btn-dark shadow-none">Register</button>
    				</div>
    			</div>
    		</div>	
        	
    	</form>
      
    </div>
  </div>
</div>
	
</div>
<script type="text/javascript" src="../allboots1/js/bootstrap.js"></script>
</body>
</html>