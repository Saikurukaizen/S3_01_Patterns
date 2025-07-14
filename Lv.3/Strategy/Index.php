<?php
declare(strict_types=1);

namespace Lv3\Strategy;

$context = new CouponContext(new BMWCouponGenerator());
echo "Get a " .$context->generateCoupon() . "off the price of your BMW!\n";

echo "\n";

$context->setStrategy(new MercedesCouponGenerator());
echo "Get a " .$context->generateCoupon() . "off the price of your Mercedes!\n";

?>