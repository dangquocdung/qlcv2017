<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(QuyenHanTableSeeder::class);
    }


}

class QuyenHanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('quyenhan')->delete();
      DB::table('quyenhan')->insert([
          ['quyenhan' => 'Khách','ghichu' => '#'],
          ['quyenhan' => 'Chuyên Viên','ghichu' => 'chuyen-vien'],
          ['quyenhan' => 'Trưởng Phòng','ghichu' => 'truong-phong'],
          ['quyenhan' => 'Văn Thư','ghichu' => 'van-thu'],
          ['quyenhan' => 'Lãnh Đạo','ghichu' => 'lanh-dao'],
          ['quyenhan' => 'Quản trị','ghichu' => 'quantri']
      ]);
    }
}
