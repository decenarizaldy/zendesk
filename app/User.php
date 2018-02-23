<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','url','time_zone','phone','shared_phone_number','locale_id','organization_id','role','verified','external_id','alias','shared','shared_agent','last_login_at','two_factor_auth_enabled','signature','details','notes','role_type','custom_role_id','moderator','ticket_restriction','only_private_comments','restricted_agent','suspended','chat_only','default_group_id','id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


}
