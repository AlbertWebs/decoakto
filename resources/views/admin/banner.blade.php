@extends('admin.tw.layout')
@section('title','Banners')
@section('content')
	<div class="mb-5 flex items-center justify-between">
		<div class="flex items-center gap-2">
			<span class="inline-flex h-9 w-9 items-center justify-center rounded-md bg-indigo-50 text-indigo-600 ring-1 ring-indigo-100">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M3 5h18v4H3zM3 11h18v8H3z"/></svg>
			</span>
			<h2 class="text-lg font-semibold">Banners</h2>
		</div>
	</div>

	@if(Session::has('message'))
		<div class="mb-4 rounded-md border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">{{ Session::get('message') }}</div>
	@endif

	<div class="rounded-xl bg-white ring-1 ring-gray-200">
		<div class="overflow-x-auto">
			<table class="min-w-full divide-y divide-gray-200 text-sm">
				<thead class="bg-gray-50 text-left text-gray-600">
					<tr>
						<th class="px-4 py-3 font-medium">Image</th>
						<th class="px-4 py-3 font-medium">Title</th>
						<th class="px-4 py-3 font-medium">Button</th>
						<th class="px-4 py-3 font-medium">URL</th>
						<th class="px-4 py-3 font-medium">Created</th>
						<th class="px-4 py-3 font-medium text-right">Actions</th>
					</tr>
				</thead>
				<tbody class="divide-y divide-gray-100">
					@forelse(($Banner ?? []) as $bn)
						<tr>
							<td class="px-4 py-3">
								@php $img = $bn->image ? url('/uploads/banners/'.$bn->image) : null; @endphp
								@if($img)
									<img src="{{ $img }}" alt="{{ $bn->title }}" class="h-12 w-20 rounded object-cover ring-1 ring-gray-200" />
								@else
									<span class="inline-flex h-10 w-10 items-center justify-center rounded bg-gray-100 text-gray-400 ring-1 ring-gray-200">N/A</span>
								@endif
							</td>
							<td class="px-4 py-3 text-gray-800 font-medium">{{ $bn->title }}</td>
							<td class="px-4 py-3 text-gray-600">{{ $bn->link_name }}</td>
							<td class="px-4 py-3 text-indigo-600 truncate max-w-[240px]"><a href="{{ $bn->link }}" target="_blank">{{ $bn->link }}</a></td>
							<td class="px-4 py-3 text-gray-500">{{ $bn->created_at }}</td>
							<td class="px-4 py-3">
								<div class="flex items-center justify-end gap-2">
									<a href="{{ url('/admin/editBanner/'.$bn->id) }}" class="inline-flex items-center gap-1 rounded-md border border-gray-200 bg-white px-2 py-1 text-xs text-gray-700 hover:bg-gray-50">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4"><path d="M16.862 3.487a1.5 1.5 0 112.121 2.121l-10.5 10.5a1.5 1.5 0 01-.53.353l-3.75 1.25a.75.75 0 01-.949-.949l1.25-3.75a1.5 1.5 0 01.353-.53l10.5-10.5z"/></svg>
										Edit
									</a>
								</div>
							</td>
						</tr>
					@empty
						<tr>
							<td class="px-4 py-8 text-center text-gray-500" colspan="6">No banners found.</td>
						</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
@endsection


