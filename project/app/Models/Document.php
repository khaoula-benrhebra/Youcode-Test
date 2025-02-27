<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Document extends Model
{
    protected $fillable = [
        'type',
        'format',
        'path',
        'candidat_id'
    ];
    
    public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }
    
    public static function upload(UploadedFile $file, $type, $candidat_id)
    {
        
        $fileName = time() . '_' . $type . '.' . $file->getClientOriginalExtension();
        
        
        $path = $file->storeAs('documents/' . $candidat_id, $fileName, 'public');
        
       
        return self::create([
            'type' => $type,
            'format' => $file->getClientOriginalExtension(),
            'path' => $path,
            'candidat_id' => $candidat_id
        ]);
    }
}
