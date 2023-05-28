<?php
class Pessoa{
    private $nome;
    private $idade;

    public function getNome () {return $this->nome;}
    public function setNome ($nome) {$this->nome = $nome;}
    public function getIdade () {return $this->idade;}
    public function setIdade ($idade) {$this->idade = $idade;}

    public function exibirDados(){
        echo "<h2>$this->nome tem $this->idade ano (s)</h2>";
    }

    public function __construct($nome = "", $idade = 0){
        this->$nome = $nome;
        this->$idade = $idade;
    }

    function __destruct(){
        echo "$this->nome foi removido(a) .";
    }
}


//Herança
require_once "pessoa";
class Profissional extends Pessoa {
    private $profissao;
    function __construct($nome="", $idade=0, $profissao="";){
        parent::__construct($nome, $idade);
        $this->profissao = $profissao;
    }
public function getProfissao() {return $this->profissao;}
public function setProfissao($profissao) {$this->profissao = $profissao;}
    
    public function exibirDados() {   //Polimorfismo
        parent::exibirDados();
        echo "Trabalha como $this->profissao";
    }    
}

$p1 = new Pessoa("Felipe", 24);
$p1->exibirDados();

// ESTANCIANDO UM OBJETO

<?php
class Fruta{
    var $nome;
    var $tipo;

    public function __construct(){ } 
    
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
}

$fruta1 = new Fruta();
$fruta1->setNome("Morango");
$fruta1->setTipo("Vermelho");
echo $fruta1->getNome();
echo $fruta1->getTipo();

//A Classe PDO e seus métodos

PDO {
    public __construct ( string $dsn [, string $username [, string $passwd [, array $options ]]] )
    public beginTransaction ( void ) : bool
    public commit ( void ) : bool
    public errorCode ( void ) : string
    public errorInfo ( void ) : array
    public exec ( string $statement ) : int
    public getAttribute ( int $attribute ) : mixed
    public static getAvailableDrivers ( void ) : array
    public inTransaction ( void ) : bool
    public lastInsertId ([ string $name = NULL ] ) : string
    public prepare ( string $statement [, array $driver_options = array() ] ) : PDOStatement
    public query ( string $statement ) : PDOStatement
    public quote ( string $string [, int $parameter_type = PDO::PARAM_STR ] ) : string
    public rollBack ( void ) : bool
    public setAttribute ( int $attribute , mixed $value ) : bool
}

PDOStatement implements Traversable {
    /* Propriedades */
    readonly string $queryString;

    /* Métodos */
    public bindColumn ( mixed $column , mixed &$param [, int $type [, int $maxlen [, mixed $driverdata ]]] ) : bool
    public bindParam ( mixed $parameter , mixed &$variable [, int $data_type = PDO::PARAM_STR [, int $length [, mixed $driver_options ]]] ) : bool
    public bindValue ( mixed $parameter , mixed $value [, int $data_type = PDO::PARAM_STR ] ) : bool
    public closeCursor ( void ) : bool
    public columnCount ( void ) : int
    public debugDumpParams ( void ) : void
    public errorCode ( void ) : string
    public errorInfo ( void ) : array
    public execute ([ array $input_parameters = NULL ] ) : bool
    public fetch ([ int $fetch_style [, int $cursor_orientation = PDO::FETCH_ORI_NEXT [, int       $cursor_offset = 0 ]]] ) : mixed
    public fetchAll ([ int $fetch_style [, mixed $fetch_argument [, array $ctor_args = array() ]]] ) : array
    public fetchColumn ([ int $column_number = 0 ] ) : mixed
    public fetchObject ([ string $class_name = "stdClass" [, array $ctor_args ]] ) : mixed
    public getAttribute ( int $attribute ) : mixed
    public getColumnMeta ( int $column ) : array
    public nextRowset ( void ) : bool
    public rowCount ( void ) : int
    public setAttribute ( int $attribute , mixed $value ) : bool
    public setFetchMode ( int $mode ) : bool
}

/*Método EXEC
Este método, pertencente à Classe PDO, executa uma instrução SQL e retorna o número de linhas afetadas pela instrução. Sua sintaxe pode ser vista a seguir:*/
<?php
/*a variável $dsn, abaixo, corresponde à instação da classe PDO, inicializada na conexão com o BD*/
$qtdeLinhasAfetadas = $dsn->exec("Delete From Cliente Where codigo_cliente = 1");
echo "Quantidade de linhas afetadas: " . $qtdeLinhasAfetadas

/*O código apresentado é funcional e complementar ao código demonstrado anteriormente, uma vez que o método Exec deve ser invocado a partir da instância para a Classe PDO (correspondente à variável $dsn em nosso código).

Em relação às linhas afetadas, tal informação é útil para confirmarmos se a operação foi executada com sucesso. Logo, podemos utilizar uma estrutura de decisão, como “if”, para verificar o conteúdo da variável $qtdeLinhasAfetadas. Caso nenhuma linha tenha sido afetada, será retornado 0 (zero). Além disso, Exec pode retornar ainda o booleano FALSE ou então “” (vazio).

Por fim, cabe destacar que esse método não retorna à quantidade de linhas afetadas quando for executada uma instrução SELECT, o que pode ser feito através do próximo método que veremos, o Query<.*/

/*Método Query
O método Query, também pertencente à Classe PDO, tem função parecida com o método Exec. Entretanto, ele, além de executar uma instrução SQL, retorna – quando houver – um conjunto de resultados (result set) como um objeto PDOStatement. Em caso de falhas, é retornado o booleano FALSE. Vejamos um exemplo de sua utilização:*/

<?php
$instrucaoSQL = "Select nome, cpf, telefone From Cliente";
//a variável $dsn, abaixo, corresponde à instação da classe PDO, inicializada na conexão com o BD
$resultSet = $dsn->query($sql);
while ($row = $resultSet->fetch()) {
  echo $row['nome'] . "\t";
  echo $row['cpf'] . "\t";
  echo $row['telefone'] . "\n";
}

/*Perceba que, como o método retorna um objeto, é possível acessar seus índices na forma de índices de array. Para isso, foi utilizado o método fetch, um laço while que percorreu o result set retornado, imprimindo os dados selecionados.

A respeito do método fetch, que retorna um resultset no formato de array numérico e associativo, há ainda outros disponíveis: o fetchAll, fetchColumn e fetchObject. Além disso, esse método pode receber como parâmetro o tipo de retorno, ou seja, se deverá retornar um array associativo, numérico, associativo e numérico (que é o seu padrão por omissão), entre outros. Veja o exemplo de sua utilização retornando um array associativo:*/
<?php
//...
while ($row = $resultSet->fetch(PDO::FETCH_ASSOC)) {
  //...
}