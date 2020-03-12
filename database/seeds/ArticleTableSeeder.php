<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data= [
            ['title'=>'Thông báo Quy định và Danh sách thi ME (online) ngày 11/3/2020',
            'content'=>'Dear các bạn sinh viên,
            Do tình hình phòng chống dịch Covid-19, Ban lãnh đạo Nhà trường quyết định triển khai thi trực tuyến (online) đối với kỳ thi giữa kỳ ME ngày 11/3/2020.
            Để đảm bảo tính bảo mật trong quá trinh thi, phòng TC&QLĐT thông báo đến các bạn sinh viên 1 số quy định về thi online như sau:
            1. Sinh viên phải có máy tính và internet để đảm bảo cho việc thi online. Mọi vấn đề về máy tính và internet sinh viên sẽ hoàn toàn chủ động chuẩn bị và chịu trách nhiệm.
            2. Sinh viên chuẩn bị CMND (hoặc Thẻ sinh viên) để GV yêu cầu xuất trình điểm danh việc thi online trên máy và tất cả sinh viên đều PHẢI BẬT webcam trong suốt quá trình thi.
            3. Sinh viên phải sử dụng đúng Username mà Khảo thí cung cấp để đăng nhập thi. Nếu nhập sai kết quả sẽ không được công nhận.
            4. Số lần đăng nhập thi cho 1 Usernam chỉ DUY NHẤT 1 lần cho 1 máy tính, 1 địa chỉ IP.
            5. Tất cả các level sẽ thi cùng 1 khung giờ từ 15h00-17h00 ngày 11/3/2020, sinh viên sẽ nhận được Danh sách phân phòng thi vào lúc 14h45 ngày 11/3.
            6. Sinh viên sẽ nhận được link thi vào lúc 15h00 cùng với passcode.
            7. Sinh viên phải submit bài trong thời gian quy định của bài thi, lưu ý là hệ thống KHÔNG TỰ ĐỘNG SAVE nên sinh viên phải tự chủ động submit bài đúng giờ.
            Do thời gian triển khai gấp rút, Nhà trường đề nghị sinh viên phối hợp trong quá trình thi online và thường xuyên check email để cập nhật được thông tin cho việc thi của mình.

            Mọi vấn đề thắc mắc hoặc cần hỗ trợ các bạn sinh viên liên hệ CB Khảo thí theo email: huongnt166@fe.edu.vn

            Trân trọng.'
        ]
        ];
        DB::table('article')->insert($data);
    }
}
