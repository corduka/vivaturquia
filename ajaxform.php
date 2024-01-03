
<?php

 $mail1 = $_POST['mail1'];
 $mail2 = $_POST['mail2'];

 if ($mail1 == $mail2) {

     $dosyaya_baglanti = fopen('metin.html',"a+");

   $yenimail= '<br>'.$mail1;

  $dosya =  fwrite($dosyaya_baglanti,$yenimail);


   fclose ($dosya);

  echo json_encode([
    'status'=>1,
    'message'=>'basarılı'
  ]);
}else{
  echo json_encode([
    'status'=>0,
    'message'=>'basarısız'
  ]);
}

?>
