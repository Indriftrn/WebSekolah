@extends('layouts.master')
@section('title', 'Smpn 2 Pamarican')
    
@section('content')
<div class="jumbotron jumbotron bg-cover">
    <div class="overlay"></div>
    <div class="container jumbotron-text">
      <h1 class="display-3 mb-1">SMP NEGERI 2 PAMARICAN</h1>
      <hr class="my-4">
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
        featured content or information.</p>
    </div>
</div>
<section class="container " style="margin-top: 10em !important;" id="sejarah">
    <div class="bg-light text-justify p-5">
      <h3 class="text-center sejarah">Sejarah SMPN 2 Pamarican</h3>
      <hr>
      <div class="row">
        <div class="col-md-12 mt-1">
          <p>
            Pada awalnya SMPN 2 Pamarican adalah merupakan Kelas Jauh dari SMPN 1 Pamarican.
            Alasan didirikannya SMPN 2 Pamarican karena pada saat itu di daerah
            Desa Kertahayu belum adanya sekolah menengah, jika masyarakat harus
            bersekolah ke pamarican atau banjar tentunya jaraknya sangat jauh.

            SMPN 2 Pamarican mulai beroperasi pada sekitar tahun 1992, dan baru diresmikan kenegriannya pada tahun 1994.
            Pada saat itu siswa yang bersekolah di SMPN 2 Pamarican belum begitu banyak.
            Baru hanya sekitar 3 Rombel.dan makin lama makin banyak siswa yang masuk ke SMPN 2 Pamarican,
            sampai sekarang sudah ada sekitar 23 Rombel yang terdiri dari 32 peserta didik di setiap kelasnya.
          </p>
        </div>
      </div>
    </div>
  </section>


  <section class="container mt-5 visi" id="visi">
    <div class="bg-light text-justify p-5">
      <div class="row">
        <div class="col-md-4">
          <img src="img/12.jpg" alt="" width="100%" height="100%">
        </div>
        <div class="col-md-8">
          <h5>VISI</h5>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo molestiae pariatur voluptatum sapiente, sequi
            modi quibusdam sunt magnam repellendus sint aspernatur provident, velit sed incidunt et repellat
            necessitatibus rerum reprehenderit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit magni
            laudantium nihil expedita nobis? Odio incidunt necessitatibus illum sit fugiat itaque, deserunt assumenda?
            Corrupti, nemo ea? Esse, maxime! Impedit, ipsam.</p>
        </div>
        <div class="col-md-8 mt-4">
          <h5>Misi</h5>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo molestiae pariatur voluptatum sapiente, sequi
            modi quibusdam sunt magnam repellendus sint aspernatur provident, velit sed incidunt et repellat
            necessitatibus rerum reprehenderit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit magni
            laudantium nihil expedita nobis? Odio incidunt necessitatibus illum sit fugiat itaque, deserunt assumenda?
            Corrupti, nemo ea? Esse, maxime! Impedit, ipsam.</p>
        </div>
        <div class="col-md-4">
          <img src="img/12.jpg" alt="" width="100%" height="100%">
        </div>
        <!-- <div class="col-md-6">
          <h5 class="text-center">MISI</h5>
          Melaksanakan proses belajar mengajar dan bimbingan yang efektif melalui pencapaian nilai nilai keagamaan,
          akhlak dalam berbagai aktifitas.
          <br>
          Mengamalkan sikap hidup saling menghargai, Menghormati, dan menjunjung tinggi perbedaan pendapat untuk
          mencapai kesepakatan melalui musyawarah munfakat
          <br>
          Melaksanakan pendidikan yang berkualitas, dan profesional melalui proses belajar mengajar dan bimbingan yang
          efektif
          <br>
          Melaksanakan pengayaan dan pengembangan mata pelajaran yang di UN-kan dan pengembangan minat dan bakat lewat
          Ekstrakulikuler
          <br>
          Menciptakan lingkungan yang hijau, rindang dan asri melalui kegiatan lomba kelas sehat, K7 dan penataan
          taman
          kelas dan taman sekolah
          <br>
          Melaksanakan proses belajar mengajar berbasis IT, SBK untuk menciptakan lulusan yang terampil dan mampu
          bersaing di era Global.
        </div> -->
      </div>
    </div>
  </section>

  <section class="container mt-5" id="prestasi">
    <div class="bg-light text-justify p-5">
      <h3 class=" text-center prestasi">Prestasi</h3>
      <hr>
      <div class="row">
        <div class="col-md-6">
          <p>
            Juara 1 Olimpiade Matematika Se Kabupaten Ciamis
            <br>
            Juara 1 Dongeng Sunda Se Kabupaten Ciamis
            <br>
            Juara 1 LCC PAI Se Kabupaten Ciamis
            <br>
            Juara 2 LTUB Se Kabupaten Ciamis
          </p>
        </div>
        <div class="col-md-6">
          <p>
            Juara 3 Madya LKBB Se Kabupaten Ciamis
            <br>
            Juara 2 Utama LKBB Galaksi Se Jawa Barat dan Jawa Tengah
            <br>
            Juara 2 Utama LKBB Ragawinis Se Jawa Barat
            <br>
            Juara 2 Bola Voli Putra Se Ciamis Selatan.
          </p>

        </div>
      </div>
    </div>
  </section>


  <h3 class="mt-5 text-center ekstrakulikuler" id="ekstrakulikuler">Ekstrakulikuler</h3>
  <hr>

  <div class="container">
    <div class="row text-center mt-5">
      <div class="col-md-4">
        <i class="fas fa-users h1"></i>
        <h3>Osis</h3>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmsmod
        tempor incididunt ut labore et dolore magna aliqua.
      </div>
      <div class="col-md-4">
        <i class="fas fa-arrows-alt h1"></i>
        <h3>Pramuka</h3>
        lorem ipsum do lor sit amet, consectetur adisipicing elit, sed do eiusmod tempor incididunt ut labore et
        dolore
        magna aliqua.
      </div>
      <div class="col-md-4">
        <i class="fas fa-flag h1"></i>
        <h3>Paskibra</h3>
        lorem ipsum do lor sit amet, consectetur adisipicing elit, sed do eiusmod tempor incididunt ut labore et
        dolore
        magna aliqua.
      </div>
    </div>
    <div class="row text-center mt-5">
      <div class="col-md-4">
        <i class="fas fa-child h1"></i>
        <h3>Drumband</h3>

        lorem ipsum do lor sit amet, consectetur adisipicing elit, sed do eiusmod tempor incididunt ut labore et
        dolore
        magna aliqua.
      </div>
      <div class="col-md-4">
        <i class="fas fa-stethoscope h1"></i>
        <h3>PMR</h3>
        lorem ipsum do lor sit amet, consectetur adisipicing elit, sed do eiusmod tempor incididunt ut labore et
        dolore
        magna aliqua.
      </div>
      <div class="col-md-4">
        <i class="fas fa-futbol h1"></i>
        <h3>Futsal</h3>
        lorem ipsum do lor sit amet, consectetur adisipicing elit, sed do eiusmod tempor incididunt ut labore et
        dolore
        magna aliqua.
      </div>
    </div>
  </div>



  <h3 class="mt-5 text-center galeri" id="galeri">Galeri</h3>
  <hr>

  <div class="container">
    <div class="row text-center mt-5">
      <div class="col-md-4">
        <a href="">
          <img src="img/1.jpg" class="img-thumbnail">
        </a>
      </div>
      <div class="col-md-4">
        <a href="">
          <img src="img/12.jpg" class="img-thumbnail">
        </a>
      </div>
      <div class="col-md-4">
        <a href="">
          <img src="img/3.jpg" class="img-thumbnail">
        </a>
      </div>
    </div>

    <div class="row text-center mt-5">
      <div class="col-md-4">
        <a href="">
          <img src="img/8.jpg" class="img-thumbnail">
        </a>
      </div>
      <div class="col-md-4">
        <a href="">
          <img src="img/14.jpg" class="img-thumbnail">
        </a>
      </div>
      <div class="col-md-4">
        <a href="">
          <img src="img/16.jpg" class="img-thumbnail">
        </a>
      </div>
    </div>
  </div>


  <h3 class="mt-5 mb-3 text-center contact" id="contact">CONTACT US</h3>
  <hr>

  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="form-group">
          <label><strong>NAMA LENGKAP</strong></label>
          <input type="text" name="" class="form-control">
        </div>
        <div class="form-group">
          <label><strong>EMAIL</strong></label>
          <input type="email" name="" class="form-control">
        </div>
        <div class="form-group">
          <label><strong>PESAN</strong></label>
          <textarea type="text" class="form-control" rows="5"> </textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Kirim</button>
      </div>
    </div>

  </div>
@endsection