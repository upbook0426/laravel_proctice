@section('sub')
<div class="side-contents">
  <div class="side-inner">
    <div class="humberger_ar">
      <div class="humberger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <nav class="side-nav">
      <ul class="main-category">
        <li>
          <h4>
            <a href="{{ route('home') }}">
              <figure><img src="{{ image("common/chart-bar-solid.svg") }}" alt=""></figure>
              <p>ダッシュボード</p>
            </a>
          </h4>
        </li>
        @if (user('role_auth') || user('role_head'))
        <li>
          <h4 class="@yield('master-active')">
            <a>
              <figure><img src="{{ image("common/address-book-solid.svg") }}" alt=""></figure>
              <p>マスタデータ</p>
            </a>
          </h4>
          <ul class="sub-category">
            <li>
              <a href="{{ route('staff') }}">社員マスタ</a>
            </li>
            <li>
              <a href="{{ route('supplier') }}">上位店マスタ</a>
            </li>
            <li>
              <a href="{{ route('agency') }}">代理店マスタ</a>
            </li>
            @if (user('role_auth'))
            <li>
              <a href="{{ route('office') }}">その他マスタ</a>
            </li>
            @endif
          </ul>
        </li>
        <li>
          <h4 class="@yield('product-active')">
            <a>
              <figure><img src="{{ image("common/barcode.png") }}" alt=""></figure>
              <p>商材</p>
            </a>
          </h4>
          <ul class="sub-category">
            <li>
              <a href="{{ route('division') }}">大区分商材</a>
            </li>
            <li>
              <a href="{{ route('prd_code') }}">区分</a>
            </li>
            <li>
              <a href="{{ route('status_sub') }}">ステータス</a>
            </li>
            <li>
              <a href="{{ route('option') }}">オプション</a>
            </li>
            <li>
              <a href="{{ route('plan') }}">販促</a>
            </li>
            <li>
              <a href="{{ route('product') }}">商材</a>
            </li>
            <li>
              <a href="{{ route('product_form') }}">フォーム</a>
            </li>
            <li>
              <a href="{{ route('form_parts') }}">フォームパーツ</a>
            </li>
          </ul>
        </li>
        @endif
        <li>
          <h4 class="@yield('entry-active')">
            <a>
              <figure><img src="{{ image("common/folder-solid.svg") }}" alt=""></figure>
              <p>エントリー</p>
            </a>
          </h4>
          <ul class="sub-category">
            <li>
              <a href="{{ route('entry') }}">一覧</a>
            </li>
            <li>
              <a href="{{ route('entry_edit') }}">新規登録</a>
            </li>
            @if (user('role_auth') || user('role_head'))
            <li>
              <a href="{{ route('entry_view') }}">ビュー設定</a>
            </li>
            @endif
          </ul>
        </li>
        @if (user('role_auth') || user('role_head'))
        <li>
          <h4 class="@yield('total-active')">
            <a>
              <figure><img src="{{ image("common/total.svg") }}" alt=""></figure>
              <p>累計</p>
            </a>
          </h4>
          <ul class="sub-category">
            <li>
              <a href="{{ route('total') }}">エントリー</a>
            </li>
          </ul>
        </li>
        @endif
        @if (user('role_auth') || user('role_head'))
        <li>
          <h4 class="@yield('csv-active')">
            <a>
              <figure><img src="{{ image("common/file-csv-solid.svg") }}" alt=""></figure>
              <p>CSV</p>
            </a>
          </h4>
          <ul class="sub-category">
            <li>
              <a href="{{ route('csv_entry') }}">エントリーCSV</a>
            </li>
            @if (user('role_auth'))
            <li>
              <a href="{{ route('csv_payment') }}">支払明細CSV</a>
            </li>
            @endif
          </ul>
        </li>
        @endif
        @if (user('role_auth_head'))
        <li>
          <h4 class="@yield('news-active')">
            <a>
              <figure><img src="{{ image("common/news.svg") }}" alt=""></figure>
              <p>WEB</p>
            </a>
          </h4>
          <ul class="sub-category">
            <li>
              <a href="{{ route('news') }}">新着情報一覧</a>
            </li>
            <li>
              <a href="{{ route('news_edit') }}">新規作成</a>
            </li>
          </ul>
        </li>
        @endif
        @yield('addNav')
      </ul>
      @yield('pageNav')
    </nav>
  </div>
</div>
@endsection
