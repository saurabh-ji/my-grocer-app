
st = "database-1.cpg64aoca28q.ap-southeast-1.rds.amazonaws.com";
$user = "admin";
$pass = "saurabh321";
$db = "dadabase-1";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

