<?php
declare(strict_types=1);

namespace Lv3\Strategy;

use Lv3\Strategy\CarCouponInterface;

require_once 'CarCouponInterface.php';

class MercedesCouponGenerator implements CarCouponInterface{
    private float $seasonDiscount;
    private float $stockDiscount;

    public function __construct(float $seasonDiscount, float $stockDiscount)
    {
        $this->seasonDiscount = $seasonDiscount;
        $this->stockDiscount = $stockDiscount;
    }

    public function addSeasonDiscount(): float
    {
        return $this->seasonDiscount;
    }

    public function addStockDiscount(): float
    {
        return $this->stockDiscount;
    }
}
?>