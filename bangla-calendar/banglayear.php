<?php

$jan = "Jan";
$feb = "Feb";
$mar = "Mar";
$apr = "Apr";
$may = "May";
$jun = "Jun";
$jul = "Jul";
$aug = "Aug";
$sep = "Sep";
$oct = "Oct";
$nov = "Nov";
$dec = "Dec";

$Sunday = "Sunday";
$Monday = "Monday";
$Tuesday = "Tuesday";
$Wednesday = "Wednesday";
$Thursday = "Thursday";
$Friday = "Friday";
$Saturday = "Saturday";


$mon = date('M');
$ddll = date('l');
$dddd = date('d');
$ddyy = date('Y');

$bm = $an{1};

$bmm11 = "বৈশাখ";
$bmm12 = "জ্যৈষ্ঠ";

$bmm21 = "আষাঢ়";
$bmm22 = "শ্রাবণ";

$bmm31 = "ভাদ্র";
$bmm32 = "আশ্বিন";

$bmm41 = "কার্তিক";
$bmm42 = "অগ্রহায়ণ";

$bmm51 = "পৌষ";
$bmm52 = "মাঘ";

$bmm61 = "ফাল্গুন";
$bmm62 = "চৈত্র";


if($bm == $bmm11){
    $season = "গ্রীষ্মকাল";
}
if($bm == $bmm12){
    $season = "গ্রীষ্মকাল";
}


if($bm == $bmm21){
    $season = "বর্ষাকাল";
}
if($bm == $bmm22){
    $season = "বর্ষাকাল";
}


if($bm == $bmm31){
    $season = "শরৎকাল";
}
if($bm == $bmm32){
    $season = "শরৎকাল";
}


if($bm == $bmm41){
    $season = "হেমন্তকাল";
}
if($bm == $bmm42){
    $season = "হেমন্তকাল";
}

if($bm == $bmm51){
    $season = "শীতকাল";
}
if($bm == $bmm52){
    $season = "শীতকাল";
}

if($bm == $bmm61){
    $season = "বসন্তকাল";
}
if($bm == $bmm62){
    $season = "বসন্তকাল";
}

$datone = $dddd[0];
$dattwo = $dddd[1];

$ddy1 = $ddyy[0];
$ddy2 = $ddyy[1];
$ddy3 = $ddyy[2];
$ddy4 = $ddyy[3];


if(($jan == $mon)){
    $month = "জানুয়ারী ";
}
if(($feb == $mon)){
    $month = " ফেব্ররুয়ারি ";
}
if(($mar == $mon)){
    $month = " মার্চ ";
}
if(($apr == $mon)){
    $month = " এপ্রিল ";
}
if(($may == $mon)){
    $month = " মে ";
}
if(($jun == $mon)){
    $month = " জুন ";
}
if(($jul == $mon)){
    $month = " জুলাই ";
}
if(($aug == $mon)){
    $month = " অগাস্ট ";
}
if(($sep == $mon)){
    $month = " সেপ্টেম্বর ";
}
if(($oct == $mon)){
    $month = " অক্টোবর ";
}
if(($nov == $mon)){
    $month = " নভেম্বর ";
}
if(($dec == $mon)){
    $month = " ডিসেম্বর ";
}

//Today Day

if(($Sunday == $ddll)){
    $rr1 = " রবিবার ";
}
if(($Monday == $ddll)){
    $rr1 = " সোমবার ";
}
if(($Tuesday == $ddll)){
    $rr1 = " মঙ্গলবার ";
}
if(($Wednesday == $ddll)){
    $rr1 = " বুধবার ";
}
if(($Thursday == $ddll)){
    $rr1 = " বৃহস্পতিবার ";
}
if(($Friday == $ddll)){
    $rr1 = " শুক্রবার ";
}
if(($Saturday == $ddll)){
    $rr1 = " শনিবার ";
}

//Today Date

if(($datone == 0)){
    $rrdd = "০";
}
if(($datone == 1)){
    $rrdd = "১";
}
if(($datone == 2)){
    $rrdd = "২";
}
if(($datone == 3)){
    $rrdd = "৩";
}
if(($datone == 4)){
    $rrdd = "৪";
}
if(($datone == 5)){
    $rrdd = "৫";
}
if(($datone == 6)){
    $rrdd = "৬";
}
if(($datone == 7)){
    $rrdd = "৭";
}
if(($datone == 8)){
    $rrdd = "৮";
}
if(($datone == 9)){
    $rrdd = "৯";
}

if(($dattwo == 0)){
    $rrddtwo = "০";
}
if(($dattwo == 1)){
    $rrddtwo = "১";
}
if(($dattwo == 2)){
    $rrddtwo = "২";
}
if(($dattwo == 3)){
    $rrddtwo = "৩";
}
if(($dattwo == 4)){
    $rrddtwo = "৪";
}
if(($dattwo == 5)){
    $rrddtwo = "৫";
}
if(($dattwo == 6)){
    $rrddtwo = "৬";
}
if(($dattwo == 7)){
    $rrddtwo = "৭";
}
if(($dattwo == 8)){
    $rrddtwo = "৮";
}
if(($dattwo == 9)){
    $rrddtwo = "৯";
}

//Today Year

if(($ddy1 == 0)){
    $ddyy1 = "০";
}
if(($ddy1 == 1)){
    $ddyy1 = "১";
}
if(($ddy1 == 2)){
    $ddyy1 = "২";
}
if(($ddy1 == 3)){
    $ddyy1 = "৩";
}
if(($ddy1 == 4)){
    $ddyy1 = "৪";
}
if(($ddy1 == 5)){
    $ddyy1 = "৫";
}
if(($ddy1 == 6)){
    $ddyy1 = "৬";
}
if(($ddy1 == 7)){
    $ddyy1 = "৭";
}
if(($ddy1 == 8)){
    $ddyy1 = "৮";
}
if(($ddy1 == 9)){
    $ddyy1 = "৯";
}

if(($ddy2 == 0)){
    $ddyy2 = "০";
}
if(($ddy2 == 1)){
    $ddyy2 = "১";
}
if(($ddy2 == 2)){
    $ddyy2 = "২";
}
if(($ddy2 == 3)){
    $ddyy2 = "৩";
}
if(($ddy2 == 4)){
    $ddyy2 = "৪";
}
if(($ddy2 == 5)){
    $ddyy2 = "৫";
}
if(($ddy2 == 6)){
    $ddyy2 = "৬";
}
if(($ddy2 == 7)){
    $ddyy2 = "৭";
}
if(($ddy2 == 8)){
    $ddyy2 = "৮";
}
if(($ddy2 == 9)){
    $ddyy2 = "৯";
}

if(($ddy3 == 0)){
    $ddyy3 = "০";
}
if(($ddy3 == 1)){
    $ddyy3 = "১";
}
if(($ddy3 == 2)){
    $ddyy3 = "২";
}
if(($ddy3 == 3)){
    $ddyy3 = "৩";
}
if(($ddy3 == 4)){
    $ddyy3 = "৪";
}
if(($ddy3 == 5)){
    $ddyy3 = "৫";
}
if(($ddy3 == 6)){
    $ddyy3 = "৬";
}
if(($ddy3 == 7)){
    $ddyy3 = "৭";
}
if(($ddy3 == 8)){
    $ddyy3 = "৮";
}
if(($ddy3 == 9)){
    $ddyy3 = "৯";
}

if(($ddy4 == 0)){
    $ddyy4 = "০";
}
if(($ddy4 == 1)){
    $ddyy4 = "১";
}
if(($ddy4 == 2)){
    $ddyy4 = "২";
}
if(($ddy4 == 3)){
    $ddyy4 = "৩";
}
if(($ddy4 == 4)){
    $ddyy4 = "৪";
}
if(($ddy4 == 5)){
    $ddyy4 = "৫";
}
if(($ddy4 == 6)){
    $ddyy4 = "৬";
}
if(($ddy4 == 7)){
    $ddyy4 = "৭";
}
if(($ddy4 == 8)){
    $ddyy4 = "৮";
}
if(($ddy4 == 9)){
    $ddyy4 = "৯";
}

$DateAndTime =  "আজ ".$rr1.$rrdd.$rrddtwo.$month.$ddyy1.$ddyy2.$ddyy3.$ddyy4.", ".$an{0}." ".$an{1}." ".$an{2}." বঙ্গাব্দ, ".$season;
