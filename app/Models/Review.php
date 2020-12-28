<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    public function member()
    {
        return $this->belongsTo('App\Models\Member');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }

    public function getNickname()
    {
        return $this->member->nickname;
    }

    public function getImage1()
    {
        return $this->product->image_1;
    }

    public function getProductCategoryId()
    {
        return $this->product->product_category_id;
    }
    
    public function getSubProductCategoryId()
    {
        return $this->product->product_subcategory_id;
    }
    
    public function getName()
    {
        return $this->product->name;
    }
}
