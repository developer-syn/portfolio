<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dev-Syn is a website developer creating fast, accessible digital experiences.">
    <title>Dev-Syn | Website Developer</title>

    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>
<!-- <style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap');

    :root {
        --ink: #17211f;
        --muted: #64716c;
        --paper: #f6f5f0;
        --line: #d8ddd6;
        --accent: #d9f56b;
        --dark: #1c302b;
    }

    * { box-sizing: border-box; }

    html { scroll-behavior: smooth; }

    body {
        margin: 0;
        min-width: 320px;
        background: var(--paper);
        color: var(--ink);
        font-family: 'Manrope', sans-serif;
    }

    .page {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    .nav-bar {
        width: min(1160px, calc(100% - 48px));
        margin: 0 auto;
        padding: 28px 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid var(--line);
    }

    .logo {
        color: var(--ink);
        font-size: 1.1rem;
        font-weight: 700;
        letter-spacing: -.04em;
        text-decoration: none;
    }

    .logo span { color: #8ea500; }

    nav ul {
        display: flex;
        gap: 30px;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    nav a {
        color: var(--muted);
        font-size: .78rem;
        font-weight: 700;
        letter-spacing: .08em;
        text-decoration: none;
        text-transform: uppercase;
    }

    nav a:hover, nav a:focus { color: var(--ink); }

    main {
        flex: 1;
        width: min(1160px, calc(100% - 48px));
        margin: 0 auto;
    }

    .hero {
        min-height: 560px;
        display: grid;
        grid-template-columns: 1.15fr .85fr;
        align-items: center;
        gap: 80px;
        padding: 86px 0 100px;
    }

    .eyebrow, .project-type {
        color: #849700;
        font-family: 'DM Mono', monospace;
        font-size: .72rem;
        letter-spacing: .12em;
        text-transform: uppercase;
    }

    h1, h2, p { margin-top: 0; }

    h1 {
        max-width: 720px;
        margin-bottom: 28px;
        font-family: 'Playfair Display', serif;
        font-size: clamp(3.5rem, 8vw, 7.5rem);
        line-height: .92;
        letter-spacing: -.07em;
    }

    h1 em { color: #8ea500; font-style: normal; }

    .intro {
        max-width: 470px;
        margin-bottom: 34px;
        color: var(--muted);
        font-size: 1.05rem;
        line-height: 1.8;
    }

    .button {
        display: inline-flex;
        align-items: center;
        gap: 14px;
        padding: 15px 20px;
        background: var(--dark);
        color: white;
        font-size: .8rem;
        font-weight: 700;
        letter-spacing: .04em;
        text-decoration: none;
        transition: transform .2s ease, background .2s ease;
    }

    .button:hover { background: #29463e; transform: translateY(-3px); }

    .button::after { content: '\2192'; color: var(--accent); font-size: 1.1rem; }

    .hero-art {
        position: relative;
        min-height: 350px;
        display: grid;
        place-items: center;
        background: var(--accent);
    }

    .hero-art::before {
        content: '';
        position: absolute;
        inset: 22px;
        border: 1px solid rgba(23, 33, 31, .3);
    }

    .hero-art .mark {
        z-index: 1;
        color: var(--dark);
        font-family: 'Playfair Display', serif;
        font-size: clamp(6rem, 14vw, 12rem);
        line-height: 1;
    }

    .hero-art .caption {
        position: absolute;
        right: 28px;
        bottom: 25px;
        color: var(--dark);
        font-family: 'DM Mono', monospace;
        font-size: .66rem;
        text-transform: uppercase;
    }

    .work {
        padding: 0 0 100px;
    }

    .resume {
        padding: 0 0 100px;
    }

    .resume-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 18px 70px;
        padding-top: 28px;
    }

    .resume-block {
        padding: 22px 0;
        border-top: 1px solid var(--line);
    }

    .resume-block h3 {
        margin: 0 0 8px;
        font-size: 1rem;
    }

    .resume-block p {
        margin-bottom: 0;
        color: var(--muted);
        font-size: .86rem;
        line-height: 1.7;
    }

    .resume-date {
        display: block;
        margin-bottom: 8px;
        color: #849700;
        font-family: 'DM Mono', monospace;
        font-size: .7rem;
        text-transform: uppercase;
    }

    .skill-list {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 18px;
    }

    .skill-list span {
        padding: 8px 10px;
        border: 1px solid var(--line);
        color: var(--muted);
        font-family: 'DM Mono', monospace;
        font-size: .68rem;
    }

    .resume-action {
        color: var(--ink);
        font-size: .78rem;
        font-weight: 700;
        text-decoration: underline;
        text-underline-offset: 4px;
    }

    .section-heading {
        display: flex;
        align-items: baseline;
        justify-content: space-between;
        padding-bottom: 18px;
        border-bottom: 1px solid var(--line);
    }

    h2 { margin-bottom: 0; font-size: 1.5rem; letter-spacing: -.05em; }

    .section-heading p { color: var(--muted); font-size: .82rem; }

    .projects {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 18px;
        padding-top: 28px;
    }

    .project { min-height: 280px; display: flex; flex-direction: column; justify-content: space-between; padding: 24px; border: 1px solid var(--line); }
    .project:nth-child(1) { background: #dfe8e0; }
    .project:nth-child(2) { background: #e9e0d3; }
    .project:nth-child(3) { background: #d9e4e8; }
    .project h3 { max-width: 210px; margin: 12px 0 0; font-family: 'Playfair Display', serif; font-size: 2rem; line-height: 1; }
    .project-link { align-self: flex-end; color: var(--ink); font-size: 1.5rem; text-decoration: none; }

    .footer {
        background: var(--dark);
        color: #f3f4ee;
    }

    .footer-inner {
        width: min(1160px, calc(100% - 48px));
        margin: 0 auto;
        padding: 28px 0;
        display: flex;
        justify-content: space-between;
        gap: 24px;
        font-size: .78rem;
    }

    .footer a { color: var(--accent); text-decoration: none; }

    @media (max-width: 720px) {
        .nav-bar, main, .footer-inner { width: min(100% - 32px, 540px); }
        .nav-bar { padding: 20px 0; align-items: flex-start; }
        nav ul { gap: 12px; flex-wrap: wrap; justify-content: flex-end; }
        nav a { font-size: .65rem; }
        .hero { min-height: 0; grid-template-columns: 1fr; gap: 48px; padding: 70px 0 90px; }
        .hero-art { min-height: 250px; }
        .projects { grid-template-columns: 1fr; }
        .section-heading { align-items: flex-start; flex-direction: column; gap: 8px; }
        .footer-inner { align-items: flex-start; flex-direction: column; }
    }
</style> -->

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
                    <a class="resume-action" href="mailto:hello@example.com?subject=Request%20for%20CV">Request full CV</a>
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
        </main>

        <footer class="footer" id="contact">
            <div class="footer-inner">
                <span>Available for select website projects.</span>
                <a href="/messages">Send a message</a>
                <span>© 2024 Dev-Syn</span>
            </div>
        </footer>
    </div>
</body>

</html>