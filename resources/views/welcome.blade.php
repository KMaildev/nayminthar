@extends('layouts.main')
@section('title', 'Welcome')
@section('content')

    @include('layouts.slider')

    <section class="top-head t-myanmar sp-box py-5" style="background-color: #fcf8f8;">
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

    <section class="sp-box" id="wrapper">
        <div class="row">

            <div class="col-md-12">
                <p class="consult_sub text-center" style="font-size: 28px;">
                    Nay Min Thar Empire Myanmar Co.,Ltd
                </p>

                <p class="consult_tit font-design1 text-center">
                    Myanmar Human Resource Center
                </p>

                <p>
                    Nay Min Thar Empire Myanmar (OVERSEAS MYANMAR MANPOWER EMPLOYMENT AGENCY) has been successfully
                    recruiting
                    for
                    and supplying companies, factories and businesses, especially for Thailand, Japan, Malaysia, Singapore
                    and
                    Middle East Countries. We retain a term of skilled recruitment professionals who uphold our reputation
                    by
                    providing effective and efficient recruitment services for our customer’s satisfaction.

                    <br>
                    <span style="color: black; font-weight: bold;">
                        We have got New Special Recruitment License for since 2023 under the company act of Government of
                        Myanmar.
                    </span>
                </p>
                <br>

                <style>
                    .mes_box {
                        max-width: 100%;
                        background-color: #efefef;
                        padding: 1.2rem;
                    }
                </style>
                <div class="mes_box">
                    <div class="mb-2">
                        <i class="fa fa-check-circle"></i>
                        Expert guidance: Overseas Employment Service Agencies provide expert guidance for finding jobs
                        abroad.
                    </div>
                    <div class="mb-2">
                        <i class="fa fa-check-circle"></i>
                        Job connections: They have extensive networks with employers, enhancing your job prospects.
                    </div>
                    <div class="mb-2">
                        <i class="fa fa-check-circle"></i>
                        Streamlined process: These agencies simplify the application process, making it easier for you to
                        navigate visas, documentation, and interviews.
                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <p class="consult_sub text-center" style="font-size: 28px;">
                    <i>
                        Our update licenses,
                    </i>
                    <br>
                    <span style="font-weight: bold; color: #2A3BFE;">
                        Approved by Ministry of Labour
                    </span>
                </p>
            </div>


            <div class="col-lg-3 col-md-3 col-sm-12 py-5">
                <img src="{{ asset('data/company/1.png') }}" alt="teacher"
                    style="width: 100%; height: 350px;; background-size:cover;">

                <h5 class=""
                    style="font-size: 14px; text-align: center; background-color: #2A3BFE; color: white; padding: 10px; padding-top: 10px;width:270px;">
                    Certificate of Incorporation
                </h5>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 py-5">
                <img src="{{ asset('data/company/2.png') }}" alt="teacher"
                    style="width: 100%; height: 350px;; background-size:cover; ">
                <h5 class=""
                    style="font-size: 14px; text-align: center; background-color: #2A3BFE; color: white; padding: 10px; padding-top: 10px;width:270px;">
                    MOEAF
                </h5>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 py-5">
                <img src="{{ asset('data/company/3.png') }}" alt="teacher"
                    style="width: 100%; height: 350px;; background-size:cover; ">
                <h5 class=""
                    style="font-size: 14px; text-align: center; background-color: #2A3BFE; color: white; padding: 10px; padding-top: 10px;width:270px;">
                    Overseas Employment Agency Licence
                </h5>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 py-5">
                <img src="{{ asset('data/company/4.jpg') }}" alt="teacher"
                    style="width: 100%; height: 350px;; background-size:cover; ">
                <h5 class=""
                    style="font-size: 14px; text-align: center; background-color: #2A3BFE; color: white; padding: 10px; padding-top: 10px;width:270px;">
                    Licence
                </h5>
            </div>

        </div>
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
                    Myanmar is said to be the most desirable human resource with a high affinity with Japan, as 90%
                    of the
                    people are Buddhist and have a high desire to work. In addition, there are many young people
                    with
                    relatively high literacy rates and education levels, and it is attracting attention as a "last
                    frontier"
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

        <style>
            .t-myanmar-child {
                background: #EEE;
            }
        </style>
        <div class="" id="wrapper">

            <div class="t-myanmar-child mb-2">
                <p class="t-myanmar-tit">
                    @if (session('key') == 'jp')
                        優秀な若年層が多い
                    @else
                        There are many talented young people
                    @endif
                </p>

                <p class="fs9">
                    @if (session('key') == 'jp')
                        ミャンマーには優秀な若者が多いですが、良い条件で雇用されるチャンスがありません。多数の若者が日本に行きたいと思う強い理由があります。
                    @else
                        There are many talented young people in Myanmar, but they do not have the opportunity to be employed
                        under good conditions. There are strong reasons why many young people want to go to Japan.
                    @endif
                </p>
            </div>

            <div class="t-myanmar-child mb-2">
                <p class="t-myanmar-tit">
                    @if (session('key') == 'jp')
                        収入が少ない
                    @else
                        low income
                    @endif
                </p>

                <p class="fs9">
                    @if (session('key') == 'jp')
                        ミャンマーでは地方で就労しても月給が7,000円程度にしかなりません。外国人労働者を募る日本で就労したいと希望している若者が多数います。
                    @else
                        In Myanmar, even if you work in a rural area, the monthly salary is 7.000
                        It only costs about ,000 yen. There are many young people who want to work in Japan, which is
                        recruiting foreign workers.
                    @endif
                </p>
            </div>

            <div class="t-myanmar-child mb-2">
                <p class="t-myanmar-tit">
                    @if (session('key') == 'jp')
                        ９割が敬虔な仏教徒
                    @else
                        90% are devout Buddhists
                    @endif
                </p>

                <p class="fs9">
                    @if (session('key') == 'jp')
                        ミャンマーの人々は国民の9割が敬虔な仏教徒で、仏教文化が根付いており、国民がその文化のもと調和をもって生活しています。
                    @else
                        90% of the people of Myanmar are devout Buddhists, and Buddhist culture is deeply rooted in Myanmar,
                        and the people live in harmony with that culture.
                    @endif
                </p>
            </div>

            <div class="t-myanmar-child mb-2">
                <p class="t-myanmar-tit">
                    @if (session('key') == 'jp')
                        勤勉で真面目な国民
                    @else
                        hardworking and serious people
                    @endif
                </p>

                <p class="fs9">
                    @if (session('key') == 'jp')
                        ミャンマーには心が純粋な人々が多く、勤勉で真面目、犯罪が少ないといった特徴があります。
                    @else
                        Myanmar has many people with pure hearts, is hardworking and serious, and has low crime rates.
                    @endif
                </p>
            </div>

            <div class="t-myanmar-child mb-2">
                <p class="t-myanmar-tit">
                    @if (session('key') == 'jp')
                        日本人と価値観が合う
                    @else
                        Same values ​​as Japanese people
                    @endif
                </p>

                <p class="fs9">
                    @if (session('key') == 'jp')
                        謙譲の精神・身勝手な自己主張をしないと言われるミャンマーの人々は、日本人と同じような価値観を持つ国民です。
                    @else
                        The people of Myanmar are said to have a spirit of humility and avoid selfish self-assertion, and
                        they have the same values ​​as the Japanese.
                    @endif
                </p>
            </div>

            <div class="t-myanmar-child mb-2">
                <p class="t-myanmar-tit">
                    @if (session('key') == 'jp')
                        忍耐力のある若者が多い
                    @else
                        Many young people have patience
                    @endif
                </p>

                <p class="fs9">
                    @if (session('key') == 'jp')
                        ミャンマーは農業人口が多く、忍耐力のある若者が多いと言われています。
                    @else
                        Myanmar has a large agricultural population and is said to have many young people with patience.
                    @endif
                </p>
            </div>

            <div class="t-myanmar-child mb-2">
                <p class="t-myanmar-tit">
                    @if (session('key') == 'jp')
                        日本で働きたい若者が激増中
                    @else
                        The number of young people who want to work in Japan is rapidly increasing
                    @endif
                </p>

                <p class="fs9">
                    @if (session('key') == 'jp')
                        2021年2月の軍事クーデター発生以降、通貨暴落・物価上昇・貧困増大・失業者増大に見舞われ、日本で働きたい若者が弊社に押し寄せています。
                    @else
                        Since the military coup in February 2021, we have been hit by a collapse of the currency, rising
                        prices, increasing poverty, and increasing unemployment, and young people who want to work in Japan
                        are flocking to our company.
                    @endif
                </p>
            </div>

            <div class="t-myanmar-child mb-2">
                <p class="t-myanmar-tit">
                    @if (session('key') == 'jp')
                        日本からの支援を受ける親日国
                    @else
                        A pro-Japanese country receiving support from Japan
                    @endif
                </p>

                <p class="fs9">
                    @if (session('key') == 'jp')
                        ミャンマーは日本からの支援が１兆円以上ある親日国です。
                    @else
                        Myanmar is a pro-Japanese country with more than 1 trillion yen in aid from Japan.
                    @endif
                </p>
            </div>

            <div class="t-myanmar-child mb-2">
                <p class="t-myanmar-tit">
                    @if (session('key') == 'jp')
                        日本語の上達が早い
                    @else
                        Improve your Japanese quickly
                    @endif
                </p>

                <p class="fs9">
                    @if (session('key') == 'jp')
                        ミャンマーの公用語であるビルマ語と日本語は文法が似ており、日本語の上達が早く発音も上手です。
                    @else
                        Burmese, the official language of Myanmar, and Japanese have similar grammar, so students can
                        improve their Japanese quickly and have good pronunciation.
                    @endif
                </p>
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

                    <tr>
                        <th style="background-color: #e3e4ef; color: black;">
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
