
<?php

 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $adult = $_POST['adult'];
 $child = $_POST['child'];
 $checkin_date = $_POST['checkin_date'];
 $checkout_date = $_POST['checkout_date'];
 $tour_selection = $_POST['tour_selection'];
 $reservation_message = $_POST['reservation_message'];


if ($phone == null or $phone == '') {
  echo json_encode([
    'status'=>0,
    'message'=>'basarısız'
  ]);
} elseif ($email == null or $email= '') {
    echo json_encode([
      'status'=>2,
      'message'=>'basarısızemail'
    ]);
} else {
  $dosyaya_baglanti = fopen('tourreservation.html',"a+");
  $yenimail=  '<br>name:'.$name.
              '<br>email:'.$email.
              '<br>phone:'.$phone.
              '<br>adult:'.$adult.
              '<br>child:'.$child.
              '<br>checkin date:'.$checkin_date.
              '<br>checkout date:'.$checkout_date.
              '<br>tour selection:'.$tour_selection.
              '<br>reservation message:'.$reservation_message.
              '<hr>';
  $dosya =  fwrite($dosyaya_baglanti,$yenimail);
  fclose ($dosya);

  echo json_encode([
    'status'=>1,
    'message'=>'basarılı'
  ]);
}
?>
