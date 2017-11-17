@extends('layouts.app')

@section('title')
    OProSS-Africa 送愛到天堂
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-lg-3 mb-4">
                <h1>團隊名稱</h1>
                <button href="#" class="btn btn-primary btn-block" id="like-button"><i class="fa fa-thumbs-o-up"></i> 讚我一票</button>
                <h3>人氣：{{$countTeam7}}</h3>
            </div>
            <div class="col-12 col-lg-9">
                <div class="slickwrapper">
                    <img src="{{asset('img/team7/1.jpg')}}" class="img-fluid rounded">
                    <img src="{{asset('img/team7/2.jpg')}}" class="img-fluid rounded">
                    <img src="{{asset('img/team7/3.jpg')}}" class="img-fluid rounded">
                    <img src="{{asset('img/team7/4.jpg')}}" class="img-fluid rounded">
                    <img src="{{asset('img/team7/5.jpg')}}" class="img-fluid rounded">
                    <img src="{{asset('img/team7/6.jpg')}}" class="img-fluid rounded">
                    <img src="{{asset('img/team7/7.jpg')}}" class="img-fluid rounded">
                </div>
                <h1>影片</h1>
                <hr>
                <h2>【競選標語】</h2>
                <p>
                    12000 公里的距離，送愛到天堂
                </p>
                <h2>【服務期間 & 地點】</h2>
                <ul>
                    <li>服務期間：106年7月11日-106年7月31日</li>
                    <li>服務地點：非洲賴索托ACC 分校</li>
                    <li>服務期間：106年8月1日-106年8月11日</li>
                    <li>服務地點：非洲史瓦濟蘭ACC 分校</li>
                </ul>
                <h2>【服務對象】</h2>
                <p>非洲ACC 阿彌陀佛關懷中心：非洲賴索托ACC 分校、非洲史瓦濟蘭</p>
                <h2>【團隊理念】</h2>
                <p>
                    本專案係帶領學生前往非洲賴索托及非洲史瓦濟蘭進行「海外專業服務學習」專案，帶領學生對於海外在地機構以及所在之社區，進行協助，運用學生在醫學健康、創意設計、資訊電機、管理、人文社會的專業技能，改善當地居民的教育、生活、健康、社區產業經營等之水平與環境。
                </p>
                <h2>【服務過程 & 實施方向】</h2>
                <p>
                    以無國界方式關懷國外議題為團隊理念，推行學生海外自主學習+ProjectBased Learning 的方式，推翻過往「一次性」的服務與學習，強調與國外的受輔導單位與社區，建立永續服務的長久經營模式。
                </p>
                <p>
                    OProSS 非洲團於106 年遠赴非洲ACC 阿彌陀佛關懷中心之賴索托分校、史瓦濟蘭分校，安排科學、桌遊活動及系列講座，教導非洲學童科學概念、飲水衛生習慣。
                </p>
                <h2>【服務項目&內容】</h2>
                <p>
                    此次服務對於非洲的孤兒院生來說是一個新的接觸，以往的志工來訪時都只是簡單照顧其生活起居，此次OProSS 來訪，為孩子們帶來了不同以往的新觀念。亞大學生根據其科系所學，為孩子們設計了淺顯易懂的課程，如時尚設計系的謝欣穎同學幫院生舉辦一場屬於他們、別開生面的時尚秀（fashion show）、心理系林易樺同學也為院生設計一組結合各種情緒的桌遊，藉由活動的過程中，去認識各種不同的情緒、健管系陳守哲同學設計「飲水衛生與濾水器」課程，藉由飲水衛生宣導，強調院生對於水的觀念、休憩系賴季楓同學透過設計旅遊課程活動，激發院生對休閒觀光領域的興趣、會資系李可邵同學的「爆米花生產與行銷策略」課程。
                </p>
                <h2>【愛的延續】</h2>
                <p>
                    時尚設計系的謝欣穎同學幫院生舉辦一場別開生面的時尚秀（fashion show），她教導非洲學童利用日常生活最常見的報紙當剪裁的材料，不但自己當設計師，也穿起屬於自己的服飾作品，自信地走在伸展台上，台下不斷傳來笑聲、掌聲，學童們所展現的不只是作品上的華麗，還有院生們對自己創意的自信。
                </p>
                <p>
                    心理系林易樺同學為院生設計一組結合各種情緒的桌遊，藉由活動的過程中，去認識各種不同的情緒，以輕鬆的遊戲形式，讓院生可以認識自己的心情狀況，再引導院生學會表達自己的情緒和想法，迴響熱烈。
                </p>
                <p>
                    休憩系賴季楓同學透過設計旅遊課程活動，激發院生對休閒觀光領域的興趣，進一步對賴索托這塊土地產生更深層的認同及歸屬感。
                </p>
                <p>
                    會資系李可邵同學的「爆米花生產與行銷策略」課程，讓高中的院生DIY 爆爆米花，再把它當成商品，並分組進行各種促銷策略，由過程中學習生產與行銷的技巧。
                </p>
                <h2>【師生心得反思】</h2>
                <p>
                    林君維主的話—OProSS 非洲團此行與非洲阿彌陀佛關懷中心ACC 合作，到賴索托及史瓦濟蘭院區服務，除了學生自行設計課程幫院區院童上課外，還參與下鄉發放物資的活動，並與賴索托前總理進行會談，也到史瓦濟蘭拜訪台灣駐史瓦濟蘭大使館，未來將會與非洲阿彌陀佛關懷中心ACC 進行長期合作，以一萬兩千公里的距離，送愛到非洲為主軸，執行一系列的活動。
                </p>
                <p>
                    職治系劉至恩同學的話—透過這次在非洲和當地小孩相處，我得到很不一樣的人生觀。他們讓我學會知足、活在當下，讓我感受到其實生活可以很簡單。
                </p>
                <p>
                    心理系林易樺同學的話—這一趟，勇敢跨出舒適圈，也發現自己原來是如此的幸福，而世界上還有許多孩子需要幫忙，現在的我們應該更加珍惜所擁有的，並在自己能力所及的範圍，去幫助更多人。資傳系呂采昕同學說到了一個自己從來沒想過會去的地方，才發現自己是如此渺小，看到世界的另一個角落，學會感恩學會珍惜，並希望未來有能力再到更多地方幫助他人看見希望。
                </p>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var userTeam7 = {!! json_encode($userTeam7) !!};
            @if (Auth::check())
            if (userTeam7 === 1) {
                $('#like-button').prop('disabled', true);
                $('#like-button').text('您已經點讚囉！');
            }
            @endif
        });
        $('.slickwrapper').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            adaptiveHeight: true,
            infinite: true
        });
        $('#like-button').click(function() {
            @if (Auth::check())
            swal({
                title: "確定投下您神聖的一票？",
                icon: "warning",
                buttons: {
                    cancel: {
                        text: "取消",
                        value: false,
                        visible: true,
                        className: "",
                        closeModal: true
                    },
                    confirm: {
                        text: "確定",
                        value: true,
                        visible: true,
                        className: "",
                        closeModal: true
                    }
                },
                dangerMode: true
            }).then(function(willVote) {
                if (willVote) {
                    swal("您已投出您神聖的一票！", {
                        icon: "success",
                        button: {
                            text: "確定"
                        }
                    }).then(function() {
                        window.location.href = "{{route('voteTeam7')}}";
                    });
                } else {
                    swal("您已取消投票！", {
                        icon: "error",
                        button: {
                            text: "確定"
                        }
                    });
                }
            });
            @else
            swal({
                title: "請先登入才能進行投票",
                icon: "warning",
                buttons: {
                    cancel: {
                        text: "取消登入",
                        value: false,
                        visible: true,
                        className: "",
                        closeModal: true
                    },
                    confirm: {
                        text: "我要登入",
                        value: true,
                        visible: true,
                        className: "",
                        closeModal: true
                    }
                }
            }).then(function(willLogin) {
                if (willLogin) {
                    swal("進入登入畫面", {
                        icon: "success",
                        button: {
                            text: "確定"
                        }
                    }).then(function() {
                        window.location.href = "{{route('facebookLogin')}}";
                    });
                } else {
                    swal("您已取消登入！", {
                        icon: "error",
                        button: {
                            text: "確定"
                        }
                    });
                }
            });
            @endif
        });
    </script>
@endsection
