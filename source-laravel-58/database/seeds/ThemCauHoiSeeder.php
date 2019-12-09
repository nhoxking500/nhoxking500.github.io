<?php
use Illuminate\Database\Seeder;

use App\CauHoi;
class ThemCauHoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('cau_hoi')->insert([
        	['noi_dung'=>'Lã Thanh Huyền đã tham gia bộ phim nào sau đây?',
        	'linh_vuc_id'=>1,
        	'phuong_an_a'=>'Nhà có nhiều cửa sổ',
        	'phuong_an_b'=>'Đẹp từng centimet',
        	'phuong_an_c'=>'Blog nàng dâu',
        	'phuong_an_d'=>'Ngôi nhà hạnh phúc',
        	'dap_an'=>'A']
        ]);
         DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Tác phẩm điện ảnh "Thập diện mai phục" là của đạo diễn nào?',
            'linh_vuc_id'=>1,
            'phuong_an_a'=>'Lý An',
            'phuong_an_b'=>'Dương Khiết',
            'phuong_an_c'=>'Trương Nghệ Mưu',
            'phuong_an_d'=>'Ngô Vũ Sâm ',
            'dap_an'=>'C']
        ]);
         DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Nam ca sĩ nào đạt giải thưởng Ca sĩ của năm tại Lễ trao giải Làn Sóng Xanh 2010?',
            'linh_vuc_id'=>1,
            'phuong_an_a'=>'Đàm Vĩnh Hưng',
            'phuong_an_b'=>'Lam Trường',
            'phuong_an_c'=>'Đan Trường',
            'phuong_an_d'=>'Minh Quân',
            'dap_an'=>'D']
        ]);
        



         DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Giải Grand Slam đầu tiên trong năm là giải nào?',
            'linh_vuc_id'=>2,
            'phuong_an_a'=>'Austrlia mở rộng',
            'phuong_an_b'=>'Wimbledon',
            'phuong_an_c'=>'Roland Garos',
            'phuong_an_d'=>'Mỹ mở rộng',
            'dap_an'=>'A']
        ]);

         DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Cùng với Hà Nội T&T (vô địch V-League 2010), CLB nào của Việt Nam tham dự AFC Cup 2011?',
            'linh_vuc_id'=>2,
            'phuong_an_a'=>'Sông Lam Nghệ An',
            'phuong_an_b'=>'SHB Đà Nẵng',
            'phuong_an_c'=>'Hoàng Anh Gia Lai',
            'phuong_an_d'=>'Becamex Bình Dương',
            'dap_an'=>'A']
        ]);
         DB::table('cau_hoi')->insert([
            ['noi_dung'=>'AFC Asian Cup 2011 được tổ chức tại quốc gia nào?',
            'linh_vuc_id'=>2,
            'phuong_an_a'=>'Qatar',
            'phuong_an_b'=>'Hàn Quốc',
            'phuong_an_c'=>'Nhật Bản',
            'phuong_an_d'=>'Iraq',
            'dap_an'=>'B']
        ]);
         DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Đội nào lên ngôi vô địch AFC Asian Cup 2011 tổ chức tại Qatar?',
            'linh_vuc_id'=>2,
            'phuong_an_a'=>'Nhật Bản',
            'phuong_an_b'=>'Australia',
            'phuong_an_c'=>'Hàn Quốc',
            'phuong_an_d'=>'Uzbekistan',
            'dap_an'=>'D']
        ]);
         DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Việt Nam lần đầu tiên vô địch AFF Cup là vào năm nào?',
            'linh_vuc_id'=>2,
            'phuong_an_a'=>'2004',
            'phuong_an_b'=>'2006',
            'phuong_an_c'=>'2008',
            'phuong_an_d'=>'2010',
            'dap_an'=>'A']
        ]);



         DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Đại Ngu là quốc hiệu của triều đại nào?',
            'linh_vuc_id'=>3,
            'phuong_an_a'=>'Triều Ngô',
            'phuong_an_b'=>'Triều Hồ',
            'phuong_an_c'=>'Các chúa Nguyễn',
            'phuong_an_d'=>'Nhà Tây Sơn',
            'dap_an'=>'C']
        ]);
         DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Các vua Hùng đặt quốc hiệu nước ta là gì?',
            'linh_vuc_id'=>3,
            'phuong_an_a'=>'Văn Lang',
            'phuong_an_b'=>'Âu Lạc',
            'phuong_an_c'=>'Vạn Xuân',
            'phuong_an_d'=>'Đại Việt',
            'dap_an'=>'A']
        ]);
         DB::table('cau_hoi')->insert([
            ['noi_dung'=>'An Dương Vương đặt quốc hiệu nước ta là gì?',
            'linh_vuc_id'=>3,
            'phuong_an_a'=>'Âu Lạc',
            'phuong_an_b'=>'Vạn Xuân',
            'phuong_an_c'=>'Đại Cồ Việt',
            'phuong_an_d'=>'Đại Việt',
            'dap_an'=>'A']
        ]);
         DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Thành cổ Sơn Tây do vị vua nào xây dựng nên vào năm 1822?',
            'linh_vuc_id'=>3,
            'phuong_an_a'=>'Gia Long',
            'phuong_an_b'=>'Minh Mạng',
            'phuong_an_c'=>'Thiệu Trị',
            'phuong_an_d'=>'Tự Đức',
            'dap_an'=>'B']
        ]);
         DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Năm 1010, Lý Thái Tổ đã cho xây dựng điện nào ở trung tâm hoàng thành Thăng Long?',
            'linh_vuc_id'=>3,
            'phuong_an_a'=>'Điện Kính Thiên',
            'phuong_an_b'=>'Điện Càn Nguyên',
            'phuong_an_c'=>'Điện Càn Chánh',
            'phuong_an_d'=>'Điện Càn Thành',
            'dap_an'=>'C']
        ]);



          DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Sông Bến Hải và sông Thạch Hãn nằm ở tỉnh nào?',
            'linh_vuc_id'=>4,
            'phuong_an_a'=>'Quảng Bình',
            'phuong_an_b'=>'Quảng Ninh',
            'phuong_an_c'=>'Quảng Trị',
            'phuong_an_d'=>'Quảng Ngãi',
            'dap_an'=>'D']
        ]); DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Trong các cây cầu sau, cầu nào là cầu xoay?',
            'linh_vuc_id'=>4,
            'phuong_an_a'=>'Cầu Thanh Trì',
            'phuong_an_b'=>'Cầu Thị Nại',
            'phuong_an_c'=>'Cầu Sông Hàn',
            'phuong_an_d'=>'Cầu Cần Thơ',
            'dap_an'=>'D']
        ]); DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Bùi Hữu Nghĩa, một trong bốn rồng vàng của vùng Đồng Nai xưa (tức là toàn Nam Bộ ngày nay) là tài năng ở lĩnh vực nào?',
            'linh_vuc_id'=>4,
            'phuong_an_a'=>'Hoa',
            'phuong_an_b'=>'Phú',
            'phuong_an_c'=>'Đàn',
            'phuong_an_d'=>'Thị',
            'dap_an'=>'C']
        ]); DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Nước nào ở khu vực Đông Nam Á không có địa giới với bất kỳ nước khác?',
            'linh_vuc_id'=>4,
            'phuong_an_a'=>'Philippines',
            'phuong_an_b'=>'Malaysia',
            'phuong_an_c'=>'Lào',
            'phuong_an_d'=>'Thái Lan',
            'dap_an'=>'C']
        ]); DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Thung lũng nổi tiếng ở Mỹ với ngành công nghệ thông tin được đặt tên theo nguyên tố nào?',
            'linh_vuc_id'=>4,
            'phuong_an_a'=>'Sắt',
            'phuong_an_b'=>'Asen',
            'phuong_an_c'=>'Silic',
            'phuong_an_d'=>'Uran',
            'dap_an'=>'C']
        ]); 




        DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Điêu tàn" là tập thơ đầu tiên của nhà thơ nào',
            'linh_vuc_id'=>5,
            'phuong_an_a'=>'Anh Thơ',
            'phuong_an_b'=>'Thế Lữ',
            'phuong_an_c'=>'Bích Khê',
            'phuong_an_d'=>'Chế Lan Viên',
            'dap_an'=>'D']
        ]);
         DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Điền từ còn thiếu trong câu thành ngữ:’”…. Không cứu được …gần”.',
            'linh_vuc_id'=>5,
            'phuong_an_a'=>'Lính-Tướng',
            'phuong_an_b'=>'Chồng-Vợ',
            'phuong_an_c'=>'Nước-Lửa',
            'phuong_an_d'=>'Chó-Mèo',
            'dap_an'=>'B']
        ]);
          DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Truyện “Vợ chồng A Phủ” trong tập truyện Tây Bắc của nhà văn Tô Hoài viết về người dân tộc nào?',
            'linh_vuc_id'=>5,
            'phuong_an_a'=>'Vân Kiều',
            'phuong_an_b'=>'Thái',
            'phuong_an_c'=>'H’Mông',
            'phuong_an_d'=>'Tày',
            'dap_an'=>'B']
        ]);
           DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Tác phẩm "Thuỷ hử" của Thi Nại Am diễn ra vào triều đại nào của Trung Quốc?',
            'linh_vuc_id'=>5,
            'phuong_an_a'=>'Triều Tống',
            'phuong_an_b'=>'Triều Nguyên',
            'phuong_an_c'=>'Triều Minh',
            'phuong_an_d'=>'Triều Thanh',
            'dap_an'=>'C']
        ]);
            DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Truyền kỳ mạn lục, một tác phẩm được đánh giá là " thiên cổ kỳ bút", là "áng văn hay của bậc đại gia", là sáng tác của ai?',
            'linh_vuc_id'=>5,
            'phuong_an_a'=>'Nguyễn Trãi',
            'phuong_an_b'=>'Nguyễn Bỉnh Khiêm',
            'phuong_an_c'=>'Nguyễn Dữ',
            'phuong_an_d'=>'Nguyễn Du',
            'dap_an'=>'A']
        ]);




             DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Vai trò chính của vitamin nào là giúp cho quá trình đông máu diễn ra tốt và hạn chế lượng máu bị mất khi bị thương?',
            'linh_vuc_id'=>6,
            'phuong_an_a'=>'Vitamin A',
            'phuong_an_b'=>'Vitamin D',
            'phuong_an_c'=>'Vitamin E',
            'phuong_an_d'=>'Vitamin K',
            'dap_an'=>'B']
        ]);
             DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Cúm và sởi là những bệnh lây truyền qua đường nào?',
            'linh_vuc_id'=>6,
            'phuong_an_a'=>'Tiêu hoá',
            'phuong_an_b'=>'Hô hấp',
            'phuong_an_c'=>'Sinh dục',
            'phuong_an_d'=>'Máu',
            'dap_an'=>'D']
        ]);
             DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Virus sởi lây truyền qua đường nào?',
            'linh_vuc_id'=>6,
            'phuong_an_a'=>'Tiêu hoá',
            'phuong_an_b'=>'Hô hấp',
            'phuong_an_c'=>'Máu',
            'phuong_an_d'=>'Sinh dục',
            'dap_an'=>'D']
        ]);
             DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Phổi, họng, thanh quản, khí quản, phế quản, phổi là những cơ quan thuộc hệ cơ quan nào trong cơ thể người?',
            'linh_vuc_id'=>6,
            'phuong_an_a'=>'Hệ tuần hoàn',
            'phuong_an_b'=>'Hệ sinh dục',
            'phuong_an_c'=>'Hệ hô hấp',
            'phuong_an_d'=>'Hệ thần kinh',
            'dap_an'=>'B']
        ]);
             DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Loại vitamin nào mà cơ thể con người có thể tự tổng hợp được nhờ ánh sáng Mặt Trời?',
            'linh_vuc_id'=>6,
            'phuong_an_a'=>'Vitamin A',
            'phuong_an_b'=>'Vitamin D',
            'phuong_an_c'=>'Vitamin E',
            'phuong_an_d'=>'Vitamin K',
            'dap_an'=>'A']
        ]);
             DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Sự kiện giờ Trái Đất, sáng kiến của WWF được tổ chức lần đầu tiên vào năm 2007 tại thành phố nào?',
            'linh_vuc_id'=>7,
            'phuong_an_a'=>'Sydney',
            'phuong_an_b'=>'Tokyo',
            'phuong_an_c'=>'Bắc Kinh',
            'phuong_an_d'=>'Singapore',
            'dap_an'=>'B']
        ]);
             DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Phú Yên-tỉnh đăng cai Năm du lịch quốc gia 2011 ở khu vực nào?',
            'linh_vuc_id'=>7,
            'phuong_an_a'=>'Nam Trung Bộ',
            'phuong_an_b'=>'Tây Nguyên',
            'phuong_an_c'=>'Đông Bắc Bộ',
            'phuong_an_d'=>'Tây Nam Bộ',
            'dap_an'=>'B']
        ]);
             DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Lễ Hội Gióng chính thức được nhận bằng Di sản văn hoá thế giới vào năm nào?',
            'linh_vuc_id'=>7,
            'phuong_an_a'=>'2008',
            'phuong_an_b'=>'2009',
            'phuong_an_c'=>'2010',
            'phuong_an_d'=>'2011',
            'dap_an'=>'C']
        ]);
             DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Việt Nam đã đăng cai cuộc thi sắc đẹp nào trong năm 2010?',
            'linh_vuc_id'=>7,
            'phuong_an_a'=>'Hoa hậu thế giới',
            'phuong_an_b'=>'Hoa hậu Trái Đất',
            'phuong_an_c'=>'Hoa hậu hoàn vũ',
            'phuong_an_d'=>'Hoa hậu quốc tế',
            'dap_an'=>'C']
        ]);
             DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Loài hoa nào được chọn là Quốc hoa của Việt Nam?',
            'linh_vuc_id'=>7,
            'phuong_an_a'=>'Hoa sen',
            'phuong_an_b'=>'Hoa mai',
            'phuong_an_c'=>'Hoa đào',
            'phuong_an_d'=>'Hoa hồng',
            'dap_an'=>'C']
        ]);


             DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Trong các hàm số lượng giác cơ bản, hàm số nào là hàm số chẵn?',
            'linh_vuc_id'=>8,
            'phuong_an_a'=>'y=sinx',
            'phuong_an_b'=>'y=cosx',
            'phuong_an_c'=>'y-cotgx',
            'phuong_an_d'=>'y=tgx',
            'dap_an'=>'A']
        ]);

             DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Tập hợp các số thực được ký hiệu bằng chữ cái nào?',
            'linh_vuc_id'=>8,
            'phuong_an_a'=>'N (Số tự nhiên)',
            'phuong_an_b'=>'Z (Số nguyên)',
            'phuong_an_c'=>'Q (Số hữu tỷ)',
            'phuong_an_d'=>'R (Số thực)',
            'dap_an'=>'A']
        ]);
             DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Khí nào chiếm 80% thành phần không khí?',
            'linh_vuc_id'=>8,
            'phuong_an_a'=>'N2',
            'phuong_an_b'=>'O2',
            'phuong_an_c'=>'H2',
            'phuong_an_d'=>'Cl2',
            'dap_an'=>'D']
        ]);
             DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Vận tốc của sóng âm truyền trong môi trường nào lớn nhất?',
            'linh_vuc_id'=>8,
            'phuong_an_a'=>'Chân không',
            'phuong_an_b'=>'Chất khí',
            'phuong_an_c'=>'Chất rắn',
            'phuong_an_d'=>'Chất lỏng',
            'dap_an'=>'A']
        ]);
             DB::table('cau_hoi')->insert([
            ['noi_dung'=>'Côn trùng (sâu bọ) là lớp động vật thuộc ngành động vật nào?',
            'linh_vuc_id'=>8,
            'phuong_an_a'=>'Động vật nguyên sinh',
            'phuong_an_b'=>'Ruột khoang',
            'phuong_an_c'=>'Thân mềm',
            'phuong_an_d'=>'Chân khớp',
            'dap_an'=>'D']
        ]);
             



    }
}
