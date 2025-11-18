@php
use App\Models\Faq;

    if (isset($type) && $type == 'size') {

        $faqs = Faq::active()->whereRaw(
            'JSON_CONTAINS(sizes_ids, ?)',
            ['"'.$id.'"']
        )->get();

    } elseif (isset($type) && $type == 'service') {

        $faqs = Faq::active()->whereRaw(
            'JSON_CONTAINS(services_ids, ?)',
            ['"'.$id.'"']
        )->get();
    }

@endphp

@if(isset($faqs) && $faqs->count() > 0)
<section class="faq pb-0">
    <div class="container-ctn">
        <h2>Frequently Asked Questions</h2>
        <div class="accordion accordion-flush row" id="accordionFlushExample">
            @foreach($faqs as $faq)
                <div class="accordion-item col-lg-6">
                    <h3 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{$faq->short_url}}" aria-expanded="false" aria-controls="{{$faq->short_url}}">
                            {{$faq->faq_title}}
                        </button>
                    </h3>
                    <div id="{{$faq->short_url}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            {!! nl2br($faq->answer) !!}
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
    
</section>
@endif