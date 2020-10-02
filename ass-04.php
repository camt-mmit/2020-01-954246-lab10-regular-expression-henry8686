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
for($j=0;$j<=count($pa);$j++){
    if(($pa[$j]===ucfirst($pa[$j]))&&($pa[$j]!="My")&&($pa[$j]!="The")&&(preg_match("/[a-z]/",$pa[$j]))){
        echo str_ireplace([".",","],"",$pa[$j])," ";
        $k="E";
    }else{
        if($k=="E"){
            echo"\n";
        }$k="NE";
    }continue;
}
?>