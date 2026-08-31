<?php include 'header.php'; ?>

<style>
    .contact-header {
        text-align: center;
        padding: 60px 20px 40px 20px;
    }
    .contact-title {
        color: #d4af37;
        font-size: 42px;
        margin-bottom: 10px;
        font-weight: bold;
    }
    .contact-subtitle {
        color: rgba(255, 255, 255, 0.7);
        font-size: 18px;
        letter-spacing: 1px;
    }

    .contact-wrapper {
        display: flex;
        flex-wrap: wrap;
        max-width: 1000px;
        margin: 0 auto 80px auto;
        gap: 40px;
        padding: 0 20px;
    }

    .contact-card {
        flex: 1;
        min-width: 300px;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(212, 175, 55, 0.2);
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        display: flex;
        flex-direction: column;
        justify-content: center;
        transition: transform 0.3s ease, border-color 0.3s ease;
    }
    .contact-card:hover {
        transform: translateY(-5px);
        border-color: #d4af37;
    }

    .contact-card h3 {
        color: #d4af37;
        font-size: 24px;
        margin-bottom: 30px;
        border-bottom: 1px solid rgba(212, 175, 55, 0.2);
        padding-bottom: 15px;
    }

    .contact-method {
        display: flex;
        align-items: center;
        margin-bottom: 25px;
        font-size: 16px;
        color: rgba(255, 255, 255, 0.9);
    }

    .contact-method .icon {
        width: 50px;
        height: 50px;
        background: rgba(212, 175, 55, 0.1);
        border: 1px solid rgba(212, 175, 55, 0.3);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 20px;
        font-size: 22px;
        color: #d4af37;
        flex-shrink: 0;
    }

    .contact-method a {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        transition: color 0.3s ease;
    }
    
    .contact-method a:hover {
        color: #d4af37;
    }

    .contact-note {
        margin-top: 20px;
        font-size: 14px;
        color: rgba(255, 255, 255, 0.6);
        line-height: 1.8;
        padding-left: 15px;
        border-left: 3px solid #d4af37;
    }

    .form-card {
        flex: 1.2;
        min-width: 300px;
        background: rgba(255, 255, 255, 0.02);
        border-radius: 20px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .form-group {
        margin-bottom: 25px;
    }

    .form-input {
        width: 100%;
        background: rgba(255, 255, 255, 0.05);
        border: none;
        border-bottom: 2px solid rgba(212, 175, 55, 0.3);
        padding: 15px 20px;
        font-size: 16px;
        color: white;
        font-family: 'Kanit', sans-serif;
        border-radius: 8px 8px 0 0;
        transition: all 0.3s ease;
    }

    .form-input:focus {
        outline: none;
        background: rgba(255, 255, 255, 0.1);
        border-bottom-color: #d4af37;
    }
    
    .form-input::placeholder {
        color: rgba(255, 255, 255, 0.4);
    }

    .btn-submit {
        background: transparent;
        color: #d4af37;
        border: 2px solid #d4af37;
        padding: 15px 40px;
        border-radius: 30px;
        font-size: 18px;
        font-weight: bold;
        font-family: 'Kanit', sans-serif;
        cursor: pointer;
        width: 100%;
        transition: all 0.3s ease;
        margin-top: 10px;
    }

    .btn-submit:hover {
        background: #d4af37;
        color: #08140c;
        box-shadow: 0 5px 20px rgba(212, 175, 55, 0.4);
    }
</style>

<section class="section fade-in" style="padding-top: 20px; padding-bottom: 60px;">
    <div class="contact-header fade-in delay-1">
        <h1 class="contact-title">ติดต่อเรา</h1>
        <p class="contact-subtitle">สอบถาม ปรึกษา หรือสั่งซื้อกระบองเพชร</p>
    </div>

    <div class="contact-wrapper">
        <div class="contact-card fade-in delay-2">
            <h3>ช่องทางการติดต่อ</h3>
            
            <div class="contact-method">
                <div class="icon">💬</div>
                <div>
                    <strong>LINE:</strong><br>
                    <a href="https://line.me/ti/p/xxZUPujgkP" target="_blank">men_812550</a>
                </div>
            </div>
            
            <div class="contact-method">
                <div class="icon">📷</div>
                <div>
                    <strong>IG:</strong><br>
                    <a href="https://www.instagram.com/mentus_official" target="_blank">MENTUS_OFFICAL</a>
                </div>
            </div>
            
            <div class="contact-method">
                <div class="icon">📞</div>
                <div>
                    <strong>Tel:</strong><br>
                    <a href="tel:0922494139">092-249-4139</a>
                </div>
            </div>
            
            <div class="contact-note">
                พร้อมให้คำปรึกษาและคำแนะนำสำหรับนักสะสมทุกท่าน คัดต้นสวย แข็งแรง 100% จัดส่งปลอดภัย
            </div>
        </div>

        <div class="form-card fade-in delay-3">
            <form action="#" method="POST">
                <div class="form-group">
                    <input type="text" name="name" class="form-input" placeholder="ชื่อ-นามสกุล" required>
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" class="form-input" placeholder="เบอร์โทรศัพท์" required>
                </div>
                <div class="form-group">
                    <input type="text" name="subject" class="form-input" placeholder="เรื่องที่ต้องการติดต่อ" required>
                </div>
                <div class="form-group">
                    <textarea name="message" class="form-input" rows="5" placeholder="ข้อความ..." required></textarea>
                </div>
                <button type="submit" class="btn-submit">ส่งข้อความ</button>
            </form>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
