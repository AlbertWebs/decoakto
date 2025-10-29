@extends('admin.tw.layout')
@section('title','Dashboard')
@section('content')
	@if(Session::has('message'))
		<div class="mb-4 rounded-md border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800">
			{{ Session::get('message') }}
		</div>
	@endif

	<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
		<div class="rounded-xl p-5 bg-gradient-to-br from-blue-500 to-blue-500 text-white shadow ring-1 ring-white/10">
			<div class="flex items-center gap-4">
				<span class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-white/15">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
						<path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75V8.25a6 6 0 10-12 0v1.5a8.967 8.967 0 01-2.311 6.022c1.76.68 3.622 1.102 5.454 1.31M8.25 17.25a3.75 3.75 0 007.5 0" />
					</svg>
				</span>
				<div>
					<p class="text-xs/5 text-white/80">Notifications</p>
					<p class="mt-1 text-2xl font-semibold">{{ isset($Notifications) ? count($Notifications) : 0 }}</p>
				</div>
			</div>
		</div>
		<div class="rounded-xl p-5 bg-white shadow-sm ring-1 ring-gray-200">Traffic table
			<div class="flex items-center gap-4">
				<span class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-blue-50 text-blue-600 ring-1 ring-blue-100">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
						<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
					</svg>
				</span>
				<div>
					<p class="text-xs/5 text-gray-500">Recent Activity</p>
					<p class="mt-1 text-2xl font-semibold">{{ isset($ActivityLog) ? (method_exists($ActivityLog,'total') ? $ActivityLog->total() : count($ActivityLog)) : 0 }}</p>
				</div>
			</div>
		</div>
		<div class="rounded-xl p-5 bg-white shadow-sm ring-1 ring-gray-200">
			<div class="flex items-center gap-4">
				<span class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-emerald-50 text-emerald-600 ring-1 ring-emerald-100">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
						<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.5a2.25 2.25 0 01-2.36 0l-7.5-4.5A2.25 2.25 0 012.25 6.993V6.75" />
					</svg>
				</span>
				<div>
					<p class="text-xs/5 text-gray-500">Messages</p>
					<p class="mt-1 text-2xl font-semibold">{{ isset($Message) ? count($Message) : 0 }}</p>
				</div>
			</div>
		</div>
		<div class="rounded-xl p-5 bg-white shadow-sm ring-1 ring-gray-200">
			<div class="flex items-center gap-4">
				<span class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-amber-50 text-amber-600 ring-1 ring-amber-100">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
						<path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l1.834 1.835c.39.39.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v2.594c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-1.835 1.834a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-2.594c-.55 0-1.02-.398-1.11-.94l-.149-.894c-.07-.424-.383-.764-.78-.93-.398-.164-.855-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12L3.16 19.84a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.203-.165-.397-.505-.71-.93-.781l-.895-.149c-.542-.09-.94-.56-.94-1.11V8.25c0-.55.398-1.02.94-1.11l.894-.149c.425-.07.766-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45L5.66 1.91c.39-.39 1.002-.44 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.93l.149-.894z" />
					</svg>
				</span>
				<div>
					<p class="text-xs/5 text-gray-500">Settings</p>
					<p class="mt-1 text-2xl font-semibold">{{ isset($SiteSettings) ? count($SiteSettings) : 0 }}</p>
				</div>
			</div>
		</div>
	</div>

	<div class="mt-6">
		<h2 class="mb-3 text-sm font-semibold text-gray-600">Quick actions</h2>
		<div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3">
			<a href="{{ url('/admin/products') }}" class="group rounded-lg border bg-white px-3 py-3 text-center shadow-sm ring-1 ring-gray-200 hover:shadow transition">
				<div class="mx-auto mb-2 inline-flex h-10 w-10 items-center justify-center rounded-full bg-indigo-50 text-indigo-600 ring-1 ring-indigo-100 group-hover:bg-indigo-100">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M21 7.5V18a3 3 0 01-3 3H6a3 3 0 01-3-3V7.5"/><path d="M3 7.5L7.5 3h9L21 7.5M7.5 3V6m9-3v3"/></svg>
				</div>
				<p class="text-xs font-medium text-gray-700">Products</p>
			</a>
			<a href="{{ url('/admin/categories') }}" class="group rounded-lg border bg-white px-3 py-3 text-center shadow-sm ring-1 ring-gray-200 hover:shadow transition">
				<div class="mx-auto mb-2 inline-flex h-10 w-10 items-center justify-center rounded-full bg-fuchsia-50 text-fuchsia-600 ring-1 ring-fuchsia-100 group-hover:bg-fuchsia-100">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M3 3h7v7H3zM14 3h7v7h-7zM3 14h7v7H3zM14 14h7v7h-7z"/></svg>
				</div>
				<p class="text-xs font-medium text-gray-700">Categories</p>
			</a>
			<a href="{{ url('/admin/blog') }}" class="group rounded-lg border bg-white px-3 py-3 text-center shadow-sm ring-1 ring-gray-200 hover:shadow transition">
				<div class="mx-auto mb-2 inline-flex h-10 w-10 items-center justify-center rounded-full bg-rose-50 text-rose-600 ring-1 ring-rose-100 group-hover:bg-rose-100">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M4 5h16v2H4zM4 11h16v2H4zM4 17h10v2H4z"/></svg>
				</div>
				<p class="text-xs font-medium text-gray-700">Blog</p>
			</a>
			<a href="{{ url('/admin/users') }}" class="group rounded-lg border bg-white px-3 py-3 text-center shadow-sm ring-1 ring-gray-200 hover:shadow transition">
				<div class="mx-auto mb-2 inline-flex h-10 w-10 items-center justify-center rounded-full bg-emerald-50 text-emerald-600 ring-1 ring-emerald-100 group-hover:bg-emerald-100">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M15 19a6 6 0 10-12 0v1h12v-1zM9 11a4 4 0 100-8 4 4 0 000 8zM17 11a3 3 0 110-6 3 3 0 010 6zM21 20v-1a5 5 0 00-4-4.9"/></svg>
				</div>
				<p class="text-xs font-medium text-gray-700">Users</p>
			</a>
			<a href="{{ url('/admin/SiteSettings') }}" class="group rounded-lg border bg-white px-3 py-3 text-center shadow-sm ring-1 ring-gray-200 hover:shadow transition">
				<div class="mx-auto mb-2 inline-flex h-10 w-10 items-center justify-center rounded-full bg-amber-50 text-amber-600 ring-1 ring-amber-100 group-hover:bg-amber-100">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M12 8a4 4 0 110 8 4 4 0 010-8z"/><path fill-rule="evenodd" d="M12 2a1 1 0 011 1v1.07a7.965 7.965 0 012.121.877l.758-.758a1 1 0 011.414 0l1.414 1.414a1 1 0 010 1.414l-.758.758c.36.65.642 1.367.817 2.121H21a1 1 0 011 1v2a1 1 0 01-1 1h-1.07a7.965 7.965 0 01-.877 2.121l.758.758a1 1 0 010 1.414l-1.414 1.414a1 1 0 01-1.414 0l-.758-.758a7.965 7.965 0 01-2.121.817V21a1 1 0 01-1 1h-2a1 1 0 01-1-1v-1.07a7.965 7.965 0 01-2.121-.877l-.758.758a1 1 0 01-1.414 0L5.05 18.35a1 1 0 010-1.414l.758-.758A7.965 7.965 0 015 14.058H4a1 1 0 01-1-1v-2a1 1 0 011-1h1.07a7.965 7.965 0 01.877-2.121l-.758-.758a1 1 0 010-1.414L7.603 3.34a1 1 0 011.414 0l.758.758A7.965 7.965 0 0112 4.07V3a1 1 0 011-1z" clip-rule="evenodd"/></svg>
				</div>
				<p class="text-xs font-medium text-gray-700">Settings</p>
			</a>
			<a href="{{ url('/admin/sliders') }}" class="group rounded-lg border bg-white px-3 py-3 text-center shadow-sm ring-1 ring-gray-200 hover:shadow transition">
				<div class="mx-auto mb-2 inline-flex h-10 w-10 items-center justify-center rounded-full bg-cyan-50 text-cyan-600 ring-1 ring-cyan-100 group-hover:bg-cyan-100">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M4 6h16v12H4z"/><path d="M8 10l4 4 4-4"/></svg>
				</div>
				<p class="text-xs font-medium text-gray-700">Sliders</p>
			</a>
		</div>
	</div>

	<div class="mt-6">
		<h2 class="mb-3 text-sm font-semibold text-gray-600">Traffic</h2>
		<div class="rounded-xl bg-white shadow-sm ring-1 ring-gray-200 overflow-hidden">
			<div class="border-b px-4 py-3 font-medium flex items-center gap-2">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-600"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75a.75.75 0 01.75-.75H12m0 0h3a.75.75 0 01.75.75m-3.75 0v10.5m-7.5-7.5H6m0 0v3m0-3h3m9 0h1.5m-1.5 0v3m0-3h-3"/></svg>
				<span>Visitors map</span>
			</div>
			<div id="trafficMap" class="h-80"></div>
		</div>
		<div class="mt-4 rounded-xl bg-white shadow-sm ring-1 ring-gray-200 overflow-hidden">
			<div class="border-b px-4 py-3 font-medium flex items-center gap-2">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-600"><path stroke-linecap="round" stroke-linejoin="round" d="M3 6.75h17.25M3 12h17.25M3 17.25h17.25"/></svg>
				<span>Traffic table</span>
			</div>
			<div class="overflow-x-auto">
				<table class="w-full text-sm">
					<thead class="bg-gray-50 text-gray-600">
						<tr>
							<th class="px-3 py-2 text-left font-medium">Time</th>
							<th class="px-3 py-2 text-left font-medium">Event</th>
							<th class="px-3 py-2 text-left font-medium">User agent</th>
							<th class="px-3 py-2 text-left font-medium">Country</th>
						</tr>
					</thead>
					<tbody class="divide-y">
						@forelse(($VisitorLog ?? []) as $log)
							@php
								$props = is_string($log->properties ?? null) ? json_decode($log->properties, true) : (array)($log->properties ?? []);
								$ua = data_get($props, 'user_agent') ?? data_get($props, 'agent') ?? data_get($props, 'ua') ?? data_get($props, 'headers.User-Agent') ?? '-';
								$country = data_get($props, 'country') ?? data_get($props, 'country_name') ?? data_get($props, 'geo.country') ?? data_get($props, 'location.country') ?? '-';
							@endphp
							<tr class="hover:bg-gray-50">
								<td class="px-3 py-2 text-gray-500">{{ isset($log->created_at) ? \Carbon\Carbon::parse($log->created_at)->diffForHumans() : '' }}</td>
								<td class="px-3 py-2 text-gray-800">{{ $log->description ?? json_encode($log) }}</td>
								<td class="px-3 py-2 text-gray-600 max-w-[220px] truncate" title="{{ $ua }}">{{ $ua }}</td>
								<td class="px-3 py-2 text-gray-600">{{ $country }}</td>
							</tr>
						@empty
							<tr><td colspan="4" class="px-3 py-4 text-center text-gray-500">No traffic yet</td></tr>
						@endforelse
					</tbody>
				</table>
			</div>
		</div>
	</div>

	@php
		$activityPoints = collect($VisitorLog ?? [])->map(function($log){
			$props = is_string($log->properties ?? null) ? json_decode($log->properties, true) : (array)($log->properties ?? []);
			$lat = data_get($props, 'lat') ?? data_get($props, 'latitude');
			$lng = data_get($props, 'lng') ?? data_get($props, 'lon') ?? data_get($props, 'longitude');
			if ($lat && $lng) {
				return ['lat' => (float)$lat, 'lng' => (float)$lng, 'label' => ($log->description ?? 'Activity')];
			}
			return null;
		})->filter()->values();

		$activityIps = collect($VisitorLog ?? [])->map(function($log){
			$props = is_string($log->properties ?? null) ? json_decode($log->properties, true) : (array)($log->properties ?? []);
			$ip = data_get($props, 'ip') ?? data_get($props, 'ip_address') ?? data_get($props, 'headers.X-Forwarded-For') ?? null;
			if (is_string($ip) && strpos($ip, ',') !== false) {
				$ip = trim(explode(',', $ip)[0]);
			}
			return $ip;
		})->filter()->unique()->values()->take(50);
	@endphp

	<script>
		(function(){
			function mountMap(){
				const el = document.getElementById('trafficMap');
				if (!el) return; // no container
				if (!window.L) { setTimeout(mountMap, 200); return; } // wait for Leaflet to load
				try {
					const map = L.map('trafficMap');
					const center = [-1.286389, 36.817223]; // Nairobi default
					map.setView(center, 6);
					L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
						maxZoom: 19,
						attribution: '&copy; OpenStreetMap contributors'
					}).addTo(map);
					const points = @json($activityPoints);
					const ips = @json($activityIps);
					const markers = [];
					if (points.length) {
						points.forEach(p => {
							const m = L.marker([p.lat, p.lng]).addTo(map).bindPopup(p.label);
							markers.push(m);
						});
					}
					// Enrich with geolocated IPs if available
					const cacheKey = 'visitorGeoCacheV1';
					let geoCache = {};
					try { geoCache = JSON.parse(localStorage.getItem(cacheKey) || '{}'); } catch(e) {}
					const toLookup = ips.filter(ip => !(ip in geoCache));
					const lookups = toLookup.slice(0, 20).map(ip =>
						fetch(`https://ipwho.is/${ip}`).then(r => r.json()).then(d => ({ ip, d })).catch(() => ({ ip, d: null }))
					);
					if (lookups.length) {
						Promise.allSettled(lookups).then(results => {
							results.forEach(res => {
								if (res.status === 'fulfilled') {
									const { ip, d } = res.value;
									if (d && d.success && typeof d.latitude === 'number' && typeof d.longitude === 'number') {
										geoCache[ip] = { lat: d.latitude, lng: d.longitude, country: d.country, city: d.city };
									}
								}
							});
							try { localStorage.setItem(cacheKey, JSON.stringify(geoCache)); } catch(e) {}
							Object.entries(geoCache).forEach(([ip, g]) => {
								const label = `Visitor ${ip}${g.country ? ' - ' + g.country : ''}${g.city ? ', ' + g.city : ''}`;
								const m = L.marker([g.lat, g.lng]).addTo(map).bindPopup(label);
								markers.push(m);
							});
							if (markers.length) {
								const group = L.featureGroup(markers);
								map.fitBounds(group.getBounds().pad(0.25));
							}
						});
					} else if (markers.length) {
						const group = L.featureGroup(markers);
						map.fitBounds(group.getBounds().pad(0.25));
					}
				} catch(e) { /* no-op */ }
			}
			if (document.readyState === 'complete') mountMap(); else window.addEventListener('load', mountMap);
		})();
	</script>

	<div class="mt-6">
		<div class="rounded-xl bg-white shadow-sm ring-1 ring-gray-200">
			<div class="border-b px-4 py-3 font-medium flex items-center gap-2">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-600"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
				<span>Recent Activity</span>
			</div>
			<ul class="divide-y">
				@forelse(($ActivityLog ?? []) as $log)
					<li class="px-4 py-3 text-sm flex items-start gap-3">
						<span class="mt-0.5 inline-flex h-6 w-6 items-center justify-center rounded-full bg-blue-50 text-blue-600 ring-1 ring-blue-100">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4"><path d="M12 8a4 4 0 110 8 4 4 0 010-8z"/><path d="M12 2v2M12 20v2M4.93 4.93l1.414 1.414M17.657 17.657l1.414 1.414M2 12h2M20 12h2M4.93 19.07l1.414-1.414M17.657 6.343l1.414-1.414"/></svg>
						</span>
						<span class="text-gray-700">{{ $log->description ?? json_encode($log) }}</span>
					</li>
				@empty
					<li class="px-4 py-6 text-center text-sm text-gray-500">No recent activity</li>
				@endforelse
			</ul>
		</div>
	</div>
@endsection


