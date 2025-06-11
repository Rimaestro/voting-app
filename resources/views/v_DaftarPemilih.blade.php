<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pemilih - Sistem Voting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4e73df;
            --secondary-color: #2e59d9;
            --success-color: #1cc88a;
            --warning-color: #f6c23e;
            --danger-color: #e74a3b;
            --light-color: #f8f9fc;
            --dark-color: #5a5c69;
        }
        
        html, body {
            min-height: 100vh;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fc;
            padding-top: 60px;
            display: flex;
            flex-direction: column;
        }
        
        .main-content {
            flex: 1;
        }
        
        .navbar {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }
        
        .nav-link {
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            transform: translateY(-2px);
        }
        
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            overflow: hidden;
            animation: fadeIn 1s ease-in-out;
        }
        
        .card:hover {
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }
        
        .card-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            border: none;
            padding: 20px;
            border-radius: 15px 15px 0 0 !important;
        }
        
        .card-title {
            margin-bottom: 0;
            font-weight: 700;
            font-size: 1.5rem;
        }
        
        .card-body {
            padding: 25px;
        }
        
        .table {
            border-collapse: separate;
            border-spacing: 0;
            width: 100%;
        }
        
        .table th {
            background-color: #f1f3f9;
            color: var(--dark-color);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.8rem;
            padding: 15px;
            border: none;
        }
        
        .table td {
            padding: 15px;
            vertical-align: middle;
            border-top: 1px solid #f1f3f9;
            border-bottom: none;
            font-size: 0.9rem;
        }
        
        .table tr {
            transition: all 0.3s ease;
        }
        
        .table tr:hover {
            background-color: rgba(78, 115, 223, 0.05);
        }
        
        .badge {
            padding: 8px 15px;
            border-radius: 30px;
            font-weight: 500;
            font-size: 0.75rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .badge-success {
            background-color: var(--success-color) !important;
            color: white;
        }
        
        .badge-warning {
            background-color: var(--warning-color) !important;
            color: #5a5c69;
        }
        
        .btn-detail {
            border-radius: 30px;
            padding: 8px 20px;
            font-weight: 500;
            font-size: 0.8rem;
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #36b9cc 0%, #1cc88a 100%);
            border: none;
            color: white;
            box-shadow: 0 4px 10px rgba(28, 200, 138, 0.3);
        }
        
        .btn-detail:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(28, 200, 138, 0.4);
            background: linear-gradient(135deg, #1cc88a 0%, #36b9cc 100%);
            color: white;
        }
        
        .footer {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 25px 0;
            margin-top: auto;
        }
        
        .footer p {
            margin-bottom: 0;
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
        
        .animate__animated {
            animation-duration: 1s;
        }
        
        .row-animation {
            animation-delay: calc(var(--animation-order) * 0.1s);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-vote-yea me-2"></i>Sistem Voting
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fas fa-home me-1"></i> Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-user-friends me-1"></i> Pemilih</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-users me-1"></i> Kandidat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-chart-bar me-1"></i> Hasil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card animate__animated animate__fadeIn">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0"><i class="fas fa-users me-2"></i>Daftar Pemilih</h5>
                            <div class="input-group" style="max-width: 300px;">
                                <input type="text" class="form-control" placeholder="Cari pemilih...">
                                <button class="btn btn-light" type="button"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach($pemilih as $p)
                                        <tr class="animate__animated animate__fadeIn row-animation" style="--animation-order: {{ $no }}">
                                            <td>{{ $no++ }}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm bg-light rounded-circle text-center me-2 d-flex align-items-center justify-content-center" style="width: 35px; height: 35px; font-size: 1rem;">
                                                        @if(isset($p->role) && $p->role == 'admin')
                                                            <i class="fas fa-user-shield text-primary"></i>
                                                        @elseif(isset($p->role) && $p->role == 'panitia')
                                                            <i class="fas fa-user-cog text-secondary"></i>
                                                        @elseif(strtolower($p->name) == 'admin')
                                                            <i class="fas fa-user-shield text-primary"></i>
                                                        @elseif(strtolower($p->name) == 'panitia')
                                                            <i class="fas fa-user-cog text-secondary"></i>
                                                        @else
                                                            <i class="fas fa-user text-info"></i>
                                                        @endif
                                                    </div>
                                                    <div>{{ $p->name }}</div>
                                                </div>
                                            </td>
                                            <td>{{ $p->email }}</td>
                                            <td>
                                                @if($p->status == 1)
                                                    <span class="badge badge-success"><i class="fas fa-check-circle me-1"></i> Sudah Memilih</span>
                                                @else
                                                    <span class="badge badge-warning"><i class="fas fa-clock me-1"></i> Belum Memilih</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-detail"><i class="fas fa-eye me-1"></i> Detail</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2025 Sistem Voting Laravel</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p>Universitas Amikom Purwokerto</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Animate rows on load
        document.addEventListener('DOMContentLoaded', function() {
            const rows = document.querySelectorAll('.row-animation');
            rows.forEach((row, index) => {
                row.style.setProperty('--animation-order', index);
                row.classList.add('animate__fadeIn');
            });
        });
    </script>
</body>
</html> 