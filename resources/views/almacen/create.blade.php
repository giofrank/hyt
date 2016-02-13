@extends('layout.principal')
@section('content')
<section class="panel">
						<header class="panel-heading"><h4>REGISTRO ALMACEN </h4><button class="nuevo">Nuevo</button></header>
						<div class="panel-body">
							<div class="col-lg-6 pull-left">
								<form action="" class="fom-control form-guardar">
									<header class="cabecera"><i class="fa fa-plus"></i><b>Agragar un nuevo almacén</b> <span class="pull-right"> <i class="fa fa-times"></i> </span></header>
									<div class="col-lg-12 form-group">	
										<input type="text" class="form-control">
									</div>
									<div class="col-lg-12 form-group">	
										<input type="text" class="form-control">
									</div>
									<div class="col-lg-12 form-group">	
										<input type="text" class="form-control">
									</div>
									<div class="col-lg-12 form-group">
										<button class="btn-btn btn-guardar" ><i class="fa fa-save"></i>GUARDAR ALMACEN</button>
									</div>
								</form>
							</div>
						</div>
					</section>
@stop