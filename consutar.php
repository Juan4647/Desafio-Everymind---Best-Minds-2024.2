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
    <section class="table">
        <h2>Lista de Produtos</h2>
        <?php
        include("db.php");
        $sql = "SELECT * FROM produtos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                    
                    </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["CodProduto"] . "</td>
                        <td>" . $row["NomeProduto"] . "</td>
                        <td>" . $row["DescProduto"] . "</td>
                        <td>" . $row["PrecoProduto"] . "</td>
                       
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "0 resultados";
        }
        ?>
    </section>

   
    <footer>
        <div>
            <p>&copy; 2024 Nunes Sport</p>
        </div>
    </footer>
</body>
</body>

<html></html>
