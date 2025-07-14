<?php
declare(strict_types=1);

namespace Lv3\Strategy;

use Lv3\Strategy\CarCouponInterface;

require_once 'CarCouponInterface.php';

class BMWCouponGenerator implements CarCouponStrategy{
    private int $seasonDiscount = 5;
    private int $stockDiscount = 7;

    private function addSeasonDiscount(bool $isHighSeason): int
    {
        return !$isHighSeason ? $this->seasonDiscount : 0;
    }

    private function addStockDiscount(bool $isBigStock): int
    {
        return !$isBigStock ? $this->stockDiscount : 0;
    }
}
?>
