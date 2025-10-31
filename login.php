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
    <meta name="keywords" content="Ministry, Baptist, Bible,USNA">
    <link rel="stylesheet" href="styles.css">
    <title>  BCM Login</title>

    
</head>

<body>
    
    <div class="Header" style="padding-top:5vw; display:flex; justify-content: center; align-items: center;">
        <header>  
            <h1 > Navy BCM </h1>
        </header>
    </div>


    
    <div> 
        <form method="post" action="login_exec.php">
            Email <input type="email" name="email" required>
            <br> 

            <label for="formpassword">Password:
                <input type="password" name="password">
            </label>
            
            <br><br>
            
            

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
            <p style="text-align: center; font-size: large;"> Where friend's become family and the Lord is glorified</p>
            <p>Website designed by Brendan Lewis - Email
            <a href="mailto:m263708@usna.edu"> m263708@usna.edu</a> 
            for questions</p> 
            <a href="./index.php"> Homepage </a>
        </footer>
    </div>
</body>
</html>



