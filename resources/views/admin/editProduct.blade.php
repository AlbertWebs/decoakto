@extends('admin.tw.layout')
@section('title','Edit Product')
@section('content')
	<div class="mb-5 flex items-center justify-between">
		<div class="flex items-center gap-2">
			<span class="inline-flex h-9 w-9 items-center justify-center rounded-md bg-indigo-50 text-indigo-600 ring-1 ring-indigo-100">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M16.862 3.487a1.5 1.5 0 112.121 2.121l-10.5 10.5a1.5 1.5 0 01-.53.353l-3.75 1.25a.75.75 0 01-.949-.949l1.25-3.75a1.5 1.5 0 01.353-.53l10.5-10.5z"/></svg>
			</span>
			<h2 class="text-lg font-semibold">Edit Product</h2>
		</div>
		<a href="{{ url('/admin/products') }}" class="inline-flex items-center gap-2 rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-700 hover:bg-gray-50">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
			Back
		</a>
	</div>

	@if(Session::has('message'))
		<div class="mb-4 rounded-md border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">{{ Session::get('message') }}</div>
	@endif

	<form action="{{ url('/admin/edit_Product/'.$Product->id) }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 gap-5">
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
						<input name="title" required value="{{ old('title', $Product->name ?? $Product->title) }}" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100" />
					</div>
					<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
						<div>
							<label class="mb-1 block text-sm font-medium text-gray-700">Price</label>
							<input name="price" type="number" step="0.01" value="{{ old('price', $Product->price) }}" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100" />
						</div>
						<div>
							<label class="mb-1 block text-sm font-medium text-gray-700">Stock</label>
							<select name="stock" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100">
								@php $stock = old('stock', $Product->stock); @endphp
								<option value="In Stock" {{ ($stock==='In Stock') ? 'selected' : '' }}>In Stock</option>
								<option value="Out Of Stock" {{ ($stock==='Out Of Stock') ? 'selected' : '' }}>Out Of Stock</option>
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
								<option value="{{ $cat->id }}" {{ (old('category', $Product->category)==$cat->id) ? 'selected' : '' }}>{{ $cat->title }}</option>
							@endforeach
						</select>
					</div>
					<div>
						<label class="mb-1 block text-sm font-medium text-gray-700">Classification</label>
						<select name="classification" id="classificationSelect" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100">
							@foreach(($Classification ?? []) as $cl)
								<option value="{{ $cl->id }}" {{ (old('classification', $Product->classifications)==$cl->id) ? 'selected' : '' }}>{{ $cl->title }}</option>
							@endforeach
						</select>
					</div>
					<div>
						<label class="mb-1 block text-sm font-medium text-gray-700">Sub Classification</label>
						<select name="sub_classification" id="subClassificationSelect" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100">
							@if(!empty($Product->sub_classifications))
								<option value="{{ $Product->sub_classifications }}" selected>{{ $Product->sub_classifications }}</option>
							@else
								<option value="">Select...</option>
							@endif
						</select>
					</div>
					<div>
						<label class="mb-1 block text-sm font-medium text-gray-700">Dimensions</label>
						<input name="dimensions" value="{{ old('dimensions', $Product->dimensions) }}" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100" />
					</div>
				</div>
			</div>

			<div class="rounded-xl bg-white ring-1 ring-gray-200 p-4">
				<div class="mb-3 flex items-center gap-2 text-sm font-semibold text-gray-700">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 6.75h15m-15 5.25h15m-15 5.25h15"/></svg>
					<span>Meta & Content</span>
				</div>
				<div class="mb-4">
					<label class="mb-1 block text-sm font-medium text-gray-700">Short Description (meta)</label>
					<textarea  name="meta" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100" >{{ old('meta', $Product->meta) }}</textarea>
				</div>
				<div>
					<label class="mb-1 block text-sm font-medium text-gray-700">Content</label>
					<textarea id="content_editor" name="content" rows="12" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100">{!! old('content', $Product->content) !!}</textarea>
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
						<input type="hidden" name="image_one_cheat" value="{{ $Product->image_one }}" />
						<div class="upload-tile group rounded-lg border-2 border-dashed border-gray-200 bg-white p-3 hover:border-indigo-300 cursor-pointer" data-target="input_image_one">
							<div class="flex items-center gap-3">
								<div class="relative h-24 w-24 overflow-hidden rounded-md bg-gray-100 border-2 border-dashed border-gray-300 flex items-center justify-center">
									<img id="preview_image_one" src="{{ $Product->image_one ? url('/uploads/products/'.$Product->image_one) : '' }}" alt="" class="{{ $Product->image_one ? '' : 'hidden' }} absolute inset-0 h-full w-full object-cover" />
									<svg id="placeholder_image_one" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="{{ $Product->image_one ? 'hidden' : '' }} h-6 w-6 text-gray-400"><path d="M21 7.5V18a3 3 0 01-3 3H6a3 3 0 01-3-3V7.5L7.5 3h9L21 7.5z"/></svg>
								</div>
								<div class="flex-1">
									<input id="input_image_one" type="file" name="image_one" accept="image/*" class="sr-only" />
									<p class="text-xs text-gray-600"><span class="text-indigo-600 underline">Click here to upload</span> • JPG/PNG up to 2MB</p>
								</div>
								<button type="button" id="clear_image_one" class="{{ $Product->image_one ? '' : 'hidden' }} shrink-0 rounded-md border border-gray-200 bg-white px-2 py-1 text-xs text-gray-700 hover:bg-gray-50">Clear</button>
							</div>
						</div>
					</div>
					<div>
						<label class="mb-1 block text-sm font-medium text-gray-700">Image 2</label>
						<input type="hidden" name="image_two_cheat" value="{{ $Product->image_two }}" />
						<div class="upload-tile group rounded-lg border-2 border-dashed border-gray-200 bg-white p-3 hover:border-indigo-300 cursor-pointer" data-target="input_image_two">
							<div class="flex items-center gap-3">
								<div class="relative h-24 w-24 overflow-hidden rounded-md bg-gray-100 border-2 border-dashed border-gray-300 flex items-center justify-center">
									<img id="preview_image_two" src="{{ $Product->image_two ? url('/uploads/products/'.$Product->image_two) : '' }}" alt="" class="{{ $Product->image_two ? '' : 'hidden' }} absolute inset-0 h-full w-full object-cover" />
									<svg id="placeholder_image_two" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="{{ $Product->image_two ? 'hidden' : '' }} h-6 w-6 text-gray-400"><path d="M21 7.5V18a3 3 0 01-3 3H6a3 3 0 01-3-3V7.5L7.5 3h9L21 7.5z"/></svg>
								</div>
								<div class="flex-1">
									<input id="input_image_two" type="file" name="image_two" accept="image/*" class="sr-only" />
									<p class="text-xs text-gray-600"><span class="text-indigo-600 underline">Click here to upload</span> • JPG/PNG up to 2MB</p>
								</div>
								<button type="button" id="clear_image_two" class="{{ $Product->image_two ? '' : 'hidden' }} shrink-0 rounded-md border border-gray-200 bg-white px-2 py-1 text-xs text-gray-700 hover:bg-gray-50">Clear</button>
							</div>
						</div>
					</div>
					<div>
						<label class="mb-1 block text-sm font-medium text-gray-700">Image 3</label>
						<input type="hidden" name="image_three_cheat" value="{{ $Product->image_three }}" />
						<div class="upload-tile group rounded-lg border-2 border-dashed border-gray-200 bg-white p-3 hover:border-indigo-300 cursor-pointer" data-target="input_image_three">
							<div class="flex items-center gap-3">
								<div class="relative h-24 w-24 overflow-hidden rounded-md bg-gray-100 border-2 border-dashed border-gray-300 flex items-center justify-center">
									<img id="preview_image_three" src="{{ $Product->image_three ? url('/uploads/products/'.$Product->image_three) : '' }}" alt="" class="{{ $Product->image_three ? '' : 'hidden' }} absolute inset-0 h-full w-full object-cover" />
									<svg id="placeholder_image_three" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="{{ $Product->image_three ? 'hidden' : '' }} h-6 w-6 text-gray-400"><path d="M21 7.5V18a3 3 0 01-3 3H6a3 3 0 01-3-3V7.5L7.5 3h9L21 7.5z"/></svg>
								</div>
								<div class="flex-1">
									<input id="input_image_three" type="file" name="image_three" accept="image/*" class="sr-only" />
									<p class="text-xs text-gray-600"><span class="text-indigo-600 underline">Click here to upload</span> • JPG/PNG up to 2MB</p>
								</div>
								<button type="button" id="clear_image_three" class="{{ $Product->image_three ? '' : 'hidden' }} shrink-0 rounded-md border border-gray-200 bg-white px-2 py-1 text-xs text-gray-700 hover:bg-gray-50">Clear</button>
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
								<option value="{{ $sp->title }}" {{ (old('species', $Product->species)==$sp->title) ? 'selected' : '' }}>{{ $sp->title }}</option>
							@endforeach
						</select>
					</div>
					<div>
						<label class="mb-1 block text-sm font-medium text-gray-700">Color</label>
						<select name="color" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100">
							@foreach(($Color ?? []) as $c)
								<option value="{{ $c->title }}" {{ (old('color', $Product->color)===$c->title) ? 'selected' : '' }}>{{ $c->title }}</option>
							@endforeach
						</select>
					</div>
					<div>
						<label class="mb-1 block text-sm font-medium text-gray-700">Thickness</label>
						<select name="thickness" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100">
							@foreach(($Thickness ?? []) as $t)
								<option value="{{ $t->title }}" {{ (old('thickness', $Product->thickness)===$t->title) ? 'selected' : '' }}>{{ $t->title }}</option>
							@endforeach
						</select>
					</div>
					<div>
						<label class="mb-1 block text-sm font-medium text-gray-700">AC Rating</label>
						<select name="a_c_ratings" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100">
							@foreach(($ACRating ?? []) as $a)
								<option value="{{ $a->slung }}" {{ (old('a_c_ratings', $Product->a_c_ratings)===$a->slung) ? 'selected' : '' }}>{{ $a->title }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
					<div>
						<label class="mb-1 block text-sm font-medium text-gray-700">Water Resistance</label>
						<select name="waters" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100">
							@foreach(($Waters ?? []) as $w)
								@php $wVal = (int)$w->title; @endphp
								<option value="{{ $wVal }}" {{ (int)old('waters', (int)$Product->waters) === $wVal ? 'selected' : '' }}>{{ $w->title }}</option>
							@endforeach
						</select>
					</div>
					<div>
						<label class="mb-1 block text-sm font-medium text-gray-700">Warranties</label>
						<select name="warranties" class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 text-sm text-gray-800  focus:ring-2 focus:ring-indigo-100">
							@foreach(($Warranties ?? []) as $wr)
								@php $wrVal = (int)$wr->title; @endphp
								<option value="{{ $wrVal }}" {{ (int)old('warranties', (int)$Product->warranties) === $wrVal ? 'selected' : '' }}>{{ $wr->title }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="pt-4">
					<button class="inline-flex items-center gap-2 rounded-md bg-indigo-600 px-3 py-2 text-sm font-medium text-white hover:bg-indigo-700">
						<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-4 w-4"><path d="M17 3H7a2 2 0 00-2 2v14a2 2 0 002 2h10a2 2 0 002-2V5l-2-2zm-2 14H9v-5h6v5zm0-7H9V5h6v5z"/></svg>
						Update Product
					</button>
				</div>
			</div>
		</div>
	</form>

	<script>
		document.addEventListener("DOMContentLoaded", function () {
			const classification = document.getElementById('classificationSelect');
			const subSelect = document.getElementById('subClassificationSelect');
			if (classification && subSelect) {
				classification.addEventListener('change', async () => {
					const id = classification.value;
					subSelect.innerHTML = '<option value="" id="loadingOption">Loading...</option>';
					try {
						const res = await fetch(`{{ url('/admin/get-subcategories') }}/${id}`, { headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' }});
						const data = await res.json();
						subSelect.innerHTML = (data || []).map(s => `<option value="${s.id}">${s.title}</option>`).join('');
					} catch (e) {
						subSelect.innerHTML = '';
					}
				});
			}

			function bindPreview(inputId, imgId, placeholderId, clearId) {
				const input = document.getElementById(inputId);
				const img = document.getElementById(imgId);
				const placeholder = document.getElementById(placeholderId);
				const clearBtn = document.getElementById(clearId);
				if (!input || !img) return;
				input.addEventListener('change', () => {
					const file = input.files && input.files[0];
					if (!file) return;
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

	<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
	<script>
		if (window.CKEDITOR) {
			CKEDITOR.replace('content_editor');
		}
	</script>
@endsection


