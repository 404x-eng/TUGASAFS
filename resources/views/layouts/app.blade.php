<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Info Event Kampus UNUD')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html, body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background-color: #f8f9fa;
            color: #1a1a1a;
            line-height: 1.6;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            color: #0f172a;
            letter-spacing: -0.5px;
        }

        /* Navbar Styling */
        .navbar {
            background: linear-gradient(135deg, #1e40af 0%, #1e3a8a 100%);
            box-shadow: 0 4px 16px rgba(30, 64, 175, 0.15);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar-brand {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 1.4rem;
            color: white !important;
            letter-spacing: -0.5px;
        }

        .nav-link {
            font-weight: 500;
            color: rgba(255, 255, 255, 0.9) !important;
            margin: 0 0.5rem;
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #fbbf24;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #1e40af 0%, #1e3a8a 50%, #0f172a 100%);
            color: white;
            padding: 100px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g fill="%23ffffff" fill-opacity="0.05"><path d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/></g></g></svg>');
            opacity: 0.5;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            letter-spacing: -1px;
            position: relative;
            z-index: 1;
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.95;
            position: relative;
            z-index: 1;
        }

        .btn-hero {
            background-color: #fbbf24;
            color: #0f172a;
            font-weight: 600;
            padding: 0.75rem 2rem;
            border: none;
            border-radius: 8px;
            transition: all 0.3s ease;
            position: relative;
            z-index: 1;
            font-family: 'Poppins', sans-serif;
        }

        .btn-hero:hover {
            background-color: #f59e0b;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(251, 191, 36, 0.3);
            color: #0f172a;
        }

        /* Feature Cards */
        .feature-card {
            background: white;
            border: none;
            border-radius: 12px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(30, 64, 175, 0.15);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .feature-card h3 {
            font-size: 1.3rem;
            margin-bottom: 0.8rem;
            color: #0f172a;
        }

        .feature-card p {
            color: #64748b;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* Event Cards */
        .event-card {
            background: white;
            border: none;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .event-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 32px rgba(30, 64, 175, 0.12);
        }

        .event-header {
            background: linear-gradient(135deg, #1e40af 0%, #1e3a8a 100%);
            padding: 1.5rem;
            color: white;
        }

        .event-type {
            display: inline-block;
            background: rgba(251, 191, 36, 0.2);
            color: #fbbf24;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 0.5rem;
        }

        .event-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin: 0.5rem 0;
        }

        .event-body {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .event-info {
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
            margin-bottom: 1rem;
            flex-grow: 1;
        }

        .event-info-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
            color: #64748b;
        }

        .event-info-item i {
            color: #1e40af;
            width: 18px;
        }

        .event-description {
            color: #64748b;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .event-footer {
            display: flex;
            gap: 0.8rem;
            margin-top: auto;
        }

        .btn-primary-custom {
            background: linear-gradient(135deg, #1e40af 0%, #1e3a8a 100%);
            color: white;
            border: none;
            padding: 0.6rem 1.2rem;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            flex: 1;
            text-align: center;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
        }

        .btn-primary-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(30, 64, 175, 0.2);
            color: white;
        }

        .btn-secondary-custom {
            background: white;
            color: #1e40af;
            border: 2px solid #1e40af;
            padding: 0.6rem 1.2rem;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
        }

        .btn-secondary-custom:hover {
            background: #f0f4ff;
            color: #1e40af;
        }

        /* Footer */
        footer {
            background: #0f172a;
            color: white;
            padding: 2rem 0;
            margin-top: 4rem;
            text-align: center;
            font-size: 0.9rem;
        }

        footer p {
            margin: 0;
            opacity: 0.8;
        }

        /* Section Styling */
        .section {
            padding: 3rem 0;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            text-align: center;
            color: #0f172a;
        }

        .section-subtitle {
            color: #64748b;
            text-align: center;
            margin-bottom: 3rem;
            font-size: 1rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .section-title {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="fas fa-calendar-check" style="margin-right: 0.5rem;"></i>UNUD Events
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/events">Event</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/profile">Profil Saya</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer>
        <div class="container">
            <p>&copy; 2026 UNUD Events. Platform Informasi Event Kampus Universitas Udayana.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>