<?php

namespace Database\Seeders;

use App\Models\QuanAn;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class QuanAnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quan_ans')->delete();

        DB::table('quan_ans')->truncate();

        DB::table('quan_ans')->insert([
            [
                'id' => 1,
                'email' => 'bunmamvan@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400101234',
                'ten_quan_an' => 'Bún Mắm Vân',
                'gio_mo_cua' => '06:30:00',
                'gio_dong_cua' => '21:00:00',
                'dia_chi' => '23/14 Trần Kế Xương, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.067819,
                'toa_do_y' => 108.220950,
                'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134513-7r98o-lsv1zy4w20t5a5@resize_ss1242x600!@crop_w1242_h600_cT',
                'so_dien_thoai' => '0905123456',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 2,
                'email' => 'haisancuabien1@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400527891',
                'ten_quan_an' => 'Hải Sản Cua Biển 1',
                'gio_mo_cua' => '10:00:00',
                'gio_dong_cua' => '23:00:00',
                'dia_chi' => '112 Võ Nguyên Giáp, Phường Phước Mỹ, Quận Sơn Trà, Đà Nẵng',
                'id_quan_huyen' => 50,
                'toa_do_x' => 16.059620,
                'toa_do_y' => 108.249770,
                'hinh_anh' => 'https://vn1.vdrive.vn/haisancuabien.com/2022/02/nha-ha-ng-chuye-n-cung-ca-p-ha-i-sa-n-tu-o-i-ngon-ta-i-nam-di-nh-go-i-09873161024-56492.jpeg',
                'so_dien_thoai' => '0905234567',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 3,
                'email' => 'miquang1a@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400651234',
                'ten_quan_an' => 'Mì Quảng 1A',
                'gio_mo_cua' => '07:00:00',
                'gio_dong_cua' => '20:30:00',
                'dia_chi' => '1 Hải Phòng, Phường Thạch Thang, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.074230,
                'toa_do_y' => 108.220280,
                'hinh_anh' => 'https://cdn.khamphadanang.vn/wp-content/uploads/2024/02/mi-quang-1a-hai-phong-3.jpg?strip=all&lossy=1&ssl=1',
                'so_dien_thoai' => '0905345678',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 4,
                'email' => 'bunbaan@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400789123',
                'ten_quan_an' => 'Bún Bà Ân',
                'gio_mo_cua' => '06:00:00',
                'gio_dong_cua' => '21:00:00',
                'dia_chi' => '295 Hùng Vương, Phường Vĩnh Trung, Quận Thanh Khê, Đà Nẵng',
                'id_quan_huyen' => 48,
                'toa_do_x' => 16.070480,
                'toa_do_y' => 108.210820,
                'hinh_anh' => 'https://gcs.tripi.vn/public-tripi/tripi-feed/img/473740EHp/quan-bun-cha-ca-ngon-nhat-da-nang-898985.jpg',
                'so_dien_thoai' => '0905456789',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 5,
                'email' => 'bunchacahon@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400987123',
                'ten_quan_an' => 'Bún chả cá Hờn',
                'gio_mo_cua' => '07:00:00',
                'gio_dong_cua' => '21:30:00',
                'dia_chi' => '113/3 Nguyễn Chí Thanh, Phường Hải Châu 1, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.073500,
                'toa_do_y' => 108.220700,
                'hinh_anh' => 'https://storage.googleapis.com/unifa-travel/2025/02/Bun-cha-ca-Da-Nang.jpg',
                'so_dien_thoai' => '0905567890',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 6,
                'email' => 'banhxeonamhien@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400112233',
                'ten_quan_an' => 'Bánh xèo tôm nhảy Năm Hiền',
                'gio_mo_cua' => '10:00:00',
                'gio_dong_cua' => '22:00:00',
                'dia_chi' => '46 Phan Thanh, Quận Thanh Khê, Đà Nẵng',
                'id_quan_huyen' => 48,
                'toa_do_x' => 16.065500,
                'toa_do_y' => 108.206800,
                'hinh_anh' => 'https://vivuvietnam.org/wp-content/uploads/2024/05/banh-xeo-tom-nhay-nam-hien-da-nang.jpg',
                'so_dien_thoai' => '0905678901',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 7,
                'email' => 'bunthitnuongcosau@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400223344',
                'ten_quan_an' => 'Bún thịt nướng Cô Sáu',
                'gio_mo_cua' => '07:00:00',
                'gio_dong_cua' => '21:00:00',
                'dia_chi' => '469 Hoàng Diệu, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.059900,
                'toa_do_y' => 108.209400,
                'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134513-7r98o-lsv3v18xtxok69@resize_ss1242x600!@crop_w1242_h600_cT',
                'so_dien_thoai' => '0905789012',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 8,
                'email' => 'ochutcaybang@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400334455',
                'ten_quan_an' => 'Ốc hút Cây Bàng',
                'gio_mo_cua' => '16:00:00',
                'gio_dong_cua' => '23:00:00',
                'dia_chi' => '59 Ông Ích Khiêm, Quận Thanh Khê, Đà Nẵng',
                'id_quan_huyen' => 48,
                'toa_do_x' => 16.069800,
                'toa_do_y' => 108.209000,
                'hinh_anh' => 'https://static.vinwonders.com/production/oc-da-nang-0_optimized.jpg',
                'so_dien_thoai' => '0905890123',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 9,
                'email' => 'banhdappct@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400445566',
                'ten_quan_an' => 'Bánh đập Phan Châu Trinh',
                'gio_mo_cua' => '07:00:00',
                'gio_dong_cua' => '20:00:00',
                'dia_chi' => '251 Phan Châu Trinh, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.059000,
                'toa_do_y' => 108.217500,
                'hinh_anh' => 'https://explore.danangairportterminal.vn/vn/wp-content/uploads/2023/07/image1-min.jpg',
                'so_dien_thoai' => '0906901234',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 10,
                'email' => 'banhcanhbathu@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400556677',
                'ten_quan_an' => 'Bánh canh Bà Thu',
                'gio_mo_cua' => '06:30:00',
                'gio_dong_cua' => '20:00:00',
                'dia_chi' => '22 Nguyễn Chí Thanh, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.073600,
                'toa_do_y' => 108.220900,
                'hinh_anh' => 'https://cdn.hanamihotel.com/wp-content/uploads/2023/07/file_restaurant_photo_kfvg_16349-03df792e-211023070127-1024x495.webp?strip=all&lossy=1&ssl=1',
                'so_dien_thoai' => '0907012345',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 11,
                'email' => 'quantran@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400667788',
                'ten_quan_an' => 'Quán Trần',
                'gio_mo_cua' => '09:00:00',
                'gio_dong_cua' => '21:00:00',
                'dia_chi' => '4 Lê Duẩn, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.075400,
                'toa_do_y' => 108.221300,
                'hinh_anh' => 'https://mia.vn/media/uploads/blog-du-lich/am-thuc-tran-da-nang-dam-da-huong-vi-xu-quang-03-1636209837.jpeg',
                'so_dien_thoai' => '0907123456',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 12,
                'email' => 'miquangechbeptrang@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400778899',
                'ten_quan_an' => 'Mì Quảng Ếch Bếp Trang',
                'gio_mo_cua' => '08:00:00',
                'gio_dong_cua' => '21:30:00',
                'dia_chi' => '441 Ông Ích Khiêm, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.068500,
                'toa_do_y' => 108.209800,
                'hinh_anh' => 'https://cdn.khamphadanang.vn/wp-content/uploads/2024/01/mi-quang-ech-bep-trang-2.jpg?strip=all&lossy=1&ssl=1',
                'so_dien_thoai' => '0907234567',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 13,
                'email' => 'bethuicaumongro@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400889900',
                'ten_quan_an' => 'Bê thui Cầu Mống Rô',
                'gio_mo_cua' => '10:00:00',
                'gio_dong_cua' => '22:00:00',
                'dia_chi' => '8 Bắc Sơn, Quận Cẩm Lệ, Đà Nẵng',
                'id_quan_huyen' => 47,
                'toa_do_x' => 16.043200,
                'toa_do_y' => 108.187500,
                'hinh_anh' => 'https://statics.vinpearl.com/be-thui-cau-mong-thumbnail_1634017352.jpg',
                'so_dien_thoai' => '0907345678',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 14,
                'email' => 'banhcuontienhung@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400990011',
                'ten_quan_an' => 'Bánh cuốn Tiến Hưng',
                'gio_mo_cua' => '06:30:00',
                'gio_dong_cua' => '20:00:00',
                'dia_chi' => '190 Trần Phú, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.067300,
                'toa_do_y' => 108.220100,
                'hinh_anh' => 'https://danangbest.com/upload_content/banh-cuon.webp',
                'so_dien_thoai' => '0907456789',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 15,
                'email' => 'quanbabe@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400011223',
                'ten_quan_an' => 'Quán Bà Bé',
                'gio_mo_cua' => '07:00:00',
                'gio_dong_cua' => '21:00:00',
                'dia_chi' => '100 Hoàng Văn Thụ, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.069500,
                'toa_do_y' => 108.220300,
                'hinh_anh' => 'https://hoangviettravel.vn/wp-content/uploads/2020/04/banh-beo-ba-be-da-nang-1-1.jpg',
                'so_dien_thoai' => '0907567890',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 16,
                'email' => 'banhtrangcuonthitheobahuong@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400022334',
                'ten_quan_an' => 'Bánh tráng cuốn thịt heo Bà Hường',
                'gio_mo_cua' => '09:00:00',
                'gio_dong_cua' => '21:00:00',
                'dia_chi' => '126 Duy Tân, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.059700,
                'toa_do_y' => 108.218200,
                'hinh_anh' => 'https://cdn.hanamihotel.com/wp-content/uploads/2022/12/Banh-trang-cuon-thit-heo-Da-Nang.jpg?strip=all&lossy=1&ssl=1',
                'so_dien_thoai' => '0907678901',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 17,
                'email' => 'bunmamngoc@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400033445',
                'ten_quan_an' => 'Bún Mắm Ngọc',
                'gio_mo_cua' => '06:00:00',
                'gio_dong_cua' => '20:30:00',
                'dia_chi' => '20 Đoàn Thị Điểm, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.072600,
                'toa_do_y' => 108.222100,
                'hinh_anh' => 'https://mia.vn/media/uploads/blog-du-lich/dam-chim-trong-khong-gian-am-thuc-voi-bun-mam-ngoc-da-nang-05-1637453788.jpeg',
                'so_dien_thoai' => '0907789012',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 18,
                'email' => 'bunthitnuongbatrai@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400044556',
                'ten_quan_an' => 'Bún thịt nướng Bà Trai',
                'gio_mo_cua' => '06:30:00',
                'gio_dong_cua' => '20:00:00',
                'dia_chi' => '179 Nguyễn Văn Linh, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.061800,
                'toa_do_y' => 108.218700,
                'hinh_anh' => 'https://cdn.justfly.vn/1200x800/media/202303/14/1678765613-quan-bun-thit-nuong-ba-trai-da-nang-2.jpg',
                'so_dien_thoai' => '0907890123',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 19,
                'email' => 'miquangthi@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400055667',
                'ten_quan_an' => 'Mì Quảng Thi',
                'gio_mo_cua' => '07:00:00',
                'gio_dong_cua' => '21:00:00',
                'dia_chi' => '66 Lê Lợi, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.072200,
                'toa_do_y' => 108.218400,
                'hinh_anh' => 'https://nld.mediacdn.vn/291774122806476800/2024/8/12/quan-my-quang-da-nang-17234413849951823742675.jpg',
                'so_dien_thoai' => '0907901234',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ],
            [
                'id' => 20,
                'email' => 'banhmibalan@gmail.com',
                'password' => '123456',
                'ma_so_thue' => '0400066778',
                'ten_quan_an' => 'Bánh mì Bà Lan',
                'gio_mo_cua' => '05:30:00',
                'gio_dong_cua' => '21:30:00',
                'dia_chi' => '85 Nguyễn Văn Linh, Quận Hải Châu, Đà Nẵng',
                'id_quan_huyen' => 49,
                'toa_do_x' => 16.063700,
                'toa_do_y' => 108.214900,
                'hinh_anh' => 'https://mms.img.susercontent.com/vn-11134513-7r98o-lsvfuets68jo7a@resize_ss1242x600!@crop_w1242_h600_cT',
                'so_dien_thoai' => '0908012345',
                'tong_tien' => 0,
                'tinh_trang' => 1,
                'is_active' => 1
            ]

        ]);
    }
}
