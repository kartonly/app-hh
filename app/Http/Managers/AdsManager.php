<?php


namespace App\Http\Managers;


use App\Models\Ad;
use App\Models\Photo;
use Illuminate\Database\Eloquent\Model;

class AdsManager
{

    public function __construct(?Ad $ad = null, ?Photo $photo = null)
    {
        $this->ad = $ad;
        $this->photo = $photo;
    }

    public function create($ad){
        $this->ad = new Ad;
        $this->ad->name = $ad['name'];
        $this->ad->about = $ad['about'];
        $this->ad->price = $ad['price'];
        $this->ad->save();

        foreach ($ad['link'] as $item){
            $this->photo = new Photo;
            $this->photo->link = $item['link'];
            $this->photo->ad_id = $this->ad->id;
            $this->photo->save();
        }

        return $this->ad;
    }
}
