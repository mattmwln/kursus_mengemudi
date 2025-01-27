<?= $this->extend('layouts/app');?>

<?= $this->section('content');?>
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
            <div class="col-lg-8 ftco-animate">
                <<div class="text w-100 text-center mb-md-5 pb-md-5">
                    <h1 class="mb-4">Mudah &amp; Cepat Belajar Mengemudi</h1>
                    <p style="font-size: 18px;">ANDA INGIN BISA MENGEMUDI? Angel's Driving School memiliki tim yang profesional dan berpengalaman di bidangnya sehingga tidak diragukan lagi.Rasakan Nikmatnya Berkendara Bersama Kami</p>
                    <a href="https://www.youtube.com/watch?v=gWl8waj0mzM" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center" target="_blank">
                      <div class="icon d-flex align-items-center justify-content-center">
                          <span class="ion-ios-play" id="register"></span>
                      </div>
                      <div class="heading-title ml-5">
                          <span>Langkah mudah untuk belajar mengemudi</span>
                      </div>
                    </a>
                </div>
            </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-12	featured-top">
    				<div class="row no-gutters">
	  					<div class="col-md-4 d-flex align-items-center">
	  						<form action="<?= base_url('checkout'); ?>" class="request-form ftco-animate bg-primary" method="POST">
		          		        <h2>Pilih Jadwal dan Paketmu</h2>
			    				<div class="form-group">
			    					<label for="name" class="label">Nama</label>
			    					<input type="text" name="name" class="form-control" placeholder="Nama kamu...">
			    				</div>

			    				<div class="form-group">
			    					<label for="" class="label">Alamat</label>
			    					<input type="text" name="address" class="form-control" placeholder="Nomor Whatsapp/Hp kamu...">
			    				</div>

			    				<div class="d-flex">
                                    <div class="form-group mr-2">
                                        <label for="" class="label">Jenis Kelamin</label>
                                        <select name="gender" id="" class="form-control">
                                            <option value="" class="text-dark">Pilih</option>
                                            <option value="Laki-laki" class="text-dark">Laki-laki</option>
                                            <option value="Perempuan" class="text-dark">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="" class="label">Nomor Hp</label>
                                        <input type="text"  name="no_hp" class="form-control" placeholder="Nomor Hp...">
                                    </div>
		                        </div>
                                <div class="form-group">
                                    <label for="" class="label">Paket Yang Mau Dibeli</label>
                                    <select name="schedule_id" id="" class="form-control">
                                        <option value=""  class="text-dark">Pilih</option>
                                        <?php foreach ($schedules as $schedule): ?>
                                            <option value="<?= $schedule['id']; ?>" class="text-dark"><?= esc($schedule['getCourse']->name); ?> - <?= date('d F Y', strtotime($schedule['schedule_date'])); ?> - <?= esc($schedule['getInstructor']->name)?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-secondary py-3 px-4">Daftar</button>
                                </div>
			    			</form>
	  					</div>

	  					<div class="col-md-8 d-flex align-items-center">
                            <div class="services-wrap rounded-right w-100">
                                <h3 class="heading-section mb-4">Cara Mudah Belajar Mengemudi dengan Kami</h3>
                                <div class="row d-flex mb-4">
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Pilih Instruktur Belajar Anda</h3>
                                            </div>
                                        </div>      
                                    </div>
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Pilih Paket Kursus Terbaik</h3>
                                            </div>
                                        </div>      
                                    </div>
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Pesan Jadwal Belajar Anda</h3>
                                            </div>
                                        </div>      
                                    </div>
                                </div>
                                
                            </div>
                        </div>
	  				</div>
				</div>
  		</div>
    </section>

    <section class="ftco-section ftco-about" id="about">
      <div class="container">
          <div class="row no-gutters">
              <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
              </div>
              <div class="col-md-6 wrap-about ftco-animate">
                  <div class="heading-section heading-section-white pl-md-5">
                      <span class="subheading">Tentang Kami</span>
                      <h2 class="mb-4">Selamat Datang di Angel's Driving School</h2>

                      <p>Angel's Driving School kursus mengemudi di Palembang adalah satu-satunya kursus mengemudi terbaik dipalembang. Kami memberikan layanan terbaik sebagai jaminan kepuasan Anda. Metode kami bisa mengajari anda cara mengemudi dalam waktu singkat, iya dalam waktu singkat kami pastikan anda mengemudi mobil sendiri ke tempat aktivitas anda, ke kantor, ke kampus, atau kemana saja, dan itu akan mengejutkan teman-teman anda. Metode kami sudah terbukti membantu ribuan orang dan ratusan perusahaan. Dan kami juga siap membantu anda sekarang.</p>
                      <ul class="list-unstyled">
                          <li><i class="bi bi-check-circle text-white"></i> <strong class="text-white">Keselamatan NO.1</strong></li>
                          <li><i class="bi bi-check-circle text-white"></i> <strong class="text-white">Waktu belajar yang fleksibel</strong></li>
                          <li><i class="bi bi-check-circle text-white"></i> <strong class="text-white">Instruktur ramah dan terpercaya</strong></li>
                          <li><i class="bi bi-check-circle text-white"></i> <strong class="text-white">Harga terjangkau</strong></li>
                      </ul>
                      <p><a href="#register " class="btn btn-primary py-3 px-4">Daftar Sekarang</a></p>
                  </div>
              </div>
              </div>
          </div>
    </section>


    <section class="ftco-section ftco-no-pt bg-light" id="services">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Layanan Kami</span>
            <h2 class="mb-2">Pilihan Paket Belajar Unggulan</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="carousel-car owl-carousel">
    					<?php foreach($courses as $course):?>
                <div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end" style="background-image: url(images/car-1.jpg);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#"><?= $course['name'] ?></a></h2>
		    						<div class="d-flex mb-2">
			    						<span class="cat"><?= $course['description']?></span>
		    						</div>
                    <p class="price ml-auto">Rp <?= number_format($course['price'], 0, ',', '.'); ?><span>/Paket</span></p>
		    						<p class="d-flex mb-0 d-block"><a href="#register" class="btn btn-primary py-2 mr-1">Book now</a></p>
		    					</div>
		    				</div>
    					</div>
              <?php endforeach;?>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-counter ftco-section img bg-light" id="section-counter">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row">
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="800">0</strong>
                <span>Siswa <br>Pertahun</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="12">0</strong>
                <span>Tahun <br>Pengalaman</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="154">0</strong>
                <span>Mendapatkan <br>Penghargaan</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="20">0</strong>
                <span>Instruktur</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>	


	<section class="ftco-section" >>
			<div class="container">
				<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Instruktur</span>
            <h2 class="mb-3">Kami Memiliki Instruktur Berpengalaman</h2>
          </div>
        </div>
				<div class="row">
            <?php foreach($instructors as $instructor): ?>
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <img src="<?= base_url($instructor['image']); ?>" alt="Instructor Image">
                        </div>
                        <div class="text w-100">
                            <h3 class="heading mb-2"><?= $instructor['name'] ?></h3>
                            <h6><?= $instructor['expertise']?></h6>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
			</div>
	</section>

	<section class="ftco-section ftco-intro" style="background-image: url(images/bg_3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-md-6 heading-section heading-section-white ftco-animate">
            <h2 class="mb-3">Ingin Dapat Keuntungan Bersama Kami? Jadi, Jangan Terlambat.</h2>
            <a href="#" class="btn btn-primary btn-lg">Menjadi Pengemudi</a>
          </div>
				</div>
			</div>
	</section>

    <section class="ftco-section testimony-section bg-light" id="testi">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-3">Kata Mereka Tentang Kami</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/person_3.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Fasilitas bagus dan membuat nyaman, Instruktur rapi dan disiplin sehingga membuat proses belajar lebih cepat.</p>
                    <p class="name">Eunwoo</p>
                    <span class="position">Marketing</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/person_2.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Instruktur baik dan sabar sehingga mudah mengerti dan cepat belajar.</p>
                    <p class="name">Lisa</p>
                    <span class="position">Mahasiswa</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/person_4.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Instrukturny tampan dan mempesona sehingga membuat nyaman untuk belajar .</p>
                    <p class="name">Kang Bitna</p>
                    <span class="position">Mahasiswa</span>
                  </div>
                </div>
              </div>
            
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Harga murah tapi pelayanan dan fasilitas terbaekkkk!!.</p>
                    <p class="name">Sunghoon</p>
                    <span class="position">Karyawan Swasta</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    


<?= $this->endSection();?>