<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class Record extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nopol',
        'start_time',
        'end_time',
        'price',
    ];

    protected $casts = [
        'start_time' => 'datetime:Y-m-d H:i:s',
        'end_time' => 'datetime:Y-m-d H:i:s',
    ];


    public $incrementing = false;

    public $keyType = 'string';

    // protected static function boot(){
    //     parent::boot();
    //     static::creating(function ($model){
    //         if(empty($model->{$model->getKeyName()})){
    //             $model->{$model->getKeyName()} = Str::uuid()->toString();
    //         }
    //     });
    // }

    protected static function boot(){
        parent::boot();
        self::creating(function ($model){
            if(empty($model->{$model->getKeyName()})){
                $model->id = IdGenerator::generate(['table' => $model->table, 'length' => 10,'prefix' =>date('ymd'), 'suffix' =>date('His')]);
            }
        });
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
