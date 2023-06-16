<?php
include("conexao.php");

// Consulta para recuperar os nomes dos usuários cadastrados
$query = "SELECT nome FROM login";
$resultado = mysqli_query($conexao, $query);

if ($resultado) {
    // Exibe os nomes dos usuários cadastrados
     
    echo "<h1>Lista de Usuários Cadastrados</h1>";
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<li>" . $row['nome'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "Erro ao recuperar os usuários cadastrados.";
}
 
// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>
<style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg,orange,cyan);
        }

        div {
            background-color: rgba(0, 0, 0,0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }

        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        #entrar {
            display: block;
            margin: 0 auto;
            width: 150px;
            height: 40px;
            cursor: pointer; /* Adicionando efeito de mãozinha ao cursor */
            animation: neon-border 2s infinite;
        }

        @keyframes neon-border {
            0% {
                border-color: #ff00ff;
            }
            50% {
                border-color: #ff00ff;
            }
            100% {
                border-color: #ff00ff;
            }
        }
    </style>
