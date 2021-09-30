<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EditorImageUploadController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request)
    {
        $img = $request->file('file');
        if (is_array($img)){
            $img = $img[0];
        }
        $img_name = time().$img->getClientOriginalName();
        $img_path = $img->storeAs('uploads/editor-uploads', $img_name);
        return response()->json(['location' => url($img_path) ]);
    }
}
