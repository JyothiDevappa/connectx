import sys

file_path = r'c:\xampp\htdocs\connectx\resources\views\become-a-sponser.blade.php'
with open(file_path, 'r', encoding='utf-8') as f:
    lines = f.readlines()

css_content = """/* TIERS CSS INJECTED */
  .tiers-section { margin: 0 auto; }
  .tier-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
  .tier-grid + .tier-grid { margin-top: 24px; }

  .tier-card { border: 1.5px solid rgba(12, 58, 48, 0.15); background: #ffffff; border-radius: 20px; padding: 36px 30px; transition: all 0.25s; position: relative; display: flex; flex-direction: column; }
  .tier-card:hover { border-color: #0c3a30; transform: translateY(-3px); box-shadow: 0 24px 60px rgba(12,58,48,0.12); }
  .tier-card.featured { background: #0c3a30; color: #ffffff; border-color: #0c3a30; }
  .tier-badge {
    position: absolute; top: -14px; right: 28px; background: #ffd2b1; color: #0c3a30;
    border-radius: 100px; padding: 6px 16px; font-size: 12px; font-weight: 700;
  }
  .tier-name { font-size: 11px; font-weight: 500; letter-spacing: 0.1em; text-transform: uppercase; color: rgba(12, 58, 48, 0.6); margin-bottom: 10px; }
  .tier-card.featured .tier-name { color: #ffd2b1; }
  .tier-title { font-size: 24px; font-weight: 700; color: #0c3a30; margin-bottom: 6px; }
  .tier-card.featured .tier-title { color: #ffffff; }
  .tier-tagline { font-size: 13px; color: #6b7280; margin-bottom: 22px; line-height: 1.5; }
  .tier-card.featured .tier-tagline { color: rgba(255,255,255,0.7); }
  .tier-list { list-style: none; padding-left: 0; margin-bottom: 26px; flex-grow: 1; }
  .tier-list li {
    font-size: 13.5px; color: #6b7280; padding: 7px 0; border-bottom: 1px solid rgba(12, 58, 48, 0.15);
    display: flex; align-items: flex-start; gap: 9px; line-height: 1.5;
  }
  .tier-card.featured .tier-list li { color: rgba(255,255,255,0.8); border-color: rgba(255,255,255,0.12); }
  .tier-list li:last-child { border-bottom: none; }
  .tier-list li::before { content: '✓'; color: rgba(12, 58, 48, 0.6); font-weight: 700; flex-shrink: 0; position: static; background: transparent; border: none; width: auto; height: auto; display: inline; left: auto; top: auto; transform: none; font-size: 13.5px; }
  .tier-card.featured .tier-list li::before { color: #ffd2b1; }
  .tier-list.collapsed li:nth-child(n+5) { display: none !important; }
  .tier-toggle {
    background: none; border: none; color: rgba(12, 58, 48, 0.6); font-size: 13px; font-weight: 600;
    cursor: pointer; padding: 0 0 22px; text-align: left; text-decoration: underline;
  }
  .tier-card.featured .tier-toggle { color: #ffd2b1; }

  .tier-btn-primary {
    background: #0c3a30; color: #ffd2b1; padding: 14px 32px; border-radius: 100px;
    font-size: 15px; font-weight: 600; text-decoration: none; display: inline-block; transition: background 0.2s, transform 0.2s;
    border: none; cursor: pointer;
  }
  .tier-btn-primary:hover { background: #19503e; transform: translateY(-1px); color:#ffd2b1; }
  .tier-btn-outline {
    border: 1.5px solid #0c3a30; color: #0c3a30; padding: 14px 32px; border-radius: 100px;
    font-size: 15px; font-weight: 500; text-decoration: none; display: inline-block; transition: all 0.2s;
  }
  .tier-btn-outline:hover { background: #0c3a30; color: #ffd2b1; }

  @media (max-width: 991px) {
    .tier-grid { grid-template-columns: 1fr 1fr; }
  }
  @media (max-width: 600px) {
    .tier-grid { grid-template-columns: 1fr; }
  }
"""

html_content = """<!-- =========================
sponserSHIP CATEGORIES REPLACED WITH TIERS
========================= -->
<section class="tiers-section position-relative pt-120 pb-120" id="tiers">
  <div class="container">
    <div class="section-head text-center" style="margin-bottom: 50px;">
        <div class="eyebrow rv">sponsership Tiers</div>
        <h2 class="sec-title rv" style="color: #0c3a30;">Choose how you show up.</h2>
        <p class="sec-desc rv" style="margin-top: 16px; max-width: 600px; margin-left: auto; margin-right: auto;">From single-event support to year-round brand integration — there's a tier built for your goals.</p>
    </div>

    <div class="tier-grid">
      <div class="tier-card featured">
        <div class="tier-badge">Flagship</div>
        <div class="tier-name">Top Tier</div>
        <div class="tier-title">Title sponser</div>
        <div class="tier-tagline">Primary brand visibility across major ConnectX initiatives</div>
        <ul class="tier-list collapsed">
          <li>Naming rights across flagship events and properties</li>
          <li>Highest logo visibility across all formats</li>
          <li>Premium positioning in podcasts, events, and lounges</li>
          <li>Opening and closing mention in key sessions</li>
          <li>Dedicated brand integration in major campaigns</li>
          <li>Priority access to top creators and influencers</li>
          <li>Exclusive collaboration opportunities</li>
          <li>Brand-led sessions or keynote opportunities</li>
          <li>Featured across all promotional materials</li>
          <li>Maximum visibility across the ConnectX ecosystem</li>
        </ul>
        <button class="tier-toggle" onclick="toggleTier(this)">Show all benefits</button>
        <a href="#sponser-form" class="tier-btn-primary" style="width:100%; text-align:center; background:#ffd2b1; color:#0c3a30;">Become Title sponser</a>
      </div>

      <div class="tier-card">
        <div class="tier-name">Secondary Tier</div>
        <div class="tier-title">Powered By sponser</div>
        <div class="tier-tagline">Secondary headline branding with strong ecosystem presence</div>
        <ul class="tier-list collapsed">
          <li>"Powered By" branding across key initiatives</li>
          <li>Prominent logo placement across platforms</li>
          <li>Integration in podcasts and content series</li>
          <li>Visibility in events and networking lounges</li>
          <li>Co-branded campaign opportunities</li>
          <li>Access to creator collaborations</li>
          <li>Mentions in promotional activities</li>
          <li>Participation in select sessions and formats</li>
          <li>Strong presence across digital channels</li>
          <li>Consistent exposure across programs</li>
        </ul>
        <button class="tier-toggle" onclick="toggleTier(this)">Show all benefits</button>
        <a href="#sponser-form" class="tier-btn-outline" style="width:100%; text-align:center;">Become Powered By sponser</a>
      </div>

      <div class="tier-card">
        <div class="tier-name">Shared Tier</div>
        <div class="tier-title">Co-sponser</div>
        <div class="tier-tagline">Supporting partner across shared initiatives</div>
        <ul class="tier-list collapsed">
          <li>Shared branding across events and activities</li>
          <li>Logo placement alongside other sponsers</li>
          <li>Participation in collaborative campaigns</li>
          <li>Visibility in selected content formats</li>
          <li>Access to networking opportunities</li>
          <li>Inclusion in event promotions</li>
          <li>Brand mentions in shared communications</li>
          <li>Limited access to creator collaborations</li>
          <li>Presence in joint initiatives</li>
          <li>Support-level visibility across ecosystem</li>
        </ul>
        <button class="tier-toggle" onclick="toggleTier(this)">Show all benefits</button>
        <a href="#sponser-form" class="tier-btn-outline" style="width:100%; text-align:center;">Become Co-sponser</a>
      </div>
    </div>

    <div class="tier-grid">
      <div class="tier-card">
        <div class="tier-name">Premium Tier</div>
        <div class="tier-title">Platinum sponser</div>
        <div class="tier-tagline">High-level presence across multiple formats and touchpoints</div>
        <ul class="tier-list collapsed">
          <li>High-visibility branding across events and content</li>
          <li>Integration in podcasts and digital formats</li>
          <li>Logo placement in key promotional assets</li>
          <li>Access to curated creators and influencers</li>
          <li>Participation in networking sessions</li>
          <li>Brand inclusion in campaigns and collaborations</li>
          <li>Visibility in lounges and meetups</li>
          <li>Priority placement in selected initiatives</li>
          <li>Multi-channel exposure across ConnectX</li>
          <li>Consistent brand engagement opportunities</li>
        </ul>
        <button class="tier-toggle" onclick="toggleTier(this)">Show all benefits</button>
        <a href="#sponser-form" class="tier-btn-outline" style="width:100%; text-align:center;">Become Platinum sponser</a>
      </div>

      <div class="tier-card">
        <div class="tier-name">Mid Tier</div>
        <div class="tier-title">Gold sponser</div>
        <div class="tier-tagline">Strong visibility in selected events and content formats</div>
        <ul class="tier-list collapsed">
          <li>Branding across selected events and sessions</li>
          <li>Logo presence in content and campaigns</li>
          <li>Participation in creator collaborations</li>
          <li>Visibility in meetups and roundtables</li>
          <li>Access to networking opportunities</li>
          <li>Brand mentions in promotional materials</li>
          <li>Inclusion in digital campaigns</li>
          <li>Presence in specific content formats</li>
          <li>Moderate exposure across channels</li>
          <li>Engagement-driven visibility</li>
        </ul>
        <button class="tier-toggle" onclick="toggleTier(this)">Show all benefits</button>
        <a href="#sponser-form" class="tier-btn-outline" style="width:100%; text-align:center;">Become Gold sponser</a>
      </div>

      <div class="tier-card">
        <div class="tier-name">Entry Tier</div>
        <div class="tier-title">Silver sponser</div>
        <div class="tier-tagline">Focused exposure in specific programs or segments</div>
        <ul class="tier-list collapsed">
          <li>Branding in selected programs or sessions</li>
          <li>Logo placement in limited formats</li>
          <li>Participation in specific campaigns</li>
          <li>Access to targeted networking opportunities</li>
          <li>Visibility in select content pieces</li>
          <li>Inclusion in event-specific promotions</li>
          <li>Brand mentions in curated activities</li>
          <li>Limited creator collaboration access</li>
          <li>Presence in niche segments</li>
          <li>Focused visibility within defined scope</li>
        </ul>
        <button class="tier-toggle" onclick="toggleTier(this)">Show all benefits</button>
        <a href="#sponser-form" class="tier-btn-outline" style="width:100%; text-align:center;">Become Silver sponser</a>
      </div>
    </div>
  </div>
</section>

<script>
function toggleTier(btn) {
  const list = btn.previousElementSibling;
  if (list.classList.contains('collapsed')) {
    list.classList.remove('collapsed');
    btn.textContent = 'Show fewer benefits';
  } else {
    list.classList.add('collapsed');
    btn.textContent = 'Show all benefits';
  }
}
</script>
"""

new_lines = lines[:1415] + [html_content + "\n"] + lines[1591:]
new_lines = new_lines[:1055] + [css_content + "\n"] + new_lines[1058:]

with open(file_path, 'w', encoding='utf-8') as f:
    f.writelines(new_lines)
