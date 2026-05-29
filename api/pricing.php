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
    max-width: 520px;
    margin: 0 auto 16px;
    text-align: center;
}

/* BETA BADGE */
.beta-notice {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    background: rgba(251,191,36,0.08);
    border: 1px solid rgba(251,191,36,0.2);
    border-radius: 999px;
    padding: 10px 24px;
    color: #fbbf24;
    font-size: 13px;
    font-weight: 600;
    max-width: fit-content;
    margin: 0 auto 64px;
}

.beta-dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #fbbf24;
    box-shadow: 0 0 10px rgba(251,191,36,0.8);
    animation: blink 2s infinite;
    flex-shrink: 0;
}

@keyframes blink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.3; }
}

/* SEATS COUNTER */
.seats-bar {
    max-width: 480px;
    margin: 0 auto 64px;
    background: #111114;
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 16px;
    padding: 20px 24px;
    text-align: center;
}

.seats-text {
    color: #9ca3af;
    font-size: 14px;
    margin-bottom: 12px;
}

.seats-text strong {
    color: #fbbf24;
    font-size: 18px;
    font-family: 'Cabinet Grotesk', sans-serif;
    letter-spacing: -0.04em;
}

.seats-track {
    height: 6px;
    background: #232329;
    border-radius: 999px;
    overflow: hidden;
}

.seats-fill {
    height: 6px;
    background: linear-gradient(90deg, #fbbf24, #f59e0b);
    border-radius: 999px;
    width: 45%;
    transition: width 1s ease;
}

.seats-labels {
    display: flex;
    justify-content: space-between;
    margin-top: 8px;
    font-size: 11px;
    color: #6b7280;
}

/* PRICING GRID */
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

.price-original {
    color: #4b5563;
    font-size: 13px;
    text-decoration: line-through;
    margin-bottom: 4px;
}

.price-save {
    color: #fbbf24;
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

/* BUTTONS */
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

.btn-pricing-free {
    display: block;
    width: 100%;
    background: transparent;
    color: #7dd3fc;
    border: 1px solid rgba(125,211,252,0.3);
    border-radius: 12px;
    padding: 14px 24px;
    font-family: 'Inter', sans-serif;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    transition: background .2s, color .2s;
}

.btn-pricing-free:hover {
    background: rgba(125,211,252,0.08);
}

/* FREE CARD special */
.pricing-card.free-card {
    background: #0d0d10;
    border-style: dashed;
}

/* GUARANTEE */
.guarantee {
    background: rgba(125,211,252,0.05);
    border: 1px solid rgba(125,211,252,0.12);
    border-radius: 20px;
    padding: 28px 32px;
    display: flex;
    align-items: flex-start;
    gap: 20px;
    margin-bottom: 48px;
}

.guarantee-icon {
    font-size: 32px;
    flex-shrink: 0;
}

.guarantee-text h3 {
    font-family: 'Cabinet Grotesk', sans-serif;
    font-size: 18px;
    font-weight: 700;
    letter-spacing: -0.03em;
    color: #f3f4f6;
    margin-bottom: 8px;
}

.guarantee-text p {
    color: #9ca3af;
    font-size: 14px;
    line-height: 1.7;
}

/* FAQ MINI */
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
    .guarantee { flex-direction: column; gap: 12px; }
}
</style>

<div class="pricing-wrap">

    <div class="pricing-eyebrow">Pricing</div>
    <h1 class="pricing-title">
        Invest in your <em>attention.</em><br>
        Before the algorithm decides.
    </h1>
    <p class="pricing-sub">
        Every video you post without an attention analysis
        is a bet you're making blind. Stop guessing.
    </p>

    <!-- BETA NOTICE -->
    <div class="beta-notice">
        <div class="beta-dot"></div>
        Beta Pricing — Limited Time · Standard public license starts at $69/month
    </div>

    <!-- SEATS COUNTER -->
    <div class="seats-bar">
        <div class="seats-text">
            Beta Member spots remaining: <strong>11 of 20</strong>
        </div>
        <div class="seats-track">
            <div class="seats-fill" style="width:45%"></div>
        </div>
        <div class="seats-labels">
            <span>0</span>
            <span>9 members joined</span>
            <span>20</span>
        </div>
    </div>

    <!-- PRICING CARDS -->
    <div class="pricing-grid">

        <!-- FREE -->
        <div class="pricing-card free-card">
            <div class="card-tier">Get Started</div>
            <div class="card-name">Free</div>
            <div class="card-desc">Try Atenxa once. No commitment, no credit card.</div>

            <div class="card-price">
                <span class="price-amount">$0</span>
            </div>
            <div class="price-save" style="color:#6b7280;">One-time. Forever free for your first video.</div>

            <hr class="card-divider" />

            <ul class="feature-list">
                <li><span class="feature-check">✓</span> 1 full attention analysis</li>
                <li><span class="feature-check">✓</span> Hook strength score</li>
                <li><span class="feature-check">✓</span> Retention curve estimate</li>
                <li><span class="feature-check">✓</span> Emotional pacing report</li>
                <li><span class="feature-check">✓</span> 3 improvement suggestions</li>
                <li><span class="feature-check">✓</span> Delivered within 24 hours</li>
            </ul>

            <a href="/submit.php" class="btn-pricing-free">
                Get My Free Analysis →
            </a>
        </div>

        <!-- BETA STARTER -->
        <div class="pricing-card">
            <div class="card-tier">Beta Member</div>
            <div class="card-name">Starter</div>
            <div class="card-desc">For individual creators posting weekly content.</div>

            <div class="price-original">$69/month standard</div>
            <div class="card-price">
                <span class="price-amount">$19</span>
                <span class="price-period">/month</span>
            </div>
            <div class="price-save">⚡ Beta price — locked forever for early members</div>

            <hr class="card-divider" />

            <ul class="feature-list">
                <li class="highlight"><span class="feature-check">✓</span> 5 video analyses / month</li>
                <li><span class="feature-check">✓</span> Full attention scorecard</li>
                <li><span class="feature-check">✓</span> Hook + retention + emotional pacing</li>
                <li><span class="feature-check">✓</span> Platform-specific scoring</li>
                <li><span class="feature-check">✓</span> Priority 24-hour delivery</li>
                <li><span class="feature-check">✓</span> Price locked forever</li>
            </ul>

            <a href="https://gumroad.com" target="_blank" class="btn-pricing-secondary">
                Secure Beta Pricing →
            </a>
        </div>

        <!-- BETA PRO - FEATURED -->
        <div class="pricing-card featured">
            <div class="popular-badge">Most Popular</div>
            <div class="card-tier">Beta Member</div>
            <div class="card-name">Pro</div>
            <div class="card-desc">For active creators and small agencies.</div>

            <div class="price-original">$69/month standard</div>
            <div class="card-price">
                <span class="price-amount accent">$39</span>
                <span class="price-period">/month</span>
            </div>
            <div class="price-save">⚡ Beta price — locked forever for early members</div>

            <hr class="card-divider" />

            <ul class="feature-list">
                <li class="highlight"><span class="feature-check">✓</span> 15 video analyses / month</li>
                <li><span class="feature-check">✓</span> Full attention scorecard</li>
                <li><span class="feature-check">✓</span> Hook + retention + emotional pacing</li>
                <li><span class="feature-check">✓</span> Platform-specific scoring</li>
                <li><span class="feature-check">✓</span> Priority 24-hour delivery</li>
                <li><span class="feature-check">✓</span> Price locked forever</li>
                <li class="highlight"><span class="feature-check">✓</span> Agency & multi-client use</li>
                <li class="highlight"><span class="feature-check">✓</span> Bulk report export</li>
            </ul>

            <a href="https://gumroad.com" target="_blank" class="btn-pricing-primary">
                Secure Beta Pricing →
            </a>
        </div>

    </div>

    <!-- GUARANTEE -->
    <div class="guarantee">
        <div class="guarantee-icon">🛡️</div>
        <div class="guarantee-text">
            <h3>Founder's Personal Guarantee</h3>
            <p>
                Atenxa is currently in Beta and I'm personally subsidizing infrastructure costs
                for our first 20 members. Your Beta price is locked forever — even when public
                pricing launches at $69/month. If you're not satisfied with your first analysis,
                I'll refund you personally. No questions asked.
                <br><br>
                <strong style="color:#f3f4f6;">— Ichal, Founder @ Atenxa</strong>
            </p>
        </div>
    </div>

    <!-- MINI FAQ -->
    <div class="pricing-faq">
        <h3>Common Questions</h3>

        <div class="mini-faq-item">
            <div class="mini-faq-q">Why is Beta pricing so much lower than public pricing?</div>
            <div class="mini-faq-a">
                Atenxa runs on neural-computing attention models with real infrastructure costs.
                For our first 20 Beta Members, I'm personally subsidizing those costs as a way
                of saying thank you for building this product with me. Your Beta price is
                locked in forever.
            </div>
        </div>

        <div class="mini-faq-item">
            <div class="mini-faq-q">How does "locked forever" work?</div>
            <div class="mini-faq-a">
                As long as your subscription remains active, you will never be charged more
                than your Beta price — even as Atenxa grows and public pricing increases.
            </div>
        </div>

        <div class="mini-faq-item">
            <div class="mini-faq-q">How is the analysis delivered?</div>
            <div class="mini-faq-a">
                You submit your video via <a href="/submit.php">atenxa.com/submit.php</a>.
                Your full attention report — including scorecard, retention curve, and
                improvement suggestions — is delivered to your email within 24 hours.
            </div>
        </div>

        <div class="mini-faq-item">
            <div class="mini-faq-q">What platforms does Atenxa support?</div>
            <div class="mini-faq-a">
                TikTok, Instagram Reels, and YouTube Shorts. Each platform has distinct
                attention behavior — your analysis is calibrated to where you're posting.
            </div>
        </div>

        <div class="mini-faq-item">
            <div class="mini-faq-q">Can I cancel anytime?</div>
            <div class="mini-faq-a">
                Yes. No contracts, no lock-in. Cancel anytime directly from your
                Gumroad account. Though once you cancel, Beta pricing cannot be reinstated.
            </div>
        </div>

    </div>

</div>

<?php include __DIR__ . '/footer.php'; ?>
