<?php
/*
* Full calendar ajax load events example
* Like Pro admin template
* by Aqvatarius
*/

    $month  = date('m');
    $year   = date('Y');
    
    
    $data = array();
    $data[] = array('title'=>'Manutenção','start'=>$year.'-'.$month.'-01','className'=>'green');
    $data[] = array('title'=>'Manutenção','start'=>$year.'-'.$month.'-03','className'=>'blue');
    $data[] = array('title'=>'Visita','start'=>$year.'-'.$month.'-03','className'=>'red');
    $data[] = array('title'=>'Limpeza','start'=>$year.'-'.$month.'-03','className'=>'orange');
    $data[] = array('title'=>'Entrega de Produto','start'=>$year.'-'.$month.'-08');
    $data[] = array('title'=>'Visita','start'=>$year.'-'.$month.'-05','className'=>'red');    
    $data[] = array('title'=>'Manutenção','start'=>$year.'-'.$month.'-16','className'=>'orange');
    $data[] = array('title'=>'Instalação','start'=>date("Y-m-d"));
    $data[] = array('title'=>'Instalação','start'=>$year.'-'.$month.'-21','end'=>$year.'-'.$month.'-23','className'=>'blue');
    $data[] = array('title'=>'Visita','start'=>$year.'-'.$month.'-21','className'=>'red');
    
    echo json_encode($data);
?>