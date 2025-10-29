
@extends('admin.tw.layout')
@section('title','Products')
@section('content')
	<div class="flex items-center justify-between mb-5">
		<div class="flex items-center gap-2">
			<span class="inline-flex h-9 w-9 items-center justify-center rounded-md bg-indigo-50 text-indigo-600 ring-1 ring-indigo-100">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M3 7.5V18a3 3 0 003 3h12a3 3 0 003-3V7.5M3 7.5 7.5 3h9L21 7.5M7.5 3V6m9-3v3"/></svg>
			</span>
			<h2 class="text-lg font-semibold">All Products</h2>
		</div>
		<div class="flex items-center gap-2 flex-wrap justify-end">
			<form method="GET" action="{{ url('/admin/products') }}" class="relative w-full sm:w-80">
				<input name="q" value="{{ request('q') }}" placeholder="Search products..." class="w-full rounded-md border border-gray-200 bg-white px-3 py-2 pr-10 text-sm text-gray-700 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-100" />
				<button type="submit" class="absolute right-1.5 top-1.5 inline-flex items-center justify-center rounded-md bg-indigo-600 px-2 py-1 text-xs text-white hover:bg-indigo-700">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M10.5 18a7.5 7.5 0 100-15 7.5 7.5 0 000 15z"/></svg>
				</button>
			</form>
			<a href="{{ url('/admin/addProduct') }}" class="shrink-0 inline-flex items-center gap-2 rounded-md bg-indigo-600 px-3 py-2 text-sm font-medium text-white hover:bg-indigo-700">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4"><path d="M12 4.5v15m7.5-7.5h-15"/></svg>
				Add Product
			</a>
		</div>
	</div>

	<div class="rounded-xl bg-white shadow-sm ring-1 ring-gray-200 overflow-hidden">
		<div class="overflow-x-auto">
			<table class="w-full text-sm">
				<thead class="bg-gray-50 text-gray-600">
					<tr>
						<th class="px-3 py-2 text-left font-medium">Product</th>
						<th class="px-3 py-2 text-left font-medium">Price</th>
						<th class="px-3 py-2 text-left font-medium">Stock</th>
						<th class="px-3 py-2 text-left font-medium">Created</th>
						<th class="px-3 py-2 text-right font-medium">Actions</th>
					</tr>
				</thead>
                
				<tbody class="divide-y">
					@forelse(($Product ?? []) as $item)
						<tr class="hover:bg-gray-50">
							<td class="px-3 py-2 text-gray-800">
								<div class="flex items-center gap-3">
									@php
										$thumb = isset($item->image_one) && $item->image_one && $item->image_one !== '0' ? url('/uploads/products/'.$item->image_one) : null;
									@endphp
									@if($thumb)
										<img src="{{ $thumb }}" alt="{{ $item->name ?? 'Product' }}" class="h-10 w-10 rounded object-cover ring-1 ring-gray-200" />
									@else
										<span class="inline-flex h-10 w-10 items-center justify-center rounded bg-gray-100 text-gray-400 ring-1 ring-gray-200">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M21 7.5V18a3 3 0 01-3 3H6a3 3 0 01-3-3V7.5L7.5 3h9L21 7.5z"/></svg>
										</span>
									@endif
                                    
									<div>
										<div class="font-medium">{{ $item->name ?? $item->title ?? '—' }}</div>
										<div class="text-xs text-gray-500">SKU: {{ $item->sku ?? '—' }}</div>
									</div>
								</div>
							</td>
							<td class="px-3 py-2 text-gray-700">{{ isset($item->price) ? number_format((float)$item->price, 2) : '—' }}</td>
							<td class="px-3 py-2">
								@php $inStock = ($item->stock ?? '') === 'In Stock'; @endphp
								<span class="inline-flex items-center gap-1 rounded-full px-2 py-0.5 text-xs {{ $inStock ? 'bg-emerald-50 text-emerald-700 ring-1 ring-emerald-200' : 'bg-rose-50 text-rose-700 ring-1 ring-rose-200' }}">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-3.5 w-3.5">
										@if($inStock)
											<path fill-rule="evenodd" d="M2.25 12a9.75 9.75 0 1119.5 0 9.75 9.75 0 01-19.5 0zm14.03-2.78a.75.75 0 10-1.06-1.06L10.5 12.94 8.78 11.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.06 0l5.25-5.25z" clip-rule="evenodd" />
										@else
											<path d="M12 2.25a9.75 9.75 0 100 19.5 9.75 9.75 0 000-19.5zM9.53 8.47a.75.75 0 011.06 0L12 9.88l1.41-1.41a.75.75 0 111.06 1.06L13.06 10.94l1.41 1.41a.75.75 0 11-1.06 1.06L12 12l-1.41 1.41a.75.75 0 11-1.06-1.06l1.41-1.41-1.41-1.41a.75.75 0 010-1.06z" />
										@endif
									</svg>
									{{ $item->stock ?? '—' }}
								</span>
							</td>
                            
							<td class="px-3 py-2 text-gray-600">{{ isset($item->created_at) ? \Carbon\Carbon::parse($item->created_at)->format('d M Y') : '—' }}</td>
							<td class="px-3 py-2 text-right whitespace-nowrap">
								<a href="{{ url('/admin/editProducts/' . $item->id) }}" class="inline-flex items-center gap-1 rounded-md border border-gray-200 px-2.5 py-1.5 text-xs text-gray-700 hover:bg-gray-50">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4"><path d="M16.862 3.487a1.5 1.5 0 112.121 2.121l-10.5 10.5a1.5 1.5 0 01-.53.353l-3.75 1.25a.75.75 0 01-.949-.949l1.25-3.75a1.5 1.5 0 01.353-.53l10.5-10.5z"/></svg>
									Edit
								</a>
								<a href="{{ url('/admin/deleteProduct/' . $item->id) }}" onclick="return confirm('Delete this product? This cannot be undone.');" class="ml-1 inline-flex items-center gap-1 rounded-md border border-rose-200 bg-rose-50 px-2.5 py-1.5 text-xs text-rose-700 hover:bg-rose-100">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4"><path stroke-linecap="round" stroke-linejoin="round" d="M6 7.5h12m-9 3v6m6-6v6M9.75 7.5l.443-1.775A1.5 1.5 0 0111.653 4.5h.694a1.5 1.5 0 011.46 1.225L14.25 7.5"/></svg>
									Delete
								</a>
							</td>
						</tr>
                        
					@empty
						<tr><td colspan="5" class="px-3 py-10 text-center">
							<div class="mx-auto mb-2 inline-flex h-10 w-10 items-center justify-center rounded-full bg-gray-100 text-gray-400 ring-1 ring-gray-200">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M3 7.5V18a3 3 0 003 3h12a3 3 0 003-3V7.5L7.5 3h9L21 7.5z"/></svg>
							</div>
							<p class="text-sm text-gray-500">No products found</p>
							<a href="{{ url('/admin/addProduct') }}" class="mt-3 inline-flex items-center gap-2 rounded-md bg-indigo-600 px-3 py-2 text-sm font-medium text-white hover:bg-indigo-700">Add your first product</a>
						</td></tr>
					@endempty
				</tbody>
			</table>
		</div>
	</div>
@endsection


