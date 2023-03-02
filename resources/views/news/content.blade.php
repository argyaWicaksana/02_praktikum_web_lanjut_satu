@extends('template.app')

@section('css')
    <link rel="stylesheet" href="/css/edu-games.css">
@endsection

@section('main')
    <section class="container">
        <div class="col-lg-9 m-auto">
            <img class="img-radius img-fluid" src="https://www.educastudio.com/uploads/news/1738003843_20230223_100823.png"
                alt="img news" loading="lazy">
            <p class="pt-4 pb-2 h2 text-warning text-capitalize">{{ $newsTitle }}</p>
            <p>Oleh Kak Zepe (ZP. Heru Budhianto. KP) | 23 Feb 2023 | Edukasi</p>
            <hr class="pb-2">
            <div id="content" class="text-dark">
                <p>Sobat Marbel tentu gemar melakukan aktivitas belajar. Tidak hanya untuk menambah pengetahuan, aktivitas
                    belajar juga bisa meningkatkan semangat hidup dan kebahagiaan. Bahkan, Jim Rohn, seorang pakar
                    pendidikan mengatakan: “Jika Anda ingin menambah penghasilan, tingkatkan kosakata Anda."</p>
                <p>Saat kamu belajar, kosakata dan ilmu pengetahuanmu pasti akan bertambah. Namun, karena status kamu saat
                    ini masih seorang pelajar, tentu penghasilan belumlah menjadi motivasi utamamu dalam mempelajari
                    sesuatu. Yang penting, kamu tidak boleh kehilangan semangat dalam belajar. Walaupun kadang mungkin kamu
                   merasa malas atau bosan, kamu harus bisa melawannya dengan berbagai cara.
                </p>
                <p>Inilah beberapa cara yang bisa kamu terapkan dalam hidup sehari-hari agar kamu semakin memiliki semangat
                    belajar yang tinggi.</p>
                <h2>1. Membuat Jadwal Belajar</h2>
                <p>Tuliskan jadwal belajarmu secara manual, misalnya dengan cara menulis di atas kertas. Dengan menulis
                    secara manual kamu akan lebih cepat dan efektif dalam mengingatnya. Tentukanlah hari, mata pelajaran,
                    jam belajar, dan durasinya (Misalnya Senin, Matematika, 18.30-20.00). Durasi belajar efektif untuk anak
                    usia sekolah dasar adalah 1 sampai 2 jam.</p>
                <p>Mau lebih semangat belajar mengenal tata surya? Yuk, belajar dengan <strong>media gim edukasi di bawah ini!</strong></p>
                <h2>2. Menata Ruang dan Meja Belajar</h2>
                <p>Tatalah ruang belajarmu serapi mungkin. Hal ini akan membuatmu merasa nyaman dan bersemangat saat berada
                    di ruang atau kamar tempat kamu belajar. Setelah kamu selesai belajar jangan lupa untuk menata meja
                    belajar dengan rapi. Hal ini akan membantumu saat mencari alat tulis atau buku-buku yang kamu butuhkan.
                    Jangan sampai waktumu terbuang untuk mencari alat tulis atau buku karena lupa meletakkannya.</p>
            </div>
    </section>
@endsection
