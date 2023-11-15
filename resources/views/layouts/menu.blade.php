<header>
    <div class="header_area" id="wrapper">
        <div class="left">
            <p>
                Myanmar Government certified License No.54/2016
            </p>

            <p style="font-size:0.4rem;">
                実績数値提供元：MOEAF（ミャンマー送り出し機関協会）で公開された2022年3月1日から2023年9月4日までの送り出し機関別のデマンドレター申請件数情報によると、ミャンマー・ユニティが圧倒的首位で2,506名、第2位は1,054名と、2位との差が約2.4倍となりました。
            </p>

            <div class="logo_area">
                <div class="logo_img">
                    <a href="{{ route('home') }}" class="logo">
                        <img class="lazyload" src='{{ asset('data/logo.jpg') }}' style="width: 100px;">
                    </a>
                </div>

                <div class="award_img">
                    <a href="">
                        <img class="lazyload" src='{{ asset('data/school_logo.jpg') }}'>
                    </a>
                </div>

                <div class="hiromihead_img">
                    <img class="lazyload"
                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                        data-src="https://www.myanmarunity.jp/wp-content/uploads/2023/08/40c1a3feb421a534cfc77a72d5502970.png"
                        alt="ヘッダー2">
                </div>
            </div>
        </div>


        <div class="right">
            <form method="get" id="searchform" action="" autocomplete="off">
                <input type="text" class="txt placeholder" name="s" placeholder="Please enter a keyword"
                    value="">
                <input type="submit" value="&#xf002;" class="button">
            </form>
            <ul>

                <li class="page_item page-item-category">
                    <a href="">
                        @if (session('key') == 'jp')
                            新着情報
                        @else
                            What's new
                        @endif
                    </a>
                </li>

                <li class="page_item page-item-492">
                    <a href="">
                        @if (session('key') == 'jp')
                            外国人雇用完全ガイド
                        @else
                            foreign employment
                        @endif
                    </a>
                </li>

                <li class="page_item page-item-30">
                    <a href="">
                        @if (session('key') == 'jp')
                            会社概要
                        @else
                            Company
                        @endif
                    </a>
                </li>

            </ul>
        </div>

        <div class="right2">
            <a style="text-decoration: none;" href="">

                <span class="inquire">
                    @if (session('key') == 'jp')
                        お気軽にお問い合わせください
                    @else
                        Please feel free to contact us
                    @endif
                </span>

                <div class="middle_area">
                    <span class="phone">
                        444161997
                    </span>
                    <span class="open">
                        @if (session('key') == 'jp')
                            【営業時間】平日
                        @else
                            Opening Hours:
                        @endif
                        <br>
                        Mon - Fri : 9:00 to 5:00
                    </span>
                </div>
            </a>

            <div class="bottom_area">
                <a href="" class="event_hub_link">
                    @if (session('key') == 'jp')
                        セミナー・イベント
                    @else
                        Seminars and events
                    @endif
                </a>
                <a href="" class="inquurl">
                    @if (session('key') == 'jp')
                        お問い合わせ・資料請求
                    @else
                        Inquiries
                    @endif
                </a>
            </div>
        </div>
    </div>


    <nav id="gnav">
        <ul id="wrapper">

            <li class="toggle">
                <a href="#">
                    @if (session('key') == 'jp')
                        Nay Min Thar <br> Empire Myanmar
                    @else
                        Nay Min Thar <br> Empire Myanmar
                    @endif
                </a>
                <div class="menu">
                    <div id="wrapper">
                        <ul class="menu_inner2">
                            <li class="menu_thumbnail">
                                <a href="">
                                    <img src="{{ asset('data/strength.jpeg') }}" alt=""
                                        style="height: 140px; width: 100%;">
                                    <span>
                                        @if (session('key') == 'jp')
                                            Strengths of Our Company
                                        @else
                                            Strengths of Our Company
                                        @endif
                                    </span>
                                </a>
                            </li>

                            <li class="menu_thumbnail">
                                <a href="#">
                                    <img src="{{ asset('data/md.jpg') }}" style="height: 140px; width: 100%;">
                                    <span>
                                        @if (session('key') == 'jp')
                                            MD'S Message
                                        @else
                                            MD'S Message
                                        @endif
                                    </span>
                                </a>
                            </li>

                            <li class="menu_thumbnail">
                                <a href="#">
                                    <img src="{{ asset('data/vmv.png') }}" style="height: 140px; width: 100%;">
                                    <span>
                                        @if (session('key') == 'jp')
                                            Vision, Mission & Value
                                        @else
                                            Vision, Mission & Value
                                        @endif
                                    </span>
                                </a>
                            </li>


                            <li class="menu_thumbnail">
                                <a href="#">
                                    <img src="{{ asset('data/authenticity.png') }}" alt=""
                                        style="height: 140px; width: 100%;">
                                    <span>
                                        @if (session('key') == 'jp')
                                            ミャンマー政府公認、労働大臣より表彰の送り出し機関
                                        @else
                                            Officially recognized by the Myanmar government and awarded by the Minister
                                            of Labor
                                        @endif
                                    </span>
                                </a>
                            </li>


                            <li class="menu_thumbnail">
                                <a href="#">
                                    <img src="{{ asset('data/team.png') }}" alt=""
                                        style="height: 140px; width: 100%;">
                                    <span>
                                        @if (session('key') == 'jp')
                                            当社のチームメンバーは現場に常駐
                                        @else
                                            Our Team Members permanently stationed on site
                                        @endif
                                    </span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </li>


            <li class="toggle">
                <a href="#">
                    @if (session('key') == 'jp')
                        なぜミャンマー<br>なのか
                    @else
                        Why <br> Myanmar?
                    @endif
                </a>
                <div class="menu">
                    <div id="wrapper">
                        <ul class="menu_inner">
                            <li class="menu_title">
                                @if (session('key') == 'jp')
                                    なぜミャンマーなのか？
                                @else
                                    Why Myanmar?
                                @endif
                            </li>
                            <li class="menu_thumbnail">
                                <a href="#">
                                    <img src="{{ asset('data/shwedagon.jpg') }}" alt="" style="height: 130px">
                                    <span>
                                        @if (session('key') == 'jp')
                                            なぜミャンマーなのか？
                                        @else
                                            Why Myanmar?
                                        @endif
                                    </span>
                                </a>
                            </li>


                            <li class="menu_thumbnail">
                                <a href="#">
                                    <img src="{{ asset('data/life_in_mm.png') }}" alt="" style="height: 130px">
                                    <span>
                                        @if (session('key') == 'jp')
                                            ミャンマーの暮らし
                                        @else
                                            life in myanmar
                                        @endif
                                    </span>
                                </a>
                            </li>


                            <li class="menu_thumbnail">
                                <a href="#">
                                    <img src="{{ asset('data/upain.png') }}" alt="" style="height: 130px">
                                    <span>
                                        @if (session('key') == 'jp')
                                            Historical Places
                                        @else
                                            Historical Places
                                        @endif
                                    </span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </li>


            <li class="toggle">
                <a href="#">
                    @if (session('key') == 'jp')
                        Japanese <br> language School
                    @else
                        Japanese <br> language School
                    @endif
                </a>
                <div class="menu">
                    <div id="wrapper">
                        <ul class="menu_inner">
                            <li class="menu_title">
                                @if (session('key') == 'jp')
                                    Introduction to Japanese language school
                                @else
                                    Introduction to Japanese language school
                                @endif
                            </li>
                            <li class="menu_thumbnail">
                                <a href="#">
                                    <img src="{{ asset('data/school_logo.jpg') }}" alt=""
                                        style="height: 130px; object-fit: contain;">
                                    <span>
                                        @if (session('key') == 'jp')
                                            Ya Hcu Kham Japanese language school.
                                        @else
                                            Ya Hcu Kham Japanese language school.
                                        @endif
                                    </span>
                                </a>
                            </li>

                            <li class="menu_thumbnail">
                                <a href="#">
                                    <img src="{{ asset('data/school.jpg') }}" alt=""
                                        style="height: 130px; ">
                                    <span>
                                        School Activities
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>



            <li>
                <a href="#">
                    @if (session('key') == 'jp')
                        セミナー・資料・<br>よくある質問
                    @else
                        Seminars, Materials, <br> Frequently Asked Questions
                    @endif
                </a>
                <div class="menu">
                    <div id="wrapper">
                        <ul class="menu_inner2" style="justify-content:center;">

                            <li class="menu_thumbnail">
                                <a href="#">
                                    <img src="{{ asset('data/application-to-use.jpg') }}" alt="">
                                    <span>
                                        @if (session('key') == 'jp')
                                            オンラインセミナー申込
                                        @else
                                            Online seminar application
                                        @endif
                                    </span>
                                </a>
                            </li>


                            <li class="menu_thumbnail">
                                <a href="#">
                                    <img src="{{ asset('data/japan_book.jpg') }}" alt="">
                                    <span>
                                        @if (session('key') == 'jp')
                                            便利な素材のダウンロード
                                        @else
                                            Download useful books
                                        @endif
                                    </span>
                                </a>
                            </li>


                            <li class="menu_thumbnail">
                                <a href="#">
                                    <img src="{{ asset('data/faq.jpg') }}" alt="">
                                    <span>
                                        @if (session('key') == 'jp')
                                            よくある質問
                                        @else
                                            FAQ
                                        @endif
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>


        </ul>

    </nav>
</header>
