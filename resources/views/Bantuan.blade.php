<title>@yield('title', 'i-Lang - Bantuan')</title>
<link rel="shortcut icon" href="{{url('img/favicon.png')}}">
@extends('layout.index')
<link rel="stylesheet" href="{{asset ('css/styleberanda.css')}}"/>
<link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}"/>
@section('content')

          
        <div class="container">
            <div class="text-left">
                <br>
                <div class="par-tit">
                    <h3>
                        Pembuatan Akun
                    </h3>
                </div>
                <br>
                    <div>
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item">
                            Pengguna baru yang belum memiliki akun perlu melakukan registrasi.
                        </li>
                        <li class="list-group-item">
                            Isikan Nama Pengguna yang ingin digunakan.
                        </li>
                        <li class="list-group-item">
                            Isikan Email yang ingin digunakan.
                        </li>
                        <li class="list-group-item">
                            Isikan Kata Sandi yang ingin digunakan dan pastikan untuk menggunakan kata sandi yang sulit ditebak.
                        </li>
                        <li class="list-group-item">
                            Ketik ulang Kata Sandinya dan klik Daftar!
                        </li>
                        <li class="list-group-item">
                            Akun berhasil dibuat dan pengguna akan diarahkan untuk melakukan login.
                        </li>
                    </ol><br>
                    </div>
            
                <div class="par-tit">
                    <h3>Melakukan login</h3>
                </div>
                <br>
                <div>
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item">
                            Pengguna yang bisa melakukan login adalah yang sudah memiliki akun.
                        </li>
                        <li class="list-group-item">
                            Isikan Email yang terhubung dengan akun.
                        </li>
                        <li class="list-group-item">
                            Isikan Kata Sandinya dan pastikan tidak ada kesalahan.
                        </li>
                        <li class="list-group-item">
                            Klik Masuk dan pengguna akan masuk ke Beranda.
                        </li>
                    </ol><br>
                </div>
            </div>
                <div class="par-tit">
                    <h3>Tampilan Beranda</h3>
                </div>
                <br>
                <div>
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item">
                            Kolom Pencarian digunakan untuk mencari Event.
                        </li>
                        <li class="list-group-item">
                            Pengguna bisa melakukan logout lewat tombol Logout di kanan atas.
                        </li>
                        <li class="list-group-item">
                            Terdapat tombol tambahkan event bagi pengguna yang ingin menambahkan event.
                        </li>
                        <li class="list-group-item">
                            Akun Saya merupakan tempat di mana pengguna bisa mengakses informasi akun miliknya.
                        </li>
                        <li class="list-group-item">
                            Kemudian Event Saya merupakan menu untuk mengakses event-event milik pengguna.
                        </li>
                        <li class="list-group-item">
                            Pengguna bisa mengakses informasi Kebijakan Privasi serta Syarat & Ketentuan di bagian bawah.
                        </li>
                        <li class="list-group-item">
                            Pada bagian Bantuan terdapat kontak berupa email yang bisa dihubungi.
                        </li>
                        <li class="list-group-item">
                            Pengguna bisa mengakses informasi lebih lanjut tentang cara penggunaan website i-Lang lewat menu Bantuan.
                        </li>
                    </ol><br>
                </div>
                <div class="par-tit">
                    <h3>Menambahkan Event</h3>
                </div>
                <br>
                <div>
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item">
                            Pengguna yang bisa mengakses menu ini adalah yang sudah memiliki akun.
                        </li>
                        <li class="list-group-item">
                            Tambahkan gambar event. Pengguna bisa menambahkan brosur, pamflet, undangan, dsb.
                        </li>
                        <li class="list-group-item">
                            Isikan Judul Event.
                        </li>
                        <li class="list-group-item">
                            Pilih Kategori Event. Jika tidak ada kategori yang diinginkan maka pilih Lainnya.
                        </li>
                        <li class="list-group-item">
                            Isikan pihak yang menyelenggarakan event pada kolom Penyelenggara.
                        </li>
                        <li class="list-group-item">
                            Isikan waktu event berupa tanggal dan jam.
                        </li>
                        <li class="list-group-item">
                            Jangan lupa mengisi tempat event.
                        </li>
                        <li class="list-group-item">
                            Tambahkan Link Tiket jika event memerlukan booking atau pembelian tiket.
                        </li>
                        <li class="list-group-item">
                            Tambahkan Deskripsi untuk memberi gambaran seperti apa event ini berlangsung.
                        </li>
                        <li class="list-group-item">
                            Tambahkan kontak penyelenggara berupa nomor hp dan email.
                        </li>
                        <li class="list-group-item">
                            Pastikan semua data sudah benar dan klik Unggah Eventmu.
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <br>
        
        
 
@endsection