<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title"> Request Book List </h4>
				
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="d-flex align-items-center">
								<h4 class="card-title"> Request Book </h4>
								
							</div>
						</div>
						<div class="card-body">
							

							<div class="table-responsive">
								<table id="add-row" class="display table table-striped table-hover" >
									<thead>
										<tr>
											<th> No </th>
											<th> Date </th>
											<th>  Request Books </th>
											<th style="width: 10%">User</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>No</th>
											<th>Date</th>
											<th> Request Books</th>
											<th> User </th>
										</tr>
									</tfoot>
									<tbody>
										<?php 
											$i =0;
											foreach($requests as $request): 
											$i++;

											$id = $request->requestbooks_id;
											$name = $request->requestbooks_title;
											$author = $request->requestbooks_author;
											$description = $request->requestbooks_description;
											$date = $request->requestbooks_date;
											$user = $request->users_name;
											
										?>
										<tr>
											<td> <?php echo $i; ?> </td>
											<td> <?php echo $date; ?> </td>
											<td>
												<h5> Title : <?= $name; ?> </h5>
												<i> Author : <?= $author; ?> </i> <br>
												<p>
													Description : <span class="mt-2" style="font-size: 12px;">  <?= $description; ?> </span>
												</p>
												

											</td>
											<td>
												<?= $user; ?>
											</td>
											
										</tr>

									<?php endforeach; ?>

									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer">
		<div class="container-fluid">
			<nav class="pull-left">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link" href="https://www.themekita.com">
							ThemeKita
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							Help
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							Licenses
						</a>
					</li>
				</ul>
			</nav>
			<div class="copyright ml-auto">
				2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
			</div>				
		</div>
	</footer>
</div>