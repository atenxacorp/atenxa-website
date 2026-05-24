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

.legal-section a:hover { text-decoration: underline; }

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

.legal-warning {
    background: rgba(251,113,133,0.05);
    border: 1px solid rgba(251,113,133,0.15);
    border-radius: 12px;
    padding: 18px 22px;
    color: #9ca3af;
    font-size: 14px;
    line-height: 1.75;
    margin-bottom: 12px;
}
</style>

<div class="legal-wrap">

    <div class="legal-eyebrow">Legal</div>
    <h1 class="legal-title">Terms of Service</h1>
    <p class="legal-updated">Last updated: May 2026</p>

    <div class="legal-highlight">
        By using Atenxa, you agree to these Terms of Service. Please read them carefully before submitting any content to our platform.
    </div>

    <div class="legal-section">
        <h2>1. Acceptance of Terms</h2>
        <p>By accessing or using Atenxa ("the Service") at <a href="https://atenxa.com">atenxa.com</a>, you agree to be bound by these Terms of Service. If you do not agree to these terms, please do not use the Service.</p>
    </div>

    <hr class="legal-divider" />

    <div class="legal-section">
        <h2>2. Description of Service</h2>
        <p>Atenxa is an Attention Intelligence Platform that provides behavioral analysis of short-form video content. The Service includes:</p>
        <ul>
            <li>Hook strength and scroll-stop analysis</li>
            <li>Retention risk prediction and curve estimation</li>
            <li>Emotional pacing and cognitive load scoring</li>
            <li>Platform-specific attention modeling</li>
            <li>Actionable improvement suggestions</li>
        </ul>
    </div>

    <hr class="legal-divider" />

    <div class="legal-section">
        <h2>3. What Atenxa Is Not</h2>
        <div class="legal-warning">
            Atenxa does not guarantee viral views, follower growth, or any specific performance outcome. Atenxa is an analysis and intelligence tool — not a distribution, promotion, or engagement service.
        </div>
        <p>Specifically, Atenxa:</p>
        <ul>
            <li>Does not guarantee virality or increased view counts</li>
            <li>Does not use bots, fake engagement, or artificial traffic</li>
            <li>Does not edit, modify, or publish your video content</li>
            <li>Does not provide SMO, SEO, or paid promotion services</li>
        </ul>
    </div>

    <hr class="legal-divider" />

    <div class="legal-section">
        <h2>4. User Responsibilities</h2>
        <p>By submitting content to Atenxa, you confirm that:</p>
        <ul>
            <li>You own the rights to the video content you submit</li>
            <li>Your content does not violate any applicable laws or third-party rights</li>
            <li>Your content does not contain illegal, harmful, or offensive material</li>
            <li>You are at least 18 years of age</li>
            <li>The information you provide (name, email) is accurate</li>
        </ul>
    </div>

    <hr class="legal-divider" />

    <div class="legal-section">
        <h2>5. Content License</h2>
        <p>By submitting a video to Atenxa, you grant us a non-exclusive, limited, royalty-free license to:</p>
        <ul>
            <li>Process and analyze your video for attention intelligence purposes</li>
            <li>Store your video temporarily on secure infrastructure</li>
            <li>Use anonymized behavioral data derived from your video to improve our models</li>
        </ul>
        <p>This license does not give Atenxa the right to publicly distribute, sell, or commercially exploit your video content in any way.</p>
    </div>

    <hr class="legal-divider" />

    <div class="legal-section">
        <h2>6. Prohibited Content</h2>
        <p>You may not submit content that:</p>
        <ul>
            <li>Infringes on intellectual property rights of others</li>
            <li>Contains sexually explicit or pornographic material</li>
            <li>Promotes violence, hate speech, or discrimination</li>
            <li>Contains malware, viruses, or harmful code</li>
            <li>Violates any applicable local, national, or international law</li>
        </ul>
        <p>Atenxa reserves the right to refuse or remove any submission that violates these terms without notice or refund.</p>
    </div>

    <hr class="legal-divider" />

    <div class="legal-section">
        <h2>7. Payment & Refunds</h2>
        <p>For paid services:</p>
        <ul>
            <li>All payments are processed securely through our payment provider</li>
            <li>Paid analysis packs are non-refundable once analysis has been delivered</li>
            <li>If analysis cannot be delivered due to technical issues on our end, a full refund will be issued</li>
            <li>Pricing is subject to change with reasonable notice</li>
        </ul>
    </div>

    <hr class="legal-divider" />

    <div class="legal-section">
        <h2>8. Disclaimer of Warranties</h2>
        <p>Atenxa provides the Service "as is" without warranties of any kind. We do not warrant that:</p>
        <ul>
            <li>The Service will be uninterrupted or error-free</li>
            <li>Analysis results will be 100% accurate or complete</li>
            <li>Following our suggestions will result in specific performance outcomes</li>
        </ul>
        <p>Attention scores and retention predictions are behavioral estimates based on established patterns — not guarantees of platform algorithm behavior.</p>
    </div>

    <hr class="legal-divider" />

    <div class="legal-section">
        <h2>9. Limitation of Liability</h2>
        <p>To the maximum extent permitted by law, Atenxa shall not be liable for any indirect, incidental, special, or consequential damages arising from your use of the Service, including but not limited to loss of revenue, loss of data, or loss of business opportunity.</p>
    </div>

    <hr class="legal-divider" />

    <div class="legal-section">
        <h2>10. Changes to Terms</h2>
        <p>We reserve the right to modify these Terms of Service at any time. Continued use of the Service after changes constitutes acceptance of the new terms. We will update the "Last updated" date when changes are made.</p>
    </div>

    <hr class="legal-divider" />

    <div class="legal-section">
        <h2>11. Governing Law</h2>
        <p>These Terms shall be governed by and construed in accordance with applicable laws. Any disputes shall be resolved through good-faith negotiation before any formal legal action.</p>
    </div>

    <hr class="legal-divider" />

    <div class="legal-section">
        <h2>12. Contact</h2>
        <p>For any questions regarding these Terms of Service, please contact us at:</p>
        <p><a href="mailto:atenxacorp@gmail.com">atenxacorp@gmail.com</a></p>
    </div>

</div>

<?php include __DIR__ . '/footer.php'; ?>
