<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>
</head>

<body>
    <!-- nome, email, senha, endereço, telefone, genero( m, f, nd),  -->

    <h1>Cadastro de Usuarios</h1>

    <form action="" method="post">

        <fieldset>
            <legend>Dados de Acesso</legend>

            <p>
                <label for="nome">Nome: </label>
                <input name="nome" type="text" id="nome">
            </p>
            <p>
                <label for="email">Email: </label>
                <input type="text" name="email" id="email">
            </p>
            <p>
                <label for="senha">Senha: </label>
                <input type="password" name="senha" id="senha">
            </p>
            <p>
                <label for="telefone">Telefone: </label>
                <input type="text" name="telefone" id="telefone">
            </p>

        </fieldset>
        <fieldset>
            <legend>Dados complementares</legend>

            <p>
                <label for="cep">CEP: </label>
                <input type="text" name="cep" id="cep">
            </p>
            <p>
                <label for="Endereço">Endereço: </label>
                <input type="text" name="Endereço" id="Endereço">

                <label for="numero">Numero: </label>
                <input type="text" name="numero" id="numero">
            </p>

            <p>
                <label for="complemento">Complemento: </label>
                <input type="text" name="omplemento" id="omplemento">
            </p>
            <p>
                <label for="bairro">Bairro: </label>
                <input type="text" name="bairro" id="bairro">
            </p>
            <p>
                <label for="cidade">Cidade: </label>
                <input type="text" name="cidade" id="cidade">
            </p>

            <p>
                <label for="estado">Estado: </label>
                <select name="estado" id="estado">
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
                Genero: 
                <label>
                    <input type="radio" name="genero" id="maculino" value="Maculino">Masculino
                </label>

                <label>
                    <input type="radio" name="genero" id="feminino" value="Feminino">Feminino
                </label>
                <label>
                    <input type="radio" name="genero" id="pnr" value="Prefiro não responder">Prefiro não responder
                </label>
            </p>

        </fieldset>
        <fieldset>
            <legend>Cursos</legend>
            
            <p>
                <label>
                    <input type="checkbox" name="cursos" id="Informática Básica">
                    Informática Básica
                </label>
            </p>
            <p>    
                <label>
                    <input type="checkbox" name="cursos" id="PHP">
                    PHP
                </label>
            </p>
            <p>   
                <label>
                    <input type="checkbox" name="cursos" id="HTML 5 & CSS">
                    HTML 5 & CSS
                </label>
            </p>
            <p>    
                <label>
                    <input type="checkbox" name="cursos" id="Javascript">
                    Javascript
                </label>
            </p>
            <p>
                <label>Sugestão: </label>
                <br>
                <textarea name="sugestao" placeholder="Digite sua sugestão de cursos ou deixe uma observação.." cols="50" rows="5"></textarea>
            </p>

        </fieldset>

        <p>
            <label>
                <input type="checkbox" name="newletter" value="sim">
                Aceita receber nossas novidades?
            </label>
        </p>
        <p>
            <input type="submit" value="Cadastrar">
            <button type="submit">Cadastrar</button>
        </p>

    </form>
</body>

</html>