<?php
require_once "./utilFunctions.php";
$username = $_POST['username'];
$date = $_POST['date'];
$pswd = $_POST['password1'];
$name = $_POST['name'];
$phone_number = $_POST['phone_number'];
$company = $_POST['company'];
$class_year = $_POST['class_year'];
$Knowledge_of_Christ = $_POST['Bio'];
$Heard_from = $_POST['Heard_from'];
$Would_you_rather = $_POST['Would_you_rather'];
$type = $_POST['type'];
$event = $_POST['event'];
$Options = $_POST['Options'] ?? [];


$Good_input = true;
$Good_input = checkPasswordBasic($pswd);

if(empty($Knowledge_of_Christ)){    
    echo "Please hit the back arrow and enter your Knowledge_of_Christ<br>";
    $Good_input = false;
}






if(in_array("new", $Options) || in_array("friends", $Options) || in_array("ideas", $Options) || in_array("feed", $Options)){    
}
else{
    echo "Please hit the back arrow and select at least one option<br>";
    $Good_input = false;
}

if (empty($Heard_from)){
    echo "Please hit the back arrow and enter how you heard about us<br>";
    $Good_input = false;
}

//If usename (email) already exists in LOG then reject the registration.

if (file_exists("./LOG.txt")) {
    
    $file = fopen("./LOG.txt", "r");
    
    if ($file) {
        
        // Skip the header line
        fgets($file);
        
        while (($line = fgets($file)) !== false) {
            echo "hi";
            echo explode("\t",$line);
            $fields = explode("\t", $line);
            if (count($fields) > 1 && trim($fields[1]) == trim($username)) {
                echo "The email you entered is already registered. Please use a different email.<br>";
                $Good_input = false;
                break;
            }
        }
        fclose($file);
    }
}


if (!$Good_input){
    echo "Please hit the back arrow and fix the errors above.<br>";
    exit;
}



//Input sanitization, getting rid of new lines in text box
$Knowledge_of_Christ = str_replace(["\r\n", "\r", "\n"], '&&', $Knowledge_of_Christ);


// If all inputs are valid, print a success message
printRegistrationSuccess(
    $date, $name, $phone_number, $company, $class_year,
    $Knowledge_of_Christ, $Heard_from, $Would_you_rather, $type
);
//Make a temporary text to hold my correct options so
//it is easy to append to a file later.
$temp_text = "";
if (in_array("new", $Options)) {
    echo "You want to be reached out to.<br>";
    $temp_text .= "new";
}
if (in_array("friends", $Options)) {
    echo "You want to join the core team.<br>";
    if(!empty($temp_text)){
        $temp_text .= ",";
    }
    $temp_text .= "friends";
}
if (in_array("ideas", $Options)) {
    echo "You want to learn more about churches near you.<br>";
    if(!empty($temp_text)){
        $temp_text .= ",";
    }
    $temp_text .= "ideas";
}
if (in_array("feed", $Options)) {
    echo "You want to be baptized.<br>";
    if(!empty($temp_text)){
        $temp_text .= ",";
    }
    $temp_text .= "feed";
}
echo "<br>";


//Format text top append to file
$text = trim($date) . "\t" 
. trim($username) . "\t" 
. password_hash(trim($pswd), PASSWORD_DEFAULT) . "\t" 
. trim($name) . "\t" 
. trim($phone_number) . "\t" 
. trim($company) . "\t" 
. trim($class_year) . "\t" 
. trim($Knowledge_of_Christ) . "\t" 
. trim($Heard_from) . "\t" 
. trim($Would_you_rather) . "\t" 
. trim($type) . "\t"
. trim($temp_text) . "\n";

//Append text to file.
$file = null;
$file = fopen("./LOG.txt", "a");
fwrite($file, "Date\tEmail\tPassword\tName\tPhone Number\tCompany\tClass Year\tKnowledge of Christ\tHeard from\tWould you rather\tType\tOptions\n"); // Write header if file is new

if ($file) {
    
    fwrite($file, $text); // Write to the file
    fclose($file); // Close the file

}





exit;
?>
