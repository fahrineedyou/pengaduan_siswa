<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Helpdesk</title>
    <style>
        :root {
            color-scheme: light;
            --primary: #044FA0;
            --surface: #ffffff;
            --background: #f3f6fb;
            --text: #111827;
            --muted: #6b7280;
            --shadow: 0 24px 60px rgba(4, 79, 160, 0.12);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: linear-gradient(180deg, #eef4fc 0%, #f9fbff 100%);
            color: var(--text);
            display: grid;
            place-items: center;
            padding: 32px;
        }

        .card {
            width: min(480px, 100%);
            background: var(--surface);
            border-radius: 24px;
            padding: 40px;
            box-shadow: var(--shadow);
            border: 1px solid rgba(4, 79, 160, 0.08);
        }

        .brand {
            margin-bottom: 32px;
        }

        .brand h1 {
            margin: 0;
            font-size: clamp(1.9rem, 2.4vw, 2.5rem);
            letter-spacing: -0.03em;
        }

        .brand p {
            margin: 12px 0 0;
            color: var(--muted);
            line-height: 1.6;
        }

        form {
            display: grid;
            gap: 22px;
        }

        label {
            display: block;
            font-size: 0.95rem;
            margin-bottom: 8px;
            color: var(--muted);
        }

        input {
            width: 100%;
            border: 1px solid rgba(15, 23, 42, 0.12);
            border-radius: 14px;
            padding: 14px 16px;
            font-size: 1rem;
            color: var(--text);
            background: #fff;
            transition: border-color 0.2s ease;
        }

        input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(4, 79, 160, 0.12);
        }

        .button {
            width: 100%;
            border: none;
            border-radius: 14px;
            padding: 14px 18px;
            font-size: 1rem;
            font-weight: 600;
            background: var(--primary);
            color: #ffffff;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .button:hover {
            transform: translateY(-1px);
            box-shadow: 0 18px 30px rgba(4, 79, 160, 0.18);
        }

        .alert {
            padding: 16px 18px;
            border-radius: 16px;
            background: rgba(255, 220, 220, 0.95);
            color: #9b1c1c;
            border: 1px solid rgba(156, 28, 28, 0.16);
            line-height: 1.5;
        }

        .hint {
            font-size: 0.95rem;
            color: var(--muted);
            margin-top: 6px;
        }
    </style>
</head>
<body>
    <main class="card">
        <section class="brand">
            <h1>Login Helpdesk</h1>
            <p>Masuk dengan username dan password Anda untuk menuju dashboard.</p>
        </section>

        @if ($errors->any())
            <div class="alert">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login.perform') }}">
            @csrf

            <div>
                <label for="username">Username</label>
                <input id="username" name="username" type="text" value="{{ old('username') }}" required autofocus />
            </div>

            <div>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" required autocomplete="current-password" />
                <p class="hint">Gunakan kredensial akun yang telah terdaftar.</p>
            </div>

            <button type="submit" class="button">Masuk</button>
        </form>
    </main>
</body>
</html>
