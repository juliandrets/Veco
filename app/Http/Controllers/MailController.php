<?php
namespace App\Http\Controllers;

use App\Blog;
use App\Mail\ProjectEmail;
use App\Product;
use App\Project;
use Exception;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    protected $route = '/adm/newsletter/create';

    public function send($class, $id)
    {
        $objDemo = new \stdClass();

        $type = $class;
        $idObj = $id;

        if ($type == 'project') {
            $subtitulo = 'NUEVO PROYECTO';
            $objDemo->obj = $this->getProject($idObj);
        } else if ($type == 'blog') {
            $objDemo->obj = $this->getBlog($idObj);
            $subtitulo = 'NUEVA NOTICIA';
        } else if ($type == 'product') {
            $objDemo->obj = $this->getProduct($idObj);
            $subtitulo = 'NUEVO PRODUCTO';
        }

        $picture = $objDemo->obj->firstPicture->first()->picture;

        //return view('mails.demo');

        try {
            Mail::to("juliandrets@gmail.com")->send(new ProjectEmail($objDemo, $subtitulo, $picture));
        } catch (\Exception $ex) {
            return redirect($this->route.'?event=error');
        }

        return redirect($this->route.'?event=send');
    }

    protected function getProject($id)
    {
        return Project::find($id);
    }
    protected function getBlog($id)
    {
        return Blog::find($id);
    }
    protected function getProduct($id)
    {
        return Product::find($id);
    }
}
