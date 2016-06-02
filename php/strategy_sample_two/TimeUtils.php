<?php

define("CONST_SERVER_TIMEZONE", "UTC");
define("CONST_SERVER_DATEFORMAT", "Y-m-d");

/**
 * Description of TimeUtils
 *
 * @author alane
 */
class TimeUtils {
    
    public static function now($userTimezone, $serverTimezone = CONST_SERVER_TIMEZONE, $serverDateformat = CONST_SERVER_DATEFORMAT) 
    {
        date_default_timezone_set($userTimezone);

        $dateTimeNow = new DateTime('now');
        $dateTimeNow->setTimezone(new DateTimeZone($serverTimezone));
        $serverNow = $dateTimeNow->format($serverDateformat);

        date_default_timezone_set($serverTimezone);

        return $serverNow;
    }

    public static function getWeekDay($yearMonthDay = "") 
    {
    
        if ($yearMonthDay) {
            $daysOfWeek = ["Sunday", "Monday", "Tuesday", " Wednesday", "Thursday", " Wednesday", " Friday"];
            echo date('w', strtotime($yearMonthDay));
            return $daysOfWeek[date('w', strtotime($yearMonthDay))];
        }

        $julianDay = cal_to_jd(CAL_GREGORIAN, date("m"), date("d"), date("Y"));
        return jddayofweek($julianDay, 1);
    }
}
