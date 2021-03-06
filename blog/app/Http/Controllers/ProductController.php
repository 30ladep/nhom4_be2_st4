<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Product;
use DB,Cart;
use  App\Banner;

use Auth;
class ProductController extends Controller
{
    //get all product
    function getAllProduct(){
        $products= Product::all();
        return view('index',array(
            'products' => $products
        ));
    }

    //get all product with paginate 
    function getAllProductPaginate(){
        $products = Product::paginate(12);
        $banners = Banner::all();
        $productsBestSeller = Product::all()->take(8)->sortBy('sold');
        return view('index',array(
            'products' => $products,
            'productsbestseller'=>$productsBestSeller,
            'banners'=>$banners
        ));
    }

    //get detail product
    function getDetailProductByID(Request $request){       
        $id = $request->id;      
        $productsDetailByID = Product::where('id',$id)->first();
        $typeProductRelated = $productsDetailByID->type_id;
        $productRelated = Product::where('type_id',$typeProductRelated)->get();
        $productRelated->take(8);
        $DuocDanhGia = -1;
        //thêm lượt xem
        $view = DB::table('products')->where('id', $id)->first()->view + 1;
        DB::table('products')->where('id', $id)->update([
            'view'=>$view
        ]);
        //dd($DuocDanhGia);
        //kiem tra xem nguoi nay duoc danh gia khong
        if(Auth::user() != null){
            $bills = DB::table('bills')->where('user_id', Auth::user()->id)->where('status', 1)->get();
            if(count($bills) > 0){
                foreach($bills as $item){
                    $detail_bills = DB::table('detail_bills')->where('bill_id', $item->id)->where('product_id', $id)->get();            
                    if(count($detail_bills) > 0){
                        $DuocDanhGia = 1;
                    }
                }
            }
        }
        //danh sach danh gia
        $comment = DB::table('comment')->where('product_id', $id)->orderBy('id','desc')->get();
        $user = DB::table('users')->get();
        return view('shop-single-product',
        ['products'=>$productsDetailByID,
        'productRelated'=>$productRelated,
        'DuocDanhGia'=>$DuocDanhGia,
        'comment'=>$comment,
        'users'=>$user
        ]);
    }        
    

   
    

    //get product search
    function searchProduct(Request $request){
        $keysword = $request->timkiem;
        $banners = Banner::all();
         $products_search = Product::where('product_name','like',"%$keysword%")->orWhere('note','like',"%$keysword%")->take(16)->paginate(8);
        $productsBestSeller = Product::all()->take(8)->sortBy('sold');
        return view('searchproduct',['products_search'=>$products_search,'tukhoa'=>$keysword,'productsbestseller'=>$productsBestSeller,'banners'=>$banners]);
    }

    //get product best seller 
    function getProductBestSeller(){
        $products = Product::all()->sort('sold');
    }

    //addcart
    function addCart($id){
        $productByID = DB::table('products')->where('id',$id)->first();
        Cart::add(array(
            'id'=>$id,
            'name'=>$productByID->product_name,
            'qty'=>1,
            'price'=>$productByID->price,
            'weight'=>0,
            'options'=>array( 
                'image'=>$productByID->image,
                'sold'=>$productByID->sold,
                'hot'=>$productByID->hot,
                'note'=>$productByID->note,
                'create_date'=>$productByID->create_date)));
        
        return redirect()->route('cart');
    }
   
    //cart
    function cart(){
        $cart = Cart::content(); 
        $cart_priceTotal = Cart::priceTotal();
        return view('shop-cart',compact('cart','cart_priceTotal'));
    }

    //decrement quality
    function deQuality($rowID){
        $row = Cart::get($rowID);
        Cart::update($rowID,$row->qty -=1);
        $content = Cart::content();  
        return redirect()->route('cart');
    }
    
    //increment quality
    function inQuality($rowID){
        $row = Cart::get($rowID);
        Cart::update($rowID,$row->qty +=1);
        $content = Cart::content();
        return redirect()->route('cart');
    }
    function Catalog(){
        return view('shop-catalog');
    }
}
