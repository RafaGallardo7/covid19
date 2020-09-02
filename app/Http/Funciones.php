<?php 
namespace App\Http;

use Illuminate\Support\Collection as Collection;
use Crypt;
use Session;
use Input;
use Mail;
use Auth;
use DB;
use App;

class Funciones {

    public static function randomPassword() {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 64; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static function validateEmail($email) { 
		if(preg_match("/^(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6}$/", $email)){
			return true;
		} else {
			return false;
		}
    }
    
    public static function removeEmoji($text){
      	return preg_replace('/[\x{1F3F4}](?:\x{E0067}\x{E0062}\x{E0077}\x{E006C}\x{E0073}\x{E007F})|[\x{1F3F4}](?:\x{E0067}\x{E0062}\x{E0073}\x{E0063}\x{E0074}\x{E007F})|[\x{1F3F4}](?:\x{E0067}\x{E0062}\x{E0065}\x{E006E}\x{E0067}\x{E007F})|[\x{1F3F4}](?:\x{200D}\x{2620}\x{FE0F})|[\x{1F3F3}](?:\x{FE0F}\x{200D}\x{1F308})|[\x{0023}\x{002A}\x{0030}\x{0031}\x{0032}\x{0033}\x{0034}\x{0035}\x{0036}\x{0037}\x{0038}\x{0039}](?:\x{FE0F}\x{20E3})|[\x{1F441}](?:\x{FE0F}\x{200D}\x{1F5E8}\x{FE0F})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F467}\x{200D}\x{1F467})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F467}\x{200D}\x{1F466})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F467})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F466}\x{200D}\x{1F466})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F466})|[\x{1F468}](?:\x{200D}\x{1F468}\x{200D}\x{1F467}\x{200D}\x{1F467})|[\x{1F468}](?:\x{200D}\x{1F468}\x{200D}\x{1F466}\x{200D}\x{1F466})|[\x{1F468}](?:\x{200D}\x{1F468}\x{200D}\x{1F467}\x{200D}\x{1F466})|[\x{1F468}](?:\x{200D}\x{1F468}\x{200D}\x{1F467})|[\x{1F468}](?:\x{200D}\x{1F468}\x{200D}\x{1F466})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F469}\x{200D}\x{1F467}\x{200D}\x{1F467})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F469}\x{200D}\x{1F466}\x{200D}\x{1F466})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F469}\x{200D}\x{1F467}\x{200D}\x{1F466})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F469}\x{200D}\x{1F467})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F469}\x{200D}\x{1F466})|[\x{1F469}](?:\x{200D}\x{2764}\x{FE0F}\x{200D}\x{1F469})|[\x{1F469}\x{1F468}](?:\x{200D}\x{2764}\x{FE0F}\x{200D}\x{1F468})|[\x{1F469}](?:\x{200D}\x{2764}\x{FE0F}\x{200D}\x{1F48B}\x{200D}\x{1F469})|[\x{1F469}\x{1F468}](?:\x{200D}\x{2764}\x{FE0F}\x{200D}\x{1F48B}\x{200D}\x{1F468})|[\x{1F468}\x{1F469}](?:\x{1F3FF}\x{200D}\x{1F9B3})|[\x{1F468}\x{1F469}](?:\x{1F3FE}\x{200D}\x{1F9B3})|[\x{1F468}\x{1F469}](?:\x{1F3FD}\x{200D}\x{1F9B3})|[\x{1F468}\x{1F469}](?:\x{1F3FC}\x{200D}\x{1F9B3})|[\x{1F468}\x{1F469}](?:\x{1F3FB}\x{200D}\x{1F9B3})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F9B3})|[\x{1F468}\x{1F469}](?:\x{1F3FF}\x{200D}\x{1F9B2})|[\x{1F468}\x{1F469}](?:\x{1F3FE}\x{200D}\x{1F9B2})|[\x{1F468}\x{1F469}](?:\x{1F3FD}\x{200D}\x{1F9B2})|[\x{1F468}\x{1F469}](?:\x{1F3FC}\x{200D}\x{1F9B2})|[\x{1F468}\x{1F469}](?:\x{1F3FB}\x{200D}\x{1F9B2})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F9B2})|[\x{1F468}\x{1F469}](?:\x{1F3FF}\x{200D}\x{1F9B1})|[\x{1F468}\x{1F469}](?:\x{1F3FE}\x{200D}\x{1F9B1})|[\x{1F468}\x{1F469}](?:\x{1F3FD}\x{200D}\x{1F9B1})|[\x{1F468}\x{1F469}](?:\x{1F3FC}\x{200D}\x{1F9B1})|[\x{1F468}\x{1F469}](?:\x{1F3FB}\x{200D}\x{1F9B1})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F9B1})|[\x{1F468}\x{1F469}](?:\x{1F3FF}\x{200D}\x{1F9B0})|[\x{1F468}\x{1F469}](?:\x{1F3FE}\x{200D}\x{1F9B0})|[\x{1F468}\x{1F469}](?:\x{1F3FD}\x{200D}\x{1F9B0})|[\x{1F468}\x{1F469}](?:\x{1F3FC}\x{200D}\x{1F9B0})|[\x{1F468}\x{1F469}](?:\x{1F3FB}\x{200D}\x{1F9B0})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F9B0})|[\x{1F575}\x{1F3CC}\x{26F9}\x{1F3CB}](?:\x{FE0F}\x{200D}\x{2640}\x{FE0F})|[\x{1F575}\x{1F3CC}\x{26F9}\x{1F3CB}](?:\x{FE0F}\x{200D}\x{2642}\x{FE0F})|[\x{1F46E}\x{1F575}\x{1F482}\x{1F477}\x{1F473}\x{1F471}\x{1F9D9}\x{1F9DA}\x{1F9DB}\x{1F9DC}\x{1F9DD}\x{1F64D}\x{1F64E}\x{1F645}\x{1F646}\x{1F481}\x{1F64B}\x{1F647}\x{1F926}\x{1F937}\x{1F486}\x{1F487}\x{1F6B6}\x{1F3C3}\x{1F9D6}\x{1F9D7}\x{1F9D8}\x{1F3CC}\x{1F3C4}\x{1F6A3}\x{1F3CA}\x{26F9}\x{1F3CB}\x{1F6B4}\x{1F6B5}\x{1F938}\x{1F93D}\x{1F93E}\x{1F939}](?:\x{1F3FF}\x{200D}\x{2640}\x{FE0F})|[\x{1F46E}\x{1F575}\x{1F482}\x{1F477}\x{1F473}\x{1F471}\x{1F9D9}\x{1F9DA}\x{1F9DB}\x{1F9DC}\x{1F9DD}\x{1F64D}\x{1F64E}\x{1F645}\x{1F646}\x{1F481}\x{1F64B}\x{1F647}\x{1F926}\x{1F937}\x{1F486}\x{1F487}\x{1F6B6}\x{1F3C3}\x{1F9D6}\x{1F9D7}\x{1F9D8}\x{1F3CC}\x{1F3C4}\x{1F6A3}\x{1F3CA}\x{26F9}\x{1F3CB}\x{1F6B4}\x{1F6B5}\x{1F938}\x{1F93D}\x{1F93E}\x{1F939}](?:\x{1F3FE}\x{200D}\x{2640}\x{FE0F})|[\x{1F46E}\x{1F575}\x{1F482}\x{1F477}\x{1F473}\x{1F471}\x{1F9D9}\x{1F9DA}\x{1F9DB}\x{1F9DC}\x{1F9DD}\x{1F64D}\x{1F64E}\x{1F645}\x{1F646}\x{1F481}\x{1F64B}\x{1F647}\x{1F926}\x{1F937}\x{1F486}\x{1F487}\x{1F6B6}\x{1F3C3}\x{1F9D6}\x{1F9D7}\x{1F9D8}\x{1F3CC}\x{1F3C4}\x{1F6A3}\x{1F3CA}\x{26F9}\x{1F3CB}\x{1F6B4}\x{1F6B5}\x{1F938}\x{1F93D}\x{1F93E}\x{1F939}](?:\x{1F3FD}\x{200D}\x{2640}\x{FE0F})|[\x{1F46E}\x{1F575}\x{1F482}\x{1F477}\x{1F473}\x{1F471}\x{1F9D9}\x{1F9DA}\x{1F9DB}\x{1F9DC}\x{1F9DD}\x{1F64D}\x{1F64E}\x{1F645}\x{1F646}\x{1F481}\x{1F64B}\x{1F647}\x{1F926}\x{1F937}\x{1F486}\x{1F487}\x{1F6B6}\x{1F3C3}\x{1F9D6}\x{1F9D7}\x{1F9D8}\x{1F3CC}\x{1F3C4}\x{1F6A3}\x{1F3CA}\x{26F9}\x{1F3CB}\x{1F6B4}\x{1F6B5}\x{1F938}\x{1F93D}\x{1F93E}\x{1F939}](?:\x{1F3FC}\x{200D}\x{2640}\x{FE0F})|[\x{1F46E}\x{1F575}\x{1F482}\x{1F477}\x{1F473}\x{1F471}\x{1F9D9}\x{1F9DA}\x{1F9DB}\x{1F9DC}\x{1F9DD}\x{1F64D}\x{1F64E}\x{1F645}\x{1F646}\x{1F481}\x{1F64B}\x{1F647}\x{1F926}\x{1F937}\x{1F486}\x{1F487}\x{1F6B6}\x{1F3C3}\x{1F9D6}\x{1F9D7}\x{1F9D8}\x{1F3CC}\x{1F3C4}\x{1F6A3}\x{1F3CA}\x{26F9}\x{1F3CB}\x{1F6B4}\x{1F6B5}\x{1F938}\x{1F93D}\x{1F93E}\x{1F939}](?:\x{1F3FB}\x{200D}\x{2640}\x{FE0F})|[\x{1F46E}\x{1F9B8}\x{1F9B9}\x{1F482}\x{1F477}\x{1F473}\x{1F471}\x{1F9D9}\x{1F9DA}\x{1F9DB}\x{1F9DC}\x{1F9DD}\x{1F9DE}\x{1F9DF}\x{1F64D}\x{1F64E}\x{1F645}\x{1F646}\x{1F481}\x{1F64B}\x{1F647}\x{1F926}\x{1F937}\x{1F486}\x{1F487}\x{1F6B6}\x{1F3C3}\x{1F46F}\x{1F9D6}\x{1F9D7}\x{1F9D8}\x{1F3C4}\x{1F6A3}\x{1F3CA}\x{1F6B4}\x{1F6B5}\x{1F938}\x{1F93C}\x{1F93D}\x{1F93E}\x{1F939}](?:\x{200D}\x{2640}\x{FE0F})|[\x{1F46E}\x{1F575}\x{1F482}\x{1F477}\x{1F473}\x{1F471}\x{1F9D9}\x{1F9DA}\x{1F9DB}\x{1F9DC}\x{1F9DD}\x{1F64D}\x{1F64E}\x{1F645}\x{1F646}\x{1F481}\x{1F64B}\x{1F647}\x{1F926}\x{1F937}\x{1F486}\x{1F487}\x{1F6B6}\x{1F3C3}\x{1F9D6}\x{1F9D7}\x{1F9D8}\x{1F3CC}\x{1F3C4}\x{1F6A3}\x{1F3CA}\x{26F9}\x{1F3CB}\x{1F6B4}\x{1F6B5}\x{1F938}\x{1F93D}\x{1F93E}\x{1F939}](?:\x{1F3FF}\x{200D}\x{2642}\x{FE0F})|[\x{1F46E}\x{1F575}\x{1F482}\x{1F477}\x{1F473}\x{1F471}\x{1F9D9}\x{1F9DA}\x{1F9DB}\x{1F9DC}\x{1F9DD}\x{1F64D}\x{1F64E}\x{1F645}\x{1F646}\x{1F481}\x{1F64B}\x{1F647}\x{1F926}\x{1F937}\x{1F486}\x{1F487}\x{1F6B6}\x{1F3C3}\x{1F9D6}\x{1F9D7}\x{1F9D8}\x{1F3CC}\x{1F3C4}\x{1F6A3}\x{1F3CA}\x{26F9}\x{1F3CB}\x{1F6B4}\x{1F6B5}\x{1F938}\x{1F93D}\x{1F93E}\x{1F939}](?:\x{1F3FE}\x{200D}\x{2642}\x{FE0F})|[\x{1F46E}\x{1F575}\x{1F482}\x{1F477}\x{1F473}\x{1F471}\x{1F9D9}\x{1F9DA}\x{1F9DB}\x{1F9DC}\x{1F9DD}\x{1F64D}\x{1F64E}\x{1F645}\x{1F646}\x{1F481}\x{1F64B}\x{1F647}\x{1F926}\x{1F937}\x{1F486}\x{1F487}\x{1F6B6}\x{1F3C3}\x{1F9D6}\x{1F9D7}\x{1F9D8}\x{1F3CC}\x{1F3C4}\x{1F6A3}\x{1F3CA}\x{26F9}\x{1F3CB}\x{1F6B4}\x{1F6B5}\x{1F938}\x{1F93D}\x{1F93E}\x{1F939}](?:\x{1F3FD}\x{200D}\x{2642}\x{FE0F})|[\x{1F46E}\x{1F575}\x{1F482}\x{1F477}\x{1F473}\x{1F471}\x{1F9D9}\x{1F9DA}\x{1F9DB}\x{1F9DC}\x{1F9DD}\x{1F64D}\x{1F64E}\x{1F645}\x{1F646}\x{1F481}\x{1F64B}\x{1F647}\x{1F926}\x{1F937}\x{1F486}\x{1F487}\x{1F6B6}\x{1F3C3}\x{1F9D6}\x{1F9D7}\x{1F9D8}\x{1F3CC}\x{1F3C4}\x{1F6A3}\x{1F3CA}\x{26F9}\x{1F3CB}\x{1F6B4}\x{1F6B5}\x{1F938}\x{1F93D}\x{1F93E}\x{1F939}](?:\x{1F3FC}\x{200D}\x{2642}\x{FE0F})|[\x{1F46E}\x{1F575}\x{1F482}\x{1F477}\x{1F473}\x{1F471}\x{1F9D9}\x{1F9DA}\x{1F9DB}\x{1F9DC}\x{1F9DD}\x{1F64D}\x{1F64E}\x{1F645}\x{1F646}\x{1F481}\x{1F64B}\x{1F647}\x{1F926}\x{1F937}\x{1F486}\x{1F487}\x{1F6B6}\x{1F3C3}\x{1F9D6}\x{1F9D7}\x{1F9D8}\x{1F3CC}\x{1F3C4}\x{1F6A3}\x{1F3CA}\x{26F9}\x{1F3CB}\x{1F6B4}\x{1F6B5}\x{1F938}\x{1F93D}\x{1F93E}\x{1F939}](?:\x{1F3FB}\x{200D}\x{2642}\x{FE0F})|[\x{1F46E}\x{1F9B8}\x{1F9B9}\x{1F482}\x{1F477}\x{1F473}\x{1F471}\x{1F9D9}\x{1F9DA}\x{1F9DB}\x{1F9DC}\x{1F9DD}\x{1F9DE}\x{1F9DF}\x{1F64D}\x{1F64E}\x{1F645}\x{1F646}\x{1F481}\x{1F64B}\x{1F647}\x{1F926}\x{1F937}\x{1F486}\x{1F487}\x{1F6B6}\x{1F3C3}\x{1F46F}\x{1F9D6}\x{1F9D7}\x{1F9D8}\x{1F3C4}\x{1F6A3}\x{1F3CA}\x{1F6B4}\x{1F6B5}\x{1F938}\x{1F93C}\x{1F93D}\x{1F93E}\x{1F939}](?:\x{200D}\x{2642}\x{FE0F})|[\x{1F468}\x{1F469}](?:\x{1F3FF}\x{200D}\x{1F692})|[\x{1F468}\x{1F469}](?:\x{1F3FE}\x{200D}\x{1F692})|[\x{1F468}\x{1F469}](?:\x{1F3FD}\x{200D}\x{1F692})|[\x{1F468}\x{1F469}](?:\x{1F3FC}\x{200D}\x{1F692})|[\x{1F468}\x{1F469}](?:\x{1F3FB}\x{200D}\x{1F692})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F692})|[\x{1F468}\x{1F469}](?:\x{1F3FF}\x{200D}\x{1F680})|[\x{1F468}\x{1F469}](?:\x{1F3FE}\x{200D}\x{1F680})|[\x{1F468}\x{1F469}](?:\x{1F3FD}\x{200D}\x{1F680})|[\x{1F468}\x{1F469}](?:\x{1F3FC}\x{200D}\x{1F680})|[\x{1F468}\x{1F469}](?:\x{1F3FB}\x{200D}\x{1F680})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F680})|[\x{1F468}\x{1F469}](?:\x{1F3FF}\x{200D}\x{2708}\x{FE0F})|[\x{1F468}\x{1F469}](?:\x{1F3FE}\x{200D}\x{2708}\x{FE0F})|[\x{1F468}\x{1F469}](?:\x{1F3FD}\x{200D}\x{2708}\x{FE0F})|[\x{1F468}\x{1F469}](?:\x{1F3FC}\x{200D}\x{2708}\x{FE0F})|[\x{1F468}\x{1F469}](?:\x{1F3FB}\x{200D}\x{2708}\x{FE0F})|[\x{1F468}\x{1F469}](?:\x{200D}\x{2708}\x{FE0F})|[\x{1F468}\x{1F469}](?:\x{1F3FF}\x{200D}\x{1F3A8})|[\x{1F468}\x{1F469}](?:\x{1F3FE}\x{200D}\x{1F3A8})|[\x{1F468}\x{1F469}](?:\x{1F3FD}\x{200D}\x{1F3A8})|[\x{1F468}\x{1F469}](?:\x{1F3FC}\x{200D}\x{1F3A8})|[\x{1F468}\x{1F469}](?:\x{1F3FB}\x{200D}\x{1F3A8})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F3A8})|[\x{1F468}\x{1F469}](?:\x{1F3FF}\x{200D}\x{1F3A4})|[\x{1F468}\x{1F469}](?:\x{1F3FE}\x{200D}\x{1F3A4})|[\x{1F468}\x{1F469}](?:\x{1F3FD}\x{200D}\x{1F3A4})|[\x{1F468}\x{1F469}](?:\x{1F3FC}\x{200D}\x{1F3A4})|[\x{1F468}\x{1F469}](?:\x{1F3FB}\x{200D}\x{1F3A4})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F3A4})|[\x{1F468}\x{1F469}](?:\x{1F3FF}\x{200D}\x{1F4BB})|[\x{1F468}\x{1F469}](?:\x{1F3FE}\x{200D}\x{1F4BB})|[\x{1F468}\x{1F469}](?:\x{1F3FD}\x{200D}\x{1F4BB})|[\x{1F468}\x{1F469}](?:\x{1F3FC}\x{200D}\x{1F4BB})|[\x{1F468}\x{1F469}](?:\x{1F3FB}\x{200D}\x{1F4BB})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F4BB})|[\x{1F468}\x{1F469}](?:\x{1F3FF}\x{200D}\x{1F52C})|[\x{1F468}\x{1F469}](?:\x{1F3FE}\x{200D}\x{1F52C})|[\x{1F468}\x{1F469}](?:\x{1F3FD}\x{200D}\x{1F52C})|[\x{1F468}\x{1F469}](?:\x{1F3FC}\x{200D}\x{1F52C})|[\x{1F468}\x{1F469}](?:\x{1F3FB}\x{200D}\x{1F52C})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F52C})|[\x{1F468}\x{1F469}](?:\x{1F3FF}\x{200D}\x{1F4BC})|[\x{1F468}\x{1F469}](?:\x{1F3FE}\x{200D}\x{1F4BC})|[\x{1F468}\x{1F469}](?:\x{1F3FD}\x{200D}\x{1F4BC})|[\x{1F468}\x{1F469}](?:\x{1F3FC}\x{200D}\x{1F4BC})|[\x{1F468}\x{1F469}](?:\x{1F3FB}\x{200D}\x{1F4BC})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F4BC})|[\x{1F468}\x{1F469}](?:\x{1F3FF}\x{200D}\x{1F3ED})|[\x{1F468}\x{1F469}](?:\x{1F3FE}\x{200D}\x{1F3ED})|[\x{1F468}\x{1F469}](?:\x{1F3FD}\x{200D}\x{1F3ED})|[\x{1F468}\x{1F469}](?:\x{1F3FC}\x{200D}\x{1F3ED})|[\x{1F468}\x{1F469}](?:\x{1F3FB}\x{200D}\x{1F3ED})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F3ED})|[\x{1F468}\x{1F469}](?:\x{1F3FF}\x{200D}\x{1F527})|[\x{1F468}\x{1F469}](?:\x{1F3FE}\x{200D}\x{1F527})|[\x{1F468}\x{1F469}](?:\x{1F3FD}\x{200D}\x{1F527})|[\x{1F468}\x{1F469}](?:\x{1F3FC}\x{200D}\x{1F527})|[\x{1F468}\x{1F469}](?:\x{1F3FB}\x{200D}\x{1F527})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F527})|[\x{1F468}\x{1F469}](?:\x{1F3FF}\x{200D}\x{1F373})|[\x{1F468}\x{1F469}](?:\x{1F3FE}\x{200D}\x{1F373})|[\x{1F468}\x{1F469}](?:\x{1F3FD}\x{200D}\x{1F373})|[\x{1F468}\x{1F469}](?:\x{1F3FC}\x{200D}\x{1F373})|[\x{1F468}\x{1F469}](?:\x{1F3FB}\x{200D}\x{1F373})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F373})|[\x{1F468}\x{1F469}](?:\x{1F3FF}\x{200D}\x{1F33E})|[\x{1F468}\x{1F469}](?:\x{1F3FE}\x{200D}\x{1F33E})|[\x{1F468}\x{1F469}](?:\x{1F3FD}\x{200D}\x{1F33E})|[\x{1F468}\x{1F469}](?:\x{1F3FC}\x{200D}\x{1F33E})|[\x{1F468}\x{1F469}](?:\x{1F3FB}\x{200D}\x{1F33E})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F33E})|[\x{1F468}\x{1F469}](?:\x{1F3FF}\x{200D}\x{2696}\x{FE0F})|[\x{1F468}\x{1F469}](?:\x{1F3FE}\x{200D}\x{2696}\x{FE0F})|[\x{1F468}\x{1F469}](?:\x{1F3FD}\x{200D}\x{2696}\x{FE0F})|[\x{1F468}\x{1F469}](?:\x{1F3FC}\x{200D}\x{2696}\x{FE0F})|[\x{1F468}\x{1F469}](?:\x{1F3FB}\x{200D}\x{2696}\x{FE0F})|[\x{1F468}\x{1F469}](?:\x{200D}\x{2696}\x{FE0F})|[\x{1F468}\x{1F469}](?:\x{1F3FF}\x{200D}\x{1F3EB})|[\x{1F468}\x{1F469}](?:\x{1F3FE}\x{200D}\x{1F3EB})|[\x{1F468}\x{1F469}](?:\x{1F3FD}\x{200D}\x{1F3EB})|[\x{1F468}\x{1F469}](?:\x{1F3FC}\x{200D}\x{1F3EB})|[\x{1F468}\x{1F469}](?:\x{1F3FB}\x{200D}\x{1F3EB})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F3EB})|[\x{1F468}\x{1F469}](?:\x{1F3FF}\x{200D}\x{1F393})|[\x{1F468}\x{1F469}](?:\x{1F3FE}\x{200D}\x{1F393})|[\x{1F468}\x{1F469}](?:\x{1F3FD}\x{200D}\x{1F393})|[\x{1F468}\x{1F469}](?:\x{1F3FC}\x{200D}\x{1F393})|[\x{1F468}\x{1F469}](?:\x{1F3FB}\x{200D}\x{1F393})|[\x{1F468}\x{1F469}](?:\x{200D}\x{1F393})|[\x{1F468}\x{1F469}](?:\x{1F3FF}\x{200D}\x{2695}\x{FE0F})|[\x{1F468}\x{1F469}](?:\x{1F3FE}\x{200D}\x{2695}\x{FE0F})|[\x{1F468}\x{1F469}](?:\x{1F3FD}\x{200D}\x{2695}\x{FE0F})|[\x{1F468}\x{1F469}](?:\x{1F3FC}\x{200D}\x{2695}\x{FE0F})|[\x{1F468}\x{1F469}](?:\x{1F3FB}\x{200D}\x{2695}\x{FE0F})|[\x{1F468}\x{1F469}](?:\x{200D}\x{2695}\x{FE0F})|[\x{1F476}\x{1F9D2}\x{1F466}\x{1F467}\x{1F9D1}\x{1F468}\x{1F469}\x{1F9D3}\x{1F474}\x{1F475}\x{1F46E}\x{1F575}\x{1F482}\x{1F477}\x{1F934}\x{1F478}\x{1F473}\x{1F472}\x{1F9D5}\x{1F9D4}\x{1F471}\x{1F935}\x{1F470}\x{1F930}\x{1F931}\x{1F47C}\x{1F385}\x{1F936}\x{1F9D9}\x{1F9DA}\x{1F9DB}\x{1F9DC}\x{1F9DD}\x{1F64D}\x{1F64E}\x{1F645}\x{1F646}\x{1F481}\x{1F64B}\x{1F647}\x{1F926}\x{1F937}\x{1F486}\x{1F487}\x{1F6B6}\x{1F3C3}\x{1F483}\x{1F57A}\x{1F9D6}\x{1F9D7}\x{1F9D8}\x{1F6C0}\x{1F6CC}\x{1F574}\x{1F3C7}\x{1F3C2}\x{1F3CC}\x{1F3C4}\x{1F6A3}\x{1F3CA}\x{26F9}\x{1F3CB}\x{1F6B4}\x{1F6B5}\x{1F938}\x{1F93D}\x{1F93E}\x{1F939}\x{1F933}\x{1F4AA}\x{1F9B5}\x{1F9B6}\x{1F448}\x{1F449}\x{261D}\x{1F446}\x{1F595}\x{1F447}\x{270C}\x{1F91E}\x{1F596}\x{1F918}\x{1F919}\x{1F590}\x{270B}\x{1F44C}\x{1F44D}\x{1F44E}\x{270A}\x{1F44A}\x{1F91B}\x{1F91C}\x{1F91A}\x{1F44B}\x{1F91F}\x{270D}\x{1F44F}\x{1F450}\x{1F64C}\x{1F932}\x{1F64F}\x{1F485}\x{1F442}\x{1F443}](?:\x{1F3FF})|[\x{1F476}\x{1F9D2}\x{1F466}\x{1F467}\x{1F9D1}\x{1F468}\x{1F469}\x{1F9D3}\x{1F474}\x{1F475}\x{1F46E}\x{1F575}\x{1F482}\x{1F477}\x{1F934}\x{1F478}\x{1F473}\x{1F472}\x{1F9D5}\x{1F9D4}\x{1F471}\x{1F935}\x{1F470}\x{1F930}\x{1F931}\x{1F47C}\x{1F385}\x{1F936}\x{1F9D9}\x{1F9DA}\x{1F9DB}\x{1F9DC}\x{1F9DD}\x{1F64D}\x{1F64E}\x{1F645}\x{1F646}\x{1F481}\x{1F64B}\x{1F647}\x{1F926}\x{1F937}\x{1F486}\x{1F487}\x{1F6B6}\x{1F3C3}\x{1F483}\x{1F57A}\x{1F9D6}\x{1F9D7}\x{1F9D8}\x{1F6C0}\x{1F6CC}\x{1F574}\x{1F3C7}\x{1F3C2}\x{1F3CC}\x{1F3C4}\x{1F6A3}\x{1F3CA}\x{26F9}\x{1F3CB}\x{1F6B4}\x{1F6B5}\x{1F938}\x{1F93D}\x{1F93E}\x{1F939}\x{1F933}\x{1F4AA}\x{1F9B5}\x{1F9B6}\x{1F448}\x{1F449}\x{261D}\x{1F446}\x{1F595}\x{1F447}\x{270C}\x{1F91E}\x{1F596}\x{1F918}\x{1F919}\x{1F590}\x{270B}\x{1F44C}\x{1F44D}\x{1F44E}\x{270A}\x{1F44A}\x{1F91B}\x{1F91C}\x{1F91A}\x{1F44B}\x{1F91F}\x{270D}\x{1F44F}\x{1F450}\x{1F64C}\x{1F932}\x{1F64F}\x{1F485}\x{1F442}\x{1F443}](?:\x{1F3FE})|[\x{1F476}\x{1F9D2}\x{1F466}\x{1F467}\x{1F9D1}\x{1F468}\x{1F469}\x{1F9D3}\x{1F474}\x{1F475}\x{1F46E}\x{1F575}\x{1F482}\x{1F477}\x{1F934}\x{1F478}\x{1F473}\x{1F472}\x{1F9D5}\x{1F9D4}\x{1F471}\x{1F935}\x{1F470}\x{1F930}\x{1F931}\x{1F47C}\x{1F385}\x{1F936}\x{1F9D9}\x{1F9DA}\x{1F9DB}\x{1F9DC}\x{1F9DD}\x{1F64D}\x{1F64E}\x{1F645}\x{1F646}\x{1F481}\x{1F64B}\x{1F647}\x{1F926}\x{1F937}\x{1F486}\x{1F487}\x{1F6B6}\x{1F3C3}\x{1F483}\x{1F57A}\x{1F9D6}\x{1F9D7}\x{1F9D8}\x{1F6C0}\x{1F6CC}\x{1F574}\x{1F3C7}\x{1F3C2}\x{1F3CC}\x{1F3C4}\x{1F6A3}\x{1F3CA}\x{26F9}\x{1F3CB}\x{1F6B4}\x{1F6B5}\x{1F938}\x{1F93D}\x{1F93E}\x{1F939}\x{1F933}\x{1F4AA}\x{1F9B5}\x{1F9B6}\x{1F448}\x{1F449}\x{261D}\x{1F446}\x{1F595}\x{1F447}\x{270C}\x{1F91E}\x{1F596}\x{1F918}\x{1F919}\x{1F590}\x{270B}\x{1F44C}\x{1F44D}\x{1F44E}\x{270A}\x{1F44A}\x{1F91B}\x{1F91C}\x{1F91A}\x{1F44B}\x{1F91F}\x{270D}\x{1F44F}\x{1F450}\x{1F64C}\x{1F932}\x{1F64F}\x{1F485}\x{1F442}\x{1F443}](?:\x{1F3FD})|[\x{1F476}\x{1F9D2}\x{1F466}\x{1F467}\x{1F9D1}\x{1F468}\x{1F469}\x{1F9D3}\x{1F474}\x{1F475}\x{1F46E}\x{1F575}\x{1F482}\x{1F477}\x{1F934}\x{1F478}\x{1F473}\x{1F472}\x{1F9D5}\x{1F9D4}\x{1F471}\x{1F935}\x{1F470}\x{1F930}\x{1F931}\x{1F47C}\x{1F385}\x{1F936}\x{1F9D9}\x{1F9DA}\x{1F9DB}\x{1F9DC}\x{1F9DD}\x{1F64D}\x{1F64E}\x{1F645}\x{1F646}\x{1F481}\x{1F64B}\x{1F647}\x{1F926}\x{1F937}\x{1F486}\x{1F487}\x{1F6B6}\x{1F3C3}\x{1F483}\x{1F57A}\x{1F9D6}\x{1F9D7}\x{1F9D8}\x{1F6C0}\x{1F6CC}\x{1F574}\x{1F3C7}\x{1F3C2}\x{1F3CC}\x{1F3C4}\x{1F6A3}\x{1F3CA}\x{26F9}\x{1F3CB}\x{1F6B4}\x{1F6B5}\x{1F938}\x{1F93D}\x{1F93E}\x{1F939}\x{1F933}\x{1F4AA}\x{1F9B5}\x{1F9B6}\x{1F448}\x{1F449}\x{261D}\x{1F446}\x{1F595}\x{1F447}\x{270C}\x{1F91E}\x{1F596}\x{1F918}\x{1F919}\x{1F590}\x{270B}\x{1F44C}\x{1F44D}\x{1F44E}\x{270A}\x{1F44A}\x{1F91B}\x{1F91C}\x{1F91A}\x{1F44B}\x{1F91F}\x{270D}\x{1F44F}\x{1F450}\x{1F64C}\x{1F932}\x{1F64F}\x{1F485}\x{1F442}\x{1F443}](?:\x{1F3FC})|[\x{1F476}\x{1F9D2}\x{1F466}\x{1F467}\x{1F9D1}\x{1F468}\x{1F469}\x{1F9D3}\x{1F474}\x{1F475}\x{1F46E}\x{1F575}\x{1F482}\x{1F477}\x{1F934}\x{1F478}\x{1F473}\x{1F472}\x{1F9D5}\x{1F9D4}\x{1F471}\x{1F935}\x{1F470}\x{1F930}\x{1F931}\x{1F47C}\x{1F385}\x{1F936}\x{1F9D9}\x{1F9DA}\x{1F9DB}\x{1F9DC}\x{1F9DD}\x{1F64D}\x{1F64E}\x{1F645}\x{1F646}\x{1F481}\x{1F64B}\x{1F647}\x{1F926}\x{1F937}\x{1F486}\x{1F487}\x{1F6B6}\x{1F3C3}\x{1F483}\x{1F57A}\x{1F9D6}\x{1F9D7}\x{1F9D8}\x{1F6C0}\x{1F6CC}\x{1F574}\x{1F3C7}\x{1F3C2}\x{1F3CC}\x{1F3C4}\x{1F6A3}\x{1F3CA}\x{26F9}\x{1F3CB}\x{1F6B4}\x{1F6B5}\x{1F938}\x{1F93D}\x{1F93E}\x{1F939}\x{1F933}\x{1F4AA}\x{1F9B5}\x{1F9B6}\x{1F448}\x{1F449}\x{261D}\x{1F446}\x{1F595}\x{1F447}\x{270C}\x{1F91E}\x{1F596}\x{1F918}\x{1F919}\x{1F590}\x{270B}\x{1F44C}\x{1F44D}\x{1F44E}\x{270A}\x{1F44A}\x{1F91B}\x{1F91C}\x{1F91A}\x{1F44B}\x{1F91F}\x{270D}\x{1F44F}\x{1F450}\x{1F64C}\x{1F932}\x{1F64F}\x{1F485}\x{1F442}\x{1F443}](?:\x{1F3FB})|[\x{1F1E6}\x{1F1E7}\x{1F1E8}\x{1F1E9}\x{1F1F0}\x{1F1F2}\x{1F1F3}\x{1F1F8}\x{1F1F9}\x{1F1FA}](?:\x{1F1FF})|[\x{1F1E7}\x{1F1E8}\x{1F1EC}\x{1F1F0}\x{1F1F1}\x{1F1F2}\x{1F1F5}\x{1F1F8}\x{1F1FA}](?:\x{1F1FE})|[\x{1F1E6}\x{1F1E8}\x{1F1F2}\x{1F1F8}](?:\x{1F1FD})|[\x{1F1E6}\x{1F1E7}\x{1F1E8}\x{1F1EC}\x{1F1F0}\x{1F1F2}\x{1F1F5}\x{1F1F7}\x{1F1F9}\x{1F1FF}](?:\x{1F1FC})|[\x{1F1E7}\x{1F1E8}\x{1F1F1}\x{1F1F2}\x{1F1F8}\x{1F1F9}](?:\x{1F1FB})|[\x{1F1E6}\x{1F1E8}\x{1F1EA}\x{1F1EC}\x{1F1ED}\x{1F1F1}\x{1F1F2}\x{1F1F3}\x{1F1F7}\x{1F1FB}](?:\x{1F1FA})|[\x{1F1E6}\x{1F1E7}\x{1F1EA}\x{1F1EC}\x{1F1ED}\x{1F1EE}\x{1F1F1}\x{1F1F2}\x{1F1F5}\x{1F1F8}\x{1F1F9}\x{1F1FE}](?:\x{1F1F9})|[\x{1F1E6}\x{1F1E7}\x{1F1EA}\x{1F1EC}\x{1F1EE}\x{1F1F1}\x{1F1F2}\x{1F1F5}\x{1F1F7}\x{1F1F8}\x{1F1FA}\x{1F1FC}](?:\x{1F1F8})|[\x{1F1E6}\x{1F1E7}\x{1F1E8}\x{1F1EA}\x{1F1EB}\x{1F1EC}\x{1F1ED}\x{1F1EE}\x{1F1F0}\x{1F1F1}\x{1F1F2}\x{1F1F3}\x{1F1F5}\x{1F1F8}\x{1F1F9}](?:\x{1F1F7})|[\x{1F1E6}\x{1F1E7}\x{1F1EC}\x{1F1EE}\x{1F1F2}](?:\x{1F1F6})|[\x{1F1E8}\x{1F1EC}\x{1F1EF}\x{1F1F0}\x{1F1F2}\x{1F1F3}](?:\x{1F1F5})|[\x{1F1E6}\x{1F1E7}\x{1F1E8}\x{1F1E9}\x{1F1EB}\x{1F1EE}\x{1F1EF}\x{1F1F2}\x{1F1F3}\x{1F1F7}\x{1F1F8}\x{1F1F9}](?:\x{1F1F4})|[\x{1F1E7}\x{1F1E8}\x{1F1EC}\x{1F1ED}\x{1F1EE}\x{1F1F0}\x{1F1F2}\x{1F1F5}\x{1F1F8}\x{1F1F9}\x{1F1FA}\x{1F1FB}](?:\x{1F1F3})|[\x{1F1E6}\x{1F1E7}\x{1F1E8}\x{1F1E9}\x{1F1EB}\x{1F1EC}\x{1F1ED}\x{1F1EE}\x{1F1EF}\x{1F1F0}\x{1F1F2}\x{1F1F4}\x{1F1F5}\x{1F1F8}\x{1F1F9}\x{1F1FA}\x{1F1FF}](?:\x{1F1F2})|[\x{1F1E6}\x{1F1E7}\x{1F1E8}\x{1F1EC}\x{1F1EE}\x{1F1F2}\x{1F1F3}\x{1F1F5}\x{1F1F8}\x{1F1F9}](?:\x{1F1F1})|[\x{1F1E8}\x{1F1E9}\x{1F1EB}\x{1F1ED}\x{1F1F1}\x{1F1F2}\x{1F1F5}\x{1F1F8}\x{1F1F9}\x{1F1FD}](?:\x{1F1F0})|[\x{1F1E7}\x{1F1E9}\x{1F1EB}\x{1F1F8}\x{1F1F9}](?:\x{1F1EF})|[\x{1F1E6}\x{1F1E7}\x{1F1E8}\x{1F1EB}\x{1F1EC}\x{1F1F0}\x{1F1F1}\x{1F1F3}\x{1F1F8}\x{1F1FB}](?:\x{1F1EE})|[\x{1F1E7}\x{1F1E8}\x{1F1EA}\x{1F1EC}\x{1F1F0}\x{1F1F2}\x{1F1F5}\x{1F1F8}\x{1F1F9}](?:\x{1F1ED})|[\x{1F1E6}\x{1F1E7}\x{1F1E8}\x{1F1E9}\x{1F1EA}\x{1F1EC}\x{1F1F0}\x{1F1F2}\x{1F1F3}\x{1F1F5}\x{1F1F8}\x{1F1F9}\x{1F1FA}\x{1F1FB}](?:\x{1F1EC})|[\x{1F1E6}\x{1F1E7}\x{1F1E8}\x{1F1EC}\x{1F1F2}\x{1F1F3}\x{1F1F5}\x{1F1F9}\x{1F1FC}](?:\x{1F1EB})|[\x{1F1E6}\x{1F1E7}\x{1F1E9}\x{1F1EA}\x{1F1EC}\x{1F1EE}\x{1F1EF}\x{1F1F0}\x{1F1F2}\x{1F1F3}\x{1F1F5}\x{1F1F7}\x{1F1F8}\x{1F1FB}\x{1F1FE}](?:\x{1F1EA})|[\x{1F1E6}\x{1F1E7}\x{1F1E8}\x{1F1EC}\x{1F1EE}\x{1F1F2}\x{1F1F8}\x{1F1F9}](?:\x{1F1E9})|[\x{1F1E6}\x{1F1E8}\x{1F1EA}\x{1F1EE}\x{1F1F1}\x{1F1F2}\x{1F1F3}\x{1F1F8}\x{1F1F9}\x{1F1FB}](?:\x{1F1E8})|[\x{1F1E7}\x{1F1EC}\x{1F1F1}\x{1F1F8}](?:\x{1F1E7})|[\x{1F1E7}\x{1F1E8}\x{1F1EA}\x{1F1EC}\x{1F1F1}\x{1F1F2}\x{1F1F3}\x{1F1F5}\x{1F1F6}\x{1F1F8}\x{1F1F9}\x{1F1FA}\x{1F1FB}\x{1F1FF}](?:\x{1F1E6})|[\x{00A9}\x{00AE}\x{203C}\x{2049}\x{2122}\x{2139}\x{2194}-\x{2199}\x{21A9}-\x{21AA}\x{231A}-\x{231B}\x{2328}\x{23CF}\x{23E9}-\x{23F3}\x{23F8}-\x{23FA}\x{24C2}\x{25AA}-\x{25AB}\x{25B6}\x{25C0}\x{25FB}-\x{25FE}\x{2600}-\x{2604}\x{260E}\x{2611}\x{2614}-\x{2615}\x{2618}\x{261D}\x{2620}\x{2622}-\x{2623}\x{2626}\x{262A}\x{262E}-\x{262F}\x{2638}-\x{263A}\x{2640}\x{2642}\x{2648}-\x{2653}\x{2660}\x{2663}\x{2665}-\x{2666}\x{2668}\x{267B}\x{267E}-\x{267F}\x{2692}-\x{2697}\x{2699}\x{269B}-\x{269C}\x{26A0}-\x{26A1}\x{26AA}-\x{26AB}\x{26B0}-\x{26B1}\x{26BD}-\x{26BE}\x{26C4}-\x{26C5}\x{26C8}\x{26CE}-\x{26CF}\x{26D1}\x{26D3}-\x{26D4}\x{26E9}-\x{26EA}\x{26F0}-\x{26F5}\x{26F7}-\x{26FA}\x{26FD}\x{2702}\x{2705}\x{2708}-\x{270D}\x{270F}\x{2712}\x{2714}\x{2716}\x{271D}\x{2721}\x{2728}\x{2733}-\x{2734}\x{2744}\x{2747}\x{274C}\x{274E}\x{2753}-\x{2755}\x{2757}\x{2763}-\x{2764}\x{2795}-\x{2797}\x{27A1}\x{27B0}\x{27BF}\x{2934}-\x{2935}\x{2B05}-\x{2B07}\x{2B1B}-\x{2B1C}\x{2B50}\x{2B55}\x{3030}\x{303D}\x{3297}\x{3299}\x{1F004}\x{1F0CF}\x{1F170}-\x{1F171}\x{1F17E}-\x{1F17F}\x{1F18E}\x{1F191}-\x{1F19A}\x{1F201}-\x{1F202}\x{1F21A}\x{1F22F}\x{1F232}-\x{1F23A}\x{1F250}-\x{1F251}\x{1F300}-\x{1F321}\x{1F324}-\x{1F393}\x{1F396}-\x{1F397}\x{1F399}-\x{1F39B}\x{1F39E}-\x{1F3F0}\x{1F3F3}-\x{1F3F5}\x{1F3F7}-\x{1F3FA}\x{1F400}-\x{1F4FD}\x{1F4FF}-\x{1F53D}\x{1F549}-\x{1F54E}\x{1F550}-\x{1F567}\x{1F56F}-\x{1F570}\x{1F573}-\x{1F57A}\x{1F587}\x{1F58A}-\x{1F58D}\x{1F590}\x{1F595}-\x{1F596}\x{1F5A4}-\x{1F5A5}\x{1F5A8}\x{1F5B1}-\x{1F5B2}\x{1F5BC}\x{1F5C2}-\x{1F5C4}\x{1F5D1}-\x{1F5D3}\x{1F5DC}-\x{1F5DE}\x{1F5E1}\x{1F5E3}\x{1F5E8}\x{1F5EF}\x{1F5F3}\x{1F5FA}-\x{1F64F}\x{1F680}-\x{1F6C5}\x{1F6CB}-\x{1F6D2}\x{1F6E0}-\x{1F6E5}\x{1F6E9}\x{1F6EB}-\x{1F6EC}\x{1F6F0}\x{1F6F3}-\x{1F6F9}\x{1F910}-\x{1F93A}\x{1F93C}-\x{1F93E}\x{1F940}-\x{1F945}\x{1F947}-\x{1F970}\x{1F973}-\x{1F976}\x{1F97A}\x{1F97C}-\x{1F9A2}\x{1F9B0}-\x{1F9B9}\x{1F9C0}-\x{1F9C2}\x{1F9D0}-\x{1F9FF}]/u', '', $text);
    }


    
    public static function getUltiFechaData() {
        $ult_fecha = '2020-04-23';

        return $ult_fecha;
    }

    public static function getCasosCantones($ult_fecha) {
        $c_guayas = '';        
        $c_guayas .= ($ult_fecha->baquerizo_moreno!=0) ? 'Baquerizo Moreno:'.$ult_fecha->baquerizo_moreno.'<br>' : '';                 
        $c_guayas .= ($ult_fecha->balao!=0) ? 'Balao:'.$ult_fecha->balao.'<br>' : '';                        
        $c_guayas .=($ult_fecha->balzar!=0) ? 'Balzar:'.$ult_fecha->balzar.'<br>' : '';
        $c_guayas .=($ult_fecha->colimes!=0) ? 'Colimes:'.$ult_fecha->colimes.'<br>' : '';
        $c_guayas .=($ult_fecha->daule!=0) ? 'Daule:'.$ult_fecha->daule.'<br>' : '';
        $c_guayas .=($ult_fecha->duran!=0) ? 'Durán:'.$ult_fecha->duran.'<br>' : '';        
        $c_guayas .=($ult_fecha->el_empalme!=0) ? 'El Empalme:'.$ult_fecha->el_empalme.'<br>' : '';
        $c_guayas .=($ult_fecha->el_triunfo!=0) ? 'El Triunfo:'.$ult_fecha->el_triunfo.'<br>' : '';
        $c_guayas .=($ult_fecha->general_antonio!=0) ? 'General Antonio:'.$ult_fecha->general_antonio.'<br>' : '';
        $c_guayas .=($ult_fecha->guayaquil!=0) ? 'Guayaquil:'.$ult_fecha->guayaquil.'<br>' : '';
        $c_guayas .=($ult_fecha->isidro_ayora!=0) ? 'Isidro Ayora:'.$ult_fecha->isidro_ayora.'<br>' : '';
        $c_guayas .=($ult_fecha->sargentillo!=0) ? 'Sargentillo:'.$ult_fecha->sargentillo.'<br>' : '';
        $c_guayas .=($ult_fecha->marcelino!=0) ? 'Marcelino:'.$ult_fecha->marcelino.'<br>' : '';
        $c_guayas .=($ult_fecha->milagro!=0) ? 'Milagro:'.$ult_fecha->milagro.'<br>' : '';
        $c_guayas .=($ult_fecha->naranjal!=0) ? 'Naranjal:'.$ult_fecha->naranjal.'<br>' : '';
        $c_guayas .=($ult_fecha->naranjito!=0) ? 'Naranjito:'.$ult_fecha->naranjito.'<br>' : '';
        $c_guayas .=($ult_fecha->nobol!=0) ? 'Nobol:'.$ult_fecha->nobol.'<br>' : '';
        $c_guayas .=($ult_fecha->palestina!=0) ? 'Palestina:'.$ult_fecha->palestina.'<br>' : '';
        $c_guayas .=($ult_fecha->pedro_carbo!=0) ? 'Pedro Carbo:'.$ult_fecha->pedro_carbo.'<br>' : '';
        $c_guayas .=($ult_fecha->playas!=0) ? 'Playas:'.$ult_fecha->playas.'<br>' : '';
        $c_guayas .=($ult_fecha->salitre!=0) ? 'Salitre:'.$ult_fecha->salitre.'<br>' : '';
        $c_guayas .=($ult_fecha->samborondon!=0) ? 'Samborondón:'.$ult_fecha->samborondon.'<br>' : '';
        $c_guayas .=($ult_fecha->santa_lucia!=0) ? 'Santa Lucía:'.$ult_fecha->santa_lucia.'<br>' : '';
        $c_guayas .=($ult_fecha->simon_bolivar!=0) ? 'Simón Bolívar:'.$ult_fecha->simon_bolivar.'<br>' : '';
        $c_guayas .=($ult_fecha->yaguachi!=0) ? 'Yaguachi:'.$ult_fecha->yaguachi.'<br>' : '';        
        $c_guayas .=($ult_fecha->el_piedrero!=0) ? 'El Piedrero:'.$ult_fecha->el_piedrero.'<br>' : '';        

        $c_esmeraldas = '';     
        $c_esmeraldas .= ($ult_fecha->atacames!=0) ? 'Atacames:'.$ult_fecha->atacames.'<br>' : '';                      
        $c_esmeraldas .= ($ult_fecha->eloy_alfaro!=0) ? 'Eloy Alfaro:'.$ult_fecha->eloy_alfaro.'<br>' : '';   
        $c_esmeraldas .= ($ult_fecha->esmeraldas!=0) ? 'Esmeraldas:'.$ult_fecha->esmeraldas.'<br>' : '';   
        $c_esmeraldas .= ($ult_fecha->muisne!=0) ? 'Muisne:'.$ult_fecha->muisne.'<br>' : '';   
        $c_esmeraldas .= ($ult_fecha->quininde!=0) ? 'Quinindé:'.$ult_fecha->quininde.'<br>' : '';   
        $c_esmeraldas .= ($ult_fecha->rioverde!=0) ? 'Rioverde:'.$ult_fecha->rioverde.'<br>' : '';   
        $c_esmeraldas .= ($ult_fecha->san_lorenzo!=0) ? 'San Lorenzo:'.$ult_fecha->san_lorenzo.'<br>' : '';   

        $c_carchi = '';               
        $c_carchi .= ($ult_fecha->bolivar1!=0) ? 'Bolívar:'.$ult_fecha->bolivar1.'<br>' : '';  
        $c_carchi .= ($ult_fecha->espejo!=0) ? 'Espejo:'.$ult_fecha->espejo.'<br>' : '';  
        $c_carchi .= ($ult_fecha->mira!=0) ? 'Mira:'.$ult_fecha->mira.'<br>' : '';  
        $c_carchi .= ($ult_fecha->montufar!=0) ? 'Montúfar:'.$ult_fecha->montufar.'<br>' : '';  
        $c_carchi .= ($ult_fecha->san_pedro!=0) ? 'San Pedro:'.$ult_fecha->san_pedro.'<br>' : '';  
        $c_carchi .= ($ult_fecha->tulcan!=0) ? 'Túlcán:'.$ult_fecha->tulcan.'<br>' : '';

        $c_imbabura = '';     
        $c_imbabura .= ($ult_fecha->antonio_ante!=0) ? 'Antonio Ante:'.$ult_fecha->antonio_ante.'<br>' : '';  
        $c_imbabura .= ($ult_fecha->cotacachi!=0) ? 'Cotacachi:'.$ult_fecha->cotacachi.'<br>' : '';  
        $c_imbabura .= ($ult_fecha->ibarra!=0) ? 'Ibarra:'.$ult_fecha->ibarra.'<br>' : '';  
        $c_imbabura .= ($ult_fecha->otavalo!=0) ? 'Otavalo:'.$ult_fecha->otavalo.'<br>' : '';  
        $c_imbabura .= ($ult_fecha->pimampiro!=0) ? 'Pimampiro:'.$ult_fecha->pimampiro.'<br>' : '';  
        $c_imbabura .= ($ult_fecha->urcuqui!=0) ? 'Urcuquí:'.$ult_fecha->urcuqui.'<br>' : '';
        $c_imbabura .= ($ult_fecha->las_golondrinas!=0) ? 'Las Golondrinas:'.$ult_fecha->las_golondrinas.'<br>' : '';

        $c_sucumbios = '';             
        $c_sucumbios .= ($ult_fecha->cascales!=0) ? 'Cascales:'.$ult_fecha->cascales.'<br>' : '';  
        $c_sucumbios .= ($ult_fecha->cuyabeno!=0) ? 'Cuyabeno:'.$ult_fecha->cuyabeno.'<br>' : '';  
        $c_sucumbios .= ($ult_fecha->gonzalo_pizarro!=0) ? 'Gonzálo Pizarro:'.$ult_fecha->gonzalo_pizarro.'<br>' : '';  
        $c_sucumbios .= ($ult_fecha->lago_agrio!=0) ? 'Lago Ágrio:'.$ult_fecha->lago_agrio.'<br>' : '';  
        $c_sucumbios .= ($ult_fecha->putumayo!=0) ? 'Putumayo:'.$ult_fecha->putumayo.'<br>' : '';  
        $c_sucumbios .= ($ult_fecha->shushufindi!=0) ? 'Shushufindi:'.$ult_fecha->shushufindi.'<br>' : '';
        $c_sucumbios .= ($ult_fecha->sucumbios!=0) ? 'Sucumbíos:'.$ult_fecha->sucumbios.'<br>' : '';    

        $c_santa_elena = '';     
        $c_santa_elena .= ($ult_fecha->la_libertad!=0) ? 'La Libertad:'.$ult_fecha->la_libertad.'<br>' : '';  
        $c_santa_elena .= ($ult_fecha->salinas!=0) ? 'Salinas:'.$ult_fecha->salinas.'<br>' : '';  
        $c_santa_elena .= ($ult_fecha->santa_elena!=0) ? 'Santa Elena:'.$ult_fecha->santa_elena.'<br>' : '';  
        
        $c_santo_domingo = '';     
        $c_santo_domingo .= ($ult_fecha->la_concordia!=0) ? 'La Concordia:'.$ult_fecha->la_concordia.'<br>' : '';  
        $c_santo_domingo .= ($ult_fecha->santo_domingo!=0) ? 'Santo Domingo:'.$ult_fecha->santo_domingo.'<br>' : '';  

        $c_azuay = '';     
        $c_azuay .= ($ult_fecha->cuenca!=0) ? 'Cuenca:'.$ult_fecha->cuenca.'<br>' : '';  
        $c_azuay .= ($ult_fecha->ponce_enriquez!=0) ? 'Ponce Enríquez:'.$ult_fecha->ponce_enriquez.'<br>' : '';  
        $c_azuay .= ($ult_fecha->chordeleg!=0) ? 'Chordeleg:'.$ult_fecha->chordeleg.'<br>' : '';  
        $c_azuay .= ($ult_fecha->el_pan!=0) ? 'El Pan:'.$ult_fecha->el_pan.'<br>' : '';  
        $c_azuay .= ($ult_fecha->giron!=0) ? 'Girón:'.$ult_fecha->giron.'<br>' : '';  
        $c_azuay .= ($ult_fecha->guachapala!=0) ? 'Guachapala:'.$ult_fecha->guachapala.'<br>' : '';  
        $c_azuay .= ($ult_fecha->gualaceo!=0) ? 'Gualaceo:'.$ult_fecha->gualaceo.'<br>' : '';  
        $c_azuay .= ($ult_fecha->nabon!=0) ? 'Nabón:'.$ult_fecha->nabon.'<br>' : '';  
        $c_azuay .= ($ult_fecha->ona!=0) ? 'Oña:'.$ult_fecha->ona.'<br>' : '';  
        $c_azuay .= ($ult_fecha->paute!=0) ? 'Paute:'.$ult_fecha->paute.'<br>' : '';  
        $c_azuay .= ($ult_fecha->pucara!=0) ? 'Pucará'.$ult_fecha->pucara.'<br>' : '';  
        $c_azuay .= ($ult_fecha->san_fernando!=0) ? 'San Fernando:'.$ult_fecha->san_fernando.'<br>' : '';  
        $c_azuay .= ($ult_fecha->santa_isabel!=0) ? 'Santa Isabel:'.$ult_fecha->santa_isabel.'<br>' : '';  
        $c_azuay .= ($ult_fecha->sevilla_oro!=0) ? 'Sevilla de Oro:'.$ult_fecha->sevilla_oro.'<br>' : '';  
        $c_azuay .= ($ult_fecha->sigsig!=0) ? 'Sigsig:'.$ult_fecha->sigsig.'<br>' : '';  

        $c_el_oro = '';     
        $c_el_oro .= ($ult_fecha->arenillas!=0) ? 'Arenillas:'.$ult_fecha->arenillas.'<br>' : '';  
        $c_el_oro .= ($ult_fecha->atahualpa!=0) ? 'Atahualpa:'.$ult_fecha->atahualpa.'<br>' : '';  
        $c_el_oro .= ($ult_fecha->balsas!=0) ? 'Balsas:'.$ult_fecha->balsas.'<br>' : '';  
        $c_el_oro .= ($ult_fecha->chilla!=0) ? 'Chilla:'.$ult_fecha->chilla.'<br>' : '';  
        $c_el_oro .= ($ult_fecha->el_guabo!=0) ? 'El Guabo:'.$ult_fecha->el_guabo.'<br>' : '';  
        $c_el_oro .= ($ult_fecha->huaquillas!=0) ? 'Huaquillas:'.$ult_fecha->huaquillas.'<br>' : '';  
        $c_el_oro .= ($ult_fecha->las_lajas!=0) ? 'Las Lajas:'.$ult_fecha->las_lajas.'<br>' : '';  
        $c_el_oro .= ($ult_fecha->machala!=0) ? 'Machala:'.$ult_fecha->machala.'<br>' : '';  
        $c_el_oro .= ($ult_fecha->marcabeli!=0) ? 'Marcabelí:'.$ult_fecha->marcabeli.'<br>' : '';  
        $c_el_oro .= ($ult_fecha->pasaje!=0) ? 'Pasaje:'.$ult_fecha->pasaje.'<br>' : '';  
        $c_el_oro .= ($ult_fecha->pinas!=0) ? 'Piñas:'.$ult_fecha->pinas.'<br>' : '';  
        $c_el_oro .= ($ult_fecha->portovelo!=0) ? 'Portovelo:'.$ult_fecha->portovelo.'<br>' : '';  
        $c_el_oro .= ($ult_fecha->santa_rosa!=0) ? 'Santa Rosa:'.$ult_fecha->santa_rosa.'<br>' : '';  
        $c_el_oro .= ($ult_fecha->zaruma!=0) ? 'Zaruma:'.$ult_fecha->zaruma.'<br>' : '';  

        $c_loja = '';             
        $c_loja .= ($ult_fecha->calvas!=0) ? 'Calvas:'.$ult_fecha->calvas.'<br>' : '';  
        $c_loja .= ($ult_fecha->catamayo!=0) ? 'Catamayo:'.$ult_fecha->catamayo.'<br>' : '';  
        $c_loja .= ($ult_fecha->celica!=0) ? 'Celica:'.$ult_fecha->celica.'<br>' : '';  
        $c_loja .= ($ult_fecha->chaguarpamba!=0) ? 'Chaguarpamba:'.$ult_fecha->chaguarpamba.'<br>' : '';  
        $c_loja .= ($ult_fecha->espindola!=0) ? 'Espíndola:'.$ult_fecha->espindola.'<br>' : '';  
        $c_loja .= ($ult_fecha->gonzanama!=0) ? 'Gonzanama:'.$ult_fecha->gonzanama.'<br>' : '';  
        $c_loja .= ($ult_fecha->loja!=0) ? 'Loja:'.$ult_fecha->loja.'<br>' : '';  
        $c_loja .= ($ult_fecha->macara!=0) ? 'Macará:'.$ult_fecha->macara.'<br>' : '';  
        $c_loja .= ($ult_fecha->olmedo1!=0) ? 'Olmedo:'.$ult_fecha->olmedo1.'<br>' : '';  
        $c_loja .= ($ult_fecha->paltas!=0) ? 'Paltas:'.$ult_fecha->paltas.'<br>' : '';  
        $c_loja .= ($ult_fecha->pindal!=0) ? 'Pindal:'.$ult_fecha->pindal.'<br>' : '';  
        $c_loja .= ($ult_fecha->puyango!=0) ? 'Puyango:'.$ult_fecha->puyango.'<br>' : '';  
        $c_loja .= ($ult_fecha->quilanga!=0) ? 'Quilanga:'.$ult_fecha->quilanga.'<br>' : '';  
        $c_loja .= ($ult_fecha->saraguro!=0) ? 'Saraguro:'.$ult_fecha->saraguro.'<br>' : '';  
        $c_loja .= ($ult_fecha->sozoranga!=0) ? 'Sozoranga:'.$ult_fecha->sozoranga.'<br>' : '';  
        $c_loja .= ($ult_fecha->zapotillo!=0) ? 'Zapotillo:'.$ult_fecha->zapotillo.'<br>' : '';  

        $c_zamora = '';             
        $c_zamora .= ($ult_fecha->centinela!=0) ? 'Centinela:'.$ult_fecha->centinela.'<br>' : '';
        $c_zamora .= ($ult_fecha->chinchipe!=0) ? 'Chinchipe:'.$ult_fecha->chinchipe.'<br>' : '';
        $c_zamora .= ($ult_fecha->el_pangui!=0) ? 'El Pangui:'.$ult_fecha->el_pangui.'<br>' : '';
        $c_zamora .= ($ult_fecha->nangaritza!=0) ? 'Nangaritza:'.$ult_fecha->nangaritza.'<br>' : '';
        $c_zamora .= ($ult_fecha->palanda!=0) ? 'Palanda:'.$ult_fecha->palanda.'<br>' : '';
        $c_zamora .= ($ult_fecha->paquisha!=0) ? 'Paquisha:'.$ult_fecha->paquisha.'<br>' : '';
        $c_zamora .= ($ult_fecha->yacuambi!=0) ? 'Yacuambi:'.$ult_fecha->yacuambi.'<br>' : '';
        $c_zamora .= ($ult_fecha->yantzaza!=0) ? 'Yantzaza:'.$ult_fecha->yantzaza.'<br>' : '';
        $c_zamora .= ($ult_fecha->zamora!=0) ? 'Zamora:'.$ult_fecha->zamora.'<br>' : '';  

        $c_canar = '';     
        $c_canar .= ($ult_fecha->azogues!=0) ? 'Azogues:'.$ult_fecha->azogues.'<br>' : '';  
        $c_canar .= ($ult_fecha->biblian!=0) ? 'Biblián:'.$ult_fecha->biblian.'<br>' : '';  
        $c_canar .= ($ult_fecha->canar!=0) ? 'Cañar:'.$ult_fecha->canar.'<br>' : '';  
        $c_canar .= ($ult_fecha->deleg!=0) ? 'Déleg:'.$ult_fecha->deleg.'<br>' : '';  
        $c_canar .= ($ult_fecha->el_tambo!=0) ? 'El Tambo:'.$ult_fecha->el_tambo.'<br>' : '';  
        $c_canar .= ($ult_fecha->la_troncal!=0) ? 'La Troncal:'.$ult_fecha->la_troncal.'<br>' : '';  
        $c_canar .= ($ult_fecha->suscal!=0) ? 'Suscal:'.$ult_fecha->suscal.'<br>' : '';  

        $c_bolivar = '';             
        $c_bolivar .= ($ult_fecha->caluma!=0) ? 'Caluma:'.$ult_fecha->caluma.'<br>' : '';  
        $c_bolivar .= ($ult_fecha->chillanes!=0) ? 'Chillanes:'.$ult_fecha->chillanes.'<br>' : '';  
        $c_bolivar .= ($ult_fecha->chimbo!=0) ? 'Chimbo:'.$ult_fecha->chimbo.'<br>' : '';  
        $c_bolivar .= ($ult_fecha->echeandia!=0) ? 'Echeandía:'.$ult_fecha->echeandia.'<br>' : '';  
        $c_bolivar .= ($ult_fecha->guaranda!=0) ? 'Guaranda:'.$ult_fecha->guaranda.'<br>' : '';  
        $c_bolivar .= ($ult_fecha->las_naves!=0) ? 'Las Naves:'.$ult_fecha->las_naves.'<br>' : '';  
        $c_bolivar .= ($ult_fecha->san_miguel!=0) ? 'San Miguel:'.$ult_fecha->san_miguel.'<br>' : '';  

        $c_cotopaxi = '';             
        $c_cotopaxi .= ($ult_fecha->la_mana!=0) ? 'La Maná:'.$ult_fecha->la_mana.'<br>' : '';
        $c_cotopaxi .= ($ult_fecha->latacunga!=0) ? 'Latacunga:'.$ult_fecha->latacunga.'<br>' : '';  
        $c_cotopaxi .= ($ult_fecha->pangua!=0) ? 'Pangua:'.$ult_fecha->pangua.'<br>' : '';
        $c_cotopaxi .= ($ult_fecha->pujili!=0) ? 'Pujilí:'.$ult_fecha->pujili.'<br>' : '';
        $c_cotopaxi .= ($ult_fecha->salcedo!=0) ? 'Salcedo:'.$ult_fecha->salcedo.'<br>' : '';
        $c_cotopaxi .= ($ult_fecha->saquicili!=0) ? 'Saquisilí:'.$ult_fecha->saquicili.'<br>' : '';
        $c_cotopaxi .= ($ult_fecha->sigchos!=0) ? 'Sigchos:'.$ult_fecha->sigchos.'<br>' : '';

        $c_los_rios = '';     
        $c_los_rios .= ($ult_fecha->baba!=0) ? 'Baba:'.$ult_fecha->baba.'<br>' : '';  
        $c_los_rios .= ($ult_fecha->babahoyo!=0) ? 'Babahoyo:'.$ult_fecha->babahoyo.'<br>' : '';          
        $c_los_rios .= ($ult_fecha->buena_fe!=0) ? 'Buena Fé:'.$ult_fecha->buena_fe.'<br>' : '';  
        $c_los_rios .= ($ult_fecha->mocache!=0) ? 'Mocache:'.$ult_fecha->mocache.'<br>' : '';  
        $c_los_rios .= ($ult_fecha->montalvo!=0) ? 'Montalvo:'.$ult_fecha->montalvo.'<br>' : '';  
        $c_los_rios .= ($ult_fecha->palenque!=0) ? 'Palenque:'.$ult_fecha->palenque.'<br>' : '';  
        $c_los_rios .= ($ult_fecha->puebloviejo!=0) ? 'Puebloviejo:'.$ult_fecha->puebloviejo.'<br>' : '';  
        $c_los_rios .= ($ult_fecha->quevedo!=0) ? 'Quevedo:'.$ult_fecha->quevedo.'<br>' : '';  
        $c_los_rios .= ($ult_fecha->quinsaloma!=0) ? 'Quinsaloma:'.$ult_fecha->quinsaloma.'<br>' : '';  
        $c_los_rios .= ($ult_fecha->urdaneta!=0) ? 'Urdaneta:'.$ult_fecha->urdaneta.'<br>' : '';  
        $c_los_rios .= ($ult_fecha->valencia!=0) ? 'Valencia:'.$ult_fecha->valencia.'<br>' : '';  
        $c_los_rios .= ($ult_fecha->ventanas!=0) ? 'Ventanas:'.$ult_fecha->ventanas.'<br>' : '';  
        $c_los_rios .= ($ult_fecha->vinces!=0) ? 'Vinces:'.$ult_fecha->vinces.'<br>' : '';  

        $c_manabi = '';             
        $c_manabi .= ($ult_fecha->veintecuatro_mayo!=0) ? '24 de Mayo:'.$ult_fecha->veintecuatro_mayo.'<br>' : '';  
        $c_manabi .= ($ult_fecha->bolivar2!=0) ? 'Bolívar:'.$ult_fecha->bolivar2.'<br>' : '';  
        $c_manabi .= ($ult_fecha->chone!=0) ? 'Chone:'.$ult_fecha->chone.'<br>' : '';  
        $c_manabi .= ($ult_fecha->el_carmen!=0) ? 'El Carmen:'.$ult_fecha->el_carmen.'<br>' : '';  
        $c_manabi .= ($ult_fecha->flavio_alfaro!=0) ? 'Flavio Alfaro:'.$ult_fecha->flavio_alfaro.'<br>' : '';  
        $c_manabi .= ($ult_fecha->jama!=0) ? 'Jama:'.$ult_fecha->jama.'<br>' : '';  
        $c_manabi .= ($ult_fecha->jaramijo!=0) ? 'Jaramijó:'.$ult_fecha->jaramijo.'<br>' : '';  
        $c_manabi .= ($ult_fecha->jipijapa!=0) ? 'Jipijapa:'.$ult_fecha->jipijapa.'<br>' : '';  
        $c_manabi .= ($ult_fecha->junin!=0) ? 'Junín:'.$ult_fecha->junin.'<br>' : '';  
        $c_manabi .= ($ult_fecha->manta!=0) ? 'Manta:'.$ult_fecha->manta.'<br>' : '';  
        $c_manabi .= ($ult_fecha->montecristi!=0) ? 'Montecristi:'.$ult_fecha->montecristi.'<br>' : '';  
        $c_manabi .= ($ult_fecha->olmedo2!=0) ? 'Olmedo:'.$ult_fecha->olmedo2.'<br>' : '';  
        $c_manabi .= ($ult_fecha->pajan!=0) ? 'Paján:'.$ult_fecha->pajan.'<br>' : '';  
        $c_manabi .= ($ult_fecha->pedernales!=0) ? 'Pedernales:'.$ult_fecha->pedernales.'<br>' : '';  
        $c_manabi .= ($ult_fecha->pichincha!=0) ? 'Pichincha:'.$ult_fecha->pichincha.'<br>' : '';  
        $c_manabi .= ($ult_fecha->portoviejo!=0) ? 'Portoviejo:'.$ult_fecha->portoviejo.'<br>' : '';  
        $c_manabi .= ($ult_fecha->puerto_lopez!=0) ? 'Puerto López:'.$ult_fecha->puerto_lopez.'<br>' : '';  
        $c_manabi .= ($ult_fecha->rocafuerte!=0) ? 'Rocafuerte:'.$ult_fecha->rocafuerte.'<br>' : '';  
        $c_manabi .= ($ult_fecha->san_vicente!=0) ? 'San Vicente:'.$ult_fecha->san_vicente.'<br>' : '';  
        $c_manabi .= ($ult_fecha->santa_ana!=0) ? 'Santa Ana:'.$ult_fecha->santa_ana.'<br>' : '';  
        $c_manabi .= ($ult_fecha->sucre!=0) ? 'Sucre:'.$ult_fecha->sucre.'<br>' : '';  
        $c_manabi .= ($ult_fecha->tosagua!=0) ? 'Tosagua:'.$ult_fecha->tosagua.'<br>' : '';  
        $c_manabi .= ($ult_fecha->manga_cura!=0) ? 'Manga del Cura:'.$ult_fecha->manga_cura.'<br>' : '';  

        $c_chimborazo = '';             
        $c_chimborazo .= ($ult_fecha->alausi!=0) ? 'Alausí:'.$ult_fecha->alausi.'<br>' : ''; 
        $c_chimborazo .= ($ult_fecha->chambo!=0) ? 'Chambo:'.$ult_fecha->chambo.'<br>' : ''; 
        $c_chimborazo .= ($ult_fecha->chunchi!=0) ? 'Chunchi:'.$ult_fecha->chunchi.'<br>' : ''; 
        $c_chimborazo .= ($ult_fecha->colta!=0) ? 'Colta:'.$ult_fecha->colta.'<br>' : ''; 
        $c_chimborazo .= ($ult_fecha->cumanda!=0) ? 'Cumandá:'.$ult_fecha->cumanda.'<br>' : ''; 
        $c_chimborazo .= ($ult_fecha->guamote!=0) ? 'Guamote:'.$ult_fecha->guamote.'<br>' : ''; 
        $c_chimborazo .= ($ult_fecha->guano!=0) ? 'Guano:'.$ult_fecha->guano.'<br>' : ''; 
        $c_chimborazo .= ($ult_fecha->pallatanga!=0) ? 'Pallatanga:'.$ult_fecha->pallatanga.'<br>' : ''; 
        $c_chimborazo .= ($ult_fecha->penipe!=0) ? 'Penipe:'.$ult_fecha->penipe.'<br>' : ''; 
        $c_chimborazo .= ($ult_fecha->riobamba!=0) ? 'Riobamba:'.$ult_fecha->riobamba.'<br>' : '';  

        $c_morona = '';             
        $c_morona .= ($ult_fecha->gualaquiza!=0) ? 'Gualaquiza:'.$ult_fecha->gualaquiza.'<br>' : ''; 
        $c_morona .= ($ult_fecha->huamboya!=0) ? 'Huamboya:'.$ult_fecha->huamboya.'<br>' : ''; 
        $c_morona .= ($ult_fecha->limon!=0) ? 'Limón:'.$ult_fecha->limon.'<br>' : ''; 
        $c_morona .= ($ult_fecha->logrono!=0) ? 'Logroño:'.$ult_fecha->logrono.'<br>' : ''; 
        $c_morona .= ($ult_fecha->morona!=0) ? 'Morona:'.$ult_fecha->morona.'<br>' : '';  
        $c_morona .= ($ult_fecha->pablo_sexto!=0) ? 'Pablo Sexto:'.$ult_fecha->pablo_sexto.'<br>' : ''; 
        $c_morona .= ($ult_fecha->palora!=0) ? 'Palora:'.$ult_fecha->palora.'<br>' : ''; 
        $c_morona .= ($ult_fecha->juan_bosco!=0) ? 'San Juan Bosco:'.$ult_fecha->juan_bosco.'<br>' : ''; 
        $c_morona .= ($ult_fecha->mendez!=0) ? 'Méndez:'.$ult_fecha->mendez.'<br>' : ''; 
        $c_morona .= ($ult_fecha->sucua!=0) ? 'Sucúa:'.$ult_fecha->sucua.'<br>' : ''; 
        $c_morona .= ($ult_fecha->taisha!=0) ? 'Taisha:'.$ult_fecha->taisha.'<br>' : ''; 
        $c_morona .= ($ult_fecha->tiwintza!=0) ? 'Tiwintza:'.$ult_fecha->tiwintza.'<br>' : ''; 

        $c_pichincha = '';               
        $c_pichincha .= ($ult_fecha->cayambe!=0) ? 'Cayambe:'.$ult_fecha->cayambe.'<br>' : ''; 
        $c_pichincha .= ($ult_fecha->mejia!=0) ? 'Mejía:'.$ult_fecha->mejia.'<br>' : ''; 
        $c_pichincha .= ($ult_fecha->pedro_moncayo!=0) ? 'Pedro Moncayo:'.$ult_fecha->pedro_moncayo.'<br>' : ''; 
        $c_pichincha .= ($ult_fecha->pedro_vicente!=0) ? 'Pedro Vicente:'.$ult_fecha->pedro_vicente.'<br>' : ''; 
        $c_pichincha .= ($ult_fecha->puerto_quito!=0) ? 'Puerto_Quito:'.$ult_fecha->puerto_quito.'<br>' : ''; 
        $c_pichincha .= ($ult_fecha->quito!=0) ? 'Quito:'.$ult_fecha->quito.'<br>' : '';
        $c_pichincha .= ($ult_fecha->ruminahui!=0) ? 'Rumiñahui:'.$ult_fecha->ruminahui.'<br>' : ''; 
        $c_pichincha .= ($ult_fecha->bancos!=0) ? 'Bancos:'.$ult_fecha->bancos.'<br>' : ''; 

        $c_pastaza = '';             
        $c_pastaza .= ($ult_fecha->arajuno!=0) ? 'Arajuno:'.$ult_fecha->arajuno.'<br>' : ''; 
        $c_pastaza .= ($ult_fecha->mera!=0) ? 'Mera:'.$ult_fecha->mera.'<br>' : ''; 
        $c_pastaza .= ($ult_fecha->pastaza!=0) ? 'Pastaza:'.$ult_fecha->pastaza.'<br>' : '';  
        $c_pastaza .= ($ult_fecha->santa_clara!=0) ? 'Santa Clara:'.$ult_fecha->santa_clara.'<br>' : ''; 

        $c_tungurahua = '';     
        $c_tungurahua .= ($ult_fecha->ambato!=0) ? 'Ambato:'.$ult_fecha->ambato.'<br>' : '';  
        $c_tungurahua .= ($ult_fecha->banos!=0) ? 'Baños:'.$ult_fecha->banos.'<br>' : '';
        $c_tungurahua .= ($ult_fecha->cevallos!=0) ? 'Cevallos:'.$ult_fecha->cevallos.'<br>' : '';
        $c_tungurahua .= ($ult_fecha->mocha!=0) ? 'Mocha:'.$ult_fecha->mocha.'<br>' : '';
        $c_tungurahua .= ($ult_fecha->patate!=0) ? 'Patate:'.$ult_fecha->patate.'<br>' : '';
        $c_tungurahua .= ($ult_fecha->pelileo!=0) ? 'Pelileo:'.$ult_fecha->pelileo.'<br>' : '';
        $c_tungurahua .= ($ult_fecha->quero!=0) ? 'Quero:'.$ult_fecha->quero.'<br>' : '';
        $c_tungurahua .= ($ult_fecha->pillaro!=0) ? 'Píllaro:'.$ult_fecha->pillaro.'<br>' : '';
        $c_tungurahua .= ($ult_fecha->tisaleo!=0) ? 'Tisaleo:'.$ult_fecha->tisaleo.'<br>' : '';

        $c_orellana = '';     
        $c_orellana .= ($ult_fecha->aguarico!=0) ? 'Aguarico:'.$ult_fecha->aguarico.'<br>' : '';  
        $c_orellana .= ($ult_fecha->joya_sachas!=0) ? 'Joya de Sachas:'.$ult_fecha->joya_sachas.'<br>' : '';
        $c_orellana .= ($ult_fecha->loreto!=0) ? 'Loreto:'.$ult_fecha->loreto.'<br>' : '';
        $c_orellana .= ($ult_fecha->orellana!=0) ? 'Orellana:'.$ult_fecha->orellana.'<br>' : '';

        $c_napo = '';     
        $c_napo .= ($ult_fecha->archidona!=0) ? 'Archídona:'.$ult_fecha->archidona.'<br>' : '';  
        $c_napo .= ($ult_fecha->carlos_julio!=0) ? 'Carlos Julio:'.$ult_fecha->carlos_julio.'<br>' : ''; 
        $c_napo .= ($ult_fecha->el_chaco!=0) ? 'El Chaco:'.$ult_fecha->el_chaco.'<br>' : ''; 
        $c_napo .= ($ult_fecha->quijos!=0) ? 'Quijos:'.$ult_fecha->quijos.'<br>' : ''; 
        $c_napo .= ($ult_fecha->tena!=0) ? 'Tena:'.$ult_fecha->tena.'<br>' : ''; 

        $c_galapagos = '';     
        $c_galapagos .= ($ult_fecha->isabela!=0) ? 'Isabela:'.$ult_fecha->isabela.'<br>' : '';  
        $c_galapagos .= ($ult_fecha->san_cristobal!=0) ? 'San Cristobal:'.$ult_fecha->san_cristobal.'<br>' : '';  
        $c_galapagos .= ($ult_fecha->santa_cruz!=0) ? 'Santa Cruz:'.$ult_fecha->santa_cruz.'<br>' : '';  

        
        $provincias['guayas'] = $c_guayas;
        $provincias['esmeraldas'] = $c_esmeraldas;
        $provincias['carchi'] = $c_carchi;
        $provincias['imbabura'] = $c_imbabura;
        $provincias['sucumbios'] = $c_sucumbios;
        $provincias['santa_elena'] = $c_santa_elena;
        $provincias['santo_domingo'] = $c_santo_domingo;
        $provincias['azuay'] = $c_azuay;
        $provincias['el_oro'] = $c_el_oro;
        $provincias['loja'] = $c_loja;
        $provincias['zamora'] = $c_zamora;
        $provincias['canar'] = $c_canar;
        $provincias['bolivar'] = $c_bolivar;
        $provincias['cotopaxi'] = $c_cotopaxi;
        $provincias['los_rios'] = $c_los_rios;
        $provincias['manabi'] = $c_manabi;
        $provincias['chimborazo'] = $c_chimborazo;
        $provincias['morona'] = $c_morona;
        $provincias['pichincha'] = $c_pichincha;
        $provincias['pastaza'] = $c_pastaza;
        $provincias['tungurahua'] = $c_tungurahua;
        $provincias['orellana'] = $c_orellana;
        $provincias['napo'] = $c_napo;
        $provincias['galapagos'] = $c_galapagos;

        $provincias = Collection::make($provincias);

        return $provincias;
    }

}