<?PHP


$servidor = "localhost";
$usuario = "admin";
$senha = "admin";
$dbname = "gem";

$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$nome = $_POST['nome'];
$replyto = $_POST['replyto'];
$comentarios = $_POST['comentarios'];


$sql = "INSERT INTO contato (nome, replyto, comentarios) VALUES ('$nome','$replyto', '$comentarios')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>