<?php 
$firstname = 'cristiano';
var_dump('$firstname \t ronaldo \n portugal');
var_dump("$firstname \t ronaldo \n portugal");

//======================================== HEREDOC

echo <<<NAMATAGAPAAJA

INI MULTILINE echo heredoc
INI MULTILINE echo heredoc
INI MULTILINE echo heredoc

NAMATAGAPAAJA;

echo <<<NAMATAGAPAAJA

INI MULTILINE echo heredoc
INI MULTILINE echo heredoc
INI MULTILINE echo heredoc

NAMATAGAPAAJA;

var_dump(<<<NAMATAGAPAAJA

INI MULTILINE var_dump() heredoc
INI MULTILINE var_dump() heredoc
INI MULTILINE var_dump() heredoc

NAMATAGAPAAJA);

//======================================== NOWDOC

echo <<<'NAMATAGAPAAJA'

INI MULTILINE echo nowdoc
INI MULTILINE echo nowdoc
INI MULTILINE echo nowdoc

NAMATAGAPAAJA;

var_dump(<<<'NAMATAGAPAAJA'

INI MULTILINE var_dump() nowdoc
INI MULTILINE var_dump() nowdoc
INI MULTILINE var_dump() nowdoc

NAMATAGAPAAJA);

?>