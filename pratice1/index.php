<style>
  table, th, tr, td{
    border: 1px solid ;
    border-collapse:collapse
  }
</style>
<?php
  echo ("<table>"."\n") ;

  $tbody = "";

  for($i = 1 ; $i < 10 ; $i ++){
    $tbody = $tbody . "\t<tr>"."\n" ;

    for($j = 1 ; $j < 10 ; $j ++){
      $tbody = $tbody . "\t\t<td>" . $i * $j . "</td>"."\n" ; 
    }
    $tbody = $tbody . "\t</tr>"."\n" ;
  }

  echo $tbody ;
  echo("</table>"."\n");

?>