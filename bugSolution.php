This code uses the MySQLi extension, which is the recommended alternative to the deprecated `mysql_*` functions.

```php
<?php
$conn = new mysqli("localhost", "user", "password", "mydatabase");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM mytable";
$result = $conn->query($sql);

if (!$result) {
die("Query failed: " . $conn->error);
}

while ($row = $result->fetch_assoc()) {
    print_r($row);
}

$conn->close();
?>
```

This updated code is secure, compatible with modern PHP versions, and avoids the use of deprecated functions.