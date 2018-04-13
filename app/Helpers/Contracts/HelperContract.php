<?php
namespace App\Helpers\Contracts;

Interface HelperContract
{
        public function sendEmail($to,$subject,$data,$view,$type);
        public function createUser($data);
        public function createUserData($data);
        public function createProduct($data);
        public function createProductData($data);
        public function getProducts();
        public function getProduct($id);
        public function checkout();
        public function addToCart($user,$id);
        public function removeFromCart($user,$id);
        public function getWinners();
}
 ?>