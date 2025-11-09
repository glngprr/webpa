@extends('layouts.main')

@section('title', 'Beranda')

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Dev Course - Hero Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .hero-section {
            min-height: 80vh; /* dikurangi dari 100vh */
            display: flex;
            align-items: center;
            background: #ffffff;
            padding-top: 40px; /* lebih kecil */
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            color: #5a6c7d;
            margin-bottom: 2rem;
            line-height: 1.7;
        }

        .btn-primary-custom {
            background: #6f42c1;
            color: #ffffff;
            border: none;
            padding: 14px 36px;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-primary-custom:hover {
            background: #5e39a3ff;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(52, 152, 219, 0.3);
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.3rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-lg-8">
                <h1 class="hero-title">Panduan Membuat Website</h1>
                <p class="hero-subtitle">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ullam nihil aliquid cupiditate enim in, cum reprehenderit perferendis consequuntur dolore doloremque voluptas iste deleniti officiis repellat, quisquam illum corrupti tenetur?
                </p>
                <a href="/daftar" class="btn btn-primary-custom">Daftar Sekarang</a>
            </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection