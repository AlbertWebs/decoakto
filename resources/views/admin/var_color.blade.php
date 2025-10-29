@extends('admin.tw.layout')
@section('title','Colors')
@section('content')
	<div class="mb-5 flex items-center justify-between">
		<div class="flex items-center gap-2">
			<span class="inline-flex h-9 w-9 items-center justify-center rounded-md bg-indigo-50 text-indigo-600 ring-1 ring-indigo-100">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M12 2a10 10 0 100 20 10 10 0 000-20z"/></svg>
			</span>
			<h2 class="text-lg font-semibold">Colors</h2>
		</div>
		<a href="{{ url('/admin/addColor') }}" class="inline-flex items-center gap-2 rounded-md bg-indigo-600 px-3 py-2 text-sm font-medium text-white hover:bg-indigo-700">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4"><path d="M12 4.5v15m7.5-7.5h-15"/></svg>
			Add Color
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
						<th class="px-4 py-3 font-medium">Swatch</th>
						<th class="px-4 py-3 font-medium">Title</th>
						
						<th class="px-4 py-3 font-medium text-right">Actions</th>
					</tr>
				</thead>
				<tbody class="divide-y divide-gray-100">
					@forelse(($Variation ?? []) as $color)
						<tr>
							<td class="px-4 py-3">
								@php $img = $color->image ? url('/uploads/colors/'.$color->image) : null; @endphp
								@if($img)
									<img src="{{ $img }}" alt="{{ $color->title }}" class="h-8 w-8 rounded object-cover ring-1 ring-gray-200" />
								@else
									<span class="inline-flex h-8 w-8 items-center justify-center rounded bg-gray-100 text-gray-400 ring-1 ring-gray-200">N/A</span>
								@endif
							</td>
							<td class="px-4 py-3 text-gray-800 font-medium">{{ $color->title }}</td>
							
							<td class="px-4 py-3">
								<div class="flex items-center justify-end gap-2">
									<a href="{{ url('/admin/editColor/'.$color->id) }}" class="inline-flex items-center gap-1 rounded-md border border-gray-200 bg-white px-2 py-1 text-xs text-gray-700 hover:bg-gray-50">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4"><path d="M16.862 3.487a1.5 1.5 0 112.121 2.121l-10.5 10.5a1.5 1.5 0 01-.53.353l-3.75 1.25a.75.75 0 01-.949-.949l1.25-3.75a1.5 1.5 0 01.353-.53l10.5-10.5z"/></svg>
										Edit
									</a>
									<a href="{{ url('/admin/deleteColor/'.$color->id) }}" onclick="return confirm('Delete this color?')" class="inline-flex items-center gap-1 rounded-md bg-rose-600 px-2 py-1 text-xs text-white hover:bg-rose-700">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4"><path d="M6 7h12l-1 12a2 2 0 01-2 2H9a2 2 0 01-2-2L6 7zm-3 0h18v2H3z"/></svg>
										Delete
									</a>
								</div>
							</td>
						</tr>
					@empty
						<tr>
							<td class="px-4 py-8 text-center text-gray-500" colspan="4">No colors found.</td>
						</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
@endsection


