<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Add Places</title>
</head>

<body>
	<style>
		body{
			background: url(images/slider.jpg);
		}
		section{
			width: 1000px;
			height: 650px;
			background: white;
		}
.get-in-touch {
  max-width: 800px;
  margin: 50px auto;
  position: relative;

}
.get-in-touch .title {
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 3.2em;
  line-height: 48px;
  padding-bottom: 48px;
     color: #ff3a6d;
    background: #ff3a6d;
    background: -moz-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: -webkit-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: linear-gradient(to right,#f4524d  0%,#5543ca  100%) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
}

.contact-form .form-field {
  position: relative;
  margin: 32px 0;
}
.contact-form .input-text {
  display: block;
  width: 100%;
  height: 36px;
  border-width: 0 0 2px 0;
  border-color: #ff3a6d;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
}
.contact-form .input-text:focus {
  outline: none;
}
.contact-form .input-text:focus + .label,
.contact-form .input-text.not-empty + .label {
  -webkit-transform: translateY(-24px);
          transform: translateY(-24px);
}
.contact-form .label {
  position: absolute;
  left: 20px;
  bottom: 11px;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
  color: #ff3a6d;
  cursor: text;
  transition: -webkit-transform .2s ease-in-out;
  transition: transform .2s ease-in-out;
  transition: transform .2s ease-in-out, 
  -webkit-transform .2s ease-in-out;
}
.contact-form .submit-btn {
  display: inline-block;
  background-color: #000;
   background-image: linear-gradient(125deg,#a72879,#064497);
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 16px;
  padding: 8px 16px;
  border: none;
  width:200px;
  cursor: pointer;
}


	</style>
	<section class="get-in-touch">
   <br></bfr><h1 class="title">ADD A PLACE</h1>
   <form method="post" action="addplacesprocess.php" class="contact-form row">
      <div class="form-field col-lg-6">
         <input id="name" class="input-text js-input" name="name" type="text">
         <label class="label" for="name">Name</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="category" class="input-text js-input" name="category" type="text">
         <label class="label" for="category">Category</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="review" class="input-text js-input" name="review" type="text">
         <label class="label" for="review">Review</label>
      </div>
       <div class="form-field col-lg-6 ">
         <input id="cost" class="input-text js-input" name="cost" type="number">
         <label class="label" for="cost">Cost</label>
      </div>
	          <div class="form-field col-lg-6 ">
         <input id="address" class="input-text js-input" name="address" type="text">
         <label class="label" for="address">Address</label>
      </div>
	          <div class="form-field col-lg-6 ">
         <input id="phone" class="input-text js-input" name="phone" type="tel">
         <label class="label" for="phone">Contact Number</label>
      </div>
	          <div class="form-field col-lg-6 ">
         <input id="website" class="input-text js-input" name="website" type="text">
         <label class="label" for="website">Website</label>
      </div>
	          <div class="form-field col-lg-6 ">
         <input id="status" class="input-text js-input" name="status" type="text">
         <label class="label" for="status">Status</label>
      </div>
<!--
      <div class="form-field col-lg-12">
         <input id="message" class="input-text js-input" type="text" required>
         <label class="label" for="message">Message</label>
      </div>
-->
      <div class="form-field col-lg-8 col-lg-offset-2">
         <input class="submit-btn" type="submit" name="back" value="Take Me Home">
      </div>
	   <div class="form-field col-lg-3">
         <input class="submit-btn" type="submit" name="submit" value="Submit">
      </div>
<!--	   <center><a href="index.php" class="btn btn-large btn-danger"><i class="icon-home icon-white"></i> Take Me Home</a></center>-->
   </form>
</section>

</body>
</html>