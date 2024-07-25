<?php 

include 'config/db_connect.php';




$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);

	// explode(',', $pizzas[0]['ingredients']);



?>







<!DOCTYPE html>
<html lang="en">
	<?php include 'templates/header.php'; ?>

	<div class="container">
		<div class="row">
		<h4 class="center grey-text">Bestsellers</h4>

			<?php foreach($pizzas as $pizza): ?>

				<div class="col s6 md3">
					<div class="card z-depth-0">
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
							<ul class="grey-text">
								<?php foreach(explode(',', $pizza['ingredients']) as $ing): ?>
									<li><?php echo htmlspecialchars($ing); ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="details.php?id=<?php echo $pizza['id']?>">more info</a>
						</div>
					</div>
				</div>

			<?php endforeach; ?>

		</div>
	</div>
	

    <?php include 'templates/footer.php'; ?>

</html>

<!-- https://www.youtube.com/watch?v=3lpPfEdU-8A&list=PL4cUxeGkcC9gksOX3Kd9KPo-O68ncT05o&index=32 --> HIER GEHTS WEITER 
