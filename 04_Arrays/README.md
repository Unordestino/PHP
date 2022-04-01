## Arrays

Um array no PHP é na verdade um mapa ordenado. Um mapa é um tipo que relaciona valores a chaves. Este tipo é otimizado para várias usos diferentes: ele pode ser tratado como um array, uma lista (vetor), hashtable (que é uma implementação de mapa), dicionário, coleção, pilha, fila e provavelmente mais. Assim como existe a possibilidade dos valores do array serem outros arrays, árvores e arrays multidimensionais.

Um array pode ser criado com o construtor de linguagem array(). Ele leva qualquer quantidade de pares separados por vírgula chave => valor como argumentos.



```
array(
    chave  => valor,
    chave2 => valor2,
    chave3 => valor3,
    ...
)

-----------------------------------------------------

$dados1 = [
  "nome" => "jose",
  "idade" => 28
];

```

#### Adicionar um novo elemento no array

```
  $dados1["cpf"] = "784.445.102-12"
```

>Verificar se o elemento é um array ou não: ```is_array($dados1);```

>Remover um elemento do array: ```unset($dados1["nome"]);```


<hr>


### Remover um elemento no array
```
$array = [1, 2, 3, 4, 5];
unset($array[0]);
```

<hr>

## Fazer a união de arrays
```
$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = array_merge($pares, $impares);
print_r($decimais);

```

>Fazer a ordenação do array: ``` sort($decimais); ```

<hr>


### Fazer uma pesquisa no array

```
$input = array("item 2", "item 4", "item 7", "item 5");
$key = array_search('item 7', $input);

echo $input[$key];

```
