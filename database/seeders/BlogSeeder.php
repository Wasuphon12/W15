<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'title' => 'เริ่มต้นเรียนรู้ Laravel 11 สำหรับผู้เริ่มต้น',
                'content' => 'Laravel เป็น PHP Framework ที่ได้รับความนิยมอย่างมาก มีโครงสร้างแบบ MVC และฟีเจอร์ที่ช่วยให้การพัฒนาเว็บแอปพลิเคชันสะดวกรวดเร็วและเป็นระบบ',
                'status' => 1,
            ],
            [
                'title' => 'การใช้งาน Eloquent ORM จัดการฐานข้อมูลอย่างมีประสิทธิภาพ',
                'content' => 'Eloquent ORM ใน Laravel ช่วยให้การติดต่อฐานข้อมูลทำได้ผ่าน Object-Relational Mapping โดยไม่ต้องเขียนคำสั่ง SQL ดิบ ทำให้โค้ดสะอาดและอ่านง่ายขึ้น',
                'status' => 1,
            ],
            [
                'title' => 'เทคนิคการตกแต่งหน้าเว็บด้วย Bootstrap 5',
                'content' => 'Bootstrap 5 เป็น CSS Framework ที่ช่วยให้การจัดรูปแบบหน้าเว็บตอบสนองกับทุกขนาดหน้าจอ (Responsive) ด้วย Grid System และ Component สำเร็จรูปมากมาย',
                'status' => 1,
            ],
            [
                'title' => 'การทำระบบ Authentication ใน Laravel ด้วย Laravel UI',
                'content' => 'Laravel UI มีระบบ Login, Register และ Password Reset สำเร็จรูปที่ช่วยให้นักพัฒนาประหยัดเวลาในการสร้างระบบสมาชิกและความปลอดภัย',
                'status' => 1,
            ],
            [
                'title' => 'ความเข้าใจเรื่อง MVC Architecture ในการพัฒนาเว็บ',
                'content' => 'MVC ย่อมาจาก Model, View, Controller ซึ่งเป็นการแบ่งหน้าที่การทำงานของโค้ดให้เป็นสัดส่วน ดูแลรักษาและทดสอบได้ง่าย',
                'status' => 1,
            ],
            [
                'title' => 'การจัดการ Routing และ Controller ใน Laravel เบื้องต้น',
                'content' => 'Route ใน Laravel ทำหน้าที่เป็นเส้นทางในการรับส่ง Request ของผู้ใช้ไปยัง Controller เพื่อประมวลผลข้อมูลและส่งกลับไปยัง View',
                'status' => 1,
            ],
            [
                'title' => 'วิธีสร้างระบบ Pagination แบ่งหน้าข้อมูลแบบอัตโนมัติ',
                'content' => 'Laravel มีเมธอด paginate() ที่ทำให้การแบ่งหน้าข้อมูลในฐานข้อมูลเป็นเรื่องง่าย พร้อมทั้งสร้างลิงก์สำหรับคลิกเปลี่ยนหน้าได้ในคำสั่งเดียว',
                'status' => 1,
            ],
            [
                'title' => 'การตรวจสอบข้อมูลด้วย Request Validation ใน Laravel',
                'content' => 'การ Validate ข้อมูลที่ผู้ใช้ส่งมาจากฟอร์มเป็นสิ่งจำเป็น เพื่อป้องกันข้อมูลที่ไม่ถูกต้องหรือการโจมตีทางไซเบอร์',
                'status' => 0,
            ],
            [
                'title' => 'ทำความรู้จักกับ Blade Template Engine',
                'content' => 'Blade เป็น Template Engine ทรงพลังของ Laravel ที่ช่วยให้เราสืบทอด Layout และใช้คำสั่งเงื่อนไขหรือการวนลูปได้สะดวก',
                'status' => 1,
            ],
            [
                'title' => 'การใช้งาน Migration และ Seeder ในการจำลองข้อมูล',
                'content' => 'Migration ช่วยในการควบคุมเวอร์ชันของตารางฐานข้อมูล ส่วน Seeder และ Factory ช่วยให้การใส่ข้อมูลตัวอย่างทำได้อย่างรวดเร็ว',
                'status' => 1,
            ],
            [
                'title' => 'แนะนำแนวทางการเขียนโค้ด Clean Code สำหรับมือใหม่',
                'content' => 'การเขียนโค้ดที่สะอาด ตั้งชื่อตัวแปรที่สื่อความหมาย และแบ่งฟังก์ชันการทำงานให้ชัดเจน จะช่วยให้เพื่อนร่วมทีมและตัวเราในอนาคตทำงานง่ายขึ้น',
                'status' => 1,
            ],
            [
                'title' => 'พื้นฐานการทำงานของ RESTful API เบื้องต้น',
                'content' => 'RESTful API เป็นสถาปัตยกรรมในการแลกเปลี่ยนข้อมูลระหว่าง Client และ Server โดยใช้มาตรฐาน HTTP Methods เช่น GET, POST, PUT, DELETE',
                'status' => 0,
            ],
            [
                'title' => 'การเชื่อมต่อฐานข้อมูล MySQL ใน XAMPP กับ Laravel',
                'content' => 'การตั้งค่าไฟล์ .env ให้ตรงกับพอร์ตและฐานข้อมูลใน XAMPP phpMyAdmin เพื่อให้ Laravel สามารถเชื่อมต่อฐานข้อมูลได้อย่างราบรื่น',
                'status' => 1,
            ],
            [
                'title' => 'ทำไมต้องเขียน Middleware ใน Laravel',
                'content' => 'Middleware ทำหน้าที่เป็นตัวกรอง HTTP Request เช่น การตรวจสอบสิทธิ์การเข้าสู่ระบบก่อนที่ผู้ใช้จะเข้าถึงหน้าจัดการข้อมูล',
                'status' => 1,
            ],
            [
                'title' => 'การจัดการไฟล์อัปโหลดและ Storage ใน Laravel',
                'content' => 'Laravel มีระบบ Storage ที่ช่วยให้การอัปโหลดไฟล์ จัดเก็บ และจัดการรูปภาพหรือเอกสารเป็นไปอย่างง่ายดายและปลอดภัย',
                'status' => 0,
            ],
            [
                'title' => 'การใช้งาน Git และ GitHub สำหรับนักพัฒนาซอฟต์แวร์',
                'content' => 'Git เป็นเครื่องมือ Version Control ที่ช่วยบันทึกประวัติการแก้ไขโค้ด และทำงานร่วมกับทีมผ่านระบบ Cloud อย่าง GitHub ได้อย่างมีประสิทธิภาพ',
                'status' => 1,
            ],
            [
                'title' => 'แนวโน้มเทคโนโลยีเว็บและ AI ในปี 2026',
                'content' => 'เทคโนโลยีปัญญาประดิษฐ์กำลังเข้ามามีบทบาทอย่างมากในการเขียนโค้ด การออกแบบ UI/UX และการประมวลผลข้อมูลในเว็บแอปพลิเคชันยุคใหม่',
                'status' => 1,
            ],
            [
                'title' => 'เทคนิคการทำ SEO ให้เว็บไซต์ติดอันดับการค้นหา',
                'content' => 'การใช้ Semantic HTML, การตั้งค่า Meta Tags, การปรับแต่งความเร็วของหน้าเว็บ และโครงสร้าง URL ที่ดี ช่วยให้ Search Engine จัดอันดับเว็บได้ดีขึ้น',
                'status' => 1,
            ],
            [
                'title' => 'การใช้งาน Session และ Flash Message เพื่อแสดงผลการทำงาน',
                'content' => 'การส่งข้อความแจ้งเตือน เช่น แจ้งเตือนเมื่อบันทึกข้อมูลสำเร็จ ช่วยเพิ่มประสบการณ์การใช้งานที่ดีให้กับผู้ใช้งานระบบ',
                'status' => 1,
            ],
            [
                'title' => 'สรุปขั้นตอนการ Deploy เว็บไซต์ Laravel ขึ้น Production Server',
                'content' => 'ข้อควรระวังในการตั้งค่าสภาพแวดล้อมจริง เช่น การปิด APP_DEBUG, การทำ Optimize Config และการรักษาความปลอดภัยของฐานข้อมูล',
                'status' => 0,
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}
