<?php

require 'vendor/autoload.php'; // Include the PhpSpreadsheet library

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flexifile";
$userid = 2;

// Function to handle database connection with error handling
function connectToDatabase($servername, $username, $password, $dbname) {
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

// Function to validate and sanitize uploaded file
function validateAndSanitizeFile($file) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($file["name"]);
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if it's a valid XLSX file
    if ($fileType != "xlsx") {
        return false; // Invalid file type
    }

    // Move the file to the upload directory
    if (move_uploaded_file($file["tmp_name"], $target_file)) {
        return $target_file;
    }

    return false; // File upload failed
}

// Function to insert data into a table with prepared statements
function insertDataIntoTable($conn, $sql, $data) {
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    // Dynamically bind parameters based on the data array
    $types = str_repeat('s', count($data));
    $stmt->bind_param($types, ...$data);

    if ($stmt->execute()) {
        return true;
    } else {
        die("Error inserting data: " . $stmt->error);
    }

    $stmt->close();
}

// Check if a file was uploaded
if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] === UPLOAD_ERR_OK) {
    // Validate and sanitize the uploaded file
    $uploadedFile = validateAndSanitizeFile($_FILES['fileToUpload']);

    if ($uploadedFile) {
        // Load the uploaded Excel file
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($uploadedFile);

        // Establish a database connection
        $conn = connectToDatabase($servername, $username, $password, $dbname);

        // Process the first sheet 'C1'
        $worksheet1 = $spreadsheet->getSheetByName('C1');

        // Define columns for the 'personalinfo_tb' table
        $personal_info_data = array(
            $userid,
            $worksheet1->getCell('D10')->getValue(),  // surname
            $worksheet1->getCell('D11')->getValue(),  // firstname
            $worksheet1->getCell('D12')->getValue(),  // midname
            $worksheet1->getCell('L11')->getValue(),  // extension
            $worksheet1->getCell('D13')->getValue(),  // birthday
            $worksheet1->getCell('D15')->getValue(),  // birthplace
            $worksheet1->getCell('D16')->getValue(),  // sex
            $worksheet1->getCell('D17')->getValue(),  // civil_status
            $worksheet1->getCell('D22')->getValue(),  // height
            $worksheet1->getCell('D24')->getValue(),  // weight
            $worksheet1->getCell('D25')->getValue(),  // bloodtype
            $worksheet1->getCell('D27')->getValue(),  // gsis
            $worksheet1->getCell('D29')->getValue(),  // pagibig
            $worksheet1->getCell('D31')->getValue(),  // philhealth
            $worksheet1->getCell('D32')->getValue(),  // sss
            $worksheet1->getCell('D33')->getValue(),  // tin
            $worksheet1->getCell('D34')->getValue(),  // agency_no
            $worksheet1->getCell('J13')->getValue(),  // citizenship
            $worksheet1->getCell('I17')->getValue(),  // residential_house_no
            $worksheet1->getCell('L17')->getValue(),  // residential_street
            $worksheet1->getCell('I19')->getValue(),  // residential_subdivision
            $worksheet1->getCell('L19')->getValue(),  // residential_barangay
            $worksheet1->getCell('I22')->getValue(),  // residential_municipality
            $worksheet1->getCell('L22')->getValue(),  // residential_province
            $worksheet1->getCell('I24')->getValue(),  // residential_zipcode
            $worksheet1->getCell('I25')->getValue(),  // permanent_house_no
            $worksheet1->getCell('L25')->getValue(),  // permanent_street
            $worksheet1->getCell('I27')->getValue(),  // permanent_subdivision
            $worksheet1->getCell('L27')->getValue(),  // permanent_barangay
            $worksheet1->getCell('I29')->getValue(),  // permanent_municipality
            $worksheet1->getCell('L29')->getValue(),  // permanent_province
            $worksheet1->getCell('I31')->getValue(),  // permanent_zipcode
            $worksheet1->getCell('I32')->getValue(),  // telephone
            $worksheet1->getCell('I33')->getValue(),  // mobile_no
            $worksheet1->getCell('I34')->getValue()   // email
        );

        // Define the row numbers you want to process for children's data
        $rowNumbersChildren = [37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48]; // Update this array as needed

        foreach ($rowNumbersChildren as $rowNumber) {
            // Define arrays for each field you want to extract for children's data
            $children_names = [];
            $date_of_births = [];

            // Fetch data from the Excel worksheet for the current row
            foreach ($rowNumbersChildren as $row) {
                $children_names[] = $worksheet1->getCell("I$row")->getValue();
                $date_of_births[] = $worksheet1->getCell("M$row")->getValue();
            }
        }


        $family_background_data = array(
            $userid,
            $worksheet1->getCell('D36')->getValue(),  // spouse_surname
            $worksheet1->getCell('D37')->getValue(),  // spouse_firstname
            $worksheet1->getCell('D38')->getValue(),  // spouse_middlename
            $worksheet1->getCell('D39')->getValue(),  // occupation
            $worksheet1->getCell('D40')->getValue(),  // employer
            $worksheet1->getCell('D41')->getValue(),  // business address
            $worksheet1->getCell('D42')->getValue(),  // telephone no
            $worksheet1->getCell('G37')->getValue(),  // spouse_extension
            $worksheet1->getCell('D43')->getValue(),  // father_surname
            $worksheet1->getCell('D44')->getValue(),  // father_firstname
            $worksheet1->getCell('D45')->getValue(),  // father_middlename
            $worksheet1->getCell('G44')->getValue(),  // father_name_extension
            $worksheet1->getCell('D47')->getValue(),  // mother_surname
            $worksheet1->getCell('D48')->getValue(),  // mother_firstname
            $worksheet1->getCell('D49')->getValue()   // mother_middlename
        );
        $familychildren_data =array(
            $userid,
            $childname = implode(', ', $children_names),
            $childbirth = implode(', ', $date_of_births),

        );

        // Define the row numbers you want to process
        $rowNumbersCollege = [57, 58]; // Update this array as needed

        foreach ($rowNumbersCollege as $rowNumber) {
            // Define arrays for each field you want to extract for college data
            $levelcollegelist = [];
            $schoolcollege_list = [];
            $degreecollege_list = [];
            $fromdatecollege_list = [];
            $todatecollege_list = [];
            $unitscollege_list = [];
            $graduatedcollege_list = [];
            $honorscollege_list = [];

            // Fetch data from the Excel worksheet for the current row
            foreach ($rowNumbersCollege as $row) {
                $levelcollegelist[] = $worksheet1->getCell("B$row")->getValue();
                $schoolcollege_list[] = $worksheet1->getCell("D$row")->getValue();
                $degreecollege_list[] = $worksheet1->getCell("G$row")->getValue();
                $fromdatecollege_list[] = $worksheet1->getCell("J$row")->getValue();
                $todatecollege_list[] = $worksheet1->getCell("K$row")->getValue();
                $unitscollege_list[] = $worksheet1->getCell("L$row")->getValue();
                $graduatedcollege_list[] = $worksheet1->getCell("M$row")->getValue();
                $honorscollege_list[] = $worksheet1->getCell("N$row")->getValue();
            }

        }



        // Define the row numbers you want to process
        $rowNumbers = [59, 60, 61]; // Update this array as needed

        foreach ($rowNumbers as $rowNumber) {
            // Define arrays for each field you want to extract
            $levelgradlist = [];
            $schoolgrad_list = [];
            $degreeGrad_list = [];
            $fromdate_list = [];
            $todate_list = [];
            $unitsGradstudies_list = [];
            $yeargrad_list = [];
            $honors_list1 = [];

            // Fetch data from the Excel worksheet for the current row
            foreach ($rowNumbers as $row) {
                $levelgradlist[] = $worksheet1->getCell("B$row")->getValue();
                $schoolgrad_list[] = $worksheet1->getCell("D$row")->getValue();
                $degreeGrad_list[] = $worksheet1->getCell("G$row")->getValue();
                $fromdate_list[] = $worksheet1->getCell("J$row")->getValue();
                $todate_list[] = $worksheet1->getCell("K$row")->getValue();
                $unitsGradstudies_list[] = $worksheet1->getCell("L$row")->getValue();
                $yeargrad_list[] = $worksheet1->getCell("M$row")->getValue();
                $honors_list1[] = $worksheet1->getCell("N$row")->getValue();
            }
        }


        $educational_background_data = array(
                $userid,
                $worksheet1->getCell('B54')->getValue(),//level elementary
                $worksheet1->getCell('D54')->getValue(), //school elementary
                $worksheet1->getCell('G54')->getValue(), //degree elementary
                $worksheet1->getCell('J54')->getValue(), //fromdate elementary
                $worksheet1->getCell('K54')->getValue(), //todate elementary
                $worksheet1->getCell('L54')->getValue(), //units elementary
                $worksheet1->getCell('M54')->getValue(), //graduated elementary
                $worksheet1->getCell('N54')->getValue(), //honors elementary
                $worksheet1->getCell('B55')->getValue(), //level secondary
                $worksheet1->getCell('D55')->getValue(), //school secondary
                $worksheet1->getCell('G55')->getValue(), //degree secondary
                $worksheet1->getCell('J55')->getValue(), //fromdate secondary
                $worksheet1->getCell('K55')->getValue(), //todate secondary
                $worksheet1->getCell('L55')->getValue(), //units secondary
                $worksheet1->getCell('M55')->getValue(), //graduated secondary
                $worksheet1->getCell('N55')->getValue(), //honors secondary
                $worksheet1->getCell('D56')->getValue(), //level vocational
                $worksheet1->getCell('D56')->getValue(), //school vocational
                $worksheet1->getCell('G56')->getValue(), //degree vocational
                $worksheet1->getCell('J56')->getValue(), //fromdate vocational
                $worksheet1->getCell('K56')->getValue(), //todate vocational
                $worksheet1->getCell('L56')->getValue(), //units vocational
                $worksheet1->getCell('M56')->getValue(), //graduated vocational
                $worksheet1->getCell('N56')->getValue(), //honors vocational
                $level_college = implode(', ', $levelcollegelist),
                $school_college = implode(', ', $schoolcollege_list),
                $degree_college = implode(', ', $degreecollege_list),
                $fromdate_college = implode(', ', $fromdatecollege_list),
                $todate_college = implode(', ', $todatecollege_list),
                $units_college = implode(', ', $unitscollege_list),
                $graduated_college = implode(', ', $graduatedcollege_list),
                $honors_college = implode(', ', $honorscollege_list),
                $level_gradstudies = implode(', ', $levelgradlist),
                $school_gradstudies = implode(', ', $schoolgrad_list),
                $degree_gradstudies = implode(', ', $degreeGrad_list),
                $fromdate_gradstudies = implode(', ', $fromdate_list),
                $todate_gradstudies = implode(', ', $todate_list),
                $units_gradstudies = implode(', ', $unitsGradstudies_list),
                $gradstudies_yeargrad = implode(', ', $yeargrad_list),
                $honors_gradstudies = implode(', ', $honors_list1),
        );
        

        function setDefaultValues(&$data) {
            foreach (array_keys($data) as $key) {
                if ($data[$key] === null) {
                    $data[$key] = ''; // Set a default value (an empty string) for NULL values
                }
            }
        }
        
        // Call the function for each data section
        setDefaultValues($personal_info_data);
        setDefaultValues($family_background_data);
        setDefaultValues($educational_background_data);
        setDefaultValues($familychildren_data);

        // Define SQL query for 'personalinfo_tb'
        $personal_info_tb_sql = "INSERT INTO personal_info_tb (
            userid,firstname,surname, midname,extension, birthday, birthplace, sex, civil_status, height, weight,
            bloodtype, gsis, pagibig, philhealth, sss, tin, agency_no, citizenship, residential_house_no, residential_street, 
            residential_subdivision, residential_barangay, residential_municipality, residential_province, residential_zipcode,
            permanent_house_no, permanent_street, permanent_subdivision, permanent_barangay, permanent_municipality, permanent_province, 
            permanent_zipcode,telephone,email, mobile_no
        ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        // Prepare statement and insert data into 'personalinfo_tb'
        if (insertDataIntoTable($conn, $personal_info_tb_sql, $personal_info_data)) {
            echo "Personal Information inserted successfully!<br>";
        }
        $family_background_tb_sql = "INSERT INTO family_background_tb (
            userid,spouse_surname, spouse_firstname, spouse_midname,occupation, employer,
            business_address, telephone_no, spouse_extension,
            father_surname, father_firstname, father_midname, father_extension, mother_surname, mother_firstname, mother_midname
        ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        
        // Prepare statement and insert data into 'backgroundfam_tb'
        if (insertDataIntoTable($conn, $family_background_tb_sql, $family_background_data)) {
            echo "Family Background inserted successfully!<br>";
        }
        $family_children_tb_sql ="INSERT INTO family_children_tb(
            userid, childname, childbirth
        )
        VALUES (?,?,?)";
        if (insertDataIntoTable($conn, $family_children_tb_sql, $familychildren_data)) {
            echo "Family Children inserted successfully!<br>";
        }

        $educational_background_tb_sql = "INSERT INTO educational_background_tb (

            userid,level_elementary, school_elementary, degree_elementary,fromdate_elementary,todate_elementary,
            units_elementary, graduated_elementary, honors_elementary, level_secondary, school_secondary, degree_secondary,
            fromdate_secondary, todate_secondary, units_secondary, graduated_secondary, honors_secondary,
            level_vocational,school_vocational, degree_vocational, fromdate_vocational, todate_vocational, units_vocational, graduated_vocational,
            honors_vocational, level_college, school_college, degree_college, fromdate_college, todate_college,units_college,graduated_college,
            honors_college, level_gradstudies,school_gradstudies, degree_gradstudies,
            fromdate_gradstudies, todate_gradstudies, units_gradstudies, graduated_gradstudies,honors_gradstudies
        ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        // Prepare statement and insert data into 'backgroundeduc_tb'
        if (insertDataIntoTable($conn, $educational_background_tb_sql, $educational_background_data)) {
            echo "Educational Background inserted successfully!<br>";
         }
        // Process the second sheet 'C2'
        $worksheet2 = $spreadsheet->getSheetByName('C2');

        // Extract data from 'C2'
        $columns = ['A', 'F', 'G', 'I', 'L', 'M']; // Column letters for your data
        $rowStart = 5; 
        $rowEnd = 11; 

        $result = [];

        foreach ($columns as $column) {
            $dataList = [];
            for ($i = $rowStart; $i <= $rowEnd; $i++) {
                $value = $worksheet2->getCell($column . $i)->getValue();
                // Check if the key exists in the array before accessing it
                if (isset($value)) {
                    $dataList[] = $value;
                } else {
                    $dataList[] = ''; // Set a default value (an empty string) for undefined keys
                }
            }
            $result[] = implode(', ', $dataList);
        }

        list($career, $rating, $examination, $place, $number, $validity) = $result;

        $columns = ['A', 'C', 'D', 'G', 'J', 'K', 'L', 'M']; // Column letters for your data

        $result = [];

        foreach ($columns as $column) {
            $dataList = [];
            for ($i = 18; $i <= 46; $i++) {
                $value = $worksheet2->getCell($column . $i)->getValue();
                // Check if the key exists in the array before accessing it
                if (isset($value)) {
                    $dataList[] = $value;
                } else {
                    $dataList[] = ''; // Set a default value (an empty string) for undefined keys
                }
            }
            $result[] = implode(', ', $dataList);
        }

        list($work_from_date, $work_to_date, $position_title, $department, $salary, $paygrade, $appointment, $gov_service) = $result;

        $data2 = array(
            $userid,
            $career,
            $rating,
            $examination,
            $place,
            $number,
            $validity,
        );

        $data3 = array(
            $userid,
            $work_from_date,
            $work_to_date,
            $position_title,
            $department,
            $salary,
            $paygrade,
            $appointment,
            $gov_service,
        );
        // Corrected code for $data2
        foreach ($data2 as &$value) {
            if ($value === null) {
                $value = ''; // Set a default value (an empty string) for NULL values
            }
        }

        // Corrected code for $data3
        foreach ($data3 as &$value) {
            if ($value === null) {
                $value = ''; // Set a default value (an empty string) for NULL values
            }
        }

        

        // Define SQL query for 'civilservice_tb'
        $civil_service_tb_sql = "INSERT INTO civil_service_tb (
            userid, career, rating, examination, place, number, validity
        ) VALUES (?,?, ?, ?,?,?,?)";

        // Prepare statement and insert data into 'civilservice_tb'
        if (insertDataIntoTable($conn, $civil_service_tb_sql, $data2)) {
            echo "Civil Service inserted successfully!<br>";
        }
        $work_experience_tb_sql ="INSERT INTO work_experience_tb(
            userid,
            work_from_date,
            work_to_date,
            position_title,
            department,
            salary,
            paygrade,
            appointment,
            gov_service
        )
        VALUES (?,?,?,?,?,?,?,?,?)";
         if (insertDataIntoTable($conn, $work_experience_tb_sql, $data3)) {
            echo "Work Experience inserted successfully!<br>";
        }
        // Process the second sheet 'C3'
        $worksheet3 = $spreadsheet->getSheetByName('C3');
        // Extract data from 'C3'

        $columns = ['A', 'E', 'G', 'F', 'G', 'H']; // Column letters for your data
        $rowStart = 6; 
        $rowEnd = 8; 

        $result = [];

        foreach ($columns as $column) {
            $dataList = [];
            for ($i = $rowStart; $i <= $rowEnd; $i++) {
                $value = $worksheet3->getCell($column . $i)->getValue();
                // Check if the key exists in the array before accessing it
                if (isset($value)) {
                    $dataList[] = $value;
                } else {
                    $dataList[] = ''; // Set a default value (an empty string) for undefined keys
                }
            }
            $result[] = implode(' , ', $dataList);
        }

        list($organization, $from_date, $to_date,$hours, $position) = $result;

        $columns = ['A', 'E', 'F', 'G', 'H', 'I']; // Column letters for your data
        $rowStart = 15; 
        $rowEnd = 43; 

        $result = [];

        foreach ($columns as $column) {
            $dataList = [];
            for ($i = $rowStart; $i <= $rowEnd; $i++) {
                $value = $worksheet3->getCell($column . $i)->getValue();
                // Check if the key exists in the array before accessing it
                if (isset($value)) {
                    $dataList[] = $value;
                } else {
                    $dataList[] = ''; // Set a default value (an empty string) for undefined keys
                }
            }
            $result[] = implode(' , ', $dataList);
        }

        list($title, $training_from_date, $training_to_date, $duration, $type, $sponsor) = $result;

        $columns = ['A', 'C', 'I']; // Column letters for your data
        $rowStart = 47; 
        $rowEnd = 51; 

        $result = [];

        foreach ($columns as $column) {
            $dataList = [];
            for ($i = $rowStart; $i <= $rowEnd; $i++) {
                $value = $worksheet3->getCell($column . $i)->getValue();
                // Check if the key exists in the array before accessing it
                if (isset($value)) {
                    $dataList[] = $value;
                } else {
                    $dataList[] = ''; // Set a default value (an empty string) for undefined keys
                }
            }
            $result[] = implode(' , ', $dataList);
        }

        list($skills_hobbie	, $recognition, $association) = $result;

        $data4 = array(
            $userid,
            $organization,
            $from_date,
            $to_date,
            $hours,
            $position,
            
        );
        $data5 = array(
            $userid,
            $title,
            $training_from_date,
            $training_to_date,
            $duration,
            $type,
            $sponsor,
            
        );
        $data6 =array(
            $userid,
            $skills_hobbie,
            $recognition,
            $association,
        );
        foreach ($data4 as &$value) {
            if ($value === null) {
                $value = ''; // Set a default value (an empty string) for NULL values
            }
        }
        foreach ($data5 as &$value) {
            if ($value === null) {
                $value = ''; // Set a default value (an empty string) for NULL values
            }
        }
        foreach ($data6 as &$value) {
            if ($value === null) {
                $value = ''; // Set a default value (an empty string) for NULL values
            }
        }

        $voluntary_work_tb_sql ="INSERT INTO voluntary_work_tb(
            userid,
            organization,
            from_date,
            to_date,
            hours,
            position
        )
        VALUES (?,?,?,?,?,?)";
         if (insertDataIntoTable($conn, $voluntary_work_tb_sql, $data4)) {
            echo "Voluntary Work inserted successfully!<br>";
        }
        $training_programs_tb_sql ="INSERT INTO training_programs_tb(
            userid,
            title,
            training_from_date,
            training_to_date,
            duration,
            type,
            sponsor
        ) VALUES(?,?,?,?,?,?,?)";
        if (insertDataIntoTable($conn, $training_programs_tb_sql, $data5)) {
            echo "Training Programs inserted successfully!<br>";
        }
        $other_info_tb_sql ="INSERT INTO other_info_tb(
            userid,
            skills_hobbie,
            recognition,
            association

        ) VALUES(?,?,?,?)";
         if (insertDataIntoTable($conn, $other_info_tb_sql, $data6)) {
            echo "Other Information inserted successfully!<br>";
        }



        // Close the database connection
        $conn->close();
    } else {
        echo "Invalid file or file upload failed.";
    }
} else {
    echo "Error uploading the file.";
}
?>