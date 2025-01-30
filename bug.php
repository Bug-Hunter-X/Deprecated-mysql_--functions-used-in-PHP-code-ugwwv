This code uses the `mysql_*` functions, which are deprecated and removed in PHP 7.0 and later.  Using deprecated functions can lead to security vulnerabilities and make your code incompatible with newer PHP versions.

```php
<?php
$conn = mysql_connect("localhost", "user", "password");
if (!$conn) {
die("Connection failed: " . mysql_error());
}

mysql_select_db("mydatabase", $conn);

$sql = "SELECT * FROM mytable";
$result = mysql_query($sql, $conn);

if (!$result) {
die("Query failed: " . mysql_error());
}

while ($row = mysql_fetch_assoc($result)) {
    print_r($row);
}

mysql_close($conn);
?>
```