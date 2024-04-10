<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão de HTML e CSS</title>

    <style>

        .mes{

            border-collapse: collapse;
        }

        .mes thead{
            background-color: #ededed;
        }
        
        .mes caption{
            font-size: 38px;
            font-weight: bold;
            border: 1px solid gray;
        }

        .mes th, .mes td{
            border: 1px solid gray;
            text-align: center;
            font-size: 30px;
        };



    </style>

</head>
<body>

    <h1>Titulo principal</h1>
    <h2>Subtitulo</h2>
    <h3>e assim vai</h3>

    <p>Lorem <strong>aqui em negrito (<.strong> <./strong>) </strong>, <em>aqui em italico (<.em><./em>)</em> Quibusdam at sed harum quae quam provident cupiditate hic nesciunt quod. Quod.</p>

    <hr>
    <br>

    <h2>Lista 1 com shortECHO</h2>
    <ul>
        <?php for ($cont = 1; $cont <= 10; $cont++): ?> 

            <li>Item <?= $cont ?> </li>

        <?php endfor; ?>
    </ul>

    <h2>Lista 2 normal</h2>
    <ul>
        <?php for ($cont = 1; $cont <= 10; $cont++): ?> 

            <li>Item <?php echo $cont ?> </li>

        <?php endfor; ?>
    </ul>

    <h2>Lista nao ordenada</h2>
    <ol>
        <li>Item</li>
        <li>Item</li>
        <li>Item</li>
    </ol>

    <br>
    <hr>
    <br>

    <h2>Tabela</h2>

    <table class="mes">
        <!-- Tr = tag de linha / Td = tag de coluna 
        Th dentro do cabeçalho, td dentro do corpo -->
        <caption>Março - 2024</caption>
        <thead>
            <tr>
                <th>D</th>
                <th>S</th>
                <th>T</th>
                <th>Q</th>
                <th>Q</th>
                <th>S</th>
                <th>S</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td>9</td>
            </tr>
            <tr>
                <td>10</td>
                <td>11</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
                <td>15</td>
                <td>16</td>
            </tr>
            <tr>
                <td>17</td>
                <td>18</td>
                <td>19</td>
                <td>20</td>
                <td>21</td>
                <td>22</td>
                <td>23</td>
            </tr>
            <tr>
                <td>24</td>
                <td>25</td>
                <td>26</td>
                <td>27</td>
                <td>28</td>
                <td>29</td>
                <td>30</td>
            </tr>
            <tr>
                <td>31</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
            
</body>
</html>