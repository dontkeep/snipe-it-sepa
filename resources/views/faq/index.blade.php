@extends('layouts/default')

@section('title')
    {{ trans('general.faq') }} - {{ $snipeSettings->site_name }}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h1 class="box-title">{{ trans('general.faq') }}</h1>
                </div>
                <div class="box-body">

                    <!-- FAQ Items -->
                    <div class="panel-group" id="accordion">

                        <!-- Asset Management -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                        <i class="fas fa-cube"></i> Pengelolaan Asset
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="faq-item">
                                        <h5><strong>Bagaimana cara menambahkan asset baru?</strong></h5>
                                        <p>Untuk menambahkan asset baru, navigasikan ke menu <strong>Assets</strong> di sidebar, kemudian klik tombol <strong>Create</strong>. Isi semua field yang diperlukan seperti asset name, asset tag, model, dan informasi lainnya. Tooltip icon (ℹ️) di samping setiap field akan membantu menjelaskan tujuan field tersebut.</p>
                                    </div>

                                    <div class="faq-item" style="margin-top: 15px;">
                                        <h5><strong>Apa perbedaan antara asset tag dan serial number?</strong></h5>
                                        <p><strong>Asset Tag</strong> adalah identitas unik yang Anda tentukan untuk melacak aset dalam sistem. <strong>Serial Number</strong> adalah nomor seri dari produsen aset. Keduanya penting untuk identifikasi asset.</p>
                                    </div>

                                    <div class="faq-item" style="margin-top: 15px;">
                                        <h5><strong>Bagaimana cara mengecekout asset kepada pengguna?</strong></h5>
                                        <p>Buka asset yang ingin di-checkout, klik tombol <strong>Checkout</strong>, pilih pengguna atau lokasi yang dituju, dan klik <strong>Confirm Checkout</strong>.</p>
                                    </div>

                                    <div class="faq-item" style="margin-top: 15px;">
                                        <h5><strong>Bagaimana cara mengecheckin asset?</strong></h5>
                                        <p>Buka asset yang ingin di-checkin, klik tombol <strong>Checkin</strong>, dan ikuti instruksi yang ditampilkan. Asset akan dikembalikan ke status RTD (Ready To Deploy).</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- License Management -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                        <i class="fas fa-file-pdf"></i> Pengelolaan Lisensi
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="faq-item">
                                        <h5><strong>Bagaimana cara menambahkan lisensi baru?</strong></h5>
                                        <p>Navigasikan ke menu <strong>Licenses</strong> di sidebar, klik tombol <strong>Create</strong>, dan isi informasi lisensi seperti nama lisensi, jumlah seat, tanggal pembelian, dan detail lainnya.</p>
                                    </div>

                                    <div class="faq-item" style="margin-top: 15px;">
                                        <h5><strong>Apa itu "Reassignable License"?</strong></h5>
                                        <p><strong>Reassignable License</strong> adalah lisensi yang dapat dialokasikan ulang kepada pengguna atau aset yang berbeda. Jika diaktifkan, lisensi dapat dipindahkan tanpa perlu membuat lisensi baru.</p>
                                    </div>

                                    <div class="faq-item" style="margin-top: 15px;">
                                        <h5><strong>Bagaimana cara melacak penggunaan lisensi?</strong></h5>
                                        <p>Anda dapat melihat laporan lisensi dengan membuka menu <strong>Reports</strong> di sidebar, kemudian pilih <strong>License Report</strong> untuk melihat detail penggunaan lisensi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- User Management -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                        <i class="fas fa-users"></i> Pengelolaan Pengguna
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="faq-item">
                                        <h5><strong>Bagaimana cara membuat pengguna baru?</strong></h5>
                                        <p>Navigasikan ke menu <strong>People</strong> di sidebar, klik tombol <strong>Create</strong>, isi informasi pengguna seperti nama depan, nama belakang, email, username, dan password.</p>
                                    </div>

                                    <div class="faq-item" style="margin-top: 15px;">
                                        <h5><strong>Apa perbedaan antara Admin dan Superadmin?</strong></h5>
                                        <p><strong>Superadmin</strong> memiliki akses penuh ke semua fitur sistem dan dapat mengelola pengaturan sistem. <strong>Admin</strong> memiliki akses tingkat lanjut tetapi mungkin memiliki beberapa pembatasan tergantung pada konfigurasi sistem.</p>
                                    </div>

                                    <div class="faq-item" style="margin-top: 15px;">
                                        <h5><strong>Bagaimana cara mereset password pengguna?</strong></h5>
                                        <p>Buka profil pengguna, klik edit, buat password baru, dan simpan. Pengguna dapat menggunakan password baru untuk login.</p>
                                    </div>

                                    <div class="faq-item" style="margin-top: 15px;">
                                        <h5><strong>Apa itu VIP User?</strong></h5>
                                        <p><strong>VIP User</strong> adalah pengguna yang ditandai khusus dalam sistem untuk keperluan pelaporan dan pelacakan aset. Ini berguna untuk pengguna dengan prioritas tinggi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Accessories & Consumables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                        <i class="fas fa-box"></i> Aksesori & Consumables
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="faq-item">
                                        <h5><strong>Apa perbedaan antara Accessories dan Consumables?</strong></h5>
                                        <p><strong>Accessories</strong> adalah item yang dapat digunakan kembali dan dilacak secara individual (contoh: mouse, keyboard). <strong>Consumables</strong> adalah item yang dapat habis atau digunakan habis dan biasanya dilacak dalam jumlah (contoh: tinta printer, kertas).</p>
                                    </div>

                                    <div class="faq-item" style="margin-top: 15px;">
                                        <h5><strong>Bagaimana cara menambahkan aksesori baru?</strong></h5>
                                        <p>Navigasikan ke menu <strong>Accessories</strong> di sidebar, klik tombol <strong>Create</strong>, isi informasi aksesori seperti nama, kategori, supplier, dan detail lainnya.</p>
                                    </div>

                                    <div class="faq-item" style="margin-top: 15px;">
                                        <h5><strong>Apa itu Minimum Quantity?</strong></h5>
                                        <p><strong>Minimum Quantity</strong> adalah jumlah minimum yang harus tersedia di stok. Sistem akan memberikan alert ketika stok mencapai atau di bawah jumlah minimum ini.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Reports & Analytics -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                                        <i class="fas fa-chart-bar"></i> Laporan & Analitik
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="faq-item">
                                        <h5><strong>Di mana saya dapat mengakses laporan?</strong></h5>
                                        <p>Navigasikan ke menu <strong>Reports</strong> di sidebar. Di sini Anda dapat menemukan berbagai jenis laporan seperti Activity Report, Audit Report, Depreciation Report, dan lainnya.</p>
                                    </div>

                                    <div class="faq-item" style="margin-top: 15px;">
                                        <h5><strong>Bagaimana cara membuat laporan kustom?</strong></h5>
                                        <p>Buka menu <strong>Reports</strong> > <strong>Custom Report</strong>, pilih kolom yang ingin ditampilkan, sesuaikan filter sesuai kebutuhan, dan klik <strong>Generate Report</strong>.</p>
                                    </div>

                                    <div class="faq-item" style="margin-top: 15px;">
                                        <h5><strong>Bagaimana cara mengekspor laporan?</strong></h5>
                                        <p>Setelah membuat laporan, klik tombol <strong>Export</strong> untuk mengunduh laporan dalam format Excel atau PDF sesuai kebutuhan Anda.</p>
                                    </div>

                                    <div class="faq-item" style="margin-top: 15px;">
                                        <h5><strong>Apa itu Depreciation Report?</strong></h5>
                                        <p><strong>Depreciation Report</strong> menunjukkan penurunan nilai aset dari waktu ke waktu berdasarkan nilai pembelian dan periode depresiasi yang ditentukan. Berguna untuk keperluan akuntansi dan pelaporan keuangan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Settings & Configuration -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                                        <i class="fas fa-cog"></i> Pengaturan & Konfigurasi
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="faq-item">
                                        <h5><strong>Bagaimana cara mengakses pengaturan sistem?</strong></h5>
                                        <p>Klik menu <strong>Settings</strong> di sidebar. Di sini Anda dapat mengkonfigurasi berbagai aspek sistem seperti status labels, kategori, manufacturer, supplier, lokasi, dan lainnya.</p>
                                    </div>

                                    <div class="faq-item" style="margin-top: 15px;">
                                        <h5><strong>Bagaimana cara membuat kategori baru?</strong></h5>
                                        <p>Navigasikan ke <strong>Settings</strong> > <strong>Categories</strong>, klik tombol <strong>Create</strong>, isi nama kategori dan deskripsi, kemudian simpan.</p>
                                    </div>

                                    <div class="faq-item" style="margin-top: 15px;">
                                        <h5><strong>Apa itu Custom Fields?</strong></h5>
                                        <p><strong>Custom Fields</strong> memungkinkan Anda untuk menambahkan field tambahan yang disesuaikan dengan kebutuhan bisnis Anda pada form create/edit untuk berbagai entity types.</p>
                                    </div>

                                    <div class="faq-item" style="margin-top: 15px;">
                                        <h5><strong>Bagaimana cara mengatur lokasi?</strong></h5>
                                        <p>Navigasikan ke <strong>Settings</strong> > <strong>Locations</strong>, klik tombol <strong>Create</strong>, isi nama lokasi, alamat, dan detail lainnya. Lokasi digunakan untuk melacak di mana aset atau pengguna berada.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- General Tips -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                                        <i class="fas fa-lightbulb"></i> Tips & Trik Umum
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse7" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="faq-item">
                                        <h5><strong>Apa itu Tooltip Icon?</strong></h5>
                                        <p>Tooltip icon adalah small icon dengan simbol "ℹ️" yang muncul di samping label field pada form. Klik atau hover pada icon tersebut untuk melihat penjelasan dari field yang bersangkutan.</p>
                                    </div>

                                    <div class="faq-item" style="margin-top: 15px;">
                                        <h5><strong>Bagaimana cara menggunakan search/filter?</strong></h5>
                                        <p>Sebagian besar halaman memiliki search box di atas list. Ketik keyword untuk mencari item spesifik. Anda juga dapat menggunakan filter untuk mempersempit hasil pencarian.</p>
                                    </div>

                                    <div class="faq-item" style="margin-top: 15px;">
                                        <h5><strong>Bagaimana cara bulk import data?</strong></h5>
                                        <p>Navigasikan ke menu <strong>Import</strong> di sidebar, pilih jenis item yang ingin di-import, upload file CSV yang sesuai dengan template yang disediakan, dan ikuti instruksi import.</p>
                                    </div>

                                    <div class="faq-item" style="margin-top: 15px;">
                                        <h5><strong>Bagaimana cara melihat history/audit trail?</strong></h5>
                                        <p>Buka item (asset, user, lisensi, dll), scroll ke bawah untuk melihat tab <strong>History</strong> atau <strong>Activity Log</strong> yang menunjukkan semua perubahan yang dilakukan pada item tersebut.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <style>
        .faq-item {
            background-color: #f9f9f9;
            padding: 15px;
            border-left: 4px solid #0066cc;
            margin-bottom: 10px;
        }

        .faq-item h5 {
            margin-top: 0;
            color: #333;
        }

        .faq-item p {
            margin-bottom: 0;
            color: #666;
            line-height: 1.6;
        }

        .panel-heading {
            background-color: #f5f5f5;
        }

        .panel-title a {
            color: #0066cc;
            font-weight: 500;
        }

        .panel-title a:hover {
            text-decoration: none;
            color: #004c99;
        }

        .panel-title a i {
            margin-right: 8px;
        }
    </style>

@endsection
