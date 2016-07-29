<?php
/**
 * Created by PhpStorm.
 * User: 00103646175
 * Date: 28/07/2016
 * Time: 14:05
 */

namespace App\Http\Controllers;

//use Illuminate\Http\Response;
use Aszone\Hacking\WordPress;
use Illuminate\Http\Request;

class ScanController extends Controller
{
    public function index()
    {
        return view('avenger');
    }

    public function getDataCoreWp(Request $request)
    {

        $wp = new WordPress();
        $wp->setTarget($request->json()->get('url'));
        if($wp->isWordPress()){
            echo "é Wordpress";
        }else{
            echo "não é Wordpress";
        }
        exit();
        return response()->json($request->json()->get('url'));
    }
}