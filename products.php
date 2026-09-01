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
    ["title" => "ยิมโนคริสไร้หนามด่าง", "img" => "photo/stock1.png", "price" => "1,250", "category" => "gymno", "raw_price" => 1250, "size" => 13], 
    ["title" => "ยิมโนลูกมังคุดด่าง", "img" => "photo/stock2.png", "price" => "1,350", "category" => "gymno", "raw_price" => 1350, "size" => 4], 
    ["title" => "ยิมโนลูกมังคุด", "img" => "photo/stock3.png", "price" => "1,450", "category" => "gymno", "raw_price" => 1450, "size" => 3], 
    ["title" => "ยิมโนโนคริส", "img" => "photo/stock4.png", "price" => "350", "category" => "gymno", "raw_price" => 350, "size" => 14], 
    ["title" => "ยิมโนคริสไร้หนามด่าง", "img" => "photo/stock5.png", "price" => "500", "category" => "gymno", "raw_price" => 500, "size" => 7], 
    ["title" => "ยิมโนลูกมังคุดด่าง", "img" => "photo/stock6.png", "price" => "3,500", "category" => "gymno", "raw_price" => 3500, "size" => 6], 
    ["title" => "ยิมโนคริสไร้หนามด่าง", "img" => "photo/stock7.png", "price" => "1,590", "category" => "gymno", "raw_price" => 1590, "size" => 6], 
    ["title" => "ยิมโนลูกมังคุดด่าง", "img" => "photo/stock8.png", "price" => "2,300", "category" => "gymno", "raw_price" => 2300, "size" => 5], 
    ["title" => "ยิมโนคริสไร้หนามด่าง", "img" => "photo/stock9.png", "price" => "2,900", "category" => "gymno", "raw_price" => 2900, "size" => 14], 
    ["title" => "ยิมโนคริสไร้หนามด่าง", "img" => "photo/stock10.png", "price" => "1,990", "category" => "gymno", "raw_price" => 1990, "size" => 4], 
    ["title" => "ยิมโนคริสไร้หนาม", "img" => "photo/stock11.png", "price" => "2,500", "category" => "gymno", "raw_price" => 2500, "size" => 13], 
    ["title" => "ยิมโนLB Hybridด่าง", "img" => "photo/stock12.png", "price" => "899", "category" => "gymno", "raw_price" => 899, "size" => 14], 
    ["title" => "ยิมโนคริสไร้หนามด่าง", "img" => "photo/stock13.png", "price" => "699", "category" => "gymno", "raw_price" => 699, "size" => 11], 
    ["title" => "ยิมโนพิงค์ไดมอน", "img" => "photo/stock14.png", "price" => "1,500", "category" => "gymno", "raw_price" => 1500, "size" => 4], 
    ["title" => "แอสโตรไฟตัมแอสทีเรียส วา นูดัม", "img" => "photo/as1.png", "price" => "500", "category" => "astrophytum", "raw_price" => 500, "size" => 12], 
    ["title" => "แอสโตรไฟตัมแอสทีเรียส “Super” ซุปเปอร์", "img" => "photo/as2.png", "price" => "650", "category" => "astrophytum", "raw_price" => 650, "size" => 9], 
    ["title" => "แอสโตรไฟตัมแอสทีเรียส “Star-shape” สตาร์เชฟ", "img" => "photo/as3.png", "price" => "450", "category" => "astrophytum", "raw_price" => 450, "size" => 3], 
    ["title" => "แอสโตรไฟตัมแอสทีเรียส “Kikko” กิ๊ก-โก๊ะ", "img" => "photo/as4.png", "price" => "850", "category" => "astrophytum", "raw_price" => 850, "size" => 3], 
    ["title" => "แอสโตรไฟตัมแอสทีเรียส “Kabuto”คาบูโตะ", "img" => "photo/as5.png", "price" => "350", "category" => "astrophytum", "raw_price" => 350, "size" => 4], 
    ["title" => "เเมมขนนกขาว", "img" => "photo/mam1.png", "price" => "50", "category" => "mammillaria", "raw_price" => 50, "size" => 6], 
    ["title" => "เเมมขนเเมว", "img" => "photo/mam2.png", "price" => "50", "category" => "mammillaria", "raw_price" => 50, "size" => 8]
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

    /* Sidebar Layout */
    .products-layout {
        display: flex;
        gap: 40px;
        align-items: flex-start;
        margin-bottom: 50px;
    }
    .sidebar-filter {
        flex: 0 0 280px;
        background: #08140c;
        border: 1px solid #d4af37;
        border-radius: 15px;
        padding: 20px; /* Reduced padding */
        /* Removed position: sticky so it scrolls normally */
    }
    .sidebar-filter h3 {
        color: #d4af37;
        margin-bottom: 15px; /* Reduced from 25px */
        font-size: 24px;
        border-bottom: 1px solid rgba(212,175,55,0.3);
        padding-bottom: 10px; /* Reduced from 15px */
        font-family: 'Itim', cursive;
    }
    .filter-group {
        margin-bottom: 15px; /* Reduced from 25px */
    }
    .filter-group label.group-title {
        display: block;
        color: white;
        margin-bottom: 15px;
        font-size: 18px;
        font-weight: bold;
    }
    .filter-group input[type="text"] {
        width: 100%;
        padding: 12px 15px;
        border-radius: 8px;
        border: 1px solid rgba(212,175,55,0.5);
        background: rgba(255,255,255,0.05);
        color: white;
        font-family: inherit;
    }
    .filter-radio {
        display: flex !important;
        align-items: center;
        gap: 10px;
        color: rgba(255,255,255,0.8) !important;
        cursor: pointer;
        font-size: 16px !important;
        margin-bottom: 12px !important;
        font-weight: normal !important;
    }
    .filter-radio input {
        accent-color: #d4af37;
        width: 18px;
        height: 18px;
    }
    /* Custom Range Slider */
    input[type=range] {
        -webkit-appearance: none;
        width: 100%;
        height: 6px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 3px;
        outline: none;
        margin: 10px 0;
    }
    input[type=range]::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: #d4af37;
        cursor: pointer;
        transition: transform 0.1s;
    }
    input[type=range]::-webkit-slider-thumb:hover {
        transform: scale(1.2);
    }
    input[type=range]::-moz-range-thumb {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: #d4af37;
        cursor: pointer;
        border: none;
    }
    .range-labels {
        display: flex;
        justify-content: space-between;
        color: rgba(255,255,255,0.6);
        font-size: 14px;
        margin-top: 5px;
    }
    .product-grid {
        flex: 1;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }
    .size-tag {
        display: inline-block;
        background: rgba(212,175,55,0.2);
        color: #d4af37;
        padding: 3px 10px;
        border-radius: 12px;
        font-size: 12px;
        margin-top: 5px;
    }
    
    @media (max-width: 992px) {
        .products-layout {
            flex-direction: column;
        }
        .sidebar-filter {
            width: 100%;
            position: relative;
            top: 0;
        }
        .product-grid {
            grid-template-columns: repeat(2, 1fr);
            width: 100%;
        }
    }
    @media (max-width: 768px) {
        .product-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }
        .product-card h3 {
            font-size: 14px;
        }
        .product-card .gold-text {
            font-size: 14px !important;
        }
        .size-tag {
            font-size: 10px;
            padding: 2px 6px;
        }
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

        
        <!-- All Products Heading -->
        <h2 style="text-align: center; color: white; font-size: 36px; margin-bottom: 40px;" class="fade-in">สินค้าทั้งหมด</h2>
        
        <div class="products-layout fade-in delay-1">
            <!-- Sidebar -->
            <aside class="sidebar-filter">
                <h3>ตัวกรองสินค้า</h3>
                
                <div class="filter-group">
                    <label class="group-title">🔍 ค้นหาสินค้า</label>
                    <input type="text" id="searchInput" placeholder="พิมพ์ชื่อเพื่อค้นหา...">
                </div>
                
                <div class="filter-group">
                    <label class="group-title">🌵 หมวดหมู่</label>
                    <label class="filter-radio"><input type="radio" name="category" value="all" checked> ทั้งหมด</label>
                    <label class="filter-radio"><input type="radio" name="category" value="gymno"> ยิมโน</label>
                    <label class="filter-radio"><input type="radio" name="category" value="mammillaria"> แมมมิลาเรีย</label>
                    <label class="filter-radio"><input type="radio" name="category" value="astrophytum"> แอสโตรไฟตัม</label>
                </div>
                
                <div class="filter-group">
                    <label class="group-title">💰 ราคาสูงสุด: <span id="priceVal" class="gold-text">3500</span> บาท</label>
                    <input type="range" id="priceRange" min="0" max="3500" value="3500" step="50">
                    <div class="range-labels"><span>0</span><span>3,500</span></div>
                </div>
                
                <div class="filter-group">
                    <label class="group-title">📏 ขนาดสูงสุด: <span id="sizeVal" class="gold-text">15</span> cm</label>
                    <input type="range" id="sizeRange" min="0" max="15" value="15" step="1">
                    <div class="range-labels"><span>0 cm</span><span>15 cm</span></div>
                </div>
            </aside>

            <!-- Main Grid -->
            <div class="product-grid" id="productGrid">
                <?php foreach($grid_products as $prod): ?>
                <div class="product-card product-item" 
                     data-category="<?= $prod['category'] ?>" 
                     data-price="<?= str_replace(',', '', $prod['price']) ?>" 
                     data-size="<?= $prod['size'] ?>" 
                     data-title="<?= strtolower($prod['title']) ?>">
                    <img src="<?= $prod['img'] ?>" alt="<?= $prod['title'] ?>">
                    <h3><?= $prod['title'] ?></h3>
                    <?php if(isset($prod['price'])): ?>
                    <p class="gold-text" style="margin-top: 5px; font-weight: bold; font-size: 18px;">ราคา <?= $prod['price'] ?> บาท</p>
                    <div class="size-tag">ขนาด <?= $prod['size'] ?> cm</div>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
                
                <div id="noResult" style="display:none; grid-column: 1 / -1; text-align: center; color: white; padding: 40px;">
                    <div style="font-size: 48px; margin-bottom: 15px;">🌵</div>
                    <h3 style="color: #d4af37;">ไม่พบสินค้าที่ค้นหา</h3>
                    <p style="opacity: 0.7;">ลองปรับเปลี่ยนตัวกรองใหม่อีกครั้ง</p>
                </div>
            </div>
        </div>

    </section>

    
    <!-- Advanced Filter Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const searchInput = document.getElementById('searchInput');
            const priceRange = document.getElementById('priceRange');
            const priceValue = document.getElementById('priceVal');
            const sizeRange = document.getElementById('sizeRange');
            const sizeValue = document.getElementById('sizeVal');
            const categoryRadios = document.querySelectorAll('input[name="category"]');
            const productCards = Array.from(document.querySelectorAll('.product-item'));
            const noResult = document.getElementById('noResult');
            
            let activeCategory = 'all';
            
            // Function to update the slider background to show progress
            function updateSliderProgress(slider) {
                const val = (slider.value - slider.min) / (slider.max - slider.min) * 100;
                slider.style.background = `linear-gradient(to right, #d4af37 0%, #d4af37 ${val}%, rgba(255, 255, 255, 0.2) ${val}%, rgba(255, 255, 255, 0.2) 100%)`;
            }

            function filterProducts() {
                const searchTerm = searchInput.value.toLowerCase();
                const maxPrice = parseInt(priceRange.value);
                const maxSize = parseFloat(sizeRange.value);
                
                let visibleCount = 0;

                productCards.forEach(card => {
                    const title = card.getAttribute('data-title');
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
                
                if (visibleCount === 0) {
                    noResult.style.display = 'block';
                } else {
                    noResult.style.display = 'none';
                }
            }

            // Event Listeners
            searchInput.addEventListener('input', filterProducts);
            
            priceRange.addEventListener('input', (e) => {
                priceValue.textContent = parseInt(e.target.value).toLocaleString();
                updateSliderProgress(e.target);
                filterProducts();
            });

            sizeRange.addEventListener('input', (e) => {
                sizeValue.textContent = parseFloat(e.target.value).toFixed(1);
                updateSliderProgress(e.target);
                filterProducts();
            });

            categoryRadios.forEach(radio => {
                radio.addEventListener('change', (e) => {
                    if (e.target.checked) {
                        activeCategory = e.target.value;
                        filterProducts();
                    }
                });
            });

            // Initial load
            updateSliderProgress(priceRange);
            updateSliderProgress(sizeRange);
            filterProducts();
        });
    </script>


<?php include 'footer.php'; ?>
