				<div class="panel-heading">
					<h3 class="panel-title">
						<span class="glyphicon glyphicon-log-in"></span> 
						Log In
					</h3>
				</div>
				<div class="panel-body">
					<form>
						<div class="form-group">
							<input type="text" class="form-control" id="uid" name="uid" placeholder="Username">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
						</div>
						<button type="submit" class="btn btn-default" onclick="loginf('../scripts/login.php','#uid','#pwd');return false;">
						Log In</button>
					</form>
				</div>