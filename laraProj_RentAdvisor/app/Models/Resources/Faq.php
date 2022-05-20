<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table = 'faq';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function get_faq() {
        return $this::select()->get();
    }
}
