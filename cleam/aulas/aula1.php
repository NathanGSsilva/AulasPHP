<html>
    <head>
        <meta charset="utf-8">
        <title>Aula de PHP</title>
    </head>
    <body>
        <h1> Aula 1 Senhores </h1>
        <!-- EXEMPLO CLIENTE SIDE -->
        <a href="javascript:;" id ="btnAlerta" >Mostrar Alerta</a>
        <script>
            const btnAlerta = document.getElementById("btnAlerta"); 
            btnAlerta.onclick = function(){
                alert("que deus te abençoe!");
            } 
        </script>

            <h2>A data de hoje é: <?php echo date("d/m/y H:i:s") ?> </h2>
    </body>
</html>
