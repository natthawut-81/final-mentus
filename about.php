<?php
$jsonData = file_exists('data/content.json') ? json_decode(file_get_contents('data/content.json'), true) : [];
$pageContent = $jsonData['about'] ?? '';
include 'header.php'; 
?>

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

    /* Tiptap Editor Styles */
    .editor-wrapper {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(212, 175, 55, 0.2);
        border-radius: 15px;
        padding: 20px;
        margin-bottom: 40px;
    }
    .tiptap {
        min-height: 200px;
        outline: none;
        color: rgba(255,255,255,0.85);
        font-size: 16px;
        line-height: 1.8;
    }
    .tiptap p {
        margin-bottom: 1em;
    }
    .tiptap strong {
        color: #d4af37;
    }
    .tiptap h1, .tiptap h2, .tiptap h3 {
        color: #d4af37;
        margin-top: 1.5em;
        margin-bottom: 0.5em;
    }
    
    .editor-toolbar {
        display: none; /* Hidden by default, shown via JS if localhost */
        gap: 10px;
        margin-bottom: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid rgba(212, 175, 55, 0.2);
        flex-wrap: wrap;
    }
    .editor-btn {
        background: transparent;
        border: 1px solid rgba(212, 175, 55, 0.5);
        color: #d4af37;
        border-radius: 5px;
        padding: 5px 12px;
        cursor: pointer;
        font-family: inherit;
        transition: 0.2s;
    }
    .editor-btn:hover, .editor-btn.is-active {
        background: #d4af37;
        color: #08140c;
    }
    
    #saveBtn {
        display: none; /* Shown via JS */
        margin-top: 15px;
        background: #d4af37;
        color: #08140c;
        border: none;
        padding: 8px 25px;
        border-radius: 20px;
        cursor: pointer;
        font-weight: bold;
    }
    #saveBtn:hover {
        background: #e6c55b;
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
            
            <div class="editor-wrapper">
                <div class="editor-toolbar" id="editorToolbar">
                    <button class="editor-btn" id="btnBold">B</button>
                    <button class="editor-btn" id="btnItalic">I</button>
                    <button class="editor-btn" id="btnH2">H2</button>
                    <button class="editor-btn" id="btnBullet">Bullet List</button>
                </div>
                
                <!-- Tiptap will mount here -->
                <div id="editor-container"></div>
                
                <button id="saveBtn">💾 บันทึกเนื้อหา (Save)</button>
            </div>
            
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


<script type="module">
    import { Editor } from 'https://esm.sh/@tiptap/core';
    import StarterKit from 'https://esm.sh/@tiptap/starter-kit';

    const isLocalhost = window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1';
    
    // PHP rendered JSON string
    const initialContent = <?php echo json_encode($pageContent); ?>;
    
    // Show tools only if localhost
    if (isLocalhost) {
        document.getElementById('editorToolbar').style.display = 'flex';
        document.getElementById('saveBtn').style.display = 'inline-block';
    }

    const editor = new Editor({
        element: document.querySelector('#editor-container'),
        extensions: [StarterKit],
        content: initialContent,
        editable: isLocalhost,
        onTransaction: () => {
            // Update active states
            document.getElementById('btnBold').classList.toggle('is-active', editor.isActive('bold'));
            document.getElementById('btnItalic').classList.toggle('is-active', editor.isActive('italic'));
            document.getElementById('btnH2').classList.toggle('is-active', editor.isActive('heading', { level: 2 }));
            document.getElementById('btnBullet').classList.toggle('is-active', editor.isActive('bulletList'));
        }
    });

    // Toolbar actions
    document.getElementById('btnBold').addEventListener('click', () => editor.chain().focus().toggleBold().run());
    document.getElementById('btnItalic').addEventListener('click', () => editor.chain().focus().toggleItalic().run());
    document.getElementById('btnH2').addEventListener('click', () => editor.chain().focus().toggleHeading({ level: 2 }).run());
    document.getElementById('btnBullet').addEventListener('click', () => editor.chain().focus().toggleBulletList().run());

    // Save action
    const saveBtn = document.getElementById('saveBtn');
    if (saveBtn) {
        saveBtn.addEventListener('click', () => {
            const html = editor.getHTML();
            saveBtn.textContent = 'กำลังบันทึก...';
            
            fetch('save_content.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ page: 'about', content: html })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    saveBtn.textContent = 'บันทึกสำเร็จ!';
                    setTimeout(() => saveBtn.textContent = '💾 บันทึกเนื้อหา (Save)', 2000);
                } else {
                    alert('Error: ' + data.error);
                    saveBtn.textContent = '💾 บันทึกเนื้อหา (Save)';
                }
            })
            .catch(err => {
                alert('Request failed');
                saveBtn.textContent = '💾 บันทึกเนื้อหา (Save)';
            });
        });
    }
</script>

<?php include 'footer.php'; ?>
