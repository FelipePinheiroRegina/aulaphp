<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> 
    <body class="container">
        <h1>Novo Aluno</h1>
        <form action="listagem.php" method="post">
            Matricula:<input type="text" name="matricula" class="form-control"/><br/>
            Nome:<input type="text" name="nome" class="form-control"/><br/>
            Entrada:<input type="number" name="entrada" class="form-control"/><br/>
            <input type="submit" value="Adicionar" class="btn btn-primary"/>
        </form>

        <?php
            require_once 'config.php';
            function incluir($matricula, $nome, $entrada){
                global $dsn, $user, $pass;
                $mensagem = "";
                try{
                    $pdo = new PDO($dsn, $user, $pass,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
                    $sql = "insert into alunos values (?,?,?)";
                    $stm = $pdo->prepare($sql);
                    $stm->execute([$matricula, $nome, $entrada]);
                    $mensagem = "Aluno Cadastrado com Sucesso!";
                }catch(PDOException $e){
                    $mensagem = "Erro ao incluir aluno.";
                }
                finally{
                    if($pdo){
                        $pdo = null;
                    }
                }
                return $mensagem;
            }    
        ?>
        
    </body>  
</html>