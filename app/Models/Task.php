<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'task';

    protected $primaryKey = 'uuid';

    public $incrementing = false;

    protected $keyType = 'string';

    public $timestamps = true;

    protected $fillable = [
        'uuid',
        'name',
        'description',
        'status_uuid',
        'category_uuid'
    ];

    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => (new \DateTime($value))->format('d-m-Y'),
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_uuid', 'uuid');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_uuid', 'uuid');
    }

}

