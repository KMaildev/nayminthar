@extends('layouts.main')
@section('title', 'Welcome')
@section('content')

    <section class="slider_area">
        <div id="zoom-1"
            data-zs-src='["{{ asset('data/slider/0.jpg') }}", "{{ asset('data/slider/1.jpg') }}","{{ asset('data/slider/2.jpg') }}", "{{ asset('data/slider/3.jpg') }}"]'
            data-zs-speed="4000" data-zs-switchSpeed="400" data-zs-interval="6000" data-zs-overlay="dots"
            data-zs-bullets="false">

            <div class="inner-content2">
                <div class="mu_slogan">
                    <p>
                        Nay Min Thar Empire Myanmar Co.,Ltd
                        <br>
                        Myanmar Human Resource Center
                    </p>
                    <p style="font-size:0.9rem;">
                        Nay Min Thar Empire Myanmar is the leading Manpower Recruiting Agency based in Myanmar, licensed and
                        authorized by
                        the Ministry of Labor, Employment and Social Security of Myanmar.
                    </p>
                    <div class="mu_cvbtn">
                        <div>
                            <a href="#">
                                @if (session('key') == 'jp')
                                    お問い合わせ・資料請求
                                @else
                                    Inquiries/Request for materials
                                @endif
                            </a>
                        </div>

                        <div>
                            <a href="#">
                                @if (session('key') == 'jp')
                                    技能実習生
                                @else
                                    Technical Intern Trainee
                                @endif
                            </a>
                        </div>

                        <div>
                            <a href="#">
                                @if (session('key') == 'jp')
                                    Vision, Mission & Value
                                @else
                                    Vision, Mission & Value
                                @endif
                            </a>
                        </div>

                        <div>
                            <a href="pages/10616/index.html">
                                @if (session('key') == 'jp')
                                    Ya Hcu Kham Japanese language school.
                                @else
                                    Ya Hcu Kham Japanese language school.
                                @endif
                            </a>
                        </div>
                        <div>
                            <a href="pages/492/index.html">
                                @if (session('key') == 'jp')
                                    School Activities
                                @else
                                    School Activities
                                @endif
                            </a>
                        </div>
                        <div>
                            <a href="pages/21522/index.html">
                                @if (session('key') == 'jp')
                                    ミャンマー政府公認、労働大臣より表彰の送り出し機関
                                @else
                                    Officially recognized by the Myanmar government and awarded by the Minister
                                    of Labor
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="consult_box sp-box" id="wrapper">
        <p class="consult_sub" style="font-size: 28px;">
            Nay Min Thar Empire Myanmar Co.,Ltd
        </p>

        <p class="consult_tit font-design1">
            Myanmar Human Resource Center
        </p>

        <p>
            Nay Min Thar Empire Myanmar (OVERSEAS MYANMAR MANPOWER EMPLOYMENT AGENCY) has been successfully recruiting for
            and supplying companies, factories and businesses, especially for Thailand, Japan, Malaysia, Singapore and
            Middle East Countries. We retain a term of skilled recruitment professionals who uphold our reputation by
            providing effective and efficient recruitment services for our customer’s satisfaction.
        </p>


        <center>
            <iframe width="400" height="315" src="{{ asset('data/video/1.mp4') }}" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>

            <iframe width="400" height="315" src="{{ asset('data/video/2.mp4') }}" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </center>

    </section>




    <section class="top-head t-myanmar sp-box" style="background-color: #FFFBF2;">
        <div class="back">
            <h2 class="fs30">
                @if (session('key') == 'jp')
                    なぜ、ミャンマーなのか
                @else
                    Why Myanmar?
                @endif
            </h2>

            <p class="fs10 t-myanmar-text" id="wrapper">
                @if (session('key') == 'jp')
                    ミャンマーは、国民の90%が仏教徒であることや高い就労意欲を持つことから、日本との親和性が高い最も好ましい人材と言えます。また識字率と教育水準が相対的に高い若年層の人材が多く、今後の成長が見込まれる「ラストフロンティア」として注目されています。
                @else
                    Myanmar is said to be the most desirable human resource with a high affinity with Japan, as 90% of the
                    people are Buddhist and have a high desire to work. In addition, there are many young people with
                    relatively high literacy rates and education levels, and it is attracting attention as a "last frontier"
                    with potential for future growth.
                @endif
            </p>

            <span class="fs10">
                <a href="https://en.wikipedia.org/wiki/Myanmar" target="_blank">
                    @if (session('key') == 'jp')
                        なぜ、ミャンマーなのかをさらに詳しく見る
                    @else
                        Learn more about why Myanmar?
                    @endif
                </a>
            </span>
        </div>

        <hr>

        <div class="flex-parent" id="wrapper">
            <div class="t-myanmar-child">
                <p class="t-myanmar-tit">優秀な若年層が多い</p>
                <p class="fs9"> ミャンマーには優秀な若者が多いですが、良い条件で雇用されるチャンスがありません。多数の若者が日本に行きたいと思う強い理由があります。 </p>
            </div>

            <div class="t-myanmar-child">
                <p class="t-myanmar-tit">収入が少ない</p>
                <p class="fs9"> ミャンマーでは地方で就労しても月給が7,000円程度にしかなりません。外国人労働者を募る日本で就労したいと希望している若者が多数います。 </p>
            </div>

            <div class="t-myanmar-child">
                <p class="t-myanmar-tit">９割が敬虔な仏教徒</p>
                <p class="fs9"> ミャンマーの人々は国民の9割が敬虔な仏教徒で、仏教文化が根付いており、国民がその文化のもと調和をもって生活しています。 </p>
            </div>

            <div class="t-myanmar-child">
                <p class="t-myanmar-tit">勤勉で真面目な国民</p>
                <p class="fs9"> ミャンマーには心が純粋な人々が多く、勤勉で真面目、犯罪が少ないといった特徴があります。 </p>
            </div>

            <div class="t-myanmar-child">
                <p class="t-myanmar-tit">日本人と価値観が合う</p>
                <p class="fs9"> 謙譲の精神・身勝手な自己主張をしないと言われるミャンマーの人々は、日本人と同じような価値観を持つ国民です。 </p>
            </div>

            <div class="t-myanmar-child">
                <p class="t-myanmar-tit">忍耐力のある若者が多い</p>
                <p class="fs9"> ミャンマーは農業人口が多く、忍耐力のある若者が多いと言われています。 </p>
            </div>

            <div class="t-myanmar-child">
                <p class="t-myanmar-tit">日本で働きたい若者が激増中</p>
                <p class="fs9">2021年2月の軍事クーデター発生以降、通貨暴落・物価上昇・貧困増大・失業者増大に見舞われ、日本で働きたい若者が弊社に押し寄せています。</p>
            </div>

            <div class="t-myanmar-child">
                <p class="t-myanmar-tit">日本からの支援を受ける親日国</p>
                <p class="fs9"> ミャンマーは日本からの支援が１兆円以上ある親日国です。 </p>
            </div>

            <div class="t-myanmar-child">
                <p class="t-myanmar-tit">日本語の上達が早い</p>
                <p class="fs9"> ミャンマーの公用語であるビルマ語と日本語は文法が似ており、日本語の上達が早く発音も上手です。 </p>
            </div>
        </div>

        <hr>

        <div class="flex-parent" id="wrapper">
            <style>
                .table {
                    border-collapse: collapse;
                    border: 1px solid black;
                    width: 100%;
                }

                th,
                td {
                    border: 1px solid black;
                }
            </style>

            <table border="0" cellspacing="0" cellpadding="0" style="width: 100%;">
                <tbody>
                    <tr>
                        <th style="width: 17%; background-color: #e3e4ef; color: black;">
                            首都
                        </th>
                        <th>
                            ネピドー
                        </th>
                    </tr>

                    <tr>
                        <th style="">
                            最大都市
                        </th>
                        <th>
                            ヤンゴン
                        </th>
                    </tr>

                    <tr>
                        <th style="background-color: #e3e4ef; color: black;">
                            面積
                        </th>
                        <th>
                            676,578㎢
                        </th>
                    </tr>

                    <tr>
                        <th>
                            人口
                        </th>
                        <th>
                            54,409,794人 (2020年4月)
                        </th>
                    </tr>

                    <tr>
                        <th style="background-color: #e3e4ef; color: black;">
                            宗教
                        </th>
                        <th>
                            仏教国(上座部仏教)全体の約9割。
                            キリスト教が約6.3％、イスラム教が2.3％。
                        </th>
                    </tr>

                    <tr>
                        <th>
                            民族
                        </th>
                        <th>
                            大きく8つの部族、全体で135に及ぶ民族が存在する。
                            8大部族：ビルマ族、シャン族、カレン族、ラカイン族、
                            モン族、カチン族、カヤー族、チン族。
                        </th>
                    </tr>

                    <!--<tr>-->
                    <!--    <th style="background-color: #e3e4ef; color: black;">-->
                    <!--        資源-->
                    <!--    </th>-->
                    <!--    <th>-->
                    <!--        主要な天然資源。-->
                    <!--        石油、天然ガス、翡翠（ヒスイ）や宝石、木材や木材製品、-->
                    <!--        鉄、銅、スズ、タングステン-->
                    <!--    </th>-->
                    <!--</tr>-->

                    <tr style="background-color: #e3e4ef; color: black;">
                        <th>
                            通貨
                        </th>
                        <th>
                            MMK（チャット）
                        </th>
                    </tr>

                    <tr>
                        <th>
                            日本との時差
                        </th>
                        <th>
                            －2時間30分
                        </th>
                    </tr>


                </tbody>
            </table>
        </div>
    </section>

@endsection
