<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndAboutController extends Controller
{
    public function about(){
        return view("front-end.about");
    }

    public function contact(){
        return view("front-end.contact");
    }

    public function mission(){
        return view("front-end.mission");
    }

    public function product(){
        return view("front-end.product");
    }
    public function products_details(){
        return view("front-end.product-details");
    }
    public function brand(){
        return view("front-end.brand");
    }
    public function testimonial(){
        return view("front-end.testimonial");
    }
    public function gallery(){
        return view("front-end.gallery");
    }
    public function all_photos(){
        return view("front-end.all-photos");
    }

}
