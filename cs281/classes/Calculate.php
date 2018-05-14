<?php 
class Calculate
{

    public static function calculatePriceProductCart($pro)
    {
        // include "Details.php";
        $sum = 0;
        foreach ($pro as $key => $value) {
            $product = Product::insertProduct($value["idcart_product"]);
            $sum += ($product->getprice() - $product->getsale()) * $value['amount'];
        }
        return $sum;
    }

    public static function calculatePriceProductHistory($pro)
    {
        // include "Details.php";
        $sum = 0;
        foreach ($pro as $key => $value) {
            $product = Product::insertProduct($value["id_product"]);
            $sum += ($product->getprice() - $product->getsale()) * $value['amount'];
        }
        return $sum;
    }

    public static function calculateVatProduct($priceProduct)
    {
        $sum = 0.07;
        $sum *= $priceProduct;
        return round($sum);
    }
}


?>