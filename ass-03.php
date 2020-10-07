<?php
/*ID: 602110195
Name: Zhang Hao(Henry)
Wechat: hikki*/
$f=fopen($_SERVER['argv'][1],'r');
for($i=0;;$i++){
    $p[$i]=trim(fgets($f));
    if(feof($f)){
    break;
    }
}fclose($f);
$ps=implode(" ",$p);
/**
 * Your solution looks good but it cannot deal with number,
 * e.g. (2020) then I will provide you with another solution
 * with help of sub-pattern matched of preg_match_all().
 */
// $pa=explode(" ",$ps);
// for($j=0;$j<count($pa);$j++){
//     if(preg_match("/(?=.*[\(])(?=.*[\)])/",$pa[$j])&&(strtoupper($pa[$j])===$pa[$j])){
//        $ea[]=str_ireplace(["(",")",".",","],"",$pa[$j]);
//     }
// }

preg_match_all("/\(([A-Z]+)\)/", $ps, $result);
$ea = $result[1];

for($k=0;$k<count($ea);$k++){
    echo$ea[$k],"\n";
}