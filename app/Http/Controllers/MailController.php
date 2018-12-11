<?php
namespace App\Http\Controllers;

use App\Blog;
use App\Mail\ProjectEmail;
use App\Product;
use App\Project;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    protected $type = 'project';
    protected $idObj = 12;

    public function send()
    {
        $objDemo = new \stdClass();

        if ($this->type == 'project') {
            $objDemo->obj = $this->getProject($this->idObj);
        } else if ($this->type == 'blog') {
            $objDemo->obj = $this->getBlog($this->idObj);
        } else if ($this->type == 'product') {
            $objDemo->obj = $this->getProduct($this->idObj);
        }

        try {
            Mail::to("juliandrets@gmail.com")->send(new ProjectEmail($objDemo));
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }

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
