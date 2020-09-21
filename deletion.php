
<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "booklist";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$bookname = $_POST['bookname'];
// sql to delete a record
$sql = "DELETE FROM booklist WHERE bookname = '$bookname'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header('location:delete.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>