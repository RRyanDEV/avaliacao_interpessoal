<?php

$componentArray = [
  'qualidadeDeVida' => [
    'title' => 'Qualidade de Vida', 'option1' => 'Saúde', 'option2' =>  'Diversão', 'option3' => 'Espiritualidade'
  ],
  'relacionamentos' => [
    'title' => 'Relacionamentos', 'option1' => 'Família', 'option2' =>  'Intimidade', 'option3' => 'Vida social'
  ],
  'satisfação' => [
    'title' => 'Satisfação', 'option1' => 'Realização/Propósito', 'option2' =>  'Recursos Financeiros', 'option3' => 'Contribuição social'
  ],
  'profissional' => [
    'title' => 'Profissional', 'option1' => 'Desenvolvimento', 'option2' =>  'Desempenho', 'option3' => 'Contatos'
  ],
];

global $componentArray;


    $keys = array_keys($componentArray);
		for($i = 0; $i < count($componentArray); $i++) {
		    echo "<br>";
		    foreach($componentArray[$keys[$i]] as $key => $value) {
		        echo $value . "<br>";
		    }
		    echo "<br>";
		}