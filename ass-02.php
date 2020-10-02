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
$pss=str_ireplace(["/",", ",". "]," ",$ps);
$pa=explode(" ",$pss);
for($j=0;$j<count($pa);$j++){
    if(preg_match("/\d/",$pa[$j])){
        $dpa[]=$pa[$j];
    }
}for($k=0;$k<count($dpa);$k++){
    if(preg_match("/^\d+$/",$dpa[$k])){
        $npa[]=$dpa[$k];
    }elseif(preg_match("/(\d+)\.(\d+)/is",$dpa[$k])){
        $npa[]=$dpa[$k];
    }elseif(preg_match("/(\d+)\./is",$dpa[$k])){
        $npa[]=str_ireplace(".","",$dpa[$k]);
    }
}for($l=0;$l<count($npa);$l++){
    echo$npa[$l],"\n";
}
?>