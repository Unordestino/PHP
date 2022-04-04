## Algumas funções e palavras chaves da linguagem

* Retornar o tamanho de uma lista: ``` count($list);  ```
* Retornar o tamanho de uma string: ``` mb_strlen("Eu também");  ```
* Entrada de dados: ``` $radio = readline()  OU $radio = (double)readline() ``` 
* Função para calcular potencia: ``` $area = $n * (pow($radio, 2)); ```
* Função para definir o número de casas decimais: ``` number_format($area, 4, '.','') ; ```
* Função para deixar toda string em maiuscula ``` strtoupper('maximizado');   ```
* Função para deixar toda string em minuscula ``` strtolower('MINIMIZADO'); ```
* Função para deixar a primeira letra da string em maiuscula ``` ucfirst('só a primeira letra'); ```
* Função para remover uma variavel da aplicação ``` unset($contasCorrentes['123.456.689-11']); ```
* Função para reverter uma string ```strrev($palavra); ```
* Função constante ```define("pi", 3.14); ```
* Função que verifica se o campo está vazio ``` empty($minhaString) ```

## Utilizando o autoload

```

spl_autoload_register(function (string $nomeCompletoDaClasse) {
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});

```

<hr>

## Metodo ToString
```
    public function __toString()
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}\n"; 
    }
```

<hr>

## Converte a variavel para diversos tipos

* retorna o valor de $val convertido para um inteiro ```intval("123");```
* retorna o valor de $val convertido para um booleano ```boolval($val);```  
* retorna o valor de $val convertido para um float ```floatval($val);``` 
* retorna o valor de $val convertido para um string ```strval($val);```   

## Verifica o tipo do dado

```
is_bool();
is_null();
is_float();
is_array();
is_string();
```
