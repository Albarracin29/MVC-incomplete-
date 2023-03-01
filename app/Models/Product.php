<?php

namespace App\Models;


class Product{
    public static function all(){

        $Product_info =[
                [
                    'id'        =>  '1',
                    'img'       =>  'assets/img/biko.jpg'
                ],
                [
                    'id'        =>  '2',
                    'img'       =>  'assets/img/bumbong.jpg'                
                ],
                [
                    'id'        =>  '3',
                    'img'       =>  'assets/img/espasol.jpg'
                ],
                [
                    'id'        =>  '4',
                    'img'       =>  'assets/img/kalamay.jpg'
                ],
                [
                    'id'        =>  '5',
                    'img'       =>  'assets/img/kutsinta.jpg'
                ],
                [
                    'id'        =>  '6',
                    'img'       =>  'assets/img/puto.jpg'
                ],
                [
                    'id'        =>  '7',
                    'img'       =>  'assets/img/sapin-sapin.jpg'
                ],
                [
                    'id'        =>  '8',
                    'img'       =>  'assets/img/suman.jpg'
                ]
        ];
        return ($Product_info);
        
    }
}