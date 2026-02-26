<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayNote - @yield('title', 'Qarzdorlar Ro\'yxati')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        slate: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                        }
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .card-hover {
                @apply transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5;
            }
            .scrollbar-hide::-webkit-scrollbar {
                display: none;
            }
        }
    </style>
</head>

<body class="@yield('body-class', 'bg-gray-50 text-slate-800 font-sans antialiased min-h-screen')">

<!-- Navigation -->
@yield('navigation')

<!-- Sticky Header -->
@yield('header')

<!-- Main Content -->
@yield('content')

@yield('footer')

@yield('script')
</body>
</html>
