<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    //
    protected $fillable = ['judul','pengarang','penerbit','tahun_terbit','jumlah_buku','deskripsi','lokasi','cover'];
}
