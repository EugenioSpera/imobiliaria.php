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

    $nome = mysqli_real_escape_string($conn, $_POST["Nome"]);

    $email = mysqli_real_escape_string($conn, $_POST["Email"]);

    $telefone = mysqli_real_escape_string($conn, $_POST["Telefone"]);

    $endereco = mysqli_real_escape_string($conn, $_POST["Endereco"]);



    /* Move_uploades_files = Mover um arquivo enviado via formulário HTML de um local temporário para um destino permanente no servidor. Ela verifica se o arquivo foi enviado via HTTP POST e se é um arquivo de upload válido. */
    $sql = "INSERT INTO clientes (nome, email, telefone, endereco) VALUES ( '$nome', '$email' , '$telefone' , '$endereco')";

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
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animacao.css">

    <!-- BootsTrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <header>

        <div class="img-header">

            <nav>

                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">Quem Somos</a></li>                    
                    <li><a href="missao.php">Missão,Visão e Valores</a></li>                    
                    <li><a href="cadastro-de-propriedades.php">Cadastro de Propriedades</a></li>
                    <li><a href="imovel.php"> Escolha o seu Imóvel</a></li>
                </ul>

            </nav>

        </div>


    </header>


    <main>



        <div class="imobiliaria">


            <div class="background-image-imobiliria">

                <!--  <img src="img/img-predio.jpg" alt=""> -->
            </div>

            <div class="container-texto">
                <h2>Imobiliaria Senac</h2>
                <p>Conheça Nossos Preços e realize <br> o sonho de ter sua casa própria!</p>


            </div>
        </div>


        <div class="pai-cliente">

            <div class="clientes">

                <h2>Cadastro de Clientes</h2>

                <div class="img-background-form">

                </div>


                <form class="formulario" method="POST" enctype="multipart/form-data">

                    <label for="Nome">Nome</label>
                    <input type="text" id="Nome" name="Nome" required>

                    <label for="Email">Email</label>
                    <input type="text" id="Email" name="Email">

                    <label for="Telefone">Telefone</label>
                    <input type="text" id="Telefone" name="Telefone" required>

                    <label for="Endereco">Endereço</label>
                    <input type="text" id="Endereco" name="Endereco" required>

                    <button class="enviar">Enviar</button>


                </form>

            </div>

        </div>

    </main>
    
    <footer>
        
    </footer>


        


    <!-- BootsTrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>