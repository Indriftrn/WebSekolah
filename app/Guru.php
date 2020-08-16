 <?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = [
    	'nama_guru','nip_guru','alamat_guru','tgl_lahir','no_hp_guru','jenis_kelamin'
    ];
}
