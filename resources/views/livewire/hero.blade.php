<section>
    <div class="w-full relative pb-10 px-6 xl:px-0" style="height: 50rem">
        <img class="absolute w-full inset-0 h-full object-cover object-center" src="/img/banner-bg.png" alt="Manirabona Patience spaces" />
        <div class="3xl:container 3xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4 pt-32 lg:flex items-center relative z-10 container mx-auto">
            <div role="contentinfo" class="w-full lg:w-2/3">
                <p tabindex="0" class="text-white uppercase text-2xl mb-4 font-bold">HI!, it's Me</p>
                <h1 tabindex="0" class="hero-heading-text text-white font-anek lg:text-6xl font-black mb-8 bg-clip-text bg-gradient-to-r from-green-300 via-blue-500 to-purple-600">
                    Manirabona Hirwa Patience, and Am <span class="text-highlight-third-900">Software Engineer</span>
                </h1>
                <p tabindex="0" class="hero-heading-desc font-normal text-[#7d8590] dark:text-[#7d8590] font-regular mb-8">
                    With Many years of experience in <span class="text-accent-primary-900">PHP and Javascript</span>,
                    Am passionate about <span class="text-accent-primary-900">creating quality applications</span>, and Never tired of learning and building,
                    I've been <span class="text-highlight-primary-900">collaborating and contributing</span> with different Teams to develop their products from
                    ideas up to Marketplace, including <span class="text-highlight-primary-900">open source projects</span>.
                </p>
            </div>
            <div class="hang-astro absolute right-0">
                <img src="/img/header-img.svg" alt="hanging astronut in space" class="w-72">
            </div>
        </div>
    </div>
</section>
<style>
    .hero-heading-text {
        font-size: 80px !important;
        line-height: 80px !important;
    }

    .hero-heading-desc{
        font-size: 28px !important;
        line-height: 40px !important;
    }

    @media (max-width: 1279px) {
        .hero-heading-text {
            font-size: 66px !important;
            line-height: 66px !important;
        }
        .hero-heading-desc{
            font-size: 25px !important;
            line-height: 38px !important;
        }
    }

    @media (max-width: 1020px) {
        .hang-astro{
            display: none
        }
    }

    @media (max-width: 625px) {
        .hero-heading-text {
            font-size: 60px !important;
            line-height: 60px !important;
        }
        .hero-heading-desc{
            font-size: 22px !important;
            line-height: 33px !important;
        }
    }
    @media (max-width: 542px) {
        .hero-heading-text {
            font-size: 58px !important;
            line-height: 58px !important;
        }
        .hero-heading-desc{
            font-size: 20px !important;
            line-height: 29px !important;
        }
    }

    @media (max-width: 500px) {
        .hero-heading-text {
            font-size: 55px !important;
            line-height: 55px !important;
        }
        .hero-heading-desc{
            font-size: 20px !important;
            line-height: 25px !important;
        }
    }

    @media (max-width: 375px) {
        .hero-heading-text {
            font-size: 40px !important;
            line-height: 40px !important;
        }
        .hero-heading-desc{
            font-size: 20px !important;
            line-height: 25px !important;
        }
    }

    /* Top menu */
    .top-100 {
        animation: slideDown 0.5s ease-in-out;
    }

    @keyframes slideDown {
        0% {
            top: -50%;
        }

        100% {
            top: 0;
        }
    }

    * {
        outline: none !important;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        -webkit-tap-highlight-color: transparent;
    }
</style>
