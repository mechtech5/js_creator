@extends('layouts.app')
@section('title', 'Add Customer')

@push('links')

@endpush

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-header">Add a Customer</div>
			<div class="card-body">
				<form action="">
					<div class="row">
						<div class="form-group col-6">
							<label for="">Customer Type</label>
							<select name="cust_type_id" id="cust_type_id" class="form-control">
								<option value="">Select Customer Type</option>
								{{-- cust_type_mast --}}
							</select>
						</div>
						<div class="form-group col-6">
							<label for="">Company Name</label>
							<input type="text" class="form-control" name="comp_name">
						</div>
						<div class="form-group col-6">
							<label for="">Customer Name</label>
							<input type="text" class="form-control" name="cust_name">
						</div>
						<div class="form-group col-6">
							<label for="">Gender</label><br>
							<label class="radio-inline"><input type="radio" name="gender" checked>Male</label>
							<label class="radio-inline"><input type="radio" name="gender">Female</label>
							<label class="radio-inline"><input type="radio" name="gender">Other</label>
						</div>
					</div>	
				</form>
			</div>
		</div>
	</div>
@endsection

@push('scripts') 

@endpush