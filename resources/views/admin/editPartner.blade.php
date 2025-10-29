@extends('admin.tw.layout')
@section('title','Edit Partner')
@section('content')
	<div class="mb-5 flex items-center justify-between">
		<div class="flex items-center gap-2">
			<span class="inline-flex h-9 w-9 items-center justify-center rounded-md bg-indigo-50 text-indigo-600 ring-1 ring-indigo-100">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M16.862 3.487a1.5 1.5 0 112.121 2.121l-10.5 10.5a1.5 1.5 0 01-.53.353l-3.75 1.25a.75.75 0 01-.949-.949l1.25-3.75a1.5 1.5 0 01.353-.53l10.5-10.5z"/></svg>
			</span>
			<h2 class="text-lg font-semibold">Edit Partner</h2>
		</div>
		<a href="{{ url('/admin/partners') }}" class="inline-flex items-center gap-2 rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-700 hover:bg-gray-50">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
			Back
		</a>
	</div>

	@if(Session::has('message'))
		<div class="mb-4 rounded-md border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">{{ Session::get('message') }}</div>
	@endif

	<form action="{{ url('/admin/edit_Partner/'.$Partner->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
		@csrf
		<input type="hidden" name="image_one_cheat" value="{{ $Partner->image }}" />
		<div class="rounded-xl bg-white ring-1 ring-gray-200 p-4 space-y-4">
			<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Name</label>
					<input name="title" required value="{{ old('title', $Partner->name) }}" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800" />
				</div>
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Logo</label>
					<div class="upload-tile group rounded-lg border-2 border-dashed border-gray-200 bg-white p-3 hover:border-indigo-300 cursor-pointer" data-target="input_partner_image">
						<div class="flex items-center gap-3">
							<div class="relative h-24 w-24 overflow-hidden rounded-md bg-gray-100 border-2 border-dashed border-gray-300 flex items-center justify-center">
								<img id="preview_partner_image" src="{{ $Partner->image ? url('/uploads/partners/'.$Partner->image) : '' }}" alt="" class="{{ $Partner->image ? '' : 'hidden' }} absolute inset-0 h-full w-full object-cover" />
								<svg id="placeholder_partner_image" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="{{ $Partner->image ? 'hidden' : '' }} h-6 w-6 text-gray-400"><path d="M21 7.5V18a3 3 0 01-3 3H6a3 3 0 01-3-3V7.5L7.5 3h9L21 7.5z"/></svg>
							</div>
							<div class="flex-1">
								<input id="input_partner_image" type="file" name="image_one" accept="image/*" class="sr-only" />
								<p class="text-xs text-gray-600"><span class="text-indigo-600 underline">Click here to upload</span> • JPG/PNG up to 2MB</p>
							</div>
							<button type="button" id="clear_partner_image" class="{{ $Partner->image ? '' : 'hidden' }} shrink-0 rounded-md border border-gray-200 bg-white px-2 py-1 text-xs text-gray-700 hover:bg-gray-50">Clear</button>
						</div>
					</div>
				</div>
			<div class="pt-2">
				<button class="inline-flex items-center gap-2 rounded-md bg-indigo-600 px-3 py-2 text-sm font-medium text-white hover:bg-indigo-700">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4"><path d="M17 3H7a2 2 0 00-2 2v14a2 2 0 002 2h10a2 2 0 002-2V5l-2-2zm-2 14H9v-5h6v5zm0-7H9V5h6v5z"/></svg>
					Save Changes
				</button>
			</div>
		</div>
	</form>

	<script>
		document.addEventListener('DOMContentLoaded', function(){
			function bindPreview(inputId, imgId, placeholderId, clearId) {
				const input = document.getElementById(inputId);
				const img = document.getElementById(imgId);
				const placeholder = document.getElementById(placeholderId);
				const clearBtn = document.getElementById(clearId);
				if (!input || !img) return;
				input.addEventListener('change', () => {
					const file = input.files && input.files[0];
					if (!file) return;
					if (!file.type.startsWith('image/')) { input.value=''; return; }
					const reader = new FileReader();
					reader.onload = e => {
						img.src = e.target.result;
						img.classList.remove('hidden');
						placeholder?.classList.add('hidden');
						clearBtn?.classList.remove('hidden');
					};
					reader.readAsDataURL(file);
				});
				clearBtn?.addEventListener('click', (e) => {
					e.stopPropagation();
					input.value = '';
					img.src = '';
					img.classList.add('hidden');
					placeholder?.classList.remove('hidden');
					clearBtn.classList.add('hidden');
				});
			}
			bindPreview('input_partner_image', 'preview_partner_image', 'placeholder_partner_image', 'clear_partner_image');
			document.querySelectorAll('.upload-tile').forEach(tile => {
				const inputId = tile.dataset.target;
				const input = document.getElementById(inputId);
				tile.addEventListener('click', (e) => {
					if (e.target.tagName.toLowerCase() === 'button') return;
					input?.click();
				});
			});
		});
	</script>
@endsection


