<?php
/**
 * Template Name: Locations Hub Template
 *
 * Locations hub page for Real Painting Corp
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="rpc-locations-hub bg-[#f6f5f0] text-[#192F44] overflow-hidden">

  <?php
    $hero_image = 'http://real-painting-corp.local/wp-content/uploads/2026/04/houses-in-suburb-at-summer-in-the-north-america-l-2026-03-26-11-33-50-utc.jpg-scaled.jpeg';

    $locations = [
      [
        'title' => 'Orange County',
        'slug'  => '/locations/orange-county',
        'tone'  => '#192F44',
        'kicker'=> 'Southern California Service Area',
        'map_embed' => 'https://www.google.com/maps?q=Orange+County,+CA&output=embed',
        'cities' => 'Rancho Santa Margarita · Coto de Caza · Ladera Ranch · Mission Viejo · Irvine · Laguna Niguel · Yorba Linda · Aliso Viejo · Tustin Ranch',
        'copy' => 'Homeowners across Orange County trust Real Painting Corp for premium painting and remodeling delivered with clean execution, schedule discipline, and the certainty their homes deserve.',
      ],
      [
        'title' => 'Los Angeles County',
        'slug'  => '/locations/los-angeles-county',
        'tone'  => '#236476',
        'kicker'=> 'Southern California Service Area',
        'map_embed' => 'https://www.google.com/maps?q=Los+Angeles+County,+CA&output=embed',
        'cities' => 'Pasadena · Glendale · Arcadia · Torrance',
        'copy' => 'In Los Angeles County, we serve homeowners who value their property, expect professionalism, and want a contractor who protects the home, respects the timeline, and delivers a result worth recommending.',
      ],
      [
        'title' => 'Riverside County',
        'slug'  => '/locations/riverside-county',
        'tone'  => '#7DAD3F',
        'kicker'=> 'Southern California Service Area',
        'map_embed' => 'https://www.google.com/maps?q=Riverside+County,+CA&output=embed',
        'cities' => 'Corona · Murrieta · Temecula · Menifee · Eastvale',
        'copy' => 'From repainting to remodeling, Riverside County homeowners choose Real Painting Corp for a structured process, clear communication, and a home experience that feels organized from day one.',
      ],
      [
        'title' => 'San Bernardino County',
        'slug'  => '/locations/san-bernardino-county',
        'tone'  => '#4A6C2F',
        'kicker'=> 'Southern California Service Area',
        'map_embed' => 'https://www.google.com/maps?q=San+Bernardino+County,+CA&output=embed',
        'cities' => 'Rancho Cucamonga · Chino Hills',
        'copy' => 'We serve San Bernardino County with the same standard that defines the brand: licensed, insured, bonded work delivered with clean execution, schedule discipline, and aesthetic certainty.',
      ],
    ];
  ?>

  <!-- HERO -->
  <section class="relative isolate overflow-hidden">
    <div class="absolute inset-0">
      <img
        src="<?php echo esc_url($hero_image); ?>"
        alt="Southern California neighborhoods"
        class="rpc-locations-hero-image h-full w-full object-cover"
      >
      <div class="absolute inset-0 bg-[#192F44]/76"></div>
      <div
        class="absolute inset-0 opacity-20 mix-blend-overlay"
        style="background-image:url('https://www.transparenttextures.com/patterns/brushed-alum.png')">
      </div>
    </div>

    <div class="relative z-10 mx-auto flex min-h-[640px] max-w-6xl flex-col items-center justify-center px-4 py-24 text-center md:min-h-[720px]">
      <p class="ajs-reveal-up text-xs font-black uppercase tracking-[0.28em] text-[#CFE0DA]">
        Locations
      </p>

      <p class="ajs-reveal-up mt-4 text-sm font-black uppercase tracking-[0.24em] text-white/82 md:text-base">
        Be Real. Build Real.
      </p>

      <h1 class="ajs-reveal-up mt-6 max-w-5xl text-4xl font-extrabold leading-[1.04] tracking-[-0.05em] text-white md:text-6xl">
        Serving Southern California’s Most Valued Communities
      </h1>

      <p class="ajs-reveal-up mt-6 max-w-3xl text-base leading-8 text-white/84 md:text-lg">
        Real Painting Corp serves homeowners across Orange County, Los Angeles County, Riverside County, and San Bernardino County — with clean execution, schedule discipline, and the certainty your home deserves.
      </p>

      <div class="ajs-reveal-up mt-10 flex flex-col gap-4 sm:flex-row">
        <a href="#locations-grid"
           class="rpc-paint-btn rpc-paint-btn-green inline-flex items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
          Explore Service Areas
        </a>

        <a href="/contact-us"
           class="rpc-paint-btn rpc-paint-btn-outline inline-flex items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
          Request a Free Estimate
        </a>
      </div>
    </div>

    
  </section>

  <!-- INTRO -->
  <section class="relative bg-[#f6f5f0] py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="grid gap-12 lg:grid-cols-[0.88fr_1.12fr] lg:items-start">
        <div class="ajs-reveal-left">
          <p class="text-xs font-black uppercase tracking-[0.22em] text-[#4A6C2F]">
            Location Hub
          </p>

          <h2 class="mt-5 max-w-[12ch] text-3xl font-black leading-[0.94] tracking-[-0.05em] text-[#192F44] md:text-5xl">
            One Standard. Four Counties. Zero Surprises.
          </h2>

          <div class="mt-7 h-2 w-32 bg-[linear-gradient(90deg,#192F44_0%,#236476_35%,#7DAD3F_100%)]"></div>
        </div>

        <div class="ajs-reveal-right">
          <div class="space-y-5 text-base leading-8 text-[#192F44]/80">
            <p>
              Real Painting Corp is a full-service painting and remodeling company serving Southern California with a structured, professional approach that homeowners can feel from the first conversation to the final walk-through.
            </p>

            <p>
              This locations hub is designed to help visitors quickly navigate by county while keeping the same premium brand presentation found throughout the rest of the site.
            </p>

            <p>
              Each area page should act as a local entry point for homeowners who value certainty, cleanliness, commitment, trust, and excellence.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

 <!-- LOCATIONS GRID -->
<section id="locations-grid" class="border-y border-[#192F44]/10 bg-white py-20 lg:py-24">
  <div class="mx-auto max-w-7xl px-4">
    <div class="ajs-reveal-up mx-auto max-w-4xl text-center">
      <p class="text-xs font-black uppercase tracking-[0.22em] text-[#236476]">
        Service Areas
      </p>

      <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.05em] text-[#192F44] md:text-5xl">
        Choose Your County
      </h2>

      <p class="mx-auto mt-6 max-w-3xl text-base leading-8 text-[#192F44]/72">
        Built as a clean county-level hub, each card now connects directly to its location on Google Maps.
      </p>
    </div>

    <?php
      $locations = [
        [
          'title' => 'Orange County',
          'map_link' => 'https://www.google.com/maps/search/?api=1&query=Orange+County,+CA',
          'tone'  => '#192F44',
          'kicker'=> 'Southern California Service Area',
          'map_embed' => 'https://www.google.com/maps?q=Orange+County,+CA&output=embed',
          'cities' => 'Rancho Santa Margarita · Coto de Caza · Ladera Ranch · Mission Viejo · Irvine · Laguna Niguel · Yorba Linda · Aliso Viejo · Tustin Ranch',
          'copy' => 'Homeowners across Orange County trust Real Painting Corp for premium painting and remodeling delivered with clean execution, schedule discipline, and the certainty their homes deserve.',
        ],
        [
          'title' => 'Los Angeles County',
          'map_link' => 'https://www.google.com/maps/search/?api=1&query=Los+Angeles+County,+CA',
          'tone'  => '#236476',
          'kicker'=> 'Southern California Service Area',
          'map_embed' => 'https://www.google.com/maps?q=Los+Angeles+County,+CA&output=embed',
          'cities' => 'Pasadena · Glendale · Arcadia · Torrance',
          'copy' => 'In Los Angeles County, we serve homeowners who value their property, expect professionalism, and want a contractor who protects the home, respects the timeline, and delivers a result worth recommending.',
        ],
        [
          'title' => 'Riverside County',
          'map_link' => 'https://www.google.com/maps/search/?api=1&query=Riverside+County,+CA',
          'tone'  => '#7DAD3F',
          'kicker'=> 'Southern California Service Area',
          'map_embed' => 'https://www.google.com/maps?q=Riverside+County,+CA&output=embed',
          'cities' => 'Corona · Murrieta · Temecula · Menifee · Eastvale',
          'copy' => 'From repainting to remodeling, Riverside County homeowners choose Real Painting Corp for a structured process, clear communication, and a home experience that feels organized from day one.',
        ],
        [
          'title' => 'San Bernardino County',
          'map_link' => 'https://www.google.com/maps/search/?api=1&query=San+Bernardino+County,+CA',
          'tone'  => '#4A6C2F',
          'kicker'=> 'Southern California Service Area',
          'map_embed' => 'https://www.google.com/maps?q=San+Bernardino+County,+CA&output=embed',
          'cities' => 'Rancho Cucamonga · Chino Hills',
          'copy' => 'We serve San Bernardino County with the same standard that defines the brand: licensed, insured, bonded work delivered with clean execution, schedule discipline, and aesthetic certainty.',
        ],
      ];
    ?>

    <div class="mt-14 grid gap-8 md:grid-cols-2">
      <?php foreach ($locations as $location) : ?>
        <article class="ajs-reveal-stagger group overflow-hidden border border-[#192F44]/10 bg-[#fcfbf7] shadow-[0_20px_50px_rgba(25,47,68,0.08)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_26px_60px_rgba(25,47,68,0.12)]">
          
          <div class="relative h-[290px] overflow-hidden border-b border-[#192F44]/10 bg-[#dfe7e3]">
            <iframe
              src="<?php echo esc_url($location['map_embed']); ?>"
              loading="lazy"
              allowfullscreen
              referrerpolicy="no-referrer-when-downgrade"
              class="h-full w-full transition duration-700 group-hover:scale-[1.01]"
              style="filter: saturate(.88) contrast(1.02);">
            </iframe>

            <div class="pointer-events-none absolute inset-0 bg-[linear-gradient(180deg,rgba(25,47,68,0.06)_0%,rgba(25,47,68,0.00)_36%,rgba(25,47,68,0.12)_100%)]"></div>

            <div class="absolute left-5 top-5">
              <span
                class="inline-flex items-center rounded-full border border-white/18 px-4 py-2 text-[11px] font-black uppercase tracking-[0.18em] text-white shadow-[0_12px_24px_rgba(0,0,0,0.16)] backdrop-blur-sm"
                style="background: <?php echo esc_attr($location['tone']); ?>;">
                <?php echo esc_html($location['kicker']); ?>
              </span>
            </div>

            <div class="absolute bottom-5 left-5 right-5 flex items-end justify-between gap-4">
              <div>
                <p class="text-[11px] font-black uppercase tracking-[0.18em] text-white/72">
                  Real Painting Corp
                </p>
                <h3 class="mt-2 text-2xl font-black tracking-[-0.04em] text-white md:text-[2rem]">
                  <?php echo esc_html($location['title']); ?>
                </h3>
              </div>

              <span
                class="hidden h-12 w-12 items-center justify-center border border-white/18 bg-white/10 text-white shadow-[0_12px_20px_rgba(0,0,0,0.14)] backdrop-blur-md md:inline-flex">
                <svg viewBox="0 0 24 24" class="h-5 w-5 fill-none" stroke="currentColor" stroke-width="2">
                  <path d="M7 17 17 7"></path>
                  <path d="M9 7h8v8"></path>
                </svg>
              </span>
            </div>
          </div>

          <div class="p-7 md:p-8">
            <div class="flex items-center gap-3">
              <span class="h-2.5 w-16" style="background: <?php echo esc_attr($location['tone']); ?>;"></span>
              <span class="text-[11px] font-black uppercase tracking-[0.18em] text-[#236476]">
                County Page
              </span>
            </div>

            <p class="mt-6 text-[15px] leading-8 text-[#192F44]/78">
              <?php echo esc_html($location['copy']); ?>
            </p>

            <div class="mt-6 border border-[#192F44]/8 bg-white/80 p-5">
              <p class="text-[11px] font-black uppercase tracking-[0.18em] text-[#4A6C2F]">
                Communities We Target
              </p>

              <p class="mt-3 text-sm leading-7 text-[#192F44]/70">
                <?php echo esc_html($location['cities']); ?>
              </p>
            </div>

            <div class="mt-7 flex flex-wrap items-center gap-3">
              <a href="<?php echo esc_url($location['map_link']); ?>"
                 target="_blank"
                 rel="noopener noreferrer"
                 class="rpc-paint-btn inline-flex items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.14em] text-white shadow-[0_16px_34px_rgba(25,47,68,0.14)]"
                 style="background: <?php echo esc_attr($location['tone']); ?>; border-color: <?php echo esc_attr($location['tone']); ?>;">
                Explore <?php echo esc_html($location['title']); ?>
              </a>

              <a href="/contact-us"
                 class="inline-flex items-center gap-2 border-b-2 border-[#236476] pb-1 text-sm font-black uppercase tracking-[0.12em] text-[#236476] transition hover:gap-3">
                Request Estimate
                <span>→</span>
              </a>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

  <!-- WHY THIS MATTERS -->
  <section class="relative overflow-hidden bg-[#192F44] py-20 text-white lg:py-24">
<div
  class="absolute inset-0 opacity-[0.5] mix-blend-multiply"
  style="
    background-image:url('http://real-painting-corp.local/wp-content/uploads/2026/04/Estampados-01-scaled.png');
    background-repeat:repeat;
    background-position:center;
    background-size:360px auto;
  "
></div>

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="ajs-reveal-left max-w-3xl">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#CFE0DA]">
          Why Location Pages Matter
        </p>

        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.05em] md:text-5xl">
          Local Entry Points. Same Trusted Standard.
        </h2>
      </div>

      <div class="mt-12 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
        <article class="ajs-reveal-up border border-white/12 bg-white/6 p-6 backdrop-blur-sm">
          <h3 class="text-xl font-black">Clean Execution</h3>
          <p class="mt-4 text-[15px] leading-8 text-white/80">
            Each location page should make the brand promise feel local without losing the polished, high-trust presentation of the main site.
          </p>
        </article>

        <article class="ajs-reveal-up border border-white/12 bg-white/6 p-6 backdrop-blur-sm">
          <h3 class="text-xl font-black">Schedule Discipline</h3>
          <p class="mt-4 text-[15px] leading-8 text-white/80">
            County-specific pages help visitors self-identify fast, making the path from first click to estimate request more direct and more confident.
          </p>
        </article>

        <article class="ajs-reveal-up border border-white/12 bg-white/6 p-6 backdrop-blur-sm">
          <h3 class="text-xl font-black">Aesthetic Certainty</h3>
          <p class="mt-4 text-[15px] leading-8 text-white/80">
            The design stays premium, structured, and brand-aligned, so the experience still feels like Real Painting Corp at every entry point.
          </p>
        </article>

        <article class="ajs-reveal-up border border-[#7DAD3F]/30 bg-[linear-gradient(135deg,rgba(125,173,63,0.18),rgba(74,108,47,0.36))] p-6">
          <h3 class="text-xl font-black">Zero Surprises</h3>
          <p class="mt-4 text-[15px] leading-8 text-white/86">
            Visitors choose their county, understand the service area quickly, and move straight into the right local page or the estimate form.
          </p>
        </article>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="relative isolate overflow-hidden bg-[#f6f5f0] py-20 text-[#192F44] lg:py-24">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(35,100,118,0.08),transparent_28%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(125,173,63,0.12),transparent_30%)]"></div>

    <div class="relative mx-auto max-w-5xl px-4 text-center">
      <p class="ajs-reveal-up text-xs font-black uppercase tracking-[0.22em] text-[#236476]">
        Final CTA
      </p>

      <h2 class="ajs-reveal-up mt-5 text-3xl font-black leading-tight tracking-[-0.05em] md:text-5xl">
        Ready to See What Real Looks Like?
      </h2>

      <p class="ajs-reveal-up mx-auto mt-6 max-w-3xl text-base leading-8 text-[#192F44]/80">
        Whether you’re in Orange County, Los Angeles County, Riverside County, or San Bernardino County, Real Painting Corp delivers the certainty your home deserves.
      </p>

      <div class="ajs-reveal-up mt-8 flex flex-wrap items-center justify-center gap-3">
        <a href="/contact-us"
           class="rpc-paint-btn rpc-paint-btn-green inline-flex items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
          Request a Free Estimate
        </a>

        <a href="tel:+19092326602"
           class="rpc-paint-btn rpc-paint-btn-dark inline-flex items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
          (909) 232-6602
        </a>
      </div>

      <div class="rpc-paint-swipe rpc-paint-swipe-light mx-auto mt-10 max-w-2xl"></div>
    </div>
  </section>
</main>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;700&display=swap');

  .rpc-locations-hub {
    font-family: "Manrope", "Segoe UI", Arial, sans-serif;
  }

  .rpc-locations-hub h1,
  .rpc-locations-hub h2,
  .rpc-locations-hub h3 {
    font-family: "Space Grotesk", "Segoe UI", Arial, sans-serif;
  }

  .rpc-locations-hero-image {
    animation: rpcHeroZoom 14s ease-out forwards;
    transform: scale(1.06);
  }

  .rpc-paint-swipe {
    height: 14px;
    width: 100%;
    background: linear-gradient(90deg, #192F44 0%, #236476 28%, #CFE0DA 55%, #7DAD3F 78%, #4A6C2F 100%);
    clip-path: polygon(0 35%, 7% 20%, 14% 40%, 22% 18%, 30% 42%, 38% 22%, 48% 50%, 56% 26%, 66% 46%, 76% 18%, 86% 42%, 94% 22%, 100% 36%, 100% 100%, 0 100%);
    opacity: 0.92;
    animation: rpcSwipeShift 7s ease-in-out infinite alternate;
  }

  .rpc-paint-swipe-light {
    background: linear-gradient(90deg, #CFE0DA 0%, #ffffff 36%, #CFE0DA 58%, #7DAD3F 100%);
  }

  .rpc-paint-btn {
    position: relative;
    border: 1px solid transparent;
    transition: transform .22s ease, box-shadow .22s ease, background-color .22s ease, color .22s ease, border-color .22s ease;
    overflow: hidden;
    border-radius: 0;
  }

  .rpc-paint-btn::after {
    content: "";
    position: absolute;
    inset: 0;
    transform: translateX(-110%);
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.22), transparent);
    transition: transform .6s ease;
  }

  .rpc-paint-btn:hover::after {
    transform: translateX(110%);
  }

  .rpc-paint-btn:hover {
    transform: translateY(-2px);
  }

  .rpc-paint-btn-dark {
    background: #192F44;
    border-color: #192F44;
    box-shadow: 0 16px 34px rgba(25,47,68,0.18);
  }

  .rpc-paint-btn-dark:hover {
    background: #236476;
    border-color: #236476;
  }

  .rpc-paint-btn-green {
    background: #7DAD3F;
    border-color: #7DAD3F;
    box-shadow: 0 16px 34px rgba(125,173,63,0.22);
  }

  .rpc-paint-btn-green:hover {
    background: #4A6C2F;
    border-color: #4A6C2F;
  }

  .rpc-paint-btn-outline {
    background: rgba(255,255,255,0.06);
    border-color: rgba(255,255,255,0.18);
    backdrop-filter: blur(6px);
  }

  .rpc-paint-btn-outline:hover {
    background: #ffffff;
    color: #192F44;
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

  @keyframes rpcSwipeShift {
    0%   { transform: translateX(0) scaleX(1); }
    100% { transform: translateX(6px) scaleX(1.01); }
  }

  @keyframes rpcHeroZoom {
    0% {
      transform: scale(1.08);
    }
    100% {
      transform: scale(1);
    }
  }

  @media (max-width: 768px) {
    .rpc-locations-hub iframe {
      min-height: 260px;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .ajs-reveal-up,
    .ajs-reveal-left,
    .ajs-reveal-right,
    .ajs-reveal-stagger,
    .rpc-paint-btn,
    .rpc-paint-swipe,
    .rpc-locations-hero-image {
      opacity: 1 !important;
      transform: none !important;
      transition: none !important;
      animation: none !important;
    }
  }
</style>

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
  });
</script>

<?php get_footer(); ?>