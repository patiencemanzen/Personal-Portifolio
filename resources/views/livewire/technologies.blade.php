<div class="tech-stacks">
    <div class="tech-stacks-container">
        <div class="card" style="transform:rotate(-3.72427869407596deg);"><img src="https://static.adevait.com/2021/09/A-Complete-Guide-to-Deploying-Laravel-Applications-on-Virtual-Private-Servers-%E2%80%93-1-768x401.png" />
            <h2>Laravel</h2>
            <p> Free and open-source PHP web framework, Created by Taylor Otwell and intended
                for the development of web applications following the model–view–controller (MVC)
                architectural pattern and based on Symfony.
            </p>
        </div>
        <div class="card" style="transform:rotate(4.195717992109142deg);"><img src="https://assets.toptal.io/images?url=https%3A%2F%2Fbs-uploads.toptal.io%2Fblackfish-uploads%2Fcomponents%2Fblog_post_page%2Fcontent%2Fcover_image_file%2Fcover_image%2F1129708%2Fregular_1708x683_cover-REDESIGN-StartingWithDocker-Luke_Newsletter-013ee8f644e4e1032c0b856937898372-fd759ad07683f6101ae7d2fa0addc5ec.png" />
            <h2>Docker</h2>
            <p>By leveraging some amazing resource isolation features of the Linux kernel,
                Docker makes it possible to easily isolate server applications into containers,
                control resource allocation, and design simpler deployment pipelines.
            </p>
        </div>
        <div class="card" style="transform:rotate(-1.3533728192847505deg);"><img src="https://opensource.com/sites/default/files/lead-images/github-universe.jpg" />
            <h2>GitHUB</h2>
            <p>Distributed version control of Git plus access control, bug tracking,
                software feature requests, task management, continuous integration,
                and wikis for every project.
            </p>
        </div>
        <div class="card" style="transform:rotate(4.195717992109142deg);"><img src="https://miro.medium.com/v2/resize:fit:1400/0*lqzSodjdflel4ntU" />
            <h2>Kubernetes</h2>
            <p> Also known as K8s, is an open-source system for automating deployment,
                scaling, and management of containerized application that facilitates
                both declarative configuration and automation.
            </p>
        </div>
    </div>
</div>
<style>
    .tech-stacks {
        height: 250px !important;
        background: transparent;
        width: 100%;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .tech-stacks-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr));
        gap: 0rem;
        padding: 1rem;
        position: absolute;
        top: -115px;
        width: 90%;
        height: 100%
    }

    .tech-stacks .card {
        height: fit-content;
        display: flex;
        flex-direction: column;
        padding: 1rem 1rem 2rem;
        background: #f8f3e8;
        box-shadow: 0 0 40px rgba(0, 0, 0, 0.2), 0 0 40px rgba(0, 0, 0, 0.2);
        border-radius: 20px;
    }

    .tech-stacks .card>img {
        width: 100%;
        height: auto;
        aspect-ratio: 600/300;
        border-radius: 20px;
    }

    .tech-stacks .card>h2 {
        margin-top: 1rem;
        font-family: 'Anek Telugu', sans-serif;
        font-weight: 600;
        font-size: 2rem;
        color: #4a4a7d;
        text-align: center;
    }

    .tech-stacks .card>p {
        font-family: 'Anek Telugu', sans-serif;
        font-size: 1rem;
        color: #5e5e89;
        text-align: center;
        font-weight: 500;
        line-height: 20px
    }

    @media only screen and (max-width: 992px) {
        .tech-stacks {
            height: 660px;
        }
    }

    @media only screen and (max-width: 511px) {
        .tech-stacks {
            height: 1450px;
        }
    }

    @media only screen and (min-width: 300px) {
        .tech-stacks {
            height: 1360px;
        }
    }
</style>
