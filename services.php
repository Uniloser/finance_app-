<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>JIKER Loans - Student Loan Services</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,300;8..144,400;8..144,500;8..144,700&amp;family=Space+Grotesk:wght@500;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<style type="text/tailwindcss">
        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes spring-in {
            0% {
                opacity: 0;
                transform: scale(0.8) translateY(20px);
            }
            70% {
                opacity: 1;
                transform: scale(1.05) translateY(-5px);
            }
            100% {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }
        @keyframes shine {
            0% {
                transform: translateX(-150%) translateY(-150%) rotate(45deg);
            }
            100% {
                transform: translateX(150%) translateY(150%) rotate(45deg);
            }
        }
        .animate-fade-in-up {
            animation: fade-in-up 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) both;
            animation-play-state: paused;
        }
        .animate-spring-in {
            animation: spring-in 0.7s cubic-bezier(0.34, 1.56, 0.64, 1) both;
            animation-play-state: paused;
        }
        .shine-effect::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 200%;
            background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.3) 50%, rgba(255, 255, 255, 0) 100%);
            animation: shine 4s infinite linear;
            animation-delay: 1.5s;
        }
        .is-in-viewport .animate-fade-in-up,
        .is-in-viewport .animate-spring-in {
            animation-play-state: running;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 1, 'wght' 300, 'GRAD' 0, 'opsz' 48;
        }
    </style>
<script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": "#6D28D9",
              "primary-container": "#EADDFF",
              "on-primary-container": "#23005C",
              "secondary": "#E83D67",
              "secondary-container": "#FFD9DD",
              "on-secondary-container": "#400018",
              "tertiary": "#00696B",
              "tertiary-container": "#6FF7F9",
              "background-light": "#FFFBFF",
              "background-dark": "#141218",
              "surface-light": "#F7F2FA",
              "surface-dark": "#1E1A22",
              "surface-container-light": "#EFEDF4",
              "surface-container-dark": "#27242B",
              "outline-light": "#7A757F",
              "outline-dark": "#948F99",
            },
            fontFamily: {
              "display": ["Space Grotesk", "Manrope", "sans-serif"],
              "body": ["Roboto Flex", "sans-serif"],
            },
            borderRadius: {"DEFAULT": "1rem", "lg": "1.5rem", "xl": "2rem", "full": "9999px"},
          },
        },
      }
    </script>
</head>
<body class="font-body bg-background-light dark:bg-background-dark text-slate-800 dark:text-slate-200">
<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">
<header class="sticky top-0 z-50 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-lg">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex items-center justify-between whitespace-nowrap border-b border-slate-200/50 dark:border-slate-800/50 h-20">
<div class="flex items-center gap-4 text-slate-900 dark:text-white">
<div class="size-8 text-primary">
<svg fill="currentColor" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_6_330)">
<path clip-rule="evenodd" d="M24 0.757355L47.2426 24L24 47.2426L0.757355 24L24 0.757355ZM21 35.7574V12.2426L9.24264 24L21 35.7574Z" fill-rule="evenodd"></path>
</g>
<defs>
<clipPath id="clip0_6_330">
<rect fill="white" height="48" width="48"></rect>
</clipPath>
</defs>
</svg>
</div>
<h2 class="font-display text-2xl font-bold tracking-tight">JIKER Loans</h2>
</div>
<nav class="hidden md:flex items-center gap-9">
<a class="text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-primary text-sm font-medium transition-colors duration-300" href="#">Our Loans</a>
<a class="text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-primary text-sm font-medium transition-colors duration-300" href="#">How It Works</a>
<a class="text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-primary text-sm font-medium transition-colors duration-300" href="#">Student Hub</a>
<a class="text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-primary text-sm font-medium transition-colors duration-300" href="#">About Us</a>
<a class="text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-primary text-sm font-medium transition-colors duration-300" href="#">Contact</a>
</nav>
<div class="flex items-center gap-3">
<button class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-11 px-6 bg-primary text-white text-sm font-bold leading-normal tracking-wide shadow-lg shadow-primary/20 transition-all duration-300 ease-in-out hover:bg-primary/90 hover:shadow-xl hover:shadow-primary/30 transform hover:-translate-y-0.5">
<span class="truncate">Apply Now</span>
</button>
<button class="hidden sm:flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-11 px-6 bg-surface-light dark:bg-surface-dark text-slate-800 dark:text-slate-200 text-sm font-bold leading-normal tracking-wide shadow-sm ring-1 ring-inset ring-slate-200 dark:ring-slate-800 transition-all duration-300 ease-in-out hover:bg-slate-50 dark:hover:bg-slate-800/50 transform hover:-translate-y-0.5">
<span class="truncate">Login</span>
</button>
</div>
</div>
</div>
</header>
<main class="flex-1">
<div class="px-4 py-10 sm:px-6 lg:px-8">
<div class="mx-auto max-w-7xl">
<div class="flex flex-col-reverse gap-8 py-12 md:flex-row md:items-center md:gap-16 lg:py-24 animate-fade-in-up" style="animation-play-state: running;">
<div class="flex flex-1 flex-col gap-8 text-center md:text-left">
<div class="flex flex-col gap-4">
<h1 class="font-display text-5xl font-bold tracking-tighter text-slate-900 dark:text-white sm:text-6xl lg:text-7xl">Fast, Flexible Pocket Loans For Students</h1>
<p class="text-lg text-slate-600 dark:text-slate-400 sm:text-xl">Get the cash you need, when you need it. JIKER Loans offers easy and affordable financial solutions to help you succeed in college.</p>
</div>
<div class="flex flex-wrap justify-center gap-4 md:justify-start">
<button class="flex h-14 min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-full bg-primary px-8 text-lg font-bold text-white shadow-lg shadow-primary/30 transition-all duration-300 ease-in-out hover:bg-primary/90 hover:shadow-xl hover:shadow-primary/40 transform hover:-translate-y-1">
<span class="truncate">Check Your Rate</span>
</button>
<button class="flex h-14 min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-full bg-surface-light dark:bg-surface-dark px-8 text-lg font-bold text-slate-800 dark:text-slate-200 shadow ring-1 ring-inset ring-slate-200 dark:ring-slate-800 transition-all duration-300 ease-in-out hover:bg-slate-50 dark:hover:bg-slate-800/50 transform hover:-translate-y-1">
<span class="truncate">Learn More</span>
</button>
</div>
</div>
<div class="flex-1">
<div class="aspect-[4/3] w-full rounded-xl bg-slate-200 dark:bg-slate-800 bg-cover bg-center shadow-2xl shadow-primary/10 transition-transform duration-500 hover:scale-105" data-alt="Vibrant image of diverse university students collaborating and studying on campus" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA93Stm85izWwLgFEwQvaRo-1s_xzzI4vUyXEcyM0m-gcnI27jVqqDVFuEgYpiEW93sSqEg1fj6NlnRlBgCVqHgKKGJrnzJhFmVXEl-2Ng9im9WIYdJ_Wf0fyuDFpxUx-Rq9kMZE-7slC0Wu4Cffxjsbv8fc7oUWAcvuQN6O512r2aV1tQHrC_75RNYKVKlL-UDXz30PHWwDEzEG0YVuCK_5d9gvBIqctHx6liuP1y1gECOQY-VlCO1K7afhuRPKz0qbyet7yFi3gc");'></div>
</div>
</div>
<div class="py-16 sm:py-24 animated-section">
<div class="text-center mb-12 animate-fade-in-up">
<h2 class="font-display text-4xl font-bold tracking-tight text-slate-900 dark:text-white sm:text-5xl">Our Loans &amp; Lending Services</h2>
<p class="mt-4 text-lg text-slate-600 dark:text-slate-400 max-w-3xl mx-auto">We keep it simple. Secured credit with lower interest rates and convenient options, designed specifically for university and college students.</p>
</div>
<div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
<div class="flex flex-col gap-6 rounded-xl bg-surface-light dark:bg-surface-dark p-8 shadow-lg shadow-primary/5 transition-all duration-300 hover:shadow-2xl hover:shadow-primary/10 hover:-translate-y-2 animate-spring-in" style="animation-delay: 0.4s;">
<div class="relative flex h-20 w-20 items-center justify-center overflow-hidden rounded-full bg-primary-container dark:bg-on-primary-container/20 text-on-primary-container dark:text-primary-container shine-effect">
<span class="material-symbols-outlined text-4xl">rocket_launch</span>
</div>
<div class="flex flex-col gap-1">
<h3 class="font-display text-2xl font-bold text-slate-900 dark:text-white">Fast Cash Loans</h3>
<p class="text-base text-slate-600 dark:text-slate-400">Need money for textbooks or an emergency? Get approved and funded quickly, often within the same day.</p>
</div>
</div>
<div class="flex flex-col gap-6 rounded-xl bg-surface-light dark:bg-surface-dark p-8 shadow-lg shadow-primary/5 transition-all duration-300 hover:shadow-2xl hover:shadow-primary/10 hover:-translate-y-2 animate-spring-in" style="animation-delay: 0.5s;">
<div class="flex h-20 w-20 items-center justify-center rounded-full bg-secondary-container dark:bg-on-secondary-container/20 text-on-secondary-container dark:text-secondary-container">
<span class="material-symbols-outlined text-4xl">schedule</span>
</div>
<div class="flex flex-col gap-1">
<h3 class="font-display text-2xl font-bold text-slate-900 dark:text-white">Flexible Repayments</h3>
<p class="text-base text-slate-600 dark:text-slate-400">Choose a repayment plan that fits your student budget. We offer options that work with your schedule.</p>
</div>
</div>
<div class="flex flex-col gap-6 rounded-xl bg-surface-light dark:bg-surface-dark p-8 shadow-lg shadow-primary/5 transition-all duration-300 hover:shadow-2xl hover:shadow-primary/10 hover:-translate-y-2 animate-spring-in" style="animation-delay: 0.6s;">
<div class="flex h-20 w-20 items-center justify-center rounded-full bg-tertiary-container dark:bg-on-tertiary-container/20 text-tertiary dark:text-tertiary-container">
<span class="material-symbols-outlined text-4xl">trending_down</span>
</div>
<div class="flex flex-col gap-1">
<h3 class="font-display text-2xl font-bold text-slate-900 dark:text-white">Lower Interest Rates</h3>
<p class="text-base text-slate-600 dark:text-slate-400">Thanks to our secured credit model, we offer competitive low rates to help you save money.</p>
</div>
</div>
</div>
</div>
<div class="py-16 sm:py-24 animated-section">
<div class="text-center mb-16 animate-fade-in-up">
<h2 class="font-display text-4xl font-bold tracking-tight text-slate-900 dark:text-white sm:text-5xl">Why JIKER Loans?</h2>
<p class="mt-4 text-lg text-slate-600 dark:text-slate-400">We're built for students, by people who get it.</p>
</div>
<div class="grid grid-cols-1 gap-12 md:grid-cols-3">
<div class="flex flex-col items-center text-center animate-spring-in" style="animation-delay: 0.2s;">
<div class="flex h-20 w-20 items-center justify-center rounded-full bg-primary-container dark:bg-on-primary-container/20 mb-6 transition-transform duration-300 hover:scale-110 hover:rotate-6">
<span class="material-symbols-outlined text-primary dark:text-primary-container" style="font-size: 40px;">bolt</span>
</div>
<h3 class="font-display text-2xl font-bold mb-3 text-slate-900 dark:text-white">Super Fast Process</h3>
<p class="text-slate-600 dark:text-slate-400 text-base leading-relaxed">Our online application is quick and easy. No long waits, no confusing paperwork.</p>
</div>
<div class="flex flex-col items-center text-center animate-spring-in" style="animation-delay: 0.3s;">
<div class="flex h-20 w-20 items-center justify-center rounded-full bg-secondary-container dark:bg-on-secondary-container/20 mb-6 transition-transform duration-300 hover:scale-110 hover:rotate-6">
<span class="material-symbols-outlined text-secondary dark:text-secondary-container" style="font-size: 40px;">verified_user</span>
</div>
<h3 class="font-display text-2xl font-bold mb-3 text-slate-900 dark:text-white">Easy Approval</h3>
<p class="text-slate-600 dark:text-slate-400 text-base leading-relaxed">We focus on your potential, not just your credit history. We're here to help you get started.</p>
</div>
<div class="flex flex-col items-center text-center animate-spring-in" style="animation-delay: 0.4s;">
<div class="flex h-20 w-20 items-center justify-center rounded-full bg-tertiary-container dark:bg-on-tertiary-container/20 mb-6 transition-transform duration-300 hover:scale-110 hover:rotate-6">
<span class="material-symbols-outlined text-tertiary dark:text-tertiary-container" style="font-size: 40px;">support_agent</span>
</div>
<h3 class="font-display text-2xl font-bold mb-3 text-slate-900 dark:text-white">Student-Focused Support</h3>
<p class="text-slate-600 dark:text-slate-400 text-base leading-relaxed">Our friendly team is always ready to help with any questions you have along the way.</p>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
      // Intersection Observer for fade-in animations
      const animatedElements = document.querySelectorAll(".animated-section .animate-fade-in-up, .animated-section .animate-spring-in");
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            // Add a class to the parent .animated-section to trigger animations for all children inside it.
            // This ensures all items in a section animate in together.
            entry.target.closest('.animated-section').classList.add('is-in-viewport');
          }
        });
      }, {
        threshold: 0.2
      });
      // Observe the parent sections
      const animatedSections = document.querySelectorAll('.animated-section');
      animatedSections.forEach(section => {
        observer.observe(section);
      });
      // The initial hero section is animated by default.
      const initialAnimation = document.querySelector('.animate-fade-in-up');
      if (initialAnimation && !initialAnimation.closest('.animated-section')) {
        initialAnimation.style.animationPlayState = 'running';
      }
    });
</script>

</body></html>