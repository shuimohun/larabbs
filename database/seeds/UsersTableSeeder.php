<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // 生成数据集合
        $users = factory(User::class)->times(10)->create();
        // 单独处理第一个用户的数据
        $user = User::find(1);
        $user->name = 'Shuimohun';
        $user->email = '8733517@qq.com';
        $user->avatar = 'https://cdn.learnku.com/uploads/images/201710/14/1/ZqM7iaP4CR.png';
        $user->password = Hash::make('admin123');
        $user->assignRole('Founder');
        $user->save();

        // 将 2 号用户指派为『管理员』
        $user = User::find(2);
        $user->assignRole('Maintainer');
    }
}
