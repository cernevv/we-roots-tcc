<?
    $localhost = "localhost";
    $user = "root";
    $passw = "";
    $banco = "cadastro";

    $conecta = mysqli_connect($localhost, $user, $passw, $banco);

    $sql = mysqli_query($conecta, "SELECT * FROM usuário");

    echo mysqli_num_rows($sql);

?>