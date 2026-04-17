<?php
/**
 * Template Name: Service - Bathroom Remodeling
 *
 * Bathroom Remodeling page for Real Painting Corp
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="rpc-service-page bg-[#f6f5f0] text-[#192F44] overflow-hidden">

  <?php
    $hero_image = '/wp-content/uploads/2026/04/BathroomRemodelingService.jpg-scaled.jpeg';

    $handle_items = [
      'Full demolition and site preparation',
      'Tub-to-shower conversions',
      'Tile installation  floors, walls, shower surrounds',
      'Vanity and fixture installation',
      'Painting and finishing',
      'Daily cleanup and home protection',
    ];

    $faqs = [
      [
        'q' => 'How long does a bathroom remodel take?',
        'a' => 'Approximately 10 working days. Shower conversions may take slightly longer depending on structural and plumbing scope.',
      ],
      [
        'q' => 'What’s the typical investment?',
        'a' => 'Bathroom remodels typically start around $20,000. Shower conversions tend to be higher due to additional structural work.',
      ],
    ];

    $service_options = [
      'Interior Painting',
      'Exterior Painting',
      'Kitchen Remodeling',
      'Bathroom Remodeling',
      'Cabinet Refinishing',
      'Surface Repair & Prep',
      'Pressure Washing',
      'Commercial Painting',
      'Other',
    ];
  ?>

  <!-- HERO -->
  <section class="relative overflow-hidden border-b border-[#192F44]/10 bg-[#f6f5f0] py-10 lg:py-14">
    <div class="mx-auto max-w-7xl px-4">
      <div class="relative overflow-hidden border border-[#192F44]/10 bg-white shadow-[0_24px_60px_rgba(25,47,68,0.12)]">

        <div class="relative h-[520px] overflow-hidden lg:h-[620px]">
          <img
            src="<?php echo esc_url($hero_image); ?>"
            alt="Completed bathroom remodeling project"
            class="rpc-service-hero-photo h-full w-full object-cover"
          >
          <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(25,47,68,0.68)_0%,rgba(25,47,68,0.30)_38%,rgba(25,47,68,0.08)_100%)]"></div>
        </div>

        <div class="absolute inset-x-0 bottom-0 top-0 flex items-center">
          <div class="mx-auto w-full max-w-7xl px-4">
            <div class="ajs-reveal-left max-w-2xl border border-white/12 bg-[#192F44]/82 p-7 text-white shadow-[0_18px_40px_rgba(25,47,68,0.24)] backdrop-blur-sm md:p-9">
              <p class="text-xs font-black uppercase tracking-[0.24em] text-[#CFE0DA]">
                Services
              </p>

              <h1 class="mt-4 text-4xl font-extrabold leading-[0.98] tracking-[-0.05em] md:text-6xl">
                Bathroom Remodeling
              </h1>

              <div class="mt-6 h-[3px] w-24 bg-[linear-gradient(90deg,#CFE0DA_0%,#ffffff_55%,#7DAD3F_100%)]"></div>

              <p class="mt-7 max-w-xl text-base leading-8 text-white/86 md:text-lg">
                Modern upgrades, shower conversions, tile, vanities, and finishing details  designed for comfort, style, and lasting value.
              </p>

              <div class="mt-8">
                <a href="/contact-us"
                   class="rpc-service-btn rpc-service-btn-green inline-flex items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
                  Request a Free Estimate
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- MAIN CONTENT -->
  <section class="relative overflow-hidden border-y border-[#192F44]/10 bg-white py-20 lg:py-24">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(207,224,218,0.32),transparent_24%)]"></div>
    <div class="absolute left-0 top-0 h-full w-[18%] bg-[#f3f6f4]"></div>

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="grid gap-10 xl:grid-cols-[0.78fr_1.22fr] xl:gap-14">

        <div class="ajs-reveal-left">
          <div class="sticky top-28">
            <p class="text-xs font-black uppercase tracking-[0.24em] text-[#4A6C2F]">
              Small Space. Big Impact.
            </p>

            <h2 class="mt-5 max-w-[10ch] text-3xl font-black leading-[0.94] tracking-[-0.05em] text-[#192F44] md:text-5xl">
              Daily comfort and lasting value start here.
            </h2>

            <div class="mt-7 h-[3px] w-24 bg-[linear-gradient(90deg,#192F44_0%,#236476_55%,#7DAD3F_100%)]"></div>
          </div>
        </div>

        <div class="ajs-reveal-right">
          <div class="relative overflow-hidden border border-[#192F44]/10 bg-[#fcfbf8] p-6 shadow-[0_20px_44px_rgba(25,47,68,0.08)] md:p-8 lg:p-10">
            <div class="absolute right-0 top-0 h-24 w-24 translate-x-[20%] -translate-y-[20%] rotate-12 bg-[#CFE0DA]/55"></div>

            <div class="space-y-6 text-base leading-8 text-[#192F44]/80">
              <p>
                Bathrooms are one of the most-used rooms in your home and one of the highest-return remodeling investments you can make. A well-executed bathroom remodel adds daily comfort and measurable property value.
              </p>

              <p>
                We handle every detail  demolition, plumbing coordination, tile, vanity installation, paint, and finishing  with the same clean execution and schedule discipline we bring to every project. Most bathroom remodels take about 10 working days with a dedicated crew of 3–4.
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- WHAT WE HANDLE -->
  <section class="relative overflow-hidden bg-[#f6f5f0] py-20 lg:py-24">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(35,100,118,0.12),transparent_28%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(125,173,63,0.14),transparent_30%)]"></div>
    <div class="absolute left-0 top-0 h-full w-[14%] bg-[linear-gradient(180deg,rgba(207,224,218,0.45)_0%,rgba(255,255,255,0)_100%)]"></div>

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="ajs-reveal-up max-w-3xl">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#236476]">
          What We Handle
        </p>

        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.05em] text-[#192F44] md:text-5xl">
          Every phase handled with care, cleanup, and protection.
        </h2>

        <div class="mt-6 h-[4px] w-28 bg-[linear-gradient(90deg,#192F44_0%,#236476_45%,#7DAD3F_100%)]"></div>
      </div>

      <div class="mt-12 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
        <?php foreach ($handle_items as $item) : ?>
          <article class="ajs-reveal-stagger group relative overflow-hidden border border-[#192F44]/10 bg-[linear-gradient(180deg,#ffffff_0%,#fdfcf8_100%)] p-6 shadow-[0_18px_40px_rgba(25,47,68,0.08)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_26px_56px_rgba(25,47,68,0.12)]">
            <div class="absolute inset-x-0 top-0 h-[3px] bg-[linear-gradient(90deg,#192F44_0%,#236476_40%,#7DAD3F_100%)]"></div>

            <div class="absolute right-0 top-0 h-20 w-20 translate-x-[20%] -translate-y-[20%] rotate-12 bg-[#CFE0DA]/40"></div>
            <div class="absolute bottom-0 left-0 h-16 w-16 -translate-x-[20%] translate-y-[20%] rotate-12 bg-[#7DAD3F]/12"></div>

            <div class="mb-6 mt-2 flex gap-2">
              <span class="h-8 w-8 border border-[#192F44]/10 bg-[#236476] transition-transform duration-500 group-hover:rotate-6 group-hover:scale-110"></span>
              <span class="h-8 w-8 border border-[#192F44]/10 bg-[#CFE0DA] transition-transform duration-500 group-hover:-rotate-6 group-hover:scale-110"></span>
            </div>

            <p class="text-[15px] leading-8 text-[#192F44]/78">
              <?php echo esc_html($item); ?>
            </p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- BUILT FOR HOMEOWNERS -->
  <section class="relative overflow-hidden border-y border-[#192F44]/10 bg-[#192F44] py-20 text-white lg:py-24">
    <div
      class="absolute inset-0 opacity-[0.5] mix-blend-multiply"
      style="
        background-image:url('/wp-content/uploads/2026/04/Estampados-01-scaled.png');
        background-repeat:repeat;
        background-position:center;
        background-size:300px auto;
      "
    ></div>

    <div class="relative mx-auto max-w-6xl px-4">
      <div class="grid gap-10 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
        <div class="ajs-reveal-left">
          <p class="text-xs font-black uppercase tracking-[0.22em] text-[#CFE0DA]">
            Built for Homeowners Who Expect More
          </p>

          <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.05em] md:text-5xl">
            A bathroom remodel should improve the way your home feels every day.
          </h2>
        </div>

        <div class="ajs-reveal-right space-y-6 text-base leading-8 text-white/82">
          <p>
            Bathrooms are one of the most-used rooms in the home, which means every detail matters  layout, comfort, finish quality, and how clean the process feels while the work is happening.
          </p>

          <p>
            That’s why we approach bathroom remodeling with the same structured process we bring to every project: clear scope, careful protection, daily cleanup, and a finish that adds both comfort and value.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="border-y border-[#192F44]/10 bg-white py-20 lg:py-24">
    <div class="mx-auto max-w-5xl px-4">
      <div class="ajs-reveal-up mx-auto max-w-3xl text-center">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#236476]">
          Frequently Asked Questions
        </p>

        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.05em] text-[#192F44] md:text-5xl">
          Helpful answers before we get started.
        </h2>

        <div class="mx-auto mt-6 h-[3px] w-24 bg-[linear-gradient(90deg,#192F44_0%,#236476_55%,#7DAD3F_100%)]"></div>
      </div>

      <div class="mt-12 grid gap-4">
        <?php foreach ($faqs as $faq) : ?>
          <details class="ajs-reveal-stagger rpc-service-faq group border border-[#192F44]/10 bg-[#fcfbf8]">
            <summary class="flex cursor-pointer list-none items-center justify-between gap-4 px-6 py-5">
              <span class="text-lg font-black leading-7 tracking-[-0.02em] text-[#192F44]">
                <?php echo esc_html($faq['q']); ?>
              </span>
              <span class="rpc-service-faq-icon shrink-0 text-2xl font-light text-[#236476]">+</span>
            </summary>

            <div class="border-t border-[#192F44]/10 px-6 py-5">
              <p class="text-base leading-8 text-[#192F44]/80">
                <?php echo esc_html($faq['a']); ?>
              </p>
            </div>
          </details>
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
        <h2 class="ajs-reveal-up text-3xl font-black leading-tight tracking-[-0.05em] md:text-5xl">
          Ready to Upgrade Your Bathroom?
        </h2>

        <p class="ajs-reveal-up mt-6 max-w-3xl text-base leading-8 text-[#192F44]/80">
          Let’s talk about the layout, finish level, and remodeling scope you want  and build a plan that improves comfort, function, and value.
        </p>

        <p class="ajs-reveal-up mt-6 max-w-2xl text-sm leading-7 text-[#192F44]/68">
          Request your free estimate and we’ll help you define timing, investment, and next steps with clarity.
        </p>

        <div class="rpc-service-swipe rpc-service-swipe-light mt-10 max-w-2xl"></div>
      </div>

      <div class="ajs-reveal-right">
        <form id="rpc-service-estimate-form" class="rpc-estimate-form rpc-estimate-form--light" method="post" action="#">
          <div class="rpc-estimate-form__header">
            <p class="rpc-estimate-form__eyebrow">Request a Free Estimate</p>
            <h3 class="rpc-estimate-form__title">Tell us about your project.</h3>
            <p class="rpc-estimate-form__trust">
              Licensed • Insured • Bonded  40+ Years Combined Experience
            </p>
          </div>

          <div class="rpc-estimate-form__grid">
            <div class="rpc-estimate-form__field">
              <label for="rpc-service-name">Full Name *</label>
              <input id="rpc-service-name" type="text" name="full_name" placeholder="Your full name" required>
            </div>

            <div class="rpc-estimate-form__field">
              <label for="rpc-service-phone">Phone Number *</label>
              <input id="rpc-service-phone" type="tel" name="phone" placeholder="(909) 232-6602" required>
            </div>

            <div class="rpc-estimate-form__field">
              <label for="rpc-service-email">Email Address *</label>
              <input id="rpc-service-email" type="email" name="email" placeholder="you@example.com" required>
            </div>

            <div class="rpc-estimate-form__field">
              <label for="rpc-service-needed">Service Needed *</label>
              <select id="rpc-service-needed" name="service" required>
                <option value="">Select a service</option>
                <?php foreach ($service_options as $option) : ?>
                  <option value="<?php echo esc_attr($option); ?>">
                    <?php echo esc_html($option); ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="rpc-estimate-form__field rpc-estimate-form__field--full">
              <label for="rpc-service-location">Property Address or City *</label>
              <input id="rpc-service-location" type="text" name="location" placeholder="City or property address" required>
            </div>

            <div class="rpc-estimate-form__field rpc-estimate-form__field--full">
              <label for="rpc-service-message">Tell Us About Your Project</label>
              <textarea id="rpc-service-message" name="message" rows="4" placeholder="Scope, timing, desired upgrades, or anything else we should know."></textarea>
            </div>
          </div>

          <p class="rpc-estimate-form__micro">
            We’ll review your request and reach out within 24–48 hours. No pressure. Just clarity.
          </p>

          <div class="rpc-estimate-form__feedback">
            <div id="rpc-service-form-success" class="rpc-form-message rpc-form-message--success" aria-live="polite"></div>
            <div id="rpc-service-form-error" class="rpc-form-message rpc-form-message--error" aria-live="polite"></div>
          </div>

          <div class="rpc-estimate-form__captcha">
            <div class="g-recaptcha" data-sitekey="6LeAh7wsAAAAAPiODrnGhIF6zQSjhx3bIb3zWcoJ"></div>
          </div>

          <label class="rpc-estimate-form__check">
            <input id="rpc-service-policy" type="checkbox" required>
            <span>
              I agree to the <a href="/privacy-policy">Privacy Policy</a> and <a href="/terms">Terms &amp; Conditions</a>, and consent to be contacted regarding my request.
            </span>
          </label>

          <button id="rpc-service-submit" type="submit" class="rpc-service-btn rpc-service-btn-green rpc-estimate-form__submit">
            Request My Estimate
          </button>
        </form>
      </div>
    </div>
  </section>
</main>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;700&display=swap');

  .rpc-service-page {
    font-family: "Manrope", "Segoe UI", Arial, sans-serif;
  }

  .rpc-service-page h1,
  .rpc-service-page h2,
  .rpc-service-page h3 {
    font-family: "Space Grotesk", "Segoe UI", Arial, sans-serif;
  }

  .rpc-service-hero-photo {
    animation: rpcServiceHeroZoom 14s ease-out forwards;
    transform: scale(1.04);
  }

  .rpc-service-btn {
    position: relative;
    border: 1px solid transparent;
    transition: transform .22s ease, box-shadow .22s ease, background-color .22s ease, color .22s ease, border-color .22s ease;
    overflow: hidden;
  }

  .rpc-service-btn::after {
    content: "";
    position: absolute;
    inset: 0;
    transform: translateX(-110%);
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.22), transparent);
    transition: transform .6s ease;
  }

  .rpc-service-btn:hover::after {
    transform: translateX(110%);
  }

  .rpc-service-btn:hover {
    transform: translateY(-2px);
  }

  .rpc-service-btn-dark {
    background: #192F44;
    border-color: #192F44;
    box-shadow: 0 16px 34px rgba(25,47,68,0.18);
  }

  .rpc-service-btn-dark:hover {
    background: #236476;
    border-color: #236476;
  }

  .rpc-service-btn-green {
    background: #7DAD3F;
    border-color: #7DAD3F;
    box-shadow: 0 16px 34px rgba(125,173,63,0.22);
  }

  .rpc-service-btn-green:hover {
    background: #4A6C2F;
    border-color: #4A6C2F;
  }

  .rpc-service-faq[open] .rpc-service-faq-icon {
    transform: rotate(45deg);
  }

  .rpc-service-faq-icon {
    transition: transform .2s ease;
  }

  .rpc-service-swipe {
    height: 14px;
    width: 100%;
    background: linear-gradient(90deg, #192F44 0%, #236476 28%, #CFE0DA 55%, #7DAD3F 78%, #4A6C2F 100%);
    clip-path: polygon(0 35%, 7% 20%, 14% 40%, 22% 18%, 30% 42%, 38% 22%, 48% 50%, 56% 26%, 66% 46%, 76% 18%, 86% 42%, 94% 22%, 100% 36%, 100% 100%, 0 100%);
    opacity: 0.92;
    animation: rpcServiceSwipeShift 7s ease-in-out infinite alternate;
  }

  .rpc-service-swipe-light {
    background: linear-gradient(90deg, #CFE0DA 0%, #ffffff 36%, #CFE0DA 58%, #7DAD3F 100%);
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

  @keyframes rpcServiceSwipeShift {
    0%   { transform: translateX(0) scaleX(1); }
    100% { transform: translateX(6px) scaleX(1.01); }
  }

  @keyframes rpcServiceHeroZoom {
    0% { transform: scale(1.08); }
    100% { transform: scale(1); }
  }

  @media (min-width: 768px) {
    .rpc-estimate-form__grid {
      grid-template-columns: 1fr 1fr;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .ajs-reveal-up,
    .ajs-reveal-left,
    .ajs-reveal-right,
    .ajs-reveal-stagger,
    .rpc-service-btn,
    .rpc-service-swipe,
    .rpc-service-hero-photo {
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

    const form = document.getElementById("rpc-service-estimate-form");
    const submitBtn = document.getElementById("rpc-service-submit");
    const successBox = document.getElementById("rpc-service-form-success");
    const errorBox = document.getElementById("rpc-service-form-error");
    const policyCheckbox = document.getElementById("rpc-service-policy");

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
        name: document.getElementById("rpc-service-name").value.trim(),
        phone: document.getElementById("rpc-service-phone").value.trim(),
        email: document.getElementById("rpc-service-email").value.trim(),
        service: document.getElementById("rpc-service-needed").value,
        property: document.getElementById("rpc-service-location").value.trim(),
        message: document.getElementById("rpc-service-message").value.trim(),
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