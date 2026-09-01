import re

with open('products.php', 'r', encoding='utf-8') as f:
    content = f.read()

# 1. Add size to grid_products
import random
random.seed(42)

def add_size(match):
    size = random.randint(3, 15)
    return match.group(1) + f', "size" => "{size}"]'

content = re.sub(r'(\["title"[^\]]+)\]', add_size, content)

# 2. Add CSS
css_to_add = """
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
        padding: 25px;
        position: sticky;
        top: 100px;
    }
    .sidebar-filter h3 {
        color: #d4af37;
        margin-bottom: 25px;
        font-size: 24px;
        border-bottom: 1px solid rgba(212,175,55,0.3);
        padding-bottom: 15px;
        font-family: 'Itim', cursive;
    }
    .filter-group {
        margin-bottom: 25px;
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
    input[type=range] {
        width: 100%;
        accent-color: #d4af37;
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
            grid-template-columns: 1fr;
        }
    }
"""

# Inject CSS before </style>
content = content.replace("</style>", css_to_add + "\n</style>")

# 3. Replace HTML & JS
new_html = """
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
"""

new_script = """
    <!-- Filter Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const searchInput = document.getElementById('searchInput');
            const catRadios = document.querySelectorAll('input[name="category"]');
            const priceRange = document.getElementById('priceRange');
            const priceVal = document.getElementById('priceVal');
            const sizeRange = document.getElementById('sizeRange');
            const sizeVal = document.getElementById('sizeVal');
            const productCards = Array.from(document.querySelectorAll('.product-item'));
            const noResult = document.getElementById('noResult');

            function applyFilters() {
                const search = searchInput.value.toLowerCase();
                const category = document.querySelector('input[name="category"]:checked').value;
                const maxPrice = parseInt(priceRange.value);
                const maxSize = parseInt(sizeRange.value);
                
                let visibleCount = 0;

                productCards.forEach(card => {
                    const title = card.getAttribute('data-title');
                    const cat = card.getAttribute('data-category');
                    const price = parseInt(card.getAttribute('data-price'));
                    const size = parseInt(card.getAttribute('data-size'));
                    
                    const matchSearch = title.includes(search);
                    const matchCategory = (category === 'all' || cat === category);
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
            searchInput.addEventListener('input', applyFilters);
            catRadios.forEach(radio => radio.addEventListener('change', applyFilters));
            
            priceRange.addEventListener('input', (e) => {
                priceVal.textContent = e.target.value;
                applyFilters();
            });
            
            sizeRange.addEventListener('input', (e) => {
                sizeVal.textContent = e.target.value;
                applyFilters();
            });
            
            // Initial run to apply defaults
            applyFilters();
        });
    </script>
"""

# We need to replace the old HTML from "<!-- All Products Heading and Filters -->" to "</section>"
# with the new_html, and the old script with new_script.

html_pattern = re.compile(r'<!-- All Products Heading and Filters -->.*?</section>', re.DOTALL)
content = html_pattern.sub(new_html + "\n    </section>", content)

script_pattern = re.compile(r'<!-- Filter Script -->.*?</script>', re.DOTALL)
content = script_pattern.sub(new_script.strip(), content)

with open('products.php', 'w', encoding='utf-8') as f:
    f.write(content)

