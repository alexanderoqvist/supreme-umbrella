<!DOCTYPE html>
<html>

<head>
  <title>Exemplarisk Ränta-på-Ränta kalkylator</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <script type="text/javascript" src="calc.js"></script>

<script language="javascript">

var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

</head>


<style>
body {background-color: #e6e6e8

;}
h1 {
  color: grey;
  font-family: verdana;
  font-size: 200%;
}
p  {
  color: grey;
  font-family: verdana;
  font-size: 80%;
  text-align: left;

}
table {
  border: 0,5px solid white;
  border-collapse: collapse;
  color: black;
  background-color: #dddfd4;
  text-align: center;
  font-family: verdana;
  font-size: 100%;
  border-radius: 4px;
}
th, td, tr {
  border: 0,5px solid white;
  border-collapse: collapse;
  color: black;
  background-color:#b3c2bf;
  text-align: center;
  font-family: verdana;
  font-size: 100%;

}

/* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */  
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #667467;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #729f98;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;



	}



body {
    padding: 30px;
}
input[type=range] {
    /*removes default webkit styles*/
    -webkit-appearance: none;
    
    /*fix for FF unable to apply focus style bug */
    border: 0px;
    
    /*required for proper track sizing in FF*/
    width: 100%;
}
input[type=range]::-webkit-slider-runnable-track {
    width: 100%;
    height: 6px;
    background: #ddd;
    border: none;
    border-radius: 3px;
}
input[type=range]::-webkit-slider-thumb {
    -webkit-appearance: none;
    border: none;
    height: 20px;
    width: 20px;
    border-radius: 50%;
    background: #667467;
    margin-top: -6px;
}
input[type=range]:focus {
    outline: none;
}
input[type=range]:focus::-webkit-slider-runnable-track {
    background: #ccc;
}

input[type=range]::-moz-range-track {
    width: 100%;
    height: 6px;
    background: #667467;
    border: none;
    border-radius: 3px;
}
input[type=range]::-moz-range-thumb {
    border: none;
    height: 20px;
    width: 20px;
    border-radius: 50%;
    background: #667467;
}

/*hide the outline behind the border*/
input[type=range]:-moz-focusring{
    outline: 1px solid white;
    outline-offset: -1px;
}

input[type=range]::-ms-track {
    width: 300px;
    height: 5px;
    
    /*remove bg colour from the track, we'll use ms-fill-lower and ms-fill-upper instead */
    background: transparent;
    
    /*leave room for the larger thumb to overflow with a transparent border */
    border-color: transparent;
    border-width: 6px 0;

    /*remove default tick marks*/
    color: transparent;
}
input[type=range]::-ms-fill-lower {
    background: #777;
    border-radius: 10px;
}
input[type=range]::-ms-fill-upper {
    background: #ddd;
    border-radius: 10px;
}
input[type=range]::-ms-thumb {
    border: none;
    height: 16px;
    width: 16px;
    border-radius: 50%;
    background-color: #667467;
}
input[type=range]:focus::-ms-fill-lower {
    background: #888;
}
input[type=range]:focus::-ms-fill-upper {
    background: #ccc;
}

</style>

<center>
<h1>Ränta på ränta kalkylator</h1>
<h5> Här kan du enkelt räkna ut ränta på ränta på ditt sparade kapital.</h5	><br>
<br>

<?php
$balance = $_GET['balance'];
$years = $_GET['years'];
$rate = $_GET['rate'];
$myRange = $_GET['myRange'];


$cur_year = date('Y');
for ($i=0; $i<=10; $i++) {
}



?>
<center>
<div class="container" style="width: 50%; background-color:#9fa8a3;">
  <form action="kalkylator.php" method="get">

    <label for="$balance">Startvärde - välj hur stort belopp som du vill börja med:</label>
    <input type="text" id="balance" name="balance" placeholder="SEK" style="background-color:#e6e9f0;">

    <label for="$rate">Ränta- välj en genomsnittlig avkastning per år i procent, rimligt är ca 8 % per år:</label>
    <input type="text" id="rate" name="rate" placeholder="%" style="background-color:#e6e9f0;">


    <label for="$years">Tidshorisont - välj antal år som du kan tänka dig spara och låta pengarna vara i fred:</label>
    <input type="text" id="years" name="years" placeholder="År" style="background-color:#e6e9f0;">

    <div class="slidecontainer">

  <input type="range" min="1" max="10000000" value="100000" class="slider" id="Start">
</div>
<br>
<div class="slidecontainer">

  <input type="range" min="1" max="50" value="8" class="slider" id="Ranta">
</div>
<br>

<div class="slidecontainer">

  <input type="range" min="1" max="60" value="10" class="slider" id="tid">
</div>
<br>


    <input type="submit" value="Beräkna">

  </form>
</div>
</center>



<br>
<br>

<table class="table table-striped" style="width:50%" align="center">
<th style="background-color:#9fa8a3">År</th>
<th style="background-color:#9fa8a3">Totalt värde</th>
<?php 

for($i = 0; $i < $years; $i++) {
$balance = $balance * (1+$rate/1*1/100);
echo "<tr><td>";
echo $cur_year++ . ''	;
echo "</td><td>";
echo number_format($balance, 1, ",","."); floor($balance); echo SEK; 
echo "</td></tr>";	


}


?>

</table>
