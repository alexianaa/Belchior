<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <script src="../js/scripts.js"></script>
    </head>
    
    <body>
        <?php 
        
            $nota = $_POST('qnt_estrela');

            $con=mysqli_connect("localhost","root","","avaliacao_lojas");


            $run = mysqli_query($con,$sql);
            $foundnum = mysqli_num_rows($run);
            $result_avaliacoes = "INSERT INTO avaliacoes (qnt_estrela, created) VALUES ('estrela', NOW())";
            $result_avaliacoes = mysqli_query($con, $result_avaliacoes);
                    
            mysqli_close($con);
        ?>
    </body>
</html>
