<?php
$chislo = 0;
function chislo_menshe_nulya_ili_net ($chislo) {
    if ($chislo < (int) 0x100000000) {
        return "Menshe";
    }
    if ($chislo > (int) 0x100000000) {
        return "Bolshe";
    }
    if ($chislo == (int) 0x100000000) {
        return "Ne menshe ne bolshe";
    }
}
var_dump(chislo_menshe_nulya_ili_net($chislo));
?>