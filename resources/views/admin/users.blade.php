@extends('admin.tw.layout')
@section('title','Users')
@section('content')
	<div class="mb-5 flex items-center justify-between">
		<div class="flex items-center gap-2">
			<span class="inline-flex h-9 w-9 items-center justify-center rounded-md bg-sky-100 text-sky-700 ring-1 ring-sky-200">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M15 19a6 6 0 10-12 0v1h12v-1zM9 11a4 4 0 100-8 4 4 0 000 8zM21 19a6.5 6.5 0 00-7.5-6.44 7.97 7.97 0 012.5 5.94v1H21v-1zM17 11a3 3 0 110-6 3 3 0 010 6z"/></svg>
			</span>
			<h2 class="text-lg font-semibold">Users</h2>
		</div>
	</div>

	@if(Session::has('message'))
		<div class="mb-4 rounded-md border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">{{ Session::get('message') }}</div>
	@endif

	<div class="rounded-xl bg-white ring-1 ring-gray-200">
		<div class="overflow-x-auto">
			<table class="min-w-full divide-y divide-gray-200 text-sm">
				<thead class="bg-gray-50 text-left text-gray-600">
					<tr>
						<th class="px-4 py-3 font-medium">User</th>
						<th class="px-4 py-3 font-medium">Email</th>
						<th class="px-4 py-3 font-medium">Role</th>
						<th class="px-4 py-3 font-medium">Status</th>
						<th class="px-4 py-3 font-medium">Created</th>
						<th class="px-4 py-3 font-medium text-right">Actions</th>
					</tr>
				</thead>
				<tbody class="divide-y divide-gray-100">
					@forelse(($Users ?? []) as $u)
						<tr>
							<td class="px-4 py-3 text-gray-800 font-medium">
								<span class="inline-flex items-center gap-2">
									<span class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-gray-100 text-gray-500 ring-1 ring-gray-200">
										{{ strtoupper(substr($u->name ?? 'U', 0, 1)) }}
									</span>
									{{ $u->name ?? '—' }}
								</span>
							</td>
							<td class="px-4 py-3 text-gray-600">{{ $u->email }}</td>
							<td class="px-4 py-3">
								<span class="inline-flex items-center gap-2 rounded-full px-2 py-1 text-xs font-medium ring-1 {{ (int)($u->is_admin ?? 0) === 1 ? 'bg-amber-50 text-amber-700 ring-amber-200' : 'bg-slate-50 text-slate-700 ring-slate-200' }}">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-3.5 w-3.5"><path d="M12 8a4 4 0 110 8 4 4 0 010-8z"/></svg>
									{{ (int)($u->is_admin ?? 0) === 1 ? 'Admin' : 'User' }}
								</span>
							</td>
							<td class="px-4 py-3">
								@php $active = (int)($u->status ?? 0) === 1; @endphp
								<span class="inline-flex items-center gap-2 rounded-full px-2 py-1 text-xs font-medium ring-1 {{ $active ? 'bg-emerald-50 text-emerald-700 ring-emerald-200' : 'bg-rose-50 text-rose-700 ring-rose-200' }}">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-3.5 w-3.5"><path d="M12 2a10 10 0 100 20 10 10 0 000-20z"/></svg>
									{{ $active ? 'Active' : 'Inactive' }}
								</span>
							</td>
							<td class="px-4 py-3 text-gray-500">{{ $u->created_at }}</td>
							<td class="px-4 py-3">
								<div class="flex items-center justify-end gap-2">
									<a href="{{ url('/admin/editUser/'.$u->id) }}" class="inline-flex items-center gap-1 rounded-md border border-gray-200 bg-white px-2 py-1 text-xs text-gray-700 hover:bg-gray-50">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4"><path d="M16.862 3.487a1.5 1.5 0 112.121 2.121l-10.5 10.5a1.5 1.5 0 01-.53.353l-3.75 1.25a.75.75 0 01-.949-.949l1.25-3.75a1.5 1.5 0 01.353-.53l10.5-10.5z"/></svg>
										Edit
									</a>
									<a href="{{ url('/admin/switchRole/'.$u->id) }}" class="inline-flex items-center gap-1 rounded-md border border-gray-200 bg-white px-2 py-1 text-xs text-gray-700 hover:bg-gray-50">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4"><path d="M4 11h16v2H4z"/></svg>
										Toggle Role
									</a>
									<a href="{{ url('/admin/switchStatus/'.$u->id) }}" class="inline-flex items-center gap-1 rounded-md border border-gray-200 bg-white px-2 py-1 text-xs text-gray-700 hover:bg-gray-50">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4"><path d="M12 2a10 10 0 100 20 10 10 0 000-20z"/></svg>
										Toggle Status
									</a>
									<a href="{{ url('/admin/delete_user/'.$u->id) }}" onclick="return confirm('Delete this user?')" class="inline-flex items-center gap-1 rounded-md bg-rose-600 px-2 py-1 text-xs text-white hover:bg-rose-700">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4"><path d="M6 7h12l-1 12a2 2 0 01-2 2H9a2 2 0 01-2-2L6 7zm-3 0h18v2H3z"/></svg>
										Delete
									</a>
								</div>
							</td>
						</tr>
					@empty
						<tr>
							<td class="px-4 py-8 text-center text-gray-500" colspan="6">No users found.</td>
						</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
@endsection


