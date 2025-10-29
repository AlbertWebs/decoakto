<!DOCTYPE html>
<html lang="en">
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $SiteSettings)
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>{{$SiteSettings->sitename}} - Admin</title>
	@vite(['resources/css/app.css','resources/js/app.js'])
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
</head>
<body class="min-h-screen bg-gray-50 text-gray-900">
	<div class="min-h-screen flex">
		@include('admin.tw.sidebar')
		<main class="flex-1 min-w-0">
			<header class="sticky top-0 z-10 bg-white/80 backdrop-blur">
				<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-14 flex items-center justify-between">
					<div class="flex items-center gap-2">
						<button type="button" id="sidebarToggle" class="inline-flex h-9 w-9 items-center justify-center rounded-md border border-gray-200 bg-white text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none" title="Toggle sidebar">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
								<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5" />
							</svg>
						</button>
						<h1 class="text-base font-semibold">@yield('title', 'Dashboard')</h1>
					</div>
					<div class="flex items-center gap-2">
						<button type="button" class="relative inline-flex h-9 w-9 items-center justify-center rounded-md border border-gray-200 bg-white text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none" data-dropdown-toggle="topNotifications" title="Notifications">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
								<path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75V8.25a6 6 0 10-12 0v1.5a8.967 8.967 0 01-2.311 6.022c1.76.68 3.622 1.102 5.454 1.31M8.25 17.25a3.75 3.75 0 007.5 0" />
							</svg>
						</button>
						<div id="topNotifications" class="hidden absolute right-3 top-12 z-20 w-64 rounded-md border border-gray-200 bg-white py-2 shadow-lg">
							<a href="{{ url('/admin/activitylogs') }}" class="block px-3 py-2 text-sm text-gray-700 hover:bg-gray-50">View activity logs</a>
						</div>

						<button type="button" class="relative inline-flex items-center gap-2 rounded-md border border-gray-200 bg-white px-2.5 py-1.5 text-sm text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none" data-dropdown-toggle="topUserMenu">
							<img class="h-7 w-7 rounded-full object-cover" src="{{ url('/') }}/uploads/users/{{ Auth::user()->image ?? 'default.png' }}" alt="" />
							<span class="hidden sm:inline">{{ Auth::user()->name ?? 'Admin' }}</span>
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
						</button>
						<div id="topUserMenu" class="hidden absolute right-3 top-12 z-20 w-56 rounded-md border border-gray-200 bg-white py-2 shadow-lg">
							<a href="{{ url('/admin/editUser/' . (Auth::id() ?? 0)) }}" class="block px-3 py-2 text-sm text-gray-700 hover:bg-gray-50">User settings</a>
							<a href="{{ url('/admin/SiteSettings') }}" class="block px-3 py-2 text-sm text-gray-700 hover:bg-gray-50">Site settings</a>
							<a href="{{ url('/admin/activitylogs') }}" class="block px-3 py-2 text-sm text-gray-700 hover:bg-gray-50">Notifications</a>
							<div class="my-1 border-t"></div>
							<a href="{{ url('/admin/logout') }}" class="block px-3 py-2 text-sm text-red-600 hover:bg-red-50">Logout</a>
						</div>
					</div>
				</div>
			</header>
			<section class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8">
				@yield('content')
			</section>
		</main>
	</div>

	<script>
		(function(){
			const sidebar = document.getElementById('adminSidebar');
			const toggleBtn = document.getElementById('sidebarToggle');
			const LABEL_SELECTOR = '.js-label';
			if (toggleBtn && sidebar) {
				toggleBtn.addEventListener('click', () => {
					// Toggle width classes
					sidebar.classList.toggle('md:w-64');
					sidebar.classList.toggle('md:w-20');
					// Toggle label visibility
					sidebar.querySelectorAll(LABEL_SELECTOR).forEach(el => el.classList.toggle('hidden'));
					// Persist state
					const collapsed = sidebar.classList.contains('md:w-20');
					try { localStorage.setItem('adminSidebarCollapsed', collapsed ? '1' : '0'); } catch(e) {}
				});
				// Load persisted state
				try {
					if (localStorage.getItem('adminSidebarCollapsed') === '1') {
						sidebar.classList.remove('md:w-64');
						sidebar.classList.add('md:w-20');
						sidebar.querySelectorAll(LABEL_SELECTOR).forEach(el => el.classList.add('hidden'));
					}
				} catch(e) {}
			}

			// Collapsible groups
			document.querySelectorAll('[data-collapse-toggle]').forEach(btn => {
				btn.addEventListener('click', () => {
					const targetId = btn.getAttribute('data-collapse-toggle');
					const panel = document.getElementById(targetId);
					if (!panel) return;
					panel.classList.toggle('hidden');
					btn.querySelector('[data-rotate]')?.classList.toggle('rotate-180');
				});
			});

			// Dropdowns
			document.querySelectorAll('[data-dropdown-toggle]').forEach(trigger => {
				const targetId = trigger.getAttribute('data-dropdown-toggle');
				const menu = document.getElementById(targetId);
				if (!menu) return;
				trigger.addEventListener('click', (e) => {
					e.stopPropagation();
					menu.classList.toggle('hidden');
				});
				document.addEventListener('click', () => menu.classList.add('hidden'));
			});
		})();
	</script>
	<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
</body>
@endforeach
</html>


