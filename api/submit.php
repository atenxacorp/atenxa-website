<?php include __DIR__ . '/header.php'; ?>

<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

.submit-wrap {
    min-height: 100vh;
    padding: 120px 24px 80px;
    display: flex;
    align-items: flex-start;
    justify-content: center;
}

.submit-card {
    width: 100%;
    max-width: 680px;
}

.submit-eyebrow {
    color: #7dd3fc;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    margin-bottom: 14px;
}

.submit-title {
    font-family: 'Cabinet Grotesk', sans-serif;
    font-size: clamp(32px, 5vw, 52px);
    font-weight: 800;
    letter-spacing: -0.05em;
    line-height: 1.05;
    margin-bottom: 14px;
    color: #f3f4f6;
}

.submit-title em {
    font-style: normal;
    color: #7dd3fc;
}

.submit-sub {
    color: #9ca3af;
    font-size: 16px;
    line-height: 1.8;
    margin-bottom: 40px;
}

/* FORM */
.form-box {
    background: #111114;
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 28px;
    padding: 40px;
}

.form-group {
    margin-bottom: 24px;
}

.form-label {
    display: block;
    color: #9ca3af;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 8px;
}

.form-label .required {
    color: #7dd3fc;
    margin-left: 2px;
}

.form-input,
.form-select,
.form-textarea {
    width: 100%;
    background: #18181c;
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 12px;
    padding: 14px 18px;
    color: #f3f4f6;
    font-family: 'Inter', sans-serif;
    font-size: 15px;
    outline: none;
    transition: border-color .2s;
    appearance: none;
    -webkit-appearance: none;
}

.form-input:focus,
.form-select:focus,
.form-textarea:focus {
    border-color: rgba(125,211,252,0.4);
}

.form-input::placeholder,
.form-textarea::placeholder {
    color: #4b5563;
}

.form-textarea {
    resize: vertical;
    min-height: 100px;
    line-height: 1.6;
}

/* SELECT WRAPPER */
.select-wrap {
    position: relative;
}

.select-wrap::after {
    content: '▾';
    position: absolute;
    right: 18px;
    top: 50%;
    transform: translateY(-50%);
    color: #6b7280;
    pointer-events: none;
    font-size: 14px;
}

.form-select option {
    background: #18181c;
    color: #f3f4f6;
}

/* FILE UPLOAD */
.file-upload-wrap {
    position: relative;
}

.file-upload-input {
    position: absolute;
    inset: 0;
    opacity: 0;
    cursor: pointer;
    width: 100%;
    height: 100%;
}

.file-upload-box {
    background: #18181c;
    border: 1.5px dashed rgba(125,211,252,0.2);
    border-radius: 12px;
    padding: 32px 24px;
    text-align: center;
    transition: border-color .2s, background .2s;
    cursor: pointer;
}

.file-upload-box:hover {
    border-color: rgba(125,211,252,0.4);
    background: rgba(125,211,252,0.04);
}

.file-upload-icon {
    font-size: 32px;
    margin-bottom: 10px;
}

.file-upload-text {
    color: #9ca3af;
    font-size: 14px;
    line-height: 1.6;
}

.file-upload-text strong {
    color: #7dd3fc;
}

.file-upload-hint {
    color: #6b7280;
    font-size: 12px;
    margin-top: 6px;
}

.file-name-display {
    margin-top: 10px;
    color: #7dd3fc;
    font-size: 13px;
    display: none;
}

/* CHECKBOX */
.checkbox-wrap {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    cursor: pointer;
}

.checkbox-wrap input[type="checkbox"] {
    width: 18px;
    height: 18px;
    min-width: 18px;
    margin-top: 2px;
    accent-color: #7dd3fc;
    cursor: pointer;
}

.checkbox-label {
    color: #9ca3af;
    font-size: 13px;
    line-height: 1.6;
}

/* DIVIDER */
.form-divider {
    border: none;
    border-top: 1px solid rgba(255,255,255,0.06);
    margin: 32px 0;
}

/* SUBMIT BTN */
.btn-submit {
    width: 100%;
    background: #7dd3fc;
    color: #060606;
    border: none;
    border-radius: 14px;
    padding: 16px 28px;
    font-family: 'Inter', sans-serif;
    font-size: 16px;
    font-weight: 700;
    cursor: pointer;
    transition: opacity .2s, transform .15s;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

.btn-submit:hover {
    opacity: .9;
    transform: translateY(-1px);
}

.btn-submit:disabled {
    opacity: .5;
    cursor: not-allowed;
    transform: none;
}

/* PROGRESS */
.upload-progress {
    display: none;
    margin-top: 16px;
}

.progress-bar-wrap {
    background: #18181c;
    border-radius: 999px;
    height: 6px;
    overflow: hidden;
    margin-bottom: 8px;
}

.progress-bar-fill {
    height: 6px;
    background: #7dd3fc;
    border-radius: 999px;
    width: 0%;
    transition: width .3s;
    animation: progress-pulse 1.5s infinite;
}

@keyframes progress-pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.6; }
}

.progress-text {
    color: #9ca3af;
    font-size: 13px;
    text-align: center;
}

/* FREE BADGE */
.free-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(125,211,252,0.08);
    border: 1px solid rgba(125,211,252,0.2);
    border-radius: 999px;
    padding: 6px 14px;
    color: #7dd3fc;
    font-size: 12px;
    font-weight: 600;
    margin-bottom: 32px;
}

.free-badge::before {
    content: '';
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #7dd3fc;
    box-shadow: 0 0 8px rgba(125,211,252,0.8);
    animation: blink 2s infinite;
}

@keyframes blink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.3; }
}

@media (max-width: 640px) {
    .form-box { padding: 28px 20px; }
    .submit-wrap { padding: 100px 16px 60px; }
}
</style>

<div class="submit-wrap">
    <div class="submit-card">

        <div class="submit-eyebrow">Attention Intelligence Submission</div>

        <h1 class="submit-title">
            Submit Your Video
        </h1>

        <p class="submit-sub">
            Upload your TikTok, Reel, or YouTube Short and receive a full behavioral
            attention analysis before you publish.
        </p>

        <div class="free-badge">First analysis is free</div>

        <div class="form-box">
            <form
                id="atenxaForm"
                action="/upload.php"
                method="POST"
                enctype="multipart/form-data"
            >
                <!-- NAME -->
                <div class="form-group">
                    <label class="form-label">
                        Your Name <span class="required">*</span>
                    </label>
                    <input
                        class="form-input"
                        type="text"
                        name="name"
                        placeholder="John Doe"
                        required
                    />
                </div>

                <!-- EMAIL -->
                <div class="form-group">
                    <label class="form-label">
                        Email Address <span class="required">*</span>
                    </label>
                    <input
                        class="form-input"
                        type="email"
                        name="email"
                        placeholder="you@email.com"
                        required
                    />
                </div>

                <!-- PLATFORM -->
                <div class="form-group">
                    <label class="form-label">
                        Target Platform <span class="required">*</span>
                    </label>
                    <div class="select-wrap">
                        <select class="form-select" name="platform" required>
                            <option value="" disabled selected>Select platform...</option>
                            <option value="TikTok">TikTok</option>
                            <option value="YouTube Shorts">YouTube Shorts</option>
                            <option value="Instagram Reels">Instagram Reels</option>
                        </select>
                    </div>
                </div>

                <!-- VIDEO UPLOAD -->
                <div class="form-group">
                    <label class="form-label">
                        Upload Your Video <span class="required">*</span>
                    </label>
                    <div class="file-upload-wrap">
                        <input
                            class="file-upload-input"
                            type="file"
                            name="video"
                            id="videoInput"
                            accept="video/mp4,video/quicktime,video/avi,video/webm,video/mov"
                            required
                        />
                        <div class="file-upload-box" id="uploadBox">
                            <div class="file-upload-icon">🎬</div>
                            <div class="file-upload-text">
                                <strong>Click to upload</strong> or drag & drop
                            </div>
                            <div class="file-upload-hint">MP4, MOV, AVI, WEBM — max 60MB</div>
                        </div>
                        <div class="file-name-display" id="fileNameDisplay"></div>
                    </div>
                </div>

                <!-- NOTES -->
                <div class="form-group">
                    <label class="form-label">Anything we should know?</label>
                    <textarea
                        class="form-textarea"
                        name="notes"
                        placeholder="Target audience, niche, goals, retention concerns..."
                    ></textarea>
                </div>

                <hr class="form-divider" />

                <!-- TERMS -->
                <div class="form-group">
                    <label class="checkbox-wrap">
                        <input type="checkbox" name="agree" required />
                        <span class="checkbox-label">
                            I agree that Atenxa may use anonymized data from my video
                            to improve its attention models. My video will never be shared publicly.
                        </span>
                    </label>
                </div>

                <!-- SUBMIT -->
                <button class="btn-submit" type="submit" id="submitBtn">
                    <span id="btnText">Analyze My Video →</span>
                </button>

                <!-- PROGRESS -->
                <div class="upload-progress" id="uploadProgress">
                    <div class="progress-bar-wrap">
                        <div class="progress-bar-fill" id="progressFill"></div>
                    </div>
                    <div class="progress-text">Uploading your video... please wait ⏳</div>
                </div>

            </form>
        </div>

    </div>
</div>

<script>
// Show filename after selecting
const videoInput = document.getElementById('videoInput');
const fileNameDisplay = document.getElementById('fileNameDisplay');
const uploadBox = document.getElementById('uploadBox');

videoInput.addEventListener('change', function() {
    if (this.files && this.files[0]) {
        const file = this.files[0];
        const sizeMB = (file.size / 1024 / 1024).toFixed(1);
        fileNameDisplay.style.display = 'block';
        fileNameDisplay.textContent = '✓ ' + file.name + ' (' + sizeMB + ' MB)';
        uploadBox.style.borderColor = 'rgba(125,211,252,0.5)';

        // Warn if > 60MB
        if (file.size > 60 * 1024 * 1024) {
            fileNameDisplay.style.color = '#fb7185';
            fileNameDisplay.textContent = '✗ File too large! Max 60MB. Your file: ' + sizeMB + ' MB';
        }
    }
});

// Show progress on submit
const form = document.getElementById('atenxaForm');
const submitBtn = document.getElementById('submitBtn');
const btnText = document.getElementById('btnText');
const uploadProgress = document.getElementById('uploadProgress');
const progressFill = document.getElementById('progressFill');

form.addEventListener('submit', function(e) {
    // Validate file size client-side
    if (videoInput.files[0] && videoInput.files[0].size > 60 * 1024 * 1024) {
        e.preventDefault();
        alert('File too large. Maximum size is 60MB.');
        return;
    }

    // Show progress UI
    submitBtn.disabled = true;
    btnText.textContent = 'Uploading...';
    uploadProgress.style.display = 'block';

    // Simulate progress bar (actual upload tracked server-side)
    let width = 0;
    const interval = setInterval(function() {
        if (width >= 90) {
            clearInterval(interval);
        } else {
            width += Math.random() * 8;
            progressFill.style.width = Math.min(width, 90) + '%';
        }
    }, 400);
});
</script>

<?php include __DIR__ . '/footer.php'; ?>
