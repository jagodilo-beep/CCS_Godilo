<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'CCS')</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <script src="https://unpkg.com/feather-icons"></script>
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono&family=Poppins:wght@600;800&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'JetBrains Mono', monospace;
      background: linear-gradient(90deg, #8c52ff, #ff914d);
      min-height: 100vh;
      color: white;
      margin: 0;
      padding: 0;
    }
    nav {
      background: rgba(255 255 255 / 0.12);
      backdrop-filter: saturate(180%) blur(12px);
      box-shadow: 0 4px 30px rgba(140, 82, 255, 0.5);
      border-radius: 1rem;
      padding: 1.25rem 2rem;
      position: sticky;
      top: 1rem;
      margin: 0 1rem;
      z-index: 100;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: background-color 0.3s ease;
    }
    nav:hover {
      background: rgba(255 255 255 / 0.18);
    }
    .logo-text {
      font-family: 'Poppins', sans-serif;
      font-weight: 800;
      font-size: 1.75rem;
      letter-spacing: 0.15em;
      color: white;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      user-select: none;
      text-shadow: 0 0 8px rgba(140, 82, 255, 0.9);
      transition: text-shadow 0.3s ease;
    }
    .logo-text:hover {
      text-shadow: 0 0 14px rgba(255, 145, 77, 0.9);
    }
    nav svg {
      width: 28px;
      height: 28px;
      stroke: white;
      filter: drop-shadow(0 0 2px rgba(255 145 77 / 0.8));
      transition: filter 0.3s ease;
    }
    nav svg:hover {
      filter: drop-shadow(0 0 6px rgba(255 145 77 / 1));
    }
    .nav-links {
      display: flex;
      gap: 2rem;
    }
    .nav-link {
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      color: white;
      position: relative;
      font-size: 1.1rem;
      cursor: pointer;
      user-select: none;
      transition: color 0.3s ease;
      text-shadow: 0 0 4px rgba(255 255 255, 0.7);
    }
    .nav-link::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: -4px;
      left: 0;
      background: white;
      transition: width 0.3s ease;
      border-radius: 3px;
    }
    .nav-link:hover {
      color: white;
      text-shadow: 0 0 8px white;
    }
    .nav-link:hover::after {
      width: 100%;
    }
    main {
      background: rgba(0, 0, 0, 0.35);
      box-shadow: 0 15px 35px rgba(255, 145, 77, 0.5);
      border-radius: 1.25rem;
      padding: 3rem 3.5rem;
      max-width: 900px;
      margin: 3rem auto 4rem;
      color: white;
      font-size: 1.125rem;
      line-height: 1.6;
      font-family: 'JetBrains Mono', monospace;
      letter-spacing: 0.02em;
      text-shadow: 0 0 10px rgba(255, 145, 77, 0.4);
      transition: box-shadow 0.3s ease;
    }
    main:hover {
      box-shadow: 0 20px 60px rgba(255, 145, 77, 0.75);
    }
    main, main * {
      color: white !important;
    }
    .fade-in {
      animation: fadeIn 0.5s ease-in-out both;
    }
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    @media (max-width: 768px) {
      nav {
        flex-direction: column;
        padding: 1rem 1.5rem;
        gap: 1rem;
      }
      .nav-links {
        gap: 1.5rem;
        flex-wrap: wrap;
        justify-content: center;
      }
      main {
        padding: 2rem;
        margin: 2rem 1rem 3rem;
      }
    }
  </style>
  @stack('head')
</head>
<body>
  <nav>
    <a href="{{ url('/') }}" class="logo-text" aria-label="CCS Home">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 17v-6h6v6m2 4H7a2 2 0 01-2-2V5a2 2 0 012-2h10a2 2 0 012 2v14a2 2 0 01-2 2z" />
      </svg>
      CCS
    </a>
    <div class="nav-links">
      <a href="{{ url('/') }}" class="nav-link">Home</a>
      <a href="{{ url('/about') }}" class="nav-link">About</a>
      <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
    </div>
  </nav>
  <main class="fade-in">
    @yield('content')
  </main>
  <script>
    feather.replace();
  </script>
  @stack('scripts')
</body>
</html>
