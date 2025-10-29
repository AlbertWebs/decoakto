@extends('admin.tw.layout')
@section('title','Add Size Variation')
@section('content')
	<div class="mb-5 flex items-center justify-between">
		<div class="flex items-center gap-2">
			<span class="inline-flex h-9 w-9 items-center justify-center rounded-md bg-indigo-50 text-indigo-600 ring-1 ring-indigo-100">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M4 11h16v2H4z"/></svg>
			</span>
			<h2 class="text-lg font-semibold">Add Size</h2>
		</div>
		<a href="{{ url('/admin/variations/size') }}" class="inline-flex items-center gap-2 rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-700 hover:bg-gray-50">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
			Back
		</a>
	</div>

	@if(Session::has('message'))
		<div class="mb-4 rounded-md border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">{{ Session::get('message') }}</div>
	@endif

	<form action="{{ url('/admin/add_Variation') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
		@csrf
		<input type="hidden" name="type" value="size" />
		<div class="rounded-xl bg-white ring-1 ring-gray-200 p-4">
			<div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Size Value</label>
					<input name="value" required class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800" placeholder="e.g. Small, 32x32, etc." />
				</div>
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Price</label>
					<input name="price" type="number" step="0.01" value="0.00" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800" />
				</div>
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Product</label>
					<select name="product_id" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800">
						@foreach(($Product ?? []) as $prod)
							<option value="{{ $prod->id }}">{{ $prod->name }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="pt-2">
				<button class="inline-flex items-center gap-2 rounded-md bg-indigo-600 px-3 py-2 text-sm font-medium text-white hover:bg-indigo-700">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4"><path d="M12 4.5v15m7.5-7.5h-15"/></svg>
					Save Size
				</button>
			</div>
		</div>
	</form>
@endsection


