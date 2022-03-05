<?php

namespace app\Model;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    //
    public function getNameSanAttribute()
    {

        $name = $this->name;

        return  $name . "さん";
    }
}
