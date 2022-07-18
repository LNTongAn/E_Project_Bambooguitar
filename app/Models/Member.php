<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    // khai báo table ứng với model
    protected $table = "members";
    // khai báo trường khóa chính
    protected $primaryKey = 'id';
    // mặc định khóa chính sẽ tự động tăng
    // public $incrementing = false; // false: khóa chỉnh sẽ không tự động tăng
    protected $fillable = ['id', 'email', 'password', 'picture', 'fullname', 'tel', 'address', 'active'];
}
