
<div class="slider-main" id="slider-main">
    <div id="slider" class="nivoSlider">
        @foreach($sliders as $slider)
            @if($per_slider != null && $loop->index == $per_slider) @break; @endif
            <img src="{{ url('upload/'.$slider->image) }}" alt="" title="#slidecaption{{ $loop->iteration }}"/>
        @endforeach
    </div>
@foreach($sliders as $slider)
    @if($per_slider != null && $loop->index == $per_slider) @break; @endif
    <div id="slidecaption{{ $loop->iteration }}" class="nivo-html-caption">
        <a href="{{ ($slider->read_more) != '' ? $slider->read_more : "/" }}"><h2>{{ $slider->caption }}</h2></a>
        <p>{{ $slider->note }}</p>
        <a class="button" href="#" id="link_2">Xem thêm</a>
    </div>
@endforeach
</div><!-- slider -->