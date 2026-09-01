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
    ["title" => "ยิมโนคริสไร้หนามด่าง", "img" => "photo/stock1.png", "price" => "1,250", "category" => "gymno", "raw_price" => 1250, "size" => 3.2], 
    ["title" => "ยิมโนลูกมังคุดด่าง", "img" => "photo/stock2.png", "price" => "1,350", "category" => "gymno", "raw_price" => 1350, "size" => 6.1], 
    ["title" => "ยิมโนลูกมังคุด", "img" => "photo/stock3.png", "price" => "1,450", "category" => "gymno", "raw_price" => 1450, "size" => 14.0], 
    ["title" => "ยิมโนโนคริส", "img" => "photo/stock4.png", "price" => "350", "category" => "gymno", "raw_price" => 350, "size" => 2.6], 
    ["title" => "ยิมโนคริสไร้หนามด่าง", "img" => "photo/stock5.png", "price" => "500", "category" => "gymno", "raw_price" => 500, "size" => 3.1], 
    ["title" => "ยิมโนลูกมังคุดด่าง", "img" => "photo/stock6.png", "price" => "3,500", "category" => "gymno", "raw_price" => 3500, "size" => 7.5], 
    ["title" => "ยิมโนคริสไร้หนามด่าง", "img" => "photo/stock7.png", "price" => "1,590", "category" => "gymno", "raw_price" => 1590, "size" => 3.4], 
    ["title" => "ยิมโนลูกมังคุดด่าง", "img" => "photo/stock8.png", "price" => "2,300", "category" => "gymno", "raw_price" => 2300, "size" => 3.2], 
    ["title" => "ยิมโนคริสไร้หนามด่าง", "img" => "photo/stock9.png", "price" => "2,900", "category" => "gymno", "raw_price" => 2900, "size" => 12.2], 
    ["title" => "ยิมโนคริสไร้หนามด่าง", "img" => "photo/stock10.png", "price" => "1,990", "category" => "gymno", "raw_price" => 1990, "size" => 2.5], 
    ["title" => "ยิมโนคริสไร้หนาม", "img" => "photo/stock11.png", "price" => "2,500", "category" => "gymno", "raw_price" => 2500, "size" => 12.5], 
    ["title" => "ยิมโนLB Hybridด่าง", "img" => "photo/stock12.png", "price" => "899", "category" => "gymno", "raw_price" => 899, "size" => 6.7], 
    ["title" => "ยิมโนคริสไร้หนามด่าง", "img" => "photo/stock13.png", "price" => "699", "category" => "gymno", "raw_price" => 699, "size" => 8.7], 
    ["title" => "ยิมโนพิงค์ไดมอน", "img" => "photo/stock14.png", "price" => "1,500", "category" => "gymno", "raw_price" => 1500, "size" => 4.4], 
    ["title" => "แอสโตรไฟตัมแอสทีเรียส วา นูดัม", "img" => "photo/as1.png", "price" => "500", "category" => "astrophytum", "raw_price" => 500, "size" => 5.6], 
    ["title" => "แอสโตรไฟตัมแอสทีเรียส “Super” ซุปเปอร์", "img" => "photo/as2.png", "price" => "650", "category" => "astrophytum", "raw_price" => 650, "size" => 12.3], 
    ["title" => "แอสโตรไฟตัมแอสทีเรียส “Star-shape” สตาร์เชฟ", "img" => "photo/as3.png", "price" => "450", "category" => "astrophytum", "raw_price" => 450, "size" => 4.3], 
    ["title" => "แอสโตรไฟตัมแอสทีเรียส “Kikko” กิ๊ก-โก๊ะ", "img" => "photo/as4.png", "price" => "850", "category" => "astrophytum", "raw_price" => 850, "size" => 4.6], 
    ["title" => "แอสโตรไฟตัมแอสทีเรียส “Kabuto”คาบูโตะ", "img" => "photo/as5.png", "price" => "350", "category" => "astrophytum", "raw_price" => 350, "size" => 13.3], 
    ["title" => "เเมมขนนกขาว", "img" => "photo/mam1.png", "price" => "50", "category" => "mammillaria", "raw_price" => 50, "size" => 7.7], 
    ["title" => "เเมมขนเเมว", "img" => "photo/mam2.png", "price" => "50", "category" => "mammillaria", "raw_price" => 50, "size" => 8.0]
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


    /* Advanced Filter UI */
    .filter-panel {
        background-color: #08140c;
        border: 1px solid #d4af37;
        border-radius: 15px;
        padding: 30px;
        margin-bottom: 40px;
    }
    .filter-row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    .search-box {
        flex: 1;
        min-width: 250px;
        position: relative;
    }
    .search-box input {
        width: 100%;
        padding: 12px 20px;
        border-radius: 25px;
        border: 1px solid rgba(212, 175, 55, 0.5);
        background: rgba(255, 255, 255, 0.05);
        color: white;
        font-family: 'Kanit', sans-serif;
    }
    .search-box input::placeholder {
        color: rgba(255, 255, 255, 0.5);
    }
    .slider-group {
        flex: 1;
        min-width: 250px;
        color: white;
        font-family: 'Kanit', sans-serif;
    }
    .slider-group label {
        display: flex;
        justify-content: space-between;
        margin-bottom: 8px;
        color: #d4af37;
    }
    input[type=range] {
        width: 100%;
        accent-color: #d4af37;
    }
    .category-filters {
        text-align: center;
        display: flex;
        justify-content: center;
        gap: 10px;
        flex-wrap: wrap;
        width: 100%;
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
        
        
        <!-- Advanced Filter Panel -->
        <div class="filter-panel fade-in delay-1">
            <div class="filter-row">
                <div class="search-box">
                    <input type="text" id="searchInput" placeholder="🔍 ค้นหาสินค้า (พิมพ์ชื่อ หรือสายพันธุ์)...">
                </div>
                
                <div class="slider-group">
                    <label><span>ราคา: </span> <span id="priceValue">สูงสุด 3,500 ฿</span></label>
                    <input type="range" id="priceRange" min="0" max="3500" value="3500" step="50">
                </div>
                
                <div class="slider-group">
                    <label><span>ขนาด (cm): </span> <span id="sizeValue">สูงสุด 15.0 cm</span></label>
                    <input type="range" id="sizeRange" min="0" max="15" value="15" step="0.5">
                </div>
            </div>
            
            <div class="category-filters">
                <button class="filter-btn active" data-filter="all">ทั้งหมด</button>
                <button class="filter-btn" data-filter="gymno">ยิมโน</button>
                <button class="filter-btn" data-filter="mammillaria">แมมมิลาเรีย</button>
                <button class="filter-btn" data-filter="astrophytum">แอสโตรไฟตัม</button>
            </div>
        </div>


        <!-- Regular Grid -->
        <div class="product-grid fade-in delay-2" id="productGrid">
            <?php foreach($grid_products as $prod): ?>
            <div class="product-card product-item" data-category="<?= $prod['category'] ?>" data-price="<?= $prod['raw_price'] ?>" data-size="<?= $prod['size'] ?>">
                <img src="<?= $prod['img'] ?>" alt="<?= $prod['title'] ?>">
                <h3><?= $prod['title'] ?></h3>
                <p style="font-size: 14px; color: rgba(255,255,255,0.7); margin-top: 5px;">ขนาด: <?= $prod['size'] ?> cm</p>
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

    
    <!-- Advanced Filter Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const searchInput = document.getElementById('searchInput');
            const priceRange = document.getElementById('priceRange');
            const priceValue = document.getElementById('priceValue');
            const sizeRange = document.getElementById('sizeRange');
            const sizeValue = document.getElementById('sizeValue');
            const filterBtns = document.querySelectorAll('.filter-btn');
            const productCards = Array.from(document.querySelectorAll('.product-item'));
            const viewMoreBtn = document.getElementById('viewMoreBtn');
            
            let activeCategory = 'all';

            // Hide the view more button as we show all items now for filtering
            if (viewMoreBtn) viewMoreBtn.style.display = 'none';

            function filterProducts() {
                const searchTerm = searchInput.value.toLowerCase();
                const maxPrice = parseInt(priceRange.value);
                const maxSize = parseFloat(sizeRange.value);

                let visibleCount = 0;

                productCards.forEach(card => {
                    const title = card.querySelector('h3').textContent.toLowerCase();
                    const category = card.getAttribute('data-category');
                    const price = parseInt(card.getAttribute('data-price'));
                    const size = parseFloat(card.getAttribute('data-size'));

                    const matchSearch = title.includes(searchTerm);
                    const matchCategory = (activeCategory === 'all' || category === activeCategory);
                    const matchPrice = (price <= maxPrice);
                    const matchSize = (size <= maxSize);

                    if (matchSearch && matchCategory && matchPrice && matchSize) {
                        card.style.display = 'block';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });
            }

            // Event Listeners
            searchInput.addEventListener('input', filterProducts);
            
            priceRange.addEventListener('input', (e) => {
                priceValue.textContent = `สูงสุด ${parseInt(e.target.value).toLocaleString()} ฿`;
                filterProducts();
            });

            sizeRange.addEventListener('input', (e) => {
                sizeValue.textContent = `สูงสุด ${parseFloat(e.target.value).toFixed(1)} cm`;
                filterProducts();
            });

            filterBtns.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    filterBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    activeCategory = btn.getAttribute('data-filter');
                    filterProducts();
                });
            });

            // Initial load
            filterProducts();
        });
    </script>


<?php include 'footer.php'; ?>
