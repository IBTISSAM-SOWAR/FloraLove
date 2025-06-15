<?php
include 'components/header.php';

if (isset($_POST["edit"])) {
	$image = $_FILES["image"]["name"];
	$dist = "../assets/images/welcome-hero/" . $image;

	$title = $_POST["title"];
	$description = $_POST["description"];

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $dist)) {
		$data = [
			"welcome_section_title" => $title,
			"welcome_section_description" => $description,
			"welcome_section_image" => "welcome-hero/" . $image,
		];
	} else {
		$data = [
			"welcome_section_title" => $title,
			"welcome_section_description" => $description
		];
	}

	update("welcome_section", $data, "welcome_section_id", 1);
	header("location:welcome-section.php?success=Updated Successfully");
}

$welcome_section = selectOne("welcome_section", "welcome_section_id", 1);
?>

<!-- Page Wrapper -->
<div class="page-wrapper">
	<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="page-title">Welcome Section</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
						<li class="breadcrumb-item active">Welcome Section</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Page Header -->

		<div class="row">
			<div class="col-sm-12">
				<form method="post" enctype="multipart/form-data">

					<div class="card p-3">
						<div class="card-body">
							<div class="bank-inner-details">
								<div class="row">
									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<label>Title<span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="title" value="<?php echo $welcome_section["welcome_section_title"] ?>">
										</div>
									</div>

									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<label>Section Image</label>
											<div class="change-photo-btn">
												<div>
													<p>Add Image</p>
												</div>
												<input type="file" class="upload upload-photo" name="image" accept="image/*">
											</div>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 mb-5">
										<div class="change-photo" style="width: 400px;height:200px;background-image: url(../assets/images/<?php echo $welcome_section["welcome_section_image"] ?>);background-size:cover; background-position:center;"></div>
									</div>
									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<label>Description</label>
											<textarea id="editor" name="description">
											<?php echo $welcome_section["welcome_section_description"] ?>
											</textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class=" blog-categories-btn pt-0">
							<div class="bank-details-btn ">
								<button type="submit" name="edit" class="btn btn-primary me-2">Edit</button>
							</div>
						</div>
					</div>

				</form>

			</div>
		</div>

	</div>
</div>
<!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="assets/js/jquery-3.6.0.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>

<!-- Feather Icon JS -->
<script src="assets/js/feather.min.js"></script>

<!-- ckeditor JS -->
<script src="assets/js/ckeditor.js"></script>

<!-- Slimscroll JS -->
<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom JS -->
<script src="assets/js/script.js?v=<?php echo time() ?>"></script>

</body>

</html>