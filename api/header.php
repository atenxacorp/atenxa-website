<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Atenxa — Attention Intelligence Platform</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://api.fontshare.com/v2/css?f[]=cabinet-grotesk@400,500,700,800&display=swap" rel="stylesheet">

<style>
*, *::before, *::after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

:root {
  --bg: #09090b;
  --surface: #111114;
  --surface-2: #18181c;
  --line: rgba(255,255,255,0.06);
  --text: #f3f4f6;
  --muted: #9ca3af;
  --muted-2: #6b7280;
  --accent: #7dd3fc;
  --accent-soft: rgba(125,211,252,0.10);
  --accent-line: rgba(125,211,252,0.22);
  --radius: 16px;
  --radius-lg: 24px;
  --radius-xl: 32px;
  --shadow: 0 10px 40px rgba(0,0,0,0.35);
}

html { scroll-behavior: smooth; }

body {
  font-family: 'Inter', sans-serif;
  background: var(--bg);
  color: var(--text);
  line-height: 1.65;
  overflow-x: hidden;
  -webkit-font-smoothing: antialiased;
}

body::before {
  content: '';
  position: fixed;
  inset: 0;
  pointer-events: none;
  opacity: .03;
  background-image: radial-gradient(circle at 1px 1px, white 1px, transparent 0);
  background-size: 24px 24px;
}

/* NAV */
nav {
  position: fixed;
  top: 0; left: 0; right: 0;
  z-index: 100;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 40px;
  height: 72px;
  backdrop-filter: blur(20px);
  background: rgba(9,9,11,0.72);
  border-bottom: 1px solid var(--line);
}

.logo {
  display: flex;
  align-items: center;
  text-decoration: none;
}

.logo img {
  height: 56px;
  width: auto;
  display: block;
  border-radius: 8px;
  border: 1px solid rgba(125,211,252,0.15);
  transition: border-color .2s;
}

.logo:hover img {
  border-color: rgba(125,211,252,0.3);
}

.nav-right {
  display: flex;
  align-items: center;
  gap: 28px;
}

.nav-link {
  color: var(--muted);
  text-decoration: none;
  font-size: 14px;
  transition: .2s;
}

.nav-link:hover { color: white; }

.nav-btn {
  text-decoration: none;
  background: var(--accent);
  color: #050505;
  padding: 11px 20px;
  border-radius: 12px;
  font-size: 14px;
  font-weight: 600;
  transition: .2s;
}

.nav-btn:hover { transform: translateY(-1px); opacity: .92; }

/* HERO */
.hero {
  position: relative;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  text-align: center;
  padding: 140px 24px 100px;
}

.hero-glow {
  position: absolute;
  width: 900px;
  height: 900px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(125,211,252,0.10) 0%, transparent 65%);
  top: 50%;
  left: 50%;
  transform: translate(-50%,-55%);
  pointer-events: none;
}

.hero-badge {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 8px 18px;
  border-radius: 999px;
  border: 1px solid var(--accent-line);
  background: var(--accent-soft);
  color: var(--accent);
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  margin-bottom: 34px;
}

.hero-badge::before {
  content: '';
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: var(--accent);
  box-shadow: 0 0 18px rgba(125,211,252,0.8);
  animation: blink 2s infinite;
}

@keyframes blink {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.4; }
}

.hero h1 {
  font-family: 'Cabinet Grotesk', sans-serif;
  font-size: clamp(52px, 8vw, 96px);
  line-height: 0.95;
  letter-spacing: -0.06em;
  font-weight: 800;
  max-width: 980px;
  margin-bottom: 28px;
}

.hero h1 em {
  font-style: normal;
  color: var(--accent);
  text-shadow: 0 0 30px rgba(125,211,252,0.22);
}

.hero-sub {
  max-width: 600px;
  color: var(--muted);
  font-size: 18px;
  font-weight: 400;
  line-height: 1.8;
  margin-bottom: 12px;
}

.hero-methodology {
  max-width: 560px;
  color: var(--muted-2);
  font-size: 14px;
  font-weight: 400;
  line-height: 1.7;
  margin-bottom: 44px;
  letter-spacing: 0.01em;
}

.hero-methodology span {
  color: var(--accent);
  font-weight: 500;
}

.hero-actions {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 14px;
  flex-wrap: wrap;
  margin-bottom: 18px;
}

.btn-primary {
  text-decoration: none;
  background: var(--accent);
  color: #060606;
  padding: 15px 30px;
  border-radius: 14px;
  font-size: 15px;
  font-weight: 700;
  transition: .2s;
  border: none;
  cursor: pointer;
  font-family: 'Inter', sans-serif;
}

.btn-primary:hover { transform: translateY(-2px); opacity: .92; }

.btn-secondary {
  text-decoration: none;
  border: 1px solid var(--line);
  color: var(--muted);
  padding: 15px 28px;
  border-radius: 14px;
  font-size: 15px;
  transition: .2s;
}

.btn-secondary:hover { color: white; border-color: rgba(255,255,255,0.18); }

.hero-note { color: var(--muted-2); font-size: 13px; }

/* REPORT PREVIEW */
.report {
  margin-top: 70px;
  width: 100%;
  max-width: 760px;
  background: linear-gradient(180deg, rgba(255,255,255,0.025), rgba(255,255,255,0.01));
  border: 1px solid var(--line);
  border-radius: var(--radius-xl);
  padding: 30px;
  backdrop-filter: blur(18px);
  box-shadow: var(--shadow);
  text-align: left;
}

.report-top {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 24px;
}

.report-label {
  color: var(--muted-2);
  font-size: 11px;
  letter-spacing: 0.16em;
  text-transform: uppercase;
}

.report-chip {
  padding: 6px 12px;
  border-radius: 999px;
  border: 1px solid var(--accent-line);
  background: var(--accent-soft);
  color: var(--accent);
  font-size: 11px;
  font-weight: 600;
}

.score-grid {
  display: grid;
  grid-template-columns: repeat(3,1fr);
  gap: 12px;
  margin-bottom: 18px;
}

.score-card {
  background: var(--surface);
  border: 1px solid var(--line);
  border-radius: 18px;
  padding: 18px;
}

.score-title {
  color: var(--muted-2);
  font-size: 11px;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  margin-bottom: 10px;
}

.score-value {
  font-family: 'Cabinet Grotesk', sans-serif;
  font-size: 34px;
  line-height: 1;
  letter-spacing: -0.05em;
  margin-bottom: 10px;
}

.high { color: var(--accent); }
.mid { color: #fbbf24; }
.low { color: #fb7185; }

.track {
  height: 4px;
  border-radius: 999px;
  background: #232329;
}

.fill { height: 4px; border-radius: 999px; }
.fill.high { background: var(--accent); }
.fill.mid { background: #fbbf24; }
.fill.low { background: #fb7185; }

.curve {
  background: var(--surface);
  border: 1px solid var(--line);
  border-radius: 20px;
  padding: 20px;
  color: var(--muted);
  font-size: 14px;
  line-height: 2;
}

.curve .danger { color: #fb7185; font-weight: 600; }
.curve .safe { color: var(--accent); }

/* SECTIONS */
.section {
  max-width: 1120px;
  margin: 0 auto;
  padding: 110px 24px;
  border-top: 1px solid var(--line);
}

.eyebrow {
  color: var(--accent);
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.18em;
  margin-bottom: 16px;
}

.section-title {
  font-family: 'Cabinet Grotesk', sans-serif;
  font-size: clamp(38px, 5vw, 64px);
  line-height: 1;
  letter-spacing: -0.05em;
  margin-bottom: 22px;
}

.section-sub {
  max-width: 600px;
  color: var(--muted);
  font-size: 18px;
  line-height: 1.8;
}

/* CARDS */
.grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px,1fr));
  gap: 18px;
  margin-top: 54px;
}

.card {
  background: var(--surface);
  border: 1px solid var(--line);
  border-radius: 24px;
  padding: 28px;
  transition: .25s;
}

.card:hover { transform: translateY(-3px); border-color: rgba(125,211,252,0.18); }

.card-tag {
  display: inline-block;
  margin-bottom: 18px;
  padding: 5px 10px;
  border-radius: 999px;
  background: var(--accent-soft);
  border: 1px solid var(--accent-line);
  color: var(--accent);
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
}

.card h3 {
  font-family: 'Cabinet Grotesk', sans-serif;
  font-size: 22px;
  line-height: 1.2;
  letter-spacing: -0.04em;
  margin-bottom: 12px;
}

.card p { color: var(--muted); font-size: 15px; line-height: 1.8; }

/* TRANSFORMATION */
.transform-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px,1fr));
  gap: 18px;
  margin-top: 54px;
}

.transform-card {
  background: var(--surface);
  border: 1px solid var(--line);
  border-radius: 24px;
  padding: 28px;
  transition: .25s;
  position: relative;
  overflow: hidden;
}

.transform-card::after {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 1px;
  background: linear-gradient(90deg, transparent, var(--accent), transparent);
  opacity: 0;
  transition: opacity .25s;
}

.transform-card:hover { transform: translateY(-3px); border-color: rgba(125,211,252,0.18); }
.transform-card:hover::after { opacity: 1; }

.transform-before {
  color: var(--muted-2);
  font-size: 12px;
  text-decoration: line-through;
  margin-bottom: 10px;
}

.transform-card h3 {
  font-family: 'Cabinet Grotesk', sans-serif;
  font-size: 22px;
  line-height: 1.2;
  letter-spacing: -0.04em;
  margin-bottom: 14px;
}

.transform-card p { color: var(--muted); font-size: 15px; line-height: 1.8; }

/* MOAT */
.moat-box {
  background: linear-gradient(180deg, rgba(255,255,255,0.025), rgba(255,255,255,0.01));
  border: 1px solid var(--line);
  border-radius: var(--radius-xl);
  padding: 56px 48px;
  margin-top: 54px;
  position: relative;
  overflow: hidden;
}

.moat-box::before {
  content: '';
  position: absolute;
  bottom: -120px; right: -120px;
  width: 480px; height: 480px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(125,211,252,0.08) 0%, transparent 65%);
  pointer-events: none;
}

.moat-box h3 {
  font-family: 'Cabinet Grotesk', sans-serif;
  font-size: clamp(22px, 3vw, 34px);
  line-height: 1.1;
  letter-spacing: -0.05em;
  margin-bottom: 14px;
  max-width: 560px;
}

.moat-box > p {
  color: var(--muted);
  font-size: 16px;
  line-height: 1.8;
  max-width: 540px;
  margin-bottom: 44px;
}

.signals {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px,1fr));
  gap: 14px;
}

.signal {
  display: flex;
  align-items: flex-start;
  gap: 14px;
  background: var(--surface-2);
  border: 1px solid var(--line);
  border-radius: 16px;
  padding: 18px;
}

.signal-dot {
  width: 8px; height: 8px;
  border-radius: 50%;
  background: var(--accent);
  box-shadow: 0 0 10px rgba(125,211,252,0.5);
  margin-top: 5px;
  flex-shrink: 0;
}

.signal-body h4 { font-size: 14px; font-weight: 600; margin-bottom: 4px; }
.signal-body p { font-size: 13px; color: var(--muted); line-height: 1.6; }

/* HOW IT WORKS */
.steps {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px,1fr));
  gap: 0;
  margin-top: 54px;
}

.step { padding: 32px; }

.step-num {
  color: var(--accent);
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  margin-bottom: 16px;
}

.step h3 {
  font-family: 'Cabinet Grotesk', sans-serif;
  font-size: 22px;
  letter-spacing: -0.04em;
  line-height: 1.2;
  margin-bottom: 10px;
}

.step p { color: var(--muted); font-size: 15px; line-height: 1.8; }

/* CTA */
.cta-wrap {
  max-width: 1120px;
  margin: 0 auto;
  padding: 0 24px 120px;
}

.cta-box {
  background: linear-gradient(180deg, rgba(255,255,255,0.03), rgba(255,255,255,0.01));
  border: 1px solid var(--line);
  border-radius: var(--radius-xl);
  padding: 80px 40px;
  text-align: center;
  position: relative;
  overflow: hidden;
}

.cta-box::before {
  content: '';
  position: absolute;
  width: 600px; height: 600px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(125,211,252,0.10) 0%, transparent 65%);
  top: -260px; left: 50%;
  transform: translateX(-50%);
}

.cta-box h2 {
  font-family: 'Cabinet Grotesk', sans-serif;
  font-size: clamp(42px, 6vw, 72px);
  line-height: 0.95;
  letter-spacing: -0.06em;
  margin-bottom: 20px;
}

.cta-box > p {
  max-width: 480px;
  margin: 0 auto 38px;
  color: var(--muted);
  font-size: 17px;
  line-height: 1.8;
}

/* FORM */
.cta-form {
  display: flex;
  gap: 12px;
  justify-content: center;
  flex-wrap: wrap;
  max-width: 520px;
  margin: 0 auto;
}

.cta-input {
  flex: 1;
  min-width: 220px;
  padding: 16px 18px;
  border-radius: 14px;
  background: var(--surface);
  border: 1px solid var(--line);
  color: white;
  font-family: 'Inter', sans-serif;
  font-size: 15px;
  outline: none;
  transition: border-color .2s;
}

.cta-input::placeholder { color: var(--muted-2); }
.cta-input:focus { border-color: rgba(125,211,252,0.35); }

.cta-fine {
  margin-top: 16px;
  color: var(--muted-2);
  font-size: 12px;
}

/* SUCCESS MESSAGE */
.form-success {
  display: none;
  background: var(--accent-soft);
  border: 1px solid var(--accent-line);
  border-radius: 14px;
  padding: 20px 28px;
  color: var(--accent);
  font-size: 15px;
  max-width: 460px;
  margin: 0 auto;
}

/* FOOTER */
footer {
  border-top: 1px solid var(--line);
  padding: 34px 40px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 16px;
}

.footer-logo {
  display: flex;
  align-items: center;
  text-decoration: none;
}

.footer-logo img {
  height: 36px;
  width: auto;
  display: block;
}

.footer-social {
  display: flex;
  align-items: center;
  gap: 16px;
}

.social-link {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 36px;
  height: 36px;
  border-radius: 8px;
  border: 1px solid var(--line);
  color: var(--muted);
  text-decoration: none;
  transition: .2s;
}

.social-link:hover { color: white; border-color: rgba(255,255,255,0.2); }

.social-link svg {
  width: 16px;
  height: 16px;
  fill: currentColor;
}

.footer-copy { color: var(--muted-2); font-size: 13px; }
.footer-tag { color: var(--muted-2); font-size: 13px; font-style: italic; }

@media (max-width: 740px) {
  nav { padding: 0 20px; }
  .nav-link { display: none; }
  .score-grid { grid-template-columns: repeat(2,1fr); }
  .hero h1 { font-size: 52px; }
  .section-title { font-size: 38px; }
  .cta-box { padding: 56px 24px; }
  .moat-box { padding: 36px 24px; }
  footer { flex-direction: column; text-align: center; }
  .footer-social { justify-content: center; }
}
</style>
</head>
<body>

<!-- NAV -->
<nav>
  <a href="/" class="logo">
    <img src="https://i.imgur.com/Yyo0Zul.png" alt="Atenxa" />
  </a>
  <div class="nav-right">
    <a href="#technology" class="nav-link">Technology</a>
    <a href="#how" class="nav-link">How It Works</a>
    <a href="#FAQ" class="nav-link">F A Q</a>
    <a href="/submit.php" class="nav-btn">Analyze My Video</a>
  </div>
</nav>
