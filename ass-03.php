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
$pa=explode(" ",$ps);
for($j=0;$j<count($pa);$j++){
    if(preg_match("/(?=.*[\(])(?=.*[\)])/",$pa[$j])&&(strtoupper($pa[$j])===$pa[$j])){
       $ea[]=str_ireplace(["(",")",".",","],"",$pa[$j]);
    }
}for($k=0;$k<count($ea);$k++){
    echo$ea[$k],"\n";
}