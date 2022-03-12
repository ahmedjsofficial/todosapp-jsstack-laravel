<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Todo extends Model
{
    protected $table = 'todos';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'completed'];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
