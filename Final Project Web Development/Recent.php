<?php
include "config.php"; //to connect to database

//activates when submit is hit
if (isset($_POST['submit'])) {
  $first_name = $_POST['firstname'];
  $last_name = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $gender = $_POST['gender'];
}

//feeding the database
$sql = "INSERT INTO `users` (`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$first_name', '$last_name', '$email', '$password', '$gender')";

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
  <title>Supernatural Recents Page</title>
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
              Recent News and Updates
            </h2>
            <div id="intro_img1">

            </div>
          </div>
          <hr>
          <div id="news1">
            <h3 class="news_heading">
              Supernatural Spinoff...Finally!!!
            </h3>
            <img id="spinoff" src="spinoff.jpg" alt="Spinoff">
            <p class="news_description">
              Supernatural might have finally found a worthy successor after multiple spinoff attempts.
              After two backdoor pilots failed in the past to get a series order from The CW, Deadline reports The Winchesters is being seen "as the strongest attempt at a Supernatural spinoff to date." The Winchesters and the pilots for Walker: Independence and Gotham Knights are seen as the strongest contenders for pickup by The CW brass. "There is a chance all three go to series. If that happens, there will likely be more cancellations as the CW is targeting a smaller overall number of new and returning series than previous years, and the decision on pilots would impact the decisions on bubble series," continues the report.
              <br><br>
              <a class="source" href="https://www.thebulletintime.com/snews/supernatural-spinoff-the-winchesters-season-one-release-date-cast-storyline/">Source: The Bulletin Time</a>
            </p>
          </div>
          <div id="news2">
            <h3 class="news_heading">
              Jared Padalecki in a Car Crash!
            </h3>
            <img id="spinoff" src="accident.jpg" alt="Spinoff">
            <p class="news_description">
              Jared Padalecki's car crash was about as bad as his costar, Jensen Ackles, made it seem the vehicle he was in went for quite the ride ... eventually bouncing off a solid steel pole.
              The "Supernatural" star was involved in a bad car accident a couple weeks ago in Austin, TX -- something Jensen referenced at a weekend fan event in New Jersey -- which left him injured and unable to attend.
              According to the accident report, obtained by TMZ, Jared was one of four people who were knocked around that night -- this after the Tesla they were all cruising in jumped over a concrete wall on a left turn ... and smashed against a utility pole.
              The report, issued by the Texas Dept. of Transportation, features a description of what happened based on what the responding peace officer observed ... and it says the Tesla was going too fast on the turn, which caused it to hop the retaining wall.<br><br>
              <a class="source" href="https://www.tmz.com/2022/05/03/jared-padalecki-supernatural-car-crash-barrier-smash-pole/">Source: TMZ</a>
            </p>
          </div>
          <div id="news3">
            <h3 class="news_heading">
              Misha Collins Clariefies!
            </h3>
            <img id="spinoff" src="misha.jpg" alt="Spinoff">
            <p class="news_description">
              It was a big weekend for the Supernatural fandom after actor Misha Collins, who played the angel Castiel, appeared to say that he was bisexual at a convention in New Jersey. On April 22nd, 2022, Collins was at the Creation Entertainment Supernatural Convention when he asked the gathered crowd to respond, “by a show of force, how many of you would consider yourselves” to be “introverts,” “extroverts,” and “how many bisexuals.” Then he added, after rounds of cheers and laughter to the third option, “I’m all three.”
              Considering the way this was phrased, it’s not surprising that, as a fan’s video of the moment made the rounds on the Internet, people took this as Collins saying that he was bisexual. That’s, uh, what he said. Only now, days later, the actor is walking it back with a declaration that he is straight, apologizing for any confusion, and explaining that he misspoke. He wrote on Twitter, “My clumsy intention was to wave off actually discussing my sexuality, but I badly fumbled that and understand that was seen as me coming out as bisexual […] This was not my intention so I need to correct the record: I am not bisexual. I happen to be straight, but I am also a fierce ally and the last thing I want to do is falsely co-opt the struggles of the LGBTQIA+ community. I am deeply sorry for the clumsiness of my language.”<br><br>
              <a class="source" href="https://www.themarysue.com/misha-collins-clarifies-that-he-is-not-bisexual-actually/">Source: The Mary Sue</a>
            </p>
          </div>
          <div id="newsletter_section">
            <h3 id="newsletter">
              Sign Up For Our Newsletter to Keep Receiving Updates!
            </h3>
            <form action="" method="post">
              <fieldset>
                <legend>Personal Information: </legend>
                First Name:<br>
                <input type="text" name="firstname"><br>
                Last Name:<br>
                <input type="text" name="lastname"><br>
                Email:<br>
                <input type="email" name="email"><br>
                Password:<br>
                <input type="password" name="password"><br>
                Gender: 
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
                <br><br>
                <input type="submit" name="submit" id="submit" value="submit">
              </fieldset>
              <?php
              //just checking
              if ($result == TRUE) {
                echo "Signed Up For News Letter Successfully";
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              } ?>
            </form>
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