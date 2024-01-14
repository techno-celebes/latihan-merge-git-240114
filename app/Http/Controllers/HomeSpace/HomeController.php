<?php

namespace App\Http\Controllers\HomeSpace;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Service as ServiceModel;

class HomeController extends Controller
{
    public function index(){
        $service = ServiceModel::get();
        return view('home.home', ['pocong' => $service]);
    }

    public function about(){
        return view('home.about');
    }

    public function contact(){
        return view('home.contact');
    }

    public function pricing(){
        $service = ServiceModel::get();
        return view('home.pricing', ['service' => $service]);
    }

    public function service(){
        $service = ServiceModel::get();
        return view('home.service', ['service' => $service]);
    }
    public function create_service(Request $request)
    {
        $service_name = $request->namabarang;
        $description = $request->hargajual;
        $pricing = $request->pricing;

        $k = new ServiceModel();
        $k->service_name = $service_name;
        $k->description = $description;
        $k->pricing = $pricing;
        $k->save();
        return redirect()->route('service-get');
    }
}
