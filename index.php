<?php

require_once __DIR__. '/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Oriented Programming</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d3a966ac98.js" crossorigin="anonymous"></script>
</head>
<body>

    <header>
        <div class="container text-center py-4">
            <h1>Movies</h1>
        </div>
    </header>

    <main>
		<div class="container text-center">

			<div class="row justify-content-center">
				<div class="col-5">
					<div class="card mb-3">
							<div class="card-header">
								<h2><?= $movie1->title; ?></h2>
							</div>
							<div class="card-body">
								<ul class="p-0 list-unstyled">
									<li>
										<strong>Regia:</strong> <?= $movie1->getDirectorFullName();  ?>
									</li>
									<li>
										<strong>Anno:</strong> <?= $movie1->year; ?>
									</li>
									<li>
										<strong>Genere:</strong> <?= $movie1->genre; ?>
									</li>
									<li>  
										<strong>Valutazione:</strong>
										<?php
										for ($i = 0; $i < $movie1->getRoundRating(); $i++) {
										?>
										<i class="fa-solid fa-star text-warning"></i>
										<?php
										}
										?>
										<?php
										for ($i = 0; $i < 10 - $movie1->getRoundRating() ; $i++) {
										?>
										<i class="fa-regular fa-star text-warning"></i>
										<?php
										}
										?>
									</li>
								</ul>
						</div>
					</div>
				</div>

				
				<div class="col-5">
					<div class="card mb-3">
						<div class="card-header">
							<h2><?= $movie2->title; ?></h2>
						</div>
						<div class="card-body">
							<ul class="p-0 list-unstyled">
								<li>
									<strong>Regia:</strong> <?= $movie2->getDirectorFullName();  ?>
								</li>
								<li>
									<strong>Anno:</strong> <?= $movie2->year; ?>
								</li>
								<li>
									<strong>Genere:</strong> <?= $movie2->genre; ?>
								</li>
								<li>  
									<strong>Valutazione:</strong>
									<?php
									for ($i = 0; $i < $movie2->getRoundRating(); $i++) {
									?>
									<i class="fa-solid fa-star text-warning"></i>
									<?php
									}
									?>
									<?php
									for ($i = 0; $i < 10 - $movie2->getRoundRating() ; $i++) {
									?>
									<i class="fa-regular fa-star text-warning"></i>
									<?php
									}
									?>
								</li>
							</ul>
						</div>
					</div>
				</div>
			
				<div class="col-5">
					<div class="card mb-3">
						<div class="card-header">
							<h2><?= $movie3->title; ?></h2>
						</div>
						<div class="card-body">
							<ul class="p-0 list-unstyled">
								<li>
									<strong>Regia:</strong> <?= $movie3->getDirectorFullName();  ?>
								</li>
								<li>
									<strong>Anno:</strong> <?= $movie3->year; ?>
								</li>
								<li>
									<strong>Genere:</strong> <?= $movie3->genre; ?>
								</li>
								<li>  
									<strong>Valutazione:</strong>
									<?php
									for ($i = 0; $i < $movie3->getRoundRating(); $i++) {
									?>
									<i class="fa-solid fa-star text-warning"></i>
									<?php
									}
									?>
									<?php
									for ($i = 0; $i < 10 - $movie3->getRoundRating() ; $i++) {
									?>
									<i class="fa-regular fa-star text-warning"></i>
									<?php
									}
									?>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-5">
					<div class="card mb-3">
						<div class="card-header">
							<h2><?= $movie4->title; ?></h2>
						</div>
						<div class="card-body">
							<ul class="p-0 list-unstyled">
								<li>
									<strong>Regia:</strong> <?= $movie4->getDirectorFullName();  ?>
								</li>
								<li>
									<strong>Anno:</strong> <?= $movie4->year; ?>
								</li>
								<li>
									<strong>Genere:</strong> <?= $movie4->genre; ?>
								</li>
								<li>  
									<strong>Valutazione:</strong>
									<?php
									for ($i = 0; $i < $movie4->getRoundRating(); $i++) {
									?>
									<i class="fa-solid fa-star text-warning"></i>
									<?php
									}
									?>
									<?php
									for ($i = 0; $i < 10 - $movie4->getRoundRating() ; $i++) {
									?>
									<i class="fa-regular fa-star text-warning"></i>
									<?php
									}
									?>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>

		
		</div>
    </main>


    
</body>
</html>