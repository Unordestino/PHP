* Retornar o tamanho de uma string: ``` mb_strlen("Eu também");  ```
* Função para deixar toda string em maiuscula ``` strtoupper('maximizado');   ```
* Função para deixar toda string em minuscula ``` strtolower('MINIMIZADO'); ```
* Função para deixar a primeira letra da string em maiuscula ``` ucfirst('só a primeira letra'); ```
* Função para reverter uma string ```strrev($palavra); ```
* Função que verifica se o campo está vazio ``` empty($minhaString) ```
* Função que verifica se o e-mail é vallido ``` filter_var($email, FILTER_VALIDATE_EMAIL) ```
* Função que encontra a posição da primeira ocorrência de uma string ``` strpos($this->email, "@"); ```
* Função que retorna uma parte de uma string ``` substr(string $string, int $start, int $length = ?) ```
* Função trim remove espaços e outros caracteres como a quebra de linha e o tab do começo e do final da string: ``` trim("     @gmail.com") ```
* Função que impedi o usuário de adicionar código de programação em uma validação de formulário ``` htmlspecialchars() ```
* limpar espaços em branco ``` trim parte inicial e final```  ``` itrim parte inicial da string```  ``` rtrim parte final da string```
* Primeira letra da string em maiúscula ``` ucfist("Sua string") ```
* Primeira letra de cada palavra da string em maiúscula ``` ucwords("Sua string") ```

<hr>

### Função explode — Divide uma string em arrays
* Example 1
```

$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2

```
* Example 2
```
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user; // foo
echo $pass; // *

?>
```

<hr>

### Função implode Junta um araay em string
```
    $vetor = ["Davi", "Silveira", "Souza"];
    $$vetor = implode("-", $$vetor);
                    }
```

