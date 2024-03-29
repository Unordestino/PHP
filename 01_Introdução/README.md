## Alguns detalhes quanto a criação de variáveis no PHP:
### Acessar xdebug no servidor
* php -S 127.0.0.1:8060
* http://127.0.0.1:8060/aquivo.php
<hr>

* O PHP não permite declarar a variável sem atribuir valor;
* Por se tratar de uma linguagem de tipagem dinâmica, não é possível definir o tipo de uma variável na declaração;
* O tipo de dado da variável é automaticamente definido através do tipo de dado atribuído a variável no PHP.

<hr>

>PHP dá suporte às operações matemáticas através dos seguintes operadores:
* Soma: +
* Subtração: -
* Multiplicação: *
* Divisão: /
* Resto da divisão (módulo): %
* Potência: **

<hr>

### Exibir dados na tela
```
echo "Hello world";
```
<hr>

### Variável genérica
```
$idade = 21;
$idade = "Hellow world;
$idade = 1.5;
```
<hr>

### Concatenação de strings
```
$nome = "Davi";
$email = "contato@davisilveira.com.br";
$idade = 22;
$telefone = "(85) 9-86278161";
echo 'Olá, meu nome: ' . $nome . ', idade: ' . $idade . ', telefone: ' . $telefone . ', e-mail: ' . $email;

echo "\n";

echo "Olá, meu nome: $nome, idade: $idade, telefone: $telefone, e-mail: $email";

```

<hr>

### Constantes
```
define('TAXA_DE_JUROS', 5.9);
const NOVA_TAXA = 2.5;
------------------------
$valorVariavel = 2.8;

define('NOVISSIMA_TAXA', $valorVariavel); // PERMITIDO
const NOVISSIMA_TAXA = $valorVariavel; // NÃO PERMITIDO
```

<hr>

### Palavra-Chave 'static' 
<pre>
Static é global para classe diferente de atributos ela é vista por todas as instancias. Declarar propriedades ou métodos de uma classe como estáticos faz deles acessíveis 
sem a necessidade de instanciar a classe. Um membro declarados como estático 
não pode ser acessado com um objeto instanciado da classe (embora métodos estáticos podem).
</pre>
* Exemplo #1 Exemplo de método estático
```
<?php
class Conta {
    public static function aStaticMethod() {
        // ...
    }
}

Conta::aStaticMethod();
?>
```
* Exemplo #2 Exemplo de propriedade estática
```
<?php
class Conta
{
    public static $meu_estatico = 'Olá';
}

print Conta::$meu_estatico . "\n";
?>
```
<hr>

### Chamar construtor da classe base
```
class Product{
  private string $name;
  private float $price;
  
  function __construct(string $name, float $price) {
      $this->name = $name;
      $this->price = $price;
  }
}

class ImportedProduct extends Product{
  function __construct(string $name, float $price,float $customsFee) {
    parent::__construct($name, $price);
      $this->customsFee = $customsFee;
  }
}

```
