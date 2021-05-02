<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products;

class HomeController extends Controller
{
    //
    public function index(Request $request){

        if ($request->check){
            $columns=[
                'id',
                'name',
                'article',
                'category',
                'weight',
                'price',
                'status',
                'created_at'
            ];

            $str=" where ";

            for($i=0;$i<count($request->check);$i++){
                if (intval($request->check[$i])==0 || intval($request->check[$i])==4 || intval($request->check[$i])==5){

                        $str=$str.$columns[intval($request->check[$i])];
                        if ($request->select[intval($request->check[$i])]=='equal')
                            $str=$str."= '".$request->column_val[intval($request->check[$i])]."'";
                        else if ($request->select[intval($request->check[$i])]=='more')
                            $str=$str.">= '".$request->column_val[intval($request->check[$i])]."'";
                        else
                            $str=$str."<= '".$request->column_val[intval($request->check[$i])]."'";

                    }
                else if (intval($request->check[$i])==1 || intval($request->check[$i])==2){

                        $str=$str.$columns[intval($request->check[$i])];
                        if ($request->select[intval($request->check[$i])]=='equal')
                            $str=$str." = '".$request->column_val[intval($request->check[$i])]."'";
                        else
                            $str=$str." like '%".$request->column_val[intval($request->check[$i])]."%'";

                    }
                else if(intval($request->check[$i])==7){

                    $str=$str.$columns[intval($request->check[$i])];
                    if ($request->select[intval($request->check[$i])]=='equal')
                        $str=$str." like '%".$request->column_val[intval($request->check[$i])]."%'";
                    else if ($request->select[intval($request->check[$i])]=='later')
                        $str=$str." > '".$request->column_val[intval($request->check[$i])]."'";
                    else if ($request->select[intval($request->check[$i])]=='earlier')
                        $str=$str." < '".$request->column_val[intval($request->check[$i])]."'";

                }
                else if(intval($request->check[$i])==6 && $request->statuses){

                    $str=$str."(";
                    for($j=0;$j<count($request->statuses);$j++){
                        $str=$str." status = '".$request->statuses[$j]."'";
                        if ($j!=count($request->statuses)-1){
                            $str=$str." or ";
                        }
                    }
                    $str=$str." )";

                }
                else if(intval($request->check[$i])==3 && $request->categories){

                    $str=$str."(";
                    for($j=0;$j<count($request->categories);$j++){
                        $str=$str." category = '".$request->categories[$j]."'";
                        if ($j!=count($request->categories)-1){
                            $str=$str." or ";
                        }
                    }
                    $str=$str." )";

                }
                if ($i!=count($request->check)-1){
                    $str=$str." and ";
                }
                // print($str."<br>");
            }
            if ($str==" where ")
            $products = Products::all()->take(10);
            else
            $products = DB::select('select * from products'.$str." limit 10", []);

            $categories = DB::select('select category from products group by category', []);
            $statuses = DB::select('select status from products group by status', []);
            return view('welcome',['products'=>$products,'statuses'=>$statuses,'categories'=>$categories]);
        }

        $categories = DB::select('select category from products group by category', []);
        $statuses = DB::select('select status from products group by status', []);
        $products = Products::all()->take(10);
        return view('welcome',['products'=>$products,'statuses'=>$statuses,'categories'=>$categories]);
    }
}
