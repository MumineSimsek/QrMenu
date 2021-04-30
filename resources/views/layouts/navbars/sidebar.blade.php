<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <img href="#" class="simple-text logo-mini" src="{{asset('black/img/'. \Illuminate\Support\Facades\Auth::user()->cafe->logo) }}"></img>
            <a href="#" class="simple-text logo-normal">Yönetim Paneli</a>
        </div>
        <ul class="nav">
            <li>
                <a data-toggle="collapse" href="#laravel-examples1" aria-expanded="true">
                    <i class="tim-icons icon-align-center" ></i>
                    <span class="nav-link-text" >Ürünler</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse @if ($pageSlug == 'product_create' or $pageSlug == 'product_list')  show @endif" id="laravel-examples1">
                    <ul class="nav pl-4">
                        <li  @if ($pageSlug == 'product_create') class="active " @endif >
                            <a href="{{ route('product.createForm')  }}">
                                <i class="tim-icons icon-simple-add"></i>
                                <p>Ürün Ekle</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'product_list') class="active " @endif >
                            <a href="{{ route('product.list')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>Ürün listele</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="tim-icons icon-align-center" ></i>
                    <span class="nav-link-text" >Kategoriler</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse @if ($pageSlug == 'category_create' or $pageSlug == 'category_list' ) show @endif " id="laravel-examples">
                    <ul class="nav pl-4">
                        <li  @if ($pageSlug == 'category_create') class="active " @endif >
                            <a href="{{ route('category.createForm')  }}">
                                <i class="tim-icons icon-simple-add"></i>
                                <p>Kategori Ekle</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'category_list') class="active " @endif >
                            <a href="{{ route('category.list')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>Kategori listele</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples2" aria-expanded="true">
                    <i class="tim-icons icon-align-center" ></i>
                    <span class="nav-link-text" >Alt Kategoriler</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse @if ($pageSlug == 'sub_category_create' or 'sub_category_list') show @endif " id="laravel-examples2">
                    <ul class="nav pl-4">
                        <li  @if ($pageSlug == 'sub_category_create') class="active " @endif >
                            <a href="{{ route('sub_category.createForm')  }}">
                                <i class="tim-icons icon-simple-add"></i>
                                <p>Alt Kategori Ekle</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'sub_category_list') class="active " @endif >
                            <a href="{{ route('sub_category.list')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>Alt Kategori listele</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li @if ($pageSlug == 'qr') class="active " @endif>
                <a href="{{ route('qr')  }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>QR Oluştur</p>
                </a>

            </li>


        </ul>
    </div>
</div>
