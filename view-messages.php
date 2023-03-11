<?php
$file = "messages.txt";
if (file_exists($file)) {
    $data = file_get_contents($file);
    $messages = explode("\n", $data);
    foreach ($messages as $message) {
        $fields = explode(", ", $message);
        echo "<p>Name: $fields[0]<br>Email: $fields[1]<br>Message: $fields[2]</p>";
    }
} else {
    echo "No messages yet.";
}
?>
