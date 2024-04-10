<?php 

//var_dump($_POST); //ver dados

echo "<h2>Dados do Usuario</h2>";
echo "<hr>";

echo "<strong>Nome: </strong>". $_POST['nome'] . "<br>";
echo "<strong>E-mail: </strong>". $_POST['email']. "<br>";
echo "<strong>telefone: </strong>". $_POST['telefone']. "<br>";
echo "<strong>cep: </strong>". $_POST['cep']. "<br>";
echo "<strong>Endereço: </strong>". $_POST['Endereço']. "<br>";
echo "<strong>numero: </strong>". $_POST['numero']. "<br>";
echo "<strong>complemento: </strong>". $_POST['complemento']. "<br>";
echo "<strong>bairro: </strong>". $_POST['bairro']. "<br>";
echo "<strong>cidade: </strong>". $_POST['cidade']. "<br>";
echo "<strong>estado: </strong>". $_POST['estado']. "<br>";
echo "<strong>genero: </strong>". $_POST['genero']. "<br>";
echo "<strong>cursos: </strong>". implode(", ", $_POST['cursos']) . "<br>";

echo "<strong>sugestao: </strong>". $_POST['sugestao']. "<br>";
