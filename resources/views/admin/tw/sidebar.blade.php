<aside id="adminSidebar" class="hidden md:flex md:w-64 shrink-0 bg-slate-900 text-slate-100 transition-all">
	<nav class="w-full h-screen sticky top-0 overflow-y-auto">
		<div class="px-4 py-4 bg-gradient-to-r from-blue-700 to-blue-700">
			<div class="inline-flex items-center gap-2">
				<span class="inline-flex h-8 w-8 items-center justify-center rounded-md bg-white/20 text-white shadow">D</span>
				<span class="text-base font-semibold js-label">Decomagna Admin</span>
			</div>
		</div>

		<ul class="p-2 text-sm">
			<li>
				<a href="{{ route('admin.home') }}" class="flex items-center gap-3 rounded-md px-3 py-2 text-[13px] text-slate-200 ring-1 ring-white/5 hover:bg-slate-800 hover:ring-white/10 transition {{ request()->is('admin') || request()->is('admin/home') ? 'bg-slate-800 ring-white/10' : '' }}">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-slate-300"><path d="M3 10.5l9-7 9 7V19a2 2 0 01-2 2h-4v-6H9v6H5a2 2 0 01-2-2v-8.5z"/></svg>
					<span class="js-label">Dashboard</span>
				</a>
			</li>
		</ul>

		<div class="mt-2">
			<button type="button" class="w-full flex items-center justify-between px-3 py-2 text-left text-[12px] font-semibold text-slate-300 hover:text-white" data-collapse-toggle="catalogMenu">
				<span class="inline-flex items-center gap-2">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4 text-indigo-600"><path d="M3 3h7v7H3zM14 3h7v7h-7zM3 14h7v7H3zM14 14h7v7h-7z"/></svg>
					<span class="js-label">Catalog</span>
				</span>
				<svg data-rotate xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 text-gray-500 transition-transform"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
			</button>
			<ul id="catalogMenu" class="px-2 pb-2 space-y-1">
				<li><a href="{{ url('/admin/products') }}" class="flex items-center gap-3 rounded-md px-3 py-2 text-[13px] text-slate-200 ring-1 ring-white/5 hover:bg-slate-800 hover:ring-white/10 transition {{ request()->is('admin/products*') ? 'bg-slate-800 ring-white/10' : '' }}">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-600"><path stroke-linecap="round" stroke-linejoin="round" d="M3 7.5V18a3 3 0 003 3h12a3 3 0 003-3V7.5M3 7.5L7.5 3h9L21 7.5M7.5 3V6m9-3v3"/></svg>
					<span class="js-label">Products</span>
				</a></li>
				<li><a href="{{ url('/admin/categories') }}" class="flex items-center gap-3 rounded-md px-3 py-2 text-[13px] text-slate-200 ring-1 ring-white/5 hover:bg-slate-800 hover:ring-white/10 transition {{ request()->is('admin/categories*') ? 'bg-slate-800 ring-white/10' : '' }}">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-gray-600"><path d="M4 5h6v6H4zM14 5h6v6h-6zM4 15h6v6H4zM14 15h6v6h-6z"/></svg>
					<span class="js-label">Categories</span>
				</a></li>
				<li><a href="{{ url('/admin/sliders') }}" class="flex items-center gap-3 rounded-md px-3 py-2 text-[13px] text-slate-200 ring-1 ring-white/5 hover:bg-slate-800 hover:ring-white/10 transition {{ request()->is('admin/sliders*') ? 'bg-slate-800 ring-white/10' : '' }}">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-gray-600"><path d="M4 6h16v12H4z"/><path d="M8 10l4 4 4-4"/></svg>
					<span class="js-label">Sliders</span>
				</a></li>
				<li><a href="{{ url('/admin/banners') }}" class="flex items-center gap-3 rounded-md px-3 py-2 text-[13px] text-slate-200 ring-1 ring-white/5 hover:bg-slate-800 hover:ring-white/10 transition {{ request()->is('admin/banners*') ? 'bg-slate-800 ring-white/10' : '' }}">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-600"><path stroke-linecap="round" stroke-linejoin="round" d="M3 4.5h18M3 9.75h18M3 15h18"/></svg>
					<span class="js-label">Banners</span>
				</a></li>
				<li><a href="{{ url('/admin/portfolio') }}" class="flex items-center gap-3 rounded-md px-3 py-2 text-[13px] text-slate-200 ring-1 ring-white/5 hover:bg-slate-800 hover:ring-white/10 transition {{ request()->is('admin/portfolio*') ? 'bg-slate-800 ring-white/10' : '' }}">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-600"><path stroke-linecap="round" stroke-linejoin="round" d="M3 7.5A2.25 2.25 0 015.25 5.25h13.5A2.25 2.25 0 0121 7.5V18A2.25 2.25 0 0118.75 20.25H5.25A2.25 2.25 0 013 18V7.5z"/></svg>
					<span class="js-label">Portfolio</span>
				</a></li>
				<li><a href="{{ url('/admin/partners') }}" class="flex items-center gap-3 rounded-md px-3 py-2 text-[13px] text-slate-200 ring-1 ring-white/5 hover:bg-slate-800 hover:ring-white/10 transition {{ request()->is('admin/partners*') ? 'bg-slate-800 ring-white/10' : '' }}">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-600"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 7.5a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21a7.5 7.5 0 0115 0v.75H7.5V21zM6 21v.75H3V21a7.5 7.5 0 017.5-7.5"/></svg>
					<span class="js-label">Partners</span>
				</a></li>
				<li><a href="{{ url('/admin/variations/color') }}" class="flex items-center gap-3 rounded-md px-3 py-2 text-[13px] text-slate-200 ring-1 ring-white/5 hover:bg-slate-800 hover:ring-white/10 transition {{ request()->is('admin/variations/color*') ? 'bg-slate-800 ring-white/10' : '' }}">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-gray-600"><path d="M12 3l9 6-9 6-9-6 9-6z"/></svg>
					<span class="js-label">Color Variations</span>
				</a></li>
				<li><a href="{{ url('/admin/variations/size') }}" class="flex items-center gap-3 rounded-md px-3 py-2 text-[13px] text-slate-200 ring-1 ring-white/5 hover:bg-slate-800 hover:ring-white/10 transition {{ request()->is('admin/variations/size*') ? 'bg-slate-800 ring-white/10' : '' }}">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-gray-600"><path d="M4 6h16v4H4zM7 14h10v4H7z"/></svg>
					<span class="js-label">Size Variations</span>
				</a></li>
			</ul>
		</div>

		<div class="mt-2">
			<button type="button" class="w-full flex items-center justify-between px-3 py-2 text-left text-[12px] font-semibold text-slate-300 hover:text-white" data-collapse-toggle="contentMenu">
				<span class="inline-flex items-center gap-2">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 text-rose-600"><path stroke-linecap="round" stroke-linejoin="round" d="M4 5h16v2H4zM4 11h16v2H4zM4 17h10v2H4z"/></svg>
					<span class="js-label">Content</span>
				</span>
				<svg data-rotate xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 text-gray-500 transition-transform"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
			</button>
			<ul id="contentMenu" class="px-2 pb-2 space-y-1">
				<li><a href="{{ url('/admin/blog') }}" class="flex items-center gap-3 rounded-md px-3 py-2 text-[13px] text-slate-200 ring-1 ring-white/5 hover:bg-slate-800 hover:ring-white/10 transition {{ request()->is('admin/blog*') ? 'bg-slate-800 ring-white/10' : '' }}"><span class="w-5 h-5 rounded bg-rose-100 text-rose-600 inline-flex items-center justify-center text-[10px]">B</span><span class="js-label">Blog</span></a></li>
				<li><a href="{{ url('/admin/faq') }}" class="flex items-center gap-3 rounded-md px-3 py-2 text-[13px] text-slate-200 ring-1 ring-white/5 hover:bg-slate-800 hover:ring-white/10 transition {{ request()->is('admin/faq*') ? 'bg-slate-800 ring-white/10' : '' }}"><span class="w-5 h-5 rounded bg-fuchsia-100 text-fuchsia-600 inline-flex items-center justify-center text-[10px]">F</span><span class="js-label">FAQs</span></a></li>
				<li><a href="{{ url('/admin/terms') }}" class="flex items-center gap-3 rounded-md px-3 py-2 text-[13px] text-slate-200 ring-1 ring-white/5 hover:bg-slate-800 hover:ring-white/10 transition {{ request()->is('admin/terms*') ? 'bg-slate-800 ring-white/10' : '' }}"><span class="w-5 h-5 rounded bg-amber-100 text-amber-600 inline-flex items-center justify-center text-[10px]">T</span><span class="js-label">Terms</span></a></li>
				<li><a href="{{ url('/admin/privacy') }}" class="flex items-center gap-3 rounded-md px-3 py-2 text-[13px] text-slate-200 ring-1 ring-white/5 hover:bg-slate-800 hover:ring-white/10 transition {{ request()->is('admin/privacy*') ? 'bg-slate-800 ring-white/10' : '' }}"><span class="w-5 h-5 rounded bg-sky-100 text-sky-600 inline-flex items-center justify-center text-[10px]">P</span><span class="js-label">Privacy</span></a></li>
				<li><a href="{{ url('/admin/how') }}" class="flex items-center gap-3 rounded-md px-3 py-2 text-[13px] text-slate-200 ring-1 ring-white/5 hover:bg-slate-800 hover:ring-white/10 transition {{ request()->is('admin/how*') ? 'bg-slate-800 ring-white/10' : '' }}"><span class="w-5 h-5 rounded bg-emerald-100 text-emerald-600 inline-flex items-center justify-center text-[10px]">H</span><span class="js-label">How It Works</span></a></li>
			</ul>
		</div>

		

		<div class="mt-2">
			<button type="button" class="w-full flex items-center justify-between px-3 py-2 text-left text-[12px] font-semibold text-slate-300 hover:text-white" data-collapse-toggle="usersMenu">
				<span class="inline-flex items-center gap-2">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4 text-sky-600"><path d="M15 19a6 6 0 10-12 0v1h12v-1zM9 11a4 4 0 100-8 4 4 0 000 8zM17 11a3 3 0 110-6 3 3 0 010 6zM21 20v-1a5 5 0 00-4-4.9"/></svg>
					<span class="js-label">Users</span>
				</span>
				<svg data-rotate xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 text-gray-500 transition-transform"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
			</button>
			<ul id="usersMenu" class="px-2 pb-2 space-y-1">
				<li><a href="{{ url('/admin/users') }}" class="flex items-center gap-3 rounded-md px-3 py-2 text-[13px] text-slate-200 ring-1 ring-white/5 hover:bg-slate-800 hover:ring-white/10 transition">Users</a></li>
				<li><a href="{{ url('/admin/admins') }}" class="flex items-center gap-3 rounded-md px-3 py-2 text-[13px] text-slate-200 ring-1 ring-white/5 hover:bg-slate-800 hover:ring-white/10 transition">Admins</a></li>
				<li><a href="{{ url('/admin/enroll-users') }}" class="flex items-center gap-3 rounded-md px-3 py-2 text-[13px] text-slate-200 ring-1 ring-white/5 hover:bg-slate-800 hover:ring-white/10 transition">Enroll Users</a></li>
			</ul>
		</div>

		<div class="mt-2">
			<button type="button" class="w-full flex items-center justify-between px-3 py-2 text-left text-[12px] font-semibold text-slate-300 hover:text-white" data-collapse-toggle="settingsMenu">
				<span class="inline-flex items-center gap-2">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 text-amber-600"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8a4 4 0 110 8 4 4 0 010-8z"/><path fill-rule="evenodd" d="M12 2a1 1 0 011 1v1.07a7.965 7.965 0 012.121.877l.758-.758a1 1 0 011.414 0l1.414 1.414a1 1 0 010 1.414l-.758.758c.36.65.642 1.367.817 2.121H21a1 1 0 011 1v2a1 1 0 01-1 1h-1.07a7.965 7.965 0 01-.877 2.121l.758.758a1 1 0 010 1.414l-1.414 1.414a1 1 0 01-1.414 0l-.758-.758a7.965 7.965 0 01-2.121.817V21a1 1 0 01-1 1h-2a1 1 0 01-1-1v-1.07a7.965 7.965 0 01-2.121-.877l-.758.758a1 1 0 01-1.414 0L5.05 18.35a1 1 0 010-1.414l.758-.758A7.965 7.965 0 015 14.058H4a1 1 0 01-1-1v-2a1 1 0 011-1h1.07a7.965 7.965 0 01.877-2.121l-.758-.758a1 1 0 010-1.414L7.603 3.34a1 1 0 011.414 0l.758.758A7.965 7.965 0 0112 4.07V3a1 1 0 011-1z" clip-rule="evenodd"/></svg>
					<span class="js-label">Settings</span>
				</span>
				<svg data-rotate xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 text-gray-500 transition-transform"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
			</button>
			<ul id="settingsMenu" class="px-2 pb-2 space-y-1">
				<li><a href="{{ url('/admin/SiteSettings') }}" class="flex items-center gap-3 rounded-md px-3 py-2 text-[13px] text-slate-200 ring-1 ring-white/5 hover:bg-slate-800 hover:ring-white/10 transition">Site Settings</a></li>
				<li><a href="{{ url('/admin/SiteSettings') }}" class="flex items-center gap-3 rounded-md px-3 py-2 text-[13px] text-slate-200 ring-1 ring-white/5 hover:bg-slate-800 hover:ring-white/10 transition">Social Media</a></li>
				
				
				<li><a href="{{ url('/admin/logo-and-favicon') }}" class="flex items-center gap-3 rounded-md px-3 py-2 text-[13px] text-slate-200 ring-1 ring-white/5 hover:bg-slate-800 hover:ring-white/10 transition">Logos & Favicon</a></li>
				
			</ul>
		</div>

		
		<div class="p-3 mt-2">
			<a href="{{ url('/admin/logout') }}" class="inline-flex items-center gap-2 rounded-md px-3 py-2 text-[13px] text-rose-300 ring-1 ring-white/5 hover:bg-rose-900/20 hover:text-rose-200 hover:ring-rose-300/20 transition">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6A2.25 2.25 0 005.25 5.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l3 3m0 0l-3 3m3-3H3"/></svg>
				<span class="js-label">Logout</span>
			</a>
		</div>
	</nav>
</aside>


