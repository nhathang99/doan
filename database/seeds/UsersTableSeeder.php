<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'=>1,
            'name' => 'moccat',
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('password'),
            // 'fullname'=>'Moc Cat',ư
            'brithdate'=>'1993-05-01',
            // 'address'=>'ben cau',
            'isAdmin'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
            // 'dob'=>now()
        ]);
        DB::table('users')->insert([
            'id'=>2,
            'name' => 'huycuong',
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('password'),
            // 'fullname'=>'Moc Cat',ư
            'brithdate'=>'1993-05-01',
            // 'address'=>'ben cau',
            'isAdmin'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
            // 'dob'=>now()
        ]);
        DB::table('users')->insert([
            'id'=>3,
            'name' => 'minhduc',
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('password'),
            // 'fullname'=>'Moc Cat',ư
            'brithdate'=>'1993-05-01',
            // 'address'=>'ben cau',
            'isAdmin'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
            // 'dob'=>now()
        ]);
        DB::table('users')->insert([
            'id'=>4,
            'name' => 'duchau',
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('password'),
            // 'fullname'=>'Moc Cat',ư
            'brithdate'=>'1993-05-01',
            // 'address'=>'ben cau',
            'isAdmin'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
            // 'dob'=>now()
        ]);
        DB::table('users')->insert([
            'id'=>5,
            'name' => 'asd',
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('password'),
            // 'fullname'=>'Moc Cat',ư
            'brithdate'=>'1993-05-01',
            // 'address'=>'ben cau',
            'isAdmin'=>0,
            'created_at'=>now(),
            'updated_at'=>now(),
            // 'dob'=>now()
        ]);
    }
}
