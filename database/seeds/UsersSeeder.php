<?php
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        for ($i=0; $i < 100; $i++) {
            \App\Models\Users::create([
                'name'   => 'morgan'.$i,
                'email'    => 'morgan'.$i.'@qq.com',
                'password' => '$2y$10$R4LwLv257yE7OD/7ndupxONLNofEKoXcTa5ZJbKi3FpYtsfFdtT0O',
                'remember_token'=>null
            ]);
        }
    }
}
