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

    
    /* Advanced Tiptap Editor Styles */
    .editor-wrapper {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(212, 175, 55, 0.2);
        border-radius: 15px;
        padding: 20px;
        margin-bottom: 40px;
    }
    .tiptap, .article-tiptap {
        min-height: 300px;
        outline: none;
        color: rgba(255,255,255,0.85);
        font-size: 16px;
        line-height: 1.8;
    }
    .tiptap p, .article-tiptap p {
        margin-bottom: 1em;
    }
    .tiptap strong, .article-tiptap strong {
        color: inherit;
        font-weight: bold;
    }
    .tiptap h1, .article-tiptap h1 {
        font-size: 32px;
        margin-top: 1.5em;
        margin-bottom: 0.5em;
        color: #d4af37;
    }
    .tiptap h2, .article-tiptap h2 {
        font-size: 26px;
        margin-top: 1.2em;
        margin-bottom: 0.5em;
        color: #d4af37;
        border-bottom: 1px solid rgba(212,175,55,0.2);
        padding-bottom: 8px;
    }
    .tiptap h3, .article-tiptap h3 {
        font-size: 20px;
        margin-top: 1em;
        margin-bottom: 0.5em;
        color: #e6c55b;
    }
    .tiptap ul, .article-tiptap ul {
        margin-left: 20px;
        margin-bottom: 1em;
        list-style-type: disc;
    }
    .tiptap ol, .article-tiptap ol {
        margin-left: 20px;
        margin-bottom: 1em;
        list-style-type: decimal;
    }
    .tiptap li, .article-tiptap li {
        margin-bottom: 5px;
    }
    .tiptap blockquote, .article-tiptap blockquote {
        border-left: 4px solid #d4af37;
        padding-left: 15px;
        margin-left: 0;
        font-style: italic;
        background: rgba(212, 175, 55, 0.05);
        padding: 10px 15px;
        border-radius: 0 8px 8px 0;
    }
    .tiptap img, .article-tiptap img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        display: block;
        margin: 15px auto;
    }
    .tiptap a, .article-tiptap a {
        color: #4caf50;
        text-decoration: underline;
    }
    
    .editor-toolbar {
        display: none; /* Hidden by default */
        gap: 15px;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 1px solid rgba(212, 175, 55, 0.2);
        flex-wrap: wrap;
    }
    .toolbar-group {
        display: flex;
        gap: 5px;
        background: rgba(0,0,0,0.2);
        padding: 5px;
        border-radius: 8px;
        border: 1px solid rgba(255,255,255,0.05);
        align-items: center;
    }
    .editor-btn {
        background: transparent;
        border: none;
        color: #d4af37;
        border-radius: 5px;
        padding: 6px 10px;
        cursor: pointer;
        font-family: inherit;
        font-size: 14px;
        transition: 0.2s;
    }
    .editor-btn:hover, .editor-btn.is-active {
        background: rgba(212, 175, 55, 0.2);
    }
    .color-picker-container {
        display: flex;
        align-items: center;
        gap: 5px;
        padding: 0 10px;
        color: #d4af37;
        font-size: 14px;
    }
    .color-picker-container input {
        width: 30px;
        height: 30px;
        padding: 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        background: transparent;
    }
    
    #saveBtn {
        display: none;
        margin-top: 20px;
        background: #d4af37;
        color: #08140c;
        border: none;
        padding: 12px 30px;
        border-radius: 25px;
        cursor: pointer;
        font-weight: bold;
        font-size: 16px;
        width: 100%;
        transition: 0.3s;
    }
    #saveBtn:hover {
        background: #e6c55b;
        transform: translateY(-2px);
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
                    <div class="toolbar-group">
                        <button class="editor-btn" id="btnBold" title="ตัวหนา"><b>B</b></button>
                        <button class="editor-btn" id="btnItalic" title="ตัวเอียง"><i>I</i></button>
                        <button class="editor-btn" id="btnUnderline" title="ขีดเส้นใต้"><u>U</u></button>
                        <button class="editor-btn" id="btnStrike" title="ขีดฆ่า"><s>S</s></button>
                    </div>
                    <div class="toolbar-group">
                        <button class="editor-btn" id="btnH1">H1</button>
                        <button class="editor-btn" id="btnH2">H2</button>
                        <button class="editor-btn" id="btnH3">H3</button>
                    </div>
                    <div class="toolbar-group">
                        <button class="editor-btn" id="btnAlignLeft" title="ชิดซ้าย">⬅️</button>
                        <button class="editor-btn" id="btnAlignCenter" title="กึ่งกลาง">↔️</button>
                        <button class="editor-btn" id="btnAlignRight" title="ชิดขวา">➡️</button>
                    </div>
                    <div class="toolbar-group">
                        <button class="editor-btn" id="btnBullet" title="รายการแบบจุด">● List</button>
                        <button class="editor-btn" id="btnOrdered" title="รายการแบบตัวเลข">1. List</button>
                        <button class="editor-btn" id="btnQuote" title="อ้างอิง">❝ Quote</button>
                    </div>
                    <div class="toolbar-group">
                        <button class="editor-btn" id="btnLink" title="แทรกลิงก์">🔗 ลิงก์</button>
                        <button class="editor-btn" id="btnImage" title="แทรกรูปภาพ">🖼️ รูปภาพ</button>
                        <div class="color-picker-container" title="สีตัวอักษร">
                            🎨 <input type="color" id="colorPicker" value="#ffffff">
                        </div>
                    </div>
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
    import { Editor } from 'https://esm.sh/@tiptap/core@2.2.4';
    import StarterKit from 'https://esm.sh/@tiptap/starter-kit@2.2.4';
    import Underline from 'https://esm.sh/@tiptap/extension-underline@2.2.4';
    import TextAlign from 'https://esm.sh/@tiptap/extension-text-align@2.2.4';
    import Link from 'https://esm.sh/@tiptap/extension-link@2.2.4';
    import Image from 'https://esm.sh/@tiptap/extension-image@2.2.4';
    import TextStyle from 'https://esm.sh/@tiptap/extension-text-style@2.2.4';
    import Color from 'https://esm.sh/@tiptap/extension-color@2.2.4';

    const isLocalhost = window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1';
    const initialContent = <?php echo json_encode($pageContent); ?>;
    
    if (isLocalhost) {
        document.getElementById('editorToolbar').style.display = 'flex';
        document.getElementById('saveBtn').style.display = 'block';
    }

    const editor = new Editor({
        element: document.querySelector('#editor-container'),
        extensions: [
            StarterKit,
            Underline,
            TextAlign.configure({ types: ['heading', 'paragraph'] }),
            Link.configure({ openOnClick: false }),
            Image,
            TextStyle,
            Color
        ],
        content: initialContent,
        editable: isLocalhost,
        onTransaction: () => {
            // Update active states
            document.getElementById('btnBold').classList.toggle('is-active', editor.isActive('bold'));
            document.getElementById('btnItalic').classList.toggle('is-active', editor.isActive('italic'));
            document.getElementById('btnUnderline').classList.toggle('is-active', editor.isActive('underline'));
            document.getElementById('btnStrike').classList.toggle('is-active', editor.isActive('strike'));
            document.getElementById('btnH1').classList.toggle('is-active', editor.isActive('heading', { level: 1 }));
            document.getElementById('btnH2').classList.toggle('is-active', editor.isActive('heading', { level: 2 }));
            document.getElementById('btnH3').classList.toggle('is-active', editor.isActive('heading', { level: 3 }));
            document.getElementById('btnAlignLeft').classList.toggle('is-active', editor.isActive({ textAlign: 'left' }));
            document.getElementById('btnAlignCenter').classList.toggle('is-active', editor.isActive({ textAlign: 'center' }));
            document.getElementById('btnAlignRight').classList.toggle('is-active', editor.isActive({ textAlign: 'right' }));
            document.getElementById('btnBullet').classList.toggle('is-active', editor.isActive('bulletList'));
            document.getElementById('btnOrdered').classList.toggle('is-active', editor.isActive('orderedList'));
            document.getElementById('btnQuote').classList.toggle('is-active', editor.isActive('blockquote'));
            document.getElementById('btnLink').classList.toggle('is-active', editor.isActive('link'));
        }
    });

    // Toolbar actions
    document.getElementById('btnBold').addEventListener('click', () => editor.chain().focus().toggleBold().run());
    document.getElementById('btnItalic').addEventListener('click', () => editor.chain().focus().toggleItalic().run());
    document.getElementById('btnUnderline').addEventListener('click', () => editor.chain().focus().toggleUnderline().run());
    document.getElementById('btnStrike').addEventListener('click', () => editor.chain().focus().toggleStrike().run());
    
    document.getElementById('btnH1').addEventListener('click', () => editor.chain().focus().toggleHeading({ level: 1 }).run());
    document.getElementById('btnH2').addEventListener('click', () => editor.chain().focus().toggleHeading({ level: 2 }).run());
    document.getElementById('btnH3').addEventListener('click', () => editor.chain().focus().toggleHeading({ level: 3 }).run());
    
    document.getElementById('btnAlignLeft').addEventListener('click', () => editor.chain().focus().setTextAlign('left').run());
    document.getElementById('btnAlignCenter').addEventListener('click', () => editor.chain().focus().setTextAlign('center').run());
    document.getElementById('btnAlignRight').addEventListener('click', () => editor.chain().focus().setTextAlign('right').run());
    
    document.getElementById('btnBullet').addEventListener('click', () => editor.chain().focus().toggleBulletList().run());
    document.getElementById('btnOrdered').addEventListener('click', () => editor.chain().focus().toggleOrderedList().run());
    document.getElementById('btnQuote').addEventListener('click', () => editor.chain().focus().toggleBlockquote().run());
    
    document.getElementById('btnLink').addEventListener('click', () => {
        const previousUrl = editor.getAttributes('link').href
        const url = window.prompt('URL:', previousUrl)
        if (url === null) return
        if (url === '') {
            editor.chain().focus().extendMarkRange('link').unsetLink().run()
            return
        }
        editor.chain().focus().extendMarkRange('link').setLink({ href: url }).run()
    });
    
    document.getElementById('btnImage').addEventListener('click', () => {
        const url = window.prompt('URL รูปภาพ (Image URL):')
        if (url) {
            editor.chain().focus().setImage({ src: url }).run()
        }
    });
    
    document.getElementById('colorPicker').addEventListener('input', (e) => {
        editor.chain().focus().setColor(e.target.value).run();
    });

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
