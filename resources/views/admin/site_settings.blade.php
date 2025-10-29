@extends('admin.tw.layout')
@section('title','Site Settings')
@section('content')
	@php $s = ($SiteSettings ?? [])[0] ?? null; @endphp
	<div class="mb-5 flex items-center justify-between">
		<div class="flex items-center gap-2">
			<span class="inline-flex h-9 w-9 items-center justify-center rounded-md bg-amber-100 text-amber-700 ring-1 ring-amber-200">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M12 8a4 4 0 110 8 4 4 0 010-8z"/><path fill-rule="evenodd" d="M12 2a1 1 0 011 1v1.07a7.965 7.965 0 012.121.877l.758-.758a1 1 0 011.414 0l1.414 1.414a1 1 0 010 1.414l-.758.758c.36.65.642 1.367.817 2.121H21a1 1 0 011 1v2a1 1 0 01-1 1h-1.07a7.965 7.965 0 01-.877 2.121l.758.758a1 1 0 010 1.414l-1.414 1.414a1 1 0 01-1.414 0l-.758-.758a7.965 7.965 0 01-2.121.817V21a1 1 0 01-1 1h-2a1 1 0 01-1-1v-1.07a7.965 7.965 0 01-2.121-.877l-.758.758a1 1 0 01-1.414 0L5.05 18.35a1 1 0 010-1.414l.758-.758A7.965 7.965 0 015 14.058H4a1 1 0 01-1-1v-2a1 1 0 011-1h1.07a7.965 7.965 0 01.877-2.121l-.758-.758a1 1 0 010-1.414L7.603 3.34a1 1 0 011.414 0l.758.758A7.965 7.965 0 0112 4.07V3a1 1 0 011-1z" clip-rule="evenodd"/></svg>
			</span>
			<h2 class="text-lg font-semibold">Site Settings</h2>
		</div>
	</div>

<form id="siteSettingsForm" class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
		<!-- Branding -->
<details class="rounded-xl bg-white ring-1 ring-gray-200 lg:col-span-1" open>
			<summary class="flex cursor-pointer list-none items-center justify-between p-4 text-sm font-semibold text-gray-700">
				<span class="inline-flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4 text-indigo-600"><path d="M4 6h16v12H4z"/></svg> Branding</span>
				<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.18l3.71-3.95a.75.75 0 111.08 1.04l-4.25 4.52a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd"/></svg>
			</summary>
			<div class="p-5 pt-0 grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="text-xs text-gray-500">Site Name</label>
                    <input name="sitename" value="{{ $s->sitename ?? '' }}" class="mt-1 w-full rounded-md border border-gray-200 px-2 py-1 text-sm text-gray-800" />
                </div>
                <div>
                    <label class="text-xs text-gray-500">Tagline</label>
                    <input name="tagline" value="{{ $s->tagline ?? '' }}" class="mt-1 w-full rounded-md border border-gray-200 px-2 py-1 text-sm text-gray-800" />
                </div>
			</div>
			<div class="px-5 grid grid-cols-3 gap-4 pb-5">
				<div class="space-y-2">
					<p class="text-xs text-gray-500">Logo</p>
					<div class="h-16 w-full rounded border border-gray-200 bg-gray-50 flex items-center justify-center overflow-hidden">
						@if(!empty($s->logo))
							<img src="{{ url('/uploads/logo/'.$s->logo) }}" class="h-full object-contain" alt="logo" />
						@else
							<span class="text-xs text-gray-400">No logo</span>
						@endif
					</div>
				</div>
				<div class="space-y-2">
					<p class="text-xs text-gray-500">Footer Logo</p>
					<div class="h-16 w-full rounded border border-gray-200 bg-gray-50 flex items-center justify-center overflow-hidden">
						@if(!empty($s->logo_footer))
							<img src="{{ url('/uploads/logo/'.$s->logo_footer) }}" class="h-full object-contain" alt="logo footer" />
						@else
							<span class="text-xs text-gray-400">No logo</span>
						@endif
					</div>
				</div>
				<div class="space-y-2">
					<p class="text-xs text-gray-500">Favicon</p>
					<div class="h-10 w-10 rounded border border-gray-200 bg-gray-50 flex items-center justify-center overflow-hidden">
						@if(!empty($s->favicon))
							<img src="{{ url('/uploads/logo/'.$s->favicon) }}" class="h-full w-full object-contain" alt="favicon" />
						@else
							<span class="text-[10px] text-gray-400">N/A</span>
						@endif
					</div>
				</div>
			</div>
		</details>

		<!-- Contact -->
<details class="rounded-xl bg-white ring-1 ring-gray-200 lg:col-span-1" open>
			<summary class="flex cursor-pointer list-none items-center justify-between p-4 text-sm font-semibold text-gray-700">
				<span class="inline-flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4 text-sky-600"><path d="M2.25 6.75l9.75 6 9.75-6v10.5a1.5 1.5 0 01-1.5 1.5H3.75a1.5 1.5 0 01-1.5-1.5V6.75z"/></svg> Contact</span>
				<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.18l3.71-3.95a.75.75 0 111.08 1.04l-4.25 4.52a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd"/></svg>
			</summary>
            <div class="p-5 pt-0 grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div><label class="text-xs text-gray-500">Email</label><input name="email" value="{{ $s->email ?? '' }}" class="mt-1 w-full rounded-md border border-gray-200 px-2 py-1 text-sm"/></div>
                <div><label class="text-xs text-gray-500">Email (alt)</label><input name="email_one" value="{{ $s->email_one ?? '' }}" class="mt-1 w-full rounded-md border border-gray-200 px-2 py-1 text-sm"/></div>
                <div><label class="text-xs text-gray-500">Mobile</label><input name="mobile_one" value="{{ $s->mobile_one ?? '' }}" class="mt-1 w-full rounded-md border border-gray-200 px-2 py-1 text-sm"/></div>
                <div><label class="text-xs text-gray-500">Mobile (alt)</label><input name="mobile_two" value="{{ $s->mobile_two ?? '' }}" class="mt-1 w-full rounded-md border border-gray-200 px-2 py-1 text-sm"/></div>
                <div><label class="text-xs text-gray-500">Address</label><input name="address" value="{{ $s->address ?? '' }}" class="mt-1 w-full rounded-md border border-gray-200 px-2 py-1 text-sm"/></div>
                <div><label class="text-xs text-gray-500">Location</label><input name="location" value="{{ $s->location ?? '' }}" class="mt-1 w-full rounded-md border border-gray-200 px-2 py-1 text-sm"/></div>
                <div class="sm:col-span-2"><label class="text-xs text-gray-500">Website</label><input name="url" value="{{ $s->url ?? '' }}" class="mt-1 w-full rounded-md border border-gray-200 px-2 py-1 text-sm text-indigo-700"/></div>
            </div>
		</details>

		<!-- Socials & Payments -->
<details class="rounded-xl bg-white ring-1 ring-gray-200 lg:col-span-2">
			<summary class="flex cursor-pointer list-none items-center justify-between p-4 text-sm font-semibold text-gray-700">
				<span class="inline-flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4 text-blue-600"><path d="M8 12a4 4 0 118 0 4 4 0 01-8 0z"/><path d="M2 12a10 10 0 1020 0 10 10 0 10-20 0zm10-7a7 7 0 110 14 7 7 0 010-14z"/></svg> Socials & Payments</span>
				<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.18l3.71-3.95a.75.75 0 111.08 1.04l-4.25 4.52a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd"/></svg>
			</summary>
            <div class="p-5 pt-0 grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div><label class="text-xs text-gray-500">Facebook</label><input name="facebook" value="{{ $s->facebook ?? '' }}" class="mt-1 w-full rounded-md border border-gray-200 px-2 py-1 text-sm"/></div>
                <div><label class="text-xs text-gray-500">WhatsApp</label><input name="whatsapp" value="{{ $s->whatsapp ?? '' }}" class="mt-1 w-full rounded-md border border-gray-200 px-2 py-1 text-sm"/></div>
                <div><label class="text-xs text-gray-500">Telegram</label><input name="telegram" value="{{ $s->telegram ?? '' }}" class="mt-1 w-full rounded-md border border-gray-200 px-2 py-1 text-sm"/></div>
                <div><label class="text-xs text-gray-500">Twitter</label><input name="twitter" value="{{ $s->twitter ?? '' }}" class="mt-1 w-full rounded-md border border-gray-200 px-2 py-1 text-sm"/></div>
                <div><label class="text-xs text-gray-500">LinkedIn</label><input name="linkedin" value="{{ $s->linkedin ?? '' }}" class="mt-1 w-full rounded-md border border-gray-200 px-2 py-1 text-sm"/></div>
                <div><label class="text-xs text-gray-500">Instagram</label><input name="instagram" value="{{ $s->instagram ?? '' }}" class="mt-1 w-full rounded-md border border-gray-200 px-2 py-1 text-sm"/></div>
                <div><label class="text-xs text-gray-500">YouTube</label><input name="youtube" value="{{ $s->youtube ?? '' }}" class="mt-1 w-full rounded-md border border-gray-200 px-2 py-1 text-sm"/></div>
                <div><label class="text-xs text-gray-500">Google</label><input name="google" value="{{ $s->google ?? '' }}" class="mt-1 w-full rounded-md border border-gray-200 px-2 py-1 text-sm"/></div>
                <div><label class="text-xs text-gray-500">M-Pesa</label><input name="mpesa" value="{{ $s->mpesa ?? '' }}" class="mt-1 w-full rounded-md border border-gray-200 px-2 py-1 text-sm"/></div>
                <div><label class="text-xs text-gray-500">PayPal</label><input name="paypal" value="{{ $s->paypal ?? '' }}" class="mt-1 w-full rounded-md border border-gray-200 px-2 py-1 text-sm"/></div>
            </div>
		</details>

		<!-- Content Blocks -->
<details class="rounded-xl bg-white ring-1 ring-gray-200 lg:col-span-2" open>
			<summary class="flex cursor-pointer list-none items-center justify-between p-4 text-sm font-semibold text-gray-700">
				<span class="inline-flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4 text-rose-600"><path d="M4 5h16v2H4zM4 11h16v2H4zM4 17h16v2H4z"/></svg> Content</span>
				<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.18l3.71-3.95a.75.75 0 111.08 1.04l-4.25 4.52a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd"/></svg>
			</summary>
			<div class="p-5 pt-0 grid grid-cols-1 md:grid-cols-1 gap-6">
                <div>
                    <label class="text-xs text-gray-500 mb-1">Welcome</label>
                    <textarea id="welcome_editor" name="welcome" rows="6" class="mt-1 w-full rounded-md border border-gray-200 bg-white p-2 text-sm text-gray-800">{{ $s->welcome ?? '' }}</textarea>
                </div>
                
                <div class="md:col-span-2">
                    <label class="text-xs text-gray-500 mb-1">Map Embed</label>
                    <textarea name="map" rows="3" class="mt-1 w-full rounded-md border border-gray-200 bg-white p-2 text-xs text-gray-700">{{ $s->map ?? '' }}</textarea>
                </div>
			</div>
		</details>

		<!-- Widgets / Status -->
<details class="rounded-xl bg-white ring-1 ring-gray-200 lg:col-span-2">
			<summary class="flex cursor-pointer list-none items-center justify-between p-4 text-sm font-semibold text-gray-700">
				<span class="inline-flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4 text-emerald-600"><path d="M12 2a10 10 0 100 20 10 10 0 000-20z"/></svg> Widgets</span>
				<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.18l3.71-3.95a.75.75 0 111.08 1.04l-4.25 4.52a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd"/></svg>
			</summary>
            <div class="p-5 pt-0 grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div>
                    @php $tawk = (int)($s->tawkToStatus ?? 0) === 1; @endphp
                    <label class="text-xs text-gray-500">Tawk.to Status</label>
                    <div class="mt-1 flex items-center gap-2">
                        <input type="checkbox" name="tawkToStatus" {{ $tawk ? 'checked' : '' }} class="h-4 w-4" />
                        <span class="text-xs text-gray-600">Enable</span>
                    </div>
                </div>
                <div>
                    @php $wa = (int)($s->whatsAppStatus ?? 0) === 1; @endphp
                    <label class="text-xs text-gray-500">WhatsApp Status</label>
                    <div class="mt-1 flex items-center gap-2">
                        <input type="checkbox" name="whatsAppStatus" {{ $wa ? 'checked' : '' }} class="h-4 w-4" />
                        <span class="text-xs text-gray-600">Enable</span>
                    </div>
                </div>
                <div class="sm:col-span-1">
                    <label class="text-xs text-gray-500">Tawk.to Script</label>
                    <textarea name="tawkTo" rows="4" class="mt-1 w-full rounded-md border border-gray-200 bg-white p-2 text-[11px] text-gray-700">{{ $s->tawkTo ?? '' }}</textarea>
                </div>
            </div>
		</details>

    <div class="lg:col-span-3 flex items-center justify-end gap-3">
        <button type="submit" class="inline-flex items-center gap-2 rounded-md bg-indigo-600 px-3 py-2 text-sm font-medium text-white hover:bg-indigo-700">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4"><path d="M17 3H7a2 2 0 00-2 2v14a2 2 0 002 2h10a2 2 0 002-2V5l-2-2zm-2 14H9v-5h6v5zm0-7H9V5h6v5z"/></svg>
            Save Settings
        </button>
        <span id="saveStatus" class="text-sm text-gray-500"></span>
    </div>
</form>

<script>
document.addEventListener('DOMContentLoaded', function(){
    const form = document.getElementById('siteSettingsForm');
    const statusEl = document.getElementById('saveStatus');
    form?.addEventListener('submit', async (e) => {
        e.preventDefault();
        statusEl.textContent = 'Saving...';
        const fd = new FormData(form);
        fd.append('_method', 'PUT');
        try {
            const res = await fetch(`{{ url('/admin/updateSiteSettingsAjax') }}`, { method: 'POST', body: fd });
            if (!res.ok) throw new Error('Failed');
            statusEl.textContent = 'Saved successfully';
            setTimeout(()=> statusEl.textContent = '', 2500);
        } catch(err) {
            statusEl.textContent = 'Save failed';
        }
    });
    if (window.CKEDITOR) {
        try { CKEDITOR.replace('welcome_editor'); } catch(e) {}
    }
});
</script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
@endsection


