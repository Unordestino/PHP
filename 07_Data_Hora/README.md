* Retornar a data atual em timestamp ``` time()  ```
* Retornar uma data em timestamp  ``` strtotime("2022-04-09")  ```
* Retornar a data formatada ```  date("d/m/Y", time())  ```
* Retornar a data atual em timestamp ``` time()  ```


<hr>

### Editando uma data
* Example 1
```
    $dividir = explode('/', "10/04/2022");  --> Divide a data em um array de 3 posições
    $reverter = array_reverse(dividir);     --> Muda a ordem do array fazendo o primeiro ser o ultimo
    $nascimento = implode("-", $reverter);  --> Junta todo o array com o separador informado

```
<hr>

### Desafios Data
```
echo "<p>Data atual em timestsamp: " . time () . "</p>";

$tm  = date("d/m/Y", time ());
echo "<p>Transformar timestamp em data atual: " . $tm  . "</p>";

$today = date("d/m/Y", time ());
$tm =  strtotime($today);
echo "<p>Transformar data atual em timestamp: " . $tm . "</p>";

$today = time();
$soma = $today + (86400 * 10) ;
$result = date("d/m/Y", $soma);
echo "<p>Somar 10 dias em data: " . $result . "</p>";


$today = time();
$soma   = $today - (86400 * 10);
$result =  date("d/m/Y", $soma);
echo "<p>Subtrair 10 dias em uma data: " . $result . "</p>";


$today = time();
$result  = date("d-m-Y", $today);
echo "<p>Convertendo o timestamp pro banco de dados: " . $result . "</p>";

$data = "2022-04-10";
$exp = explode("-", $data);
$reverse = array_reverse($exp);
$implo = implode('/', $reverse);
echo "<p>Converter uma data para padrão br: " . $implo . "</p>";
```

