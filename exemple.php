<?php


       mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $mysqli = new mysqli("localhost", "root", "root", "php");
        // 1 create a connection
        

        //$mysqli->query("CREATE TABLE student(nr INT, name VARCHAR(255))");

       $query = "select * from student";
        
        //$stmt = $mysqli->prepare("DELETE from student where nr=2 and name='Frank' limit 3");
        
        //printf("Fehler: %d.\n", $stmt->errno);

        /* Anweisung schließen */
      

        // 3 execute statement/query

        //printf("Fehler: %d.\n", $stmt->errno);

        /* Anweisung schließen */
        //$stmt->close();

        // close connection

        $result = $mysqli->query($query);

        // Check if the query was successful
        if ($result) {
            // Fetch the data as an associative array
            $data = $result->fetch_all(MYSQLI_ASSOC);
        
            // Process the data
            foreach ($data as $row) {
                // Access individual fields using column names
                $nr = $row['nr'];
                $name = $row['name'];
        
                // Perform further operations with the data
                echo "Nr: " . $nr . ", Name: " . $name , "\n";
            }
        
            // Free the result set
            $result->free();
        } else {
            // Handle query error
            echo "Error executing query: " . $mysqli->error;
        }
        
        // Close the database connection
        $mysqli->close();

        echo "Query executed....";
    



?>