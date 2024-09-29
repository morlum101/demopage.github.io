<?php

namespace Database\Seeders;

use App\Models\Barangay;
use App\Models\Role;
use App\Models\User;
use App\Services\ActivityLogsService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ActivityLogsService $service)
    {
        $total_barangays = Barangay::count();

        $users = array(
            // generate sample admin
             [
                'id' => 1,
                'first_name' => 'Las Flores',
                'middle_name' => '',
                'last_name' => 'Flower Shop',
                'gender' => 'male',
                'birth_date' => '1998/01/01',
                'address' => 'Sample Address',
                'barangay_id' => mt_rand(1, $total_barangays),
                'contact' => '09659312005',
                'email' => 'admin@gmail.com', 
                'password' => Hash::make('test1234'),
                'email_verified_at' => now(),
                'is_activated' => true, 
                'role_id' => Role::ADMIN,
                'created_at' => now()
             ],
 
           // generate sample customer
            [
                'id' => 2,
                'first_name' => 'Dummy',
                'middle_name' => 'D',
                'last_name' => 'Dummy',
                'gender' => 'male',
                'birth_date' => '1998/01/01',
                'address' => 'Sample Address',
                'barangay_id' => mt_rand(1, $total_barangays),
                'contact' => '09659312005',
                'email' => 'dummy@gmail.com', 
                'password' => Hash::make('test1234'),
                'email_verified_at' => now(),
                'is_activated' => true, 
                'role_id' => Role::CUSTOMER,
                'created_at' => now()
            ],
            [
                'id' => 3,
                'first_name' => 'Raden',
                'middle_name' => 'R',
                'last_name' => 'Arellano',
                'gender' => 'male',
                'birth_date' => '2001/01/01',
                'address' => 'Sample Address',
                'barangay_id' => mt_rand(1, $total_barangays),
                'contact' => '09654654944',
                'email' => 'Radenarellano28@gmail.com', 
                'password' => Hash::make('test1234'),
                'email_verified_at' => now(),
                'is_activated' => true, 
                'role_id' => Role::CUSTOMER,
                'created_at' => now()
            ],
            [
                'id' => 4,
                'first_name' => 'Earl John',
                'middle_name' => 'A',
                'last_name' => 'Agarao',
                'gender' => 'male',
                'birth_date' => '2001/01/01',
                'address' => 'Sample Address',
                'barangay_id' => mt_rand(1, $total_barangays),
                'contact' => '09277316570',
                'email' => 'Ej1206a@gmail.com', 
                'password' => Hash::make('test1234'),
                'email_verified_at' => now(),
                'is_activated' => true, 
                'role_id' => Role::CUSTOMER,
                'created_at' => now()
            ],
            [
                'id' => 5,
                'first_name' => 'Jaymuel Ian',
                'middle_name' => 'C',
                'last_name' => 'Cabaysa',
                'gender' => 'male',
                'birth_date' => '2001/01/01',
                'address' => 'Sample Address',
                'barangay_id' => mt_rand(1, $total_barangays),
                'contact' => '09475453367',
                'email' => 'Jm.cabaysa@gmail.com', 
                'password' => Hash::make('test1234'),
                'email_verified_at' => now(),
                'is_activated' => true, 
                'role_id' => Role::CUSTOMER,
                'created_at' => now()
            ],
        );
        
        User::insert($users);

        User::all()->each(function($user) use($service){
            $user
            ->addMedia(public_path("/tmp_files/avatars/$user->id.png"))
            ->preservingOriginal()
            ->toMediaCollection('avatar_image');

            $service->log_activity(model:User::find(1), event:'added', model_name: 'User', model_property_name: $user->name ?? 'Administrator');
        });
    }
}