<div class="{{ $widget['wrapperClass'] ?? 'col-sm-6 col-md-4' }}">
	<div class="{{ $widget['class'] ?? 'card mb-2' }}">
		<a href="{!! $widget['content']['link'] !!}" target="_blank" class="card-link">
			@if (isset($widget['content']['header']))
				<div class="card-header">{!! $widget['content']['header'] !!} </div>
			@endif
			@if (isset($widget['content']['body']))
				<div class="card-body">{!! $widget['content']['body'] !!}</div>
			@endif
		</a>
	</div>
</div>