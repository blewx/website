<!DOCTYPE html>

<html> 

<div>
    <?php
        session_start();  // Start the session to check login state

        $logged_in = false;
        if( $_SESSION['Username'] != null){
            $logged_in = true;
        }
    ?>
    
    <?php if ($logged_in): ?>
    <header class="navbar">
            <a href="./index.php" class="no-link-style"> Index</a>
            <a href="./schedule.php" class="no-link-style"> Schedule</a>
            <a href="./registration.php" class="no-link-style"> Registration</a>
            <a href="./requestReport.php" class="no-link-style"> Request-Report</a>
            <a href="./grid.php" class="no-link-style"> Grid</a>
            <a href="./logout.php" class="no-link-style"> Logout</a>
    </header>
    <?php else: ?>
    <header class="navbar">
            <a href="./index.php" class="no-link-style"> Index</a>
            <a href="./schedule.php" class="no-link-style"> Schedule</a>
            <a href="./registration.php" class="no-link-style"> Registration</a>
            <a href="./grid.php" class="no-link-style"> Grid</a>            
            <a href="./login.php" class="no-link-style"> Login</a>
    </header>
    <?php endif; ?>
</div>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="BCM homepage">
    <meta name="author" content="Brendan Lewis">
    <meta name="keywords" content="Registration, Register, Social Media, Social Networking, Friends, USNA">
    <link rel="stylesheet" href="styles.css">
    <title>SHIPMATE Registration </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    

    
</head>

<body>
    
    <div class="Header" style="padding-top:5vw; display:flex; justify-content: center; align-items: center;">
        <header>  
            <h1> SHIPMATE Sign-up </h1>
        </header>
    </div>

    <script>
        function checkpswd(){
            //get form inputs (passwords)
            var p1 = document.signup.password1.value;
            var p2 = document.signup.password2.value;
            
            //data validation
            if(p1 == p2){
                return true;
            }else{
                return false;
            }
        }
    </script>
    
    <div> 
        <form id="signup" method="post" action="submit.php" class="p-10 border rounded shadow-sm bg-light" onsubmit="return checkpswd()">
            Username <input type="text" name="username" placeholder="" required>
            <br> 

            <label for="formpassword1">Password:
                <input type="password" name="password1">
            </label>
            <br>
            <label for="formpassword2">Verify Password:
                <input type="password" name="password2">
            </label>
            
            <br><br>
            
            What is your full name? <input type="text" name="name" placeholder="">
            <br>
            What is your phone number? <input type="text" name="phone number" placeholder="">
            <br> 
            What is your company? <input type="text" name="company" placeholder="">
            <br>  
            What is your class year? <input type="text" name="class year" placeholder="text">
            <br> 

            Biography <textarea name="Bio" rows="3" cols="25"></textarea>
            <br> <br>

            How did you hear about us? 
            <br>
            Advertisement <input type="radio" name="Heard from" value="Advertisement" checked>
            Friend <input type="radio" name="Heard from" value="Friend">
            Other <input type="radio" name="Heard from" value="Other">
            <br> 
            <br>

            I want to 
            <br>Meet new people<input type="checkbox" name="Options[]" value="new">
            <br>Keep up with my current friends <input type="checkbox" name="Options[]" value="friends">
            <br>Share/find new ideas <input type="checkbox" name="Options[]" value="ideas">
            <br>Have an interesting feed to scroll on when I'm bored <input type="checkbox" name="Options[]" value="feed">

            <br> <br>

            
            Would you rather
            <select name="Would you rather">
                <option value="Climb the tallest mountain">Climb the tallest mountain</option>
                <option value="Travel to the bottom of the sea">Travel to the bottom of the sea</option>
                <option value="Go sky diving ">Go sky diving</option>
            </select>
            <br> <br>

            <input type="hidden" name="type" value="class">
            <input type="hidden" name="event" value="4">
            <br> 
            <input type="submit" value="Submit Form">
            <input type="reset" value="Clear Form">
        </form>
    </div >


    <div class="footer">
        <footer>
            <br><br><br>
            <p style="text-align: center; font-size: large;"> SHIPMATE: Find Your Crew</p>
            <p>Website designed by Brendan Lewis & Maddie Iverson- Email
            <a href="mailto:m263708@usna.edu"> m263708@usna.edu</a> 
            for questions</p> 
            <a href="./index.php"> Homepage </a>
        </footer>
    </div>
</body>
</html>



