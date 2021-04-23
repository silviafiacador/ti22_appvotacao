<?php
$bancodados = 'votacao';
$servidor = 'localhost';
$usuario = 'root';
$senha = 'usbw';

$conn = new mysqli($servidor, $usuario, $senha, $banco);
if (!$conn) {
?>
    <!-- javascript -->
    <script>
        alert("Erro na conexão! Chame o suporte!");
    </script>
<?php
}
?>