
<!DOCTYPE html>
<html> 
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Shipmate homepage">
    <meta name="author" content="Brendan Lewis">
    <meta name="keywords" content="Social Networking, USNA">
    <link rel="stylesheet" href="styles.css">
    <title>SHIPMATE</title>
</head>
<body>
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
                <a href="./logout.php" class="no-link-style"> Logout</a>
        </header>
        <?php else: ?>
        <header class="navbar">
                <a href="./index.php" class="no-link-style"> Index</a>
                <a href="./schedule.php" class="no-link-style"> Schedule</a>
                <a href="./registration.php" class="no-link-style"> Registration</a>
                <a href="./login.php" class="no-link-style"> Login</a>
        </header>
        <?php endif; ?>
    </div>


    <div class="Header" style="display:flex; justify-content: center; align-items: center;">
        <header>  
            <h1 style="color:rgb(255, 153, 0);"> SHIPMATE </h1>
        </header>
    </div>


    <!--Pictures that make the website look pretty, these are also linked to 
    the offical website of BCM-->
    <div class="Picture" style="display:flex; justify-content: center; align-items: center;">
        <img src="images/shipmate.png" style="height:400px; width:300px;" >
    </div>


    

    <!--This section describes the main mission and goals of BCM as an organization
    It is a section as there are three lines that need different formatting-->
    <section>
        <h1 style="text-align: center;"><b>The New Wave of Social Media!</b></h1>
        <h3 style="text-align: center;"></h3>
        <p>We want to make it so that wherever and whenever you want to check in with your friends or update them on your life, you can!</p>
    </section>


    <!-- In this section the details of BCM as a ministry are enclosed, they are
     about how and when we meet and what the community looks like. Utilized
     a list so that details would be clearer.-->
    <details>
    <summary>Learn more about our features!</summary>
    <p>You're currently looking at our home and welcome page, we hope you feel welcomed! On this site you'll find we also offer:<br></p>
    <ul>
        <li><b>A Search Page </b>that allows you to search for diffent things words that are in other peoples status updates.</li>
        <li><b>A Signup Page </b> so that you can join our awesome platform and create your own page!</li>
        <li><b>Profile Pages </b> each user has a profile page so that you can learn about them and follow their posts. </li>
        <li><b> A Member List Page</b> that lists all the current members of the site so that you can see everyone else thats on Shipmate!
        <li><b>A Status Update Posting Page!! </b></li>
        <li><b>Friends!</b> you can add friends and remove them </li>
        <li><b>A personalized feed</b> showing what your friends have posted most recently</li>
    </ul>
    </details>


    
    <div class="footer">
        <footer>
            <br><br><br>
            <p  style="text-align: center; font-size: large;"> SHIPMATE: Find Your Crew</p>
            <p class="floating">Website designed by Brendan Lewis and Maddie Iverson - Email
            <a href="mailto:m263708@usna.edu"> m263708@usna.edu</a> 
            for questions</p> 
        </footer>
    </div>
</body>
</html>



