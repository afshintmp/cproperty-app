<?php

namespace App\Services\Shop;

use App\Models\Build;

class Shop
{


    public function getExpertDescription(int $id)
    {
        $build = Build::find($id);
        return $build->expert_description;
    }

    public function getCoverImage(int $id)
    {

        $build = Build::find($id);
        return $build->cover_image_url;

    }


    public function getMinPrice(int $id)
    {

        $build = Build::find($id);
        return $build->min_price;
    }

    public function getMaxPrice(int $id)
    {

        $build = Build::find($id);
        return $build->max_price;
    }

}
