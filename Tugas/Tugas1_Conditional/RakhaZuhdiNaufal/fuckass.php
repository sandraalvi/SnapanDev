<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function showMeScores() {
            document.getElementById('showme_input').value = '1';
            document.forms[0].submit();
        }
    </script>
</head>
<body>
    <form action="" method="POST">
        <h1>Submit Score</h1>
        <input type="text" name="score" placeholder="Enter your score">
        <button type="submit">Submit</button>
        <button type="button" name="showme" onclick="showMeScores()">Show Me</button>
        <input type="hidden" id="showme_input" name="showme" value="">
    </form>

    <?php
    function getGrade($score) {
        if ($score <= 100 && $score >= 90) {
            return "A";
        } elseif ($score < 90 && $score >= 80) {
            return "B";
        } elseif ($score < 80 && $score >= 70) {
            return "C";
        } elseif ($score < 70 && $score >= 60) {
            return "D";
        } elseif ($score < 60 && $score >= 0) {
            return "E";
        } else {
            return false;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["showme"]) && $_POST["showme"] == "1") {
            $scores = [95, 85, 73, 62, 50, -1, 102];
            echo "<h2>Scores and Grades:</h2><ul>";
            foreach ($scores as $score) {
                $grade = getGrade($score);
                if ($grade !== false) {
                    echo "<li>Score: $score, Grade: $grade</li>";
                } else {
                    echo "<li>Score: $score is invalid (must be between 0 and 100)</li>";
                }
            }
            echo "</ul>";
        } elseif (isset($_POST["score"])) {
            $score = $_POST["score"];
            $grade = getGrade($score);
            if ($grade !== false) {
                echo "<h2>Your score is $score and your grade is $grade</h2>";
            } else {
                echo "<h2>Please enter a valid score!!</h2>";
            }
        }
    }
    ?>
</body>
</html>