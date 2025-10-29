@extends('admin.tw.layout')
@section('title','Logos & Favicon')
@section('content')
	<div class="mb-5 flex items-center justify-between">
		<div class="flex items-center gap-2">
			<span class="inline-flex h-9 w-9 items-center justify-center rounded-md bg-indigo-100 text-indigo-700 ring-1 ring-indigo-200">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M4 6h16v12H4z"/></svg>
			</span>
			<h2 class="text-lg font-semibold">Logos & Favicon</h2>
		</div>
	</div>

	@if(Session::has('message'))
		<div class="mb-4 rounded-md border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">{{ Session::get('message') }}</div>
	@endif

	<form action="{{ url('/admin/logo-and-favicon-update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
		@csrf
		<div class="rounded-xl bg-white ring-1 ring-gray-200 p-4 space-y-4">
			<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Logo</label>
					<div class="upload-tile group rounded-lg border-2 border-dashed border-gray-200 bg-white p-3 hover:border-indigo-300 cursor-pointer" data-target="input_logo_image">
						<div class="flex items-center gap-3">
							<div class="relative h-24 w-40 overflow-hidden rounded-md bg-gray-100 border-2 border-dashed border-gray-300 flex items-center justify-center">
								<img id="preview_logo_image" src="{{ $SiteSettings[0]->logo ?? '' ? url('/uploads/logo/'.($SiteSettings[0]->logo)) : '' }}" alt="" class="{{ ($SiteSettings[0]->logo ?? '') ? '' : 'hidden' }} absolute inset-0 h-full w-full object-contain" />
								<svg id="placeholder_logo_image" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="{{ ($SiteSettings[0]->logo ?? '') ? 'hidden' : '' }} h-6 w-6 text-gray-400"><path d="M21 7.5V18a3 3 0 01-3 3H6a3 3 0 01-3-3V7.5L7.5 3h9L21 7.5z"/></svg>
							</div>
							<div class="flex-1">
								<input id="input_logo_image" type="file" name="logo" accept="image/*" class="sr-only" />
								<p class="text-xs text-gray-600"><span class="text-indigo-600 underline">Click here to upload</span></p>
							</div>
						</div>
					</div>
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Favicon</label>
					<div class="upload-tile group rounded-lg border-2 border-dashed border-gray-200 bg-white p-3 hover:border-indigo-300 cursor-pointer" data-target="input_favicon_image">
						<div class="flex items-center gap-3">
							<div class="relative h-16 w-16 overflow-hidden rounded-md bg-gray-100 border-2 border-dashed border-gray-300 flex items-center justify-center">
								<img id="preview_favicon_image" src="{{ $SiteSettings[0]->favicon ?? '' ? url('/uploads/logo/'.($SiteSettings[0]->favicon)) : '' }}" alt="" class="{{ ($SiteSettings[0]->favicon ?? '') ? '' : 'hidden' }} absolute inset-0 h-full w-full object-contain" />
								<svg id="placeholder_favicon_image" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="{{ ($SiteSettings[0]->favicon ?? '') ? 'hidden' : '' }} h-6 w-6 text-gray-400"><path d="M21 7.5V18a3 3 0 01-3 3H6a3 3 0 01-3-3V7.5L7.5 3h9L21 7.5z"/></svg>
							</div>
							<div class="flex-1">
								<input id="input_favicon_image" type="file" name="favicon" accept="image/*" class="sr-only" />
								<p class="text-xs text-gray-600"><span class="text-indigo-600 underline">Click here to upload</span></p>
							</div>
						</div>
					</div>
			</div>
			<div class="pt-2">
				<button class="inline-flex items-center gap-2 rounded-md bg-indigo-600 px-3 py-2 text-sm font-medium text-white hover:bg-indigo-700">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4"><path d="M12 4.5v15m7.5-7.5h-15"/></svg>
					Save Changes
				</button>
			</div>
		</div>
	</form>

	<script>
		document.addEventListener('DOMContentLoaded', function(){
			function bindPreview(inputId, imgId, placeholderId) {
				const input = document.getElementById(inputId);
				const img = document.getElementById(imgId);
				const placeholder = document.getElementById(placeholderId);
				if (!input || !img) return;
				input.addEventListener('change', () => {
					const file = input.files && input.files[0];
					if (!file) return;
					if (!file.type.startsWith('image/')) { input.value=''; return; }
					const reader = new FileReader();
					reader.onload = e => { img.src = e.target.result; img.classList.remove('hidden'); placeholder?.classList.add('hidden'); };
					reader.readAsDataURL(file);
				});
			}
			bindPreview('input_logo_image', 'preview_logo_image', 'placeholder_logo_image');
			bindPreview('input_favicon_image', 'preview_favicon_image', 'placeholder_favicon_image');
		});
	</script>
@endsection


