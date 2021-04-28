<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','is_done'
    ];

    //$castsでデータ型の指定が可能。boolはboolean型
    protected $casts = [
        'is_done' => 'bool'
    ];

    //日本語化
    public function attributes(){
        return [
            'title' => 'タイトル'
        ];
    }
        

}
