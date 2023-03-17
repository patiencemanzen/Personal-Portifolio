<div class="tech-section">
    <div class="tech-section-container">
        <div class="card" style="transform:rotate(-3.72427869407596deg);"><img src="https://static.adevait.com/2021/09/A-Complete-Guide-to-Deploying-Laravel-Applications-on-Virtual-Private-Servers-%E2%80%93-1-768x401.png" />
            <h2>Laravel</h2>
            <p> Free and open-source PHP web framework, Created by Taylor Otwell and intended
                for the development of web applications following the model–view–controller (MVC)
                architectural pattern and based on Symfony.
            </p>
        </div>
        <div class="card" style="transform:rotate(4.195717992109142deg);"><img src="https://crisp.chat/static/blog/content/images/size/w2000/2022/05/How-to-Migrate-a-large-project-from-Vue-2-to-Vue-3.jpg" />
            <h2>Vue Js</h2>
            <p>An open-source model–view–viewmodel front end JavaScript framework for building
                user interfaces and single-page applications. It was created by Evan You, and
                is maintained by him and the rest of the active core team members.
            </p>
        </div>
        <div class="card" style="transform:rotate(-1.3533728192847505deg);"><img src="https://opensource.com/sites/default/files/lead-images/github-universe.jpg" />
            <h2>GitHUB</h2>
            <p>Distributed version control of Git plus access control, bug tracking,
                software feature requests, task management, continuous integration,
                and wikis for every project.
            </p>
        </div>
        <div class="card" style="transform:rotate(4.195717992109142deg);"><img src="https://i.morioh.com/210608/8f995962.webp" />
            <h2>MySQL</h2>
            <p>An open-source relational database management system (RDBMS) and A relational database
                organizes data into one or more data tables in which data may be related to each other;
                these relations help structure the data.
            </p>
        </div>
    </div>
</div>
<style>
    .tech-section {
        height: 250px;
        background: transparent;
        width: 100%;
        position: relative;
    }
    .tech-section-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr));
        gap: 0rem;
        padding: 1rem;
        position: absolute;
        top: -130px;
        width: 100%;
        height: 100%
    }

    .tech-section .card {
        height: fit-content;
        display: flex;
        flex-direction: column;
        padding: 1rem 1rem 2rem;
        background: #f8f3e8;
        box-shadow: 0 0 40px rgba(0, 0, 0, 0.2), 0 0 40px rgba(0, 0, 0, 0.2);
        border-radius: 20px;
    }

    .tech-section .card>img {
        width: 100%;
        height: auto;
        aspect-ratio: 600/300;
        border-radius: 20px;
    }

    .tech-section .card>h2 {
        margin-top: 1rem;
        font-family: 'Anek Telugu', sans-serif;
        font-weight: 600;
        font-size: 2rem;
        color: #4a4a7d;
        text-align: center;
    }

    .tech-section .card>p {
        font-family: 'Anek Telugu', sans-serif;
        font-size: 1rem;
        color: #5e5e89;
        text-align: center;
        font-weight: 500;
        line-height: 20px
    }
</style>
