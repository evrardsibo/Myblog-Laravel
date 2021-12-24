<?php 
 
 namespace App\Manager;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserManager
    {
        public function uploadAvatar($data)
        {
            //recuperer l'image a partir de son $url file det contents function php
            $content = file_get_contents($data->avatar);
            // generer le nom de l'image et definir son chemin
            $path = 'users/' . $data->id . '_' . Str::random(10) . '.jpg';
            //dd($path);
            //stocker i'image 

            Storage::disk('public')->put($path , $content);
            // retourner le chemin

            return $path;
        }
    }

?>    