<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products;

class HomeController extends Controller
{
    public function store(Request $request){

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

            $query = DB::table('products');

            for($i=0;$i<count($request->check);$i++){
                if ($request->check[$i] && ($i==0 || $i==4 || $i==5)){
                    if ($request->select[$i]=='equal')
                        $query=$query->where($columns[$i],'=',$request->column_val[$i]);
                    else if ($request->select[$i]=='more')
                        $query=$query->where($columns[$i],'>=',$request->column_val[$i]);
                    else
                        $query=$query->where($columns[$i],'<=',$request->column_val[$i]);

                }
                else if ($request->check[$i] && ($i==1 || $i==2)){
                    if ($request->select[$i]=='equal')
                        $query=$query->where($columns[$i],'=',$request->column_val[$i]);
                    else
                        $query=$query->where($columns[$i],'like','%'.$request->column_val[$i].'%');
                }
                else if ($request->check[$i] && ($i==7)){
                    if ($request->select[$i]=='equal')
                        $query=$query->where($columns[$i],'like','%'.$request->column_val[$i].'%');
                    else if ($request->select[$i]=='later')
                        $query=$query->where($columns[$i],'>',$request->column_val[$i]);
                    else if ($request->select[$i]=='earlier')
                        $query=$query->where($columns[$i],'<',$request->column_val[$i]);

                }
                else if($request->check[$i] && $i==6 && $request->stat_check){
                    $arr=[];
                    for($j=0;$j<count($request->stat_check);$j++)
                        if ($request->stat_check[$j])
                            array_push($arr,$request->statuses[$j]);
                    $query = $query->whereIn($columns[$i],$arr);
                }
                else if($request->check[$i] && $i==3 && $request->cat_check){
                    $arr=[];
                    for($j=0;$j<count($request->cat_check);$j++)
                        if ($request->cat_check[$j])
                            array_push($arr,$request->categories[$j]);
                    $query = $query->whereIn($columns[$i],$arr);
                }
            }
            $products = $query->take(10)->get();
            $categories = DB::table('products')->select('category')->groupBy('category')->get();
            $statuses = DB::table('products')->select('status')->groupBy('status')->get();
        return json_encode(['products'=>$products,'statuses'=>$statuses,'categories'=>$categories]);
        }

        $products = DB::table('products')->take(10)->get();
        $categories = DB::table('products')->select('category')->groupBy('category')->get();
        $statuses = DB::table('products')->select('status')->groupBy('status')->get();
        return json_encode(['products'=>$products,'statuses'=>$statuses,'categories'=>$categories]);
    }

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

            $query = DB::table('products');

            for($i=0;$i<count($request->check);$i++){
                if ($request->check[$i] && ($i==0 || $i==4 || $i==5)){
                    if ($request->select[$i]=='equal')
                        $query=$query->where($columns[$i],'=',$request->column_val[$i]);
                    else if ($request->select[$i]=='more')
                        $query=$query->where($columns[$i],'>=',$request->column_val[$i]);
                    else
                        $query=$query->where($columns[$i],'<=',$request->column_val[$i]);

                }
                else if ($request->check[$i] && ($i==1 || $i==2)){
                    if ($request->select[$i]=='equal')
                        $query=$query->where($columns[$i],'=',$request->column_val[$i]);
                    else
                        $query=$query->where($columns[$i],'like','%'.$request->column_val[$i].'%');
                }
                else if ($request->check[$i] && ($i==7)){
                    if ($request->select[$i]=='equal')
                        $query=$query->where($columns[$i],'like','%'.$request->column_val[$i].'%');
                    else if ($request->select[$i]=='later')
                        $query=$query->where($columns[$i],'>',$request->column_val[$i]);
                    else if ($request->select[$i]=='earlier')
                        $query=$query->where($columns[$i],'<',$request->column_val[$i]);

                }
                else if($request->check[$i] && $i==6 && $request->stat_check){
                    $arr=[];
                    for($j=0;$j<count($request->stat_check);$j++)
                        if ($request->stat_check[$j])
                            array_push($arr,$request->statuses[$j]);
                    $query = $query->whereIn($columns[$i],$arr);
                }
                else if($request->check[$i] && $i==3 && $request->cat_check){
                    $arr=[];
                    for($j=0;$j<count($request->cat_check);$j++)
                        if ($request->cat_check[$j])
                            array_push($arr,$request->categories[$j]);
                    $query = $query->whereIn($columns[$i],$arr);
                }
            }
            $products = $query->take(10)->get();
            $categories = DB::table('products')->select('category')->groupBy('category')->get();
            $statuses = DB::table('products')->select('status')->groupBy('status')->get();
        return json_encode(['products'=>$products,'statuses'=>$statuses,'categories'=>$categories]);
        }
        $products = DB::table('products')->take(10)->get();
        $categories = DB::table('products')->select('category')->groupBy('category')->get();
        $statuses = DB::table('products')->select('status')->groupBy('status')->get();
        return json_encode(['products'=>$products,'statuses'=>$statuses,'categories'=>$categories]);
    }
}
