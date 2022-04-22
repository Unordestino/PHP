# Banco de Dados
* São coleções organizadas de dados que relacionam de forma a criar algum sentido (informação). Essa coleção de
dados é generica por um sistema que garante que esses dados permaneçam íntegros e atendam a alguns principios
básicos que veremos mais para frente.

* Esses Sistemas são chamados de sistemas gerenciadores de banco de dados (SGBD) e surgiram
na década de 70 e na década de 80 eles já dominavam o mercado.

* São de vital importância para empresas, e há duas décadas se 
tornaram a principal peça dos sistemas de informação.

# Modelos de Banco de Dados
* Esses conjuntos de dados organizados ao qual nos referimos
porém ser organizadas de forma diferentes e chamamos estas formas de modelos

* Os principais modelos são: Modelo Plano, Modelo em Rede, 
Modelo Hierárquico, Modelo Relacional, Modelo Orientado
a obejetos e Modelo Objeto-Relacional.

* O modelo mais utilizado é o medolo relacional que possui três componentes principais: 
> Uma coleção de estruturas de dados, nomeadamente relações, ou informalmente tabelas.
>
>Uma coleção dos operadores: álgebra e o cálculo relacionais
>
> Uma coleção de restrições de integridade, defenindo o conjunto
> consistente de estados de base de dados e de alterações de estados.

<hr>

* Função que limpara string para evitar sql injection: ```     $email = $mysqli->escape_string($_POST['email']) ```

# Modelo Relacional
* Esse modelo baseia-se em dois conceitos: Conceito de entidade e relação
> Uma entidade é um elemento caracterizado pelos dados que são 
> recolhidos na sua identificação vulgarmente designado por tabela.
> Na construção da tabela identificam-se os dados da entidade.
> A atribuição valores a uma entidade constroi um registro da tabela

* A relação determina o modo como cada registro de cada tabela se
associa a registros de outras tabelas.

* A arquitetura de um banco de dados relacional pode ser descrita de maneira informal ou formal
> Informal - Aspectos Práticos e termos: tabela, linha e coluna

> Formal - Semântica formal do modelo e termos: relação (tabela), tupla (linha) e atributo (coluna)

# Chave estrangeira

Ela não diz respeito, especificamente, a uma tabela, mas sim a um relacionamento entre tabelas. De forma sucinta, a chave estrangeira é uma referência em uma tabela a uma chave primária de outra tabela. Para facilitar a compreensão, tomemos como exemplo duas tabelas: Pessoa e Carro. Para montarmos um relacionamento entre elas poderíamos ter na tabela Carro o campo ID_Pessoa fazendo referência à chave primária da tabela Pessoa.
* Diferentemente da chave primária, a chave estrangeira:

> Pode ser nula (NOT NULL);

> É um campo em uma tabela que faz referência a um campo que é chave primária em outra tabela;

> É possível ter mais de uma (ou nenhuma) em uma tabela.

<hr>

* Função que impedi o mysql injection ``` $mysqli->escape_string("Seu atributo post aqui") ```

### String de conexão banco de dados PHP
```
$host = "localhost";
$db = "crud_clientes";
$user = "root";
$pass = "";

$mysqli = new mysqli($host, $user, $pass, $db);

if($mysqli->connect_errno){
    die("Falha na conexão com o banco de dados");
}
```
