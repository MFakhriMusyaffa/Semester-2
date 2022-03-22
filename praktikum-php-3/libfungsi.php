<?php
 function kelulusan($nilai_total){
 	if ($nilai_total > 55){
 		return 'LULUS';
 	}else{
 		return 'TIDAK LULUS';
 	}
 }
 function grade($nilai_total){
    if($nilai_total>85){
        return 'A';
    }elseif ($nilai_total>70) {
        return 'B';
    }elseif ($nilai_total>56){
        return 'C';
    }elseif ($nilai_total>36){
        return 'D';
    }elseif($nilai_total>0){
        return 'E';
    }else{
        return 'I';
    }
 }
 function predikat($grade){
    switch ($grade){
        case 'A' :
            return 'sangat memuaskan';
            break;
        case 'B' :
            return 'Memuaskan';
            break;
        case 'C' :
            return 'Cukup';
            break;
        case 'D' : 
            return 'Kurang';
            break;
        case 'E' : 
            return 'Sangat Kurang';
            break;
        default:
            return 'Tidak Ada';
            break;
    }
 }
?>