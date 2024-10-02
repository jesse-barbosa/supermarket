<?php session_start();
include_once("../classe/Conexao.php");
include_once("../classe/VerificarLogin.php");
include_once("../classe/TrocarUrl.php");

$login = new VerificarLogin();
if(isset($_SESSION['nome']) and isset($_SESSION['senha'])){
	$_SESSION['nome'];
	$_SESSION['senha'];
?>
<!doctype html>
<html lang="pt-br">

<?php include_once("../include/head.php");?>

<body>
    <div class="container-fluid">
        <div class="row d-flex flex-row">
            <div class="col-1 col-md-2 bg-light p-0 rounded-5">
                <?php include_once("../include/menu.php");?>
            </div>
            <div class="col-10 vh-100 bg-gray p-0">
                <?php 
                $url = new TrocarUrl();
                $url->trocarUrl(@$_GET["tela"]);
                ?>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
<?php
/***** Não permite que a sessão seja reiniciada após logout do sistema *****/
 }else{
    unset($_SESSION["nome"]);
    unset($_SESSION["senha"]);
     header("Location: /TechPoint/admin/index.php");
     }
?>