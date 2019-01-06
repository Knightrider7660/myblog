<?php

    function money($amount){
        return 'Tk '.number_format($amount, 2);
    }

    function money_abs($amount){
        $amount1 = abs($amount);
        return 'Tk '.number_format($amount1, 2);
    }

    function pub_date($date){
        if($date == ''){
            return '';
        }else{
            return date("d/m/Y", strtotime(str_replace("/", "-",  $date)));
        }
    }

    function get_month($date){
        if($date == ''){
            return '';
        }else{
            return date("m", strtotime(str_replace("/", "-",  $date)));
        }
    }

    function get_year($date){
        if($date == ''){
            return '';
        }else{
            return date("Y", strtotime(str_replace("/", "-",  $date)));
        }
    }

function pub_month($date){
    if($date == ''){
        return '';
    }else{
        return date("F, Y", strtotime(str_replace("/", "-",  $date)));
    }
}

    function invoice_n($numbers){
        return str_pad($numbers, 5, '0', STR_PAD_LEFT);
    }

     function ac_type($accountNumber){
         $strs = str_split($accountNumber,3);

         $output = '';
         foreach ($strs as $val){
             $output .= $val.'-';
         }

         return rtrim($output, "-");
     }

    function date_range($dateRange){
         $date_range = explode(' - ', $dateRange);
         $start_date = date("Y-m-d", strtotime(str_replace("/", "-",  $date_range[0])));
         $end_date = date("Y-m-d", strtotime(str_replace("/", "-",  $date_range[1])));

         return [$start_date, $end_date];
    }

    function date_time_range($dateRange){
        $date_range = explode(' - ', $dateRange);
        $start_date = date("Y-m-d H:i:s", strtotime(str_replace("/", "-",  $date_range[0]).' 00:00:00'));
        $end_date = date("Y-m-d H:i:s", strtotime(str_replace("/", "-",  $date_range[1]).' 23:59:59'));

        return [$start_date, $end_date];
    }

    function gn_date($month, $year){
        $dates = [];
        if($month != ''){

            $total_day = cal_days_in_month(CAL_GREGORIAN, $month, $year);

            $st_date = date('Y-m-d', strtotime($year.'-'.$month.'-01'));
            $st_date = strtotime($st_date);

            for ($i = 1; $i <= $total_day; $i++){
                $dates[] = date('d/m/Y', $st_date);
                $st_date = strtotime('+1 day', $st_date);
            }
        }
        return $dates;
    }


 function ck_file($disk, $path, $file_name, $size='sm')
 {
     $exists = Storage::disk($disk)->exists($file_name);

     $file = $path.'/'.$file_name;

      if($exists){
          return asset($file);
      }else{
          return asset('public/no-image_'.$size.'.jpg');
      }

 }

