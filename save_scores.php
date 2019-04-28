<?php
//exemple de lien : save_scores.php?emotions=%5B%5B"surprise"%2C"satisfaction"%5D%2C%5B"mepris"%2C"envie"%5D%2C%5B"colere"%2C"surprise"%5D%2C%5B%5D%2C%5B"satisfaction"%5D%2C%5B"envie"%5D%5D&receives=%5B5%2C1%2C0%2C2%2C4%2C3%5D&answers=%5Btrue%2Cfalse%2Cfalse%2Cfalse%2Ctrue%2Ctrue%5D&offer=0
function parseBool($bool){
  if ($bool=='true') {
    return 1;
  }
  return 0;
}

if (isset($_GET['emotions'])&&isset($_GET['answers'])&&isset($_GET['receives'])&&isset($_GET['offer'])&&isset($_GET['why'])) {

  echo 'toute les données sont reçues <br/>';
  echo $_GET['emotions'].'<br/>';
  echo $_GET['answers'].'<br/>';
  echo $_GET['receives'].'<br/>';
  echo $_GET['offer'].'<br/>';
  echo $_GET['why'].'<br/>';

  // $receive1 = $_GET['receive1'];
  // // echo $receive1;
  // $answer1 = parseBool($_GET['answer1']);
  // // echo $answer1;
  // $receive2 = $_GET['receive2'];
  // // echo $receive2;
  // $answer2 = parseBool($_GET['answer2']);
  // // echo $answer2;
  // $receive3 = $_GET['receive3'];
  // // echo $receive3;
  // $answer3 = parseBool($_GET['answer3']);
  // // echo $answer3;
  // $receive4 = $_GET['receive4'];
  // // echo $receive4;
  // $answer4 = parseBool($_GET['answer4']);
  // // echo $answer4;
  // $receive5 = $_GET['receive5'];
  // // echo $receive5;
  // $answer5 = parseBool($_GET['answer5']);
  // // echo $answer5;
  // $offer = $_GET['offer'];
  // // echo $offer;
  //

  //
  $filename = 'scores.txt';
  $content = $_GET['receives'].'/'.$_GET['answers'].'/'.$_GET['emotions'].'/'.$_GET['offer'].'/'.$_GET['why'];
  file_put_contents($filename, utf8_encode($ontent).PHP_EOL, FILE_APPEND);
}
else {
  echo 'Problème de données ';
}



?>
