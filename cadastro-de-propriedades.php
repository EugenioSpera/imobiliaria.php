<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "imobiliaria";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Erro ao conectar ao banco de dados" . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $endereco = mysqli_real_escape_string($conn, $_POST["endereco"]);

    $tipo = mysqli_real_escape_string($conn, $_POST["tipo"]);

    $preco = mysqli_real_escape_string($conn, $_POST["preco"]);

    $descricao = mysqli_real_escape_string($conn, $_POST["descricao"]);

    $diretorio_imagens = "uploads/"; /* Diretorio onde irão ficar as imagens */
    
    $imagem_nome = basename($_FILES["imagem"] ["name"]);/* Variavel que vai receber o nome da imagem enviada pelo formulário */

    $destino = $diretorio_imagens . $imagem_nome;/* A variavel $destino irá receber o diretorio e o nome da imagem */



    /* Move_uploades_files = Mover um arquivo enviado via formulário HTML de um local temporário para um destino permanente no servidor. Ela verifica se o arquivo foi enviado via HTTP POST e se é um arquivo de upload válido. */
    $sql = "INSERT INTO propriedades (endereco, tipo, preco, descricao, imagem) VALUES ( '$endereco', '$tipo' , '$preco' , '$descricao', '$imagem')";

    if (mysqli_query($conn, $sql)) {
        echo "Novo Cliente Cadastrado com Sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
    }

    /* Fechar conexão com o banco de dados */
    mysqli_close($conn);
}



?>






<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">



    <!-- BootsTrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <header>

        <div class="img-header">

            <ul>
                <li> <a href="./index.php">HOME</a></li>
                <li>Apartamento</li>
                <li>Casa </a></li>
                <li>Terreno</li>
                <li>Venda</li>
                <li>Aluguel</li>
            </ul>

        </div>


    </header>


    <main>

        <div class="pai-cliente">

            <div class="img-casa-background-1"></div>

            <div class="clientes">

                <h2>Cadastro de Propriedade</h2>

                <div class="img-background-form"></div>

                <form method="POST" enctype="multipart/form-data" class="formulario">
                    

                    <label for="endereco">Endereco</label>
                    <input type="text" id="endereco" name="endereco" required>

                    <label for="tipo">Tipo</label>
                    <select name="tipo" id="tipo" required>
                    <option value="venda">Venda</option>
                    <option value="locacao">Locação</option>                    
                    </select>

                    <label for="preco">Preço</label>
                    <input type="text" id="preco" name="preco" required>

                    <label for="descricao">Descrição</label>
                    <input type="text" id="descricao" name="descricao" required>

                    <label for="imagem">Imagem da Propriedade</label>
                    <input type="file" id="imagem" name="imagem" required>

                    <button class="enviar">Enviar</button>
                </form>

            </div>


        </div>

    </main>






    <!-- BootsTrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>