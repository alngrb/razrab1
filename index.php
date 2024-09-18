
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Школа</h1>
        <div class="person-list">
            <h2>Список учеников</h2>
            <?php
            $personList = array(
                "Сидоров",
                "Емелина",
                "Иванова",
                "Петров",
                "Антонова"
            );

            echo "<ul>";
            foreach ($personList as $person) {
                echo "<li>$person</li>";
            }
            echo "</ul>";

            $personCount = count($personList);
            echo "<p>Количество учеников: $personCount</p>";

            $searchedName = "Сидоров";
            if (in_array($searchedName, $personList)) {
                echo "<p>Фамилия '$searchedName' найдена в списке.</p>";
            } else {
                echo "<p>Фамилия '$searchedName' не найдена в списке.</p>";
            }
            $expelledPerson = array_pop($personList);
            echo "<p>Последняя фамилия из списка '$expelledPerson' была удалена.</p>";

            echo "<h2>Обновленный список учеников</h2>";
            echo "<ul>";
            foreach ($personList as $person) {
                echo "<li>$person</li>";
            }
            echo "</ul>";
            ?>
        </div>

        <div class="department-list">
            <h2>Список учеников по отделам</h2>
            <?php
            $departmentStudents = array(
                "Спортивный" => "Сидоров",
                "Художественный" => "Емелина",
                "Музыкальный" => "Иванов",
                "Литературный" => "Петров",
                "Биологический" => "Антонова"
            );

            asort($departmentStudents);
            echo "<ul>";
            foreach ($departmentStudents as $department => $person) {
                echo "<li>$person ($department)</li>";
            }
            echo "</ul>";
            ?>
        </div>

        <div class="student-info">
            <h2>Информация об ученике</h2>
            <?php
            $studentInfo = array(
                array(
                    "name" => "Алёна",
                    "surname" => "Горбунова",
                    "group" => "425 ВЕБ",
                    "hobbies" => array("Отдыхвть"),
                    "social_media" => array(
                        "vk" => "Alena Gorbunova"
                    )
                )
            );

            foreach ($studentInfo as $student) {
                echo "<p>Имя: " . $student["name"] . "</p>";
                echo "<p>Фамилия: " . $student["surname"] . "</p>";
                echo "<p>Группа: " . $student["group"] . "</p>";
                echo "<p>Хобби: ";
                foreach ($student["hobbies"] as $hobby) {
                    echo "$hobby, ";
                }
                echo "</p>";
                echo "<div class=\"social-media\">";
                echo "<h3>Социальные сети:</h3>";
                foreach ($student["social_media"] as $platform => $userName) {
                    echo "<p>- $platform: $userName</p>";
                }
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>