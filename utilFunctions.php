<?php


function printRegistrationSuccess(
    $date, $email, $name, $phone_number, $company, $class_year,
    $Knowledge_of_Christ, $Heard_from, $Would_you_rather, $type
): void {
    // If all inputs are valid, print a success message
    echo "Thank you for registering for BCM! We will be reaching out to you soon!!!<br><br>";
    echo "You entered the following information:<br><br>";
    echo "Date: $date<br>";
    echo "Email: $email<br>";
    echo "Password: ***<br>";
    echo "Name: $name<br>";
    echo "Phone Number: $phone_number<br>";
    echo "Company: $company<br>";
    echo "Class Year: $class_year<br>";
    echo "Knowledge of Christ: $Knowledge_of_Christ<br>";
    echo "You heard about us from: $Heard_from<br>";
    echo "Would you rather: $Would_you_rather<br>";
    echo "Type: $type<br><br>";
    echo "Here are the additonal checklist options you selected:<br>";
}

function checkPasswordBasic(string $pswd): bool {
    $Good_input = true;

    if (!preg_match('/[a-z]/', $pswd)) {
        echo "Password must contain at least one lowercase letter.<br>";
        $Good_input = false;
    }

    if (!preg_match('/[A-Z]/', $pswd)) {
        echo "Password must contain at least one uppercase letter.<br>";
        $Good_input = false;
    }

    if (!preg_match('/[0-9]/', $pswd)) {
        echo "Password must contain at least one digit.<br>";
        $Good_input = false;
    }

    return $Good_input;
}


function showSelectedOptions($Options): void {
    echo "You selected the following options: <br>";
    echo "[ ";
    $user_options = "";
    for ($i = 0; $i < count($Options); $i++) {
        $user_options .= $Options[$i] . " ";
    }
    echo $user_options . "]";
}

function getReportedRowsByOptions(string $filename, array $Options): array {
    $reported_array = [];
    $headers = [];

    // Open file for reading and check to ensure that the file exists
    if (($handle = fopen($filename, "r")) !== false) {
        // Get the top row for the column headers
        $headers = fgetcsv($handle, 0, "\t"); // I made data.txt a tab separated file

        $results = [];

        // Loop through the file line by line
        while (($row = fgetcsv($handle, 0, "\t")) !== false) {
            $entry = array_combine($headers, $row); // associate columns with headers

            // Trim the Options field
            $options = trim($entry['Options']);

            $options_array = explode(",", $options); // split into an array

            for ($i = 0; $i < count($options_array); $i++) {
                if (in_array($options_array[$i], $Options)) {
                    // Mark this option as selected
                    $reported_array[] = $row;
                    break; // if one option matches, add it once (no duplicates)
                }
            }
        }
        fclose($handle);
    }

    return [$headers, $reported_array];
}


function printReportTable($headers, $reported_array) {
    echo "<table border='1' cellspacing='0' cellpadding='5'>";
    echo "<tr>";
    foreach ($headers as $h) {
        echo "<th><b>" . htmlspecialchars($h) . "</b></th>";
    }
    echo "</tr>";

    for ($i = 0; $i < count($reported_array); $i++) {
        echo "<tr>";
        for ($j = 0; $j < count($reported_array[$i]); $j++) {
            if ($headers[$j] !== "Password") {
                echo "<td>" . $reported_array[$i][$j] . "</td>";
            } else {
                echo "<td><b>***</b></td>";
            }
        }
        echo "</tr>";
    }

    echo "</table>";
}



?>
