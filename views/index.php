<html>
	<head>
		<title>UPDATE BANK Records</title>
		<link rel="stylesheet" href=./assets/css/bootstrap.css" />
		<script type="text/javascript" src="./assets/js/bootstrap.js"></script>
	</head>
	<body>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4">&nbsp;</div>
				<div class="col-md-4"><h3>PAYMENT DISBURSEMENT </h3>
					<form method="post" action="/testflip/?flip=simpan">
						<div class="form-group">
							<label for="bank_code">Bank Code </label>
							<input type="text" class="form-control" value="bni" id="bank_code" name="bank_code" placeholder="Bank code">
						</div>
						<div class="form-group">
							<label for="account_number">Account Number</label>
							<input type="text" class="form-control" value="1234567890" id="account_number" name="account_number" placeholder="Account Number">
						</div>

						<div class="form-group">
							<label for="amount">Amount</label>
							<input type="text" class="form-control" value="10000" id="amount" name="amount" placeholder="Amount">
						</div>
						<div class="form-group">
							<label for="remark">Remark</label>
							<input type="text" class="form-control" value="bsample remarkni" id="remark" name="remark" placeholder="Remark">
						</div>

						<button type="submit" class="btn btn-default">Submit</button>
					</form>
					<br/>
					<a  href=<"./index.php/?flip=tampil-data">DISPLAY LIST RECORDS</a>
				</div>
				<div class="col-md-4">&nbsp;</div>
			</div>
		</div>
	</body>
</html>