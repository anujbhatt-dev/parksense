<?php
        // Fetch data from the database and display it in a table
        $sql = "SELECT * FROM x_entry";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table>';
            echo '<tr><th>Time</th><th>Count</th></tr>';

            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['time'] . '</td>';
                echo '<td>' . $row['count'] . '</td>';
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo '<p>No data found.</p>';
        }

?>