<?php
//現在の日付と時間
$d=date("Y-m-d H:i:s");
printf("現在は%sです。\n",$d);
 

//昨日＋明日＋1週間後の日付
$today=date("Y年m月d日");
$tomorrow=date("Y年m月d日",strtotime("1 day"));
$yesterday=date("Y年m月d日",strtotime("-1 day"));
$oneweekLater=date("Y年m月d日",strtotime("7 day"));

printf( "昨日は%sです。\n", $yesterday);
printf( "明日は%sです。\n", $tomorrow);
printf( "1週間後は%sです。\n", $oneweekLater);
 
 
//今日の３ヶ月後の日付、今日から何日後か
$anyday="2023-03-20";
$anyday_threemonthLater=date("Y-m-d",strtotime('+3 month',strtotime($anyday)));
printf( "%sの3ヶ月後は、%sです。\n",$anyday, $anyday_threemonthLater);


$datetime = new DateTime('2023/06/20');
$current  = new DateTime('now');
$diff     = $current->diff($datetime);

printf('今日から %d 日後です。',
    $diff->days);
?>