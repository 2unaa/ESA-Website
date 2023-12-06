
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESAQuiz</title>
    <link rel="stylesheet" type="text/css" href="../css/quiz.css?v=<?php echo time(); ?>">
</head>
<body>

    <?php 
        $max ="dog";
        $display = "none";
        $submitted = "false";
    ?>
    
    <div id="navigation">
      
        <img src="../assets/ESA logo.png" alt="ESA Logo">
        <a href="../index.html">Homepage</a>
        <a href="infopage.html">InfoPage</a>
        <a href="map.html">Map</a>
        

    </div>



    <div id="quiz-title">
        What animal do you need?
    </div>

    <form id="#quiz-form" method="" action="" onsubmit="return alertNotDone()">

        <div id="question1" class="quiz-container">
            
            <div class="questions-container">
                <p class="question">How often are you home?</p>
                <div class="question-img">
                    <img src="../assets/quizAssets/house.jpeg" alt="q1 picture" height="150px" width="300px">
                </div>            
            </div>
            
            <div class="answers-container">
                <input type="radio" name="answer1" value="answer1">Not often</br>
                <input type="radio" name="answer1" value="answer2">Somewhat often</br>
                <input type="radio" name="answer1" value="answer3">Very often</br>
                <input type="radio" name="answer1" value="answer4">All the time!</br>
            </div>

            
        </div>

        <div id="question2" class="quiz-container">
            
            <div class="questions-container">
                <p class="question">Are you very energetic?</p>
                <div class="question-img">
                    <img src="../assets/quizAssets/energy.jpg" alt="q2 picture" height="150px" width="300px">
                </div> 
            </div>
            
            <div class="answers-container">
                <input type="radio" name="answer2" value="answer1">No energy</br>
                <input type="radio" name="answer2" value="answer2">Low energy</br>
                <input type="radio" name="answer2" value="answer3">Decent energy</br>
                <input type="radio" name="answer2" value="answer4">High energy</br>
            </div>
            
        </div>

        <div id="question3" class="quiz-container">
            
            <div class="questions-container">
                <p class="question">What is your favorite dessert?</p>
                <div class="question-img">
                    <img src="../assets/quizAssets/desserts.jpg" alt="q3 picture" height="150px" width="300px">
                </div> 
            </div>
            
            <div class="answers-container">
                <input type="radio" name="answer3" value="answer1">Ice Cream Cake</br>
                <input type="radio" name="answer3" value="answer2">Cookies</br>
                <input type="radio" name="answer3" value="answer3">Carrot Cake</br>
                <input type="radio" name="answer3" value="answer4">Tiramisu</br>
            </div>
            
        </div>

        <div id="question4" class="quiz-container">
            
            <div class="questions-container">
                <p class="question">What would your friends describe you as?</p>
                <div class="question-img">
                    <img src="../assets/quizAssets/friends.jpg" alt="q4 picture" height="150px" width="300px">
                </div> 
            </div>
            
            <div class="answers-container">
                <input type="radio" name="answer4" value="answer1">Loyal</br>
                <input type="radio" name="answer4" value="answer2">Ambitious</br>
                <input type="radio" name="answer4" value="answer3">Smart</br>
                <input type="radio" name="answer4" value="answer4">Protective</br>
            </div>
            
        </div>

        <div id="question5" class="quiz-container">
            
            <div class="questions-container">
                <p class="question">If you could have a superpower, what would it be?</p>
                <div class="question-img">
                    <img src="../assets/quizAssets/powers.png" alt="q5 picture" height="150px" width="300px">
                </div> 
            </div>
            
            <div class="answers-container">
                <input type="radio" name="answer5" value="answer1">Super strength</br>
                <input type="radio" name="answer5" value="answer2">Invisibility</br>
                <input type="radio" name="answer5" value="answer3">Flying</br>
                <input type="radio" name="answer5" value="answer4">Super jumps</br>
            </div>
            
        </div>

        <div id="question6" class="quiz-container">
            
            <div class="questions-container">
                <p class="question">What is your favorite color palette?</p>
                <div class="question-img">
                    <img src="../assets/quizAssets/colors.png" alt="q6 picture" height="150px" width="300px">
                </div> 
            </div>
            
            <div class="answers-container">
                <input type="radio" name="answer6" value="answer1">Yellow</br>
                <input type="radio" name="answer6" value="answer2">Blue</br>
                <input type="radio" name="answer6" value="answer3">Red</br>
                <input type="radio" name="answer6" value="answer4">Green</br>
            </div>
            
        </div>

        <div id="question7" class="quiz-container">
            
            <div class="questions-container">
                <p class="question">Pick a relaxation spot</p>
                <div class="question-img">
                    <img src="../assets/quizAssets/relax.jpg" alt="q7 picture" height="150px" width="300px">
                </div> 
            </div>
            
            <div class="answers-container">
                <input type="radio" name="answer7" value="answer1">The woods</br>
                <input type="radio" name="answer7" value="answer2">Home</br>
                <input type="radio" name="answer7" value="answer3">The beach</br>
                <input type="radio" name="answer7" value="answer4">A grassy field</br>
            </div>
            
        </div>

        <div id="question8" class="quiz-container">
            
            <div class="questions-container">
                <p class="question">Are you an extrovert, introvert, ambivert, or neither?</p>
                <div class="question-img">
                    <img src="../assets/quizAssets/vert.jpg" alt="q8 picture" height="150px" width="300px">
                </div> 
            </div>
            
            <div class="answers-container">
                <input type="radio" name="answer8" value="answer1">Extrovert</br>
                <input type="radio" name="answer8" value="answer2">Introvert</br>
                <input type="radio" name="answer8" value="answer3">Ambivert</br>
                <input type="radio" name="answer8" value="answer4">Neither</br>
            </div>
            
        </div>

        <div id="question9" class="quiz-container">
            
            <div class="questions-container">
                <p class="question">What kind of music you listen to?</p>
                <div class="question-img">
                    <img src="../assets/quizAssets/music.jpg" alt="q9 picture" height="150px" width="300px">
                </div> 
            </div>
            
            <div class="answers-container">
                <input type="radio" name="answer9" value="answer1">Hip-Hop</br>
                <input type="radio" name="answer9" value="answer2">Pop</br>
                <input type="radio" name="answer9" value="answer3">Lofi</br>
                <input type="radio" name="answer9" value="answer4">Rock</br>
            </div>
            
        </div>

        <div id="question10" class="quiz-container">
            
            <div class="questions-container">
                <p class="question">How silly are you???</p>
                <div class="question-img">
                    <img src="../assets/quizAssets/sillycat.jpg" alt="q10 picture" height="150px" width="300px">
                </div>
            </div>
            
            <div class="answers-container">
                <input type="radio" name="answer10" value="answer1">Not silly :/</br>
                <input type="radio" name="answer10" value="answer2">Kinda silly</br>
                <input type="radio" name="answer10" value="answer3">Fairly silly :P</br>
                <input type="radio" name="answer10" value="answer4">The super silliest :3</br>
            </div>
            
        </div>

        
        
        <button id="submit" type="submit">Submit</button>

    </form>

    <?php

        require_once("../config.php");
        
        if(isset($_GET['answer10'])){

            $submitted = "true";

            $TableName = "point_values";
    
            $points = array("dog"=>0,"cat"=>0,"parrot"=>0,"rabbit"=>0,"gp"=>0);
    
            $sql = "SELECT * FROM $TableName";
            $result = $pdo->query($sql);
            while ($row = $result->fetch()) {
                
                $choice = $row[$_GET["answer".$row['questionID']]];
                $points[$choice] +=1;

            }
    
            $max = "dog";
            foreach ($points as $key => $value) {
                if($value > $points[$max]){
                    $max = $key;
                }
            }
            $display = "block";    
        }

        $pdo = null;
    
    
    
    ?>

    <div id='winner-container' style='display:<?=$display?>; width:60%; margin:auto; text-align:center; font-size:3em'>
        <div id='winner-words'style='padding: 20px'>The animal for you is....</div>
        <img id='winner-image' style='padding: 20px' src='../assets/quizAssets/winners/<?=$max?>.jpg' height='300px' width='300px'>
    </div>

   <div id='cute-pictures'>
        <img src='../assets/quizAssets/catanddog.jpg' alt='dog cat picture' height='200px' width='200px'>
        <img src='../assets/quizAssets/rabbitandguinea.jpg' alt='dog cat picture' height='200px' width='200px'>
        <img src='../assets/quizAssets/parrot.jpg' alt='dog cat picture' height='200px' width='200px'>
    </div>




    <script src="../javascript/quiz.js?v=<?php echo time(); ?>"></script>
    
</body>

</html>
