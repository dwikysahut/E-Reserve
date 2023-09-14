
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('randomGenerator'))
{
function randomGenerator()
{
    $today = date('YmdHi');
    $startDate = date('YmdHi', strtotime('-10 days'));
    $range = $today - $startDate;
    $rand = rand(0, $range);
    return $rand;
    
}
}
?>