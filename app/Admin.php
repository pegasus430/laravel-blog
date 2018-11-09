<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use Notifiable;

    protected $admin;
    protected $email;

    public function __construct() {
        $this->admin = config('admin.name');
        $this->email = config('admin.email');
    }
}