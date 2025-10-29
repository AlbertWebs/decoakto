@extends('admin.tw.layout')
@section('title','Social Media Settings')
@section('content')
	<div class="mb-5 flex items-center justify-between">
		<div class="flex items-center gap-2">
			<span class="inline-flex h-9 w-9 items-center justify-center rounded-md bg-blue-100 text-blue-700 ring-1 ring-blue-200">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M8 12a4 4 0 118 0 4 4 0 01-8 0z"/><path d="M2 12a10 10 0 1020 0 10 10 0 10-20 0zm10-7a7 7 0 110 14 7 7 0 010-14z"/></svg>
			</span>
			<h2 class="text-lg font-semibold">Social Media Settings</h2>
		</div>
	</div>

	<div class="rounded-xl bg-white ring-1 ring-gray-200">
		<div class="overflow-x-auto">
			<table class="min-w-full divide-y divide-gray-200 text-sm">
				<thead class="bg-gray-50 text-left text-gray-600">
					<tr>
						<th class="px-4 py-3 font-medium">Key</th>
						<th class="px-4 py-3 font-medium">Value</th>
					</tr>
				</thead>
				<tbody class="divide-y divide-gray-100">
					@foreach(($SiteSettings ?? []) as $s)
						<tr>
							<td class="px-4 py-3 text-gray-800 font-medium">{{ $s->key ?? $s->name ?? 'Setting' }}</td>
							<td class="px-4 py-3 text-gray-600">{{ $s->value ?? $s->content ?? '' }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection


