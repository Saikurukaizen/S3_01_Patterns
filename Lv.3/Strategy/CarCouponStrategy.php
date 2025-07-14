<?php
declare(strict_types=1);

namespace Lv3\Strategy;

//That common interface allows to work with any strategy with no care about which car is implemented.
interface CarCouponInterface{

    public function generateCoupon(bool $isHighSeason, bool $isBigStock): string;
}

?>