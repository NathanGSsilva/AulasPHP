<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuarios</title>
</head>

<body>
    <h1>Formulario de Cadastro</h1>
    <p>Campos com (*) são de preenchimentos obrigatórios.</p>

    <form action="">
        <fieldset>
        <legend>Dados de Acesso</legend>
            <p>
                <label for="nome">Nome*: </label>
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
            </p>
            <p>
                <label for="email">Email*: </label>
                <input type="text" name="email" id="email" placeholder="Digite seu Email">
            </p>
            <p>
                <label for="senha">Senha*: </label>
                <input type="password" name="senha" id="senha">
            </p>

        </fieldset>
        <fieldset>
        <legend>Dados do Perfil</legend>

        <p>
            <label for="nasci">Data Nascimento</label>
            <input type="date" name="nasci" id="nasci">
        </p>
        <p>
            Foto Perfil <input type="file" name="foto" id="foto">
        </p>
        <p>
            <label for="hobby">Hobby
                <input type="checkbox" name="hobby" id="tv">TV
                <input type="checkbox" name="hobby" id="livro">Livro
                <input type="checkbox" name="hobby" id="musica">Musica
            </label>
        </p>
        <p>
            <label for="sexo">Sexo
                <input type="radio" name="sexo" id="masculino">Masculino
                <input type="radio" name="sexo" id="feminino">Feminino
            </label>
        </p>
        <p>
            <label for="estado">Estado</label>
            <select name="estado" id="estado" placeholder="SP">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
        </p>
        <p>
            <label for="msg">Mensagem</label>
            <br>
            <textarea name="msg" id="msg" cols="60" rows="10"></textarea>
        </p>

        </fieldset>
        <br>
        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>