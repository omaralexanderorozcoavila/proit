<div role="main" class="main">
	
<section class="page-header page-header-color page-header-primary page-header-float-breadcrumb">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="mt-xs">Mi Perfil (<?php echo $this->session->userdata['logged_in_public']['name']; ?> <?php echo $this->session->userdata['logged_in_public']['lastname']; ?>)</h1>
				<span>Navegue por los datos de su cuenta</span>
				<ul class="breadcrumb breadcrumb-valign-mid">
					<li><a href="#">Inicio</a></li>
					<li class="active">Perfil público</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="tabs tabs-bottom tabs-center tabs-simple">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#tabsNavigationSimpleIcons1" data-toggle="tab">
							<span class="featured-boxes featured-boxes-style-6 p-none m-none">
								<span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none">
									<span class="box-content p-none m-none">
										<i class="icon-featured fa fa-user"></i>
									</span>
								</span>
							</span>									
							<p class="mb-none pb-none">Datos Personales</p>
						</a>
					</li>
					<li>
						<a href="#tabsNavigationSimpleIcons2" data-toggle="tab">
							<span class="featured-boxes featured-boxes-style-6 p-none m-none">
								<span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none">
									<span class="box-content p-none m-none">
										<i class="icon-featured fa fa-file"></i>
									</span>
								</span>
							</span>									
							<p class="mb-none pb-none">Historial de Pedidos</p>
						</a>
					</li>
					<li>
						<a href="#tabsNavigationSimpleIcons3" data-toggle="tab">
							<span class="featured-boxes featured-boxes-style-6 p-none m-none">
								<span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none">
									<span class="box-content p-none m-none">
										<i class="icon-featured fa fa-address-card"></i>
									</span>
								</span>
							</span>									
							<p class="mb-none pb-none">Mis Direcciones</p>
						</a>
					</li>
					<li>
						<a href="#tabsNavigationSimpleIcons4" data-toggle="tab">
							<span class="featured-boxes featured-boxes-style-6 p-none m-none">
								<span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none">
									<span class="box-content p-none m-none">
										<i class="icon-featured fa fa-car"></i>
									</span>
								</span>
							</span>									
							<p class="mb-none pb-none">Mis Vehículos</p>
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tabsNavigationSimpleIcons1">
						<div class="justify">
							<div class="col-md-2">
							</div>
							<div class="col-md-8">
								<h4>Datos Personales</h4>
								<ul class="list list-icons list-icons-style-3 mt-xlg">
									<li><i class="fa fa-id-card"></i> <strong>Nombre:</strong> <?php echo $this->session->userdata['logged_in_public']['name']; ?></li>
									<li><i class="fa fa-phone"></i> <strong>Apellido:</strong> <?php echo $this->session->userdata['logged_in_public']['lastname']; ?></li>
									<li><i class="fa fa-mobile"></i> <strong>Admin:</strong> <?php echo $this->session->userdata['logged_in_public']['admin']; ?></li>
									<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com"><?php echo $this->session->userdata['logged_in_public']['username']; ?></a></li>
								</ul>
								<input type="hidden" id="customer_id" value="<?php echo $this->session->userdata['logged_in_public']['id']; ?>">
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tabsNavigationSimpleIcons2">
						<div class="justify">
							<div class="col-md-2">
							</div>
							<div class="col-md-8">
								<h4>Historial de Pedidos</h4>
								<div class="table-responsive">
									<table id="tab_order" class="table table-striped table-bordered dt-responsive table-hover dataTables-example">
										<thead>
											<tr>
												<th class="text-center">#</th>
												<th class="text-center">Orden N°</th>
												<th class="text-center">Franquicia</th>
												<th class="text-center">Cliente</th>
												<th class="text-center">Fecha</th>
												<th class="text-center">Monto</th>
												<th class="text-center">Servicios</th>
												<th class="text-center">Productos</th>
												<th class="text-center">Estatus</th>

											</tr>
										</thead>
										<tbody>
											
										</tbody>

									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tabsNavigationSimpleIcons3">
						<div class="justify">
							<div class="col-md-2">
							</div>
							<div class="col-md-8">
								<h4>Mis Direcciones</h4>
								<button  class="btn btn-w-m btn-primary" id="i_new_line">
									<i class="fa fa-plus"></i>&nbsp;Agregar Dirección
								</button>
								<div class="table-responsive">
									<table style="width: 100%" class="table table-striped table-bordered dt-responsive table-hover dataTables-example" id="tab_direccion">
										<thead>
											<tr>
												<th>Ciudad</th>
												<th>Código Postal</th>
												<th>Descripción</th>
												<th>Dirección 1</th>
												<th>Dirección 2</th>
												<th>Teléfono</th>
												<th>Teléfono 2</th>
												<th>Editar</th>
												<th>Eliminar</th>
											</tr>
										</thead>
										<tbody>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tabsNavigationSimpleIcons4">
						<div class="justify">
							<div class="col-md-2">
							</div>
							<div class="col-md-8">
								<h4>Mis Vehículos</h4>
								<button  class="btn btn-w-m btn-primary" id="i_new_line2">
									<i class="fa fa-plus"></i>&nbsp;Agregar Vehículo
								</button>
								<div class="table-responsive">
									<table style="width: 100%" class="table table-striped table-bordered dt-responsive table-hover dataTables-example" id="tab_vehiculo">
										<thead>
											<tr>
												<th>Marca</th>
												<th>Modelo</th>
												<th>Color</th>
												<th>Año</th>
												<th>Placa</th>
												<th>Editar</th>
												<th>Eliminar</th>
											</tr>
										</thead>
										<tbody>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
