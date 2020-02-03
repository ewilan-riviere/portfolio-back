<div class="{{ $widget['wrapperClass'] ?? 'col-sm-6 col-md-4' }}">
	<div class="{{ $widget['class'] ?? 'card mb-2' }}">
	  @if (isset($widget['content']['header']))
	  <div class="card-header">{!! $widget['content']['header'] !!}</div>
	  @endif
	  <div class="card-body">{!! $widget['content']['body'] !!}</div>
	  @if (isset($widget['content']['link']['name']))
	  <div class="card-body">
		  	<a
				@if (isset($widget['content']['link']['url']))  
				 href="{!! $widget['content']['link']['url'] !!}"
				 target='_blank'
				@endif
				class='font-weight-bold invisible-link'
			>
			<i class='fa fa-external-link-alt mr-2'></i>&nbsp;
			{!! $widget['content']['link']['name'] !!}
		  </a>
	  </div>
	  @endif
	</div>
</div>