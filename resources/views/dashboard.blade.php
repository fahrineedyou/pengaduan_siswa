<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        :root {
            --primary: #044FA0;
            --surface: #ffffff;
            --background: #f2f6fb;
            --text: #111827;
            --muted: #55616b;
            --shadow: 0 28px 70px rgba(4, 79, 160, 0.12);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: radial-gradient(circle at top left, rgba(4, 79, 160, 0.12), transparent 28%),
                        radial-gradient(circle at bottom right, rgba(4, 79, 160, 0.08), transparent 28%),
                        var(--background);
            color: var(--text);
            padding: 32px;
        }

        .layout {
            display: grid;
            gap: 24px;
            max-width: 1040px;
            margin: 0 auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap;
        }

        .headline {
            margin: 0;
            font-size: clamp(2rem, 2.6vw, 2.8rem);
            line-height: 1.05;
        }

        .subtitle {
            margin: 12px 0 0;
            color: var(--muted);
            font-size: 1rem;
            max-width: 720px;
        }

        .card {
            background: var(--surface);
            border-radius: 28px;
            padding: 36px;
            box-shadow: var(--shadow);
            border: 1px solid rgba(4, 79, 160, 0.08);
        }

        .info {
            display: grid;
            gap: 20px;
        }

        .info-item {
            display: grid;
            gap: 8px;
        }

        .info-title {
            margin: 0;
            font-size: 0.95rem;
            color: var(--muted);
        }

        .info-value {
            margin: 0;
            font-size: 1.15rem;
            font-weight: 600;
        }

        .action {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 22px;
            border-radius: 14px;
            border: none;
            color: #fff;
            background: var(--primary);
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
        }

        .meta {
            color: var(--muted);
            font-size: 0.95rem;
        }
    </style>
</head>
<body>
    <main class="layout">
        <section class="header">
            <div>
                <h1 class="headline">Halo, {{ auth()->user()->nama ?? auth()->user()->username }}.</h1>
                <p class="subtitle">Selamat datang di dashboard. Kelola pengaduan dan pantau informasi akun Anda di sini.</p>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="action">Keluar</button>
            </form>
        </section>

        <section class="card info">
            <div class="info-item">
                <p class="info-title">Nama</p>
                <p class="info-value">{{ auth()->user()->nama }}</p>
            </div>
            <div class="info-item">
                <p class="info-title">Username</p>
                <p class="info-value">{{ auth()->user()->username }}</p>
            </div>
            <div class="info-item">
                <p class="info-title">Role</p>
                <p class="info-value">{{ auth()->user()->role }}</p>
            </div>
            <p class="meta">Halaman ini akan membawa Anda ke pengaduan, laporan, dan kontrol sistem Anda.</p>
        </section>
    </main>
</body>
</html>
