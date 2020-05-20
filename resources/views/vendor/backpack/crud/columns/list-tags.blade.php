{{-- Custom template to display tags in a standard bootstrap tooltip --}}
@php
    /* @var $entry \Illuminate\Database\Eloquent\Model */
    /* @var $column */

    $tags = data_get($entry, $column['name']);
@endphp

@if($tags->toArray())
    @php
        $display = '';
        foreach($tags as $tag) {
            $display .= $tag->name . '<br/>';
        }
    @endphp
    <a href="javascript:void(0);" data-html="true" data-toggle="tooltip" data-placement="top" title="{{$display}}">
        {{ count($tags) }} tags
    </a>
@else
    -
@endif



<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
