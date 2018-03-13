<!-- The booking engine on the original Diamond Hotel site is a bit clunky. The reset button doesn't work in a way I would like it to. I will make my own reset button that will allow the user to go back to the beginning of the booking procedure.-->

<!DOCTYPE HTML>

<html lang="en">


<head>

<title>Majestic Rooms</title>


<link rel="stylesheet" href="style.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Noticia+Text" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>




<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


</head>


<body>



<?php require("require/header.php");?>



<h1>Working from the office - 07/03</h1>


<section id="booking-step-checker">

<div class="booking-step-checker-panel">

<div class="booking-step-icon"></div>
<div class="booking-step-icon"></div>
<div class="booking-step-icon"></div>
<div class="booking-step-icon"></div>
<p>Check-in &
Check-out Date</p>
<p>Select
Rooms & Rates</p>
<p>
Guest
Information</p>
<p>Booking
Confirmation</p>


</div>


</section>

<section id="room-list">

<h2>Select room(s)</h2>

<div class="room-option">

<div class="room-option-image">
<img src="images/room1.jpg">
</div>

<div class="room-option-caption">

<h4>Majestic Club</h4>
<p>From £150 per night</p>
</div>

</div>








</section>


<section id="booking-summary">

<h2>Booking summary</h2>

<div class="booking-summary-option">

<div class="booking-summary-toggle">

<p>Date: March 06, 2018 - March 22, 2018</p> <button>X</button>

</div>

<div class="booking-summary-details">

<div><p>Check-in Date</p></div>
<div><p>Mar 06, 2018</p></div>
<div><p>Check-out Date	</p></div>
<div><p>Mar 07, 2018</p></div>
<div><p>Night(s)</p></div>
<div><p>1</p></div>

</div>

</div>

<div class="booking-summary-option">

<div class="booking-summary-toggle">

<p>Date: March 06, 2018 - March 22, 2018</p> <button>X</button>

</div>

<div class="booking-summary-details">

<div><p>Special code (optional)</p></div>
<div><input type="text" name="special-code"></div>


</div>

</div>


<a href="#"><h5 class="booking-tc">Terms and Conditions</h5></a>


</section>

<?php require("require/footer.php");?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>




</html>
