<?php

/*$a = 1;
$a = true;
$a = 'Other type';
$a = 'Ok';
echo $a;*/

/*$a = 'blue';
$b = $a;
echo $a; // blue
echo $b; // blue
$b = 'red';
echo $a; // blue
echo $b; // red*/

/*$firstName = 'John';
$lastName = 'Doe';
echo "$firstName $lastName";
echo "{$firstName} {$lastName}";*/

/*
$a = 356;
$b = (string) $a;
echo gettype($b); */


/*
$bil=10; // Inisialisasi variabel bil dengan nilai 10

if ($bil % 2 == 0){ //Kondisi
    echo "$bil Merupakan Bilangan Genap"; //Kondisi true
}else {
    echo "$bil Merupakan Bilangan Ganjil"; //Kondisi false
}


$bil=13; // Inisialisasi variabel bil dengan nilai 13

if ($bil % 2 == 0){ //Kondisi
    echo "$bil Merupakan Bilangan Genap"; //Kondisi true
}else {
    echo "$bil Merupakan Bilangan Ganjil"; //Kondisi false
}
php> */


/*
$number = 42;
echo gettype($number); // integer
echo is_int($number);
echo is_integer($number);
echo is_numeric($number);*/
/*

$price1 = 100;
$price2 = 600;
$price3 = 50;
echo $price1 + $price2 + $price3; // 750
echo $price1 - $price2 - $price3; // -550
echo $price1 * $price2 * $price3; // 3000000
echo $price1 / $price2 / $price3; // 0.0033333333333333 */

/*

$password = 'other';
if ($password == 'secret') {
echo 'Correct';
} else {
echo 'Fail';
} */

/*
$n = 67;
if ($n > 100) {
echo 'More than 100';
} elseif ($n > 70) {
echo 'More than 70';
} else if ($n > 50) {
echo 'More than 50';
} else {
echo 'Below 50';
} */

/*

$status = 'Enabled';
echo $status ?: 'Disabled'; // Enabled
$status = false;
echo $status ?: 'Disabled'; // Disabled
$status = null;
echo $status ?: 'Disabled'; // Disabled
*/

/*
echo "MENENTUKAN GRADE NILAI";
echo "<br>";
echo "<br>";
?>
<form method="POST" action="">
    Nama: <input type="number" name="bill">
    <br>
                                                                                                                                                                                                                                                                                                                
    <button type="submit" name="btntmpil" >Tampilkan</button>
</form>

<?php

if (isset($_POST["btntmpil"])) {
    $bill = $_POST["bill"];
   
             if ($bill < 50) {
                echo 'Nilai : ' . $bill . '; Grade = E.';
            } else if ($bill >= 50 && $bill <= 60) {
                echo 'Nilai : ' . $bill . '; Grade = D';
            } else if ($bill >= 60 && $bill <= 70) {
                echo 'Nilai : ' . $bill . '; Grade = C';
            } else if ($bill >= 70 && $bill <= 80) {
                echo 'Nilai : ' . $bill . '; Grade =  B';
            } else if ($bill >= 80 && $bill <= 100) {
                echo 'Nilai : ' . $bill . '; Grade = A';
           
            } else {
                echo 'Nilai : ' . $bill . '; tidak berada dalam GRADE bilangan.';
            }
        }
 ?>*/

/*
$user = new stdClass();
$user->name = 'John';
$user->email = 'john@doe.com';
$user->age = 21;
foreach($user as $key => $value) {
echo "$key -> $value" . PHP_EOL;
}*/

/*
<?php
         /* contoh array numeric belajarci. */
         $num_array = array( 2, 4, 7, 9, 10,36,48,94,100,143);
         
         foreach( $num_array as $angka ) {
            echo "angka ke $angka <br/>";
         }
?>
