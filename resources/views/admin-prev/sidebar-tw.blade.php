<aside class="hidden md:flex md:w-64 lg:w-72 xl:w-80 shrink-0 border-r bg-white">
	<nav class="w-full h-screen sticky top-0 overflow-y-auto">
		<div class="px-4 py-4 border-b">
			<a href="{{ url('/') }}/admin/home" class="inline-flex items-center gap-2">
				<span class="text-lg font-semibold">Admin Panel</span>
			</a>
		</div>
		<ul class="p-2 text-sm">
			<li>
				<a href="{{ url('/') }}/admin/home" class="flex items-center gap-2 rounded px-3 py-2 hover:bg-gray-100">
					<span class="i-fa fa-home"></span>
					<span>Dashboard</span>
				</a>
			</li>
			<li class="mt-1">
				<a href="{{ url('/') }}/admin/sliders" class="flex items-center gap-2 rounded px-3 py-2 hover:bg-gray-100">
					<span class="i-fa fa-image"></span>
					<span>Sliders</span>
				</a>
			</li>
			<li class="mt-1">
				<a href="{{ url('/') }}/admin/banners" class="flex items-center gap-2 rounded px-3 py-2 hover:bg-gray-100">
					<span class="i-fa fa-picture-o"></span>
					<span>Banners</span>
				</a>
			</li>
			<li class="mt-1">
				<a href="{{ url('/') }}/admin/products" class="flex items-center gap-2 rounded px-3 py-2 hover:bg-gray-100">
					<span class="i-fa fa-cubes"></span>
					<span>Products</span>
				</a>
			</li>
			<li class="mt-1">
				<a href="{{ url('/') }}/admin/categories" class="flex items-center gap-2 rounded px-3 py-2 hover:bg-gray-100">
					<span class="i-fa fa-list-ul"></span>
					<span>Categories</span>
				</a>
			</li>
			<li class="mt-1">
				<a href="{{ url('/') }}/admin/users" class="flex items-center gap-2 rounded px-3 py-2 hover:bg-gray-100">
					<span class="i-fa fa-users"></span>
					<span>Users</span>
				</a>
			</li>
			<li class="mt-1">
				<a href="{{ url('/') }}/admin/blog" class="flex items-center gap-2 rounded px-3 py-2 hover:bg-gray-100">
					<span class="i-fa fa-newspaper-o"></span>
					<span>Blog</span>
				</a>
			</li>
			<li class="mt-1">
				<a href="{{ url('/') }}/admin/allMessages" class="flex items-center gap-2 rounded px-3 py-2 hover:bg-gray-100">
					<span class="i-fa fa-envelope"></span>
					<span>Messages</span>
				</a>
			</li>
			<li class="mt-1">
				<a href="{{ url('/') }}/admin/SiteSettings" class="flex items-center gap-2 rounded px-3 py-2 hover:bg-gray-100">
					<span class="i-fa fa-cog"></span>
					<span>Site Settings</span>
				</a>
			</li>
		</ul>
		<div class="p-3 border-t">
			<a href="{{ url('/') }}/admin/logout" class="inline-flex items-center gap-2 rounded px-3 py-2 text-red-600 hover:bg-red-50">
				<span class="i-fa fa-sign-out"></span>
				<span>Logout</span>
			</a>
		</div>
	</nav>
</aside>


