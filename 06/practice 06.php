<?php
$total =0;
const VAT=0.14;
function check ($price)
{
    global $total;
    $total+=$price + vat($price);
    echo "the total is :$total<hr />";    
}

function vat($price)
{
    return $price*VAT;
}
check (5000);
