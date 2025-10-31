<?php
$email = $_POST['email'];
$pswd = $_POST['password'];

if ((empty($email) || empty($pswd)) && !checkPasswordBasic($pswd)) {
    echo "Please hit the back arrow and enter both your email and password<br>";
    session_destroy();
    exit;
}

//Check if the email exists and then verify the password.
if (file_exists("./LOG.txt")) {
    $file = fopen("./LOG.txt", "r");
    if ($file) {
        // Skip the header line
        fgets($file);
        while (($line = fgets($file)) !== false) {
            $fields = explode("\t", $line);
            if (count($fields) > 1 && trim($fields[1]) == trim($email)) {
                if (password_verify($pswd, trim($fields[2]))){
                    echo "Login successful! Welcome " . htmlspecialchars($fields[3]) . "<br>";
                    session_start();
                    $_SESSION['Username'] = $fields[3];
                    fclose($file);
                    header("Location: requestReport.php");
                    exit;
                } else {
                    session_destroy();
                    echo "Incorrect password. Please hit the back arrow and try again.<br>";
                }
                session_destroy();
                fclose($file);
                exit;
            }
        }
        session_destroy();
        fclose($file);
    }
}




?>
