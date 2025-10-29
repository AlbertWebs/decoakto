@extends('admin.tw.layout')
@section('title','Sizes')
@section('content')
	<div class="mb-5 flex items-center justify-between">
		<div class="flex items-center gap-2">
			<span class="inline-flex h-9 w-9 items-center justify-center rounded-md bg-indigo-50 text-indigo-600 ring-1 ring-indigo-100">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M4 11h16v2H4z"/></svg>
			</span>
			<h2 class="text-lg font-semibold">Sizes</h2>
		</div>
		<a href="{{ url('/admin/addVariation/size') }}" class="inline-flex items-center gap-2 rounded-md bg-indigo-600 px-3 py-2 text-sm font-medium text-white hover:bg-indigo-700">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4"><path d="M12 4.5v15m7.5-7.5h-15"/></svg>
			Add Size
		</a>
	</div>

	@if(Session::has('message'))
		<div class="mb-4 rounded-md border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">{{ Session::get('message') }}</div>
	@endif

	<div class="rounded-xl bg-white ring-1 ring-gray-200">
		<div class="overflow-x-auto">
			<table class="min-w-full divide-y divide-gray-200 text-sm">
				<thead class="bg-gray-50 text-left text-gray-600">
					<tr>
						<th class="px-4 py-3 font-medium">Size</th>
						<th class="px-4 py-3 font-medium">Price</th>
						<th class="px-4 py-3 font-medium">Product ID</th>
						<th class="px-4 py-3 font-medium">Created</th>
						<th class="px-4 py-3 font-medium text-right">Actions</th>
					</tr>
				</thead>
				<tbody class="divide-y divide-gray-100">
					@forelse(($Variation ?? []) as $sz)
						<tr>
							<td class="px-4 py-3 text-gray-800 font-medium">{{ $sz->value }}</td>
							<td class="px-4 py-3 text-gray-600">{{ $sz->price }}</td>
							<td class="px-4 py-3 text-gray-500">{{ $sz->product_id }}</td>
							<td class="px-4 py-3 text-gray-500">{{ $sz->created_at }}</td>
							<td class="px-4 py-3">
								<div class="flex items-center justify-end gap-2">
									<a href="{{ url('/admin/editVariation/'.$sz->id) }}" class="inline-flex items-center gap-1 rounded-md border border-gray-200 bg-white px-2 py-1 text-xs text-gray-700 hover:bg-gray-50">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4"><path d="M16.862 3.487a1.5 1.5 0 112.121 2.121l-10.5 10.5a1.5 1.5 0 01-.53.353l-3.75 1.25a.75.75 0 01-.949-.949l1.25-3.75a1.5 1.5 0 01.353-.53l10.5-10.5z"/></svg>
										Edit
									</a>
								</div>
							</td>
						</tr>
					@empty
						<tr>
							<td class="px-4 py-8 text-center text-gray-500" colspan="5">No sizes found.</td>
						</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
@endsection


