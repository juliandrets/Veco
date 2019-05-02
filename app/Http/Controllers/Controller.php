<?php

namespace App\Http\Controllers;

use App\Picture;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
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
                $name = time() . $count . md5(rand(0,999)) . '.' . $image->getClientOriginalExtension();
                $destinationPath = 'uploads/'.$folder.'/';

                try {
                    list($width, $height) = getimagesize($image);
                } catch (\Exception $ex) {
                    return false;
                }

                $tumbImage = Image::make($image->getRealPath());
                $tumbImage->resize($width / 2, $height / 2);

                $image->move($destinationPath, $name);
                $tumbImage->save('uploads/'.$folder.'/tumb/' . $name);

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
            foreach ((array)$pictures as $image) {
                $name = time() . md5(rand(0,999)) . '.' . $image->getClientOriginalExtension();
                $destinationPath = 'uploads/'.$folder.'/';

                try {
                    list($width, $height) = getimagesize($image);
                } catch (\Exception $ex) {
                    return false;
                }

                $tumbImage = Image::make($image->getRealPath());
                $tumbImage->resize($width / 2, $height / 2);

                $image->move($destinationPath, $name);
                $tumbImage->save('uploads/'.$folder.'/tumb/' . $name);

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
                $name = time() . md5(rand(0,999)) . '.' . $image->getClientOriginalExtension();
                $destinationPath = 'uploads/' . $folder . '/';

                try {
                    list($width, $height) = getimagesize($image);
                } catch (\Exception $ex) {
                    return false;
                }

                $tumbImage = Image::make($image->getRealPath());
                $tumbImage->resize($width / 2, $height / 2);

                $image->move($destinationPath, $name);
                $tumbImage->save('uploads/' . $folder . '/tumb/' . $name);

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
