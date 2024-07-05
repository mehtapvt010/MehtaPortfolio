<?php
include "config.php";

//activates when submit is hit
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $response1 = $_POST['response1'];
  $response2 = $_POST['response2'];
  $response3 = $_POST['response3'];
}

//feeding the database
$sql = "INSERT INTO `survey` (`name`, `email`, `response1`, `response2`, `response3`) VALUES ('$name', '$email', '$response1', '$response2', '$response3')";

$result = $conn->query($sql);

$conn->close();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,600;1,400&display=swap" rel="stylesheet">
  <title>Supernatural Survey Page</title>
  <link rel="stylesheet" href="css/homepage.css">
</head>

<body>
  <div id="wrapper">
    <div id="logo">
      <a href="index.html">
        <img id="logo_top" src="logo1.jpg" alt="Logo">
      </a>
    </div>
    <div id="wrap">
      <nav>
        <ul id="navigation">
          <li><a href="index.html">Home</a></li>
          <li><a href="Recent.php">Recent</a></li>
          <li><a href="characters.html">Characters</a></li>
          <li><a href="seasons.html">Seasons</a></li>
          <li><a href="fans.html">Fans</a></li>
          <li><a href="about.html">About</a></li>
        </ul>
      </nav>
      <div id="area">
        <main>
          <div id="intro">

            <h2>
              For The Fans: Your Space
            </h2>
            <div id="intro_img_fans">

            </div>
          </div>


          <div id="survey1">
            <h2>
              Survey About The Show
            </h2>
            <h4>
              If Your Answers Match with Dean or Sam's Answers, You Win a Supernatural T-shirt.
            </h4>
            <form id="survey_form" action="survey.php" method="post">

              <label for="name">Name: </label>
              <input type="text" name="name"><br>

              <label for="email">Email: </label>
              <input type="email" name="email">
              <br><br>
              <br>
              <hr>
              Question 1: Who is Your Favorite Character?<br><br>
              <hr>
              <input type="radio" name="response1" value="Dean"> Dean<br>

              <input type="radio" name="response1" value="Sam">Sam<br>

              <input type="radio" name="response1" value="Cas">Cas<br>

              <input type="radio" name="response1" value="Crowley">Crowley<br>
              <hr>
              Question 2: Which was your favorite Antagonist?<br><br>
              <hr>
              <input type="radio" name="response2" value="Lucifer"> Lucifer<br>

              <input type="radio" name="response2" value="Azazel">Azazel<br>

              <input type="radio" name="response2" value="Leviathans">Leviathans<br>
              <input type="radio" name="response2" value="Crowley">Crowley<br>
              <hr>

              Question 3: Which was your favorite saga?<br><br>
              <hr>
              <input type="radio" name="response3" value="Apocalypse"> Apocalypse<br>

              <input type="radio" name="response3" value="Purgatory">Purgatory<br>

              <input type="radio" name="response3" value="Men of Letters">Men of Letters<br>

              <input type="radio" name="response3" value="Battle with God">Battle with God<br>
              <hr>

              <input type="submit" id="submit" value="Submit" name="submit">

              <?php

              if ($result != TRUE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
              } else {
                echo "Thank You $name";
                echo "<br>";

                echo "Your Responses Have Been Recorded.<br><br>
            Comparing your answers with the answers in our Database... ";

                if ($response1 == "Dean" && $response2 == "Crowley" && $response3 == "Apocalypse") {
                  echo "<h2>Congratulation! You Have Won a Supernatural T-Shirt</h2>";
                } elseif ($response1 == "Cas" && $response2 == "Azazel" && $response3 == "Men of Letters") {
                  echo "<h2>Congratulation! You Have Won a Supernatural T-Shirt</h2>";
                } else {
                  echo "<h2>Sorry! Better Luck Next Time</h2>";
                }

                echo "<br><br>";
              }
              ?>

            </form>

            <br><br>
          </div>
        </main>
        <footer>
          <br>Copyright &copy; 2022<br>
          Shivang Mehta<br>
          <a href="mailto:shivang_mehta@student.berkshirecc.edu">shivang_mehta@student.berkshirecc.edu</a><br>
          Last Updated 05/15/2022
        </footer>
      </div>
    </div>
  </div>
</body>

</html>