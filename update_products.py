import re
import random

with open('products.php', 'r', encoding='utf-8') as f:
    content = f.read()

# 1. Update the PHP grid_products array
def update_product_line(match):
    line = match.group(0)
    # Extract price
    price_match = re.search(r'"price"\s*=>\s*"([^"]+)"', line)
    if price_match:
        price_str = price_match.group(1).replace(',', '')
        price_int = int(price_str)
    else:
        price_int = 0
    
    # Generate random size (e.g. 2.0 to 15.0)
    size = round(random.uniform(2.0, 15.0), 1)
    
    # Add raw_price and size
    return line.rstrip('], ') + f', "raw_price" => {price_int}, "size" => {size}], '

# The grid_products array lines look like: ["title" => "...", "img" => "...", "price" => "...", "category" => "..."],
content = re.sub(r'\["title"\s*=>[^\]]+\],', update_product_line, content)

# Remove the trailing comma from the last element just in case it was there, but the regex is fine since PHP arrays don't care about trailing commas.
# Wait, let's fix the last element which might not have a comma
content = re.sub(r'\["title"\s*=>[^\]]+\]\s*\n\];', lambda m: update_product_line(m).rstrip(', ') + '\n];', content)

# 2. Add the Filter UI HTML and CSS
new_css = """
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
"""
content = content.replace("    /* Filter Buttons */", new_css + "\n    /* Filter Buttons */")

filter_html = """
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
"""

# Replace the old filters
content = re.sub(r'<div class="category-filters fade-in delay-1">.*?</div>', filter_html, content, flags=re.DOTALL)

# Add data attributes to the product cards
content = content.replace(
    '<div class="product-card product-item" data-category="<?= $prod[\'category\'] ?>">',
    '<div class="product-card product-item" data-category="<?= $prod[\'category\'] ?>" data-price="<?= $prod[\'raw_price\'] ?>" data-size="<?= $prod[\'size\'] ?>">'
)
# And show the size
content = content.replace(
    '<h3><?= $prod[\'title\'] ?></h3>',
    '<h3><?= $prod[\'title\'] ?></h3>\n                <p style="font-size: 14px; color: rgba(255,255,255,0.7); margin-top: 5px;">ขนาด: <?= $prod[\'size\'] ?> cm</p>'
)

# 3. Replace the JS
new_js = """
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
"""
content = re.sub(r'<!-- Filter Script -->.*?</script>', new_js, content, flags=re.DOTALL)

with open('products.php', 'w', encoding='utf-8') as f:
    f.write(content)

print("Done")
