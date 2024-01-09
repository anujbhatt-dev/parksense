<?php
function calculateAvailableSpace($conn) {
    // Query to get the last entry count
    $lastEntryQuery = "SELECT count FROM x_entry ORDER BY time DESC LIMIT 1";
    $lastEntryResult = $conn->query($lastEntryQuery);

    // Query to get the last exit count
    $lastExitQuery = "SELECT count FROM x_out ORDER BY time DESC LIMIT 1";
    $lastExitResult = $conn->query($lastExitQuery);

    // Initialize counts with 0 if no records found
    $lastEntryCount = 0;
    $lastExitCount = 0;

    if ($lastEntryResult->num_rows > 0) {
        $lastEntryRow = $lastEntryResult->fetch_assoc();
        $lastEntryCount = $lastEntryRow['count'];
    }

    if ($lastExitResult->num_rows > 0) {
        $lastExitRow = $lastExitResult->fetch_assoc();
        $lastExitCount = $lastExitRow['count'];
    }

    // Assuming total space is a constant value
    $totalSpace = 50; // Replace with your actual total space value

    // Calculate available space
    $availableSpace = $totalSpace - $lastEntryCount + $lastExitCount;

    // Return the calculated available space
    return $availableSpace;
}
?>