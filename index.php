<?php
//=====================================
// Function Name: getQuote
// Purpose: Returns a randomly-selected quote from an array
//=====================================
function getQuote()
{
  // Array of quotes
  $arrQuotes = array("I've learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel.",
    "If you don't like something, change it. If you can't change it, change your attitude.","Nothing will work unless you do.",
    "There is no greater agony than bearing an untold story inside you.",
    "We delight in the beauty of the butterfly, but rarely admit the changes it has gone through to achieve that beauty.",
    "Love recognizes no barriers. It jumps hurdles, leaps fences, penetrates walls to arrive at its destination full of hope.",
    "My mission in life is not merely to survive, but to thrive; and to do so with some passion, some compassion, some humor, and some style.",
    "When you learn, teach. When you get, give.",
    "Prejudice is a burden that confuses the past, threatens the future and renders the present inaccessible.",
    "Success is liking yourself, liking what you do, and liking how you do it.");

  // Calculate the total number of elements in the array of quotes
  $cntQuotes = count($arrQuotes)-1;

  // Select a random number between 0 and the total number of quotes available
  $numQuote = rand(0,$cntQuotes);

  // Create output string (includes HTML)
  $strQuote = "\"" . '<i>' . $arrQuotes[$numQuote] . "\"". '</i><br><cite>-- Maya Angelou</cite>';

  // Returns result
  return $strQuote;
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>DWA15 | Project 1</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--- Bootstrap 4 CSS --->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!--- Custom Styling --->
  <style>
    body {
      padding:10px 5px;
    }
    .dwa15-img {
      display:block;
      width:200px;
      margin-left:auto;
      margin-right:auto;
      padding:2px;
    }
    hr {
      padding:2px;
      padding-top:0px;
      margin-top:1px;
    }
  </style>
</head>
<body>
  <!--- Main Container --->
  <div class="container-fluid">
    <!--- Project Card --->
    <div class="card text-left">
      <div class="row no-gutters">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
          <!--- Profile Image --->
          <img class="card-img dwa15-img" src="images/me<?php echo rand(1,2); //Selects an integer between 1 and 2 for a dynamic image?>.jpg" alt="Christopher Sheppard">
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
          <!--- Card Body --->
          <div class="card-body">
            <h2 class="cart-title" style="text-decoration: underline;">Christopher Sheppard</h2>
            <p class="card-text">
              Howdy! My name's Chris. I'm 33 and currently living in Dallas, Texas. DWA15 is my first course at Harvard Extension School. I'm a Tools & Automation Program Manager at a telecommunications company and am working towards an MLA degree in Software Engineering.Hobbies include playing piano, sax, drawing, playing video games, watching anime, working out and (trying to) cook.
            </p>
          </div><!--- /Card Body --->
        </div>
      </div>
      <!--- Card Footer --->
      <div class="card-footer text-muted">
        <h5>Random Quote</h5>
        <hr>
        <blockquote class="blockquote mb-2">
          <small>
          <!--- PHP Quote Generator Function --->
          <?php echo getQuote(); ?>
          </small>
        </blockquote>
      </div><!--- /Card Footer --->
    </div><!--- /Project Card --->
  </div><!--- /Main Container --->
</body>
</html>
