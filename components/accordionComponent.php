<?php

$componentArray = [
  '0' => [
    'title' => 'Qualidade de Vida', 'options' => ['Saúde', 'Diversão', 'Espiritualidade']
  ],
  '1' => [
    'title' => 'Relacionamentos', 'options' => ['Família', 'Intimidade', 'Vida social']
  ],
  '2' => [
    'title' => 'Satisfação', 'options' => ['Realização/Propósito', 'Recursos Financeiros', 'Contribuição social']
  ],
  '3' => [
    'title' => 'Profissional', 'options' => ['Desenvolvimento', 'Desempenho', 'Contatos']
  ],
];

global $componentArray;

/*
function accordionComponent($title, $option1, $option2, $option3){
  return '<div class="justify-center flex flex-col items-center mt-8">
  <div class="accordion-collapse" data-accordion="collapse">
  <div class="accordion-collapse-heading-1">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border  border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
       <h1>' . $title . '</h1>
        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
        </svg>
      </button>
    </div>
   <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
      <div class="p-5 border  border-gray-200 dark:border-gray-700 dark:bg-gray-900">
       <p class="mb-2 text-gray-500 dark:text-gray-400 hover:text-white cursor-pointer">' . $option1 . '</p>
      <p class="mb-2 text-gray-500 dark:text-gray-400 hover:text-white cursor-pointer">' . $option2 . '</p>
        <p class="mb-2 text-gray-500 dark:text-gray-400 hover:text-white cursor-pointer">' . $option3 . '</p>
     </div>
  </div>
   </div>';
  }
*/


function accordionComponent($title, $option1, $option2, $option3)
{
  return '<div class="justify-center flex flex-col items-center mt-8">
  <div class="accordion-collapse" data-accordion="collapse">
  <div class="accordion-collapse-heading-1">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border  border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
       <h1>' . $title . '</h1>
        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
        </svg>
      </button>
    </div>
   <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
      <div class="p-5 border  border-gray-200 dark:border-gray-700 dark:bg-gray-900">
       <p class="mb-2 text-gray-500 dark:text-gray-400 hover:text-white cursor-pointer">' . $option1 . '</p>
      <p class="mb-2 text-gray-500 dark:text-gray-400 hover:text-white cursor-pointer">' . $option2 . '</p>
        <p class="mb-2 text-gray-500 dark:text-gray-400 hover:text-white cursor-pointer">' . $option3 . '</p>
     </div>
  </div>
   </div>';
}
