<?php include 'header.php' ?>

	<div id="content"></div>


	<?php include 'about.php' ?>



		<div id="numbers">
			<div class="bloco">
				<img src="assets/imagens/projects-completed-logo.png" class="projlogo">
				<p class="p_num">548</p><br/>
				<p>projects completed</p>
			</div>

			<div class="bloco">
				<img src="assets/imagens/clock_project.png" class="projlogo">
				<p class="p_num">1465</p><br/>
				<p>working hours</p>
			</div>

			<div class="bloco">
				<img src="assets/imagens/star_project.png" class="projlogo">
				<p class="p_num">612</p><br/>
				<p>positive feedback</p>
			</div>

			<div class="bloco">
				<img src="assets/imagens/heart_project.png" class="projlogo">
				<p class="p_num">735</p><br/>
				<p>happy clients</p>
			</div>
		</div>

		<div id="work">
			<div class="bloc_1"></div>
			<div class="bloc_1"></div>
			<div class="bloc_black">
				<img src="assets/imagens/eye.png">
			</div>
			<div class="bloc_2"></div>
		</div>

		<div id="work_process">
			<p>load more work</p>
		</div>

		<div id="work_video">
			<div class="video_text">
				<h1>Our Work Process</h1>
				<p>Was years it seasons was there form he in in them together over that, 
					third sixth gathered female creeping bearing behold years.
				</p>
			</div>

			<video width="1168" height="571" controls="controls">
				<source src="assets/videos/Universidade XTI - JavaScript - 02 - Hello World! (720p_30fps_H264-192kbit_AAC).mp4" type="video/mp4">
			</video>
		</div>

		<?php include 'services.php' ?>

		<?php include 'galeria.php' ?>


		<div class="project">
			<h1>Need a Project?</h1>
			<p>Let us know what you're looking for in an agency. We'll take a look and see <br/>
				if this could be the start of something beautiful.
			</p>

			<form action="#">
				<div>
					<input type="text" name="nome" placeholder="Your name"/>
					<input type="text" name="email" placeholder="Your email"/>
				</div>

				<div class="title">
					<input type="text" name="title" placeholder="Your title"/>
				</div>

				<div>
					<textarea placeholder="Your Comment"></textarea>
				</div>

				<div class="botao">
					<input type="submit" name="btn" value="Send Message" class="btn">
				</div>
			</form>
		</div>

		<?php include 'footer.php' ?>