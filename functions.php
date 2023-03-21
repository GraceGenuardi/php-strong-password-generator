<!-- Milestone 2-spostare la logica e includere la pagina in index.php -->

<!-- LOGICA PHP -->
<?php
function generatePassword($length) {
    $characters = 'ASDFGLORMBNCCZXpelssncjnsjudwbdbksncn!@#$%^&*()_+|}{":?><,./;[\]\=-`~';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $password .= $characters[$index];
    }
    return $password;
}

if (isset($_GET['length'])) {
    $length = $_GET['length'];
    $password = generatePassword($length);
}
?>