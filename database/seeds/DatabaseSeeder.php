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
          ['quyenhan' => '1','ghichu' => 'Khách'],
          ['quyenhan' => '3','ghichu' => 'Chuyên Viên'],
          ['quyenhan' => '5','ghichu' => 'Lãnh Đạo Phòng'],
          ['quyenhan' => '7','ghichu' => 'Văn Thư'],
          ['quyenhan' => '9','ghichu' => 'Lãnh Đạo Đơn vị'],
          ['quyenhan' => '15','ghichu' => 'Quản trị hệ thống']
      ]);
    }
}
