<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Page</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Name</label>
        <br>
        <input type="text" name="name" id="name">
        <br><br>

        <label for="email">Your Email</label>
        <br>
        <input type="email" name="email" id="email">
        <br><br>

        <label for="company">Your Company's Name - If Applicable</label>
        <br>
        <input type="text" name="company" id="company">
        <br><br>

        <label for="business">Your Business Name - If You Own It</label>
        <br>
        <input type="text" name="business" id="business">
        <br><br>

        <label for="team_members">How many team members does your company have?</label>
        <br>
        <select name="team_members" id="team_members">
            <option value="Just Me">Just Me</option>
            <option value="1-10">1-10</option>
            <option value="11-50">11-50</option>
            <option value="51-100">51-100</option>
            <option value="101+">101+</option>
        </select>
        <br><br>

        <label for="challenges">What area does your company face the most challenges in?</label>
        <br>
        <select name="challenges" id="challenges">
            <option value="Awareness">Awareness</option>
            <option value="Funding">Funding</option>
            <option value="Growth">Growth</option>
            <option value="Hiring">Hiring</option>
            <option value="Sales">Sales</option>
        </select>
        <br><br>

        <label for="linkedin">Rate your LinkedIn with a bad road in your location?</label>
        <br>
        <input type="text" name="linkedin" id="linkedin">
        <br><br>

        <label for="more_info">Tell us more about your business/company - Just 1 line</label>
        <br>
        <input type="text" name="more_info" id="more_info">
        <br><br>

        <label for="question">If you could have only one question answered during this event, what would it be?</label>
        <br>
        <input type="text" name="question" id="question">
        <br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $company = htmlspecialchars($_POST['company']);
        $business = htmlspecialchars($_POST['business']);
        $team_members = htmlspecialchars($_POST['team_members']);
        $challenges = htmlspecialchars($_POST['challenges']);
        $linkedin = htmlspecialchars($_POST['linkedin']);
        $more_info = htmlspecialchars($_POST['more_info']);
        $question = htmlspecialchars($_POST['question']);

        echo "<h2>Your Input:</h2>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Company: $company<br>";
        echo "Business: $business<br>";
        echo "Team Members: $team_members<br>";
        echo "Challenges: $challenges<br>";
        echo "LinkedIn: $linkedin<br>";
        echo "More Info: $more_info<br>";
        echo "Question: $question<br>";
    }
    ?>
</body>
</html>
