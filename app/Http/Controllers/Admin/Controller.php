<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function checkFileImage($image, $request)
    {
        $this->validate($request, [
            'image' => 'image|max:2048'
        ], [
            'image.image' => "Không đúng định dạng file ảnh",
            'image.max' => "Kích thước ảnh quá lớn"
        ]);
        $image_name = time() . '-' . $image->getClientOriginalName();
        $image->move('assets/images', $image_name);

        return $image_name;
    }
}
