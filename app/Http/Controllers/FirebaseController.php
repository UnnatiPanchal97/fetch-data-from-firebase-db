<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
class FirebaseController extends Controller
{
    public function index(){
        $firebase=(new Factory)->withServiceAccount(__DIR__.'/laravel-firebase-demo-9bf26-firebase-adminsdk-7fsgl-f7afd37570.json')->withDatabaseUri('https://laravel-firebase-demo-9bf26-default-rtdb.firebaseio.com');
        $database=$firebase->createDatabase();
        $blog=$database->getReference('blog');
        echo '<pre>';
        print_r($blog->getValue());
        echo '</pre>';
    }
}
