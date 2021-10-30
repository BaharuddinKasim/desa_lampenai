<?php

namespace App\Models;

use App\Models\User;
use App\Models\SuratMasukModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Disposisi extends Model
{
    use HasFactory;
    protected $table = 'tbl_disposisi';

    public function admin()
    {
        return $this->hasOne(User::class, 'id', 'id_admin');
    }

    public function suratMasuk()
    {
        return $this->hasOne(SuratMasukModel::class, 'id_suratmasuk', 'id_suratmasuk');
    }

    public function pimpinan()
    {
        return $this->hasOne(User::class, 'id', 'id_pimpinan');
    }
}
