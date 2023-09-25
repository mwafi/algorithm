 <?php


// function fixedPoint(array $numbers, int $index = 0): int | false
// {
//     if ( $index >= count($numbers) || $numbers[$index] > $index) return false;
//
//     if ($numbers[$index] === $index ) return $index;
//
//     return fixedPoint($numbers, $index + 1);
// }


     function fixedPoint(array $numbers): int | false
     {
         if ( count($numbers) - 1 > end($numbers) ) return false;

         return false;
     }


     $output = fixedPoint([-6, 0, 2, 40]);
//     $output = fixedPoint([1, 5, 7, 8]);
// $output = fixedPoint([-1,1,2,3,4,5,6,7,8]);
// $output = fixedPoint([-10,-2,-1]);

 echo "$output\n";
