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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <header>

        <div class="img-header">

            <ul>
                <li>Casa</li>
                <li>Apartamento</li>
                <li> <a href="./cadastro-de-propriedades.php"> Propriedades </a></li>
                <li href="#">Terreno</li>
                <li>Venda</li>
                <li>Aluguel</li>
            </ul>

        </div>


    </header>


    <main>

        <div class="clientes">

            <h2>Cadastro de Propriedades</h2>

            <form method="POST" enctype="multipart/form-data">


                <label for="codigo">Codigo</label>
                <input type="text" id="codigo" name="codigo" required>

                <label for="Nome">Nome</label>
                <input type="text" id="Nome" name="Nome" required>

                <label for="Email">Email</label>
                <input type="text" id="Email" name="Email">

                <label for="Telefone">Telefone</label>
                <input type="text" id="Telefone" name="Telefone" required>
                
                <label for="Endereco">Endereço</label>
                <input type="text" id="Endereco" name="Endereco" required>

                <label for="disponivel">Disponivel Para a Venda?</label>
                <input type="checkbox" id="disponivel" name="disponivel">

                <button class="enviar">Enviar</button>
        </div>




        </form>

    </main>






    <!-- BootsTrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>