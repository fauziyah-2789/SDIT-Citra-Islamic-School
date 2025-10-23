<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingSetting extends Model
{
    use HasFactory;
    protected $fillable = ['key','value'];

    public static function get($key, $default = null){
        $s = self::where('key', $key)->first();
        return $s ? $s->value : $default;
    }

    public static function set($key, $value){
        return self::updateOrCreate(['key' => $key], ['value' => $value]);
    }
}
