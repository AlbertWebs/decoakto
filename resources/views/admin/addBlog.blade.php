@extends('admin.tw.layout')
@section('title','Add Blog')
@section('content')
	<div class="mb-5 flex items-center justify-between">
		<div class="flex items-center gap-2">
			<span class="inline-flex h-9 w-9 items-center justify-center rounded-md bg-indigo-50 text-indigo-600 ring-1 ring-indigo-100">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M12 4.5v15m7.5-7.5h-15"/></svg>
			</span>
			<h2 class="text-lg font-semibold">Add Post</h2>
		</div>
		<a href="{{ url('/admin/blog') }}" class="inline-flex items-center gap-2 rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-700 hover:bg-gray-50">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
			Back
		</a>
	</div>

	@if(Session::has('message'))
		<div class="mb-4 rounded-md border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">{{ Session::get('message') }}</div>
	@endif

	<form action="{{ url('/admin/add_Blog') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
		@csrf
		<div class="rounded-xl bg-white ring-1 ring-gray-200 p-4 space-y-4">
			<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Title</label>
					<input name="title" required class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800" />
				</div>
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Author</label>
					<input name="author" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800" />
				</div>
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Category</label>
					<select name="category" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800">
						@foreach(($Category ?? []) as $cat)
							<option value="{{ $cat->title }}">{{ $cat->title }}</option>
						@endforeach
					</select>
				</div>
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Tags (comma separated)</label>
					<input name="tags" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800" />
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
			<div>
				<label class="mb-1 block text-sm font-medium text-gray-700">Featured Image</label>
				<div class="upload-tile group rounded-lg border-2 border-dashed border-gray-200 bg-white p-3 hover:border-indigo-300 cursor-pointer" data-target="input_blog_image">
					<div class="flex items-center gap-3">
						<div class="relative h-24 w-40 overflow-hidden rounded-md bg-gray-100 border-2 border-dashed border-gray-300 flex items-center justify-center">
							<img id="preview_blog_image" src="" alt="" class="hidden absolute inset-0 h-full w-full object-cover" />
							<svg id="placeholder_blog_image" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 text-gray-400"><path d="M21 7.5V18a3 3 0 01-3 3H6a3 3 0 01-3-3V7.5L7.5 3h9L21 7.5z"/></svg>
						</div>
						<div class="flex-1">
							<input id="input_blog_image" type="file" name="image_one" accept="image/*" class="sr-only" />
							<p class="text-xs text-gray-600"><span class="text-indigo-600 underline">Click here to upload</span> • JPG/PNG up to 2MB</p>
						</div>
					</div>
				</div>
			</div>
			<div class="pt-2">
				<button class="inline-flex items-center gap-2 rounded-md bg-indigo-600 px-3 py-2 text-sm font-medium text-white hover:bg-indigo-700">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4"><path d="M12 4.5v15m7.5-7.5h-15"/></svg>
					Save Post
				</button>
			</div>
		</div>
	</form>

	<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
	<script>
		if (window.CKEDITOR) { CKEDITOR.replace('content_editor'); }
		document.addEventListener('DOMContentLoaded', function(){
			const tile = document.querySelector('.upload-tile');
			const input = document.getElementById('input_blog_image');
			const img = document.getElementById('preview_blog_image');
			const placeholder = document.getElementById('placeholder_blog_image');
			if (tile && input) {
				tile.addEventListener('click', (e) => { input?.click(); });
				input.addEventListener('change', () => {
					const file = input.files && input.files[0];
					if (!file || !file.type.startsWith('image/')) { input.value=''; return; }
					const reader = new FileReader();
					reader.onload = e => { img.src = e.target.result; img.classList.remove('hidden'); placeholder?.classList.add('hidden'); };
					reader.readAsDataURL(file);
				});
			}
		});
	</script>
@endsection


