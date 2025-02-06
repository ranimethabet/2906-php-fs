<?php




// for next cases, the color should be red => Canclled, Refunded, Complain
// for next cases, the color should be blue => Pending, On Hold, Postpond
// for next cases, the color should be green => Delivered, Shipped, Reviewed
// handle not matched status

/*$status = 'sjjj';
$color = 'black';

if ($status=='cancelled'||$status=='refunded'||$status=='complain')
{
    $color='red';
}
elseif ($status=='pending'||$status=='on hold'||$status=='postpond')
{
    $color='blue';
}
elseif ($status=='deliverd'||$status=='shipped'||$status=='reviewed')
{
    $color='green';
}
else
{
    $color=false;
}

echo $color===false? "handle not matched status": "<h3 style='color: $color'>status is $status</h3>";


*/
// for next cases, the color should be red => Canclled, Refunded, Complain
// for next cases, the color should be blue => Pending, On Hold, Postpond
// for next cases, the color should be green => Delivered, Shipped, Reviewed
// handle not matched status

/*$status='shipped';
$color='black';
switch($status){
    case'cancelled':
    case'refunded':
    case'complain':
        $color='red';
        break;
    case'pending':
    case'on hold':
    case'postpond':
        $color='blue';
        break;
        
        case'delivered':
    case'shipped':
        case'reviewed':
        $color='green';
        break;
default: $color=false;
}
echo $color===false?"handle not matched status":"<h3 style='color: $color'>status is $status</h3>";
*/

// for next cases, the color should be red => Canclled, Refunded, Complain
// for next cases, the color should be blue => Pending, On Hold, Postpond
// for next cases, the color should be green => Delivered, Shipped, Reviewed
// handle not matched status
$status='shipped';
$color='';
$color=match($status)
{
    'cancelled','refunded','complain'=>'red',
    'pending','on hold','postpond'=>'blue',
    'delivered','shipped','reviewed'=>'green',
    default=>false
};
echo $color===false?"handle not matched status":"<h3 style='color: $color'>status is $status</h3>";
