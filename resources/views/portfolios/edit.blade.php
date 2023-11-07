<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolios-edit.css') }}">
</head>

<body>
    <header>
        <div id="header-title">ASHIATO</div>
        <ul>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#works">WORKS</a></li>
            <li><a href="#skills">SKILLS</a></li>
            <li><a href="#contact">CONTACT</a></li>
        </ul>
    </header>

    <div id="contents">
        {{-- 右側の空白部分 --}}
        <div id="advertisements"></div>

        {{-- メインコンテンツ --}}
        <div id="main-contents">
            <form action="{{ route('portfolios.update', $portfolio) }}" method="post">
                @csrf
                @method('PATCH')

                <section>'
                    <a class="section-title" id="about">ABOUT</a>
                    所属<input type="text" name="affiliation"><br>
                    自己紹介<input type="text" name="self_introduction">
                </section>
                <section>
                    <a class="section-title" id="works">WORKS</a>
                    <div class="works-box">
                        <a href="#">
                            <div class="work"></div>
                        </a>
                    </div>
                </section>
                <section>
                    <a class="section-title" id="skills">SKILLS</a>
                    <div id="skills-box">
                        <div>
                            <p class="skill-title">使用言語 / ツール</p>
                            <div>
                                <p class="skill-level">1: サッと学んだ程度</p><br>
                                <p class="skill-level">2: 使用経験あり</p><br>
                                <p class="skill-level">3: 半年以上学んだ</p><br>
                                <p class="skill-level">4: 実務レベルで使いこなせる</p><br>
                            </div>
                            <div>
                                <p class="skill-title">保有資格</p>
                                <textarea name="" id="" cols="30" rows="10"></textarea>
                                <p class="work_experience">職歴</p>
                                <textarea name="" id="" cols="30" rows="10"></textarea>
                            </div>

                </section>
                <section>
                    <a class="section-title" id="contact">CONTACT</a><br>
                    <div class="contact-icons">
                        <img src="{{ asset('images/map.png') }}" alt="" id="map-icon">岩手県
                        <input type="text"><br>
                    </div>
                    <div class="contact-icons">
                        <img src="" alt="" id="mail-icon"><input type="text"
                            value="sample@sample"><br><br>
                    </div>
                    <img src="マップ.png" alt=""><input type="text"><br>
                    <img src="マップ.png" alt=""><input type="text"><br>
                    <img src="マップ.png" alt=""><input type="text"><br>
                </section>
            </form>
        </div>
    </div>

</body>

</html>
