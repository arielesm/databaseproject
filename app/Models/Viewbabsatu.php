<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viewbabsatu extends Model
{
    use HasFactory;
    
    protected $table = 'viewbabsatu';

    protected $fillable = [
            'nama_berkas',
            'judul_berkas',
            'nama_pt',
            'alamat_pt',
            'izinop_text',
            'izinop_file', 
            'statakreinst_text',
            'statakreinst_file',
            'namaptmitra',
            'alamatptmitra',
            'negaramitra',
            'izinopmitra_text',
            'izinopmitra_file',
            'statakreinstmitra_text',
            'statakreinstmitra_file',
            'peringinter',
            'namaprodipt_select',
            'namaprodimitra_text',
            'akreprodpt_select',
            'akreprodmitra_text',
            'sk_akprodpt_file',
            'sk_akprodmitra_file',
            'izopeprodipt_file',
            'izopeprodimitra_file',
            'proposalusul_file',
    ];

    
}
