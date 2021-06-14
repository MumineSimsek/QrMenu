@extends('layouts.app', ['page' => __('qr'), 'pageSlug' => 'qr'])
@section('content')

    <div class="visible-print text-center">
{{--        {{dd(public_path('menus\images\qr.png'))}}--}}
{{--        {{ \SimpleSoftwareIO\QrCode\Facades\QrCode::encoding('UTF-8')->errorCorrection('H')->size(200)->generate(route('menus.index',\Illuminate\Support\Facades\Auth::user()->cafe_id)) }}--}}
{{--        {{ \LaravelQRCode\Facades\QRCode:: text ( 'Laravel için QR Kodu Oluşturucu!' )->png ()  }}--}}
{{--        {{\SimpleSoftwareIO\QrCode\Facades\QrCode::format('png')->size(399)->color(40,40,40)->generate('Make me a QrCode!')}}--}}
        <button><img  id="img1" src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->mergeString(asset(\Illuminate\Support\Facades\Auth::user()->cafe->logo), .3)->size(100)->generate(route('menus.index',\Illuminate\Support\Facades\Auth::user()->cafe_id))) !!} "></button>
{{--        <p>Scan me to return to the original page.</p>--}}
    </div>
@endsection
//qr code js fonksiyonu eklendi
@stack('js')
<script>
    const buttons = document.querySelectorAll("button");

    function buttonHandler() {
        const imgId = this.querySelector("img").getAttribute("id");

        document.querySelector('style').textContent =
            `@media print {
        img { display: none; }
        #${imgId} { display: block; }
     }`;


        if (window.print) {
            window.print();
            
            
        }
        
    }

    buttons.forEach(button => {
    
        button.addEventListener("click", buttonHandler);
    });
</script>
@stack('js')
