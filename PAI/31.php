<?php 
    $text = <<< T
     ZSL
     Zespół
     Szkół 
     Łączności
    T;
    echo "text<br>";
    echo nl2br($text);

    $name='jaNUsz KoWalSki';

    echo strtolower($name);
    echo strtoupper($name);
    echo ucfirst($name);
    echo ucwords($name);

    $lorem="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur corrupti, ullam cupiditate labore deleniti aut in commodi laudantium animi vero incidunt, consequuntur nam aspernatur, corporis blanditiis itaque quasi laboriosam molestias?";
    $col=wordwrap($lorem,40,'<br>');

    echo $col;

    $name="anna";
    $name1=" anna ";
    echo "Długość \$name:".strlen($name);
    echo "Długość \$name1:".strlen($name1);
    echo "Długość \$name1:".strlen(trim($name1));

    echo strstr($text, 'ZSL')

    ?>