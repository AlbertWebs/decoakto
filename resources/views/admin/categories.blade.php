@extends('admin.tw.layout')
@section('title', 'Categories')

@section('content')
<div class="mb-6 flex flex-wrap items-center justify-between gap-3">
	<div class="flex items-center gap-3">
		<span class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-100 text-indigo-600 ring-1 ring-indigo-200">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
				<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h6v6h-6zm10.5 0h6v6h-6zm-10.5 10.5h6v6h-6zm10.5 0h6v6h-6z" />
			</svg>
		</span>
		<h2 class="text-xl font-semibold text-gray-800">Categories</h2>
	</div>
	<a href="{{ url('/admin/addCategory') }}"
		class="inline-flex items-center gap-2 rounded-lg bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm transition hover:scale-105 hover:bg-indigo-700">
		<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-4 w-4">
			<path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
		</svg>
		Add Category
	</a>
</div>

@if(Session::has('message'))
	<div class="mb-4 flex items-center gap-2 rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700 shadow-sm">
		<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-emerald-500">
			<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m6.75 2.25a9.75 9.75 0 11-19.5 0 9.75 9.75 0 0119.5 0z" />
		</svg>
		{{ Session::get('message') }}
	</div>
@endif

<div class="rounded-2xl bg-white shadow ring-1 ring-gray-200 transition hover:shadow-md">
	<div class="overflow-x-auto">
		<table class="min-w-full divide-y divide-gray-200 text-sm">
			<thead class="bg-gray-50 text-left text-gray-600">
				<tr>
					<th class="px-4 py-3 font-medium">Image</th>
					<th class="px-4 py-3 font-medium">Title</th>
					<th class="px-4 py-3 font-medium">Slug</th>
					<th class="px-4 py-3 font-medium">Created</th>
					<th class="px-4 py-3 font-medium text-right">Actions</th>
				</tr>
			</thead>
			<tbody class="divide-y divide-gray-100">
				@forelse(($Category ?? []) as $cat)
					<tr class="hover:bg-gray-50 transition">
						<td class="px-4 py-3">
							@php $img = $cat->image ? url('/uploads/categories/'.$cat->image) : null; @endphp
							@if($img)
								<img src="{{ $img }}" alt="{{ $cat->title }}" class="h-12 w-12 rounded-md object-cover ring-1 ring-gray-200" />
							@else
								<span class="inline-flex h-12 w-12 items-center justify-center rounded-md bg-gray-100 text-gray-400 ring-1 ring-gray-200">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
										<path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5V4.5A1.5 1.5 0 014.5 3h15A1.5 1.5 0 0121 4.5v12M3 16.5l4.5-4.5L12 15l4.5-3 4.5 4.5M3 16.5V19.5A1.5 1.5 0 004.5 21h15A1.5 1.5 0 0021 19.5V16.5" />
									</svg>
								</span>
							@endif
						</td>
						<td class="px-4 py-3 text-gray-800 font-medium">{{ $cat->title }}</td>
						<td class="px-4 py-3 text-gray-500">{{ $cat->slung }}</td>
						<td class="px-4 py-3 text-gray-500">{{ $cat->created_at->format('M d, Y') }}</td>
						<td class="px-4 py-3">
							<div class="flex items-center justify-end gap-2">
								<a href="{{ url('/admin/editCategories/'.$cat->id) }}"
								   class="inline-flex items-center gap-1 rounded-md border border-gray-200 bg-white px-3 py-1.5 text-xs text-gray-700 shadow-sm transition hover:bg-gray-50 hover:scale-105">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
										<path stroke-linecap="round" stroke-linejoin="round" d="M16.862 3.487a1.5 1.5 0 012.121 2.121L8.591 16l-3.75 1.25L6.091 13l10.771-9.513z" />
									</svg>
									Edit
								</a>
								<a href="{{ url('/admin/deleteCategory/'.$cat->id) }}"
								   onclick="return confirm('Delete this category?')"
								   class="inline-flex items-center gap-1 rounded-md bg-rose-600 px-3 py-1.5 text-xs font-medium text-white shadow-sm transition hover:bg-rose-700 hover:scale-105">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
										<path stroke-linecap="round" stroke-linejoin="round" d="M6 7h12l-1 12a2 2 0 01-2 2H9a2 2 0 01-2-2L6 7zm3-3h6l1 1H8l1-1z" />
									</svg>
									Delete
								</a>
							</div>
						</td>
					</tr>
				@empty
					<tr>
						<td colspan="5" class="px-4 py-10 text-center text-gray-500">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-auto mb-2 h-8 w-8 text-gray-400">
								<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25M8.25 9V5.25m12 2.25v11.25A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V7.5h16.5z" />
							</svg>
							No categories found.
						</td>
					</tr>
				@endforelse
			</tbody>
		</table>
	</div>
</div>
@endsection
