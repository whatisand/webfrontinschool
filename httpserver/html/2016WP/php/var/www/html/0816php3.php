<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP3</title>
  </head>
  <body>
    <?php
      echo "변수의 자료형";
      $x = 10;
      var_dump($x);
      $y = 1.232;
      var_dump($y);
      $z = "etet";
      var_dump($z);
      $cars = array('a','b','c');
      var_dump($cars);
      /**
       * Car class. but I don't know what this work!!
       */
      class Car{

        function Car()
        {
          $this -> model = "VM";
        }
      }
      $k = new Car();
     ?>
  </body>
</html>
