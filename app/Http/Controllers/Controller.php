<?php

namespace App\Http\Controllers;

use App\Picture;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $model;
    protected $route;

    protected function createPictures($request, $model, $row, $folder)
    {
        //dd($request->file('pictures'));
        if ($pictures = $request->file('pictures')) {
            $count = 0;
            foreach ($pictures as $image) {
                $count++;
                $name = time() . $count . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/'.$folder.'/');

                list($width, $height) = getimagesize($image);

                $tumbImage = Image::make($image->getRealPath());
                $tumbImage->resize($width / 2, $height / 2);

                $image->move($destinationPath, $name);
                $tumbImage->save(public_path('/uploads/'.$folder.'/tumb/' . $name));

                $projectPicture = new Picture([
                    'picture' => $name,
                    $row      => $model->id,
                ]);

                $projectPicture->save();
            }
            return true;
        } else {
            return false;
        }
    }

    protected function updatePictures($request, $id, $row, $folder)
    {
        if ($pictures = $request->file('pictures')) {
            foreach ((array)$pictures as $picture) {
                $image = $picture;
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/'.$folder.'/');

                list($width, $height) = getimagesize($image);
                $tumbImage = Image::make($image->getRealPath());
                $tumbImage->resize($width / 2, $height / 2);

                $image->move($destinationPath, $name);
                $tumbImage->save(public_path('/uploads/'.$folder.'/tumb/' . $name));

                $projectPicture = new Picture([
                    'picture' => $name,
                    $row => $id,
                ]);

                $projectPicture->save();
            }
            return true;
        } else {
            return false;
        }
    }

    protected function updatePicture($request, $id, $row, $folder, $picture)
    {
        if ($pictures = $request->file('pictures')) {
            foreach ((array)$pictures as $image) {
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/' . $folder . '/');

                list($width, $height) = getimagesize($image);
                $tumbImage = Image::make($image->getRealPath());
                $tumbImage->resize($width / 2, $height / 2);

                $image->move($destinationPath, $name);
                $tumbImage->save(public_path('/uploads/' . $folder . '/tumb/' . $name));

                $picture = Picture::find($picture);

                $picture->update([
                    'picture' => $name,
                    $row => $id,
                ]);

                $picture->save();
            }
            return true;
        } else {
            return false;
        }
    }
}
