<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('khach_hangs')->delete();
        DB::table('khach_hangs')->truncate();
        DB::table('khach_hangs')->insert([
            [
                'id'            => 1,
                'ho_va_ten'     => 'Nguyễn Văn A',
                'so_dien_thoai' => '0123456789',
                'email'         => 'nguyenvana@gmail.com',
                'password'      => '123456',
                'cccd'          => '123456789012',
                'ngay_sinh'     => '2000-01-01',
                'avatar'        => "https://img.tripi.vn/cdn-cgi/image/width=700,height=700/https://gcs.tripi.vn/public-tripi/tripi-feed/img/482744KVW/anh-mo-ta.png",
                'hash_reset'    => null,
                'hash_active'   => null,
                'is_active'     => 1,
                'is_block'      => 0,
            ],
            [
                'id'            => 2,
                'ho_va_ten'     => 'Trần Hữu Hải',
                'so_dien_thoai' => '0123456789',
                'email'         => 'tranhuuhai231@gmail.com',
                'password'      => '123456',
                'cccd'          => '1593574562584',
                'ngay_sinh'     => '2003-07-28',
                'avatar'        => "https://i.pinimg.com/564x/94/9b/8d/949b8d8d9229693ba9d53b054b738e2a.jpg",
                'hash_reset'    => null,
                'hash_active'   => null,
                'is_active'     => 1,
                'is_block'      => 0,
            ],
            [
                'id'            => 3,
                'ho_va_ten'     => 'Hoàng Kim Anh',
                'so_dien_thoai' => '0123456789',
                'email'         => 'kimanh@gmail.com',
                'password'      => '123456',
                'cccd'          => '1593574562524',
                'ngay_sinh'     => '2003-07-28',
                'avatar'        => "https://i.pinimg.com/564x/94/9b/8d/949b8d8d9229693ba9d53b054b738e2a.jpg",
                'hash_reset'    => null,
                'hash_active'   => null,
                'is_active'     => 1,
                'is_block'      => 0,
            ],
             [
                'id'            => 4,
                'ho_va_ten'     => 'Nguyễn Văn Đồng',
                'so_dien_thoai' => '0123456789',
                'email'         => 'dong@gmail.com',
                'password'      => '123456',
                'cccd'          => '1593574562524',
                'ngay_sinh'     => '2003-07-28',
                'avatar'        => "https://i.pinimg.com/564x/94/9b/8d/949b8d8d9229693ba9d53b054b738e2a.jpg",
                'hash_reset'    => null,
                'hash_active'   => null,
                'is_active'     => 1,
                'is_block'      => 0,
            ],
        ]);
    }
}
