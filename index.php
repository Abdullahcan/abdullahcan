<?php include 'header.php'; ?>
	<div class="container">

		<div class="row" id="anasayfa">
			<div class="col-md-6 col-12 mt-2">
				<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="https://i2.milimaj.com/i/milliyet/75/730x600/62a2c7f486b24525386ef497.jpg" class="d-block w-100">
						</div>
						<div class="carousel-item">
							<img src="https://i2.milimaj.com/i/milliyet/75/730x600/62a2c42c86b24525386ef47d.jpg" class="d-block w-100">
						</div>
						<div class="carousel-item">
							<img src="https://i2.milimaj.com/i/milliyet/75/730x600/62a2c57b86b24403c42ede71.jpg" class="d-block w-100">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>

			<div class="col-md-3 col-12 mt-4">
				<h3 class="text-center">Haberler</h3>
				<div class="card" aria-hidden="true">
					<img src="https://i2.milimaj.com/i/milliyet/75/350x0/62a2f02386b24525386ef5ce.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title placeholder-glow mt-3">
							Genç futbolcu kalp krizinden vefat etti!
						</h5>
						<p class="card-text mt-3">
							<?php echo substr("Bölgesel Amatör Lig’de bulunan Yenisehir Belediyespor’da defansın solunda görev alan başarılı futbolcu Barış Demir (27) ikamet ettiği Bursa’nın Yıldırım ilçesi Samanlı Mahallesi'ndeki evinde kalp krizi geçirerek hayatını kaybetti.", 0,69) ?>...
						</p>
						<a target="_blank" href="https://www.milliyet.com.tr/skorer/genc-futbolcu-kalp-krizinden-vefat-etti-6770682" tabindex="-1" class="mt-3 btn btn-primary col-6">Haberi Oku</a>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-12 mt-4">
				<h3 class="text-center">Blog</h3>
				<div class="card" aria-hidden="true">
					<img src="https://miro.medium.com/max/760/1*IpJblEKT0Rbrg61W_LM0-A.png" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title placeholder-glow mt-4">
							Angular v14 is now available!
						</h5>
						<p class="card-text placeholder-glow mt-3">
							<?php echo substr("We are excited to announce the release of Angular v14! From typed forms and standalone components to new primitives in the Angular CDK (component dev kit), we’re excited to share how each feature makes Angular more powerful.", 0,69) ?>...
						</p>
						<a target="_blank" href="https://blog.angular.io/angular-v14-is-now-available-391a6db736af" tabindex="-1" class="btn btn-primary col-6 mt-3">Haberi Oku</a>
					</div>
				</div>
			</div>
		</div>
		<hr>

		<section class="py-2" id="hakkimda">
			<div class="row">
				<div class="col-md-6 col-12">
					<h3 class="text-center">Hakkımda <span style="color: rgba(0,0,0,.3);font-size: 10px">(Örnek Yazı)</span></h3>
					<div class="text-center">
						<p>Abdullahcan Elibol, 2014 yılından bu yana tüm yaratıcılığı ve deneyimiyle, Türkiye’de hizmet vermektedir.
							<br><br>
							Türkiyede'de web tasarım, web yazılım, kurumsal kimlik çalışmaları, seo optimizasyonu ve e-ticaret sistemleri konularında, deneyimli ve sürekli gelişen kadrosuyla müşterilerinin web dünyasındaki ihtiyaçlarını karşılamaktadır. Sizler için en doğru olan tasarım ve yazılımları karşılıklı iletişim halinde geliştirmektedir.
						</p>
						<button type="button" class="collapsible">Devamını Oku</button>
						<div class="content">
							<p>Abdullahcan Elibol web site tasarım ve yazılımlarında işlevsellik ve görselliği birlikte kullanarak; en son teknolojilere uyumlu, mobil ortamlarda çalışabilen ve kolay erişilebilir çalışmalar ortaya koymaktadır. Müşteri memnuniyetini temel alarak sürekli gelişimi hedeflemektedir.
								<br><br>
							Siz hayal edin, biz hayata geçirelim !</p>
						</div>

					</div>

				</div>
				<div class="col-md-6 col-12">
					<img class="w-100 hak-resim" src="https://www.teahub.io/photos/full/336-3369055_software-development.jpg">
				</div>
			</div>
		</section>

		<hr>

		<section id="haberler">
			<h3 class="text-center">Haberler</h3>
			<div class="row">
				<div class="col-md-4 mt-2">
					<div class="card" aria-hidden="true">
						<img src="https://i2.milimaj.com/i/milliyet/75/350x0/62a2f06786b24a0ac4e04154.jpg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title placeholder-glow">
								<?php echo substr("81 ile düğün, nişan, asker uğurlaması genelgesi!", 0,40) ?>...
							</h5>
							<p class="card-text placeholder-glow">
								<?php echo substr("İçişleri Bakanlığından düğün, nişan, asker uğurlaması etkinlikler için “Mutluluğa Kurşun Sıkma Geleceği Karartma” uyarısı geldi.", 0,69) ?>...
							</p>
							<a href="https://www.milliyet.com.tr/gundem/81-ile-dugun-nisan-asker-ugurlamasi-genelgesi-6770684" tabindex="-1" class="btn btn-primary col-6">Haberi Oku</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 mt-2">
					<div class="card" aria-hidden="true">
						<img src="https://i2.milimaj.com/i/milliyet/75/350x0/62a2ea8686b2470fb4e23bf9.jpg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title placeholder-glow">
								<?php echo substr("Antalya! Kaçak yapıların altından tarih çıktı", 0,40) ?>...
							</h5>
							<p class="card-text placeholder-glow">
								<?php echo substr("Antalya'nın Manavgat ilçesindeki Side Antik Kenti'nde kazılar devam ediyor. Kaçak yapıların yıkıldığı bölgede, 2'nci yüzyılda kullanılan, 6 dönümlük uluslararası ticaret alanı olan liman agorası ve 170 metrelik liman caddesi ortaya çıkarıldı.", 0,69) ?>...
							</p>
							<a href="https://www.milliyet.com.tr/gundem/yer-antalya-kacak-yapilarin-altindan-tarih-cikti-6770667" tabindex="-1" class="btn btn-primary col-6">Haberi Oku</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 mt-2">
					<div class="card" aria-hidden="true">
						<img src="https://i2.milimaj.com/i/milliyet/75/350x0/62a2e9f986b24525386ef597.jpg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title placeholder-glow">
								<?php echo substr("Tavuklarını beslemek için kümese gittiğinde şaşkına döndü! Balıkçı ağıyla yakalandı.", 0,40) ?>
							</h5>
							<p class="card-text placeholder-glow">
								<?php echo substr("Bolu'da süs tavuğu beslenen çiftliğe inen vaşak, ekiplerin yarım saatlik çalışması neticesinde balıkçı ağıyla yakalanarak koruma altına alındı..", 0,69) ?>
							</p>
							<a href="https://www.ahaber.com.tr/galeri/yasam/tavuklarini-beslemek-icin-kumese-gittiginde-saskina-dondu-balikci-agiyla-yakalandi?utm_source=milliyet.com.tr&utm_medium=partner_dt" tabindex="-1" class="btn btn-primary col-6">Haberi Oku</a>
						</div>
					</div>
				</div>
			</div>

		</section>

		<hr>

		<section id="blog">
			<h3 class="text-center">Blog</h3>
			<div class="row">
				<div class="col-md-4 mt-2">
					<div class="card" aria-hidden="true">
						<img src="https://miro.medium.com/fit/c/224/224/1*9__sgBke0O7iSahS7OLQTQ.jpeg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title placeholder-glow">
								<?php echo substr("10 Things I Would Have Liked To Know When I Started Working as a Software Engineer", 0,40) ?>...
							</h5>
							<p class="card-text placeholder-glow">
								<?php echo substr("The first job as a Software Engineer is one of the most exciting and stressful moments of your career. The work environment is nothing like university. ", 0,69) ?>...
							</p>
							<a href="https://medium.com/@AxelDietrichDev/10-things-i-would-have-liked-to-know-when-i-started-working-as-a-software-engineer-8c4401fcdedf?source=topics_v2---------0-84--------------------8ea2981c_1646_4b64_ad5d_43452f0ebbc7-------19" tabindex="-1" class="btn btn-primary col-6">Blog Oku</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 mt-2">
					<div class="card" aria-hidden="true">
						<img src="https://miro.medium.com/fit/c/224/224/0*QxNl-6K4E2SfZcPq" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title placeholder-glow">
								<?php echo substr("How to Easily Automate Emails with Python", 0,40) ?>...
							</h5>
							<p class="card-text placeholder-glow">
								<?php echo substr("Automate boring emails with Python — Do you know what most office jobs have in common? In most of them, you have to send emails regularly. It doesn't matter if you’re a programmer, data scientist, or engineer, chance", 0,69) ?>...
							</p>
							<a href="https://medium.com/towards-data-science/how-to-easily-automate-emails-with-python-8b476045c151?source=topics_v2---------1-84--------------------8ea2981c_1646_4b64_ad5d_43452f0ebbc7-------19" tabindex="-1" class="btn btn-primary col-6">Blog Oku</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 mt-2">
					<div class="card" aria-hidden="true">
						<img src="https://miro.medium.com/fit/c/224/224/1*BbIUW2MoZ8b2MnqIYHMSiQ.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title placeholder-glow">
								<?php echo substr("Atom Text Editor is Dying. Long Live IDEs", 0,40) ?>...
							</h5>
							<p class="card-text placeholder-glow">
								<?php echo substr("The End of Atom Text Editor is here — Just yesterday, on June 8, 2022, GitHub announced on their blog Atom’s end-of-life, on December 15. All of the Atom organization's projects will be archived for its official “sunset” ", 0,69) ?>...
							</p>
							<a href="https://medium.com/better-programming/atom-text-editor-is-dying-long-live-ides-3d1d35ff4e7e?source=topics_v2---------2-84--------------------8ea2981c_1646_4b64_ad5d_43452f0ebbc7-------19" tabindex="-1" class="btn btn-primary col-6">Blog Oku</a>
						</div>
					</div>
				</div>
			</div>

		</section>

		<hr>

		<hr>

		<section id="galeri">
			<h3 class="text-center">Wallpaper</h3>
			<div class="row mb-2">
				<div class="col-md-3 col-6 mt-2">
					<img class="w-100 rounded" src="https://i.pinimg.com/originals/8b/aa/5b/8baa5bb80ce306685aa46505ed299153.png">
				</div>
				<div class="col-md-3 col-6 mt-2">
					<img class="w-100 rounded" src="https://wallpaperaccess.com/full/1102003.jpg">
				</div>
				<div class="col-md-3 col-6 mt-2">
					<img class="w-100 rounded" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQIaWAtYlOIPxfzRNoiGJMUEkd1t3xZhAqLA&usqp=CAU">
				</div>
				<div class="col-md-3 col-6 mt-2">
					<img class="w-100 rounded" src="https://wallup.net/wp-content/uploads/2017/11/17/211356-programmer-life-748x468.jpg">
				</div>
			</div>

		</section>
	<?php include 'footer.php'; ?>