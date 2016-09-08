html

<html>
  <head>
    <meta charset="utf-8">
    <title>MAGICQUARE</title>
  </head>
  <body>


    <?php

    $arr=array(
    array(1,1),
    array(1,1),
    array(1,1),

    array(1,1),
    array(1,1),
    array(1,1),

    array(1,1),
    array(1,1),
    array(1,1)
    );

    $size=7;

    $i=1;

    $j=(int)($size/2);

    for($k=1;$k<=$size*$size;$k++){
       $arr[$i][$j]=$k;

       if($k%$size==0){
          $i+=1;
       }
       else{
        $i-=1;
        $j+=1;
        if($i<1){
           $i=$size;
        }
        if($j>$size){
           $j=1;
        }

       }

    }

    echo "<table border=1 width=30%>";

    for($i=1;$i<=$size;$i++)
    {
     echo "<tr>";
     for($j=1;$j<=$size;$j++)
     {
        echo "<td>".$arr[$i][$j]."</td>";
     }
     echo "</tr>";

    }
    //echo "</table>"
    ?>
      <p style="border-top: 2px solid green;text-align:center;">
      setst
      </p>
  </body>
</html>
