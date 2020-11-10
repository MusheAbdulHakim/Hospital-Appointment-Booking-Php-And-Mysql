<?php 
	include_once 'templates/includes/config.php';
	if (isset($_POST['comment'])) {
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$comment = htmlspecialchars($_POST['message']);
		$sql = "INSERT into comments(Name,Email,Comment)
		values(:name,:email,:comment)";
		$query = $dbh->prepare($sql);
		$query->bindParam(':name',$name,PDO::PARAM_STR);
		$query->bindParam(':email',$email,PDO::PARAM_STR);
		$query->bindParam(':comment',$comment,PDO::PARAM_STR);
		$query->execute();
		$lastInsertId = $dbh->lastInsertId();
			if ($lastInsertId>0) {
						echo 'successfully commented.';
						echo "<script>window.location.href='blog-details.php';</script>";
					}
			else{
						echo "something went wrong .Please try again.";
					}
		}


 ?>
<!DOCTYPE html>
<html lang="en">
<?php 
				$title = "Blog";
				require_once("templates/head.php");
		 ?>

<body id="page-top">
	<?php 
						// header section
						require_once("templates/includes/header.php");
						require_once("templates/includes/nav.php");

				 ?>
	<section class="blog-headding">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="header-content">
						<div class="header-content-inner">
							<p>Featured News</p>
							<h1>Our Blog Post</h1>
							<div class="ui breadcrumb">
								<a href="index-2.php" class="section">Home</a>
								<div class="divider"> / </div>
								<div class="active section">Blog</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog Section -->
	<section id="blog" class="blog-inner">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8">
					<div class="blog-post">
						<img src="images/blog-details.jpg" class="img-responsive" alt="img">
						<div class="content-box">
							<div class="date-box">
								<div class="inner">
									<div class="date">
										<b>28</b> jan
									</div>
									<div class="comment">
										<i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i> 3
									</div>
								</div>
							</div>
							<div class="post-inner">
								<span>Tag: <a href="blog-details.php">lawn, garden</a></span>
								<h3>Lates blog post with image</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
									standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
									a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
									remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
									Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions
									of Lorem Ipsum.</p>
								<div class="article blog-art">
									<p>All the lorem ipsum generators on the internet tend to repeat predefined chunks as necessary, making this the first true on the Internet. uses a dictionary of over.</p>
									<div class="customers"> - Mozammel Hoque,<span> Advisor</span></div>
								</div>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
									standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
									a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
									remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
									Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions
									of Lorem Ipsum.</p>
							</div>
						</div>
					</div>
					<div class="btn-inner">
						<div class="btn-group">
							<button type="button" class="btn btn-np"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Next</button>
							<button type="button" class="btn btn-np">Preview &nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></button>
						</div>
						<div class="social">
							<ul>
								<li>Share :</li>
								<li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-lg fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-lg fa-vimeo-square"></i></a></li>
								<li><a href="#"><i class="fa fa-lg fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-lg fa-skype"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- Comments -->
					
					<div class="comments-container">
						<h2>COMMENTS (3)</h2>
						<ul id="comments-list" class="comments-list">
							<?php
							$sql = "SELECT * FROM comments";
							$query = $dbh->prepare($sql);
							$query->execute();
							$results=$query->fetchAll(PDO::FETCH_OBJ);
							$cnt=1;
							if($query->rowCount() > 0)
							{
							foreach($results as $row)
							{	
						?>
							<li>
								<div class="comment-main-level">
									<!-- Avatar -->
									<div class="comment-avatar"><img src="images/comment-1.jpg" alt=""></div>
									<div class="comment-box">
										<div class="comment-content">
											<div class="comment-header"> <cite class="comment-author">- <?php echo htmlentities($row->Name); ?></cite>
												<time datetime="2012-10-27" class="comment-datetime"><?php echo htmlentities($row->date); ?></time>
											</div>
											<p><?php echo htmlentities($row->Comment); ?></p>
											
										</div>
									</div>
								</div>
							</li><?php $cnt+=1;
										}
									}?>
						</ul>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="post-widget details-post">
						<h4 class="blog-title">Recent-Post</h4>
						<ul>
							<li>
								<a href="#"><img src="images/footer-post-1.jpg" alt=""></a>
								<h5><a href="#">Healthy Lifestyle Tips</a></h5>
								<span class="post-date">Oct 6, 2016</span>
							</li>
							<li>
								<a href="#"><img src="images/footer-post-2.jpg" alt=""></a>
								<h5><a href="#">Child Care</a></h5>
								<span class="post-date">Oct 6, 2016</span>
							</li>
							<li>
								<a href="#"><img src="images/footer-post-3.jpg" alt=""></a>
								<h5><a href="#">Daily Exersise Is Essential</a></h5>
								<span class="post-date">Oct 6, 2016</span>
							</li>
						</ul>
					</div>
					
					<!-- tags -->
					<div class="tags">
						<h4 class="blog-title">Tags</h4>
						<a href="#form" class="thm-btn btn-tags">Hospital</a>
						<a href="#form" class="thm-btn btn-tags">Medical</a>
						<a href="#form" class="thm-btn btn-tags">Doctor</a>
						<a href="#form" class="thm-btn btn-tags">Treatment</a>
						<a href="#form" class="thm-btn btn-tags">Patient</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Comment Form -->
	<section class="comment-form">
		<div class="container">
			<div class="col-sm-8">
				<h3>LEAVE A COMMENT</h3>
				<form method="POST">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Mushe Abdul-Hakim" required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="musheabdulhakim99@gmail.com" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<textarea required class="form-control" id="message" name="message" placeholder="tis is my comment" rows="5"></textarea>
					</div>
					<button name="comment" class="thm-btn page-scroll">Submit</button>
				</form>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</section>
	<!-- Footer Section -->
	<?php 
		include_once 'templates/includes/footer.php';
		// javascripts
		include_once 'templates/scripts.php';
	 ?>
</body>

</html>