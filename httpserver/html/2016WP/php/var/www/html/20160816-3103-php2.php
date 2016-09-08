<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP2</title>
  </head>
  <body>
    <?php
      $txt = "kdw";
      echo "3103 김동우";
      echo "We are " . $txt. "sdf";
      function mytest(){
        echo $txt;
        $txt = "inner";
        echo $txt;
      }

      function mytest1(){
        $a = 1;
        static $z = 2;
        echo $z;
        $z++;
      }
      mytest();
      mytest1();
      echo $z;
     ?>
  </body>
</html>
