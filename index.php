
<!DOCTYPE html>
<html> 
<head>
    <meta charset="UTF-8">
    <meta name="description" content="BCM homepage">
    <meta name="author" content="Brendan Lewis">
    <meta name="keywords" content="Ministry, Baptist, Bible,USNA">
    <link rel="stylesheet" href="styles.css">
    <title>  BCM Homepage</title>
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
            <h1 style="color:rgb(255, 153, 0);"> Navy BCM </h1>
        </header>
    </div>


    <!--Pictures that make the website look pretty, these are also linked to 
    the offical website of BCM-->
    <div class="Picture" style="display:flex; justify-content: center; align-items: center;">
        <!-- Link : https://www.google.com/imgres?q=navy%20bcm&imgurl=https%3A%2F%2Fimages.squarespace-cdn.com%2Fcontent%2Fv1%2F595fb9c759cc68f7fb4828df%2F1539988278777-7NWQNJ922GWECTJ2H4RJ%2FBCM%2BEvent-0026.jpg&imgrefurl=https%3A%2F%2Fwww.navybcm.com%2Fwhatisbcm&docid=4VsdwvR9Kw0i6M&tbnid=NdL9MvlBpJSUNM&vet=12ahUKEwjv5qOt1p6PAxWLGVkFHZCMKDIQM3oECBoQAA..i&w=2500&h=1667&hcb=2&ved=2ahUKEwjv5qOt1p6PAxWLGVkFHZCMKDIQM3oECBoQAA-->
        <a href="https://www.navybcm.com/the-bcm-house-1"><img src="../images/bcm house.jpeg" > </a>
        
        <!-- Link : https://www.google.com/imgres?q=navy%20bcm&imgurl=https%3A%2F%2Fimages.squarespace-cdn.com%2Fcontent%2Fv1%2F595fb9c759cc68f7fb4828df%2F1503600909070-YFNRKD94OHOHWYR0VCVX%2FBCM%2BStickers-02.png&imgrefurl=https%3A%2F%2Fwww.navybcm.com%2Fwhatisbcm&docid=4VsdwvR9Kw0i6M&tbnid=zhGUQ2Ve1FvqVM&vet=12ahUKEwjv5qOt1p6PAxWLGVkFHZCMKDIQM3oECB4QAA..i&w=900&h=900&hcb=2&ved=2ahUKEwjv5qOt1p6PAxWLGVkFHZCMKDIQM3oECB4QAA-->
        <a href="https://www.navybcm.com/whatisbcm"><img src="../images/bcm.png" > </a>

        <!-- Link : https://www.google.com/imgres?q=navy%20bcm&imgurl=https%3A%2F%2Fimages.squarespace-cdn.com%2Fcontent%2Fv1%2F595fb9c759cc68f7fb4828df%2F1539988278777-7NWQNJ922GWECTJ2H4RJ%2FBCM%2BEvent-0026.jpg&imgrefurl=https%3A%2F%2Fwww.navybcm.com%2Fwhatisbcm&docid=4VsdwvR9Kw0i6M&tbnid=NdL9MvlBpJSUNM&vet=12ahUKEwjv5qOt1p6PAxWLGVkFHZCMKDIQM3oECBoQAA..i&w=2500&h=1667&hcb=2&ved=2ahUKEwjv5qOt1p6PAxWLGVkFHZCMKDIQM3oECBoQAA-->
        <a href="https://www.navybcm.com/whatisbcm"><img src="../images/bcm worship.jpeg" > </a>
    </div>


    <!--This section describes the main mission and goals of BCM as an organization
    It is a section as there are three lines that need different formatting-->
    <section>
        <h1 style="text-align: center;"><b>About Us!</b></h1>
        <h3 style="text-align: center;">Our mission is to make disciples who make disciples</h3>
        <p>We want to make a drastic impact on the brigade one person at a time through our loving service</p>
    </section>


    <!-- In this section the details of BCM as a ministry are enclosed, they are
     about how and when we meet and what the community looks like. Utilized
     a list so that details would be clearer.-->
    <details>
    <summary>Want to hear more about our ministry?</summary>
    <p>We reach midshipmen through a large amount of different avenues from meeting together weekly in a large group setting or getting together
        in smaller groups there are so many opportunities to get plugged in. We want you to come join our BCM family and have plenty of people
        that have never been to church who come and love our community. Come do life with us! <br>
        <br>Here are some of the events that happen on a weekly basis:
    </p>
    <ul>
        <li>BCM worship/sermon - Tuesday nights from 19:20-20:20 in Mitscher</li>
        <li>BCM D groups - Weekly and during different free periods, reach out to one of the core team to sign up!</li>
        <li>BCM bible study - Wednesday nights from 19:20-20:20 in Mitscher/Laboon</li>
        <li>House events - Occasional weekends throughout the year, will be announced at our worship/sermon event each week!</li>
    </ul>
    </details>


    <!--Link to where people can get connected with our organization if they are interested
    in joining and being part of our community. Added a margin top so that there felt like there
    was more space, centered text so that it would be different from above paragraph.-->
    <div style="margin-top: 70px;">
        <p style="text-align: center;" > If you'd like to learn more and connect with us please fill out our welcome card!</p>
        <a href="http://navybcm.com/welcome" > <p style="text-align: center;">Welcome Card!</p></a><br>
        <a href="https://www.bible.com/bible/59/JHN.1.ESV"><p style="text-align: center;"> Also we'd love to have you join us as we go through John! </a>
    </div>

    <!--Links to the schedule and registration pages for lab 2-->
    <div>
        <h3> Check out our
        <a href="./schedule.php"><span class="link"> Schedule </span></a>
        and 
        <a href="./registration.php"> <span class="link"> Registration! </span> </a>
        </h3>
    </div>

    <!--Links to the schedule and registration pages for lab 2-->
    <div class="light">
        <h3> To create a report go 
        <a href="./requestReport.php"> Here! </a> <br>
        </h3>
    </div>

    <div class="light">
        <h3> Login to your account
        <a href="./login.php"> Here! </a> <br>
        </h3>
    </div>
    
    <div class="light">
        <h3> Logout of your account
        <a href="./logout.php"> Here! </a> <br>
        </h3>
    </div>
    

    <!--Footer that describes another main mission and has the creators information so that any
    errors can be fixed and people can reach out with questions. Email has been referenced to make
    things easier to access.-->
    <div class="footer">
        <footer>
            <br><br><br>
            <p  style="text-align: center; font-size: large;"> Where friend's become family and the Lord is glorified</p>
            <p class="floating">Website designed by Brendan Lewis - Email
            <a href="mailto:m263708@usna.edu"> m263708@usna.edu</a> 
            for questions</p> 
        </footer>
    </div>
</body>
</html>



