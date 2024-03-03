
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
            $sql = "SELECT monday, tuesday, wednesday, thursday, friday, saturday, sunday FROM schedule";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // Виведення стилів та даних користувачів
                echo "<style>
                        .day-container {
                            margin: 40px;
                            display: flex;
                            flex-direction: row;
                            justify-content: space-around;
                            gap: 0px;
                        }
        
                        .column {
                            display: flex;
                            flex-direction: column;
                            justify-content: space-around;
                            
                        }
        
                        .day {
                            margin-bottom: 10px;
                            font-size: 25px;
                            font-weight: 400;
                        }
                        .column1 {
                            margin-right: 30px;
                        }
                        .column2 {
                            
                        }
                        .schedule-topic {
                            margin-top: 0;
                            font-size: 40px;
                        }
                        .column-container {
                            display: flex;
                            flex-direction: row;
                            
                        }
                        @media (max-width: 1400px) {
                            .day {
                                font-size: 20px;
                            }
                            
                        }
                        @media (max-width: 768px) {
                            .day {
                                font-size: 14px
                            }
                        }
                      </style>";
        
                echo "<div class='day-container'>";
                while($row = $result->fetch_assoc()) {
                    echo "<div class='main-conteiner'>";
                        echo "<div class='schedule-container'>";
                        echo "<h1 class='schedule-topic'>Графік роботи</h1>";
                        echo "</div>";
                        echo "<div class='column-container'>";
                        echo "<div class='column . column1'>";
                        echo '<div class="day">Понеділок</div><div class="day">Вівторок</div><div class="day">Середа</div><div class="day">Четвер</div><div class="day">П\'ятниця</div><div class="day">Субота</div><div class="day">Неділя</div>';
                        echo "</div>";
            
                        echo "<div class='column . column2'>";
                        echo "<div class='day'>" . $row["monday"] . "</div><div class='day'>" . $row["tuesday"] . "</div><div class='day'>" . $row["wednesday"] . "</div><div class='day'>" . $row["thursday"] . "</div><div class='day'>" . $row["friday"] . "</div><div class='day'>" . $row["saturday"] . "</div><div class='day'>" . $row["sunday"] .'</div>';
                        echo "</div>";
                        echo "</div>";
                    echo "</div>";
                }
        
                  "</div>";
            } else {
                echo "0 results";
            }
            $conn->close();
            //type2


            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Отримання даних з бази даних
            $sqls = "SELECT kids, teenagers, adults FROM prices";
            $results = $conn->query($sqls);
            if ($results->num_rows > 0) {
                // Виведення стилів та даних користувачів
                echo "<style>
                        .prices-container {
                            display: flex;
                            flex-direction: column;
                        }
        
                        .column {
                            display: flex;
                            flex-direction: column;
                            justify-content: space-around;
                            
                        }
        
                        .price {
                            margin-bottom: 10px;
                            font-size: 25px;
                            font-weight: 400;
                        }
                        .column1 {
                            margin-right: 30px;
                        }
                        .column2 {
                            
                        }
                        .schedule-topic {
                            
                            font-size: 40px;
                        }
                        .container-info {
                            display: flex;
                            flex-direction: row;
                        }
                        @media (max-width: 1400px) {
                            .schedule-topic {
                                font-size: 30px;
                            }
                            .price {
                                font-size: 20px;
                            }
                        }
                        @media (max-width: 768px) {
                            .schedule-topic {
                                font-size: 20px;
                            }
                            .price {
                                font-size: 14px;
                            }
                            .day-container {
                                justify-content: space-between;
                            }
                        }
                        @media (max-width: 530px) {
                            .day-container {
                                flex-direction: column;
                                gap: 30px;
                                align-items: center;
                                text-align: center;
                            }
                        }
                      </style>";

               
             
                echo "<div class='prices-container'>";
                
                while($row = $results->fetch_assoc()) {
                    echo "<div class='topic-div'>";
                    echo "<h1 class='schedule-topic'>Ціни на квитки</h1>";
                    echo "</div>";
                    echo "<div class='container-info'>";
                    echo "<div class='column . column1'>";
                         echo '<div class="price">Діти(до 4-х років)</div><div class="price">Підлітки</div><div class="price">Дорослі</div>';
                    echo "</div>";
        
                    echo "<div class='column . column2'>";
                        echo "<div class='price'>" . $row["kids"] . "</div><div class='price'>" . $row["teenagers"] . "</div><div class='price'>" . $row["adults"] . "</div>";
                    echo "</div>";
                    
                }
                echo "</div>";
                echo  "</div>";
                echo "</div>";
            } else {
                echo "0 results";
            }
            $conn->close();

        ?>
