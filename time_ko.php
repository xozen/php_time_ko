<?
function time_text($date, $now_date = false) {

    if (!$now_date) $now_date = date("Y-m-d H:i:s", time());

    $Ymd_date = date("Ymd", strtotime($date));
    $Ymd_now = date("Ymd", strtotime($now_date));
    $Ymd_diff = $Ymd_now - $Ymd_date;

    if ($Ymd_diff == 0) {  //오늘

        $diff = strtotime($now_date) - strtotime($date);

        if ($diff < 86400) $text = floor($diff / 3600)."시간 전";
        if ($diff < 3600) $text = floor($diff / 60)."분 전";
        if ($diff < 60) $text = "방금";

    } else if ($Ymd_diff == 1) {

        if (date("a",strtotime($date)) == "pm") $text_apm = "오후 ";
        $text = "어제 ".$text_apm.date("g",strtotime($date))."시";

    } else if ($Ymd_diff == 2) {

        if (date("a",strtotime($date)) == "pm") $text_apm = "오후 ";
        $text = "그제 ".$text_apm.date("g",strtotime($date))."시";

    } else {

        $text = date("n월 j일", strtotime($date));

    }

    return $text;

}
?>
