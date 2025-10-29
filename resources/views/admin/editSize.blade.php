@extends('admin.tw.layout')
@section('title','Edit Size Variation')
@section('content')
	<div class="mb-5 flex items-center justify-between">
		<div class="flex items-center gap-2">
			<span class="inline-flex h-9 w-9 items-center justify-center rounded-md bg-indigo-50 text-indigo-600 ring-1 ring-indigo-100">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M4 11h16v2H4z"/></svg>
			</span>
			<h2 class="text-lg font-semibold">Edit Size</h2>
		</div>
		<a href="{{ url('/admin/variations/size') }}" class="inline-flex items-center gap-2 rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-700 hover:bg-gray-50">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
			Back
		</a>
	</div>

	@if(Session::has('message'))
		<div class="mb-4 rounded-md border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">{{ Session::get('message') }}</div>
	@endif

	<form action="{{ url('/admin/edit_Variation/'.$Variations->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
		@csrf
		<div class="rounded-xl bg-white ring-1 ring-gray-200 p-4">
			<div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Size Value</label>
					<input name="value" required value="{{ old('value', $Variations->value) }}" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800" />
				</div>
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Price</label>
					<input name="price" type="number" step="0.01" value="{{ old('price', $Variations->price) }}" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800" />
				</div>
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Product</label>
					<select name="product_id" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800">
						@foreach(($Product ?? []) as $prod)
							<option value="{{ $prod->id }}" {{ (old('product_id', $Variations->product_id)==$prod->id) ? 'selected' : '' }}>{{ $prod->name }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="pt-2">
				<button class="inline-flex items-center gap-2 rounded-md bg-indigo-600 px-3 py-2 text-sm font-medium text-white hover:bg-indigo-700">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4"><path d="M17 3H7a2 2 0 00-2 2v14a2 2 0 002 2h10a2 2 0 002-2V5l-2-2zm-2 14H9v-5h6v5zm0-7H9V5h6v5z"/></svg>
					Save Changes
				</button>
			</div>
		</div>
	</form>
@endsection


