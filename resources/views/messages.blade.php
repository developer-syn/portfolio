<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact page for a website developer.">
    <title>Send a Message | Dev-Syn</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap');

    :root {
        --ink: #17211f;
        --muted: #64716c;
        --paper: #f6f5f0;
        --line: #d8ddd6;
        --accent: #d9f56b;
        --dark: #1c302b;
        --card: #ffffff;
        --danger: #c95d5d;
    }

    * { box-sizing: border-box; }

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
        text-decoration: none;
        font-weight: 700;
        font-size: 1.1rem;
        letter-spacing: -.04em;
    }

    .logo span { color: #8ea500; }

    nav ul {
        display: flex;
        list-style: none;
        gap: 28px;
        padding: 0;
        margin: 0;
    }

    nav a {
        color: var(--muted);
        font-size: .78rem;
        font-weight: 700;
        letter-spacing: .08em;
        text-decoration: none;
        text-transform: uppercase;
    }

    main {
        width: min(1160px, calc(100% - 48px));
        margin: 0 auto;
        flex: 1;
        padding: 80px 0 100px;
    }

    .contact-shell {
        display: grid;
        grid-template-columns: .95fr 1.05fr;
        gap: 42px;
        align-items: start;
    }

    .eyebrow {
        color: #849700;
        font-family: 'DM Mono', monospace;
        font-size: .72rem;
        letter-spacing: .12em;
        text-transform: uppercase;
    }

    h1 {
        margin: 12px 0 18px;
        font-family: 'Playfair Display', serif;
        font-size: clamp(2.8rem, 5vw, 4.8rem);
        line-height: .95;
        letter-spacing: -.06em;
    }

    .intro {
        color: var(--muted);
        font-size: 1.02rem;
        line-height: 1.8;
        max-width: 500px;
    }

    .meta-list {
        list-style: none;
        margin: 28px 0 0;
        padding: 0;
        display: grid;
        gap: 14px;
    }

    .meta-list li {
        color: var(--ink);
        font-size: .9rem;
        line-height: 1.5;
        padding-top: 12px;
        border-top: 1px solid var(--line);
    }

    .meta-list strong {
        display: block;
        color: var(--muted);
        font-size: .7rem;
        letter-spacing: .08em;
        text-transform: uppercase;
        margin-bottom: 6px;
    }

    .contact-card {
        background: var(--card);
        border: 1px solid var(--line);
        padding: 28px;
    }

    .success-message {
        margin-bottom: 18px;
        padding: 14px 16px;
        background: #edf6d7;
        border: 1px solid #cfe38f;
        color: #2d4a13;
        font-size: .86rem;
        font-weight: 600;
    }

    .field-group {
        display: grid;
        gap: 18px;
    }

    .two-cols {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 18px;
    }

    label {
        display: grid;
        gap: 8px;
        color: var(--ink);
        font-size: .8rem;
        font-weight: 700;
        letter-spacing: .04em;
        text-transform: uppercase;
    }

    input, textarea {
        width: 100%;
        border: 1px solid var(--line);
        background: #f9f9f8;
        color: var(--ink);
        padding: 14px 16px;
        font: inherit;
    }

    input:focus, textarea:focus {
        outline: 2px solid rgba(217, 245, 107, .8);
        outline-offset: 2px;
        border-color: #cad4b3;
    }

    textarea {
        min-height: 170px;
        resize: vertical;
    }

    .button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        margin-top: 14px;
        padding: 16px 20px;
        background: var(--dark);
        color: white;
        border: none;
        font-size: .8rem;
        font-weight: 700;
        letter-spacing: .08em;
        text-transform: uppercase;
        cursor: pointer;
        transition: transform .2s ease, background .2s ease;
    }

    .button:hover {
        background: #29463e;
        transform: translateY(-2px);
    }

    .error-message {
        color: var(--danger);
        font-size: .75rem;
        margin-top: 4px;
    }

    .footer {
        background: var(--dark);
        color: #f3f4ee;
    }

    .footer-inner {
        width: min(1160px, calc(100% - 48px));
        margin: 0 auto;
        padding: 26px 0;
        display: flex;
        justify-content: space-between;
        gap: 16px;
        font-size: .78rem;
    }

    .footer a {
        color: var(--accent);
        text-decoration: none;
    }

    @media (max-width: 760px) {
        .nav-bar, main, .footer-inner { width: min(100% - 32px, 540px); }
        .nav-bar { align-items: flex-start; }
        nav ul { gap: 12px; flex-wrap: wrap; justify-content: flex-end; }
        nav a { font-size: .64rem; }
        .contact-shell, .two-cols { grid-template-columns: 1fr; }
        .footer-inner { flex-direction: column; }
    }
</style>
<body>
    <div class="page">
        <header class="nav-bar">
            <a class="logo" href="/">Dev-Syn<span>.</span></a>
            <nav aria-label="Primary navigation">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/#work">Work</a></li>
                    <li><a href="/#resume">CV</a></li>
                    <li><a href="/messages">Messages</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <section class="contact-shell">
                <div>
                    <p class="eyebrow">Start a conversation</p>
                    <h1>Send a message</h1>
                    <p class="intro">Tell me about your idea, your project timeline, or the kind of website experience you want to build. I usually reply within one to two business days.</p>

                    <ul class="meta-list">
                        <li>
                            <strong>Email</strong>
                            syki0227@gmail.com
                        </li>
                        <li>
                            <strong>Location</strong>
                            Remote / Available worldwide
                        </li>
                        <li>
                            <strong>Project types</strong>
                            Business sites, portfolios, landing pages, Laravel apps
                        </li>
                    </ul>
                </div>

                <div class="contact-card">
                    @if(session('success'))
                        <div class="success-message">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="/messages">
                        @csrf

                        <div class="field-group">
                            <div class="two-cols">
                                <label>
                                    Name
                                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Your name" required>
                                    @error('name')
                                        <span class="error-message">{{ $message }}</span>
                                    @enderror
                                </label>

                                <label>
                                    Email
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="you@example.com" required>
                                    @error('email')
                                        <span class="error-message">{{ $message }}</span>
                                    @enderror
                                </label>
                            </div>

                            <label>
                                Subject
                                <input type="text" name="subject" value="{{ old('subject') }}" placeholder="Project inquiry" required>
                                @error('subject')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </label>

                            <label>
                                Message
                                <textarea name="message" placeholder="Tell me about your project..." required>{{ old('message') }}</textarea>
                                @error('message')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </label>
                        </div>

                        <button class="button" type="submit">Send message</button>
                    </form>
                </div>
            </section>
        </main>

        <footer class="footer">
            <div class="footer-inner">
                <span>Available for select website projects.</span>
                <a href="mailto:syki0227@gmail.com">syki0227@gmail.com</a>
                <span>© 2024 Dev-Syn</span>
            </div>
        </footer>
    </div>
</body>
</html>
