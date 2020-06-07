<?php
    $data = new DateTime();

    $data->add(DateInterval::createFromDateString("4 years 3 days"));
    
    //$data->sub(DateInterval::createFromDateString("4 years 3 days"));
    

    echo $data->format('d/m/Y h:i:s');

    echo "<br />";

    $hoje = new DateTime();

    $eventoNatal = new DateTime('2020-12-31');

    $diff = $hoje->diff($eventoNatal);

    echo $diff->format('%m meses, %d dias'); //@a mostra a diferença em dias - %m meses e %d dias do mês - %y anos 
?>