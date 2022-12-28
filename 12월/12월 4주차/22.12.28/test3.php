<?php
   function man_age($year, $month, $day, $b_year, $b_month, $b_day){
    if($b_month < $month){
        $age = $year - $b_year;
    }else if($b_month == $month){
        if($b_day <= $day){
            $age = $year - $b_year;
        }else{
            $age = $year - $b_year - 1;
        }
    }else{
        $age = $year - $b_year - 1;
    }
    return $age;
   }

   $now_year = 2022;
   $now_month = 12;
   $now_day = 25;

   $birth_year = 2000;
   $birth_month = 10;
   $birth_day = 13;

   $your_age = man_age($now_year, $now_month, $now_day, $birth_year, $birth_month, $birth_day);

   echo "오늘 날짜 : $now_year 년 $now_month 월 $now_day 일 <br> ";
   echo "생년 월일 : $birth_year 년 $birth_month 월 $birth_day 일 <br>";
   echo "현재 만 나이 : $your_age 세";