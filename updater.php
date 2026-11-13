<?php
set_time_limit(200);
$config = array('host' => 'u226168.mysql.masterhost.ru', 'user' => 'u226168_magazin', 'password' => 'SMOu.L2ViEs', 'bd' => 'u226168_zelmag');
$pdo = new \PDO("mysql:host=" . $config['host'] . ";dbname=" . $config['bd'] . "", $config['user'], $config['password']); #SQL конфиг

$res = $pdo->query("SELECT ID,post_content,post_title
FROM `wp_posts`
WHERE post_status in ('publish','inherit')  and ID<25000
ORDER BY `wp_posts`.`ID` DESC")->fetchAll(\PDO::FETCH_ASSOC);

$brands = getBrands();


$zemenit = 'ALCAPLAST';


foreach ($res as $data) {
    $s = $data['post_content'];

    $m = $data['post_title'];
    $ID = $data['ID'];
    echo $ID . '<br>';
    flush();

    $m = str_replace($zemenit, ' ', $m);
    $s = str_replace($zemenit, ' ', $s);

    $m = str_replace('  ', ' ', $m);
    $s = str_replace('  ', ' ', $s);


    $s = $pdo->quote($s);
    $m = $pdo->quote($m);


    if (strlen($m) > 3) {
        $bf = $pdo->query("UPDATE `u226168_zelmag`.`wp_posts` SET `post_content` = $s,
            `post_title` = $m WHERE `wp_posts`.`ID` =$ID;");

    }


}


function getBrands()
{

    $brands = '
    (Синикон)
    Днепр
BREEZE
r-red    
 Black Gear   
   Кросс 
  нсталь  
TР-сантехника    
  KESUDO  
   KENSUDO 
Unifix Min
СИНИКОН КОМФОРТ
 Германия
 DIXIS
 SMT
 Terma LASER
 ТRm
 BIMETTA DEL\' TeRRa
 Delta Plus и Ogint
 Ultra Plus Ogint
 ЛИДЕЯ
 Днепр
 General Fittings
 GF Италия
 ALCAPLAST
 VIR
 RBM
 ALСAPLAST
 VIR
 RBM
 TERMA
 Санита
 (Будфарфор, г Славута)
 Будфарфор, г Славута
COLIBRI
ВЕНТС
ДОМОВЕНТ
ПЛАНЕТА
Aquaplast
UPONOR
Ledeme
ITAP
ФЛАМКО
TRm
Henco
GROSS
Koer
SD Forte
STA
VALVE 
Водолей
Дайвер
Дачник
Ручеёк
Урожай
Euroaqua
Omhi Aqwa
Optima
Rona
Euroaqua
Kenle
Needle
Omhi Aqwa
Водолей
HQB
THJ
WILO
BEROSSI
FORMA
LEDEME
MELODIA
TERMA
ALCAPLAST
Псков
BACH
ЕВРОЛЮКС
Terminus
SANITA 
Santeri 
Libero
McPro
Ex-Promt
LEMARK
MOFEM 
ROSSINKA 
SERRA
РИГЕЛЬ-СИБ 
Atlas	
USTM
АКВАБРАЙТ
AQUA
ВЛМЗ 
BUGATTI 
FORNARA 
ARCO
TERMA
TERMA GREET
TERMA R
TERMA R RED
TERMA СВ
TР-сантехника
Русло
TeRma
KESUDO
TUBOFLEX 
GEBO
СИНИКОН 
OSTENDORF
ПОЛИТРОН
SMART
H&C
Henco
TRM
Aquatech
АКВАБРАЙТ
JEMIX
Oasis
Джилекс
Jimten
BLACK GEAR
Wester
Fitex
BIMETTA DEL’ TeRRa
Delta Plus Ogint
FONDITAL EXPERTO A
BIMETTA CITY
Ultra Plus Ogint
Heaton
ЛИДЕЯ	
PE-Xa
PRO AQUA 
ALCAPLAST
JIMTEN
АНИ-ПЛАСТ
ВИР-ПЛАСТ
ENERGOFLEX
ALCAPLAST
JIMTEN
АНИ-пласт
PASTUM
TANGIT
UNIPAK
САНТЕХМАСТЕРГЕЛЬ
Garden
Grundfos
CLEVER 
Lemark 
ТМ WILO 
WILO
Tefal
Унибокс ГЕБА
STA
FITTEX
Fittex
ATLAS
GEBERIT
Colombo
GEBERIT
Ostendorf
HENCO
PPRC
RINOXDUE
RINOX';


    $brands = explode("\n", $brands);
    $brands = array_map("trim", $brands);
    return $brands;
}