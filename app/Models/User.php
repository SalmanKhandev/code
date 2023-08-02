<?php
// app/Models/User.php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // ... Your other model code ...

    public function isAdmin()
    {
        return $this->user_type == env('ADMIN_ROLE_ID');
    }

    public function isSuperAdmin()
    {
        return $this->user_type == env('SUPERADMIN_ROLE_ID');
    }

    public function isCustomer()
    {
        return $this->user_type == env('CUSTOMER_ROLE_ID');
    }
}
