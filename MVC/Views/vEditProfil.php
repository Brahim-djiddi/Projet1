<div class="col-lg-6">
	<form method="post">
		<div class="card mb-5 ">
			<div class="card-body">

				<div class="row mb-3">

					<div class="col-sm-12 text-secondary">
						<span class="Err" id="ErrCode"> <?= $variables["errors"]["last_name"] ?? "" ?> </span>
						<label class="mb-1" for="">Nom</label>
						<input type="text" name="last_name" class="form-control" value="<?= $variables["user"]["LastName"] ?>">
					</div>
				</div>

				<div class="row mb-3">
					<div class="col-sm-12 text-secondary">
						<span class="Err" id="ErrCode"> <?= $variables["errors"]["first_name"] ?? "" ?> </span>
						<label class="mb-1" for="">Prénom</label>
						<input type="text" name="first_name" class="form-control" value="<?php echo "" . $variables["user"]["FirstName"] ?>">
					</div>
				</div>

				<div class="row mb-3">
					<div class="col-sm-12 text-secondary">
						<span class="Err" id="ErrCode"> <?= $variables["errors"]["email"] ?? "" ?> </span>
						<label class="mb-1" for="">E-mail</label>
						<div name="email" class="col-sm-9 text-secondary form-control"><?= $variables["user"]["Email"] ?></div>
					</div>
				</div>

				<div class="row mb-3">
					<div class="col-sm-12 text-secondary">
						<span class="Err" id="ErrCode"> <?= $variables["errors"]["username"] ?? "" ?> </span>
						<label class="mb-1" for="">Nom d'utilisateur</label>
						<div name="username" class="col-sm-9 text-secondary form-control"><?= $variables["user"]["Username"] ?></div>
					</div>
				</div>

				<div class="row mb-3">
					<div class="col-sm-12 text-secondary">
						<span class="Err" id="ErrCode"> <?= $variables["errors"]["age"] ?? "" ?> </span>
						<label class="mb-1" for="">Âge</label>
						<input type="text" name="age" class="form-control" value="<?= $variables["user"]["Age"] ?>">
					</div>
				</div>

				<div class="row mb-3 ">
					<div class="col-sm-12 text-secondary">
						<span class="Err" id="ErrCode"> <?= $variables["errors"]["phone"] ?? "" ?> </span>
						<label class="mb-1" for="">Numero de téléphone </label>
						<input type="text" name="phone" class="form-control" value="<?= $variables["user"]["Phone"] ?>">
					</div>
				</div>


				<div class="d-flex flex-nowrap bd-highlight">
					<div class="order-1 p-1 bd-highlight"><input type="submit" class="btn text-white px-4" style="background-color:#002A8B" value="Enregistrer"></div>
					<div class="order-2 p-1 bd-highlight"> <input type="reset" class="btn btn-secondary px-4 " value="Annuler"></div>
				</div>

			</div>
		</div>

		<form>
</div>
</div>