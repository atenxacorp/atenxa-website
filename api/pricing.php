<?php include __DIR__ . '/header.php'; ?>

<style>
.pricing-wrap {
    max-width: 1120px;
    margin: 0 auto;
    padding: 120px 24px 100px;
}

.pricing-eyebrow {
    color: #7dd3fc;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    margin-bottom: 14px;
    text-align: center;
}

.pricing-title {
    font-family: 'Cabinet Grotesk', sans-serif;
    font-size: clamp(36px, 5vw, 64px);
    font-weight: 800;
    letter-spacing: -0.05em;
    line-height: 1.05;
    margin-bottom: 16px;
    color: #f3f4f6;
    text-align: center;
}

.pricing-title em {
    font-style: normal;
    color: #7dd3fc;
}

.pricing-sub {
    color: #9ca3af;
    font-size: 17px;
    line-height: 1.8;
    max-width: 560px;
    margin: 0 auto 48px;
    text-align: center;
}

.trial-notice {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    background: rgba(125,211,252,0.06);
    border: 1px solid rgba(125,211,252,0.18);
    border-radius: 999px;
    padding: 10px 24px;
    color: #7dd3fc;
    font-size: 13px;
    font-weight: 600;
    max-width: fit-content;
    margin: 0 auto 64px;
    text-align: center;
}

.pricing-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
    margin-bottom: 48px;
}

.pricing-card {
    background: #111114;
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 24px;
    padding: 36px 32px;
    position: relative;
    transition: transform .25s, border-color .25s;
}

.pricing-card:hover {
    transform: translateY(-4px);
    border-color: rgba(125,211,252,0.2);
}

.pricing-card.featured {
    border-color: rgba(125,211,252,0.3);
    background: linear-gradient(180deg, rgba(125,211,252,0.06), #111114);
}

.pricing-card.featured::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 2px;
    background: linear-gradient(90deg, transparent, #7dd3fc, transparent);
    border-radius: 24px 24px 0 0;
}

.popular-badge {
    position: absolute;
    top: -12px;
    left: 50%;
    transform: translateX(-50%);
    background: #7dd3fc;
    color: #060606;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    padding: 5px 16px;
    border-radius: 999px;
    white-space: nowrap;
}

.card-tier {
    color: #6b7280;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    margin-bottom: 16px;
}

.card-name {
    font-family: 'Cabinet Grotesk', sans-serif;
    font-size: 28px;
    font-weight: 800;
    letter-spacing: -0.04em;
    color: #f3f4f6;
    margin-bottom: 8px;
}

.card-desc {
    color: #6b7280;
    font-size: 14px;
    line-height: 1.6;
    margin-bottom: 28px;
}

.card-price {
    margin-bottom: 8px;
}

.price-amount {
    font-family: 'Cabinet Grotesk', sans-serif;
    font-size: 52px;
    font-weight: 800;
    letter-spacing: -0.05em;
    color: #f3f4f6;
    line-height: 1;
}

.price-amount.accent { color: #7dd3fc; }

.price-period {
    color: #6b7280;
    font-size: 14px;
    margin-left: 4px;
}

.price-trial-note {
    color: #7dd3fc;
    font-size: 12px;
    font-weight: 600;
    margin-bottom: 28px;
}

.card-divider {
    border: none;
    border-top: 1px solid rgba(255,255,255,0.06);
    margin: 24px 0;
}

.feature-list {
    list-style: none;
    padding: 0;
    margin: 0 0 32px;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.feature-list li {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    color: #9ca3af;
    font-size: 14px;
    line-height: 1.5;
}

.feature-check {
    color: #7dd3fc;
    font-size: 14px;
    margin-top: 1px;
    flex-shrink: 0;
}

.feature-list li.highlight {
    color: #f3f4f6;
    font-weight: 500;
}

.btn-pricing-primary {
    display: block;
    width: 100%;
    background: #7dd3fc;
    color: #060606;
    border: none;
    border-radius: 12px;
    padding: 14px 24px;
    font-family: 'Inter', sans-serif;
    font-size: 15px;
    font-weight: 700;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    transition: opacity .2s, transform .15s;
}

.btn-pricing-primary:hover {
    opacity: .88;
    transform: translateY(-1px);
}

.btn-pricing-secondary {
    display: block;
    width: 100%;
    background: transparent;
    color: #9ca3af;
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 12px;
    padding: 14px 24px;
    font-family: 'Inter', sans-serif;
    font-size: 15px;
    font-weight: 500;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    transition: color .2s, border-color .2s;
}

.btn-pricing-secondary:hover {
    color: white;
    border-color: rgba(255,255,255,0.2);
}

.trial-explainer {
    background: #0d0d10;
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 20px;
    padding: 32px;
    margin-bottom: 48px;
}

.trial-explainer h3 {
    font-family: 'Cabinet Grotesk', sans-serif;
    font-size: 20px;
    font-weight: 700;
    letter-spacing: -0.03em;
    color: #f3f4f6;
    margin-bottom: 20px;
    text-align: center;
}

.trial-steps {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 20px;
}

.trial-step {
    text-align: center;
}

.trial-step-num {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: rgba(125,211,252,0.1);
    border: 1px solid rgba(125,211,252,0.25);
    color: #7dd3fc;
    font-family: 'Cabinet Grotesk', sans-serif;
    font-weight: 700;
    font-size: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 12px;
}

.trial-step p {
    color: #9ca3af;
    font-size: 13px;
    line-height: 1.6;
}

.trial-step strong { color: #f3f4f6; }

.refund-policy {
    background: rgba(125,211,252,0.04);
    border: 1px solid rgba(125,211,252,0.12);
    border-radius: 20px;
    padding: 28px 32px;
    margin-bottom: 48px;
}

.refund-policy h3 {
    font-family: 'Cabinet Grotesk', sans-serif;
    font-size: 18px;
    font-weight: 700;
    letter-spacing: -0.03em;
    color: #f3f4f6;
    margin-bottom: 16px;
}

.refund-columns {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 24px;
    margin-bottom: 20px;
}

.refund-col-title {
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 12px;
}

.refund-col-title.yes { color: #7dd3fc; }
.refund-col-title.no { color: #fb7185; }

.refund-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.refund-list li {
    color: #9ca3af;
    font-size: 13px;
    line-height: 1.6;
    padding-left: 18px;
    position: relative;
}

.refund-list.yes li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #7dd3fc;
}

.refund-list.no li::before {
    content: '✕';
    position: absolute;
    left: 0;
    color: #fb7185;
}

.refund-disclaimer {
    color: #6b7280;
    font-size: 13px;
    line-height: 1.75;
    border-top: 1px solid rgba(255,255,255,0.06);
    padding-top: 18px;
}

.pricing-faq {
    max-width: 680px;
    margin: 0 auto;
}

.pricing-faq h3 {
    font-family: 'Cabinet Grotesk', sans-serif;
    font-size: 22px;
    font-weight: 700;
    letter-spacing: -0.04em;
    color: #f3f4f6;
    margin-bottom: 24px;
    text-align: center;
}

.mini-faq-item {
    border-bottom: 1px solid rgba(255,255,255,0.06);
    padding: 18px 0;
}

.mini-faq-q {
    color: #f3f4f6;
    font-size: 15px;
    font-weight: 600;
    margin-bottom: 8px;
}

.mini-faq-a {
    color: #9ca3af;
    font-size: 14px;
    line-height: 1.7;
}

.mini-faq-a a {
    color: #7dd3fc;
    text-decoration: none;
}

@media (max-width: 640px) {
    .pricing-wrap { padding: 100px 16px 80px; }
    .pricing-grid { grid-template-columns: 1fr; }
    .refund-columns { grid-template-columns: 1fr; }
}
</style>

<div class="pricing-wrap">

    <div class="pricing-eyebrow">Pricing</div>
    <h1 class="pricing-title">
        Invest in your <em>attention.</em><br>
        Before the algorithm decides.
    </h1>
    <p class="pricing-sub">
        Every video you post without a BAO analysis
        is a bet you're making blind. Stop guessing —
        try any plan for 3 days, fully refundable.
    </p>

    <div class="trial-notice">
        3-day trial on every plan · Cancel anytime in the first 3 days for a full refund
    </div>

    <div class="pricing-grid" id="plans">

        <div class="pricing-card">
            <div class="card-tier">For Individual Creators</div>
            <div class="card-name">Starter</div>
            <div class="card-desc">For creators posting weekly content who want a clear read on retention before they publish.</div>

            <div class="card-price">
                <span class="price-amount">$69</span>
                <span class="price-period">/month</span>
            </div>
            <div class="price-trial-note">⚡ 3-day trial — fully refundable</div>

            <hr class="card-divider" />

            <ul class="feature-list">
                <li class="highlight"><span class="feature-check">✓</span> 5 video analyses / month</li>
                <li><span class="feature-check">✓</span> Full BAO scorecard (6 dimensions)</li>
                <li><span class="feature-check">✓</span> Hook strength + retention curve</li>
                <li><span class="feature-check">✓</span> Emotional density + cognitive load</li>
                <li><span class="feature-check">✓</span> Report delivered within 36 hours</li>
            </ul>

            <a href="/submit.php" class="btn-pricing-secondary">
                Start 3-Day Trial →
            </a>
        </div>

        <div class="pricing-card featured">
            <div class="popular-badge">Most Popular</div>
            <div class="card-tier">For Practitioners</div>
            <div class="card-name">Practitioner</div>
            <div class="card-desc">For active creators and consultants who apply BAO across multiple pieces of content every month.</div>

            <div class="card-price">
                <span class="price-amount accent">$129</span>
                <span class="price-period">/month</span>
            </div>
            <div class="price-trial-note">⚡ 3-day trial — fully refundable</div>

            <hr class="card-divider" />

            <ul class="feature-list">
                <li class="highlight"><span class="feature-check">✓</span> 15 video analyses / month</li>
                <li><span class="feature-check">✓</span> Full BAO scorecard (6 dimensions)</li>
                <li><span class="feature-check">✓</span> Hook strength + retention curve</li>
                <li><span class="feature-check">✓</span> Emotional density + cognitive load</li>
                <li class="highlight"><span class="feature-check">✓</span> Full BAO breakdown per dimension</li>
                <li class="highlight"><span class="feature-check">✓</span> Platform-fit analysis (TikTok / Reels / Shorts)</li>
                <li><span class="feature-check">✓</span> Report delivered within 36 hours</li>
            </ul>

            <a href="/submit.php" class="btn-pricing-primary">
                Start 3-Day Trial →
            </a>
        </div>

        <div class="pricing-card">
            <div class="card-tier">For Studios & Agencies</div>
            <div class="card-name">Studio</div>
            <div class="card-desc">For agencies and teams running BAO analysis across multiple clients and campaigns.</div>

            <div class="card-price">
                <span class="price-amount">$299</span>
                <span class="price-period">/month</span>
            </div>
            <div class="price-trial-note">⚡ 3-day trial — fully refundable</div>

            <hr class="card-divider" />

            <ul class="feature-list">
                <li class="highlight"><span class="feature-check">✓</span> 40 video analyses / month</li>
                <li><span class="feature-check">✓</span> Full BAO scorecard (6 dimensions)</li>
                <li><span class="feature-check">✓</span> Full BAO breakdown per dimension</li>
                <li><span class="feature-check">✓</span> Platform-fit analysis</li>
                <li class="highlight"><span class="feature-check">✓</span> Multi-client tagging</li>
                <li class="highlight"><span class="feature-check">✓</span> Bulk report export</li>
                <li class="highlight"><span class="feature-check">✓</span> Priority delivery</li>
            </ul>

            <a href="/submit.php" class="btn-pricing-secondary">
                Start 3-Day Trial →
            </a>
        </div>

    </div>

    <div class="trial-explainer">
        <h3>How the 3-day trial works</h3>
        <div class="trial-steps">
            <div class="trial-step">
                <div class="trial-step-num">1</div>
                <p><strong>Choose a plan</strong><br>and submit your first video. You're charged today.</p>
            </div>
            <div class="trial-step">
                <div class="trial-step-num">2</div>
                <p><strong>Receive your report</strong><br>within 36 hours — full BAO scorecard and breakdown.</p>
            </div>
            <div class="trial-step">
                <div class="trial-step-num">3</div>
                <p><strong>Decide within 3 days</strong><br>Keep your subscription, or cancel for a full refund.</p>
            </div>
        </div>
    </div>

    <div class="refund-policy">
        <h3>Refund Policy — in plain terms</h3>

        <div class="refund-columns">
            <div>
                <div class="refund-col-title yes">Refund is granted if</div>
                <ul class="refund-list yes">
                    <li>Your report was not delivered within 36 hours</li>
                    <li>There was a verifiable technical error in your report</li>
                    <li>You cancel before your first report is processed</li>
                </ul>
            </div>
            <div>
                <div class="refund-col-title no">Refund is not granted for</div>
                <ul class="refund-list no">
                    <li>"My video still didn't perform after applying the suggestions"</li>
                    <li>Disagreement with a specific score</li>
                    <li>Change of mind after reading a completed report</li>
                </ul>
            </div>
        </div>

        <p class="refund-disclaimer">
            Atenxa guarantees delivery of your analysis report within 36 hours of submission.
            We do not guarantee specific performance outcomes — views, retention rate, or
            conversion depend on factors outside our analysis, including execution, audience,
            timing, and platform algorithm changes outside our control. Attention scores are
            behavioral pattern estimates, not guarantees of platform performance.
        </p>
    </div>

    <div class="pricing-faq">
        <h3>Common Questions</h3>

        <div class="mini-faq-item">
            <div class="mini-faq-q">Why is there a paid trial instead of a free one?</div>
            <div class="mini-faq-a">
                A short paid trial filters for people who are genuinely evaluating BAO for their
                content — not just collecting free tools. It also means we can focus our attention
                on a smaller number of serious users rather than high volume.
            </div>
        </div>

        <div class="mini-faq-item">
            <div class="mini-faq-q">When am I charged?</div>
            <div class="mini-faq-a">
                Immediately when you start your trial. If you cancel within 3 days of signing up,
                you receive a full refund under the terms above.
            </div>
        </div>

        <div class="mini-faq-item">
            <div class="mini-faq-q">How is the analysis delivered?</div>
            <div class="mini-faq-a">
                You submit your video at <a href="/submit.php">atenxa.com/submit.php</a>. Your full
                BAO report — scorecard, retention curve, and breakdown across all 6 dimensions —
                is delivered to your email within 36 hours.
            </div>
        </div>

        <div class="mini-faq-item">
            <div class="mini-faq-q">What platforms does Atenxa support?</div>
            <div class="mini-faq-a">
                TikTok, Instagram Reels, and YouTube Shorts. Each platform runs on a different
                attention pattern — your analysis is calibrated to where you're posting.
            </div>
        </div>

        <div class="mini-faq-item">
            <div class="mini-faq-q">Can I cancel anytime?</div>
            <div class="mini-faq-a">
                Yes. No contracts, no lock-in. Cancel anytime — within the first 3 days for a full
                refund under the policy above, or anytime after that to stop future billing.
            </div>
        </div>

    </div>

</div>

<?php include __DIR__ . '/footer.php'; ?>
