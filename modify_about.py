import re

with open('about.php', 'r', encoding='utf-8') as f:
    content = f.read()

# 1. Add PHP to load JSON
php_header = """<?php
$jsonData = file_exists('data/content.json') ? json_decode(file_get_contents('data/content.json'), true) : [];
$pageContent = $jsonData['about'] ?? '';
include 'header.php'; 
?>"""
content = content.replace("<?php include 'header.php'; ?>", php_header)

# 2. Add Editor CSS
css_to_add = """
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
"""
content = content.replace("</style>", css_to_add + "\n</style>")

# 3. Replace the 4 paragraphs with Tiptap container
# The paragraphs are between `<div class="about-content fade-in delay-3">` and `<div class="name-origin-card">`
# We'll use regex to replace it
html_replacement = """
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
"""

content = re.sub(r'<div class="about-content fade-in delay-3">.*?<div class="name-origin-card">', html_replacement, content, flags=re.DOTALL)

# 4. Add Tiptap Script
script_code = """
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
"""

content = content.replace("<?php include 'footer.php'; ?>", script_code + "\n<?php include 'footer.php'; ?>")

with open('about.php', 'w', encoding='utf-8') as f:
    f.write(content)

