<?php
    $hdp=21-intval(date('G'));
    $mdp=37-intval(date('i'))-1;
    $sdp=60-intval(date('sa'));
    if($mdp<0){
        $mdp=60+$mdp;
        $hdp=$hdp-1;
    }
    if($hdp<0){
        $hdp=$hdp*-1;
    }
    echo "Do papieżowej $hdp godzin, $mdp minut, $sdp sekund";?>
    <script>
        setTimeout(function() {
            window.location.reload();
        }, 1000);
        </script>