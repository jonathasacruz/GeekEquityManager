<?PHP

$servidor = "localhost";
$usuario = "admin";
$senha = "admin";
$dbname = "gem";

$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$login = $_POST['login'];
$senha= $_POST['senha'];


$sql = "INSERT INTO usuarios (login, senha) VALUES ('$login','$senha')";

//mysql_query($sql,$conn);



if (mysqli_query($conn, $sql)) {
    echo '<META HTTP-EQUIV="Refresh" Content="1; URL=../view/cadastro_sucesso.html">';
} else {
    echo '<META HTTP-EQUIV="Refresh" Content="1; URL=../view/erro.html">';
}
mysqli_close($conn);

/*
$_GET['nome'] = $nome;
$_GET['login'] = $login;
$_GET['email'] = $email;
$_GET['senha'] = $senha_cad;
*/
?>