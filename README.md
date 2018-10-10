## PDO (PHP Data Objects) 

É a sigla para PHP Data Objects. Trata-se de uma extensão do PHP para prover acesso a diferentes modelos de bancos de dados através de uma interface única de classes e métodos.


##Habilitar o PDO
Antes de começarmos a trabalhar com o PDO, é necessário habilitar o driver do PDO e o driver referente ao banco que será utilizado. Para habilitar o PDO é bem simples, vá ate o seu arquivo php.ini que encontra-se dentro do diretório onde foi instalado o PHP e remova os comentários (;) das linhas abaixo.


###Habilitando PDO no Windows

extension=php_pdo.dll
extension=php_pdo_mysql.dll




###Habilitando PDO no Linux

extension=pdo.so
extension=pdo_mysql.so

