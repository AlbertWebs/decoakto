@extends('admin.tw.layout')
@section('title','Edit Category')
@section('content')
	<div class="mb-5 flex items-center justify-between">
		<div class="flex items-center gap-2">
			<span class="inline-flex h-9 w-9 items-center justify-center rounded-md bg-indigo-50 text-indigo-600 ring-1 ring-indigo-100">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M16.862 3.487a1.5 1.5 0 112.121 2.121l-10.5 10.5a1.5 1.5 0 01-.53.353l-3.75 1.25a.75.75 0 01-.949-.949l1.25-3.75a1.5 1.5 0 01.353-.53l10.5-10.5z"/></svg>
			</span>
			<h2 class="text-lg font-semibold">Edit Category</h2>
		</div>
		<a href="{{ url('/admin/categories') }}" class="inline-flex items-center gap-2 rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-700 hover:bg-gray-50">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
			Back
		</a>
	</div>

	@if(Session::has('message'))
		<div class="mb-4 rounded-md border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">{{ Session::get('message') }}</div>
	@endif

	<form action="{{ url('/admin/edit_Category/'.$Category->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
		@csrf
		<input type="hidden" name="image_cheat" value="{{ $Category->image }}" />
		<div class="rounded-xl bg-white ring-1 ring-gray-200 p-4">
			<div class="mb-3 flex items-center gap-2 text-sm font-semibold text-gray-700">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4"><path d="M4 5h16v2H4zM4 11h16v2H4zM4 17h16v2H4z"/></svg>
				<span>Details</span>
			</div>
			<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Title</label>
					<input name="title" required value="{{ old('title', $Category->title) }}" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800 focus:ring-2 focus:ring-indigo-100" />
				</div>
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Image</label>
					<input type="file" name="image" accept="image/*" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800" />
					<div class="mt-2">
						@php $img = $Category->image ? url('/uploads/categories/'.$Category->image) : null; @endphp
						@if($img)
							<img src="{{ $img }}" alt="{{ $Category->title }}" class="h-14 w-14 rounded object-cover ring-1 ring-gray-200" />
						@endif
					</div>
				</div>
			</div>
			<div class="mt-4">
				<label class="mb-1 block text-sm font-medium text-gray-700">Content</label>
				<textarea id="content_editor" name="content" rows="10" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800">{{ old('content', $Category->content) }}</textarea>
			</div>
			<div class="pt-4">
				<button class="inline-flex items-center gap-2 rounded-md bg-indigo-600 px-3 py-2 text-sm font-medium text-white hover:bg-indigo-700">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4"><path d="M17 3H7a2 2 0 00-2 2v14a2 2 0 002 2h10a2 2 0 002-2V5l-2-2zm-2 14H9v-5h6v5zm0-7H9V5h6v5z"/></svg>
					Save Changes
				</button>
			</div>
		</div>
	</form>

	<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
	<script>
		if (window.CKEDITOR) {
			CKEDITOR.replace('content_editor');
		}
	</script>
@endsection


