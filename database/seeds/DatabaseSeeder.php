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
        // $this->call(QuyenHanTableSeeder::class);
        $this->call(LoaiVBTableSeeder::class);

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

class LoaiVBTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('loaivb')->delete();
      DB::table('loaivb')->insert([
          ['loaivb' => 'Nghị quyết','ghichu' => changeTitle('Nghị quyết')],
          ['loaivb' => 'Quyết định QPPL','ghichu' => changeTitle('Quyết định QPPL')],
          ['loaivb' => 'Quyết định','ghichu' => changeTitle('Quyết định')],
          ['loaivb' => 'Chỉ thị','ghichu' => changeTitle('Chỉ thị')],
          ['loaivb' => 'Thông báo','ghichu' => changeTitle('Thông báo')],
          ['loaivb' => 'Báo cáo','ghichu' => changeTitle('Báo cáo')],
          ['loaivb' => 'Kế hoạch','ghichu' => changeTitle('Kế hoạch')],
          ['loaivb' => 'Công văn','ghichu' => changeTitle('Công văn')],
          ['loaivb' => 'Giấy mời','ghichu' => changeTitle('Giấy mời')],
          ['loaivb' => 'Giấy phép','ghichu' => changeTitle('Giấy phép')],
          ['loaivb' => 'Lịch công tác','ghichu' => changeTitle('Lịch công tác')]
      ]);
    }
}
