<?php
    session_start();
?>

<html>
    <head>

		<title>Millionaire</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" media="all" href="style.css"/>

    </head>

    <body>

        <img src="milion.svg" width="300px;" style="margin-top: 40px; margin-bottom: 30px;"  >
        <?php
        
        if($_SESSION["question"]===1)
        {
            echo "<div class='stage'>Stage 1</div>";
            echo '<br />';
            $random = rand(1,3);
              
                if($random === 1)
                        {
                        echo '<div id="question"><h2>In the Harry Potter series, what is Dumbledore\'s full name?</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Albus Percival Wulfric Brian Dumbledore</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Albus Percivus Reginald Malta Dumbledore</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Albus Merlin Phillip Verick Dumbledore</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Albus Gerald Gillfrey Gast Dumbledore</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2)
                        {
                        echo '<div id="question"><h2>What does www stand for in website addresses?</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. World Wide Web</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Website Will Work</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. We Want Wifi</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Would We Web</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3)
                        {
                            echo '<div id="question"><h2>What car manufacturer’s logo features four interlocking rings? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Audi</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. BMW</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Buick</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Ford</td>';
                                echo '</tr>';
                        echo '</table>';
                        }                                                                      
        }
        else if($_SESSION["question"]===2)
        {
            echo "<div class='stage'>Stage 2</div>";
            echo '<br />';
            $random = rand(1,3);
              
            if($random === 1)
            {
                        echo '<div id="question"><h2>Which of the following races is not included in the Triple Crown of horse racing? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Kentucky Derby</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Belmont Stakes</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Charleston Races</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Preakness Stakes</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2)
                        {
                        echo '<div id="question"><h2>Which of these is not a type of apple?</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Bonnie Best</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Doctor Matthews</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Sweet Rachel</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Granny Smith</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3)
                        {
                            echo '<div id="question"><h2>Which of these is not a type of mustache? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Handlebar</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Pencil</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Banana</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Toothbrush</td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }
        else if($_SESSION["question"]===3)
        {
            echo "<div class='stage'>Stage 3</div>";
            echo '<br />';
            $random = rand(1,3);
              
            if($random === 1)
            {
                        echo '<div id="question"><h2>Which fruit does not have a pit?</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Mango</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Pear</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Peach</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Fig</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2)
                        {
                        echo '<div id="question"><h2>What domestic animal is sometimes preferred as a service animal for the blind because it lives much longer than a dog? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Cat</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Horse</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Turtle</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Hamster</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3)
                        {
                            echo '<div id="question"><h2>What is lava called when it is still underground?</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Molten Rock</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Magma</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Lava</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Hot Rocks</td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }
        else if($_SESSION["question"]===4)
        {
            echo "<div class='stage'>Stage 4</div>";
            echo '<br />';
            $random = rand(1,3);
              
            if($random === 1){
                        echo '<div id="question"><h2>What sports equipment is designed to fall over if it tilts over 7 ½ degrees? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Soccer Nets</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Baseball Bat</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Wicket</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Bowling Pin</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2)
                        {
                        echo '<div id="question"><h2>Which movie does not involve a treasure map? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Goonies</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. National Treasure</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Romancing the Stone</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. The Lord of the Rings</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3)
                        {
                            echo '<div id="question"><h2>The mathematical sequence 1, 1, 2, 3, 5, 8,… is famously known as? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Da Vinci\'s Sequence</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Taylor Series</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Avogadro\'s Series</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Fibonacci Sequence</td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }
        else if($_SESSION["question"]===5)
        {
            echo "<div class='stage'>Stage 5</div>";
            echo '<br />';
            $random = rand(1,3);
              
            if($random === 1){
                        echo '<div id="question"><h2>What is the only metal that is liquid at room temperature?</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Mercury</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Bismuth</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Lead</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Silver</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2)
                        {
                        echo '<div id="question"><h2>Which country has the longest lasting constitutional document? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. United States</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. England</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. France</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Egypt</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3)
                        {
                            echo '<div id="question"><h2>What fraction can be used to represent pi? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. 22/7</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. 5/4</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. 33/11</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. 25/3</td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }
        else if($_SESSION["question"]===6)
        {
            echo "<div class='stage'>Stage 6</div>";
            echo '<br />';
            $random = rand(1,3);
              
            if($random === 1)
            {
                        echo '<div id="question"><h2>What 2004 movie character loves Tater Tots?</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Peter La Fleur</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Cady Heron</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Napoleon Dynamite</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Dash Incredible</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2)
                        {
                        echo '<div id="question"><h2>Which of the following actors has not played the role of Batman?</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Ben Affleck</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Christian Bale</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Tom Cruise</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Adam West</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3)
                        {
                            echo '<div id="question"><h2>Which of the following U.S. states has no counties? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Florida</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Hawaii</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Louisiana</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Rhode Island</td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }
        else if($_SESSION["question"]===7)
        {
            echo "<div class='stage'>Stage 7</div>";
            echo '<br />';
            $random = rand(1,3);
              
            if($random === 1)
            {
                        echo '<div id="question"><h2>In what U. S. city was the original CSI tv show set? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. New York</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Las Vegas</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Los Angeles</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Chicago</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2)
                        {
                        echo '<div id="question"><h2>Which snake is not poisonous? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Coral Snake</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. King Snake</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Cottonmouth</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Rattlesnake</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3)
                        {
                            echo '<div id="question"><h2>What was Pope Benedict XVI doing during his 2009 Alpine holiday when he slipped and broke his wrist? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Skiing</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Taking a Bath</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Climbing a Ladder</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Shaking Hands</td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }
        else if($_SESSION["question"]===8)
        {
            echo "<div class='stage'>Stage 8</div>";
            echo '<br />';
            $random = rand(1,3);
              
            if($random === 1)
            {
                        echo '<div id="question"><h2>What did a 1923 Illinois law declare as the official state language? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. French</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. English</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Spanish</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. American</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2)
                        {
                        echo '<div id="question"><h2>How much more powerful is the sense of smell than the sense of taste? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. 10</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. 1,000</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. 100</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. 10,000</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3)
                        {
                            echo '<div id="question"><h2>What present-day chain was the first self-service grocery store in the United States? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Kroger</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Winn-Dixie</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Ralph\'s</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Piggly Wiggly</td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }
        else if($_SESSION["question"]===9)
        {
            echo "<div class='stage'>Stage 9</div>";
            echo '<br />';
            $random = rand(1,3);
              
            if($random === 1){
                        echo '<div id="question"><h2>Which of the following is not a U.S. state capital?</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Santa Fe</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Boston</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Lansing</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Richmond</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2)
                        {
                        echo '<div id="question"><h2>Which English university is older than the Aztec Empire? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. University of Oxford</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. University of Manchester</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. University of Edinburgh</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. University of London</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3)
                        {
                            echo '<div id="question"><h2>Which of the following is not an aspect of the Boy Scout Law?</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Honest</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Courteous</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Clean</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Reverent</td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }
        else if($_SESSION["question"]===10)
        {
            echo "<div class='stage'>Stage 10</div>";
            echo '<br />';
            $random = rand(1,3);
              
            if($random === 1)
            {
                        echo '<div id="question"><h2>Who holds the NHL record for most career goals?</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Eddie Shore</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Bobbie Orr</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Wayne Gretzky</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Jaromir Jagr</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2)
                        {
                        echo '<div id="question"><h2>Which of the following is not a German state?</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Bavaria</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Berlin</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Bezkirk</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Bremen</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3)
                        {
                            echo '<div id="question"><h2>How many letters are in the Hawaiian alphabet? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. 17</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. 26</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. 12</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. 28</td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }
        else if($_SESSION["question"]===11)
        {
            echo "<div class='stage'>Stage 11</div>";
            echo '<br />';
            $random = rand(1,3);
              
            if($random === 1)
            {
                        echo '<div id="question"><h2>Which of these animals is not a ruminant?</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Camel</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Horse</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Deer</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Sheep</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2)
                        {
                        echo '<div id="question"><h2>How many miles is it to the center of the Earth from the equator?</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. 3,000</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. 4,000</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. 5,000</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. 6,000</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3)
                        {
                            echo '<div id="question"><h2>What is the July birthstone? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Sapphire</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Ruby</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Diamond</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Peridot</td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }
        else if($_SESSION["question"]===12)
        {
            echo "<div class='stage'>Stage 12</div>";
            echo '<br />';
            $random = rand(1,3);
              
            if($random === 1){
                        echo '<div id="question"><h2>In what state is the Grand Teton National Park? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Montana</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Nevada</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Utah</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Wyoming</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2)
                        {
                        echo '<div id="question"><h2>Which country was not part of the former Yugoslavia? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Croatia</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Macedonia</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Slovenia</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Slovakia</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3)
                        {
                            echo '<div id="question"><h2>What Southwestern bird is one of the only animals known to hunt and eat rattlesnakes</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Osprey</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Thrasher</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Buzzard</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Roadrunner</td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }
        else if($_SESSION["question"]===13)
        {
            echo "<div class='stage'>Stage 13</div>";
            echo '<br />';
            $random = rand(1,3);
              
            if($random === 1)
            {
                        echo '<div id="question"><h2>Which state does not have a lottery? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Nevada</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Ohio</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Texas</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Vermont</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2)
                        {
                        echo '<div id="question"><h2>Which of the following artists never had a number one hit?</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Bruce Springsteen</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Elton John</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Whitney Houston</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Michael Jackson</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3)
                        {
                            echo '<div id="question"><h2>What was the fourteenth state to join the United States? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Vermont</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Kentucky</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Florida</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. West Virginia</td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }
        else if($_SESSION["question"]===14)
        {
            echo "<div class='stage'>Stage 14</div>";
            echo '<br />';
            $random = rand(1,3);
              
            if($random === 1)
            {
                        echo '<div id="question"><h2>Which president was well known as being cold and aloof? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Andrew Jackson</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Teddy Roosevelt</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Benjamin Harrison</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Abraham Lincoln</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2)
                        {
                        echo '<div id="question"><h2>Who did not play at Woodstock in 1969? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Janis Joplin</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Sha Na Na</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. The Doors</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Sly and the Family Stone</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3)
                        {
                            echo '<div id="question"><h2>Which land was not colonized by the French? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Niger</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Senegal</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Angola</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Tunisia</td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }
        else if($_SESSION["question"]===15)
        {
            echo "<div class='stage'>Stage 15</div>";
            echo '<br />';
            $random = rand(1,3);
             
            if($random === 1)
            {
                        echo '<div id="question"><h2>What kind of scientist would study Pele’s tears? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Astronomer</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Volcanologist</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Geologist</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Biologist</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2)
                        {
                        echo '<div id="question"><h2>Which state has the deepest lake in the United States? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Michigan</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Oregon</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Louisiana</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Utah</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3)
                        {
                            echo '<div id="question"><h2>What color is the Y in the eBay logo? </h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Red</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Green</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Yellow</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Blue</td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }                
             
        echo "Current bank:  $" . $_SESSION["bank"] . "<br>";
        ?>


        <p><input id="submit" type="submit" value="Final Answer" name="submit" /></p>

		
        </form>


    


    </body>
</html>
