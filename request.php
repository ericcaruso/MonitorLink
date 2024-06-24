<?php

$host1 = 'google.com';
$ping = (exec('ping -c 1 google.com'));  // dominio ou ip para monitorar
$a = explode(" ", $ping); // executo comando via shell no servidor interno

$res = substr("$a[3]", 0, 5); // filtro resultado da shell trazendo somente tempo de resposta principal

if($res =='') {
    echo "<div class='spinner-grow text-danger' role='status'>
           <span class='visually-hidden'></span> $host1 offline ou inalcançável."; // caso a resposta for diferente
}
else {
    echo " <div class='spinner-grow text-success' role='status'>
           <span class='visually-hidden'></span>
           </div> $host1 online com $res ms";  // caso server responder
}

?>

<br><hr>

<?php
$host2 = 'facebook.com';
$ping = (exec('ping -c 1 facebook.com'));  // dominio ou ip para monitorar
$a = explode(" ", $ping); // executo comando via shell no servidor interno

$res = substr("$a[3]", 0, 5); // filtro resultado da shell trazendo somente tempo de resposta principal

if($res =='') {
    echo "<div class='spinner-grow text-danger' role='status'>
           <span class='visually-hidden'></span> $host2 offline ou inalcançável."; // caso a resposta for diferente
}
else {
    echo " <div class='spinner-grow text-success' role='status'>
           <span class='visually-hidden'></span>
           </div> $host2 online com $res ms";  // caso server responder
}

?>

<br><hr>

<?php
$host3 = 'youtube.com';
$ping = (exec('ping -c 1 youtube.com'));  // dominio ou ip para monitorar
$a = explode(" ", $ping); // executo comando via shell no servidor interno

$res = substr("$a[3]", 0, 5); // filtro resultado da shell trazendo somente tempo de resposta principal

if($res =='') {
    echo "<div class='spinner-grow text-danger' role='status'>
           <span class='visually-hidden'></span> $host3 offline ou inalcançável."; // caso a resposta for diferente
}
else {
    echo " <div class='spinner-grow text-success' role='status'>
           <span class='visually-hidden'></span>
           </div> $host3 online com $res ms";  // caso server responder
}

?>