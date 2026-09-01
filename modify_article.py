import re

with open('article.php', 'r', encoding='utf-8') as f:
    content = f.read()

# 1. Remove the $articles array and add JSON load
# We replace from <?php to include 'header.php'; ?>
php_header = """<?php
$jsonData = file_exists('data/content.json') ? json_decode(file_get_contents('data/content.json'), true) : [];
$pageContent = $jsonData['article'] ?? '';
include 'header.php';
?>"""
content = re.sub(r'<\?php.*?include \'header\.php\';\s*\?>', php_header, content, flags=re.DOTALL)

# 2. Replace .timeline-container with Tiptap container
html_replacement = """
    <div class="article-content-container fade-in delay-2">
        <div class="editor-wrapper">
            <div class="editor-toolbar" id="editorToolbar">
                <button class="editor-btn" id="btnBold">B</button>
                <button class="editor-btn" id="btnItalic">I</button>
                <button class="editor-btn" id="btnH2">หัวข้อ (H2)</button>
                <button class="editor-btn" id="btnBullet">รายการ (Bullet)</button>
            </div>
            
            <div id="editor-container" class="article-tiptap"></div>
            
            <button id="saveBtn">💾 บันทึกเนื้อหา (Save)</button>
        </div>
    </div>
"""
content = re.sub(r'<div class="timeline-container">.*?</div>\s*</section>', html_replacement + "\n</section>", content, flags=re.DOTALL)

# 3. CSS for Tiptap
css_to_add = """
    .article-content-container {
        max-width: 800px;
        margin: 0 auto 80px auto;
        padding: 0 20px;
    }
    .editor-wrapper {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(212, 175, 55, 0.2);
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    }
    
    .article-tiptap {
        min-height: 400px;
        outline: none;
        color: rgba(255,255,255,0.85);
        font-size: 18px;
        line-height: 1.8;
    }
    .article-tiptap h2 {
        color: #d4af37;
        font-size: 28px;
        margin-top: 40px;
        margin-bottom: 15px;
        border-bottom: 1px solid rgba(212,175,55,0.2);
        padding-bottom: 10px;
    }
    .article-tiptap h2:first-child {
        margin-top: 0;
    }
    .article-tiptap p {
        margin-bottom: 20px;
    }
    .article-tiptap ul {
        margin-left: 20px;
        margin-bottom: 20px;
    }
    .article-tiptap li {
        margin-bottom: 10px;
    }
    .article-tiptap strong {
        color: #d4af37;
    }
    
    .editor-toolbar {
        display: none;
        gap: 10px;
        margin-bottom: 30px;
        padding-bottom: 15px;
        border-bottom: 1px solid rgba(212, 175, 55, 0.3);
        flex-wrap: wrap;
    }
    .editor-btn {
        background: transparent;
        border: 1px solid rgba(212, 175, 55, 0.5);
        color: #d4af37;
        border-radius: 5px;
        padding: 5px 15px;
        cursor: pointer;
        font-family: inherit;
        font-size: 14px;
        transition: 0.2s;
    }
    .editor-btn:hover, .editor-btn.is-active {
        background: #d4af37;
        color: #08140c;
    }
    #saveBtn {
        display: none;
        margin-top: 30px;
        background: #d4af37;
        color: #08140c;
        border: none;
        padding: 12px 30px;
        border-radius: 25px;
        cursor: pointer;
        font-weight: bold;
        font-size: 16px;
        width: 100%;
    }
    #saveBtn:hover {
        background: #e6c55b;
    }
"""
content = content.replace("</style>", css_to_add + "\n</style>")

# 4. JS for Tiptap
script_code = """
<script type="module">
    import { Editor } from 'https://esm.sh/@tiptap/core';
    import StarterKit from 'https://esm.sh/@tiptap/starter-kit';

    const isLocalhost = window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1';
    const initialContent = <?php echo json_encode($pageContent); ?>;
    
    if (isLocalhost) {
        document.getElementById('editorToolbar').style.display = 'flex';
        document.getElementById('saveBtn').style.display = 'block';
    }

    const editor = new Editor({
        element: document.querySelector('#editor-container'),
        extensions: [StarterKit],
        content: initialContent,
        editable: isLocalhost,
        onTransaction: () => {
            document.getElementById('btnBold').classList.toggle('is-active', editor.isActive('bold'));
            document.getElementById('btnItalic').classList.toggle('is-active', editor.isActive('italic'));
            document.getElementById('btnH2').classList.toggle('is-active', editor.isActive('heading', { level: 2 }));
            document.getElementById('btnBullet').classList.toggle('is-active', editor.isActive('bulletList'));
        }
    });

    document.getElementById('btnBold').addEventListener('click', () => editor.chain().focus().toggleBold().run());
    document.getElementById('btnItalic').addEventListener('click', () => editor.chain().focus().toggleItalic().run());
    document.getElementById('btnH2').addEventListener('click', () => editor.chain().focus().toggleHeading({ level: 2 }).run());
    document.getElementById('btnBullet').addEventListener('click', () => editor.chain().focus().toggleBulletList().run());

    const saveBtn = document.getElementById('saveBtn');
    if (saveBtn) {
        saveBtn.addEventListener('click', () => {
            const html = editor.getHTML();
            saveBtn.textContent = 'กำลังบันทึก...';
            
            fetch('save_content.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ page: 'article', content: html })
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
"""
content = content.replace("<?php include 'footer.php'; ?>", script_code + "\n<?php include 'footer.php'; ?>")

with open('article.php', 'w', encoding='utf-8') as f:
    f.write(content)
