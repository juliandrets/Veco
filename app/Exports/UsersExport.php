<?php

namespace App\Exports;

use App\NewsletterEmail;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return NewsletterEmail::all('name', 'email');
    }
}
