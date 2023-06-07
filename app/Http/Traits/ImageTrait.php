<?php

namespace App\Http\Traits;
use Illuminate\Support\Facades\Validator;

trait ImageTrait{
    public function select_imageName($photo){
        $image_name = $photo->getClientOriginalName();
        return $image_name;
    }

    public function storeImage($image, $path){
        $image_name = $this->select_imageName($image);
        $image->storeAs($path, $image_name, 'public');
    }
}
