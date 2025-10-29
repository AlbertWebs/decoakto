@extends('admin.tw.layout')
@section('title','Edit User')
@section('content')
	<div class="mb-5 flex items-center justify-between">
		<div class="flex items-center gap-2">
			<span class="inline-flex h-9 w-9 items-center justify-center rounded-md bg-sky-100 text-sky-700 ring-1 ring-sky-200">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M15 19a6 6 0 10-12 0v1h12v-1zM9 11a4 4 0 100-8 4 4 0 000 8zM21 19a6.5 6.5 0 00-7.5-6.44 7.97 7.97 0 012.5 5.94v1H21v-1zM17 11a3 3 0 110-6 3 3 0 010 6z"/></svg>
			</span>
			<h2 class="text-lg font-semibold">Edit User</h2>
		</div>
		<a href="{{ url('/admin/users') }}" class="inline-flex items-center gap-2 rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-700 hover:bg-gray-50">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
			Back
		</a>
	</div>

	@if(Session::has('message'))
		<div class="mb-4 rounded-md border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">{{ Session::get('message') }}</div>
	@endif

	<form action="{{ url('/admin/edit_User/'.$User->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
		@csrf
		<input type="hidden" name="image_cheat" value="{{ $User->image ?? '' }}" />
		<div class="rounded-xl bg-white ring-1 ring-gray-200 p-4 space-y-4">
			<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Name</label>
					<input name="name" value="{{ old('name', $User->name) }}" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800" />
				</div>
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Email</label>
					<input name="email" type="email" value="{{ old('email', $User->email) }}" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800" />
				</div>
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Mobile</label>
					<input name="mobile" value="{{ old('mobile', $User->mobile) }}" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800" />
				</div>
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Address</label>
					<input name="address" value="{{ old('address', $User->address) }}" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800" />
				</div>
			</div>
			<div>
				<label class="mb-1 block text-sm font-medium text-gray-700">Avatar</label>
				<div class="upload-tile group rounded-lg border-2 border-dashed border-gray-200 bg-white p-3 hover:border-indigo-300 cursor-pointer max-w-sm" data-target="input_user_image">
					<div class="flex items-center gap-3">
						<div class="relative h-32 w-32 overflow-hidden rounded-md bg-gray-100 border-2 border-dashed border-gray-300 flex items-center justify-center">
							<img id="preview_user_image" src="{{ $User->image ? url('/uploads/users/'.$User->image) : '' }}" alt="" class="{{ $User->image ? '' : 'hidden' }} absolute inset-0 h-full w-full object-cover" />
							<svg id="placeholder_user_image" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="{{ $User->image ? 'hidden' : '' }} h-6 w-6 text-gray-400"><path d="M21 7.5V18a3 3 0 01-3 3H6a3 3 0 01-3-3V7.5L7.5 3h9L21 7.5z"/></svg>
						</div>
						<div class="flex-1">
							<input id="input_user_image" type="file" name="image" accept="image/*" class="sr-only" />
							<p class="text-xs text-gray-600"><span class="text-indigo-600 underline">Click here to upload</span> • JPG/PNG up to 2MB</p>
						</div>
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
			const tile = document.querySelector('.upload-tile');
			const input = document.getElementById('input_user_image');
			const img = document.getElementById('preview_user_image');
			const placeholder = document.getElementById('placeholder_user_image');
			if (tile && input) {
				tile.addEventListener('click', (e) => { if (e.target.tagName.toLowerCase() !== 'input') input?.click(); });
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


