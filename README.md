# 🛠 MENTUS Cactus Shop - Technology Stack

เอกสารนี้รวบรวมข้อมูลเกี่ยวกับเทคโนโลยี เครื่องมือ และไลบรารีทั้งหมดที่ใช้ในการพัฒนาโปรเจกต์เว็บไซต์ **MENTUS Cactus Shop** 🌵

---

## 1. 🎨 Frontend (ส่วนแสดงผลหน้าเว็บ)
ส่วนที่ทำงานบนเบราว์เซอร์ของผู้ใช้งาน เน้นการแสดงผลที่สวยงาม หรูหรา (Premium Dark Green / Gold) และรองรับทุกขนาดหน้าจอ

- **HTML5**: โครงสร้างหลักของหน้าเว็บทั้งหมด (Semantic HTML)
- **CSS3 (Vanilla CSS)**: ใช้จัดสไตล์ทั้งหมด โดยไม่ใช้ Framework เพื่อความยืดหยุ่นสูงสุด
  - รองรับ Responsive Design ด้วย `@media query`
  - เอฟเฟกต์ CSS Transitions, Animations (Fade-in), และ Hover effects แบบนุ่มนวล
  - Glassmorphism Effect (พื้นหลังเบลอ) สำหรับแถบ Navbar
- **Vanilla JavaScript (ES6)**: จัดการการโต้ตอบของผู้ใช้ (Interactivity)
  - ระบบ Hamburger Menu สำหรับมือถือ
  - ระบบคัดกรองสินค้า (Search, Categories, Price Slider, Size Slider) ในหน้า Products
  - ระบบ Hero Slider (สไลด์รูปภาพอัตโนมัติ) ในหน้าแรก

## 2. 📝 Text Editor (ระบบแก้ไขข้อความ)
- **Tiptap Editor (Headless Wrapper for ProseMirror)**: 
  - ใช้สร้าง Rich Text Editor ในหน้าบทความและหน้าเกี่ยวกับเรา
  - โหลดผ่าน ESM CDN (`esm.sh/@tiptap/core` และ `starter-kit`)
  - ช่วยให้เจ้าของเว็บสามารถจัดรูปแบบข้อความ (ตัวหนา, ตัวเอียง, H2, Bullet List) ได้อย่างง่ายดายผ่านหน้าเว็บโดยตรง (เมื่อรันบน Localhost)

## 3. ⚙️ Backend & Data Management (ส่วนจัดการข้อมูลและเซิร์ฟเวอร์)
แม้ว่าโปรเจกต์สุดท้ายจะเป็น Static HTML แต่ในขั้นตอนการพัฒนาได้นำ PHP มาช่วยอำนวยความสะดวก

- **PHP 8.x**:
  - ใช้จัดการ Modular Components (แยก `header.php` และ `footer.php` เพื่อลดความซ้ำซ้อนของโค้ด)
  - ใช้เก็บข้อมูลสินค้าในรูปแบบ Array (`$grid_products`) เพื่อง่ายต่อการ Loop ข้อมูล
  - สคริปต์ `save_content.php` สำหรับรับข้อมูลจาก Tiptap Editor และเขียนลงไฟล์ JSON
- **JSON (JavaScript Object Notation)**:
  - ใช้ไฟล์ `data/content.json` เป็นฐานข้อมูลขนาดเล็ก (Flat-file database) สำหรับเก็บเนื้อหาบทความที่ถูกแก้ไขโดย Tiptap Editor

## 4. 🧰 Development Tools (เครื่องมือสำหรับนักพัฒนา)
- **MAMP / XAMPP**: โปรแกรมจำลองเซิร์ฟเวอร์แบบ Localhost สำหรับรันสคริปต์ PHP บนเครื่องคอมพิวเตอร์
- **PHP Built-in Server**: ใช้ควบคู่กับ cURL Script เพื่อเรนเดอร์และแปลงไฟล์ `.php` ให้กลายเป็น `.html` อัตโนมัติสำหรับการนำไป Deploy

## 5. 🚀 Deployment & Hosting (การให้บริการเว็บไซต์)
- **Git & GitHub**: ระบบควบคุมเวอร์ชันของซอร์สโค้ด (Version Control)
- **GitHub Pages**: บริการ Hosting ฟรีจาก GitHub สำหรับฝากไฟล์ Static HTML
  - *ข้อจำกัด:* ไม่สามารถรัน PHP ได้ โปรเจกต์นี้จึงต้องแปลงไฟล์ทุกอย่างเป็น `.html` ผ่าน Localhost ก่อนทำการ `git push`

## 6. 🖋 Typography & Assets
- **Google Fonts**:
  - `Itim` (อิทธิม) - ใช้สำหรับหัวข้อหลัก ให้ความรู้สึกเป็นมิตรและโดดเด่น
  - `Kanit` (คณิต) - ใช้สำหรับเนื้อหาทั่วไป อ่านง่าย สบายตา
- **Emojis**: ใช้เป็นไอคอนประกอบแบบน้ำหนักเบา โดยไม่ต้องพึ่งพาไลบรารีภายนอก (เช่น FontAwesome)
