				<form method="post" action="" >
						<div class="uniform" >
							<div class="12u$ 12u(small)">
								<input type="text" name="telpon" id="text" value="" placeholder="Masukkan nomor Anda" />
								<input type="submit" name ="submit" value="Cek" class="button special icon fa-search" />
								<button type="reset"> Reset </button>
							</div>
						</div>
				</form></p>
		
			<section id="one" class="wrapper">
				<div class="inner">
				<div class="display">
				  <?php
				  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
				if ($_POST["submit"]) {
					$_POST["telpon"] = str_replace(' ',' ', $_POST["telpon"]); 
				   $url = "http://apilayer.net/api/validate?access_key=5f2c13a5351c998300c0ca3600b810fc&number=".$_POST["telpon"]."&country_code=ID&format=1";
				   $content = file_get_contents($url);
					$json = json_decode($content, TRUE);
					$nomor = $json['number'];
					if (!(isset($nomor))){
						echo "<h2>Nomor telpon yang anda masukkan salah atau tidak ada koneksi, coba lagi !!</h2>";
					}
					else{
					$telfon = array($json);

				?>

				</div>
					<div class="flex flex-3">
						<article>
							<div class="box person">
							<h3>Number : </h3> 
							<p><?php echo $telfon[0]['number'] ?></p>
							</div>
						</article>
						<article>
							<div class="box person">
							<h3>Lokal Format : </h3>
							<p><?php echo $telfon[0]['local_format'] ?></p>
							</div>
						</article>
						<article>
							<div class="box person">
							<h3>Internasional Format : </h3>
							<p><?php echo $telfon[0]['international_format'] ?></p>
							</div>
						</article>
						<article>
							<div class="box person">
							<h3>Country Prefix : </h3>
							<p><?php echo $telfon[0]['country_prefix'] ?></p>
							</div>
						</article>
						<article>
							<div class="box person">
							<h3>Country code : </h3>
							<p><?php echo $telfon[0]['country_code'] ?></p>
							</div>
						</article>
						<article>
							<div class="box person">
							<h3>Country name : </h3>
							<p><?php echo $telfon[0]['country_name'] ?></p>
							</div>
						</article>
						<article>
							<div class="box person">
							<h3>location : </h3>
							<p><?php echo $telfon[0]['location'] ?></p>
							</div>
						</article>
						<article>
							<div class="box person">
							<h3>Carrier : </h3>
							<p><?php echo $telfon[0]['carrier'] ?></p>
							</div>
						</article><article>
							<div class="box person">
							<h3>Type Line : </h3>
							<p><?php echo $telfon[0]['line_type'] ?></p>
							</div>
						</article>

					
				</div>
			</section>
<?php
	}
				}