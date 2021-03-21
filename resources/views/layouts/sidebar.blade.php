<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
	<div class="c-sidebar-brand">
		<img class="c-sidebar-brand-full" src="{{ url('/assets/brand/coreui-base-white.svg') }}" width="118" height="46" alt="CoreUI Logo">
		<img class="c-sidebar-brand-minimized" src="{{ url('assets/brand/coreui-signet-white.svg') }}" width="118" height="46" alt="CoreUI Logo">
	</div>
	<ul class="c-sidebar-nav">
		<li class="c-sidebar-nav-item">
			<a class="c-sidebar-nav-link" href="{{ url('/') }}">
				<i class="cil-speedometer c-sidebar-nav-icon"></i>
				Dashboard
			</a>
		</li>
		<li class="c-sidebar-nav-item">
			<a class="c-sidebar-nav-link" href="{{ url('/users') }}">
				<i class="cil-user c-sidebar-nav-icon"></i>
				Users
			</a>
		</li>
	</ul>
	<button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>
