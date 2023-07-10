<!DOCTYPE html>
<html>
<head>
    <title>Student Data</title>
    <style>
        .student {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            transition: border-color 0.3s;
            animation: jump 0.3s infinite;
        }

        .student:hover {
            background-color: orange;
            animation: none; 
        }

        .student p {
            margin: 0;
        }

        .student .name {
            font-weight: bold;
        }

        .student .age {
            color: #555;
        }

        .student .school {
            color: #888;
        }

        @keyframes jump {
            0% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0); }
        }
    </style>
</head>
<body>
    <?php
    $studentsJson = '[{"name" : "John Garg","age"  : "15","school" : "Ahlcon Public school"},
                    {"name" : "Smith Soy","age"  : "16","school" : "St. Marie school"},
                    {"name" : "Charle Rena","age"  : "16","school" : "St. Columba school"}]';

    $students = json_decode($studentsJson, true);

    foreach ($students as $student) {
        echo '<div class="student">';
        echo "<p class='name'>Name: " . $student['name'] . "</p>";
        echo "<p class='age'>Age: " . $student['age'] . "</p>";
        echo "<p class='school'>School: " . $student['school'] . "</p>";
        echo '</div>';
    }
    ?>
</body>
</html>