<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title"> Book List </h4>
			</div>

			<?php if ($this->session->flashdata('success')): ?>
				<div class="row">
					<div class="col-lg-12">
						<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong> SUCCESS! </strong>
						<?php echo $this->session->flashdata('success'); ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    		<span aria-hidden="true">&times;</span>
				  		</button>
					</div>
					</div>
				</div>
			<?php endif; ?>

			<?php if ($this->session->flashdata('delete')): ?>
				<div class="row">
					<div class="col-lg-12">
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong> SUCCESS! </strong>
						<?php echo $this->session->flashdata('delete'); ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    		<span aria-hidden="true">&times;</span>
				  		</button>
					</div>
					</div>
				</div>
			<?php endif; ?>

			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="d-flex align-items-center">
								<h4 class="card-title"> Books </h4>
								<a href="<?php echo base_url('backend/book/create') ?>" class="btn btn-primary btn-round ml-auto">
									<i class="fa fa-plus"></i>
									Add Row
								</a>
							</div>
						</div>
						<div class="card-body">
							

							<div class="table-responsive">
								<table id="add-row" class="display table table-striped table-hover" >
									<thead>
										<tr>
											<th> No </th>
											<th> Title </th>
											<th> Author </th>
											<th> Genre </th>
											<th style="width: 10%">Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th> No </th>
											<th> Title </th>
											<th> Author </th>
											<th> Genre </th>
										</tr>
									</tfoot>
									<tbody>
										<?php 
											$i =0;
											foreach($books as $book): 
											$i++;

											$id = $book->books_id;
											$photo = $book->books_cover;
											$title = $book->books_title;
											$price = $book->books_price;
											$pdf = $book->books_pdf;
											$edition = $book->books_edition;
											$description = $book->books_description;
											$authorsid = $book->books_authorsid;
											$genresid = $book->books_genresid;

											$authorsname = $book->authors_name;
											$genresname = $book->genres_name;

											if ($price) 
											{
												$status = "<span class='text-danger'> ( BUY ) </span>";
											}
											else
											{
												$status = "<span class='text-info'> ( FREE ) </span>";
											}

										?>
										<tr>
											<td> <?php echo $i; ?> </td>
											<td> 
												<?php echo $title; ?>
												<?php echo $status; ?>
											</td>
											<td> <?php echo $authorsname; ?> </td>
											<td> <?php echo $genresname; ?> </td>
											<td>
												<div class="form-button-action">
													<a href="<?php echo base_url('backend/book/detail/'.$id) ?>" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Detail">
														<i class="fa fa-eye"></i>
													</a>

													<a href="<?php echo base_url('backend/book/edit/'.$id) ?>" data-toggle="tooltip" title="" class="btn btn-link btn-warning btn-lg" data-original-title="Edit Task">
														<i class="fa fa-edit"></i>
													</a>
													<a href="<?php echo base_url('backend/book/delete/'.$id) ?>" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
														<i class="fa fa-times"></i>
													</a>
												</div>
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