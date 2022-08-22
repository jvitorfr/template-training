<?php
$conn = mysqli_connect("db","root", "root",'template_training') or die(mysqli_error());
echo '<h2> CONEXÃO REALIZADA COM SUCESSO </h2>';
$conn->close();

