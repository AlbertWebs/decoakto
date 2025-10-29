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
</head>
<body class="min-h-screen bg-gray-50 text-gray-900">
	<div class="min-h-screen flex">
		@include('admin.sidebar-tw')
		<main class="flex-1 min-w-0">
			<header class="sticky top-0 z-10 border-b bg-white/80 backdrop-blur">
				<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-14 flex items-center justify-between">
					<h1 class="text-base font-semibold">Dashboard</h1>
					<div class="flex items-center gap-3">
						<span class="hidden sm:inline text-sm text-gray-600">{{ Auth::user()->name ?? 'Admin' }}</span>
						<img class="h-8 w-8 rounded-full object-cover" src="{{ url('/') }}/uploads/users/{{ Auth::user()->image ?? 'default.png' }}" alt="" />
					</div>
				</div>
			</header>
			<section class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8">
				@yield('content')
			</section>
		</main>
	</div>
</body>
@endforeach
</html>


