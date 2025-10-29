@extends('admin.tw.layout')
@section('title','Add FAQ')
@section('content')
	<div class="mb-5 flex items-center justify-between">
		<div class="flex items-center gap-2">
			<span class="inline-flex h-9 w-9 items-center justify-center rounded-md bg-indigo-50 text-indigo-600 ring-1 ring-indigo-100">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M12 2a10 10 0 100 20 10 10 0 000-20zm0 14a1.25 1.25 0 110 2.5 1.25 1.25 0 010-2.5zM11 6h2v7h-2z"/></svg>
			</span>
			<h2 class="text-lg font-semibold">Add FAQ</h2>
		</div>
		<a href="{{ url('/admin/faq') }}" class="inline-flex items-center gap-2 rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-700 hover:bg-gray-50">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
			Back
		</a>
	</div>

	@if(Session::has('message'))
		<div class="mb-4 rounded-md border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">{{ Session::get('message') }}</div>
	@endif

	<form action="{{ url('/admin/add_Faq') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
		@csrf
		<div class="rounded-xl bg-white ring-1 ring-gray-200 p-4 space-y-4">
			<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Title</label>
					<input name="title" required class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800" />
				</div>
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Category</label>
					<select name="category" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800">
						@foreach(($Category ?? []) as $cat)
							<option value="{{ $cat->title }}">{{ $cat->title }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div>
				<label class="mb-1 block text-sm font-medium text-gray-700">Meta</label>
				<textarea name="meta" rows="3" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800"></textarea>
			</div>
			<div>
				<label class="mb-1 block text-sm font-medium text-gray-700">Content</label>
				<textarea id="content_editor" name="content" rows="10" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800"></textarea>
			</div>
			<div class="pt-2">
				<button class="inline-flex items-center gap-2 rounded-md bg-indigo-600 px-3 py-2 text-sm font-medium text-white hover:bg-indigo-700">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4"><path d="M12 4.5v15m7.5-7.5h-15"/></svg>
					Save FAQ
				</button>
			</div>
		</div>
	</form>

	<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
	<script>
		if (window.CKEDITOR) { CKEDITOR.replace('content_editor'); }
	</script>
@endsection


