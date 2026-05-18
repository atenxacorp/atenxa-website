<?php include 'header.php'; ?>

<section class="hero" style="min-height: 80vh;">
  <div class="hero-glow"></div>
  <div class="hero-badge">Video Submission</div>
  
  <h1>Analyze Your Video</h1>
  <p class="hero-sub">Upload your video file (max 60MB) to get your attention report.</p>

  <div class="report" style="max-width: 500px; margin: 40px auto; text-align: left;">
    <form action="upload_to_gdrive.php" method="POST" enctype="multipart/form-data" class="cta-form" style="display: flex; flex-direction: column; gap: 20px;">
      <div style="display: flex; flex-direction: column; gap: 8px;">
        <label style="font-size: 14px; color: var(--muted);">Your Email</label>
        <input type="email" name="email" class="cta-input" placeholder="your@email.com" required style="width: 100%;">
      </div>
      
      <div style="display: flex; flex-direction: column; gap: 8px;">
        <label style="font-size: 14px; color: var(--muted);">Target Platform</label>
        <select name="platform" class="cta-input" style="width: 100%; appearance: none;">
          <option value="tiktok">TikTok</option>
          <option value="reels">Instagram Reels</option>
          <option value="shorts">YouTube Shorts</option>
        </select>
      </div>

      <div style="display: flex; flex-direction: column; gap: 8px;">
        <label style="font-size: 14px; color: var(--muted);">Video File (MP4/MOV)</label>
        <input type="file" name="video" accept="video/*" class="cta-input" required style="width: 100%; padding: 12px;">
      </div>

      <button type="submit" class="btn-primary" style="width: 100%; margin-top: 10px;">Upload & Analyze →</button>
    </form>
  </div>
</section>

<?php include 'footer.php'; ?>
