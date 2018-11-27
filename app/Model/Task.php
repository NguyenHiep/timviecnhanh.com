<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tasks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'description',
        'start_date',
        'end_date',
        'status',
        'assign_user_id',
        'create_by'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   /* protected $hidden = [
        'create_by', 'assign_user_id'
    ];*/
}
