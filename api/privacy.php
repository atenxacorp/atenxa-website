<?php include __DIR__ . '/header.php'; ?>

<style>
.legal-wrap {
    max-width: 760px;
    margin: 0 auto;
    padding: 120px 24px 80px;
}

.legal-eyebrow {
    color: #7dd3fc;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    margin-bottom: 14px;
}

.legal-title {
    font-family: 'Cabinet Grotesk', sans-serif;
    font-size: clamp(32px, 5vw, 52px);
    font-weight: 800;
    letter-spacing: -0.05em;
    line-height: 1.05;
    margin-bottom: 10px;
    color: #f3f4f6;
}

.legal-updated {
    color: #6b7280;
    font-size: 13px;
    margin-bottom: 48px;
    padding-bottom: 32px;
    border-bottom: 1px solid rgba(255,255,255,0.06);
}

.legal-section {
    margin-bottom: 40px;
}

.legal-section h2 {
    font-family: 'Cabinet Grotesk', sans-serif;
    font-size: 20px;
    font-weight: 700;
    letter-spacing: -0.03em;
    color: #f3f4f6;
    margin-bottom: 14px;
}

.legal-section p {
    color: #9ca3af;
    font-size: 15px;
    line-height: 1.85;
    margin-bottom: 12px;
}

.legal-section ul {
    color: #9ca3af;
    font-size: 15px;
    line-height: 1.85;
    padding-left: 0;
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 8px;
    margin-bottom: 12px;
}

.legal-section ul li {
    padding-left: 20px;
    position: relative;
}

.legal-section ul li::before {
    content: '→';
    position: absolute;
    left: 0;
    color: #7dd3fc;
    font-size: 12px;
    top: 3px;
}

.legal-section a {
    color: #7dd3fc;
    text-decoration: none;
}

.legal-section a:hover {
    text-decoration: underline;
}

.legal-divider {
    border: none;
    border-top: 1px solid rgba(255,255,255,0.06);
    margin: 32px 0;
}

.legal-highlight {
    background: rgba(125,211,252,0.06);
    border: 1px solid rgba(125,211,252,0.15);
    border-radius: 12px;
    padding: 18px 22px;
    color: #9ca3af;
    font-size: 14px;
    line-height: 1.75;
    margin-bottom: 32px;
}
</style>

<div class="legal-wrap">

    <div class="legal-eyebrow">Legal</div>
    <h1 class="legal-title">Privacy Policy</h1>
    <p class="legal-updated">Last updated: May 2026</p>

    <div class="legal-highlight">
        Atenxa is committed to protecting your privacy. This policy explains what data we collect, how we use it, and your rights regarding your information.
    </div>

    <div class="legal-section">
        <h2>1. Who We Are</h2>
        <p>Atenxa ("we", "us", "our") is an Attention Intelligence Platform operated at <a href="https://atenxa.com">atenxa.com</a>. We provide behavioral attention analysis for short-form video content.</p>
    </div>

    <hr class="legal-divider" />

    <div class="legal-section">
        <h2>2. Information We Collect</h2>
        <p>When you use Atenxa, we collect the following information:</p>
        <ul>
            <li>Your name and email address (provided via submission form)</li>
            <li>The video file or link you submit for analysis</li>
            <li>Target platform (TikTok, Instagram Reels, YouTube Shorts)</li>
            <li>Any additional notes you provide about your content</li>
            <li>Submission timestamp and basic usage data</li>
        </ul>
    </div>

    <hr class="legal-divider" />

    <div class="legal-section">
        <h2>3. How We Use Your Information</h2>
        <p>We use the information collected to:</p>
        <ul>
            <li>Deliver your Atenxa Attention Report via email</li>
            <li>Improve our attention analysis models using anonymized behavioral data</li>
            <li>Communicate with you about your submission status</li>
            <li>Send service-related updates (not marketing spam)</li>
        </ul>
        <p>We do not sell, rent, or share your personal information with third parties for marketing purposes.</p>
    </div>

    <hr class="legal-divider" />

    <div class="legal-section">
        <h2>4. Video Data & Content</h2>
        <p>By submitting a video to Atenxa, you grant us a non-exclusive, limited license to:</p>
        <ul>
            <li>Process and analyze the video for attention intelligence purposes</li>
            <li>Use anonymized, non-identifiable behavioral data to improve our models</li>
            <li>Store the video temporarily on secure third-party infrastructure (Cloudinary)</li>
        </ul>
        <p>Your video will never be shared publicly, sold, or used for any purpose outside of delivering your analysis report and improving Atenxa's models.</p>
    </div>

    <hr class="legal-divider" />

    <div class="legal-section">
        <h2>5. Data Storage & Security</h2>
        <p>Your data is stored using the following services:</p>
        <ul>
            <li><strong style="color:#f3f4f6">Cloudinary</strong> — secure video storage and delivery</li>
            <li><strong style="color:#f3f4f6">Google Sheets</strong> — submission records (admin access only)</li>
            <li><strong style="color:#f3f4f6">Formspree</strong> — email notification routing</li>
        </ul>
        <p>We implement reasonable security measures to protect your data. However, no method of transmission over the internet is 100% secure.</p>
    </div>

    <hr class="legal-divider" />

    <div class="legal-section">
        <h2>6. Data Retention</h2>
        <p>We retain your submission data for as long as necessary to deliver your report and improve our service. You may request deletion of your data at any time by contacting us at <a href="mailto:atenxacorp@gmail.com">atenxacorp@gmail.com</a>.</p>
    </div>

    <hr class="legal-divider" />

    <div class="legal-section">
        <h2>7. Your Rights</h2>
        <p>You have the right to:</p>
        <ul>
            <li>Request access to the personal data we hold about you</li>
            <li>Request correction of inaccurate data</li>
            <li>Request deletion of your data</li>
            <li>Withdraw consent for data processing at any time</li>
        </ul>
        <p>To exercise any of these rights, contact us at <a href="mailto:atenxacorp@gmail.com">atenxacorp@gmail.com</a>.</p>
    </div>

    <hr class="legal-divider" />

    <div class="legal-section">
        <h2>8. Cookies</h2>
        <p>Atenxa does not currently use tracking cookies or third-party analytics. We may implement basic analytics in the future and will update this policy accordingly.</p>
    </div>

    <hr class="legal-divider" />

    <div class="legal-section">
        <h2>9. Changes to This Policy</h2>
        <p>We may update this Privacy Policy from time to time. We will notify users of significant changes by updating the "Last updated" date at the top of this page.</p>
    </div>

    <hr class="legal-divider" />

    <div class="legal-section">
        <h2>10. Contact</h2>
        <p>If you have any questions about this Privacy Policy, please contact us at:</p>
        <p><a href="mailto:atenxacorp@gmail.com">atenxacorp@gmail.com</a></p>
    </div>

</div>

<?php include __DIR__ . '/footer.php'; ?>
