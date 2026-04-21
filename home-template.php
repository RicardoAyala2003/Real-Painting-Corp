<?php
/**
 * Template Name: Home Template
 *
 * Homepage Real Painting Corp
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="rpc-paint-home bg-[#f6f5f0] text-[#192F44] overflow-hidden">

  <?php
    $hero_images = [
      '/wp-content/uploads/2026/04/Painting-scaled.jpg',
      '/wp-content/uploads/2026/04/RealPaintingHeroKitchenRemodeling.jpg-scaled.jpeg',
      '/wp-content/uploads/2026/04/CabinetsInstallationRealPainting.jpg-scaled.jpeg',
      '/wp-content/uploads/2026/04/ExteriorPaintingHero.jpg-scaled.jpeg',
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

    $render_estimate_form = function($form_id, $form_class = '', $button_class = 'rpc-paint-btn rpc-paint-btn-green') use ($service_options) {
      $name_id    = $form_id . '_name';
      $phone_id   = $form_id . '_phone';
      $email_id   = $form_id . '_email';
      $service_id = $form_id . '_service';
      $city_id    = $form_id . '_city';
      $message_id = $form_id . '_message';
      $policy_id  = $form_id . '_policy';
      $submit_id  = $form_id . '_submit';
      $success_id = $form_id . '_success';
      $error_id   = $form_id . '_error';
      $captcha_id = $form_id . '_captcha';

      ob_start(); ?>
      <form
        id="<?php echo esc_attr($form_id); ?>"
        class="rpc-estimate-form js-rpc-email-form <?php echo esc_attr($form_class); ?>"
        method="post"
        action="#"
        data-success-id="<?php echo esc_attr($success_id); ?>"
        data-error-id="<?php echo esc_attr($error_id); ?>"
        data-policy-id="<?php echo esc_attr($policy_id); ?>"
        data-submit-id="<?php echo esc_attr($submit_id); ?>"
        data-captcha-id="<?php echo esc_attr($captcha_id); ?>"
      >
        <div class="rpc-estimate-form__header">
          <p class="rpc-estimate-form__eyebrow">Request a Free Estimate</p>
          <h3 class="rpc-estimate-form__title">Tell us about your project.</h3>
          <p class="rpc-estimate-form__trust">
            Licensed • Insured • Bonded • 40+ Years Combined Experience
          </p>
        </div>

        <div class="rpc-estimate-form__grid">
          <div class="rpc-estimate-form__field">
            <label for="<?php echo esc_attr($name_id); ?>">Full Name *</label>
            <input id="<?php echo esc_attr($name_id); ?>" type="text" name="full_name" placeholder="Your full name" required>
          </div>

          <div class="rpc-estimate-form__field">
            <label for="<?php echo esc_attr($phone_id); ?>">Phone Number *</label>
            <input id="<?php echo esc_attr($phone_id); ?>" type="tel" name="phone" placeholder="(909) 513-7397" required>
          </div>

          <div class="rpc-estimate-form__field">
            <label for="<?php echo esc_attr($email_id); ?>">Email Address *</label>
            <input id="<?php echo esc_attr($email_id); ?>" type="email" name="email" placeholder="you@example.com" required>
          </div>

          <div class="rpc-estimate-form__field">
            <label for="<?php echo esc_attr($service_id); ?>">Service Needed *</label>
            <select id="<?php echo esc_attr($service_id); ?>" name="service" required>
              <option value="">Select a service</option>
              <?php foreach ($service_options as $option) : ?>
                <option value="<?php echo esc_attr($option); ?>"><?php echo esc_html($option); ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="rpc-estimate-form__field rpc-estimate-form__field--full">
            <label for="<?php echo esc_attr($city_id); ?>">Property Address or City *</label>
            <input id="<?php echo esc_attr($city_id); ?>" type="text" name="location" placeholder="City or property address" required>
          </div>

          <div class="rpc-estimate-form__field rpc-estimate-form__field--full">
            <label for="<?php echo esc_attr($message_id); ?>">Tell Us About Your Project</label>
            <textarea id="<?php echo esc_attr($message_id); ?>" name="message" rows="4" placeholder="Scope, timing, type of work, or anything else we should know."></textarea>
          </div>
        </div>

        <p class="rpc-estimate-form__micro">
          We’ll review your request and reach out within 24–48 hours. No pressure. Just clarity.
        </p>

        <div class="rpc-estimate-form__feedback">
          <div id="<?php echo esc_attr($success_id); ?>" class="rpc-form-message rpc-form-message--success" aria-live="polite"></div>
          <div id="<?php echo esc_attr($error_id); ?>" class="rpc-form-message rpc-form-message--error" aria-live="polite"></div>
        </div>

        <div class="rpc-estimate-form__captcha">
          <div
            id="<?php echo esc_attr($captcha_id); ?>"
            class="js-rpc-recaptcha"
            data-sitekey="6LeAh7wsAAAAAPiODrnGhIF6zQSjhx3bIb3zWcoJ">
          </div>
        </div>

        <label class="rpc-estimate-form__check">
          <input id="<?php echo esc_attr($policy_id); ?>" type="checkbox" required>
          <span>
            I agree to the <a href="/privacy-policy">Privacy Policy</a> and <a href="/terms">Terms &amp; Conditions</a>, and consent to be contacted regarding my request.
          </span>
        </label>

        <button id="<?php echo esc_attr($submit_id); ?>" type="submit" class="<?php echo esc_attr($button_class); ?> rpc-estimate-form__submit">
          Submit Request
        </button>
      </form>
      <?php
      return ob_get_clean();
    };

    $services = [
      [
        'title' => 'Interior Painting',
        'copy'  => 'Walls, ceilings, trim, and accent work  with full surface preparation and daily cleanup.',
        'link'  => '/services/interior-painting',
        'tone'  => '#192F44',
        'cta'   => 'Explore Interior Painting →',
        'image' => '/wp-content/uploads/2026/04/InteriorPaintingService.jpg-scaled.jpeg',
      ],
      [
        'title' => 'Exterior Painting',
        'copy'  => 'Complete exterior coatings built for Southern California sun, wind, and climate.',
        'link'  => '/services/exterior-painting',
        'tone'  => '#236476',
        'cta'   => 'Explore Exterior Painting →',
        'image' => '/wp-content/uploads/2026/04/ExteriorPaintingService.jpg-scaled.jpeg',
      ],
      [
        'title' => 'Kitchen Remodeling',
        'copy'  => 'Full kitchen transformations  layout, cabinets, countertops, tile, and finishing.',
        'link'  => '/services/kitchen-remodeling',
        'tone'  => '#4A6C2F',
        'cta'   => 'Explore Kitchen Remodeling →',
        'image' => '/wp-content/uploads/2026/04/KitchenRemodelingService.jpg-scaled.jpeg',
      ],
      [
        'title' => 'Bathroom Remodeling',
        'copy'  => 'Shower conversions, tile, vanities, and modern upgrades with lasting value.',
        'link'  => '/services/bathroom-remodeling',
        'tone'  => '#7DAD3F',
        'cta'   => 'Explore Bathroom Remodeling →',
        'image' => '/wp-content/uploads/2026/04/BathroomRemodelingService.jpg-scaled.jpeg',
      ],
      [
        'title' => 'Cabinet Refinishing & Staining',
        'copy'  => 'A dramatic kitchen refresh without the cost of full replacement.',
        'link'  => '/services/cabinet-refinishing-staining',
        'tone'  => '#192F44',
        'cta'   => 'Explore Cabinet Refinishing →',
        'image' => '/wp-content/uploads/2026/04/CabinetRefinishingStainingService.jpg-scaled.jpeg',
      ],
      [
        'title' => 'Surface Repair & Preparation',
        'copy'  => 'Drywall, stucco, texture, trim, and the prep work behind every lasting finish.',
        'link'  => '/services/surface-repair-preparation',
        'tone'  => '#236476',
        'cta'   => 'Explore Surface Repair →',
        'image' => '/wp-content/uploads/2026/04/SurfaceReparePreparationService.jpg-scaled.jpeg',
      ],
      [
        'title' => 'Pressure Washing',
        'copy'  => 'Deep cleaning for exterior surfaces, curb appeal, and pre-paint preparation.',
        'link'  => '/services/pressure-washing',
        'tone'  => '#7DAD3F',
        'cta'   => 'Explore Pressure Washing →',
        'image' => '/wp-content/uploads/2026/04/PressureWashingService.jpg-scaled.jpeg',
      ],
      [
        'title' => 'Commercial Painting',
        'copy'  => 'Professional results for offices, retail, and commercial properties.',
        'link'  => '/services/commercial-painting',
        'tone'  => '#4A6C2F',
        'cta'   => 'Explore Commercial Painting →',
        'image' => '/wp-content/uploads/2026/04/CommercialPaintingService.jpg-scaled.jpeg',
      ],
    ];
  ?>

  <!-- HERO FULL WIDTH -->
  <section class="relative min-h-[760px] w-full overflow-hidden lg:min-h-[820px]">
    <div class="rpc-hero-carousel absolute inset-0">
      <?php foreach ($hero_images as $index => $image) : ?>
        <div class="rpc-hero-slide<?php echo $index === 0 ? ' is-active' : ''; ?>">
          <img
            src="<?php echo esc_url($image); ?>"
            alt="Premium residential painting project"
            class="rpc-hero-slide__image"
          >
        </div>
      <?php endforeach; ?>
    </div>

    <div class="absolute inset-0 bg-[#192F44]/70"></div>

    <div
      class="absolute inset-0 opacity-20 mix-blend-overlay"
      style="background-image:url('https://www.transparenttextures.com/patterns/brushed-alum.png')">
    </div>

    <div class="relative z-10 mx-auto grid min-h-[760px] max-w-7xl gap-10 px-4 py-20 lg:min-h-[820px] lg:grid-cols-[1.05fr_0.95fr] lg:items-center lg:gap-14">
      <div class="text-center lg:text-left">


        <h1 class="ajs-reveal-up mt-6 text-4xl font-extrabold leading-[1.05] tracking-[-0.04em] text-white md:text-6xl">
          When We Enter Your Home,<br class="hidden md:block">
          the Stress Leaves.
        </h1>

        <p class="ajs-reveal-up mt-6 max-w-2xl text-base leading-7 text-white/85 md:text-lg lg:max-w-xl">
          Premium painting and remodeling across Southern California  delivered with clean execution,
          schedule discipline, and the certainty your home deserves.
        </p>

        <div class="ajs-reveal-up mt-10 flex flex-col gap-4 sm:flex-row lg:justify-start">
          <a href="/contact-us"
             class="rpc-paint-btn rpc-paint-btn-green inline-flex items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
            Request a Free Estimate
          </a>

          <a href="#services"
             class="rpc-paint-btn rpc-paint-btn-outline inline-flex items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
            Explore Our Services
          </a>
        </div>
      </div>

      <div class="ajs-reveal-right">
        <?php echo $render_estimate_form('rpc-home-hero-form', 'rpc-estimate-form--hero', 'rpc-paint-btn rpc-paint-btn-green'); ?>
      </div>
    </div>
  </section>

  <!-- MOVING TRUST RIBBON -->
  <section class="rpc-marquee border-b border-[#192F44]/10 bg-white">
    <div class="rpc-marquee__track">
      <div class="rpc-marquee__group">
        <span class="rpc-marquee__item">
          <span class="rpc-marquee__dot bg-[#192F44]"></span>
          C-33 Licensed · Insured · Bonded
        </span>

        <span class="rpc-marquee__item">
          <span class="rpc-marquee__dot bg-[#236476]"></span>
          40+ Years Combined Experience
        </span>

        <span class="rpc-marquee__item">
          <span class="rpc-marquee__dot bg-[#7DAD3F]"></span>
          24–48 Hour Response Time
        </span>

        <span class="rpc-marquee__item">
          <span class="rpc-marquee__dot bg-[#4A6C2F]"></span>
          Serving OC · LA · Riverside · San Bernardino
        </span>
      </div>

      <div class="rpc-marquee__group" aria-hidden="true">
        <span class="rpc-marquee__item">
          <span class="rpc-marquee__dot bg-[#192F44]"></span>
          B-2 Licensed · Insured · Bonded
        </span>

        <span class="rpc-marquee__item">
          <span class="rpc-marquee__dot bg-[#236476]"></span>
          40+ Years Combined Experience
        </span>

        <span class="rpc-marquee__item">
          <span class="rpc-marquee__dot bg-[#7DAD3F]"></span>
          24–48 Hour Response Time
        </span>

        <span class="rpc-marquee__item">
          <span class="rpc-marquee__dot bg-[#4A6C2F]"></span>
          Serving OC · LA · Riverside · San Bernardino
        </span>
      </div>
    </div>
  </section>

  <!-- WHO WE ARE -->
  <section class="relative bg-[#f6f5f0] py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="grid gap-12 lg:grid-cols-[0.88fr_1.12fr] lg:items-start">
        <div class="ajs-reveal-left">
          <p class="text-xs font-black uppercase tracking-[0.22em] text-[#4A6C2F]">
            Who We Are
          </p>

          <h2 class="mt-5 max-w-[10ch] text-3xl font-black leading-[0.94] tracking-[-0.05em] text-[#192F44] md:text-5xl">
            One Team. Every Detail. Zero Surprises.
          </h2>

          <div class="mt-7 h-2 w-32 bg-[linear-gradient(90deg,#192F44_0%,#236476_35%,#7DAD3F_100%)]"></div>
        </div>

        <div class="ajs-reveal-right">
          <div class="space-y-5 text-base leading-8 text-[#192F44]/80">
            <p>
              Real Painting Corp is a full-service painting and remodeling company based in Southern California. We handle everything from interior and exterior painting to complete kitchen and bathroom transformations  with the structure, licensing, and accountability that most contractors simply don’t offer.
            </p>

            <p>
              We exist to eliminate the stress and uncertainty homeowners feel when hiring someone to work inside their home. That means protecting your space before we touch a wall. It means showing up when we say and finishing when we promise. And it means delivering a result you can see and feel  one that makes you say, “These are different.”
            </p>

            <p>
              Our clients are homeowners across Orange County, Los Angeles, Riverside, and San Bernardino who value their property and refuse to gamble on the wrong contractor.
            </p>

            <div class="pt-2">
              <a href="/about-us"
                 class="inline-flex items-center gap-2 border-b-2 border-[#236476] pb-1 text-sm font-black uppercase tracking-[0.12em] text-[#236476] transition hover:gap-3">
                Learn About Us
                <span>→</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES OVERVIEW -->
  <section id="services" class="relative overflow-hidden border-y border-[#192F44]/10 bg-white py-20 lg:py-24">
    <div class="absolute right-0 top-0 h-full w-[28%] bg-[#CFE0DA]/30"></div>

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="ajs-reveal-up max-w-4xl">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#236476]">
          Services Overview
        </p>

        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.05em] text-[#192F44] md:text-5xl">
          Everything Your Home Needs. One Team You Can Trust.
        </h2>
      </div>

      <div class="mt-12 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
        <?php foreach ($services as $service) : ?>
          <article class="ajs-reveal-stagger group overflow-hidden border border-[#192F44]/10 bg-[#fdfcf8] shadow-[0_16px_34px_rgba(25,47,68,0.06)]">
            <a href="<?php echo esc_url($service['link']); ?>" class="block">
              <div class="relative h-[220px] overflow-hidden">
                <img
                  src="<?php echo esc_url($service['image']); ?>"
                  alt="<?php echo esc_attr($service['title']); ?>"
                  class="h-full w-full object-cover transition duration-700 group-hover:scale-[1.04]"
                >
                <div class="absolute inset-0 bg-[linear-gradient(180deg,rgba(25,47,68,0.06)_0%,rgba(25,47,68,0.16)_100%)]"></div>
                <div class="absolute inset-x-0 top-0 h-2" style="background: <?php echo esc_attr($service['tone']); ?>;"></div>
              </div>

              <div class="p-6">
                <h3 class="text-xl font-black tracking-[-0.03em] text-[#192F44]">
                  <?php echo esc_html($service['title']); ?>
                </h3>

                <p class="mt-4 text-[15px] leading-7 text-[#192F44]/76">
                  <?php echo esc_html($service['copy']); ?>
                </p>

                <span class="mt-6 inline-flex items-center gap-2 text-sm font-black uppercase tracking-[0.12em] text-[#236476] transition group-hover:gap-3">
                  <?php echo esc_html($service['cta']); ?>
                </span>
              </div>
            </a>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- WHY REAL PAINTING -->
  <section class="rpc-why-section relative overflow-hidden bg-[#192F44] py-20 text-white lg:py-24">
    <div
      class="absolute inset-0 rpc-why-stamp"
      style="background-image: url('/wp-content/uploads/2026/04/Estampados-01-scaled.png');">
    </div>

    <div class="relative z-10 mx-auto max-w-7xl px-4">
      <div class="grid gap-10 lg:grid-cols-[0.92fr_1.08fr] lg:items-start">
        <div class="ajs-reveal-left">
          <p class="text-xs font-black uppercase tracking-[0.22em] text-[#CFE0DA]">
            Why Real Painting
          </p>

          <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.05em] md:text-5xl">
            In an Industry Full of Broken Promises, We Deliver Certainty.
          </h2>

          <p class="mt-6 max-w-md text-base leading-8 text-white/76">
            The most common complaints homeowners have about contractors are irresponsibility, lack of cleanliness, and broken timelines. We built our entire company around solving those three problems.
          </p>
        </div>

        <div class="grid gap-5 md:grid-cols-2">
          <article class="ajs-reveal-up border border-white/12 bg-white/6 p-6 backdrop-blur-sm">
            <h3 class="text-xl font-black">Clean Site Protocol</h3>
            <p class="mt-4 text-[15px] leading-8 text-white/80">
              We protect every surface before we start  floors, furniture, fixtures. When we leave each day, your home is cleaner than when we arrived. This isn’t a promise we make at the estimate. It’s what you’ll see on day one.
            </p>
          </article>

          <article class="ajs-reveal-up border border-white/12 bg-white/6 p-6 backdrop-blur-sm">
            <h3 class="text-xl font-black">Schedule Discipline</h3>
            <p class="mt-4 text-[15px] leading-8 text-white/80">
              We arrive when we say. We finish when we promise. Your time matters to us as much as the final result. Every project has a defined timeline, and we hold to it.
            </p>
          </article>

          <article class="ajs-reveal-up border border-white/12 bg-white/6 p-6 backdrop-blur-sm">
            <h3 class="text-xl font-black">Aesthetic Certainty</h3>
            <p class="mt-4 text-[15px] leading-8 text-white/80">
              You’ll know exactly what the result will look like before we begin. Our experience in color, finish, and design means no guesswork  just a result that makes you proud of your home.
            </p>
          </article>

          <article class="ajs-reveal-up border border-[#7DAD3F]/30 bg-[linear-gradient(135deg,rgba(125,173,63,0.18),rgba(74,108,47,0.36))] p-6">
            <h3 class="text-xl font-black">Licensed, Insured & Bonded</h3>
            <p class="mt-4 text-[15px] leading-8 text-white/86">
              C-33 licensed, General Liability, Workers’ Compensation, and bonded. This eliminates over 60% of informal competitors who operate without protection. Your home and your investment are fully covered.
            </p>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- HOW WE WORK -->
  <section class="bg-[#f6f5f0] py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="ajs-reveal-up mx-auto max-w-3xl text-center">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#4A6C2F]">
          How We Work
        </p>

        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.05em] text-[#192F44] md:text-5xl">
          A Clear Process. No Guesswork. No Surprises.
        </h2>
      </div>

      <div class="mt-14 grid gap-6 xl:grid-cols-4">
        <?php
        $steps = [
          ['num' => '01', 'title' => 'Free Consultation', 'copy' => 'We visit your property, listen to your goals, and assess the scope before recommending anything. No pressure, no obligation  just an honest conversation about what your home needs.', 'bg' => '#CFE0DA'],
          ['num' => '02', 'title' => 'Detailed Estimate', 'copy' => 'You receive a clear, written proposal with defined scope, timeline, and pricing. No vague numbers. No hidden costs. You know exactly what you’re getting before we touch a wall.', 'bg' => '#ffffff'],
          ['num' => '03', 'title' => 'Expert Execution', 'copy' => 'Our crew arrives on schedule, protects your home, and delivers premium workmanship with daily cleanup and progress updates. You’ll always know what happened today and what’s happening tomorrow.', 'bg' => '#ffffff'],
          ['num' => '04', 'title' => 'Final Walk-Through', 'copy' => 'We don’t consider a project complete until you do. Every job ends with a walk-through, your full approval, and the confidence that you made the right call.', 'bg' => '#CFE0DA'],
        ];

        foreach ($steps as $step) : ?>
          <article class="ajs-reveal-stagger relative overflow-hidden border border-[#192F44]/10 p-6 shadow-[0_16px_36px_rgba(25,47,68,0.06)]" style="background: <?php echo esc_attr($step['bg']); ?>;">
            <div class="absolute right-0 top-0 h-16 w-16 translate-x-[25%] -translate-y-[25%] rotate-12 bg-[#7DAD3F]/16"></div>

            <span class="inline-flex bg-[#192F44] px-4 py-2 text-[11px] font-black uppercase tracking-[0.18em] text-white">
              <?php echo esc_html($step['num']); ?>
            </span>

            <h3 class="mt-5 text-xl font-black tracking-[-0.03em] text-[#192F44]">
              <?php echo esc_html($step['title']); ?>
            </h3>

            <p class="mt-4 text-[15px] leading-8 text-[#192F44]/76">
              <?php echo esc_html($step['copy']); ?>
            </p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

 <!-- TESTIMONIALS -->
<section class="relative overflow-hidden border-t border-[#192F44]/10 bg-white py-20 lg:py-24">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(35,100,118,0.05),transparent_30%)]"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(125,173,63,0.08),transparent_28%)]"></div>

  <div class="relative mx-auto max-w-7xl px-4">
    
    <!-- HEADER -->
    <div class="flex flex-col gap-5 md:flex-row md:items-end md:justify-between">
      <div class="ajs-reveal-left max-w-2xl">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#236476]">
          Testimonials
        </p>

        <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.05em] text-[#192F44] md:text-5xl">
          What Homeowners Are Saying
        </h2>

        <p class="mt-5 max-w-xl text-base leading-8 text-[#192F44]/74">
          Real feedback from homeowners who trusted Real Painting Corp with their home.
        </p>
      </div>

      <!-- OPCIONAL: BOTÓN -->
      <div class="ajs-reveal-right">
        <a href="https://www.google.com/search?sca_esv=55e9f3c856495c1e&rlz=1C5AJCO_enUS1195US1195&sxsrf=ANbL-n7SWeDoYqXCCqbsvlBJOd9U5zKwxg:1776310827641&si=AL3DRZEsmMGCryMMFSHJ3StBhOdZ2-6yYkXd_doETEE1OR-qOY2rO3DUfzgS3kdyK5OTfr68pXOjsJtQzHBPt0E9MABdgr0JcuEhZjfL-is4Cvx29OAHfP_xw8HAeSKmK31GzNBvjahGqcTrebKo3pxVeFXg6KrlRA%3D%3D&q=REAL+Painting+Corp+Opiniones&sa=X&ved=2ahUKEwiisZG_ufGTAxWrj4kEHbMPLp0Q0bkNegQIIBAH&cshid=1776310953691549&biw=1528&bih=698&dpr=1.25"
           class="rpc-paint-btn rpc-paint-btn-dark inline-flex items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
          Read More Reviews →
        </a>
      </div>
    </div>

    <!-- TRUSTINDEX -->
    <div class="mt-12 ajs-reveal-up">
      <?php echo do_shortcode('[trustindex no-registration=google]'); ?>
    </div>

  </div>
</section>

  <!-- GALLERY TEASER -->
  <section class="bg-[#f6f5f0] py-20">
    <div class="mx-auto max-w-7xl px-4">
      <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
        <div class="ajs-reveal-left">
          <p class="text-xs font-black uppercase tracking-[0.22em] text-[#4A6C2F]">
            Real Projects
          </p>

          <h2 class="mt-3 text-3xl font-black tracking-[-0.04em] text-[#192F44] md:text-5xl">
            Real Projects. Real Results.
          </h2>
        </div>

        <p class="ajs-reveal-right max-w-xl text-sm leading-7 text-[#192F44]/70 md:text-right">
          Every project tells a story of clean execution, attention to detail, and a homeowner who felt certain from start to finish. See the work for yourself.
        </p>
      </div>

      <?php
        $project_pairs = [
          [
            'before' => '/wp-content/uploads/2026/04/proy-1-scaled.jpg',
            'after'  => '/wp-content/uploads/2026/04/proy-1-resuelto-scaled.jpg',
            'title'  => 'Project 01'
          ],
          [
            'before' => '/wp-content/uploads/2026/04/proy-2-scaled.jpg',
            'after'  => '/wp-content/uploads/2026/04/proy-2-resuelto-scaled.jpg',
            'title'  => 'Project 02'
          ],
          [
            'before' => '/wp-content/uploads/2026/04/proy-3-scaled.jpg',
            'after'  => '/wp-content/uploads/2026/04/proy-3-resuelto-scaled.jpg',
            'title'  => 'Project 03'
          ],
          [
            'before' => '/wp-content/uploads/2026/04/proy-4-scaled.jpg',
            'after'  => '/wp-content/uploads/2026/04/proy-4-resuelto-scaled.jpg',
            'title'  => 'Project 04'
          ],
          [
            'before' => '/wp-content/uploads/2026/04/proy-5-scaled.jpg',
            'after'  => '/wp-content/uploads/2026/04/proy-5-resuelto-scaled.jpg',
            'title'  => 'Project 05'
          ],
          [
            'before' => '/wp-content/uploads/2026/04/20250531_110801-scaled.jpg',
            'after'  => '/wp-content/uploads/2026/04/proy-6-scaled.jpg',
            'title'  => 'Project 06'
          ],
        ];
      ?>

      <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <?php foreach ($project_pairs as $project) : ?>
          <article class="ajs-reveal-stagger group overflow-hidden border border-[#192F44]/10 bg-white shadow-[0_14px_34px_rgba(25,47,68,0.06)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_20px_44px_rgba(25,47,68,0.10)]">
            <div class="grid grid-cols-2">
              <div class="relative h-[260px] overflow-hidden">
                <img
                  src="<?php echo esc_url($project['before']); ?>"
                  class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                  alt="<?php echo esc_attr($project['title']); ?> before"
                >
                <div class="absolute inset-0 bg-[linear-gradient(180deg,rgba(25,47,68,0.06)_0%,rgba(25,47,68,0.18)_100%)]"></div>
                <span class="absolute left-4 top-4 bg-[#192F44] px-3 py-1 text-[10px] font-black uppercase tracking-[0.14em] text-white">
                  Before
                </span>
              </div>

              <div class="relative h-[260px] overflow-hidden">
                <img
                  src="<?php echo esc_url($project['after']); ?>"
                  class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                  alt="<?php echo esc_attr($project['title']); ?> after"
                >
                <div class="absolute inset-0 bg-[linear-gradient(180deg,rgba(125,173,63,0.04)_0%,rgba(25,47,68,0.14)_100%)]"></div>
                <span class="absolute right-4 top-4 bg-[#7DAD3F] px-3 py-1 text-[10px] font-black uppercase tracking-[0.14em] text-white">
                  After
                </span>
              </div>
            </div>

            <div class="flex items-center justify-between border-t border-[#192F44]/8 px-5 py-4">
              <h3 class="text-sm font-black uppercase tracking-[0.16em] text-[#192F44]">
                <?php echo esc_html($project['title']); ?>
              </h3>

              <span class="text-[11px] font-black uppercase tracking-[0.16em] text-[#236476]">
                Before / After
              </span>
            </div>
          </article>
        <?php endforeach; ?>
      </div>

      <div class="ajs-reveal-up mt-12 text-center">
        <a href="/gallery"
           class="rpc-paint-btn rpc-paint-btn-dark inline-flex items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
          View Our Work →
        </a>
      </div>
    </div>
  </section>

   <!-- SERVICE AREAS -->
  <section class="border-y border-[#192F44]/10 bg-white py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="ajs-reveal-up mx-auto max-w-4xl text-center">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#236476]">
          Service Areas
        </p>

        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.05em] text-[#192F44] md:text-5xl">
          Serving Southern California’s Most Valued Communities
        </h2>
      </div>

      <div class="mt-12 grid gap-5 sm:grid-cols-2 xl:grid-cols-4">
        <?php
        $areas = [
          [
            'title'  => 'Orange County',
            'link'   => 'https://www.google.com/maps/search/?api=1&query=Orange+County,+CA',
            'swatch' => '#192F44'
          ],
          [
            'title'  => 'Los Angeles County',
            'link'   => 'https://www.google.com/maps/search/?api=1&query=Los+Angeles+County,+CA',
            'swatch' => '#236476'
          ],
          [
            'title'  => 'Riverside County',
            'link'   => 'https://www.google.com/maps/search/?api=1&query=Riverside+County,+CA',
            'swatch' => '#7DAD3F'
          ],
          [
            'title'  => 'San Bernardino County',
            'link'   => 'https://www.google.com/maps/search/?api=1&query=San+Bernardino+County,+CA',
            'swatch' => '#4A6C2F'
          ],
        ];

        foreach ($areas as $area) : ?>
          <a href="<?php echo esc_url($area['link']); ?>"
             target="_blank"
             rel="noopener noreferrer"
             class="ajs-reveal-stagger group border border-[#192F44]/10 bg-[#fdfcf8] p-6 transition hover:-translate-y-1 hover:shadow-[0_16px_36px_rgba(25,47,68,0.10)]">
            <div class="mb-5 h-4 w-20 transition-all duration-500 group-hover:w-28" style="background: <?php echo esc_attr($area['swatch']); ?>;"></div>
            <h3 class="text-xl font-black tracking-[-0.03em] text-[#192F44]">
              <?php echo esc_html($area['title']); ?>
            </h3>
            <span class="mt-5 inline-flex items-center gap-2 text-sm font-black uppercase tracking-[0.12em] text-[#236476] transition group-hover:gap-3">
              Explore
              <span>→</span>
            </span>
          </a>
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
          Ready to See What Real Looks Like?
        </h2>

        <p class="ajs-reveal-up mt-6 max-w-3xl text-base leading-8 text-[#192F44]/80">
          Whether you need a fresh interior, a complete exterior transformation, or a kitchen and bathroom that changes how you live  we deliver the certainty your home deserves.
        </p>

        <div class="ajs-reveal-up mt-8 flex flex-wrap items-center gap-3">
          <a href="tel:+19095137397"
             class="rpc-paint-btn rpc-paint-btn-dark inline-flex items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
            (909)-513-7397
          </a>
        </div>

        <div class="rpc-paint-swipe rpc-paint-swipe-light mt-10 max-w-2xl"></div>
      </div>

      <div class="ajs-reveal-right">
        <?php echo $render_estimate_form('rpc-home-final-form', 'rpc-estimate-form--light', 'rpc-paint-btn rpc-paint-btn-green'); ?>
      </div>
    </div>
  </section>
</main>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;700&display=swap');

  .rpc-paint-home {
    font-family: "Manrope", "Segoe UI", Arial, sans-serif;
  }

  .rpc-paint-home h1,
  .rpc-paint-home h2,
  .rpc-paint-home h3 {
    font-family: "Space Grotesk", "Segoe UI", Arial, sans-serif;
  }

  .rpc-hero-carousel {
    position: absolute;
    inset: 0;
  }

  .rpc-hero-slide {
    position: absolute;
    inset: 0;
    opacity: 0;
    visibility: hidden;
    transition: opacity 1.2s ease, visibility 1.2s ease;
  }

  .rpc-why-stamp {
    background-repeat: repeat;
    background-position: center;
    background-size: 420px auto;
    opacity: 0.50;
    mix-blend-mode: multiply;
  }

  .rpc-hero-slide.is-active {
    opacity: 1;
    visibility: visible;
  }

  .rpc-hero-slide__image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    animation: rpcHeroZoom 9s ease-out forwards;
    transform: scale(1.08);
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
    color: rgba(255,255,255,0.72);
  }

  .rpc-estimate-form--light .rpc-estimate-form__eyebrow {
    color: rgba(25,47,68,0.68);
  }

  .rpc-estimate-form__title {
    margin: 0.55rem 0 0;
    font-size: 1.35rem;
    font-weight: 800;
    line-height: 1.1;
    letter-spacing: -0.03em;
    color: #fff;
  }

  .rpc-estimate-form--light .rpc-estimate-form__title {
    color: #192F44;
  }

  .rpc-estimate-form__trust {
    margin-top: 0.6rem;
    font-size: 0.7rem;
    font-weight: 800;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.62);
  }

  .rpc-estimate-form--light .rpc-estimate-form__trust {
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
    color: rgba(255,255,255,0.78);
  }

  .rpc-estimate-form--light .rpc-estimate-form__field label {
    color: rgba(25,47,68,0.78);
  }

  .rpc-estimate-form__field input,
  .rpc-estimate-form__field select,
  .rpc-estimate-form__field textarea {
    width: 100%;
    min-height: 50px;
    border: 1px solid rgba(255,255,255,0.16);
    background: rgba(255,255,255,0.08);
    padding: 0.9rem 1rem;
    font-size: 0.95rem;
    color: #fff;
    outline: none;
    transition: border-color .2s ease, background-color .2s ease, box-shadow .2s ease;
  }

  .rpc-estimate-form__field textarea {
    min-height: 122px;
    resize: vertical;
  }

  .rpc-estimate-form__field input::placeholder,
  .rpc-estimate-form__field textarea::placeholder {
    color: rgba(255,255,255,0.58);
  }

  .rpc-estimate-form--light .rpc-estimate-form__field input,
  .rpc-estimate-form--light .rpc-estimate-form__field select,
  .rpc-estimate-form--light .rpc-estimate-form__field textarea {
    border-color: rgba(25,47,68,0.10);
    background: rgba(246,245,240,0.82);
    color: #192F44;
  }

  .rpc-estimate-form--light .rpc-estimate-form__field input::placeholder,
  .rpc-estimate-form--light .rpc-estimate-form__field textarea::placeholder {
    color: rgba(25,47,68,0.52);
  }

  .rpc-estimate-form__field input:focus,
  .rpc-estimate-form__field select:focus,
  .rpc-estimate-form__field textarea:focus {
    border-color: rgba(125,173,63,0.65);
    box-shadow: 0 0 0 3px rgba(125,173,63,0.16);
    background: rgba(255,255,255,0.12);
  }

  .rpc-estimate-form--light .rpc-estimate-form__field input:focus,
  .rpc-estimate-form--light .rpc-estimate-form__field select:focus,
  .rpc-estimate-form--light .rpc-estimate-form__field textarea:focus {
    background: #fff;
  }

  .rpc-estimate-form__field--full {
    grid-column: 1 / -1;
  }

  .rpc-estimate-form__micro {
    font-size: 0.75rem;
    line-height: 1.6;
    color: rgba(255,255,255,0.64);
    margin-top: 0.9rem;
  }

  .rpc-estimate-form--light .rpc-estimate-form__micro {
    color: rgba(25,47,68,0.64);
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
    color: #dff1c8;
  }

  .rpc-estimate-form--light .rpc-form-message--success {
    color: #4A6C2F;
  }

  .rpc-form-message--error {
    background: rgba(180,55,55,0.10);
    border-color: rgba(180,55,55,0.20);
    color: #ffd7d7;
    margin-top: 0.75rem;
  }

  .rpc-estimate-form--light .rpc-form-message--error {
    color: #8b2f2f;
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
    color: rgba(255,255,255,0.76);
  }

  .rpc-estimate-form__check input {
    margin-top: 0.15rem;
    accent-color: #7DAD3F;
  }

  .rpc-estimate-form--light .rpc-estimate-form__check {
    color: rgba(25,47,68,0.72);
  }

  .rpc-estimate-form__check a {
    color: #CFE0DA;
    text-decoration: underline;
  }

  .rpc-estimate-form--light .rpc-estimate-form__check a {
    color: #236476;
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

  .rpc-marquee {
    position: relative;
    overflow: hidden;
    background: #ffffff;
  }

  .rpc-marquee__track {
    display: flex;
    width: max-content;
    animation: rpcMarquee 22s linear infinite;
  }

  .rpc-marquee__group {
    display: flex;
    align-items: center;
    flex-shrink: 0;
    gap: 3.5rem;
    padding: 1rem 2rem;
  }

  .rpc-marquee__item {
    display: inline-flex;
    align-items: center;
    gap: 0.85rem;
    white-space: nowrap;
    font-size: 0.95rem;
    font-weight: 800;
    line-height: 1;
    color: #192F44;
  }

  .rpc-marquee__dot {
    display: inline-block;
    width: 12px;
    height: 12px;
    flex: 0 0 auto;
  }

  .rpc-marquee:hover .rpc-marquee__track {
    animation-play-state: paused;
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

  .rpc-testimonial-featured {
    position: relative;
  }

  .rpc-testimonial-featured__inner {
    position: relative;
    overflow: hidden;
    min-height: 100%;
    border: 1px solid rgba(25,47,68,0.10);
    background: #f7f5ef;
    box-shadow: 0 24px 60px rgba(25,47,68,0.10);
    padding: 2rem;
  }

  .rpc-testimonial-featured__inner::after {
    content: "";
    position: absolute;
    right: -50px;
    top: -40px;
    width: 220px;
    height: 220px;
    background: radial-gradient(circle, rgba(35,100,118,0.09), transparent 68%);
    pointer-events: none;
  }

  .rpc-testimonial-featured__top,
  .rpc-testimonial-side__top {
    display: flex;
    align-items: center;
    gap: 1rem;
    position: relative;
    z-index: 2;
  }

  .rpc-testimonial-bar {
    display: inline-block;
    width: 68px;
    height: 8px;
    flex: 0 0 auto;
  }

  .rpc-testimonial-kicker {
    font-size: 0.72rem;
    font-weight: 800;
    letter-spacing: 0.18em;
    text-transform: uppercase;
  }

  .rpc-testimonial-quote-mark {
    position: absolute;
    right: 1.5rem;
    top: 3.75rem;
    font-size: 8rem;
    line-height: 1;
    font-weight: 800;
    pointer-events: none;
    user-select: none;
  }

  .rpc-testimonial-featured__copy {
    position: relative;
    z-index: 2;
    margin-top: 3.25rem;
    max-width: 820px;
    font-size: clamp(1.2rem, 2vw, 1.7rem);
    line-height: 1.7;
    font-weight: 700;
    letter-spacing: -0.025em;
    color: #192F44;
  }

  .rpc-testimonial-featured__meta,
  .rpc-testimonial-side__meta {
    margin-top: 2rem;
    padding-top: 1.2rem;
    border-top: 1px solid rgba(25,47,68,0.10);
    position: relative;
    z-index: 2;
  }

  .rpc-testimonial-name {
    font-size: 0.8rem;
    font-weight: 800;
    letter-spacing: 0.14em;
    text-transform: uppercase;
  }

  .rpc-testimonial-side {
    position: relative;
    overflow: hidden;
    min-height: 248px;
    border: 1px solid rgba(25,47,68,0.10);
    padding: 1.75rem;
    box-shadow: 0 18px 40px rgba(25,47,68,0.08);
  }

  .rpc-testimonial-side::after {
    content: "";
    position: absolute;
    right: -30px;
    top: -30px;
    width: 160px;
    height: 160px;
    background: radial-gradient(circle, rgba(255,255,255,0.10), transparent 70%);
    pointer-events: none;
  }

  .rpc-testimonial-side--dark {
    background: #192F44;
    color: #fff;
  }

  .rpc-testimonial-side--green {
    background: #7DAD3F;
    color: #fff;
  }

  .rpc-testimonial-side__copy {
    position: relative;
    z-index: 2;
    margin-top: 2rem;
    font-size: 1rem;
    line-height: 1.95;
    font-weight: 700;
    letter-spacing: -0.01em;
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

  @keyframes rpcMarquee {
    0%   { transform: translateX(0); }
    100% { transform: translateX(-50%); }
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

  @media (min-width: 768px) {
    .rpc-estimate-form__grid {
      grid-template-columns: 1fr 1fr;
    }
  }

  @media (max-width: 1280px) {
    .rpc-testimonial-featured__copy {
      font-size: 1.3rem;
    }
  }

  @media (max-width: 1024px) {
    .rpc-estimate-form--hero {
      max-width: 760px;
      margin-inline: auto;
    }
  }

  @media (max-width: 768px) {
    .rpc-testimonial-featured__inner {
      padding: 1.5rem;
    }

    .rpc-testimonial-featured__copy {
      margin-top: 2.75rem;
      font-size: 1.05rem;
      line-height: 1.9;
    }

    .rpc-testimonial-side {
      min-height: auto;
      padding: 1.4rem;
    }

    .rpc-testimonial-side__copy {
      font-size: 0.95rem;
      line-height: 1.85;
    }

    .rpc-testimonial-quote-mark {
      right: 1rem;
      top: 3.25rem;
      font-size: 6rem;
    }

    .rpc-marquee__group {
      gap: 2rem;
      padding: 0.9rem 1.25rem;
    }

    .rpc-marquee__item {
      font-size: 0.82rem;
    }

    .rpc-estimate-form {
      padding: 1rem;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .ajs-reveal-up,
    .ajs-reveal-left,
    .ajs-reveal-right,
    .ajs-reveal-stagger,
    .rpc-paint-btn,
    .rpc-paint-swipe,
    .rpc-hero-slide,
    .rpc-hero-slide__image,
    .rpc-marquee__track,
    .rpc-why-pattern {
      opacity: 1 !important;
      transform: none !important;
      transition: none !important;
      animation: none !important;
    }
  }
</style>

<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
<script>
  window.rpcHomeRecaptchaReady = function () {
    const captchaNodes = document.querySelectorAll(".js-rpc-recaptcha");

    captchaNodes.forEach((node) => {
      if (node.dataset.widgetId) return;
      if (typeof grecaptcha === "undefined") return;

      const widgetId = grecaptcha.render(node, {
        sitekey: node.dataset.sitekey
      });

      node.dataset.widgetId = String(widgetId);
    });
  };
</script>
<script src="https://www.google.com/recaptcha/api.js?onload=rpcHomeRecaptchaReady&render=explicit" async defer></script>

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

    const heroSlides = document.querySelectorAll(".rpc-hero-slide");
    let heroIndex = 0;

    if (heroSlides.length > 1) {
      setInterval(() => {
        heroSlides[heroIndex].classList.remove("is-active");
        heroIndex = (heroIndex + 1) % heroSlides.length;
        heroSlides[heroIndex].classList.add("is-active");
      }, 5000);
    }

    if (window.emailjs) {
      emailjs.init({
        publicKey: "aMoYiYOIydChXIOaZ"
      });
    }

    const forms = document.querySelectorAll(".js-rpc-email-form");

    forms.forEach((form) => {
      const successBox = document.getElementById(form.dataset.successId);
      const errorBox = document.getElementById(form.dataset.errorId);
      const policyCheckbox = document.getElementById(form.dataset.policyId);
      const submitBtn = document.getElementById(form.dataset.submitId);
      const captchaNode = document.getElementById(form.dataset.captchaId);

      if (!successBox || !errorBox || !policyCheckbox || !submitBtn || !captchaNode) return;

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

        const widgetId = captchaNode.dataset.widgetId;
        if (typeof widgetId === "undefined") {
          showError("reCAPTCHA is still loading. Please wait a moment and try again.");
          return;
        }

        const captchaResponse = grecaptcha.getResponse(Number(widgetId));
        if (!captchaResponse) {
          showError("Please complete the reCAPTCHA verification.");
          return;
        }

        submitBtn.disabled = true;
        const originalText = submitBtn.textContent;
        submitBtn.textContent = "Sending...";

        const formData = {
          name: form.querySelector('input[name="full_name"]').value.trim(),
          phone: form.querySelector('input[name="phone"]').value.trim(),
          email: form.querySelector('input[name="email"]').value.trim(),
          service: form.querySelector('select[name="service"]').value,
          property: form.querySelector('input[name="location"]').value.trim(),
          message: form.querySelector('textarea[name="message"]').value.trim(),
          "g-recaptcha-response": captchaResponse
        };

        emailjs.send("service_ym70oob", "template_hz5g86r", formData)
          .then(function () {
            form.reset();
            grecaptcha.reset(Number(widgetId));
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
  });
</script>

<?php get_footer(); ?>