<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Item;
use App\Product;
use App\Seller;
use App\Shipping;
use App\Slider;
use App\Reservation;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Charts;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
      $categoryCount= Category::count();
      $productCount= Product::count();
      $sliderCount= Slider::count();
      $reservations= Reservation::where('status',false)->get();
      $contactCount=Contact::count();

      $stocks = Product::where('quantity','>',5)->get();
      $stockOut = Product::where('quantity','<',5)->get();

        $chart = Charts::database($stocks,'bar','highCharts')
            ->title("Monthly Stocks Products")
            ->elementLabel("Total Stocks")
            ->dimensions(1000, 500)
            ->responsive(true)
            ->width(0)
            ->height(300)
            ->groupByMonth(date('Y'), true);

        $charts = Charts::database($stockOut,'bar','highCharts')
            ->title("Monthly Stock Out Products")
            ->elementLabel("Total Stock Out")
            ->dimensions(100, 50)
            ->responsive(true)
            ->width(0)
            ->height(300)
            ->groupByMonth(date('Y'), true);

        $sales =  Shipping::where('status',1)->get();
        $saller =  Seller::where('status',1)->get();

        $saleReport = Charts::database($sales,'pie','Google')
            ->title("Monthly sale Products")
            ->elementLabel("Total sales product")
            ->dimensions(100, 50)
            ->responsive(true)
            ->width(0)
            ->height(300)
            ->groupByMonth(date('Y'), true);

        $sallers = Charts::database($saller,'pie','Google')
            ->title("Sellers")
            ->elementLabel("Total Sellers")
            ->dimensions(100, 50)
            ->responsive(true)
            ->width(0)
            ->height(300)
            ->groupByMonth(date('Y'), true);


        return view('admin.dashboard',compact('categoryCount','productCount','sliderCount','reservations','contactCount','chart','charts','saleReport','sallers'));

    }
}
