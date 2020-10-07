<?php
/*ID: 602110195
Name: Zhang Hao(Henry)
Wechat: hikki*/
$f=fopen($_SERVER['argv'][1],'r');
/**
 * Actually, in this problem, the number does not across multiple line
 * so you can load all document contents to only one variable
 * by using file_get_contents() or using feof() with help of fread().
 */
for($i=0;;$i++){
    $p[$i]=trim(fgets($f));
    if(feof($f)){
    break;
    }
}fclose($f);
$ps=implode(" ",$p);
/**
 * Single RexExp can handle this problem with the help of
 * word boundary assertion \b and preg_match_all().
 */
// $pss=str_ireplace(["/",", ",". "]," ",$ps);
// $pa=explode(" ",$pss);
// for($j=0;$j<count($pa);$j++){
//     if(preg_match("/\d/",$pa[$j])){
//         $dpa[]=$pa[$j];
//     }
// }for($k=0;$k<count($dpa);$k++){
//     if(preg_match("/^\d+$/",$dpa[$k])){
//         $npa[]=$dpa[$k];
//     }elseif(preg_match("/(\d+)\.(\d+)/is",$dpa[$k])){
//         $npa[]=$dpa[$k];
//     }elseif(preg_match("/(\d+)\./is",$dpa[$k])){
//         $npa[]=str_ireplace(".","",$dpa[$k]);
//     }
// }

preg_match_all("/\b\d+(\.\d+)?\b/", $ps, $result);
$npa = $result[0];

for($l=0;$l<count($npa);$l++){
    echo$npa[$l],"\n";
}
?>