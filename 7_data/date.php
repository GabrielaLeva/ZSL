<?php
    echo "dzień-miesiąc-rok:".date('d-m-y').'<br>';
    echo "dzień-miesiąc-rok:".date('d-M-Y').'<br>';
    setlocale(LC_ALL,'polish');
    echo strftime('$d $B $Y').'<br>';
    echo date('G:i:s').'<br>';
    echo date('H:i:sa').'<br>';
    $hdp=21-intval(date('G'));
    $mdp=37-intval(date('i'))-1;
    $sdp=60-intval(date('sa'));
    if($hdp<0){
        $hdp=$hdp*-1;
    }
    if($mdp<0){
        $mdp=$mdp*-1;
    }
    echo "Do papieżowej $hdp godzin, $mdp minut, $sdp sekund";?>
    <script>
        setTimeout(function() {
            window.location.reload();
        }, 1000);
        </script>
    <?php
        //mktime
    $today=mktime(0,0,0,date('m'),date('d'),date('Y'));
    echo $today.'<br>';
    $year=$today/(60*60*24*365);
    $year=$year-50;
    echo (int)$year.'<br>';

    ?>