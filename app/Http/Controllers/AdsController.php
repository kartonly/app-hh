<?php

namespace App\Http\Controllers;

use App\Http\Managers\AdsManager;
use App\Http\Resources\AdsResource;
use App\Models\Ad;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class AdsController extends Controller
{
    var $manager;

    function __construct() {
        $this->manager = app(AdsManager::class);
    }

    public function all($price, $date){
        $ads = DB::table('ads')->orderBy('created_at', $date)->orderBy('price', $price)->paginate(10);
        foreach ($ads as $ad){
            $ad->photos = Photo::where('ad_id', $ad->id)->first()->link;
        }
        return AdsResource::collection($ads);
    }

    public function create(Request $request){
        if (count($request->link)>3){
            return "Число фото должно быть меньше или равно 3";
        }
        $newAd = $this->manager->create($request);

        return new Response($newAd->id, 200);
    }

    public function getOne($id){
        $ad = Ad::where('id', $id)->with('photos')->get();

        return $ad;
    }
}
