<!-- This script can be used to access the ACM database and make a query. The
database username, password, and name must be provided, along with the query to
be made. This can be done in the following format:
http://www.csc.tntech.edu/acm/query.php?user=USERNAME&pass=PASSWORD&name=DB_NAME
&query=SQL_QUERY -->

<!DOCTYPE html>
<html>
<body>
<?php
$valueSeparator = " "; // Separator for values
$rowSeparator = "<pre>\n----------\n</pre>"; // Separator for rows
$connection = mysqli_connect("localhost", $_GET["user"], $_GET["pass"], "acm");

if (mysqli_connect_errno())
    echo "Failed to connect to MySQL: ".mysqli_connect_error();

$result = mysqli_query($connection, $_GET["query"]);

while ($row = mysqli_fetch_array($result, MYSQL_ASSOC))
{
    foreach ($row as $value)
        echo "<td>$value</td>$valueSeparator";
    
    echo "$rowSeparator";
}

mysqli_close($connection);
?>
</body>
</html>