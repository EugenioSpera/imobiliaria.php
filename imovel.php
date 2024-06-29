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
                <li>Casa</li>
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
                    <input type="text" id="tipo" name="tipo">

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