<?php 
// 3 Featured products
$featured_products = [
    [
        "title" => "ยิมโนคริสไร้หนามด่าง",
        "price" => "1,250",
        "img" => "photo/stock1.png",
        "features" => ["ไร้หนาม", "ด่างสวยชัดเจน", "ฟอร์มสมบูรณ์"]
    ],
    [
        "title" => "ยิมโนมังคุดด่าง",
        "price" => "1,350",
        "img" => "photo/stock2.png",
        "features" => ["ทรงกลมสวย", "สีด่างเด่นชัด", "เลี้ยงง่าย"]
    ],
    [
        "title" => "ยิมโนลูกมังคุด",
        "price" => "1,450",
        "img" => "photo/stock3.png",
        "features" => ["ลักษณะแปลก", "สีเข้มสวยงาม", "สะสมมูลค่าสูง"]
    ]
];

// Grid products
$grid_products = [
    ["title" => "ยิมโนคริสไร้หนามด่าง", "img" => "photo/stock1.png", "price" => "1,250", "category" => "gymno"],
    ["title" => "ยิมโนลูกมังคุดด่าง", "img" => "photo/stock2.png", "price" => "1,350", "category" => "gymno"],
    ["title" => "ยิมโนลูกมังคุด", "img" => "photo/stock3.png", "price" => "1,450", "category" => "gymno"],
    ["title" => "ยิมโนโนคริส", "img" => "photo/stock4.png", "price" => "350", "category" => "gymno"],
    ["title" => "ยิมโนคริสไร้หนามด่าง", "img" => "photo/stock5.png", "price" => "500", "category" => "gymno"],
    ["title" => "ยิมโนลูกมังคุดด่าง", "img" => "photo/stock6.png", "price" => "3,500", "category" => "gymno"],
    ["title" => "ยิมโนคริสไร้หนามด่าง", "img" => "photo/stock7.png", "price" => "1,590", "category" => "gymno"],
    ["title" => "ยิมโนลูกมังคุดด่าง", "img" => "photo/stock8.png", "price" => "2,300", "category" => "gymno"],
    ["title" => "ยิมโนคริสไร้หนามด่าง", "img" => "photo/stock9.png", "price" => "2,900", "category" => "gymno"],
    ["title" => "ยิมโนคริสไร้หนามด่าง", "img" => "photo/stock10.png", "price" => "1,990", "category" => "gymno"],
    ["title" => "ยิมโนคริสไร้หนาม", "img" => "photo/stock11.png", "price" => "2,500", "category" => "gymno"],
    ["title" => "ยิมโนLB Hybridด่าง", "img" => "photo/stock12.png", "price" => "899", "category" => "gymno"],
    ["title" => "ยิมโนคริสไร้หนามด่าง", "img" => "photo/stock13.png", "price" => "699", "category" => "gymno"],
    ["title" => "ยิมโนพิงค์ไดมอน", "img" => "photo/stock14.png", "price" => "1,500", "category" => "gymno"],
    ["title" => "แอสโตรไฟตัมแอสทีเรียส วา นูดัม", "img" => "photo/as1.png", "price" => "500", "category" => "astrophytum"],
    ["title" => "แอสโตรไฟตัมแอสทีเรียส “Super” ซุปเปอร์", "img" => "photo/as2.png", "price" => "650", "category" => "astrophytum"],
    ["title" => "แอสโตรไฟตัมแอสทีเรียส “Star-shape” สตาร์เชฟ", "img" => "photo/as3.png", "price" => "450", "category" => "astrophytum"],
    ["title" => "แอสโตรไฟตัมแอสทีเรียส “Kikko” กิ๊ก-โก๊ะ", "img" => "photo/as4.png", "price" => "850", "category" => "astrophytum"],
    ["title" => "แอสโตรไฟตัมแอสทีเรียส “Kabuto”คาบูโตะ", "img" => "photo/as5.png", "price" => "350", "category" => "astrophytum"],
    ["title" => "เเมมขนนกขาว", "img" => "photo/mam1.png", "price" => "50", "category" => "mammillaria"],
    ["title" => "เเมมขนเเมว", "img" => "photo/mam2.png", "price" => "50", "category" => "mammillaria"]
];

include 'header.php'; 
?>
<style>
    /* Premium Gold Theme Styles */
    .gold-text {
        color: #d4af37; /* Gold color */
    }
    .gold-border {
        border: 1px solid #d4af37;
    }
    .featured-container {
        background-color: #08140c; /* Darker green/black */
        border: 1px solid #d4af37;
        border-radius: 20px;
        padding: 50px;
        margin-bottom: 60px;
        position: relative;
    }
    .featured-title {
        text-align: center;
        color: #d4af37;
        font-size: 42px;
        margin-bottom: 10px;
    }
    .featured-subtitle {
        text-align: center;
        color: rgba(255,255,255,0.7);
        font-size: 16px;
        margin-bottom: 50px;
    }
    .featured-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-bottom: 40px;
    }
    .featured-card {
        border: 1px solid rgba(212, 175, 55, 0.4);
        border-radius: 15px;
        padding: 20px;
        text-align: center;
        background: linear-gradient(to bottom, rgba(255,255,255,0.05), transparent);
    }
    .featured-card img {
        width: 100%;
        aspect-ratio: 1;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 20px;
    }
    .feature-list {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin: 20px 0;
        font-size: 12px;
        color: rgba(255,255,255,0.8);
    }
    .feature-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 5px;
    }
    .price-tag {
        display: inline-block;
        border: 1px solid #d4af37;
        border-radius: 25px;
        padding: 8px 30px;
        color: #d4af37;
        font-size: 20px;
    }
    .guarantees-row {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        border-top: 1px solid rgba(212, 175, 55, 0.3);
        padding-top: 40px;
        margin-top: 20px;
    }
    .guarantee-item {
        display: flex;
        align-items: center;
        gap: 15px;
        color: white;
    }
    .guarantee-icon {
        width: 45px;
        height: 45px;
        border: 1px solid #d4af37;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #d4af37;
    }
    .guarantee-text h4 {
        margin: 0;
        font-size: 16px;
        color: white;
    }
    .guarantee-text p {
        margin: 0;
        font-size: 12px;
        color: rgba(255,255,255,0.6);
    }

    /* Regular Grid */
    .product-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
        margin-bottom: 50px;
    }
    .product-card {
        text-align: center;
        cursor: pointer;
        transition: transform 0.3s ease;
    }
    .product-card:hover {
        transform: translateY(-10px);
    }
    .product-card img {
        width: 100%;
        aspect-ratio: 1;
        object-fit: cover;
        border-radius: 20px;
        margin-bottom: 15px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }
    .product-card h3 {
        color: white;
        font-size: 18px;
    }
    @media (max-width: 992px) {
        .featured-grid, .product-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    @media (max-width: 768px) {
        .featured-grid, .product-grid {
            grid-template-columns: 1fr;
        }
        .guarantees-row {
            flex-direction: column;
            gap: 20px;
            align-items: flex-start;
        }
    }

    /* Filter Buttons */
    .filter-btn {
        background-color: transparent;
        border: 1px solid #d4af37;
        color: #d4af37;
        padding: 8px 25px;
        border-radius: 20px;
        cursor: pointer;
        font-family: 'Kanit', sans-serif;
        font-size: 16px;
        transition: all 0.3s ease;
    }
    .filter-btn:hover, .filter-btn.active {
        background-color: #d4af37;
        color: #08140c;
        font-weight: bold;
    }
    .category-filters {
        text-align: center;
        margin-bottom: 40px;
        display: flex;
        justify-content: center;
        gap: 15px;
        flex-wrap: wrap;
    }
</style>

    <section class="section fade-in" style="padding-top: 40px;">
        
        <!-- Featured Banner -->
        <div class="featured-container fade-in delay-1">
            <h2 class="featured-title">รายการสินค้าแนะนำ</h2>
            <p class="featured-subtitle">คัดสรรกระบองเพชรคุณภาพ สวย หายาก ฟอร์มดี สะสมง่าย มูลค่าเพิ่มในอนาคต</p>
            
            <div class="featured-grid">
                <?php foreach($featured_products as $item): ?>
                <div class="featured-card">
                    <h3 class="gold-text" style="margin-bottom: 15px; font-size: 22px;">
                        👑 <?= $item['title'] ?>
                    </h3>
                    <img src="<?= $item['img'] ?>" alt="<?= $item['title'] ?>">
                    
                    <div class="feature-list">
                        <?php foreach($item['features'] as $feature): ?>
                        <div class="feature-item">
                            <span class="gold-text" style="font-size: 18px;">❖</span>
                            <span><?= $feature ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <div class="price-tag" style="margin-top: 15px;">ราคา <strong><?= $item['price'] ?></strong> บาท</div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Guarantees -->
            <div class="guarantees-row">
                <div class="guarantee-item">
                    <div class="guarantee-icon"><span style="font-size: 20px;">🛡️</span></div>
                    <div class="guarantee-text">
                        <h4>รับประกันคุณภาพ</h4>
                        <p>คัดต้นสวย แข็งแรง 100%</p>
                    </div>
                </div>
                <div class="guarantee-item">
                    <div class="guarantee-icon"><span style="font-size: 20px;">🚚</span></div>
                    <div class="guarantee-text">
                        <h4>จัดส่งปลอดภัย</h4>
                        <p>แพ็คอย่างดี จัดส่งรวดเร็ว</p>
                    </div>
                </div>
                <div class="guarantee-item">
                    <div class="guarantee-icon"><span style="font-size: 20px;">🌱</span></div>
                    <div class="guarantee-text">
                        <h4>เพาะเลี้ยงด้วยใจ</h4>
                        <p>ดูแลทุกขั้นตอนอย่างพิถีพิถัน</p>
                    </div>
                </div>
                <div class="guarantee-item">
                    <div class="guarantee-icon"><span style="font-size: 20px;">💬</span></div>
                    <div class="guarantee-text">
                        <h4>มีบริการให้คำแนะนำ</h4>
                        <p>สำหรับนักสะสมทุกท่าน</p>
                    </div>
                </div>
            </div>

            <!-- Dots -->
            <div style="text-align: center; margin-top: 40px;">
                <span style="display:inline-block; width: 8px; height: 8px; background: #d4af37; border-radius: 50%; margin: 0 4px;"></span>
                <span style="display:inline-block; width: 8px; height: 8px; background: rgba(212,175,55,0.4); border-radius: 50%; margin: 0 4px;"></span>
                <span style="display:inline-block; width: 8px; height: 8px; background: rgba(212,175,55,0.4); border-radius: 50%; margin: 0 4px;"></span>
            </div>
        </div>

        <hr style="border: 0; border-top: 1px solid rgba(255,255,255,0.2); margin-bottom: 40px;">

        <!-- All Products Heading and Filters -->
        <h2 style="text-align: center; color: white; font-size: 36px; margin-bottom: 20px;" class="fade-in">สินค้าทั้งหมด</h2>
        
        <div class="category-filters fade-in delay-1">
            <button class="filter-btn active" data-filter="all">ทั้งหมด</button>
            <button class="filter-btn" data-filter="gymno">ยิมโน</button>
            <button class="filter-btn" data-filter="mammillaria">แมมมิลาเรีย</button>
            <button class="filter-btn" data-filter="astrophytum">แอสโตรไฟตัม</button>
        </div>

        <!-- Regular Grid -->
        <div class="product-grid fade-in delay-2" id="productGrid">
            <?php foreach($grid_products as $prod): ?>
            <div class="product-card product-item" data-category="<?= $prod['category'] ?>">
                <img src="<?= $prod['img'] ?>" alt="<?= $prod['title'] ?>">
                <h3><?= $prod['title'] ?></h3>
                <?php if(isset($prod['price'])): ?>
                <p class="gold-text" style="margin-top: 5px; font-weight: bold;">ราคา <?= $prod['price'] ?> บาท</p>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>

        <div style="text-align: center; margin-bottom: 40px;" class="fade-in delay-3">
            <a href="#" id="viewMoreBtn" class="btn-contact" style="display: inline-block; padding: 12px 40px !important;">ดูสินค้าเพิ่มเติม</a>
        </div>

    </section>

    <!-- Filter Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const productCards = Array.from(document.querySelectorAll('.product-item'));
            const viewMoreBtn = document.getElementById('viewMoreBtn');

            // Initialize random 4 products
            function initializeGrid() {
                // Hide all cards first
                productCards.forEach(card => card.style.display = 'none');
                
                // Shuffle cards and show only 4
                const shuffled = [...productCards].sort(() => 0.5 - Math.random());
                shuffled.slice(0, 4).forEach(card => {
                    card.style.display = 'block';
                });
                
                viewMoreBtn.style.display = 'inline-block';
            }

            function showAll(filterValue = 'all') {
                productCards.forEach(card => {
                    if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
                viewMoreBtn.style.display = 'none'; // Hide button after expanding
            }

            filterBtns.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    
                    // Update active state
                    filterBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    
                    const filterValue = btn.getAttribute('data-filter');
                    
                    // When a filter is clicked, we just show all items in that category
                    showAll(filterValue);
                });
            });

            viewMoreBtn.addEventListener('click', (e) => {
                e.preventDefault();
                
                // Force "All" filter to be active
                filterBtns.forEach(b => b.classList.remove('active'));
                document.querySelector('.filter-btn[data-filter="all"]').classList.add('active');
                
                showAll('all');
            });

            // Set initial state
            initializeGrid();
        });
    </script>

<?php include 'footer.php'; ?>
