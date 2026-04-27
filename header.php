<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;900&display=swap');
        body { font-family: 'Inter', sans-serif; scroll-behavior: smooth; }
        .nav-link { position: relative; transition: all 0.3s; }
        .nav-link::after { content: ''; position: absolute; width: 0; height: 2px; bottom: -4px; left: 0; background-color: #2563eb; transition: width 0.3s; }
        .nav-link:hover::after { width: 100%; }
    </style>
</head>
<body class="bg-slate-50 text-slate-900">

    <nav class="bg-white/90 backdrop-blur-md sticky top-0 z-50 border-b border-slate-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            
            <a href="index.php" class="flex items-center space-x-2 group">
                <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center text-white shadow-lg group-hover:rotate-12 transition">
                    <i class="fas fa-hard-hat text-xl"></i>
                </div>
                <h1 class="text-2xl font-black tracking-tighter text-slate-900 uppercase">
                    SRB <span class="text-blue-600">Engineering</span>
                </h1>
            </a>

            <div class="hidden md:flex items-center space-x-8">
                <a href="index.php#home" class="nav-link text-sm font-bold text-slate-600 hover:text-blue-600 uppercase tracking-widest">Home</a>
                <a href="index.php#about" class="nav-link text-sm font-bold text-slate-600 hover:text-blue-600 uppercase tracking-widest">About Us</a>
                <a href="index.php#services" class="nav-link text-sm font-bold text-slate-600 hover:text-blue-600 uppercase tracking-widest">Services</a>
                <a href="project.php" class="nav-link text-sm font-bold text-slate-600 hover:text-blue-600 uppercase tracking-widest">Projects</a>
                
                <a href="index.php#contact" class="bg-blue-600 text-white px-6 py-2.5 rounded-full font-bold text-xs uppercase tracking-tighter shadow-lg shadow-blue-200 hover:bg-blue-700 hover:-translate-y-0.5 transition-all">
                    Contact Us
                </a>
            </div>

            <button class="md:hidden text-2xl text-slate-900">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>
