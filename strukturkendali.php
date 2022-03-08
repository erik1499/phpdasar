<!-- 
//pengulangan
//for
// while
// do while
//foreach khusus untung array


// // for loop
// for ($i=0; $i <10 ; $i++) { 
//     echo(" hasil " . $i . "<br>" );
// }

// echo("<br>");

// // while loop
// $a=0;
// while ($a <= 20) {
//     echo("nilai" . $a . "<br>");
// $a++;    
// }

// echo("<br>");

// // do whlie loop
// // note : ketika menjaln kan false maka program akan di jalankan satu kali
// $y = 20;
// do {
//     echo(" angka ". "<br>" );

//  $y++;   
// } while ($y < 10);


//  echo("<br>");






?> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Latihan  1 </title>
    <style>
        .warna-baris{ 
            background-color: silver;  
        }

    </style>
</head>
<body>

<table border="1" cellpadding="10" cellpadding="0"> 


                 
            <?php for ($i=1; $i <=5; $i++) : ?>
                <?php if( $i %2 ==1 ): ?>
                    <tr class="warna-baris">
                        <?php else:?>
                    <tr>
                        <?php endif; ?>            
                               
                    <?php for($j=1; $j<=5; $j++) : ?>
                        <td><?=  "$i ,  $j"; ?></td> 
                     <?php endfor; ?>  
                </tr>
            <?php endfor; ?>     

</table>

</body>
</html>