<?php
// [POS-1] Navigation & Header - Completed
// index.php - QuickPOS Landing Page
$page_title = "QuickPOS – The Last POS System You'll Ever Need";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $page_title; ?></title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
  <!-- Feather Icons CDN -->
  <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>

<!-- ========== NAVIGATION ========== -->
<header class="navbar" id="navbar">
  <div class="nav-container">
    <a href="#" class="logo">
      <span class="logo-icon">⚡</span>
      <span class="logo-text">Quick<strong>POS</strong></span>
    </a>
    <nav class="nav-links">
      <a href="#features">Features</a>
      <a href="#pricing">Pricing</a>
      <a href="#contact">Contact</a>
    </nav>
    <a href="#contact" class="btn-signup">Sign Up Free</a>
    <button class="hamburger" id="hamburger" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
  </div>
  <!-- Mobile Menu -->
  <div class="mobile-menu" id="mobileMenu">
    <a href="#features">Features</a>
    <a href="#pricing">Pricing</a>
    <a href="#contact">Contact</a>
    <a href="#contact" class="btn-signup-mobile">Sign Up Free</a>
  </div>
</header>

<!-- ========== HERO SECTION ========== -->
<!-- [POS-2] Hero Section - headline, CTA, stats, mockup -->
<section class="hero" id="home">
  <div class="hero-bg-grid"></div>
  <div class="hero-glow"></div>
  <div class="hero-container">
    <div class="hero-badge">
      <span class="badge-dot"></span> Now with AI-powered analytics
    </div>
    <h1 class="hero-title">
      The Last POS System<br/>
      <span class="gradient-text">You'll Ever Need</span>
    </h1>
    <p class="hero-sub">
      Sell faster, manage smarter, and grow effortlessly.
      QuickPOS puts your entire business on one beautiful screen.
    </p>
    <div class="hero-cta-group">
      <a href="#contact" class="btn-primary">Get Started for Free</a>
      <a href="#features" class="btn-ghost">
        <i data-feather="play-circle"></i> See how it works
      </a>
    </div>
    <div class="hero-stats">
      <div class="stat"><strong>12k+</strong><span>Active Stores</span></div>
      <div class="stat-divider"></div>
      <div class="stat"><strong>99.9%</strong><span>Uptime SLA</span></div>
      <div class="stat-divider"></div>
      <div class="stat"><strong>4.9★</strong><span>App Rating</span></div>
    </div>
    <!-- POS Mockup -->
    <div class="hero-mockup">
      <div class="mockup-screen">
        <div class="mockup-topbar">
          <span class="dot red"></span>
          <span class="dot yellow"></span>
          <span class="dot green"></span>
          <span class="mockup-title-bar">QuickPOS — Dashboard</span>
        </div>
        <div class="mockup-body">
          <div class="mockup-sidebar">
            <div class="sidebar-item active"><i data-feather="grid"></i></div>
            <div class="sidebar-item"><i data-feather="shopping-bag"></i></div>
            <div class="sidebar-item"><i data-feather="bar-chart-2"></i></div>
            <div class="sidebar-item"><i data-feather="users"></i></div>
            <div class="sidebar-item"><i data-feather="settings"></i></div>
          </div>
          <div class="mockup-main">
            <div class="mockup-header-row">
              <span class="mockup-greeting">Good morning, Ahmed 👋</span>
              <span class="mockup-date">Sunday, Apr 19</span>
            </div>
            <div class="mockup-cards">
              <div class="m-card green">
                <span class="m-card-label">Today's Sales</span>
                <span class="m-card-value">$4,821</span>
                <span class="m-card-change">▲ 12%</span>
              </div>
              <div class="m-card blue">
                <span class="m-card-label">Orders</span>
                <span class="m-card-value">138</span>
                <span class="m-card-change">▲ 8%</span>
              </div>
              <div class="m-card orange">
                <span class="m-card-label">Low Stock</span>
                <span class="m-card-value">7</span>
                <span class="m-card-change">Items</span>
              </div>
            </div>
            <div class="mockup-chart-area">
              <div class="chart-label">Weekly Revenue</div>
              <div class="chart-bars">
                <div class="bar" style="height:45%"><span>M</span></div>
                <div class="bar" style="height:70%"><span>T</span></div>
                <div class="bar" style="height:55%"><span>W</span></div>
                <div class="bar" style="height:90%"><span>T</span></div>
                <div class="bar active" style="height:80%"><span>F</span></div>
                <div class="bar" style="height:60%"><span>S</span></div>
                <div class="bar" style="height:40%"><span>S</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mockup-glow-effect"></div>
    </div>
  </div>
</section>

<!-- ========== FEATURES SECTION ========== -->
<!-- [POS-3] Features Section - 4 feature cards with icons -->
<section class="features" id="features">
  <div class="section-container">
    <div class="section-label">FEATURES</div>
    <h2 class="section-title">Everything your business needs,<br/><span class="gradient-text">nothing it doesn't</span></h2>
    <p class="section-sub">Built for speed, designed for humans. QuickPOS gives your team superpowers.</p>

    <div class="features-grid">
      <div class="feature-card">
        <div class="feature-icon-wrap teal">
          <i data-feather="package"></i>
        </div>
        <h3>Inventory Management</h3>
        <p>Track stock in real-time across all locations. Get low-stock alerts before you run out, and auto-generate purchase orders with one click.</p>
        <ul class="feature-list">
          <li><i data-feather="check"></i> Multi-location tracking</li>
          <li><i data-feather="check"></i> Barcode scanning</li>
          <li><i data-feather="check"></i> Supplier management</li>
        </ul>
      </div>

      <div class="feature-card featured">
        <div class="featured-badge">Most Popular</div>
        <div class="feature-icon-wrap purple">
          <i data-feather="bar-chart-2"></i>
        </div>
        <h3>Sales Analytics</h3>
        <p>Understand your business at a glance. AI-powered insights show you your best products, peak hours, and growth opportunities.</p>
        <ul class="feature-list">
          <li><i data-feather="check"></i> Real-time dashboards</li>
          <li><i data-feather="check"></i> AI trend predictions</li>
          <li><i data-feather="check"></i> Export to PDF/Excel</li>
        </ul>
      </div>

      <div class="feature-card">
        <div class="feature-icon-wrap orange">
          <i data-feather="zap"></i>
        </div>
        <h3>Easy Integration</h3>
        <p>Connect to Shopify, WooCommerce, QuickBooks, and 50+ apps in minutes. No developer needed — plug and play.</p>
        <ul class="feature-list">
          <li><i data-feather="check"></i> 50+ integrations</li>
          <li><i data-feather="check"></i> Open REST API</li>
          <li><i data-feather="check"></i> Webhook support</li>
        </ul>
      </div>

      <div class="feature-card">
        <div class="feature-icon-wrap blue">
          <i data-feather="shield"></i>
        </div>
        <h3>Secure Payments</h3>
        <p>Accept cash, card, mobile wallets, and QR codes. PCI-DSS compliant with end-to-end encryption on every transaction.</p>
        <ul class="feature-list">
          <li><i data-feather="check"></i> PCI-DSS compliant</li>
          <li><i data-feather="check"></i> 15+ payment methods</li>
          <li><i data-feather="check"></i> Instant settlement</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ========== PRICING SECTION ========== -->
<section class="pricing" id="pricing">
  <div class="section-container">
    <div class="section-label">PRICING</div>
    <h2 class="section-title">Simple, transparent<br/><span class="gradient-text">pricing</span></h2>
    <p class="section-sub">No hidden fees. Cancel anytime. Scale as you grow.</p>

    <div class="pricing-grid">
      <!-- Basic -->
      <div class="pricing-card">
        <div class="plan-name">Basic</div>
        <div class="plan-price"><span class="currency">$</span>29<span class="period">/mo</span></div>
        <p class="plan-desc">Perfect for small shops & solo entrepreneurs just getting started.</p>
        <ul class="plan-features">
          <li><i data-feather="check-circle"></i> 1 Register / Terminal</li>
          <li><i data-feather="check-circle"></i> Inventory up to 500 items</li>
          <li><i data-feather="check-circle"></i> Basic Sales Reports</li>
          <li><i data-feather="check-circle"></i> Email Support</li>
          <li class="disabled"><i data-feather="x-circle"></i> Multi-location</li>
          <li class="disabled"><i data-feather="x-circle"></i> AI Analytics</li>
        </ul>
        <a href="#contact" class="btn-plan">Get Started</a>
      </div>

      <!-- Pro -->
      <div class="pricing-card pro">
        <div class="pro-badge">⭐ Best Value</div>
        <div class="plan-name">Pro</div>
        <div class="plan-price"><span class="currency">$</span>79<span class="period">/mo</span></div>
        <p class="plan-desc">For growing businesses that need power and flexibility.</p>
        <ul class="plan-features">
          <li><i data-feather="check-circle"></i> Up to 5 Registers</li>
          <li><i data-feather="check-circle"></i> Unlimited Inventory</li>
          <li><i data-feather="check-circle"></i> Advanced Analytics</li>
          <li><i data-feather="check-circle"></i> Priority Support (24/7)</li>
          <li><i data-feather="check-circle"></i> Multi-location (3 sites)</li>
          <li class="disabled"><i data-feather="x-circle"></i> AI Predictions</li>
        </ul>
        <a href="#contact" class="btn-plan pro-btn">Get Started</a>
      </div>

      <!-- Enterprise -->
      <div class="pricing-card">
        <div class="plan-name">Enterprise</div>
        <div class="plan-price"><span class="currency"></span>Custom<span class="period"></span></div>
        <p class="plan-desc">Tailored solutions for large chains and enterprise retailers.</p>
        <ul class="plan-features">
          <li><i data-feather="check-circle"></i> Unlimited Registers</li>
          <li><i data-feather="check-circle"></i> Unlimited Inventory</li>
          <li><i data-feather="check-circle"></i> AI-Powered Analytics</li>
          <li><i data-feather="check-circle"></i> Dedicated Account Manager</li>
          <li><i data-feather="check-circle"></i> Unlimited Locations</li>
          <li><i data-feather="check-circle"></i> Custom Integrations</li>
        </ul>
        <a href="#contact" class="btn-plan">Contact Sales</a>
      </div>
    </div>
  </div>
</section>

<!-- ========== CONTACT SECTION ========== -->
<section class="contact" id="contact">
  <div class="section-container">
    <div class="contact-wrapper">
      <div class="contact-info">
        <div class="section-label">CONTACT</div>
        <h2 class="section-title">Let's get your<br/><span class="gradient-text">store running</span></h2>
        <p class="section-sub">Fill out the form and our team will reach out within 24 hours to get you set up.</p>
        <div class="contact-details">
          <div class="contact-item">
            <i data-feather="mail"></i>
            <span>hello@quickpos.io</span>
          </div>
          <div class="contact-item">
            <i data-feather="phone"></i>
            <span>+1 (800) 555-0199</span>
          </div>
          <div class="contact-item">
            <i data-feather="map-pin"></i>
            <span>San Francisco, CA 94107</span>
          </div>
        </div>
      </div>
      <div class="contact-form-wrap">
        <?php
        // Show success message if redirected back with ?sent=1
        if (isset($_GET['sent']) && $_GET['sent'] == '1'):
        ?>
        <div class="form-success">
          <i data-feather="check-circle"></i>
          <h3>Message Sent!</h3>
          <p>We'll get back to you within 24 hours.</p>
        </div>
        <?php else: ?>
        <form class="contact-form" action="php/contact.php" method="POST">
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Ahmed Khan" required />
          </div>
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="ahmed@yourstore.com" required />
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" placeholder="Tell us about your business and what you need..." required></textarea>
          </div>
          <button type="submit" class="btn-submit">
            <i data-feather="send"></i> Send Message
          </button>
        </form>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- ========== FOOTER ========== -->
<footer class="footer">
  <div class="footer-container">
    <div class="footer-top">
      <div class="footer-brand">
        <a href="#" class="logo">
          <span class="logo-icon">⚡</span>
          <span class="logo-text">Quick<strong>POS</strong></span>
        </a>
        <p>The modern Point of Sale system built for businesses that refuse to slow down.</p>
        <div class="social-links">
          <a href="#" aria-label="Twitter"><i data-feather="twitter"></i></a>
          <a href="#" aria-label="Instagram"><i data-feather="instagram"></i></a>
          <a href="#" aria-label="LinkedIn"><i data-feather="linkedin"></i></a>
          <a href="#" aria-label="GitHub"><i data-feather="github"></i></a>
        </div>
      </div>
      <div class="footer-links-group">
        <h4>Product</h4>
        <a href="#features">Features</a>
        <a href="#pricing">Pricing</a>
        <a href="#">Integrations</a>
        <a href="#">Changelog</a>
      </div>
      <div class="footer-links-group">
        <h4>Company</h4>
        <a href="#">About</a>
        <a href="#">Blog</a>
        <a href="#">Careers</a>
        <a href="#contact">Contact</a>
      </div>
      <div class="footer-links-group">
        <h4>Legal</h4>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
        <a href="#">Cookie Policy</a>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> QuickPOS Inc. All rights reserved.</p>
      <p>Made with ❤️ for retailers everywhere</p>
    </div>
  </div>
</footer>

<script src="js/main.js"></script>
<script>feather.replace();</script>
</body>
</html>
