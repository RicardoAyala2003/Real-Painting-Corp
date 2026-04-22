<?php
/**
 * Template Name: About Template
 *
 * About page for Real Painting Corp
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="rpc-about-page bg-[#f6f5f0] text-[#192F44] overflow-hidden">

  <?php
    $about_hero_image = '/wp-content/uploads/2026/04/home-makeover-2026-01-05-04-46-23-utc-scaled.jpg';
    $stamp_vertical   = '/wp-content/uploads/2026/04/Estampados-04-1-scaled.png';
    $stamp_mission    = '/wp-content/uploads/2026/04/Estampados-01-scaled.png';

    $values = [
      [
        'title' => 'Certainty',
        'copy'  => 'Every project has a defined scope, a clear timeline, and a predictable result. You never have to guess what’s happening, what it costs, or when it’ll be done. We eliminate the uncertainty  that’s the product.',
        'tone'  => '#192F44'
      ],
      [
        'title' => 'Cleanliness',
        'copy'  => 'We treat your home like it’s ours. Floors are protected. Furniture is covered. Surfaces are shielded. And when we leave, the site is cleaner than when we arrived. Cleanliness is our first signal of professionalism  before we paint a single wall.',
        'tone'  => '#236476'
      ],
      [
        'title' => 'Commitment',
        'copy'  => 'What we promise, we deliver  on time and in full. Schedule discipline isn’t something we aspire to. It’s how we operate. We respect your time as much as we respect your property.',
        'tone'  => '#4A6C2F'
      ],
      [
        'title' => 'Trust',
        'copy'  => 'We are C-33 licensed, carry General Liability and Workers’ Compensation insurance, and are fully bonded. When you open your door to our team, you’re protected at every level  from the first estimate to the final walk-through.',
        'tone'  => '#7DAD3F'
      ],
      [
        'title' => 'Excellence',
        'copy'  => 'With 40+ years of combined experience, we don’t cut corners. Every layer of prep, every coat, every finish reflects a commitment to work that lasts  not work that’s fast. We prioritize quality over volume. Always.',
        'tone'  => '#192F44'
      ],
    ];

    $communities = [
      ['name' => 'Rancho Santa Margarita', 'tone' => '#192F44'],
      ['name' => 'Coto de Caza', 'tone' => '#236476'],
      ['name' => 'Ladera Ranch', 'tone' => '#7DAD3F'],
      ['name' => 'Mission Viejo', 'tone' => '#173142'],
      ['name' => 'Irvine', 'tone' => '#192F44'],
      ['name' => 'Laguna Niguel', 'tone' => '#236476'],
      ['name' => 'Yorba Linda', 'tone' => '#7DAD3F'],
      ['name' => 'Aliso Viejo', 'tone' => '#173142'],
      ['name' => 'Tustin Ranch', 'tone' => '#192F44'],
      ['name' => 'Corona', 'tone' => '#236476'],
      ['name' => 'Murrieta', 'tone' => '#7DAD3F'],
      ['name' => 'Temecula', 'tone' => '#173142'],
      ['name' => 'Menifee', 'tone' => '#192F44'],
      ['name' => 'Rancho Cucamonga', 'tone' => '#236476'],
      ['name' => 'Eastvale', 'tone' => '#7DAD3F'],
      ['name' => 'Chino Hills', 'tone' => '#173142'],
      ['name' => 'Pasadena', 'tone' => '#192F44'],
      ['name' => 'Glendale', 'tone' => '#236476'],
      ['name' => 'Arcadia', 'tone' => '#7DAD3F'],
      ['name' => 'Torrance', 'tone' => '#173142'],
    ];
  ?>

  <!-- HERO -->
  <section class="relative overflow-hidden border-b border-[#192F44]/10 bg-[linear-gradient(180deg,#ffffff_0%,#f6f5f0_100%)] py-16 lg:py-24">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(207,224,218,0.55),transparent_28%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(35,100,118,0.08),transparent_30%)]"></div>

    <div
      class="rpc-about-vertical-stamp hidden lg:block"
      style="background-image:url('<?php echo esc_url($stamp_vertical); ?>');"
      aria-hidden="true">
    </div>

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="grid items-center gap-12 lg:grid-cols-[0.92fr_1.08fr] lg:gap-16">

        <!-- TEXT -->
        <div class="ajs-reveal-left">
          <p class="text-xs font-black uppercase tracking-[0.24em] text-[#236476]">
            About Us
          </p>

          <h1 class="mt-5 max-w-[11ch] text-4xl font-extrabold leading-[0.98] tracking-[-0.05em] text-[#192F44] md:text-6xl">
            Be Real. Build Real.
          </h1>

          <div class="mt-6 h-[3px] w-24 bg-[linear-gradient(90deg,#192F44_0%,#236476_55%,#7DAD3F_100%)]"></div>

          <p class="mt-8 max-w-2xl text-base leading-8 text-[#192F44]/80 md:text-lg">
            We founded Real Painting Corp on a simple conviction: that homeowners deserve a contractor who shows up prepared, protects their home, respects their time, and delivers a result worth recommending  without the stress of wondering if it’ll actually happen.
          </p>

          <div class="mt-10 grid gap-3 sm:grid-cols-2">
            <div class="border border-[#192F44]/10 bg-white px-5 py-4 shadow-[0_10px_24px_rgba(25,47,68,0.06)]">
              <p class="text-sm font-bold text-[#192F44]">
                Shows up prepared. Protects your home. Respects your time.
              </p>
            </div>

            <div class="border border-[#192F44]/10 bg-[#CFE0DA]/55 px-5 py-4 shadow-[0_10px_24px_rgba(25,47,68,0.06)]">
              <p class="text-sm font-bold text-[#192F44]">
                Delivers a result worth recommending.
              </p>
            </div>
          </div>
        </div>

        <!-- IMAGE -->
        <div class="ajs-reveal-right">
          <div class="relative overflow-hidden border border-[#192F44]/10 bg-white p-3 shadow-[0_24px_60px_rgba(25,47,68,0.12)]">
            <div class="relative overflow-hidden">
              <img
                src="<?php echo esc_url($about_hero_image); ?>"
                alt="Real Painting Corp team"
                class="rpc-about-hero-photo h-[420px] w-full object-cover md:h-[520px]"
              >
              <div class="absolute inset-0 bg-[linear-gradient(180deg,rgba(25,47,68,0.03)_0%,rgba(25,47,68,0.10)_100%)]"></div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- OUR STORY -->
  <section class="relative overflow-hidden border-y border-[#192F44]/10 bg-[linear-gradient(180deg,#ffffff_0%,#f6f5f0_100%)] py-20 lg:py-24">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(35,100,118,0.10),transparent_24%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(125,173,63,0.12),transparent_26%)]"></div>
    <div class="absolute left-0 top-0 h-full w-[18%] bg-[linear-gradient(180deg,rgba(207,224,218,0.62)_0%,rgba(255,255,255,0)_100%)] z-0"></div>

    <div
      class="absolute left-6 top-1/2 hidden h-[72%] w-[82px] -translate-y-1/2 opacity-[0.0] mix-blend-multiply lg:block"
      style="
        background-image:url('/wp-content/uploads/2026/04/Estampados-04-1-scaled.png');
        background-repeat:repeat-y;
        background-position:center;
        background-size:contain;
      "
      aria-hidden="true">
    </div>

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="grid gap-10 xl:grid-cols-[0.78fr_1.22fr] xl:gap-14">

        <!-- LEFT -->
        <div class="ajs-reveal-left">
          <div class="sticky top-28">
            <p class="text-xs font-black uppercase tracking-[0.24em] text-[#4A6C2F]">
              Our Story
            </p>

            <h2 class="mt-5 max-w-[10ch] text-3xl font-black leading-[0.94] tracking-[-0.05em] text-[#192F44] md:text-5xl">
              Built to Be the Most Trusted One.
            </h2>

            <div class="mt-7 h-[3px] w-24 bg-[linear-gradient(90deg,#192F44_0%,#236476_55%,#7DAD3F_100%)]"></div>

            <div class="mt-10 overflow-hidden border border-[#192F44]/10 bg-[linear-gradient(135deg,rgba(255,255,255,0.96),rgba(207,224,218,0.40))] p-6 shadow-[0_16px_34px_rgba(25,47,68,0.06)]">
              <div class="mb-4 h-[3px] w-16 bg-[#236476]"></div>
              <p class="text-lg font-black leading-8 tracking-[-0.03em] text-[#192F44]">
                Not the biggest company in Southern California. The most trusted one.
              </p>
            </div>
          </div>
        </div>

        <!-- RIGHT -->
        <div class="ajs-reveal-right">
          <div class="relative overflow-hidden border border-[#192F44]/10 bg-[linear-gradient(180deg,#fcfbf8_0%,#ffffff_100%)] p-6 shadow-[0_20px_44px_rgba(25,47,68,0.08)] md:p-8 lg:p-10">

            <div class="absolute right-0 top-0 h-28 w-28 translate-x-[20%] -translate-y-[20%] rotate-12 bg-[#CFE0DA]/60"></div>
            <div class="absolute bottom-0 left-0 h-24 w-24 -translate-x-[20%] translate-y-[20%] rotate-12 bg-[#7DAD3F]/12"></div>

            <div class="space-y-6 text-base leading-8 text-[#192F44]/80">

              <p>
                Real Painting Corp was founded in 2023 by two partners who spent decades working in the painting and remodeling industry across Southern California. After years of working under other contractors  where the margins were thin, quality control was inconsistent, and the client relationship was always an afterthought  they made a decision.
              </p>

              <div class="overflow-hidden border-l-4 border-[#236476] bg-[linear-gradient(135deg,rgba(255,255,255,1),rgba(35,100,118,0.06))] px-5 py-5 shadow-[0_10px_24px_rgba(25,47,68,0.05)]">
                <p class="text-2xl font-black tracking-[-0.04em] text-[#192F44] md:text-3xl">
                  Build something different.
                </p>
              </div>

              <p>
                Not a company that talks about quality. A company that proves it  every single day, in every single home. Where clean execution isn’t a selling point, it’s the baseline. Where showing up on time isn’t a bonus, it’s the expectation. Where a homeowner opens their front door and feels certain they made the right call.
              </p>

              <p>
                That’s what Real Painting was built to be. Not the biggest company in Southern California. The most trusted one.
              </p>

              <p>
                Today we serve homeowners across Orange County, Los Angeles, Riverside, and San Bernardino  with full licensing, insurance, and a reputation built entirely on referrals and results.
              </p>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- VALUES -->
  <section class="relative overflow-hidden border-y border-[#192F44]/10 bg-white py-20 lg:py-24">
    <div class="absolute right-0 top-0 h-full w-[28%] bg-[#CFE0DA]/30"></div>

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="ajs-reveal-up max-w-3xl">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#236476]">
          What We Stand For
        </p>

        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.05em] text-[#192F44] md:text-5xl">
          Five Values. One Standard of Work.
        </h2>
      </div>

      <div class="mt-12 grid gap-5 md:grid-cols-2 xl:grid-cols-5">
        <?php foreach ($values as $value) : ?>
          <article class="ajs-reveal-stagger group relative overflow-hidden border border-[#192F44]/10 bg-[#fdfcf8] p-6 shadow-[0_16px_34px_rgba(25,47,68,0.06)]">
            <div class="absolute inset-x-0 top-0 h-2 transition-all duration-500 group-hover:h-3" style="background: <?php echo esc_attr($value['tone']); ?>;"></div>

            <div class="mb-6 mt-2 flex gap-2">
              <span class="h-8 w-8 border border-[#192F44]/10 transition-transform duration-500 group-hover:rotate-6 group-hover:scale-110" style="background: <?php echo esc_attr($value['tone']); ?>;"></span>
              <span class="h-8 w-8 border border-[#192F44]/10 bg-[#CFE0DA] transition-transform duration-500 group-hover:-rotate-6 group-hover:scale-110"></span>
            </div>

            <h3 class="text-xl font-black tracking-[-0.03em] text-[#192F44]">
              <?php echo esc_html($value['title']); ?>
            </h3>

            <p class="mt-4 text-[15px] leading-8 text-[#192F44]/76">
              <?php echo esc_html($value['copy']); ?>
            </p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- MISSION -->
  <section class="relative overflow-hidden bg-[#192F44] py-20 text-white lg:py-24">
    <div
      class="rpc-about-mission-stamp absolute inset-0"
      style="background-image:url('<?php echo esc_url($stamp_mission); ?>');"
      aria-hidden="true">
    </div>

    <div class="relative mx-auto max-w-5xl px-4 text-center">
      <p class="ajs-reveal-up text-xs font-black uppercase tracking-[0.22em] text-[#CFE0DA]">
        Our Mission
      </p>

      <h2 class="ajs-reveal-up mt-5 text-3xl font-black leading-tight tracking-[-0.05em] md:text-5xl">
        Clean execution. Schedule discipline. Aesthetic certainty.
      </h2>

      <p class="ajs-reveal-up mx-auto mt-8 max-w-4xl text-base leading-8 text-white/84 md:text-lg">
        We transform homes across Southern California through premium painting and interior remodeling  delivered with clean execution, schedule discipline, and aesthetic certainty. We operate with full professional structure so that every homeowner feels total certainty from the first call to the final walk-through.
      </p>
    </div>
  </section>

  <!-- LICENSED -->
  <section class="bg-[#f6f5f0] py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="grid gap-8 xl:grid-cols-[1.1fr_0.9fr] xl:items-stretch">

        <article class="ajs-reveal-left relative overflow-hidden border border-[#192F44]/10 bg-white p-8 shadow-[0_20px_44px_rgba(25,47,68,0.08)] md:p-10">
          <div class="absolute right-0 top-0 h-24 w-24 translate-x-[20%] -translate-y-[20%] rotate-12 bg-[#CFE0DA]/60"></div>

          <p class="text-xs font-black uppercase tracking-[0.22em] text-[#236476]">
            Licensed, Insured & Bonded
          </p>

          <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.05em] text-[#192F44] md:text-5xl">
            Professional structure. Full accountability.
          </h2>

          <div class="mt-8 space-y-5 text-base leading-8 text-[#192F44]/80">
            <p>
              Real Painting Corp holds a C-33 Painting and Decorating license (CSLB #1111920), a B-2 General Building license, General Liability insurance, Workers’ Compensation coverage, and a surety bond. We are compliant with all OSHA and California state regulations.
            </p>

            <p class="font-bold text-[#192F44]">
              When you hire Real Painting, you’re working with a legitimate, accountable business — not a crew with a van.
            </p>
          </div>
        </article>

        <div class="grid gap-5 sm:grid-cols-2 xl:grid-cols-1">

          <article class="ajs-reveal-stagger border border-[#192F44]/10 bg-[#CFE0DA] p-6 shadow-[0_16px_34px_rgba(25,47,68,0.06)]">
            <p class="text-xs font-black uppercase tracking-[0.18em] text-[#192F44]/70">Credential</p>
            <h3 class="mt-3 text-2xl font-black tracking-[-0.03em] text-[#192F44]">C-33 Licensed</h3>
          </article>

          <article class="ajs-reveal-stagger border border-[#192F44]/10 bg-[#CFE0DA] p-6 shadow-[0_16px_34px_rgba(25,47,68,0.06)]">
            <p class="text-xs font-black uppercase tracking-[0.18em] text-[#192F44]/70">Credential</p>
            <h3 class="mt-3 text-2xl font-black tracking-[-0.03em] text-[#192F44]">B-2 Licensed</h3>
          </article>

          <article class="ajs-reveal-stagger border border-[#192F44]/10 bg-white p-6 shadow-[0_16px_34px_rgba(25,47,68,0.06)]">
            <p class="text-xs font-black uppercase tracking-[0.18em] text-[#236476]">Protection</p>
            <h3 class="mt-3 text-2xl font-black tracking-[-0.03em] text-[#192F44]">General Liability</h3>
          </article>

          <article class="ajs-reveal-stagger border border-[#192F44]/10 bg-white p-6 shadow-[0_16px_34px_rgba(25,47,68,0.06)]">
            <p class="text-xs font-black uppercase tracking-[0.18em] text-[#4A6C2F]">Coverage</p>
            <h3 class="mt-3 text-2xl font-black tracking-[-0.03em] text-[#192F44]">Workers’ Compensation</h3>
          </article>

          <article class="ajs-reveal-stagger border border-[#192F44]/10 bg-[#7DAD3F] p-6 shadow-[0_16px_34px_rgba(25,47,68,0.10)]">
            <p class="text-xs font-black uppercase tracking-[0.18em] text-white/82">Accountability</p>
            <h3 class="mt-3 text-2xl font-black tracking-[-0.03em] text-white">Surety Bond</h3>
          </article>

        </div>
      </div>
    </div>
  </section>

  <!-- COMMUNITIES -->
  <section class="border-y border-[#192F44]/10 bg-white py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="ajs-reveal-up mx-auto max-w-4xl text-center">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#236476]">
          Service Area Focus
        </p>

        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.05em] text-[#192F44] md:text-5xl">
          Serving Southern California’s Most Valued Communities
        </h2>

        <p class="mx-auto mt-6 max-w-3xl text-base leading-8 text-[#192F44]/76">
          We focus our work in the communities where homeowners invest in their properties and expect a level of service that matches the value of their home.
        </p>
      </div>

      <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        <?php foreach ($communities as $community) : ?>
          <div class="ajs-reveal-stagger rpc-about-community-card border border-[#192F44]/10 bg-[#fdfcf8] p-5 shadow-[0_12px_28px_rgba(25,47,68,0.06)]" style="--rpc-community-tone: <?php echo esc_attr($community['tone']); ?>;">
            <div class="mb-4 h-[3px] w-16 bg-[var(--rpc-community-tone)] transition-all duration-500"></div>
            <p class="text-[11px] font-black uppercase tracking-[0.18em] text-[var(--rpc-community-tone)]">
              Community Focus
            </p>
            <h3 class="mt-2 text-lg font-black tracking-[-0.03em] text-[#192F44]">
              <?php echo esc_html($community['name']); ?>
            </h3>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="relative isolate overflow-hidden bg-[#f6f5f0] py-20 text-[#192F44] lg:py-24">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(35,100,118,0.08),transparent_28%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(125,173,63,0.12),transparent_30%)]"></div>

    <div class="relative mx-auto grid max-w-7xl gap-10 px-4 lg:grid-cols-[0.9fr_1.1fr] lg:items-center">
      <div class="lg:max-w-xl">


        <h2 class="ajs-reveal-up mt-5 text-3xl font-black leading-tight tracking-[-0.05em] md:text-5xl">
          Ready to Work With a Team That Delivers Certainty?
        </h2>

        <p class="ajs-reveal-up mt-6 max-w-3xl text-base leading-8 text-[#192F44]/80">
          We founded Real Painting Corp on a simple conviction: that homeowners deserve a contractor who shows up prepared, protects their home, respects their time, and delivers a result worth recommending  without the stress of wondering if it’ll actually happen.
        </p>

        <p class="ajs-reveal-up mt-6 max-w-2xl text-sm leading-7 text-[#192F44]/68">
          Request your free estimate and let’s talk about the scope, timeline, and result your home deserves.
        </p>

        <div class="rpc-about-swipe rpc-about-swipe-light mt-10 max-w-2xl"></div>
      </div>

      <div class="ajs-reveal-right">
        <form id="rpc-about-estimate-form" class="rpc-estimate-form rpc-estimate-form--light" method="post" action="#">
          <div class="rpc-estimate-form__header">
            <p class="rpc-estimate-form__eyebrow">Request a Free Estimate</p>
            <h3 class="rpc-estimate-form__title">Tell us about your project.</h3>
            <p class="rpc-estimate-form__trust">
              Licensed • Insured • Bonded • 40+ Years Combined Experience
            </p>
          </div>

          <div class="rpc-estimate-form__grid">
            <div class="rpc-estimate-form__field">
              <label for="rpc-about-name">Full Name *</label>
              <input id="rpc-about-name" type="text" name="full_name" placeholder="Your full name" required>
            </div>

            <div class="rpc-estimate-form__field">
              <label for="rpc-about-phone">Phone Number *</label>
              <input id="rpc-about-phone" type="tel" name="phone" placeholder="(909) 232-6602" required>
            </div>

            <div class="rpc-estimate-form__field">
              <label for="rpc-about-email">Email Address *</label>
              <input id="rpc-about-email" type="email" name="email" placeholder="you@example.com" required>
            </div>

            <div class="rpc-estimate-form__field">
              <label for="rpc-about-service">Service Needed *</label>
              <select id="rpc-about-service" name="service" required>
                <option value="">Select a service</option>
                <option value="Interior Painting">Interior Painting</option>
                <option value="Exterior Painting">Exterior Painting</option>
                <option value="Kitchen Remodeling">Kitchen Remodeling</option>
                <option value="Bathroom Remodeling">Bathroom Remodeling</option>
                <option value="Cabinet Refinishing">Cabinet Refinishing</option>
                <option value="Surface Repair &amp; Prep">Surface Repair &amp; Prep</option>
                <option value="Pressure Washing">Pressure Washing</option>
                <option value="Commercial Painting">Commercial Painting</option>
                <option value="Other">Other</option>
              </select>
            </div>

            <div class="rpc-estimate-form__field rpc-estimate-form__field--full">
              <label for="rpc-about-location">Property Address or City *</label>
              <input id="rpc-about-location" type="text" name="location" placeholder="City or property address" required>
            </div>

            <div class="rpc-estimate-form__field rpc-estimate-form__field--full">
              <label for="rpc-about-message">Tell Us About Your Project</label>
              <textarea id="rpc-about-message" name="message" rows="4" placeholder="Scope, timing, type of work, or anything else we should know."></textarea>
            </div>
          </div>

          <p class="rpc-estimate-form__micro">
            We’ll review your request and reach out within 24–48 hours. No pressure. Just clarity.
          </p>

          <div class="rpc-estimate-form__feedback">
            <div id="rpc-about-form-success" class="rpc-form-message rpc-form-message--success" aria-live="polite"></div>
            <div id="rpc-about-form-error" class="rpc-form-message rpc-form-message--error" aria-live="polite"></div>
          </div>

          <div class="rpc-estimate-form__captcha">
            <div class="g-recaptcha" data-sitekey="6LeAh7wsAAAAAPiODrnGhIF6zQSjhx3bIb3zWcoJ"></div>
          </div>

          <label class="rpc-estimate-form__check">
            <input id="rpc-about-policy" type="checkbox" required>
            <span>
              I agree to the <a href="/privacy-policy">Privacy Policy</a> and <a href="/terms">Terms &amp; Conditions</a>, and consent to be contacted regarding my request.
            </span>
          </label>

          <button id="rpc-about-submit" type="submit" class="rpc-about-btn rpc-about-btn-green rpc-estimate-form__submit">
            Request My Estimate
          </button>
        </form>
      </div>
    </div>
  </section>
</main>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;700&display=swap');

  .rpc-about-page {
    font-family: "Manrope", "Segoe UI", Arial, sans-serif;
  }

  .rpc-about-page h1,
  .rpc-about-page h2,
  .rpc-about-page h3 {
    font-family: "Space Grotesk", "Segoe UI", Arial, sans-serif;
  }

  .rpc-about-vertical-stamp {
    position: absolute;
    left: 2rem;
    top: 50%;
    width: 110px;
    height: 90%;
    transform: translateY(-50%);
    background-repeat: repeat-y;
    background-position: center;
    background-size: contain;
    opacity: 0.26;
    mix-blend-mode: multiply;
    pointer-events: none;
  }

  .rpc-about-hero-image {
    animation: rpcAboutHeroZoom 14s ease-out forwards;
    transform: scale(1.06);
  }

  .rpc-about-hero-photo {
    animation: rpcAboutHeroZoom 14s ease-out forwards;
    transform: scale(1.04);
  }

  .rpc-about-mission-stamp {
    background-repeat: repeat;
    background-position: center;
    background-size: 340px auto;
    opacity: 0.5;
    mix-blend-mode: multiply;
    pointer-events: none;
  }

  .rpc-about-community-card {
    position: relative;
    overflow: hidden;
    transition: transform .24s ease, box-shadow .24s ease, border-color .24s ease;
    background:
      linear-gradient(180deg, rgba(255,255,255,0.96), rgba(249,249,249,0.96)),
      linear-gradient(135deg, color-mix(in srgb, var(--rpc-community-tone) 10%, white), white);
  }

  .rpc-about-community-card::after {
    content: "";
    position: absolute;
    right: -28px;
    top: -28px;
    width: 96px;
    height: 96px;
    border-radius: 999px;
    background: color-mix(in srgb, var(--rpc-community-tone) 14%, transparent);
    pointer-events: none;
  }

  .rpc-estimate-form {
    position: relative;
    overflow: hidden;
    border: 1px solid rgba(255,255,255,0.14);
    background: rgba(255,255,255,0.09);
    backdrop-filter: blur(14px);
    box-shadow: 0 24px 60px rgba(0,0,0,0.20);
    padding: 1.25rem;
  }

  .rpc-estimate-form::after {
    content: "";
    position: absolute;
    right: -60px;
    top: -60px;
    width: 180px;
    height: 180px;
    background: radial-gradient(circle, rgba(255,255,255,0.12), transparent 72%);
    pointer-events: none;
  }

  .rpc-estimate-form--light {
    border-color: rgba(25,47,68,0.10);
    background: rgba(255,255,255,0.84);
    box-shadow: 0 22px 46px rgba(25,47,68,0.10);
  }

  .rpc-estimate-form__header {
    margin-bottom: 1rem;
  }

  .rpc-estimate-form__eyebrow {
    margin: 0;
    font-size: 0.68rem;
    font-weight: 800;
    letter-spacing: 0.16em;
    text-transform: uppercase;
    color: rgba(25,47,68,0.68);
  }

  .rpc-estimate-form__title {
    margin: 0.55rem 0 0;
    font-size: 1.35rem;
    font-weight: 800;
    line-height: 1.1;
    letter-spacing: -0.03em;
    color: #192F44;
  }

  .rpc-estimate-form__trust {
    margin-top: 0.6rem;
    font-size: 0.7rem;
    font-weight: 800;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: rgba(25,47,68,0.56);
  }

  .rpc-estimate-form__grid {
    display: grid;
    gap: 0.9rem;
    grid-template-columns: 1fr;
  }

  .rpc-estimate-form__field {
    display: grid;
    gap: 0.45rem;
  }

  .rpc-estimate-form__field label {
    font-size: 0.72rem;
    font-weight: 800;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: rgba(25,47,68,0.78);
  }

  .rpc-estimate-form__field input,
  .rpc-estimate-form__field select,
  .rpc-estimate-form__field textarea {
    width: 100%;
    min-height: 50px;
    border: 1px solid rgba(25,47,68,0.10);
    background: rgba(246,245,240,0.82);
    padding: 0.9rem 1rem;
    font-size: 0.95rem;
    color: #192F44;
    outline: none;
    transition: border-color .2s ease, background-color .2s ease, box-shadow .2s ease;
  }

  .rpc-estimate-form__field textarea {
    min-height: 122px;
    resize: vertical;
  }

  .rpc-estimate-form__field input::placeholder,
  .rpc-estimate-form__field textarea::placeholder {
    color: rgba(25,47,68,0.52);
  }

  .rpc-estimate-form__field input:focus,
  .rpc-estimate-form__field select:focus,
  .rpc-estimate-form__field textarea:focus {
    border-color: rgba(125,173,63,0.65);
    box-shadow: 0 0 0 3px rgba(125,173,63,0.16);
    background: #fff;
  }

  .rpc-estimate-form__field--full {
    grid-column: 1 / -1;
  }

  .rpc-estimate-form__micro {
    font-size: 0.75rem;
    line-height: 1.6;
    color: rgba(25,47,68,0.64);
    margin-top: 0.9rem;
  }

  .rpc-estimate-form__feedback {
    margin-top: 1rem;
  }

  .rpc-form-message {
    display: none;
    padding: 0.9rem 1rem;
    border: 1px solid transparent;
    font-size: 0.82rem;
    line-height: 1.6;
  }

  .rpc-form-message.is-visible {
    display: block;
  }

  .rpc-form-message--success {
    background: rgba(125,173,63,0.10);
    border-color: rgba(125,173,63,0.22);
    color: #4A6C2F;
  }

  .rpc-form-message--error {
    background: rgba(180,55,55,0.08);
    border-color: rgba(180,55,55,0.16);
    color: #8b2f2f;
    margin-top: 0.75rem;
  }

  .rpc-estimate-form__captcha {
    margin-top: 1rem;
  }

  .rpc-estimate-form__check {
    display: flex;
    gap: 0.7rem;
    margin-top: 1rem;
    font-size: 0.78rem;
    line-height: 1.6;
    color: rgba(25,47,68,0.72);
  }

  .rpc-estimate-form__check input {
    margin-top: 0.15rem;
    accent-color: #7DAD3F;
  }

  .rpc-estimate-form__check a {
    color: #236476;
    text-decoration: underline;
  }

  .rpc-estimate-form__submit {
    width: 100%;
    margin-top: 1rem;
    min-height: 54px;
  }

  .rpc-estimate-form__submit[disabled] {
    cursor: not-allowed;
    opacity: 0.75;
  }

  @media (min-width: 768px) {
    .rpc-estimate-form__grid {
      grid-template-columns: 1fr 1fr;
    }
  }

  .rpc-about-community-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 18px 36px rgba(25,47,68,0.10);
    border-color: color-mix(in srgb, var(--rpc-community-tone) 30%, rgba(25,47,68,0.10));
  }

  .rpc-about-community-card:hover .h-\[3px\] {
    width: 5rem;
  }

  .rpc-about-btn {
    position: relative;
    border: 1px solid transparent;
    overflow: hidden;
    transition: transform .22s ease, box-shadow .22s ease, background-color .22s ease, color .22s ease, border-color .22s ease;
  }

  .rpc-about-btn::after {
    content: "";
    position: absolute;
    inset: 0;
    transform: translateX(-110%);
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.22), transparent);
    transition: transform .6s ease;
  }

  .rpc-about-btn:hover::after {
    transform: translateX(110%);
  }

  .rpc-about-btn:hover {
    transform: translateY(-2px);
  }

  .rpc-about-btn-dark {
    background: #192F44;
    border-color: #192F44;
    box-shadow: 0 16px 34px rgba(25,47,68,0.18);
  }

  .rpc-about-btn-dark:hover {
    background: #236476;
    border-color: #236476;
  }

  .rpc-about-btn-green {
    background: #7DAD3F;
    border-color: #7DAD3F;
    box-shadow: 0 16px 34px rgba(125,173,63,0.22);
    color: #ffffff;
  }

  .rpc-about-btn-green:hover {
    background: #4A6C2F;
    border-color: #4A6C2F;
  }

  .rpc-about-swipe {
    height: 14px;
    width: 100%;
    background: linear-gradient(90deg, #192F44 0%, #236476 28%, #CFE0DA 55%, #7DAD3F 78%, #4A6C2F 100%);
    clip-path: polygon(0 35%, 7% 20%, 14% 40%, 22% 18%, 30% 42%, 38% 22%, 48% 50%, 56% 26%, 66% 46%, 76% 18%, 86% 42%, 94% 22%, 100% 36%, 100% 100%, 0 100%);
    opacity: 0.92;
    animation: rpcAboutSwipeShift 7s ease-in-out infinite alternate;
  }

  .rpc-about-swipe-light {
    background: linear-gradient(90deg, #CFE0DA 0%, #ffffff 36%, #CFE0DA 58%, #7DAD3F 100%);
  }

  .ajs-reveal-up,
  .ajs-reveal-left,
  .ajs-reveal-right,
  .ajs-reveal-stagger {
    opacity: 0;
    will-change: opacity, transform;
    transition: opacity .85s ease, transform .85s ease;
  }

  .ajs-reveal-up {
    transform: translateY(34px);
  }

  .ajs-reveal-left {
    transform: translateX(-36px);
  }

  .ajs-reveal-right {
    transform: translateX(36px);
  }

  .ajs-reveal-stagger {
    transform: translateY(28px);
  }

  .ajs-reveal-up.is-visible,
  .ajs-reveal-left.is-visible,
  .ajs-reveal-right.is-visible,
  .ajs-reveal-stagger.is-visible {
    opacity: 1;
    transform: translate(0,0);
  }

  @keyframes rpcAboutSwipeShift {
    0%   { transform: translateX(0) scaleX(1); }
    100% { transform: translateX(6px) scaleX(1.01); }
  }

  @keyframes rpcAboutHeroZoom {
    0% {
      transform: scale(1.08);
    }
    100% {
      transform: scale(1);
    }
  }

  @media (max-width: 1279px) {
    .rpc-about-vertical-stamp {
      left: 1rem;
      width: 86px;
      opacity: 0.12;
    }
  }

  @media (max-width: 1023px) {
    .rpc-about-mission-stamp {
      background-size: 280px auto;
      opacity: 0.16;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .ajs-reveal-up,
    .ajs-reveal-left,
    .ajs-reveal-right,
    .ajs-reveal-stagger,
    .rpc-about-btn,
    .rpc-about-swipe,
    .rpc-about-hero-image,
    .rpc-about-hero-photo,
    .rpc-about-community-card {
      opacity: 1 !important;
      transform: none !important;
      transition: none !important;
      animation: none !important;
    }
  }
</style>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const items = document.querySelectorAll(
      ".ajs-reveal-up, .ajs-reveal-left, .ajs-reveal-right, .ajs-reveal-stagger"
    );

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry, idx) => {
        if (entry.isIntersecting) {
          const delay = entry.target.classList.contains("ajs-reveal-stagger") ? (idx % 8) * 55 : 0;
          setTimeout(() => {
            entry.target.classList.add("is-visible");
          }, delay);
        }
      });
    }, { threshold: 0.12 });

    items.forEach((item) => observer.observe(item));

    if (window.emailjs) {
      emailjs.init({
        publicKey: "aMoYiYOIydChXIOaZ"
      });
    }

    const form = document.getElementById("rpc-about-estimate-form");
    const submitBtn = document.getElementById("rpc-about-submit");
    const successBox = document.getElementById("rpc-about-form-success");
    const errorBox = document.getElementById("rpc-about-form-error");
    const policyCheckbox = document.getElementById("rpc-about-policy");

    if (!form || !submitBtn || !successBox || !errorBox) return;

    const resetMessages = () => {
      successBox.textContent = "";
      errorBox.textContent = "";
      successBox.classList.remove("is-visible");
      errorBox.classList.remove("is-visible");
    };

    const showSuccess = (message) => {
      successBox.textContent = message;
      successBox.classList.add("is-visible");
    };

    const showError = (message) => {
      errorBox.textContent = message;
      errorBox.classList.add("is-visible");
    };

    form.addEventListener("submit", function (e) {
      e.preventDefault();
      resetMessages();

      if (!policyCheckbox.checked) {
        showError("Please accept the Privacy Policy and Terms & Conditions before submitting.");
        return;
      }

      if (typeof grecaptcha === "undefined") {
        showError("reCAPTCHA failed to load. Please refresh the page and try again.");
        return;
      }

      const captchaResponse = grecaptcha.getResponse();
      if (!captchaResponse) {
        showError("Please complete the reCAPTCHA verification.");
        return;
      }

      submitBtn.disabled = true;
      const originalText = submitBtn.textContent;
      submitBtn.textContent = "Sending...";

      const formData = {
        name: document.getElementById("rpc-about-name").value.trim(),
        phone: document.getElementById("rpc-about-phone").value.trim(),
        email: document.getElementById("rpc-about-email").value.trim(),
        service: document.getElementById("rpc-about-service").value,
        property: document.getElementById("rpc-about-location").value.trim(),
        message: document.getElementById("rpc-about-message").value.trim(),
        "g-recaptcha-response": captchaResponse
      };

      emailjs.send("service_ym70oob", "template_hz5g86r", formData)
        .then(function () {
          form.reset();
          grecaptcha.reset();
          showSuccess("Thank you. Your request has been sent successfully. We’ll be in touch soon.");
        })
        .catch(function () {
          showError("Something went wrong while sending your request. Please try again.");
        })
        .finally(function () {
          submitBtn.disabled = false;
          submitBtn.textContent = originalText;
        });
    });
  });
</script>

<?php get_footer(); ?>