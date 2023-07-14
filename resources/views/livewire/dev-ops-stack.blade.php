<div class="tech-stacks">
    <div class="tech-stacks-container">
        <div class="card" style="transform:rotate(-3.72427869407596deg);"><img src="https://crisp.chat/static/blog/content/images/size/w2000/2022/05/How-to-Migrate-a-large-project-from-Vue-2-to-Vue-3.jpg" />
            <h2>Vue Js</h2>
            <p> An open-source model–view–viewmodel front end JavaScript framework for building
                user interfaces and single-page applications. It was created by Evan You, and
                is maintained by him and the rest of the active core team members.
            </p>
        </div>
        <div class="card" style="transform:rotate(4.195717992109142deg);"><img src="https://assets.toptal.io/images?url=https%3A%2F%2Fbs-uploads.toptal.io%2Fblackfish-uploads%2Fcomponents%2Fblog_post_page%2Fcontent%2Fcover_image_file%2Fcover_image%2F688814%2Fregular_1708x683_cover-0510-GraphQL_Laravel_Dan_Newsletter-f19d9ba3ac350170c76343c28d70c832.png" />
            <h2>GraphQL</h2>
            <p>Qquery language for APIs and can be used to query data from a server
                while also allowing clients to specify exactly what data is needed
                which provides some benefits compared to alternative architectures such as REST.
            </p>
        </div>
        <div class="card" style="transform:rotate(-1.3533728192847505deg);"><img src="https://sspinnovations.com/wp-content/uploads/2018/08/277676_Typescript_833x400_082818-3.png" />
            <h2>TypeScript</h2>
            <p>Open-source high-level programming language developed by Microsoft that
                adds static typing with optional type annotations to JavaScript.
                It is designed for the development of large applications and transpiles to JavaScript
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
