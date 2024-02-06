<?php

namespace App\Models;

use App\Traits\GetModelByKeyName;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    use UuidGenerator;
    use GetModelByKeyName;

    protected $fillable = ['name'];


    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
