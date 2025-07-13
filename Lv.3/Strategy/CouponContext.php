<?php
declare(strict_types=1);

namespace Lv3\Strategy;

//Define the context class for the strategy pattern to be focused.
//Receive the desired strategy.
class CouponContext{
    private CarCouponStrategy $strategy;

    public function __construct(CarCouponStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    //We could have some setStrategy() and executeStrategy() for use, depending on the context.
    //setStrategy() allows to change the strategy at runtime.
    public function setStrategy(CarCouponStrategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    //getStrategy() just have it sense if you need to check which strategy is being used.

    //The context just wants to generate a coupon. The strategy decides how to apply it.
    public function generateCoupon(bool $isHighSeason, bool $isBigStock): string
    {
        return $this->strategy->generateCoupon($isHighSeason, $isBigStock);
    }

   
}

?>