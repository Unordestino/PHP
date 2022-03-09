## Classe 
>define os atributos e métodos comuns que serão compartilhados por um objeto

## Pilares Do POO
* Abstração
* Herança
* Encapsulamento
* Polimorfismo 

<hr>

## Polimorfismo

Polimorfismo significa muitas formas , na orientação a objetos você pode enviar uma mesma mensagem para diferentes objetos e fazê-los responder da maneira correta.

Você pode enviar a mensagem mover para cada objeto semelhante a um veiculo e cada um vai se comportar de maneira diferente para atender a sua solicitação.

Quando uma mesma mensagem pode ser processada de diferentes formas temos um exemplo de polimorfismo.

Uma definição mais formal diria:

"Polimorfismo é o princípio pelo qual duas ou mais classes derivadas de uma mesma superclasse podem invocar métodos que têm a mesma identificação (assinatura) mas comportamentos distintos, especializados para cada classe derivada, usando para tanto uma referência a um objeto do tipo da superclasse"

* Polimorfismo de sobreposição: Mesma Assinatura classes Diferentes
* Polimorfismo de Sobrecarga: Assinaturas Diferentes Mesma Classe

<hr>

# Herança
* Herança é um conceito chave usado na programação orientada a objetos para descrever uma relação entre as classes;
* Por meio da herança uma classe copia ou herda todas as propriedades, atributos e métodos de uma outra classe, podendo assim estender sua funcionalidade;
* A classe que cede os membros para a outra classe é chamada superclasse, classe pai ou classe base;
* A classe que herda os membros da outra classe é chamada subclasse ou classe derivada;
* A herança permite a reutilização de código e especifica um relacionamento de especialização/generalização do tipo "é um"

> Tipos de herança:
* 1- Herança Simples
> É o tipo de herança em que há uma classe base e uma classe derivada.
* 2- Herança Hierárquica
> Este é o tipo de herança em que existem várias classes derivadas de uma classe base.
> Esse tipo de herança é usado quando há um requisito de um recurso de classe necessário em várias classes.
* 3- Multinível
> Quando uma classe é derivada de outra classe derivada, esse tipo de herança é chamado de herança de vários níveis.
* 4- Múltipla (interface)
> A linguagem C# não suporta herança múltipla de classes.
> Para superar esse problema, podemos usar interfaces onde uma classe pode implementar mais de uma interface ou de uma classe e de uma ou mais de  uma interface.


<hr>

## Encapsulamento

O encapsulamento é o processo de ocultar ou esconder os membros de uma classe do acesso exterior usando modificadores de acesso. O encapsulamento também é chamado de ocultação de informação ou information hiding.

O encapsulamento fornece uma maneira de preservar a integridade do estado dos dados. Ao invés de definir campos públicos devemos definir campos de dados privados.

Um modificador de acesso define o escopo e a visibilidade de um membro da classe. A linguagem C# suporta os seguintes modificadores de acesso: 

* Public

* Private

* Protected

Esse pilar visa a proteção de variáveis importantes dentro de uma classe que não podem ser manipualadas diretamente 
<hr>

## Abstração

* Abstração para a OO, nada mais é do que você observar comportamentos e estruturas do dia a dia, e transformá-los em uma linguagem computacional.
* Esse pilar, como o próprio nome diz, visa abstrair algo do mundo real e transforma-lo um objeto na programção.
* Esse objeto será composto por uma identidade, propriedades e métodos.

<hr>

### Classes Abstratas
- Uma classe abstrata é uma classe que não pode ser instanciada. Você não pode criar um objeto a partir de uma classe abstrata.
- Uma classe abstrata pode ser herdada e geralmente serve como classe base para outras classes.
- Uma classe abstrata pode conter métodos abstratos e métodos comuns. Uma classe abstrata também podem possuir construtores, propriedades, indexadores e eventos.
- Uma classe abstrata não pode ser estática (static). Uma classe abstrata não pode ser selada (sealed).
- Uma classe abstrata pode herdar de outra classe abstrata.
- >São classes que não podem ser instanciadas. É uma forma de garantir herença total: somente subclasses não abstratas podem ser instanciadas, mas nunca a superclasse abstrata

<hr>

### Interface
Ela é um contrato onde quem assina se responsabiliza por implementar esses métodos (cumprir o contrato)
Uma interface define um contrato.

<hr>

### Métodos Abstratos:

- Um método abstrato é um método que não possui implementação na classe abstrata. Um método abstrato possui somente a definição de sua assinatura. A sua implementação deve ser feita na classe derivada.
- Um método abstrato é um método virtual e deve ser implementado usando o modificador override.
- Um método abstrato somente pode existir em uma classe abstrata.

<hr>

