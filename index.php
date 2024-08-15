<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="consutar.php">Consultar</a></li>
                <li><a href="editar.php">Editar</a></li>
            </ul>
        </nav>
    </header>

    <section class="titulo">
        <h1>Nunes Sport</h1>
    </section>

    <section>
        <form action="cx.php" method="post" class="form">
            <h2>Cadastro de Produto</h2>

            <label for="nome">Nome do Produto:</label>
            <input type="text" id="nome" name="nome" >

            <label for="descricao">Descrição do Produto:</label>
            <textarea id="descricao" name="descricao" ></textarea>

            <label for="preco">Preço do Produto:</label>
            <input type="number" id="preco" name="preco">

            <input type="submit" value="Cadastrar Produto">
        </form>
    </section>

    <footer>
        <div>
            <p>&copy; 2024 Nunes Sport</p>
        </div>
    </footer>
</body>
</body>

<html>