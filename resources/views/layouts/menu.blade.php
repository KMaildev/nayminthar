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
                        <img class="lazyload"
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="https://www.myanmarunity.jp/wp-content/uploads/2020/01/mu_award.png"
                            alt="mu_award">
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
            <li>
                <a href="">
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
                                    <img class="lazyload"
                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                        data-src="https://www.myanmarunity.jp/wp-content/uploads/2020/02/mu_award.gif"
                                        alt="ミャンマー・ユニティの強み">
                                    <span>
                                        @if (session('key') == 'jp')
                                            の強み <br> Nay Min Thar Empire Myanmar
                                        @else
                                            Strengths of <br> Nay Min Thar Empire Myanmar
                                        @endif
                                    </span>
                                </a>
                            </li>

                            <li class="menu_thumbnail">
                                <a href="#">
                                    <img class="lazyload"
                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                        data-src="https://www.myanmarunity.jp/wp-content/uploads/2020/02/mu_award.gif"
                                        alt="ミャンマー・ユニティの強み">
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
                                    <img class="lazyload"
                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                        data-src="https://www.myanmarunity.jp/wp-content/uploads/2020/02/mu_award.gif"
                                        alt="ミャンマー・ユニティの強み">
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
                                    <img class="lazyload"
                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                        data-src="https://www.myanmarunity.jp/wp-content/uploads/2020/02/mu_award.gif"
                                        alt="ミャンマー・ユニティの強み">
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
                                    <img class="lazyload"
                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                        data-src="https://www.myanmarunity.jp/wp-content/uploads/2020/02/mu_award.gif"
                                        alt="ミャンマー・ユニティの強み">
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
                                    <img class="lazyload"
                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                        data-src="https://www.myanmarunity.jp/wp-content/uploads/2019/05/IMG_2093-e1558673675441-225x300.jpg"
                                        alt="なぜミャンマーなのか？">
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
                                    <noscript>
                                        <img src="wp-content/uploads/2019/05/413d61ae53b9f20fdc78f2e49b197a47-300x225.jpg"
                                            alt="ミャンマーの暮らし">
                                    </noscript>
                                    <img class="lazyload"
                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                        data-src="https://www.myanmarunity.jp/wp-content/uploads/2019/05/413d61ae53b9f20fdc78f2e49b197a47-300x225.jpg"
                                        alt="ミャンマーの暮らし">
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
                                    <noscript>
                                        <img src="wp-content/uploads/2019/05/413d61ae53b9f20fdc78f2e49b197a47-300x225.jpg"
                                            alt="ミャンマーの暮らし">
                                    </noscript>
                                    <img class="lazyload"
                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                        data-src="https://www.myanmarunity.jp/wp-content/uploads/2019/05/413d61ae53b9f20fdc78f2e49b197a47-300x225.jpg"
                                        alt="ミャンマーの暮らし">
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
                                    <img class="lazyload"
                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                        data-src="https://www.myanmarunity.jp/wp-content/uploads/2019/10/IMG_0493-300x74.jpg"
                                        alt="UJLAC日本語学校による日本語教育">
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
                                    <img class="lazyload"
                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                        data-src="https://www.myanmarunity.jp/wp-content/uploads/2020/10/teacher_1-300x191.jpg"
                                        alt="ミャンマー・ユニティのオンライン教育について">
                                    <span>
                                        School Activities
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>


            <li class="toggle"> <a href="pages/16/index.html"> 技能実習・<br>特定技能について</a>
                <div class="menu">
                    <div id="wrapper">
                        <ul class="menu_inner">
                            <li class="menu_title"><!--【技能実習・特定技能】受け入れ可能な職種一覧-->技能実習・<br>特定技能について</li>
                            <li class="menu_inner2">
                                <ul class="menu_inner2">
                                    <li class="menu_thumbnail2"><a
                                            href="pages/506/index.html"><span>介護技能実習生の送り出し</span></a> </li>
                                    <li class="menu_thumbnail2"><a
                                            href="pages/13/index.html"><span>技能実習生受け入れの流れ</span></a> </li><br>
                                    <li class="menu_thumbnail2"><a
                                            href="pages/21522/index.html"><span>【完全版】在留資格「特定技能」ミャンマー人材受け入れガイド</span></a>
                                    </li>
                                    <!--<li class="menu_thumbnail2"><a href="https://www.myanmarunity.jp/pages/553/"><span>特定技能１号 入国までの流れ</span></a> </li>-->
                                    <li class="menu_thumbnail2"><a
                                            href="pages/16/index.html"><span>【技能実習・特定技能】受け入れ可能な職種一覧</span></a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>


            <li class="toggle"> <a href="pages/22/index.html"> その他在留資格・比較・費用<br>のご案内 </a>
                <div class="menu">
                    <div id="wrapper">
                        <ul class="menu_inner">
                            <li class="menu_title"> <!--職種・在留資格別ご案内-->その他在留資格・比較・費用<br>のご案内 </li>
                            <li class="menu_inner2">
                                <ul class="menu_inner2">
                                    <li class="menu_thumbnail2"><a
                                            href="pages/610/index.html"><span>高度人材（在留資格：技術・人文知識・国際業務）入国までの流れ</span></a>
                                    </li>
                                    <li class="menu_thumbnail2"><a
                                            href="pages/663/index.html"><span>各在留資格の比較</span></a>
                                    </li>
                                    <li class="menu_thumbnail2"><a
                                            href="pages/7348/index.html"><span>受け入れ費用</span></a>
                                    </li>
                                </ul>
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
                                    <img class="lazyload"
                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                        data-src="https://www.myanmarunity.jp/wp-content/uploads/2020/12/seminar.jpg"
                                        alt="オンラインセミナー申込">
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
                                    <img class="lazyload"
                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                        data-src="https://www.myanmarunity.jp/wp-content/uploads/2020/12/whitepaper.jpg"
                                        alt="お役立ち資料ダウンロード">
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
                                    <img class="lazyload"
                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                        data-src="https://www.myanmarunity.jp/wp-content/uploads/2020/12/faq.jpg"
                                        alt="よくある質問">
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
