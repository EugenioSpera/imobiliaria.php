<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipoImovel = $_POST['tipo_imovel'];
    $opcao = $_POST['opcao'];

    echo "Tipo de Imóvel escolhido: " . $tipoImovel . "<br>";
    echo "Opção escolhida: " . $opcao;
}
?>  


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Imobiliaria</title>

    
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">



    <!-- BootsTrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Incluindo jQuery para facilitar a manipulação de eventos -->
    <script>
        // Função JavaScript para mostrar/esconder opções de acordo com o tipo de imóvel selecionado
        $(document).ready(function() {
            $('#tipoImovel').change(function() {
                var tipoSelecionado = $(this).val();

                if (tipoSelecionado === 'apartamento' || tipoSelecionado === 'casa' || tipoSelecionado === 'terreno') {
                    $('#opcao_locacao').show();
                } else {
                    $('#opcao_locacao').hide();
                }
            });
        });
    </script> 
</head>

<body>

    <header>

        <div class="img-header">

            <ul class="menu-nav-imovel">
                <li> <a href="./index.php">HOME</a></li>
                <li><a href="imovel.php"><span class="menu-imovel">Escolha o seu imóvel</span></a></li>

            </ul>

        </div>


    </header>


    <main>
        <div class="form-imovel">
            <form action="processa_formulario.php" method="post">
                <label for="tipoImovel">Tipo de Imóvel:</label>
                <select name="tipoImovel" id="tipoImovel">
                    <option value="" disabled selected>Escolha uma opção</option>
                    <option value="apartamento">Apartamento</option>
                    <option value="casa">Casa</option>
                    <option value="terreno">Terreno</option>
                </select>
                <br><br>

                <div id="opcao_locacao">
                    <label for="opcao">Opção:</label>
                    <select name="opcao" id="opcao">
                        <option value="" disabled selected>Escolha uma opção</option>
                        <option value="locacao">Locação</option>
                        <option value="venda">Venda</option>
                    </select>
                </div>

                <br><br>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </main>


    <footer>
        <div class="links">
            <ul>
                <li>
                    <i class="fa-brands fa-square-instagram"></i>
                    <a href="link" target="_blank">Instagram</a>
                </li>

                <li>
                    <i class="fa-brands fa-facebook"></i>
                    <a href="link" target="_blank">Facebook</a>
                </li>

                <li>
                    <i class="fa-brands fa-youtube"></i>
                    <a href="link" target="_blank">Yotube</a>
                </li>

                <li>
                    <i class="fa-brands fa-whatsapp"></i>
                    <a href="link" target="_blank">Whatsapp</a>
                </li>
            </ul>
        </div>
    </footer>






    <!-- BootsTrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>