<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> 
					 <a class="navbar-brand" href="#"><i class="glyphicon glyphicon-leaf"></i> Evote</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#"><i class="glyphicon glyphicon-edit"></i> Kelola User</a>
						</li>
						<li>
							<a href="#"> <i class="glyphicon glyphicon-tasks"></i> Lihat Statistik</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">
							 <i class="glyphicon glyphicon-print"></i>
							 Cetak<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Presentasi</a>
								</li>
								<li>
									<a href="#">Data Calon</a>
								</li>
								<li>
									<a href="#">Pemilih</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Mahasiswa Golput</a>
								</li>
							</ul>
						</li>
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">
							 <i class="glyphicon glyphicon-user"></i>
							 <?php echo "$username";?><strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#"><i class="glyphicon glyphicon-cog"></i> Setting</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="<?php echo base_url('login/logout');?>">
									<i class="glyphicon glyphicon-off"></i> Log Out</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="http://naetalab.com">Naeta<font color="#18bc9c">LAB</font></a>
						</li>
						
					</ul>
				</div>
				
			</nav>