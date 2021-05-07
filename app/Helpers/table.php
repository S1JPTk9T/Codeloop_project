<?php


function createHeader() {
  $headers = [
    'Id',
    'Nome',
    'Nascimento',
    'Serie',
    'Cep',
    'Rua',
    'Numero',
    'Ref',
    'Bairro',
    'Cidade',
    'Estado',
    'Mãe',
    'CPF Mãe',
    'Vencimento',
    'Editar',
    'Excluir'
    ];

    $content = "<tr>".PHP_EOL;
    foreach($headers as $h) {
      $content.="<th>{$h}</th>";
    };
    $content.=PHP_EOL."</tr>";
    echo $content;

};

function createButton($name,$action,$alt) {

$button= "<div class='d-grid gap-2 d-md-block'>".PHP_EOL;
$button.=   "<button class='btn btn-primary'  onclick='{$action}({$alt})' type='button'>{$name}</button>".PHP_EOL;
$button.= "</div>".PHP_EOL;

return $button;
};


function showData($data) {

  foreach($data as $dd) {
    $content = "<tr>".PHP_EOL;
    $dd = json_decode($dd);
      $content.= "<td>".$dd->id."</td>".PHP_EOL;
      $content.="<td>".$dd->nome."</td>".PHP_EOL;
      $content.="<td>".$dd->nascimento."</td>".PHP_EOL;
      $content.="<td>".$dd->ano."</td>".PHP_EOL;
      $content.="<td>".$dd->cep."</td>".PHP_EOL;
      $content.="<td>".$dd->rua."</td>".PHP_EOL;
      $content.="<td>".$dd->n."</td>".PHP_EOL;
      $content.="<td>".$dd->complemento."</td>".PHP_EOL;
      $content.="<td>".$dd->bairro."</td>".PHP_EOL;
      $content.="<td>".$dd->cidade."</td>".PHP_EOL;
      $content.="<td>".$dd->estado."</td>".PHP_EOL;
      $content.="<td>".$dd->mothername."</td>".PHP_EOL;
      $content.="<td>".$dd->mothercpf."</td>".PHP_EOL;
      $content.="<td>".$dd->payment."</td>".PHP_EOL;
      $content.="<td>".createButton("Editar","edit",$dd->id)."</td>".PHP_EOL;
      $content.="<td>".createButton("Excluir","rm",$dd->id).PHP_EOL;

    $content.= "</tr>";
      echo $content;
  };

};
