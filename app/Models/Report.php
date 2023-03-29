<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Report extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'subtask_id',
        'b_task_id',
        'user_id',
        'time_estimated',
        'time_spent',
        'productivity_factor',
        'effective_time',
        'status',
        'user_b_id',
        'planned_start',
        'planned_finish',
        'updated',
        'username',
        'weight',
        'operation_name',
        'currentTimerstate',
        'pj_name',
        'area',
        'ws_name',
        'user_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
