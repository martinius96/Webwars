<?php
error_reporting(0);
include ('functions.php');
include ('safe.php');
error_reporting(0);

if($user['fraction'] == 0){ 
$income = 2 * $unit['worker'];

$farming = 2 * $unit['farmer'];


$num1 = min($weapon['springfield'],$unit['rifleman']);
 
if($num1 == $weapon['springfield']){
    $attack1 = (50 * $weapon['springfield']) + (10 * $unit['rifleman'] );
}else{
     $attack1 = (10 * $unit['rifleman']);
}


$num2 = min($weapon['thompson'],$unit['soldier']);

if($num2 == $weapon['thompson']){
    $attack2 = (200 * $weapon['thompson']) + (14 * $unit['soldier']);
}else{
    $attack2 = (14 * $unit['soldier']);
}

$num3 = ($weapon['sherman']);

if($num3 == $weapon['sherman']){
    $attack3 = (1000 * $weapon['sherman']);
}

$num4 = ($weapon['hellcat']);

if($num4 == $weapon['hellcat']){
    $attack5 = (2000 * $weapon['hellcat']);
}
$num5 = ($weapon['pershing']);

if($num5 == $weapon['pershing']){
    $attack6 = (3000 * $weapon['pershing']);
}

$num6 = min($weapon['browning'],$unit['machinegunner']);

if($num6 == $weapon['browning']){
    $defense1 = (650 * $weapon['browning']) + (12 * $unit['machinegunner']);
}else{
    $defense1 = (12 * $unit['machinegunner']);
}

$num7 = min($weapon['m1garand'],$unit['rifleman']);

if($num7 == $weapon['m1garand']){
    $attack7 = (75 * $weapon['m1garand']) + (10 * $unit['rifleman'] );
}else{
     $attack7 = (10 * $unit['rifleman']);
}
$num8 = min($weapon['m1a1'],$unit['rifleman']);

if($num8 == $weapon['m1a1']){
    $attack8 = (100 * $weapon['m1a1']) + (10 * $unit['rifleman'] );
}else{
     $attack8 = (10 * $unit['rifleman']);
}
$num9 = ($weapon['howitzer']);

if($num9 == $weapon['howitzer']){
    $defense2 = (800 * $weapon['howitzer']);
}



$attack = $attack1 + $attack2 + $attack3 +  $attack5 + $attack6 + $attack7 + $attack8;
$defense = $defense1 + $defense2;
if($unit['sergeant'] == 1) {
    $attack = (2 * $attack );
   }
   if($unit['gendef'] == 1) {
    $defense = (2 * $defense );
   }
$update_stats = mysqli_query($con,"UPDATE `stats` SET
							`income`='".$income."',`farming`='".$farming."',
							`attack`='".$attack."',`defense`='".$defense."'
							WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
              }
              
          
              
              
              
              
              
              
              
if($user['fraction'] == 1){  
$income = 2 * $unit['worker'];

$farming = 2 * $unit['farmer'];


$num1 = min($weapon['kar98'],$unit['schutze']);

if($num1 == $weapon['kar98']){
    $attack1 = (50 * $weapon['kar98']) + (10 * $unit['schutze'] );
}else{
     $attack1 = (10 * $unit['schutze']);
}
//

$num2 = min($weapon['gw43'],$unit['schutze']);

if($num2 == $weapon['gw43']){
    $attack2 = (75 * $weapon['gw43']) + (10 * $unit['schutze']);
}else{
    $attack2 = (10 * $unit['schutze']);
}

$num3 = ($weapon['tiger']);

if($num3 == $weapon['tiger']){
    $attack3 = (1000 * $weapon['tiger']);
}

$num4 = ($weapon['stugv']);

if($num4 == $weapon['stugv']){
    $attack5 = (2000 * $weapon['stugv']);
}
$num5 = ($weapon['tiger2']);

if($num5 == $weapon['tiger2']){
    $attack6 = (3000 * $weapon['tiger2']);
}

$num6 = min($weapon['mp40'],$unit['soldad']);

if($num6 == $weapon['mp40']){
    $attack7 = (100 * $weapon['mp40']) + (14 * $unit['soldad']);
}else{
    $attack7 = (14 * $unit['soldad']);
}

$num7 = min($weapon['mp44'],$unit['soldad']);

if($num7 == $weapon['mp44']){
    $attack8 = (150 * $weapon['mp44']) + (14 * $unit['soldad'] );
}else{
     $attack8 = (14 * $unit['soldad']);
}
$num8 = min($weapon['mg42'],$unit['maschinengewehr']);

if($num8 == $weapon['mg42']){
    $defense1 = (650 * $weapon['mg42']) + (12 * $unit['maschinengewehr'] );
}else{
     $defense1 = (12 * $unit['maschinengewehr']);
}
$num9 = ($weapon['panzerstellung']);

if($num9 == $weapon['panzerstellung']){
    $defense2 = (800 * $weapon['panzerstellung']);
}




$attack = $attack1 + $attack2 + $attack3 + $attack5 + $attack6 + $attack7 + $attack8;
$defense = $defense1 +  $defense2;

if($unit['leutant'] == 1) {
    $attack = (2 * $attack );
   }
   if($unit['hauptmann'] == 1) {
    $defense = (2 * $defense );
   }
$update_stats = mysqli_query($con,"UPDATE `stats` SET
							`income`='".$income."',`farming`='".$farming."',
							`attack`='".$attack."',`defense`='".$defense."'
							WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
               }










if($user['fraction'] == 2){ 
$income = 2 * $unit['worker'];

$farming = 2 * $unit['farmer'];

$num1 = min($weapon['kar98'],$unit['strelec']);


if($num1 == $weapon['kar98']){
    $attack1 = (50 * $weapon['kar98']) + (10 * $unit['strelec'] );
}else{
     $attack1 = (10 * $unit['strelec']);
}


$num2 = min($weapon['puskavz24'],$unit['strelec']);

if($num2 == $weapon['puskavz24']){
    $attack2 = (75 * $weapon['puskavz24']) + (10 * $unit['strelec']);
}else{
    $attack2 = (10 * $unit['strelec']);
}

$num3 = ($weapon['lt38']);

if($num3 == $weapon['lt38']){
    $attack3 = (1500 * $weapon['lt38']);
}

$num4 = ($weapon['pak38']);
                                               //
if($num4 == $weapon['pak38']){
    $defense1 = (300 * $weapon['pak38']);
}
$num5 = ($weapon['flak37']);

if($num5 == $weapon['flak37']){
    $defense2 = (500 * $weapon['flak37']);
}

$num6 = min($weapon['gulometvz24'],$unit['gulometcik']);

if($num6 == $weapon['gulometvz24']){
    $defense3 = (650 * $weapon['gulometvz24']) + (12 * $unit['gulometcik']);
}else{
    $defense3 = (12 * $unit['gulometcik']);
}

$num7 = min($weapon['pps43'],$unit['vojak']);

if($num7 == $weapon['pps43']){
    $attack4 = (100 * $weapon['pps43']) + (14 * $unit['vojak'] );
}else{
     $attack4 = (14 * $unit['vojak']);
}
$num8 = min($weapon['mp38'],$unit['vojak']);

if($num8 == $weapon['mp38']){
    $attack5 = (125 * $weapon['mp38']) + (14 * $unit['vojak'] );
}else{
     $attack5 = (15 * $unit['vojak']);
}
$num9 = ($weapon['grw']);

if($num9 == $weapon['grw']){
    $defense4 = (800 * $weapon['grw']);
}
$num10 = min($weapon['zk383'],$unit['vojak']);

if($num10 == $weapon['zk383']){
    $attack6 = (150 * $weapon['zk383']) + (14 * $unit['vojak'] );
} else{
     $attack6 = (15 * $unit['vojak']);
          }


$attack = $attack1 + $attack2 + $attack3 + $attack4 + $attack5 + $attack6;
$defense = $defense1 + $defense2 + $defense3 + $defense4;
if($unit['serzant'] == 1) {
    $attack = (2 * $attack );
   }
   if($unit['generalobrany'] == 1) {
    $defense = (2 * $defense );
   }
$update_stats = mysqli_query($con,"UPDATE `stats` SET
							`income`='".$income."',`farming`='".$farming."',
							`attack`='".$attack."',`defense`='".$defense."'
							WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
              }
              
          
              
              
              
              
              
              
              
if($user['fraction'] == 3){  
$income = 2 * $unit['worker'];

$farming = 2 * $unit['farmer'];


$num1 = min($weapon['mosinnagant'],$unit['strelets']);

if($num1 == $weapon['mosinnagant']){
    $attack1 = (50 * $weapon['mosinnagant']) + (10 * $unit['strelets'] );
}else{
     $attack1 = (10 * $unit['strelets']);
}


$num2 = min($weapon['svt40'],$unit['strelets']);

if($num2 == $weapon['svt40']){
    $attack2 = (75 * $weapon['svt40']) + (10 * $unit['strelets']);
}else{
    $attack2 = (10 * $unit['strelets']);
}

$num3 = ($weapon['t34']);

if($num3 == $weapon['t34']){
    $attack3 = (1000 * $weapon['t34']);
}

$num4 = ($weapon['is2']);

if($num4 == $weapon['is2']){
    $attack4 = (2000 * $weapon['is2']);
}
$num5 = ($weapon['kv2']);

if($num5 == $weapon['kv2']){
    $attack5 = (3000 * $weapon['kv2']);
}

$num6 = min($weapon['pps41'],$unit['vojnik']);

if($num6 == $weapon['pps41']){
    $attack6 = (200 * $weapon['pps41']) + (14 * $unit['vojnik']);
}else{
    $attack6 = (14 * $unit['vojnik']);
}

$num7 = min($weapon['dp27'],$unit['pistoleti']);

if($num7 == $weapon['dp27']){
    $defense1 = (450 * $weapon['dp27']) + (12 * $unit['pistoleti'] );
}else{
     $defense1 = (12 * $unit['pistoleti']);
}
$num8 = min($weapon['maxim'],$unit['pistoleti']);

if($num8 == $weapon['maxim']){
    $defense2 = (650 * $weapon['maxim']) + (12 * $unit['pistoleti'] );
}else{
     $defense2 = (12 * $unit['pistoleti']);
}
$num9 = ($weapon['zis3']);

if($num9 == $weapon['zis3']){
    $defense3 = (500 * $weapon['zis3']);
}
$num10 = $weapon['minometvz40'];

if($num10 == $weapon['minometvz40']){
    $defense4 = (800 * $weapon['minometvz40']);
}




$attack = $attack1 + $attack2 + $attack3 + $attack4 + $attack5 + $attack6;
$defense = $defense1 + $defense2 + $defense3 + $defense4;

if($unit['sershant'] == 1) {
    $attack = (2 * $attack );
   }
   if($unit['obscht'] == 1) {
    $defense = (2 * $defense );
   }
$update_stats = mysqli_query($con,"UPDATE `stats` SET
							`income`='".$income."',`farming`='".$farming."',
							`attack`='".$attack."',`defense`='".$defense."'
							WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));

                          }






              if($user['fraction'] == 4){ 
$income = 2 * $unit['worker'];

$farming = 2 * $unit['farmer'];


$num1 = min($weapon['kar98'],$unit['tiratore']);

if($num1 == $weapon['kar98']){
    $attack1 = (50 * $weapon['kar98']) + (10 * $unit['tiratore'] );
}else{
     $attack1 = (10 * $unit['tiratore']);
}


$num2 = min($weapon['carcano'],$unit['tiratore']);

if($num2 == $weapon['carcano']){
    $attack2 = (75 * $weapon['carcano']) + (10 * $unit['tiratore']);
}else{
    $attack2 = (10 * $unit['tiratore']);
}

$num3 = ($weapon['p43']);

if($num3 == $weapon['p43']){
    $attack3 = (1500 * $weapon['p43']);
}

$num4 = ($weapon['carro']);

if($num4 == $weapon['carro']){
    $attack4 = (3000 * $weapon['carro']);
}
$num5 = ($weapon['skoda']);

if($num5 == $weapon['skoda']){
    $defense1 = (500 * $weapon['skoda']);
}

$num6 = min($weapon['breda'],$unit['artigliere']);

if($num6 == $weapon['breda']){
    $defense2 = (650 * $weapon['breda']) + (12 * $unit['artigliere']);
}else{
    $defense2 = (12 * $unit['artigliere']);
}

$num7 = min($weapon['fucile'],$unit['tiratore']);

if($num7 == $weapon['fucile']){
    $attack5 = (100 * $weapon['fucile']) + (10 * $unit['tiratore'] );
}else{
     $attack5 = (10 * $unit['tiratore']);
}
$num8 = min($weapon['ovp'],$unit['soldato']);

if($num8 == $weapon['ovp']){
    $attack6 = (150 * $weapon['ovp']) + (14 * $unit['soldato'] );
}else{
     $attack6 = (14 * $unit['soldato']);
}
$num9 = ($weapon['brixia']);

if($num9 == $weapon['brixia']){
    $defense3 = (800 * $weapon['brixia']);
}
$num10 = min($weapon['baretta'],$unit['soldato']);

if($num10 == $weapon['baretta']){
    $attack7 = (200 * $weapon['baretta']) + (14 * $unit['soldato'] );
}else{
     $attack7 = (14 * $unit['soldato']);
}
     


$attack = $attack1 + $attack2 + $attack3 + $attack4 + $attack5 + $attack6 + $attack7;
$defense = $defense1 + $defense2 + $defense3;
if($unit['sergente'] == 1) {
    $attack = (2 * $attack );
   }
   if($unit['generale'] == 1) {
    $defense = (2 * $defense );
   }
$update_stats = mysqli_query($con,"UPDATE `stats` SET
							`income`='".$income."',`farming`='".$farming."',
							`attack`='".$attack."',`defense`='".$defense."'
							WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
              }
              
          
              
              
              
              
              
              
              
if($user['fraction'] == 5){  
$income = 2 * $unit['worker'];

$farming = 2 * $unit['farmer'];


$num1 = min($weapon['enfield'],$unit['enfieldman']);

if($num1 == $weapon['enfield']){
    $attack1 = (50 * $weapon['enfield']) + (10 * $unit['enfieldman'] );
}else{
     $attack1 = (10 * $unit['enfieldman']);
}


$num2 = min($weapon['delisle'],$unit['enfieldman']);

if($num2 == $weapon['delisle']){
    $attack2 = (75 * $weapon['delisle']) + (10 * $unit['enfieldman']);
}else{
    $attack2 = (10 * $unit['enfieldman']);
}

$num3 = ($weapon['cromwell']);

if($num3 == $weapon['cromwell']){
    $attack3 = (1500 * $weapon['cromwell']);
}

$num4 = ($weapon['comet']);

if($num4 == $weapon['comet']){
    $attack4 = (3000 * $weapon['comet']);
}
$num5 = min($weapon['bar'],$unit['soldier']);

if($num5 == $weapon['bar']){
    $attack5 = (150 * $weapon['bar']) + (14 * $unit['soldier']);
}   else{
    $attack5 = (14 * $unit['soldier']);
    }
$num6 = min($weapon['sten'],$unit['soldier']);

if($num6 == $weapon['sten']){
    $attack6 = (200 * $weapon['sten']) + (14 * $unit['soldier']);
}else{
    $attack6 = (14 * $unit['soldier']);
}

$num7 = min($weapon['bren'],$unit['gunner']);

if($num7 == $weapon['bren']){
    $defense1 = (300 * $weapon['bren']) + (12 * $unit['gunner'] );
}else{
     $defense1 = (12 * $unit['gunner']);
}
$num8 = min($weapon['vickers'],$unit['gunner']);

if($num8 == $weapon['vickers']){
    $defense2 = (450 * $weapon['vickers']) + (12 * $unit['gunner'] );
}else{
     $defense2 = (12 * $unit['gunner']);
       }
$num9 = min($weapon['lewis'],$unit['gunner']);

if($num9 == $weapon['lewis']){
    $defense3 = (600 * $weapon['lewis']) + (12 * $unit['gunner'] );
}else{
     $defense3 = (12 * $unit['gunner']);
      }



$attack = $attack1 + $attack2 + $attack3 + $attack4 + $attack5 + $attack6;
$defense = $defense1 +  $defense2 + $defense3;

if($unit['sergeant'] == 1) {
    $attack = (2 * $attack );
   }
   if($unit['gendef'] == 1) {
    $defense = (2 * $defense );
   }
$update_stats = mysqli_query($con,"UPDATE `stats` SET
							`income`='".$income."',`farming`='".$farming."',
							`attack`='".$attack."',`defense`='".$defense."'
							WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
}            
?>