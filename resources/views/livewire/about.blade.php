<div
    class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4 pt-32 items-center relative z-10 container mx-auto">
    <div class="lg:w-10/12 w-full">
        <p
            class="font-bold mb-2 text-md leading-3 text-black-700 dark:text-indigo-500 hover:text-indigo-800 cursor-pointer">
            About me!</p>
        <h2
            class="xl:w-8/12 lg:w-10/12 w-full font-bold text-gray-800 dark:text-white lg:text-4xl text-3xl lg:leading-10 leading-9 mt-2">
            Backend-developer, Frontend Developer and Database managements.
        </h2>
        <p class="font-normal text-gray-600 dark:text-white mt-6 text-2xl leading-8">
            I built the ability to search and parse information quickly.
            am an expert in developing elegant solutions to complex requirements
            using JavaScript, php, laravel, React, Node.js, and MySQL. am organized,
            quick-thinking problem solver who embraces software development projects with high efficiency
            and professionalism, which makes me specialize in building complex web applications and leads
            me to different communities, companies, and societies to work with strong teams and leaders,
            since 2018, this career has grown rapidly and for me to keep up with it! I developed a great
            habit of always pursuing new skills and knowledge over and over,
            When am not coding! i usually spent my time in books and photography!.
        </p>
    </div>

    <div class="professional">
        <figure class="card">
            <img src="/img/profile.png" width="640" height="640" alt="" />
            <figcaption>
                <blockquote>
                    We shape our tools and then the tools shape us.
                </blockquote>
                <cite>when you believe in something so strongly and keep on pushing it so persistently,
                    somehow you can make the impossible possible. and Ideas in different topics or fields
                    can often inspire new ideas and broaden the potential solution space.</cite>
                <p class="credit"> <strong>Google Developer Kigali DevFest</strong></p>
            </figcaption>
        </figure>
    </div>
</div>
<style>
    :root {
        --indent: 0;
    }

    @media screen and (min-width: 40rem) {
        :root {
            --indent: clamp(1.5rem, 4vw, 2.5rem);
        }
    }

    .professional {
        margin: 30px 0px 0px 0px;
        display: flex;
        width: 100%;
        height: 82vh;
        justify-content: left;
        align-items: left;
        font-family: 'Anek Telugu', sans-serif;
    }

    .professional img {
        display: block;
        width: 100%;
        height: 100%;
    }

    .professional .card {
        margin: 2rem;
        display: grid;
        grid-template-columns:
            var(--indent) calc(3 * var(--indent)) 1fr 1fr calc(2 * var(--indent)) var(--indent);
        grid-template-rows:
            var(--indent) calc(3 * var(--indent)) 1fr calc(2 * var(--indent)) var(--indent);
        max-width: 60rem;
    }

    .professional .card::before {
        content: "";
        display: block;
        background: white;
        background-image: url(https://source.unsplash.com/6YmzwamGzCg/1200x1200);
        background-size: cover;
        grid-column: 2/-1;
        grid-row: 2/-1;
        box-shadow: 0 0 2rem hsla(0, 0%, 0%, 0.1);
        border-radius: 20px;
    }

    .professional .card::after {
        content: "";
        display: block;
        background: #e0dde4;
        grid-column: 1/-2;
        grid-row: 1/-2;
        z-index: -1;
        transform: rotate(3.195717992109142deg);
        background: rgba(0, 0, 0, 0.30);
        border-radius: 20px
    }

    .professional .card img {
        grid-column: 4/5;
        grid-row: 3/4;
        box-shadow: 0 0 1rem hsla(0, 0%, 0%, 0.3);
        object-fit: cover;
        aspect-ratio: 1 / 1;
    }

    .professional .card figcaption {
        grid-column: 3/5;
        grid-row: 3/4;
        display: grid;
        grid-template-columns: 3fr 1fr 2fr;
    }

    .professional .card blockquote {
        grid-column: 1/3;
        margin: 0;
        padding-bottom: 1rem;
        /* font-size: clamp(2rem, 2.5vw, 3rem); */
        font-size: 3rem;
        font-weight: 600;
        align-self: flex-end;
        line-height: 3rem;
    }

    .professional .card cite {
        grid-column: 1/2;
        font-size: 1.3rem;
        font-weight: 500;
        font-style: normal;
        line-height: 26px;
    }

    .professional .card .credit {
        grid-column: 2/4;
        place-self: flex-end;
        margin: 0;
        padding: 1rem;
        text-align: end;
        color: white;
        font-weight: 400;
    }

    .professional .card a {
        color: white;
    }
</style>
