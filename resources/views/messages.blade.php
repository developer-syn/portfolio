<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact page for a website developer.">
    <title>Send a Message | Dev-Syn</title>

    <link rel="stylesheet" href="{{ asset('css/messages.css') }}">
</head>

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
