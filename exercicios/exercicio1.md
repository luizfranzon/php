# Exercícios 1 – PHP

### 1. Qual a função do XAMPP? O que fornece?
O Xampp é um pacote de serviços que nos permite simular um servidor web de uma forma prática e facil.
Ele nos fornece o Apache, o MySQL, FileZilla, Mercury, e TomCat, além de interpretar PHP e Pearl
X-Multiplataforma
A-Apache
M-MySQL
P-PHP
P-Pearl

### 2. Qual serviço / módulo no XAMPP deve ser executado para o interpretador PHP funcionar?
Para isso devemos executar o modulo apache

### 3. Dê 5 exemplos de marcações (tags) HTML e comente a função de cada uma.
**div** - Usado para criar caixas e agrupar outras tags.
**h1** - Usada para definir titulos em nossa página.
**p** - Usada para definir paragrafos.
**input** - Usada para coletar dados que o usuario escreve.
**button** - Usada para executar alguma função ao clicar no botão.

### 4. Em que pasta (diretório) devem ficar os arquivos PHP para o navegador usando localhost localizá-los e executá-los?
Na pasta htdocs

### 5. Marque a alternativa correta correspondente às marcas de abertura e fechamento de um programa PHP:
```txt
(X) <body> </body>
( ) <php> </php>
(X) <html> </html>
(X) <?php ?>
( ) <?php /php>
```

### 6. Marque com (V) para verdadeira ou (F) para falsa cada sentença a seguir:
No PHP, as palavras reservadas *(echo, if, else, null, etc..)* **NÃO** são case-sensitive, ou seja, não faz diferença escreva-las de forma maiusculas ou minusculas.

### 7. Qual a resposta do programa abaixo? Qual linha é válida?
```php
<?php
  $tamanho = “média";
  echo “Minha bolsa é " . $tamanho . "<br>";
  echo “Minha casa é " . $TAMANHO . "<br>";
  ECHO “Minha moto é " . $tamANHO . "<br>";
?>
```

### 8. Qual é o valor de x?
```php
<?php $x = 15 /* + 15 */ - 15; echo $x; ?> //O Valor é 0
``` 


### 9. Qual o resultado do seguinte código em PHP?
```php
echo strftime(“%A”) . <”br”>;
echo date(“ℓ”) . <”br”>;
```

### 10. O que produz o seguinte código em PHP? (use ECHO para ver cada resultado):
```php
$texto1 = “Gosto do curso”;
$texto2 = (int) “Gosto do curso”;
$texto3 = “10! Gosto do curso”;
$texto4 = (int) “10! Gosto do curso”;
$texto5 = (bool) “10! Gosto do curso”;
$resultado1 = 10 - (bool) “10! Gosto do curso”;
$resultado2 = 10 - “10! Gosto do curso”;
$resultado3 = 10 - “Gosto do curso, é 10!”;
```

### 11. Qual o resultado da execução do código a seguir?
```php
$a=2; $b=2.5; $c=3; echo $a-$b*$c; echo ($a-$b)*$c;
```

### 12. Problema: Uma aplicação rende dividendos de 0,5 % ao mês. Foram aplicados inicialmente R$ 10 000,00.
a) Após 3 meses, qual o valor dos dividendos? (1º, 2º e 3º mês)<br>
b) Qual o saldo da aplicação após estes 3 meses, acumulando mês a mês?<br>
c) Para dividir este saldo entre 3 acionistas, que valor vai para cada um em notas de R$ 100,00?<br>
d) Quanto vai sobrar após a divisão?<br>

*Escreva o código em PHP da solução.*

### 13. Escreva um programa em PHP que resolva equação de 2º grau. Calcular delta antes. A função para calcular raízes é sqrt($delta). Não se esqueça que a saída produz duas raízes x1 e x2 para delta positivo.
```php

```

### 14. Qual o resultado da execução do código a seguir?
```php
$txt1 = "coisa"; $txt2 = "boa";
echo $txt1 . "<br>"; echo $txt2 . "<br>";
echo $txt1 . $txt2 . "<br>"; $txt1 .= $txt2;
echo $txt1 . "<br>";
```