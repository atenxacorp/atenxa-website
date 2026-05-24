<!-- FOOTER - Replace existing footer in footer.php -->
<footer>
  <div class="footer-left">
    <a href="/" class="footer-logo">
      <img src="https://i.imgur.com/Yyo0Zul.png" alt="Atenxa" />
    </a>
    <p class="footer-tagline">"Virality is temporary. Retention builds empires."</p>
  </div>

  <div class="footer-social">
    <!-- X / Twitter -->
    <a href="https://x.com/atenxacorp" target="_blank" class="social-link" aria-label="Follow Atenxa on X">
      <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.741l7.731-8.835L1.254 2.25H8.08l4.253 5.622 5.911-5.622zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
      </svg>
    </a>
    <!-- Instagram -->
    <a href="https://instagram.com/atenxacorp" target="_blank" class="social-link" aria-label="Follow Atenxa on Instagram">
      <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
      </svg>
    </a>
    <!-- TikTok -->
    <a href="https://tiktok.com/@atenxacorp" target="_blank" class="social-link" aria-label="Follow Atenxa on TikTok">
      <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.18 8.18 0 004.78 1.52V6.75a4.85 4.85 0 01-1.01-.06z"/>
      </svg>
    </a>
  </div>

  <div class="footer-right">
    <div class="footer-links">
      <a href="/privacy.php" class="footer-link">Privacy Policy</a>
      <span class="footer-dot">·</span>
      <a href="/terms.php" class="footer-link">Terms of Service</a>
    </div>
    <div class="footer-copy">© 2026 Atenxa. All rights reserved.</div>
  </div>
</footer>

<style>
footer {
  border-top: 1px solid rgba(255,255,255,0.06);
  padding: 36px 40px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 20px;
}

.footer-left {
  display: flex;
  flex-direction: column;
  gap: 8px;
}

.footer-logo img {
  height: 36px;
  width: auto;
  display: block;
  border-radius: 8px;
  border: 1px solid rgba(125,211,252,0.15);
}

.footer-tagline {
  color: #6b7280;
  font-size: 12px;
  font-style: italic;
}

.footer-social {
  display: flex;
  align-items: center;
  gap: 12px;
}

.social-link {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 36px;
  height: 36px;
  border-radius: 8px;
  border: 1px solid rgba(255,255,255,0.06);
  color: #6b7280;
  text-decoration: none;
  transition: color .2s, border-color .2s;
}

.social-link:hover {
  color: white;
  border-color: rgba(255,255,255,0.18);
}

.social-link svg {
  width: 15px;
  height: 15px;
  fill: currentColor;
}

.footer-right {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  gap: 6px;
}

.footer-links {
  display: flex;
  align-items: center;
  gap: 8px;
}

.footer-link {
  color: #6b7280;
  font-size: 13px;
  text-decoration: none;
  transition: color .2s;
}

.footer-link:hover { color: #7dd3fc; }

.footer-dot {
  color: #4b5563;
  font-size: 13px;
}

.footer-copy {
  color: #4b5563;
  font-size: 12px;
}

@media (max-width: 640px) {
  footer {
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 32px 20px;
  }
  .footer-right { align-items: center; }
  .footer-social { justify-content: center; }
}
</style>
