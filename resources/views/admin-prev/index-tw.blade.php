@extends('admin.master-tw')
@section('content')
	@if(Session::has('message'))
		<div class="mb-4 rounded-md border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800">
			{{ Session::get('message') }}
		</div>
	@endif

	<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
		<div class="rounded-lg border bg-white p-4">
			<div class="text-xs text-gray-500">Notifications</div>
			<div class="mt-2 text-2xl font-semibold">{{ isset($Notifications) ? count($Notifications) : 0 }}</div>
		</div>
		<div class="rounded-lg border bg-white p-4">
			<div class="text-xs text-gray-500">Recent Activity</div>
			<div class="mt-2 text-2xl font-semibold">{{ isset($ActivityLog) ? (method_exists($ActivityLog,'total') ? $ActivityLog->total() : count($ActivityLog)) : 0 }}</div>
		</div>
		<div class="rounded-lg border bg-white p-4">
			<div class="text-xs text-gray-500">Messages</div>
			<div class="mt-2 text-2xl font-semibold">{{ isset($Message) ? count($Message) : 0 }}</div>
		</div>
		<div class="rounded-lg border bg-white p-4">
			<div class="text-xs text-gray-500">Settings</div>
			<div class="mt-2 text-2xl font-semibold">{{ isset($SiteSettings) ? count($SiteSettings) : 0 }}</div>
		</div>
	</div>

	<div class="mt-6 grid grid-cols-1 lg:grid-cols-2 gap-4">
		<div class="rounded-lg border bg-white">
			<div class="border-b px-4 py-3 font-medium">Latest Notifications</div>
			<div class="divide-y">
				@forelse($Notifications ?? [] as $note)
					<div class="px-4 py-3 text-sm">
						{{ $note->content ?? json_encode($note) }}
					</div>
				@empty
					<div class="px-4 py-6 text-center text-sm text-gray-500">No notifications</div>
				@endforelse
			</div>
		</div>
		<div class="rounded-lg border bg-white">
			<div class="border-b px-4 py-3 font-medium">Recent Activity</div>
			<div class="divide-y">
				@forelse(($ActivityLog ?? []) as $log)
					<div class="px-4 py-3 text-sm">
						{{ $log->description ?? json_encode($log) }}
					</div>
				@empty
					<div class="px-4 py-6 text-center text-sm text-gray-500">No recent activity</div>
				@endforelse
			</div>
		</div>
	</div>
@endsection


