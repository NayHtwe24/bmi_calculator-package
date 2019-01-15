<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BMI Calculator</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
		<div class="container" style="margin-top: 20px;">
		  <div class="row">
		    <div class="col-md-12 card">
		     	<h4 class="display-4 text-center">BMI Calculator</h4>
		     	<form>
					  <div class="form-group">
					    <label for="height">Height(cm)</label>
					    <input type="text"  class="form-control" id="height" aria-describedby="Height" placeholder="Enter Height">
					    <small>1cm = 0.0328084</small>
					  </div>
					  <div class="form-group">
					    <label for="weight">Weight(kg)</label>
					    <input type="text"  class="form-control" id="weight" placeholder="Enter Weight">
					    <small>1kg = 2.20462</small>
					  </div>
					  <button type="submit" class="btn btn-primary text-center" value="calculate">Calculate</button>
				</form>
				<div class="output">
					<h2 class="title"</h2>
				</div>
		    </div>
		  </div>
		</div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script>

	$(document).ready(function(){
	var form = $("form");

	form.on("submit", function(e){
		e.preventDefault();
		var resultDiv = $(".output .title");

		//height and weight




		function toFeet(){
			n = $("#height").val();
		    var realFeet = ((n*0.393700) / 12);
		    var feet = Math.floor(realFeet);
		    var inches = Math.round((realFeet - feet) * 12);
		    return feet + "'" + inches;
		  }
		 function toLbs(){
		 	n = $("#weight").val();
		    let nearExact = n/0.45359237;
		    let lbs = Math.floor(nearExact);
		    return lbs;
		  }
		 function calcBMI(){
			var weight = toLbs();
	    	var height = $("#height").val();
	    	var data_height = toFeet();
			var bmi = (weight / (height * height))*10000;
			return bmi.toFixed(2);
		}

		function bmiState(){
			if(calcBMI() < 16.9 ){
				return "Very underweight";
			}
			if(calcBMI() > 17 && calcBMI() < 18.4 ){
				return "Under weight";
			}
			if(calcBMI() > 18.5 && calcBMI() < 24.9 ){
				return "Normal weight";
			}
			if(calcBMI() > 25 && calcBMI() < 29.9 ){
				return "Overweight";
			}
			if(calcBMI() > 30 && calcBMI() < 34.9 ){
				return "Overweight class 1";
			}
			if(calcBMI() > 35 && calcBMI() < 40 ){
				return "Overweight class 2";
			}
			if(calcBMI() > 40){
				return "Overweight class 3";
			}
		}

		resultDiv.html("<div class='text-center'>"+"Your Height is "+toFeet()+"<br>"+"Your Weight is "+toLbs()+"<br>"+"BMI is "+calcBMI()+"<br>" + "Your Body Status is" + "<span>&nbsp;</span>" +bmiState());
	});
});
	</script>

</html>