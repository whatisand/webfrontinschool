<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP OP</title>
  </head>
  <body>
    <?php
      //OPERATOR
      $x = 5; // = 는 대입연산자
      $y = 10; //
      echo "x+y= ";
      echo $x + $y;
      echo "<br>";
      echo "x%y";
      echo $x % $y;
      echo "<br>";

      //대입연산자
      $a = 100;
      $b ="100";
      var_dump($b==$a); //값만 비교 -> 형식이 다르면 통일시킴
      echo "<br>";
      var_dump($a===$b); //값과 자료형까지 비교한는듯?
      echo "<br>";
      var_dump($b!=$a); //값만 비교
      echo "<br>";
      var_dump($a!==$b); //값과 자료형 둘ㄹ다 비교
      echo "<br>";
      var_dump($b<>$a); //값만 비교
      echo "<br>";

      $txt1 = "3103";
      $txt2 = "kdw";
      $e = 5;
      if($e==5 and $e==5){
        echo "<script>alert('HI');</script>";
      }
     ?>
  </body>
</html>
