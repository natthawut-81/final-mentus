<?php include 'header.php'; ?>

    <!-- Banner Section -->
    <section class="section fade-in" style="padding-top: 20px; position: relative;">
        <div class="hero-slider-container">
            <img class="hero-slide" src="photo/post1.png" alt="Cactus Greenhouse" style="width: 100%; height: 100%; object-fit: cover; display: block; transition: opacity 0.5s;">
            <img class="hero-slide" src="photo/post2.jpg" alt="Cactus Greenhouse" style="width: 100%; height: 100%; object-fit: cover; display: none; transition: opacity 0.5s;">
            <img class="hero-slide" src="photo/post3.png" alt="Cactus Greenhouse" style="width: 100%; height: 100%; object-fit: cover; display: none; transition: opacity 0.5s;">
            
            <!-- Navigation Arrows -->
            <button id="prevBtn" style="position: absolute; top: 50%; left: 20px; transform: translateY(-50%); background: rgba(0,0,0,0.5); color: white; border: none; width: 40px; height: 40px; border-radius: 50%; cursor: pointer; font-size: 24px; display: flex; align-items: center; justify-content: center; transition: 0.3s;" onmouseover="this.style.background='rgba(0,0,0,0.8)'" onmouseout="this.style.background='rgba(0,0,0,0.5)'">&#10094;</button>
            <button id="nextBtn" style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%); background: rgba(0,0,0,0.5); color: white; border: none; width: 40px; height: 40px; border-radius: 50%; cursor: pointer; font-size: 24px; display: flex; align-items: center; justify-content: center; transition: 0.3s;" onmouseover="this.style.background='rgba(0,0,0,0.8)'" onmouseout="this.style.background='rgba(0,0,0,0.5)'">&#10095;</button>
        </div>
        
        <div style="text-align: center; margin-top: 15px;" id="hero-dots">
            <span class="dot" style="display:inline-block; width: 8px; height: 8px; background: white; border-radius: 50%; margin: 0 4px; cursor: pointer;"></span>
            <span class="dot" style="display:inline-block; width: 8px; height: 8px; background: rgba(255,255,255,0.4); border-radius: 50%; margin: 0 4px; cursor: pointer;"></span>
            <span class="dot" style="display:inline-block; width: 8px; height: 8px; background: rgba(255,255,255,0.4); border-radius: 50%; margin: 0 4px; cursor: pointer;"></span>
        </div>
        
        <script>
            let currentSlide = 0;
            const slides = document.querySelectorAll('.hero-slide');
            const dots = document.querySelectorAll('.dot');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            
            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.style.display = i === index ? 'block' : 'none';
                    dots[i].style.background = i === index ? 'white' : 'rgba(255,255,255,0.4)';
                });
                currentSlide = index;
            }
            
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => showSlide(index));
            });
            
            prevBtn.addEventListener('click', () => {
                let prev = (currentSlide - 1 + slides.length) % slides.length;
                showSlide(prev);
            });
            
            nextBtn.addEventListener('click', () => {
                let next = (currentSlide + 1) % slides.length;
                showSlide(next);
            });
            
            setInterval(() => {
                let next = (currentSlide + 1) % slides.length;
                showSlide(next);
            }, 5000);
        </script>
    </section>

    <!-- Recommended Items -->
    <section class="section fade-in delay-1" style="padding-top: 10px;">
        <h2 style="text-align: center; font-size: 32px; margin-bottom: 40px; color: white;">รายการแนะนำ</h2>
        <div class="grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
            
            <div class="card fade-in delay-1" style="background: transparent; box-shadow: none; color: white;">
                <img src="photo/photo1.png" alt="ยิมโนคริสไร้หนามด่าง" style="border-radius: 30px; height: 300px; object-fit: cover;">
                <div class="card-body" style="padding: 20px 0;">
                    <h3 style="font-size: 22px; margin-bottom: 10px;">ยิมโนคริสไร้หนามด่าง</h3>
                    <p style="font-size: 14px; opacity: 0.9; line-height: 1.8;">กระบองเพชรหายากที่โดดเด่นด้วย<br>ลวดลายด่างสีสันสวยงาม<br>ไร้หนาม ดูสะอาดตาและมีเอกลักษณ์<br>เหมาะสำหรับนักสะสมที่ต้องการไม้ฟอร์มสวย<br>และมูลค่าเพิ่มในอนาคต</p>
                </div>
            </div>

            <div class="card fade-in delay-2" style="background: transparent; box-shadow: none; color: white;">
                <img src="photo/photo2.png" alt="ยิมโนลูกมังคุด" style="border-radius: 30px; height: 300px; object-fit: cover;">
                <div class="card-body" style="padding: 20px 0;">
                    <h3 style="font-size: 22px; margin-bottom: 10px;">ยิมโนลูกมังคุด</h3>
                    <p style="font-size: 14px; opacity: 0.9; line-height: 1.8;">สายพันธุ์ยอดนิยมที่มีรูปทรงกลมอวบคล้าย<br>ผลมังคุด โครงสร้างสวยสมดุล<br>สีสันเข้มโดดเด่น<br>เป็นไม้สะสมที่ได้รับความสนใจอย่างต่อเนื่อง<br>ในวงการกระบองเพชร</p>
                </div>
            </div>

            <div class="card fade-in delay-3" style="background: transparent; box-shadow: none; color: white;">
                <img src="photo/photo3.png" alt="โรงเรือนมาตรฐานขนาดใหญ่" style="border-radius: 30px; height: 300px; object-fit: cover;">
                <div class="card-body" style="padding: 20px 0;">
                    <h3 style="font-size: 22px; margin-bottom: 10px;">โรงเรือนมาตรฐานขนาดใหญ่</h3>
                    <p style="font-size: 14px; opacity: 0.9; line-height: 1.8;">เพาะเลี้ยงภายใต้โรงเรือนที่ควบคุมแสง<br>อากาศ และความชื้นอย่างเหมาะสม<br>ช่วยให้ต้นเติบโตแข็งแรง สีสวย ฟอร์มแน่น<br>พร้อมส่งต่อคุณภาพถึงนักสะสมทุกท่านอย่างมั่นใจ</p>
                </div>
            </div>

        </div>
    </section>

<?php include 'footer.php'; ?>
