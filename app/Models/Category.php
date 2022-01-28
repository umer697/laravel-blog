<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\FuncCall;

class Category extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = ['name'];
    //mutator
    public function setNameAttribute( $value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

}
