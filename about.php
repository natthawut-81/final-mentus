<?php include 'header.php'; ?>

<style>
    .about-header {
        text-align: center;
        padding: 60px 20px 40px 20px;
    }
    .about-title {
        color: #d4af37;
        font-size: 42px;
        margin-bottom: 10px;
        font-weight: bold;
    }
    .about-subtitle {
        color: rgba(255, 255, 255, 0.7);
        font-size: 18px;
        letter-spacing: 2px;
    }
    
    .about-container {
        display: flex;
        flex-wrap: wrap;
        max-width: 1100px;
        margin: 0 auto 80px auto;
        gap: 50px;
        align-items: center;
        padding: 0 20px;
    }
    
    .about-image {
        flex: 1;
        min-width: 300px;
        text-align: center;
    }
    .about-image img {
        max-width: 100%;
        border-radius: 30px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.4);
        border: 1px solid rgba(212, 175, 55, 0.3);
        transition: transform 0.5s ease;
    }
    .about-image img:hover {
        transform: scale(1.03);
    }
    
    .about-content {
        flex: 1.5;
        min-width: 300px;
    }
    
    .story-text {
        font-size: 16px;
        line-height: 1.8;
        color: rgba(255,255,255,0.85);
        margin-bottom: 40px;
    }
    .story-text strong {
        color: #d4af37;
    }
    
    .name-origin-card {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(212, 175, 55, 0.2);
        border-radius: 20px;
        padding: 40px;
        transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .name-origin-card:hover {
        transform: translateY(-5px);
        border-color: #d4af37;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    }
    
    .name-title {
        color: #d4af37;
        font-size: 26px;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-weight: 600;
    }
    
    .name-breakdown {
        list-style: none;
        padding: 0;
        margin: 0 0 25px 0;
    }
    .name-breakdown li {
        margin-bottom: 20px;
        font-size: 16px;
        color: rgba(255,255,255,0.85);
        display: flex;
        align-items: center;
        gap: 20px;
    }
    .name-letter {
        color: #d4af37;
        font-weight: bold;
        font-size: 18px;
        background: rgba(212, 175, 55, 0.1);
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 15px;
        border: 1px solid rgba(212,175,55,0.3);
        flex-shrink: 0;
        letter-spacing: 1px;
    }
    
    .name-conclusion {
        font-size: 16px;
        line-height: 1.8;
        color: rgba(255,255,255,0.9);
        font-style: italic;
        border-left: 3px solid #d4af37;
        padding-left: 20px;
    }
</style>

<section class="section fade-in" style="padding-top: 20px; padding-bottom: 60px;">
    
    <div class="about-header fade-in delay-1">
        <h1 class="about-title">เกี่ยวกับ MENTUS</h1>
        <p class="about-subtitle">MY CACTUS PARADISE!</p>
    </div>

    <div class="about-container">
        
        <div class="about-image fade-in delay-2">
            <img src="photo/MENTUS.png" alt="Mentus Cactus Journey">
        </div>
        
        <div class="about-content fade-in delay-3">
            <p class="story-text">
                ย้อนกลับไปช่วงโควิดปี พ.ศ. 2564 ตอนนั้นผมยังเป็นเด็กนักเรียน ม.2 ที่ต้อง Work (และ Learn) from Home ชีวิตวนเวียนอยู่กับการเรียนออนไลน์ เล่นเกม ไถโซเชียล ไปจนถึงสวมบทเป็น "ช่างจำเป็น" ช่วยคุณพ่อซ่อมรถ ทั้งปะยาง เปลี่ยนน้ำมันเครื่อง เปลี่ยนโซ่สเตอร์... เอาเป็นว่าทำมาหมดแล้วครับ! แต่ด้วยความที่เป็นคนเบื่อง่าย ทำอะไรแป๊บๆ ก็เบื่อ กิจกรรมพวกนี้เลยยังไม่ค่อยตอบโจทย์ผมเท่าไหร่
            </p>
            <p class="story-text">
                จนกระทั่งเช้าวันพฤหัสบดีวันหนึ่ง คุณแม่ชวนไปเดินตลาดเช้าในตัวเมืองสระบุรี ท่ามกลางร้านรวงมากมาย สายตาผมไปสะดุดเข้ากับ <strong>"ร้านขายกระบองเพชร"</strong> ความรู้สึกแรกที่ผุดขึ้นมาคือ "เอ๊ะ... ทำไมมันน่ารักจัง" ตอนนั้นความรู้ในหัวคือศูนย์ ไม่รู้หรอกครับว่าสายพันธุ์อะไร โคลนไหนเรียกยังไง รู้แค่อยากเอากลับบ้าน เลยจัดมาเบาๆ 6 ต้น... และแน่นอนครับ ผ่านไปแค่อาทิตย์เดียว งอกเพิ่มมาอีก 5 ต้น รวมเป็น 11 ต้นถ้วน! นี่แหละครับ... วงการหนามเข้าแล้วออกยากจริงๆ
            </p>
            <p class="story-text">
                <strong>เข้าวงการ F ของออนไลน์แบบเต็มตัว</strong> พอได้ต้นไม้มา ทีนี้ก็เข้าสู่โหมดเอาจริงครับ ผมเริ่มหาซื้ออุปกรณ์ ทั้งดินปลูกสำเร็จรูป หินโรยหน้า กาบมะพร้าว ปุ๋ย มาลองเปลี่ยนกระถางและเด็ดหน่อชำเอง ช่วงนั้นการสั่งของออนไลน์กำลังบูม ผมก็เริ่มหัด F ต้นไม้จากแพลตฟอร์มต่างๆ ควบคู่ไปกับการนั่งเรียนออนไลน์ ผมเริ่มศึกษาเจาะลึกถึงชื่อสายพันธุ์และโคลนต่างๆ จนค้นพบว่าโลกของแคคตัสนั้นกว้างใหญ่และมีเสน่ห์มาก ถึงขั้นชวนคุณแม่ไปบุกตลาดต้นไม้ที่ใหญ่ที่สุดในนครนายก สรุปวันนั้นแม่โดนวงการบอนสีและบอนด่างตกไปตามระเบียบครับ
            </p>
            <p class="story-text">
                เข้าสู่ปี พ.ศ. 2565 ประชากรแคคตัสเริ่มล้นหน้าบ้าน ผมเลยตัดสินใจอพยพน้องๆ มาตั้งแคมป์ข้างบ้านแทน ซื้อผ้าใบมาขึงทำหลังคา ซื้อชั้นวางมาจัดให้เป็นระเบียบ และเริ่มสะสมสายพันธุ์ใหม่ๆ จากการเป็นแค่ "ผู้เลี้ยง" ผมเริ่มขยับมาทำเองทุกขั้นตอน ตั้งแต่ผสมดินปลูก ยันการผสมเกสรข้ามสายพันธุ์ วินาทีที่เห็นต้นอ่อนเล็กๆ เติบโตมาจากเมล็ดที่เราผสมเอง มันเป็นความภูมิใจที่บอกไม่ถูก
            </p>
            
            <div class="name-origin-card">
                <h3 class="name-title">✨ ทำไมต้องชื่อ MENTUS?</h3>
                <ul class="name-breakdown">
                    <li>
                        <div class="name-letter">MEN</div>
                        <div>คือชื่อเล่นของผมเองครับ (ชื่อ "เม่น" แอบเข้ากับคอนเซปต์มีหนาม 🦔)</div>
                    </li>
                    <li>
                        <div class="name-letter">TUS</div>
                        <div>ตัดมาจากคำว่า <strong>CACTUS</strong> (แคคตัส)</div>
                    </li>
                </ul>
                <div class="name-conclusion">
                    เมื่อจับมารวมร่างกันเลยกลายเป็น <strong style="color: #d4af37;">MENTUS</strong> ชื่อเท่ๆ ที่มีความเป็นตัวผมและต้นไม้ที่ผมรักผสมอยู่ครับ ทุกวันนี้ผมเชื่อมั่นว่าเป้าหมายต่อไปของ MENTUS คือการต่อยอดแพสชันนี้ให้กลายเป็นอาชีพ เพื่อหาเงินเลี้ยงดูตัวเองและดูแลครอบครัวครับ
                </div>
            </div>
            
        </div>
    </div>
    
</section>

<?php include 'footer.php'; ?>
