<?php

namespace App\Models;

use App\Traits\GetModelByKeyName;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    use UuidGenerator;
    use GetModelByKeyName;

    protected $fillable = ['book_number'];

    protected $casts = [
        'book_date' => 'date',
    ];
    
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
