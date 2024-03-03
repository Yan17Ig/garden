<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'header.php'; ?>
    
    <?php
            // Підключення до бази даних
            $servername = "BotanicalGarden";
            $username = "root";
            $password = "";
            $dbname = "testBd";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Перевірка підключення
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Отримання даних з бази даних
            $sql = "SELECT name, info, photo FROM tropic";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // Виведення стилів та даних користувачів
                echo "<style>
                        .tropic-container {
                            margin: 40px;
                            display: grid;
                            grid-template-columns: auto auto auto auto;
                            flex-direction: row;
                            justify-content: space-around;
                            gap: 20px;
                            align-items: center;
                        }
        
                        .column {
                            display: flex;
                            flex-direction: column;
                            justify-content: space-around;
                            
                        }
        
                        .name, .info {
                            margin-bottom: 10px;
                            font-size: 25px;
                            font-weight: 400;
                            
                        }
                        .info {
                            font-size: 20px;
                            font-weight: 300;
                        }
                        .column1 {
                            margin-right: 30px;
                        }
                        .column2 {
                            
                        }
                        .schedule-topic {
                            text-align: center;
                            font-size: 40px;
                        }
                        .column-container {
                            display: flex;
                            flex-direction: row;
                            
                        }
                        @media (max-width: 1400px) {
                            .name {
                                font-size: 20px;
                            }
                            .info {
                                font-size: 18px;
                            }
                            
                        }
                        @media (max-width: 768px) {
                            .name {
                                font-size: 14px;
                            }
                            .info {
                                font-size: 10px;
                            }
                            .tropic-container {
                                grid-template-columns: auto auto;
                            }
                            .schedule-topic {
                                font-size: 25px;
                            }
                        }
                        @media (max-width: 400px) {
                            .tropic-container {
                                grid-template-columns: auto;
                            }
                            .schedule-topic {
                                font-size: 18px;
                            }
                        }
                        .pic {
                            width: 90%;
                            height: 100%;
                        }
                      </style>";
                echo "<h1 class='schedule-topic'>Тропічні рослини</h1>";
                echo "<div class='tropic-container'>";
               
                while($row = $result->fetch_assoc()) {
                    echo "<div class='main-conteiner'>";
            
                        echo "<div class='column . column2'>";
                        echo "<div class='name'>" . $row["name"] . "</div><div class='info'>" . $row["info"] . "</div><img src='" . $row["photo"] . "' class='name pic' alt='photo'>";
                        echo "</div>";
                    echo "</div>";
                }
        
                  "</div>";
                 echo "</div>";
            } else {
                echo "0 results";
            }
            $conn->close();
          

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Перевірка підключення
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT name, info, photo FROM flowers";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // Виведення стилів та даних користувачів
                echo "<style>
                        .flowers-container {
                            margin: 40px;
                            display: grid;
                            grid-template-columns: auto auto auto auto;
                            flex-direction: row;
                            justify-content: space-around;
                            gap: 20px;
                            align-items: center;
                        }
        
                        .column {
                            display: flex;
                            flex-direction: column;
                            justify-content: space-around;
                            
                        }
        
                        .names, .infos {
                            margin-bottom: 10px;
                            font-size: 25px;
                            font-weight: 400;
                            
                        }
                        .infos {
                            font-size: 20px;
                            font-weight: 300;
                        }
                        .column1 {
                            margin-right: 30px;
                        }
                        .column2 {
                            
                        }
                        .schedule-topic {
                            text-align: center;
                            font-size: 40px;
                        }
                        .column-container {
                            display: flex;
                            flex-direction: row;
                            
                        }
                        @media (max-width: 1400px) {
                            .names {
                                font-size: 20px;
                            }
                            .infos {
                                font-size: 18px;
                            }
                            
                        }
                        @media (max-width: 768px) {
                            .names {
                                font-size: 14px;
                            }
                            .infos {
                                font-size: 10px;
                            }
                            .flowers-container {
                                grid-template-columns: auto auto;
                            }
                            .schedule-topic {
                                font-size: 25px;
                            }
                        }
                        @media (max-width: 400px) {
                            .flowers-container {
                                grid-template-columns: auto;
                            }
                            .schedule-topic {
                                font-size: 18px;
                            }
                        }
                        .pics {
                            width: 90%;
                            height: 100%;
                        }
                      </style>";
                      echo "<h1 class='schedule-topic'>Квіти</h1>";
                      echo "<div class='flowers-container'>";
               
                while($row = $result->fetch_assoc()) {
                    echo "<div class='main-conteiners'>";
            
                        echo "<div class='column . column2'>";
                        echo "<div class='names'>" . $row["name"] . "</div><div class='infos'>" . $row["info"] . "</div><img src='" . $row["photo"] . "' class='names pics' alt='photo'>";
                        echo "</div>";
                    echo "</div>";
                }
        
                  "</div>";
                } else {
                    echo "0 results";
                }
            $conn->close();
           
          
        ?>
</body>
</html>