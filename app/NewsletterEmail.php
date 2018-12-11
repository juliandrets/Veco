<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsletterEmail extends Model
{
    protected $table = 'newsletter_emails';
    protected $keyType = 'string';
    protected $guarded = [];
}
