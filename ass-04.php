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
$pss=str_ireplace(["(",")",'"',"'"],"",$ps);
$pa=explode(" ",$pss);
for($j=0;$j<=count($pa);$j++){
    if(($pa[$j]===ucfirst($pa[$j]))&&($pa[$j]!="My")&&($pa[$j]!="The")&&(strtolower(substr($pa[$j],1))===substr($pa[$j],1))){
        echo str_ireplace([".",","],"",$pa[$j])," ";
        $k="E";
    }else{
        if($k=="E"){
            echo"\n";
        }$k="NE";
    }continue;
}
?>