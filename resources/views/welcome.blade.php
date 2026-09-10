<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dev-Syn is a website developer creating fast, accessible digital experiences.">
    <title>Dev-Syn | Website Developer</title>

    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>

<body>
    <div class="page">
        <header class="nav-bar">
            <a class="logo" href="#top">Dev-Syn<span>.</span></a>
            <nav aria-label="Primary navigation">
                <ul>
                    <li><a href="#top">Home</a></li>
                    <li><a href="#work">Work</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#resume">CV</a></li>   
                    <li><a href="/messages">Messages</a></li>
                </ul>
            </nav>
        </header>

        <main id="top">
            <section class="hero" id="about">
                <div>
                    <p class="eyebrow">Website developer / problem solver</p>
                    <h1>Websites made <em>useful.</em></h1>
                    <p class="intro">I build fast, accessible websites and web applications that help people find, understand, and use what matters.</p>
                    <a class="button" href="#work">View my work</a>
                </div>
                <div class="hero-art" aria-label="Abstract monogram artwork">
                    <span class="mark">D<span style="font-size: .5em;">/</span>S</span>
                    <span class="caption">Web developer / 2024</span>
                </div>
            </section>

            <section class="work" id="work">
                <div class="section-heading">
                    <h2>Selected work</h2>
                    <p>Selected projects and builds</p>
                </div>
                <div class="projects">
                    <article class="project">
                        <div><span class="project-type">Laravel / Full stack</span>
                            <h3>Field Notes Studio</h3>
                        </div>
                        <a class="project-link" href="#contact" aria-label="View Field Notes Studio project">↗</a>
                    </article>
                    <article class="project">
                        <div><span class="project-type">React / Front end</span>
                            <h3>Common Ground</h3>
                        </div>
                        <a class="project-link" href="#contact" aria-label="View Common Ground project">↗</a>
                    </article>
                    <article class="project">
                        <div><span class="project-type">WordPress / CMS</span>
                            <h3>Small Hours</h3>
                        </div>
                        <a class="project-link" href="#contact" aria-label="View Small Hours project">↗</a>
                    </article>
                </div>
            </section>

            <section class="resume" id="resume">
                <div class="section-heading">
                    <h2>Developer CV</h2>
                    <button class="resume-action" type="button" data-cv-open>View full CV</button>
                </div>
                <div class="resume-grid">
                    <div>
                        <article class="resume-block">
                            <span class="resume-date">2022 — Present</span>
                            <h3>Independent Website Developer</h3>
                            <p>Designing and developing responsive websites, dashboards, and content platforms for growing teams and independent brands.</p>
                        </article>
                        <article class="resume-block">
                            <span class="resume-date">2020 — 2022</span>
                            <h3>Front-end Developer · Northstar Studio</h3>
                            <p>Built reusable interfaces, improved page performance, and partnered with designers to turn prototypes into reliable products.</p>
                        </article>
                    </div>
                    <div>
                        <article class="resume-block">
                            <span class="resume-date">Core toolkit</span>
                            <h3>Tools I work with</h3>
                            <div class="skill-list">
                                <span>HTML / CSS</span><span>JavaScript</span><span>SQLite</span><span>PHP</span><span>Laravel</span><span>React</span><span>MySQL</span><span>Git</span><span>Figma</span><span>ChatGPT</span><span>Copilot</span><span>Claude</span><span>Gemini</span>
                            </div>
                        </article>
                        <article class="resume-block">
                            <span class="resume-date">Education</span>
                            <h3>BS Information Technology</h3>
                            <p>Focused on web technologies, human-computer interaction, and software design.</p>
                        </article>
                    </div>
                </div>
            </section>

            <dialog class="cv-modal" data-cv-modal aria-labelledby="cv-modal-title">
                <div class="cv-modal-inner">
                    <div class="cv-modal-heading">
                        <div>
                            <span class="resume-date">Developer CV</span>
                            <h2 id="cv-modal-title">Hi! I'm Dev-Syn</h2>
                        </div>
                        <button class="cv-modal-close" type="button" data-cv-close aria-label="Close CV">&times;</button>
                    </div>

                    <div class="cv-modal-content">
                        <section>
                            <span class="resume-date">Profile</span>
                            <p>Website developer creating fast, accessible digital experiences and practical web applications for growing teams and independent brands.</p>
                        </section>
                        <section>
                            <span class="resume-date">Experience</span>
                            <article class="cv-entry">
                                <h3>Independent Website Developer</h3>
                                <p class="cv-entry-meta">2022 — Present</p>
                                <p>Designing and developing responsive websites, dashboards, and content platforms for growing teams and independent brands.</p>
                            </article>
                            <article class="cv-entry">
                                <h3>Front-end Developer · Northstar Studio</h3>
                                <p class="cv-entry-meta">2020 — 2022</p>
                                <p>Built reusable interfaces, improved page performance, and partnered with designers to turn prototypes into reliable products.</p>
                            </article>
                        </section>
                        <section>
                            <span class="resume-date">Skills</span>
                            <div class="skill-list">
                                <span>HTML / CSS</span><span>JavaScript</span><span>SQLite</span><span>PHP</span><span>Laravel</span><span>React</span><span>MySQL</span><span>Git</span><span>Figma</span><span>ChatGPT</span><span>Copilot</span><span>Claude</span><span>Gemini</span>
                            </div>
                        </section>
                        <section>
                            <span class="resume-date">Education</span>
                            <h3>BS Information Technology</h3>
                            <p>Focused on web technologies, human-computer interaction, and software design.</p>
                        </section>
                    </div>
                </div>
            </dialog>
        </main>

        <footer class="footer" id="contact">
            <div class="footer-inner">
                <span>Available for select website projects.</span>
                <a href="/messages">Send a message</a>
                <span>© 2024 Dev-Syn</span>
            </div>
        </footer>
    </div>

    <script>
        const cvModal = document.querySelector('[data-cv-modal]');
        const cvOpenButton = document.querySelector('[data-cv-open]');
        const cvCloseButton = document.querySelector('[data-cv-close]');

        cvOpenButton.addEventListener('click', () => cvModal.showModal());
        cvCloseButton.addEventListener('click', () => cvModal.close());
        cvModal.addEventListener('click', (event) => {
            if (event.target === cvModal) {
                cvModal.close();
            }
        });
    </script>
</body>

</html>