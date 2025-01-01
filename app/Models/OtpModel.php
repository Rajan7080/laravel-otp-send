<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtpModel extends Model
{
    use HasFactory;
    public $table = "otp_models";
    public $primary_key = "id";
}
