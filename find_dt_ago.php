<?php
date_default_timezone_set('Asia/kolkata');
function find_dt_ago($current_date,$previous_date)
{
    $result=$current_date - $previous_date;
    if($result <1){
        return'just now';
    }
    $dts=[
        1=>'sencond',
        60=>'minute',
        60*60=>'hour',
        24*60*60=>'day',
        30*24*60*60=>'month',
        365*24*60*60=>'year'
    ];
    krsort($dts);

    $dts_plural =[
        'sencond'=>'senconds',
        'minute'=>'minutes',
        'hour'=>'hours',
        'day'=>'days',
        'month'=>'months',
        'year'=>'years'
    ];

  /*  echo'<pre>';
    print_r($dts);
    echo $result ."<br>";
    echo $current_date."<br>";
    echo $previous_date ."<br>";
    echo date('d-m-y h:i:s A');
*/
    foreach ($dts as $sec =>$name)
    {
        $output_time=$result / $sec;
        $r=round($output_time);
        if($r >= 1 )
        {
            return  $r   .'  '.(($r > 1) ? $dts_plural[$name] : $name).'  ago';
        }
    }
}
$previous_date = strtotime ('13-08-2021 09:21:05 pm');
$current_date= strtotime(date ('d-m-Y h:i:s a'));
//YEAR y-->23 Y--->2023


echo find_dt_ago($current_date,$previous_date);





?>