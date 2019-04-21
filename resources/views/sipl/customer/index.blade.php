@extends('layouts.app')
@section('title', 'Customers')

@push('links')
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.6/b-colvis-1.5.6/b-html5-1.5.6/r-2.2.2/datatables.min.css"/>
@endpush

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-header">
				Customers
				<a href="{{ route('customers.create') }}" 
					class="btn btn-sm btn-primary float-right"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add Customer</a>
			</div>
			<div class="card-body">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Type</th>
							<th>Name</th>
							<th>Gender</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>TEST</td>
							<td>TEST</td>
							<td>TEST</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection

@push('scripts') 
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.6/b-colvis-1.5.6/b-html5-1.5.6/r-2.2.2/datatables.min.js"></script>
	<script>
		$(document).ready(function()  {
			$('#myTable').DataTable();
		});
	</script>
@endpush