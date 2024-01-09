<?php
function predictAvailability($conn) {
    // Get current timestamp and timestamps for 15 minutes ago
    $currentTimestamp = time();
    $fifteenMinutesAgo = $currentTimestamp - (15 * 60);

    // Query to get the last entry and exit records in the last 15 minutes
    $entryQuery = "SELECT * FROM x_entry WHERE time >= $fifteenMinutesAgo ORDER BY time DESC LIMIT 1";
    $exitQuery = "SELECT * FROM x_out WHERE time >= $fifteenMinutesAgo ORDER BY time DESC LIMIT 1";

    $entryResult = $conn->query($entryQuery);
    $exitResult = $conn->query($exitQuery);

    // Initialize counts with 0 if no records found
    $lastEntryCount = 0;
    $lastExitCount = 0;

    if ($entryResult->num_rows > 0) {
        $entryRow = $entryResult->fetch_assoc();
        $lastEntryCount = $entryRow['count'];
    }

    if ($exitResult->num_rows > 0) {
        $exitRow = $exitResult->fetch_assoc();
        $lastExitCount = $exitRow['count'];
    }

    // Assuming total space is a constant value
    $totalSpace = 50; // Replace with your actual total space value

    // Calculate available space
    $availableSpace = $totalSpace - $lastEntryCount + $lastExitCount;

    // Calculate probability based on available space
    $probability = $availableSpace / $totalSpace;

    // Return the calculated probability
    return $probability;
}

?> 


