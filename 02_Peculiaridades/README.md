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
