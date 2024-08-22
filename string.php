<?php
$strings = ["Hello", "World", "PHP", "Programming"];
foreach($strings as $string){
   $reverseString=strrev($string);
   $len=strlen($reverseString)-1;
   $stringLower=strtolower($reverseString);
   $stringParts=str_split($stringLower);
   $j=0;
   for($i=0;$i<=$len;$i++){
        if($stringParts[$i]=='a'||$stringParts[$i]=='e'||$stringParts[$i]=='i'||$stringParts[$i]=='o'||$stringParts[$i]=='u'){
        $j++;
         }
    }
    echo "Original String: ".$string.", Vowel Count: ".$j.", Reverse String: ".$reverseString;
    echo "<br><br>";
}
?>