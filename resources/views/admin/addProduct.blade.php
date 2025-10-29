@extends('admin.tw.layout')
@section('title','Add Product')
@section('content')
	<div class="mb-5 flex items-center justify-between">
		<div class="flex items-center gap-2">
			<span class="inline-flex h-9 w-9 items-center justify-center rounded-md bg-indigo-50 text-indigo-600 ring-1 ring-indigo-100">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M12 4.5v15m7.5-7.5h-15"/></svg>
			</span>
			<h2 class="text-lg font-semibold">Add Product</h2>
		</div>
		<a href="{{ url('/admin/products') }}" class="inline-flex items-center gap-2 rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-700 hover:bg-gray-50">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
			Back
		</a>
	</div>

	@if(Session::has('message'))
		<div class="mb-4 rounded-md border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">{{ Session::get('message') }}</div>
	@endif

    <form action="{{ url('/admin/add_Product') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 gap-5">
		@csrf
        <div class="space-y-6">
            <div class="rounded-xl bg-white ring-1 ring-gray-200 p-4">
            <div class="mb-3 flex items-center gap-2 text-sm font-semibold text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h12m-12 5.25h16.5"/></svg>
                <span>Basics</span>
            </div>
            <div class="space-y-4">
                <div>
                    <label class="mb-1 block text-sm font-medium text-gray-700">Name</label>
                    <input name="title" required class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100" />
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="mb-1 block text-sm font-medium text-gray-700">Price</label>
                        <input name="price" type="number" step="0.01" value="0.00" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100" />
                    </div>
                    <div>
                        <label class="mb-1 block text-sm font-medium text-gray-700">Stock</label>
                        <select name="stock" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100">
                            <option selected value="In Stock">In Stock</option>
                            <option value="Out Of Stock">Out Of Stock</option>
                        </select>
                    </div>
                </div>
            </div>
			</div>

            <div class="rounded-xl bg-white ring-1 ring-gray-200 p-4 space-y-4">
                <div class="mb-3 flex items-center gap-2 text-sm font-semibold text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4"><path d="M4 5h6v6H4zM14 5h6v6h-6zM4 15h6v6H4zM14 15h6v6h-6z"/></svg>
                    <span>Classification</span>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Category</label>
					<select name="category" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100">
						@foreach(($Category ?? []) as $cat)
							<option value="{{ $cat->id }}">{{ $cat->title }}</option>
						@endforeach
					</select>
				</div>
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Classification</label>
					<select name="classification" id="classificationSelect" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100">
						@foreach(($Classification ?? []) as $cl)
							<option value="{{ $cl->id }}">{{ $cl->title }}</option>
						@endforeach
					</select>
				</div>
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Sub Classification</label>
					<select name="sub_classification" id="subClassificationSelect" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100">
						
					</select>
				</div>
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Dimensions</label>
					<input name="dimensions" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100" />
				</div>
			</div>
            <br><br>

            <div class="rounded-xl bg-white ring-1 ring-gray-200 p-4">
                <div class="mb-3 flex items-center gap-2 text-sm font-semibold text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 6.75h15m-15 5.25h15m-15 5.25h15"/></svg>
                    <span>Meta & Content</span>
                </div>
                <div class="mb-4">
                    <label class="mb-1 block text-sm font-medium text-gray-700">Short Description (meta)</label>
                    <textarea  name="meta" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100" >
                        
                    </textarea>
                </div>
                <div>
                    <label class="mb-1 block text-sm font-medium text-gray-700">Content</label>
                    <textarea id="content_editor" name="content" rows="12" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100"></textarea>
                </div>
            </div>
		</div>
        <div class="space-y-6">
            <div class="rounded-xl bg-white ring-1 ring-gray-200 p-4">
            <div class="mb-3 flex items-center gap-2 text-sm font-semibold text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4"><path stroke-linecap="round" stroke-linejoin="round" d="M3 4.5h18M4.5 9h15M3 13.5h18M4.5 18h15"/></svg>
                <span>Images</span>
            </div>
            <div class="grid grid-cols-3 gap-5">
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Image 1</label>
					<div class="upload-tile group rounded-lg border-2 border-dashed border-gray-200 bg-white p-3 hover:border-indigo-300 cursor-pointer" data-target="input_image_one">
						<div class="flex items-center gap-3">
                            <div class="relative h-24 w-24 overflow-hidden rounded-md bg-gray-100 border-2 border-dashed border-gray-300 flex items-center justify-center">
								<img id="preview_image_one" src="" alt="" class="hidden absolute inset-0 h-full w-full object-cover" />
								<svg id="placeholder_image_one" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 text-gray-400"><path d="M21 7.5V18a3 3 0 01-3 3H6a3 3 0 01-3-3V7.5L7.5 3h9L21 7.5z"/></svg>
							</div>
							<div class="flex-1">
								<input id="input_image_one" type="file" name="image_one" accept="image/*" class="sr-only" />
								<p class="text-xs text-gray-600"><span class="text-indigo-600 underline">Click here to upload</span> • JPG/PNG up to 2MB</p>
							</div>
							<button type="button" id="clear_image_one" class="hidden shrink-0 rounded-md border border-gray-200 bg-white px-2 py-1 text-xs text-gray-700 hover:bg-gray-50">Clear</button>
						</div>
					</div>
				</div>
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Image 2</label>
					<div class="upload-tile group rounded-lg border-2 border-dashed border-gray-200 bg-white p-3 hover:border-indigo-300 cursor-pointer" data-target="input_image_two">
						<div class="flex items-center gap-3">
                            <div class="relative h-24 w-24 overflow-hidden rounded-md bg-gray-100 border-2 border-dashed border-gray-300 flex items-center justify-center">
								<img id="preview_image_two" src="" alt="" class="hidden absolute inset-0 h-full w-full object-cover" />
								<svg id="placeholder_image_two" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 text-gray-400"><path d="M21 7.5V18a3 3 0 01-3 3H6a3 3 0 01-3-3V7.5L7.5 3h9L21 7.5z"/></svg>
							</div>
							<div class="flex-1">
								<input id="input_image_two" type="file" name="image_two" accept="image/*" class="sr-only" />
								<p class="text-xs text-gray-600"><span class="text-indigo-600 underline">Click here to upload</span> • JPG/PNG up to 2MB</p>
							</div>
							<button type="button" id="clear_image_two" class="hidden shrink-0 rounded-md border border-gray-200 bg-white px-2 py-1 text-xs text-gray-700 hover:bg-gray-50">Clear</button>
						</div>
					</div>
				</div>
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Image 3</label>
					<div class="upload-tile group rounded-lg border-2 border-dashed border-gray-200 bg-white p-3 hover:border-indigo-300 cursor-pointer" data-target="input_image_three">
						<div class="flex items-center gap-3">
                            <div class="relative h-24 w-24 overflow-hidden rounded-md bg-gray-100 border-2 border-dashed border-gray-300 flex items-center justify-center">
								<img id="preview_image_three" src="" alt="" class="hidden absolute inset-0 h-full w-full object-cover" />
								<svg id="placeholder_image_three" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 text-gray-400"><path d="M21 7.5V18a3 3 0 01-3 3H6a3 3 0 01-3-3V7.5L7.5 3h9L21 7.5z"/></svg>
							</div>
							<div class="flex-1">
								<input id="input_image_three" type="file" name="image_three" accept="image/*" class="sr-only" />
								<p class="text-xs text-gray-600"><span class="text-indigo-600 underline">Click here to upload</span> • JPG/PNG up to 2MB</p>
							</div>
							<button type="button" id="clear_image_three" class="hidden shrink-0 rounded-md border border-gray-200 bg-white px-2 py-1 text-xs text-gray-700 hover:bg-gray-50">Clear</button>
						</div>
					</div>
				</div>
            </div>
            </div>
            <div class="rounded-xl bg-white ring-1 ring-gray-200 p-4">
            <div class="mb-3 flex items-center gap-2 text-sm font-semibold text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4"><path d="M12 2a7 7 0 00-7 7v2a7 7 0 007 7 7 7 0 007-7V9a7 7 0 00-7-7z"/></svg>
                <span>Attributes</span>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Species</label>
					<select name="species" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100">
						@foreach(($Species ?? []) as $sp)
							<option value="{{ $sp->title }}">{{ $sp->title }}</option>
						@endforeach
					</select>
				</div>
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Color</label>
					<select name="color" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100">
						@foreach(($Color ?? []) as $c)
							<option value="{{ $c->title }}">{{ $c->title }}</option>
						@endforeach
					</select>
				</div>
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Thickness</label>
					<select name="thickness" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100">
						@foreach(($Thickness ?? []) as $t)
							<option value="{{ $t->title }}">{{ $t->title }}</option>
						@endforeach
					</select>
				</div>
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">AC Rating</label>
					<select name="a_c_ratings" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100">
						@foreach(($ACRating ?? []) as $a)
							<option value="{{ $a->slung }}">{{ $a->title }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="mb-1 block text-sm font-medium text-gray-700">Water Resistance</label>
                    <select name="waters" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100">
                        @foreach(($Waters ?? []) as $w)
                            <option value="{{ (int) $w->title }}">{{ $w->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="mb-1 block text-sm font-medium text-gray-700">Warranties</label>
                    <select name="warranties" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100">
                        @foreach(($Warranties ?? []) as $wr)
                            <option value="{{ (int) $wr->title }}">{{ $wr->title }}</option>
                        @endforeach
                    </select>
                </div>
			</div>
            <div class="pt-4">
                <button class="inline-flex items-center gap-2 rounded-md bg-indigo-600 px-3 py-2 text-sm font-medium text-white hover:bg-indigo-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-4 w-4"><path d="M17 3H7a2 2 0 00-2 2v14a2 2 0 002 2h10a2 2 0 002-2V5l-2-2zm-2 14H9v-5h6v5zm0-7H9V5h6v5z"/></svg>
                    Save Product
                </button>
            </div>
            </div>
        </div>
	</form>



	<!--  -->
	<script>
	document.addEventListener("DOMContentLoaded", function () {

		// ---- Sub-classification fetch ----
		const classification = document.getElementById('classificationSelect');
		const subSelect = document.getElementById('subClassificationSelect');

		async function loadSubcategories(id, selectedId = '') {
			if (!subSelect) return;
			subSelect.innerHTML = '<option value="" id="loadingOption">Loading...</option>';
			try {
				const res = await fetch(`{{ url('/admin/get-subcategories') }}/${id}`, { headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' }});
				const data = await res.json();
				const options = (data || []).map(s => `<option value="${s.id}" ${String(selectedId)===String(s.id)?'selected':''}>${s.title}</option>`).join('');
				subSelect.innerHTML = options;
			} catch (e) {
				subSelect.innerHTML = '';
			}
		}

		if (classification && subSelect) {
			classification.addEventListener('change', async () => {
				const id = classification.value;
				if (!id) { subSelect.innerHTML = '<option value="">Select...</option>'; return; }
				loadSubcategories(id);
			});
			// Initial load if classification already has a value
			if (classification.value) {
				loadSubcategories(classification.value);
			}
		}

		// ---- Preview Bind Function ----
		function bindPreview(inputId, imgId, placeholderId, clearId) {
			const input = document.getElementById(inputId);
			const img = document.getElementById(imgId);
			const placeholder = document.getElementById(placeholderId);
			const clearBtn = document.getElementById(clearId);

			if (!input || !img) return;

			input.addEventListener('change', () => {
				const file = input.files && input.files[0];
				if (!file) return;

				if (!file.type.startsWith('image/')) {
					alert('Only image files are allowed');
					input.value = '';
					return;
				}

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

		bindPreview('input_image_one', 'preview_image_one', 'placeholder_image_one', 'clear_image_one');
		bindPreview('input_image_two', 'preview_image_two', 'placeholder_image_two', 'clear_image_two');
		bindPreview('input_image_three', 'preview_image_three', 'placeholder_image_three', 'clear_image_three');

		// ---- Make the whole tile clickable ----
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

	<!--  -->
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        if (window.CKEDITOR) {
            CKEDITOR.replace('content_editor');
        }
    </script>
@endsection


