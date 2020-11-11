<?php 
	if (isset($_POST['submit'])) {
		$fullname = htmlspecialchars($_POST['fullname']);
		$phone = htmlspecialchars($_POST['mobile']);
		$email = htmlspecialchars($_POST['email']);
		$from_date = htmlspecialchars($_POST['from_date']);
		$to_date = htmlspecialchars($_POST['to_date']);
		$sql = "INSERT into appointments(Name,Phone,Email,From_date,To_date)values(:name,:phone,:email,:from_date,:to_date)";
		$query = $dbh->prepare($sql);
		$query->bindParam(':name',$fullname,PDO::PARAM_STR);
		$query->bindParam(':phone',$phone,PDO::PARAM_STR);
		$query->bindParam(':email',$email,PDO::PARAM_STR);
		$query->bindParam(':from_date',$from_date,PDO::PARAM_STR);
		$query->bindParam(':to_date',$to_date,PDO::PARAM_STR);
		$query->execute();
		$lastinsertid = $dbh->LastInsertId();
		if ($lastinsertid>0) {
			echo "<script>alert('You appointment has been sent');</script>";
		}else{
			cho "<script>alert('Something went wrong.please try again.');</script>";
		}

	}

 ?>
<div class="col-sm-6 col-md-4">
					<div id="form" class="form-area">
						<form method="POST">
							<div class="form-padding">
								<h4>Appointment form</h4>
								<div class="form-group">
									<label>FULL NAME</label>
									<input type="text" class="form-control" id="name" name="fullname" placeholder="FULL Name">
								</div>
								<div class="form-group">
									<label>PHONE NUMBER</label>
									<input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number">
								</div>
								<div class="form-group">
									<label>EMAIL ADDRESS</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>FROM</label>
											<input type="text" class="form-control" value="<?php echo date('d-M-yy');?>" id="datepicker" name="from_date">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>TO DATE</label>
											<input type="text" class="form-control" id="datepicker2" name="to_date" placeholder="To">
										</div>
									</div>
								</div>
								
							</div>
							<div class="form-footer">
								<button type="button" id="submit" name="submit" class="btn thm-btn">SUBMIT</button>
							</div>
						</form>
					</div>
				</div>