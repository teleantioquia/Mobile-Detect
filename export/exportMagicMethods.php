<?php
use Detection\Mobile_Detect;
$detect = new Mobile_Detect;

/**
 * Dump all methods (+ extended)
 * Use this script to generate comments like "@method bool isiPhone()"
 * php -a export/exportMagicMethods.php > methods.txt
 */
foreach($detect->getRules() as $name => $regex) {
    echo "is$name()\n";
}