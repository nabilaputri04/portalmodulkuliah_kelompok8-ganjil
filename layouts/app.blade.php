<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root{
            --primary:#5B6CFF;
            --soft:#EEF0FF;
            --bg:#F6F7FB;
        }
        body{ background:var(--bg); }
        .top-header{
            background:linear-gradient(135deg,#6C7BFF,#5B6CFF);
            color:#fff;
            padding:20px;
            border-radius:18px;
            margin-bottom:20px;
        }
        .card-main{
            background:#fff;
            padding:22px;
            border-radius:18px;
            box-shadow:0 10px 25px rgba(0,0,0,.08);
        }
        .btn-main{
            background:var(--primary);
            color:#fff;
            border-radius:12px;
        }
        .modul-card{
            background:var(--soft);
            padding:16px;
            border-radius:14px;
        }
        .badge-soft{
            background:#DDE0FF;
            color:#4F5EEA;
            border-radius:999px;
            padding:5px 10px;
        }
        .dashboard-header{
    background:linear-gradient(135deg,#6F85FF,#5B6CFF);
    color:#fff;
    padding:24px;
    border-radius:20px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}
.dashboard-header small{ opacity:.9 }

.avatar{
    width:44px;
    height:44px;
    background:#fff;
    border-radius:50%;
}

.search-card{
    background:#fff;
    padding:20px;
    border-radius:20px;
    box-shadow:0 8px 20px rgba(0,0,0,.08);
}

.btn-primary-soft{
    background:#5B6CFF;
    color:#fff;
    border-radius:10px;
}

.menu-btn{
    display:block;
    text-align:center;
    background:#5B6CFF;
    color:#fff;
    padding:16px 10px;
    border-radius:16px;
    text-decoration:none;
    font-size:14px;
}
.menu-btn:hover{ opacity:.9 }

.filter-card{
    background:#F2F4FF;
    padding:18px;
    border-radius:18px;
}

.modul-item{
    background:#EEF1FF;
    padding:16px;
    border-radius:16px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.tag{
    background:#DCE1FF;
    color:#4B5BEA;
    font-size:12px;
    padding:4px 10px;
    border-radius:999px;
    margin-right:6px;
}

.detail-btn{
    background:#5B6CFF;
    color:#fff;
    padding:6px 14px;
    border-radius:12px;
    font-size:13px;
    text-decoration:none;
}
.header-actions{
    display:flex;
    align-items:center;
    gap:12px;
}

/* Avatar bulat */
.avatar{
    width:44px;
    height:44px;
    background:#fff;
    border-radius:50%;
    display:inline-block;
    border:2px solid rgba(255,255,255,.6);
    cursor:pointer;
    transition:.2s;
}
.avatar:hover{
    transform:scale(1.05);
}

/* Logout button */
.logout-btn{
    background:rgba(255,255,255,.15);
    color:#fff;
    padding:8px 14px;
    border-radius:999px;
    font-size:13px;
    text-decoration:none;
    transition:.2s;
}
.logout-btn:hover{
    background:rgba(255,255,255,.3);
}
.profile-avatar{
    width:64px;
    height:64px;
    background:#DDE2FF;
    border-radius:16px;
}

.profile-menu{
    padding:0;
}

.menu-item{
    display:block;
    padding:16px;
    text-decoration:none;
    color:#333;
    font-weight:500;
}
.menu-item:hover{
    background:#F4F6FF;
}
.profile-photo-wrapper{
    position:relative;
}
.profile-photo{
    width:80px;
    height:80px;
    border-radius:18px;
    object-fit:cover;
    background:#E3E7FF;
}

/* ROADMAP */
.roadmap-wrapper {
    overflow-x: auto;
    padding-bottom: 12px;
}

.roadmap-track {
    display: flex;
    align-items: center;
    gap: 22px;
    min-width: max-content;
}

/* CARD DEFAULT */
.roadmap-card {
    min-width: 220px;
    background: #ffffff;
    border-radius: 16px;
    padding: 18px 20px;
    text-align: center;
    text-decoration: none;
    color: #111;
    border: 2px solid transparent;
    box-shadow: 0 6px 18px rgba(0,0,0,0.08);
    transition: all 0.25s ease;
}

.roadmap-card strong {
    display: block;
    font-size: 15px;
    margin-bottom: 4px;
}

.roadmap-card small {
    color: #777;
    font-size: 13px;
}

/* HOVER */
.roadmap-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 26px rgba(91,108,255,0.25);
    border-color: #cfd5ff;
}

/* ACTIVE (INI KUNCI UTAMA 🔥) */
.roadmap-card.active {
    background: linear-gradient(135deg,#6f85ff,#5b6cff);
    color: #fff;
    border-color: #5b6cff;
    box-shadow: 0 14px 30px rgba(91,108,255,0.45);
}

.roadmap-card.active small {
    color: rgba(255,255,255,.85);
}

/* PANAH */
.roadmap-arrow {
    font-size: 22px;
    color: #5b6cff;
    font-weight: bold;
    user-select: none;
}

<style>
.related-card {
    background: #fff;
    padding: 16px;
    border-radius: 14px;
    box-shadow: 0 6px 16px rgba(0,0,0,.08);
    height: 100%;
}

.related-card p {
    font-size: 13px;
    color: #666;
    margin: 8px 0;
}

.bg-primary-soft { background:#e5e8ff; color:#4c5cff; }
.bg-success-soft { background:#e3fcef; color:#1e8e5a; }
.bg-warning-soft { background:#fff3cd; color:#856404; }

/* BACK BUTTON */
.back-btn{
    width:38px;
    height:38px;
    display:flex;
    align-items:center;
    justify-content:center;
    background:rgba(255,255,255,.2);
    color:#fff;
    border-radius:12px;
    text-decoration:none;
    font-size:18px;
    font-weight:bold;
    transition:.2s;
}
.back-btn:hover{
    background:rgba(255,255,255,.35);
    transform:translateX(-2px);
}

.back-btn{
    width:36px;
    height:36px;
    display:flex;
    align-items:center;
    justify-content:center;
    background:rgba(255,255,255,.25);
    color:#fff;
    border-radius:10px;
    text-decoration:none;
    font-size:18px;
    transition:.2s;
}
.back-btn:hover{
    background:rgba(255,255,255,.4);
    transform:translateX(-2px);
}
/* Perkecil ukuran umum */
.dashboard-header{
    padding:20px;
}

.modul-item{
    padding:14px;
    font-size:14px;
}

.detail-btn{
    padding:6px 12px;
    font-size:12px;
}

.filter-card{
    padding:16px;
}

.btn-main{
    font-size:14px;
    padding:10px;
}

/* QUICK MENU PANEL */
.quick-panel {
    background: rgba(255, 255, 255, 0.9); /* soft pastel white */
}

.quick-item {
    background: #e6efff; /* Light pastel blue */
}

.quick-item:hover {
    background: #5B6CFF;
    color: #fff;
}

.quick-item svg {
    margin-right: 8px;
    font-size: 18px;
}

/* Quick Toggle Button */
.quick-toggle {
    background: #5B6CFF;
    color: #fff;
    border: none;
    padding: 12px 16px;
    border-radius: 16px;
    font-size: 16px;
    box-shadow: 0 6px 16px rgba(91, 108, 255, 0.35);
    transition: 0.3s;
    cursor: pointer;
    display: inline-block;
}

.quick-toggle:hover {
    background-color: #4e5ff5;
}


/* QUICK MENU BUTTON */
.quick-toggle {
    background: #5B6CFF;
    color: #fff;
    border: none;
    padding: 12px 16px;
    border-radius: 16px;
    font-size: 16px;
    box-shadow: 0 6px 16px rgba(91, 108, 255, 0.35);
    transition: 0.3s;
    cursor: pointer;
    display: inline-block;
    margin-bottom: 16px; /* Memberikan jarak antara tombol dan menu */
}

.quick-toggle:hover {
    background-color: #4e5ff5;
}

/* QUICK MENU PANEL */
.quick-panel {
    position: fixed;
    top: 0;
    left: -260px;
    width: 240px;
    height: 100%;
    background: #f2f4ff;
    padding: 24px 16px;
    box-shadow: 8px 0 30px rgba(0, 0, 0, 0.15);
    transition: 0.35s ease;
    z-index: 999;
    overflow-y: auto; /* Aktifkan scroll jika menu terlalu panjang */
}

.quick-panel.active {
    left: 0;
}

/* MENU ITEMS */
.quick-item {
    display: block;
    background: #EEF1FF;
    margin-bottom: 12px;
    padding: 14px;
    border-radius: 14px;
    text-decoration: none;
    color: #4b5bea;
    font-weight: 500;
    font-size: 14px;
    transition: 0.2s;
    display: flex;
    align-items: center;
}

.quick-item:hover {
    background: #5B6CFF;
    color: #fff;
    transform: translateX(4px);
}

.quick-item i {
    font-size: 18px;
    margin-right: 10px;
    transition: color 0.3s;
}

.quick-item:hover i {
    color: #fff;
}

/* QUICK MENU ICON */
.quick-item svg {
    margin-right: 8px;
    font-size: 18px;
}


</style>

    </style>
</head>
<body>

<div class="container my-4">
    @yield('content')
</div>

</body>
</html>

