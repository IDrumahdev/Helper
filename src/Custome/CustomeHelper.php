<?php

namespace Ibnudirsan\Helper\Custome;

use Illuminate\Support\Str;

class CustomeHelper {

    /**
     * Format Date
     *
     * @param [type] $date
     * @return void
     */
    public static function formatDate($date) {
        return date('d-m-Y H:i:s', strtotime($date));
    }

    /**
     * Format Rupiah
     *
     * @param [type] $param
     * @return void
     */
    public static function idr($param) {
        $resultIdr = "Rp " . number_format($param,0,',','.');
        return $resultIdr;
    }
    

    /**
     * Format Year-Month-01 as time goes on.
     *
     * @return void
     */
    public static function StartDate() {
        $to_day = date("Y-m-d");
            return $result_dayfirst = date('Y-m-01', strtotime($to_day));
    }

    /**
     * Format (Year-Month-End Date) as time runs.
     *
     * @return void
     */
    public static function EndDate() {
        $to_day     = date("Y-m-d");
        $day_last   = date('Y-m-t', strtotime($to_day));
            return $result_daylast = date('Y-m-t', strtotime($day_last));
    }

    /**
     * Fromat Email User
     */
    public static function emailUser($email)
    {
        $userMail       = explode("@",$email);
        $resultUserMail = Str::mask($userMail[0], '*',3, 4);
        $domain         = $userMail[1];
        $result         = $resultUserMail.'@'.$domain;
            return $result;
    }

}