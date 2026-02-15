<?php
use App\Models\User;
use Illuminate\Support\Facades\Hash;

require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$user = User::where('email', 'admin@sembako.com')->first();
if (!$user) {
    $user = new User();
    $user->name = 'Admin';
    $user->email = 'admin@sembako.com';
    $user->password = Hash::make('password');
    $user->save();
    echo "User created successfully.\n";
} else {
    echo "User already exists.\n";
}
