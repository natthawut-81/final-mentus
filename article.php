<?php
$articles = [
    ["num" => "01", "title" => "แสงแดด: พลังงานหลักของชีวิต", "desc" => "ต้องการแสงแดดจัดอย่างน้อย 4-6 ชั่วโมงต่อวัน หากแดดแรงควรใช้สแลนกรองแสง 50-60%", "icon" => "☀️"],
    ["num" => "02", "title" => "การรดน้ำ: 'น้อยแต่เน้น'", "desc" => "รดเมื่อดินแห้งสนิท รดให้ชุ่มจนน้ำไหลออกก้นกระถาง อย่าให้ละอองน้ำขังตามยอด", "icon" => "💧"],
    ["num" => "03", "title" => "ดินปลูก: โปร่ง ระบายน้ำดี", "desc" => "ดินควรมีส่วนผสมของหินภูเขาไฟ พีทมอส หรือทรายหยาบ เพื่อให้มีความร่วนซุย", "icon" => "🪴"],
    ["num" => "04", "title" => "การดูแลเรื่องโรคและแมลง", "desc" => "ระวังเพลี้ยแป้ง ไรแดง และเชื้อรา ควรวางในที่อากาศถ่ายเทสะดวก", "icon" => "🛡️"],
    ["num" => "05", "title" => "ความใส่ใจที่ MENTUS มอบให้", "desc" => "การปลูกให้สวยต้องอาศัยการหมั่นสังเกตและใจเย็น บันทึกการเติบโตอย่างสม่ำเสมอ", "icon" => "💚"]
];

include 'header.php';
?>

<style>
    /* Article Page Styles */
    .article-header {
        text-align: center;
        padding: 60px 20px 40px 20px;
        position: relative;
    }
    
    .article-title {
        color: #d4af37;
        font-size: 48px;
        margin-bottom: 15px;
        font-weight: bold;
    }
    
    .article-subtitle {
        color: rgba(255, 255, 255, 0.8);
        font-size: 18px;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.6;
    }

    .timeline-container {
        max-width: 800px;
        margin: 0 auto 80px auto;
        padding: 0 20px;
    }

    .timeline-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 40px;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(212, 175, 55, 0.2);
        border-radius: 20px;
        padding: 40px;
        transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .timeline-item:hover {
        transform: translateY(-5px);
        border-color: #d4af37;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    }

    .timeline-number {
        font-size: 120px;
        font-weight: 900;
        color: rgba(212, 175, 55, 0.05);
        position: absolute;
        top: -15px;
        right: 20px;
        line-height: 1;
        z-index: 0;
        pointer-events: none;
    }

    .timeline-icon {
        font-size: 36px;
        margin-right: 30px;
        background: rgba(212, 175, 55, 0.1);
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        border: 1px solid rgba(212, 175, 55, 0.3);
        z-index: 1;
    }

    .timeline-content {
        z-index: 1;
        position: relative;
    }

    .timeline-title {
        color: #d4af37;
        font-size: 24px;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .timeline-desc {
        color: rgba(255, 255, 255, 0.85);
        font-size: 16px;
        line-height: 1.8;
        margin: 0;
    }

    @media (max-width: 768px) {
        .timeline-item {
            flex-direction: column;
            text-align: center;
            padding: 30px 20px;
        }
        .timeline-icon {
            margin: 0 auto 25px auto;
        }
        .timeline-number {
            top: 30px;
            right: 50%;
            transform: translateX(50%);
        }
    }
</style>

<section class="section fade-in" style="padding-top: 40px; padding-bottom: 60px;">
    
    <div class="article-header fade-in delay-1">
        <h1 class="article-title">ปลูกฝันด้วยหนาม</h1>
        <p class="article-subtitle">คู่มือการดูแลกระบองเพชรฉบับย่อจาก MENTUS เพื่อให้ไม้สะสมของคุณเติบโตอย่างสวยงามและแข็งแรง</p>
    </div>

    <div class="timeline-container">
        <?php $delay = 1; foreach($articles as $art): ?>
        <div class="timeline-item fade-in delay-<?= $delay ?>">
            <div class="timeline-number"><?= $art['num'] ?></div>
            <div class="timeline-icon"><?= $art['icon'] ?></div>
            <div class="timeline-content">
                <h3 class="timeline-title"><?= $art['title'] ?></h3>
                <p class="timeline-desc"><?= $art['desc'] ?></p>
            </div>
        </div>
        <?php $delay++; if($delay > 3) $delay = 1; endforeach; ?>
    </div>
    
</section>

<?php include 'footer.php'; ?>
