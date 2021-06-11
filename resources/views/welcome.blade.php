@extends('layouts.front-layouts')
@section('title')
    Halaman Utama
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('front-assets/css/index.css')}}">
@endsection

@section('content') 

        <div class="jumbotron-fluid"></div>

        <div class="aksi">
            <p>Galang Dana untuk Hal yang Anda Perjuangkan</p>
            <a href="/program" class="btn btn-galang">Galang Dana Sekarang</a>
        </div>

        <div class="info">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <span>{{$programYangAda}}</span>
                        <p>Program Yang Ada</p>
                    </div>

                    <div class="col-4">
                        <span>{{$programPilihan}}</span>
                        <p>Program Pilihan</p>
                    </div>

                    <div class="col-4">
                        <span>{{$orangBerdonasi}}</span>
                        <p>Orang Berdonasi</p>
                    </div>
                </div>
            </div>
        </div>


    <section class="section-2">
        <div class="header mt-4">
            <span>
                Program Pilihan
            </span>
            <hr>
        </div>

        <div class="content mb-3">
                <div class="row">
                    @foreach ($programs as $program)
                    <div class="col-lg-4 col-sm-6 pl-4 d-flex align-items-stretch">
                        <div class="card">
                            <a href="/donasi/{{$program->id}}">
                            <img src="{{$program->getFoto()}}" alt="Program Image">
                            
                            <div class="container mt-3">
                                    @if ($program->donation_collected >= $program->donation_target)
                                        <div class="badge badge-success">Terdanai <i class="fa fa-check"></i></div>
                                    @endif
                                    <p class="title">{{Str::limit($program->title, 60, $end='...')}}</p>
                                    <div class="brief">
                                        <p>{{Str::limit($program->brief_explanation, 60, $end='...')}}</p>
                                    </div>
                            </div>
                                    <div class="programs-info">
                                    <div class="waktu">
                                        <div class="container">
                                        <span>Kategori</span><p>{{$program->category->category_name}}</p>
                                        <span>Berakhir Pada</span><p>{{$program->time_is_up}}</p>
                                        </div>
                                    </div>

                                    <div class="dana">
                                        <div class="container">
                                        <span>Terkumpul</span>
                                        <p class="collected">
                                            @if ($program->donation_collected == 0)
                                                0
                                            @else
                                                {{number_format($program->donation_collected)}}
                                            @endif
                                        </p>
                                        <span>Target</span><p>{{number_format($program->donation_target)}}</p>
                                        </div>
                                    </div>
                                    </div>
                            
                                </a>
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>

        <div class="foot text-center">
            <a href="/daftarprogram" class="btn btn-more">Program Lainnya</a>
        </div>
    </section>

    <section class="section-2">
            <div class="header mt-4">
                <span>
                    Program Terbaru
                </span>
                <hr>
            </div>
    
            <div class="content mb-3">
                    <div class="row">
                        @foreach ($programsNew as $newProgram)
                        <div class="col-lg-3 col-sm-6 pl-4 d-flex align-items-stretch">
                            <a href="/donasi/{{$newProgram->id}}" class="d-flex align-items-stretch">
                            <div class="card">
                                <img src="{{$newProgram->getFoto()}}" alt="Program Image">
    
                                <div class="container mt-3">
                                    @if ($newProgram->donation_collected >= $newProgram->donation_target)
                                        <div class="badge badge-success">Terdanai <i class="fa fa-check"></i></div>
                                    @endif
                                        <p class="title">{{Str::limit($newProgram->title, 40, $end='...')}}</p><span>
                                        <div class="brief">
                                            <p>{{Str::limit($newProgram->brief_explanation, 60, $end='...')}}</p>
                                        </div>
                                </div>
                                <div class="programs-info">
                                        <div class="waktu">
                                            <div class="container">
                                            <span>Kategori</span><p>Kemanusiaan</p>
                                            <span>Berakhir Pada</span><p>{{$newProgram->time_is_up}}</p>
                                            </div>
                                        </div>
    
                                        <div class="dana">
                                            <div class="container">
                                            <span>Terkumpul</span><p>@if ($newProgram->donation_collected == 0)
                                                0
                                            @else
                                            {{number_format($newProgram->donation_collected)}}
                                            @endif</p>
                                            <span>Target</span><p>{{number_format($newProgram->donation_target)}}</p>
                                            </div>
                                        </div>
                                        </div>

                                </div></a>
                            </div>
                        @endforeach
                    </div>
                </div>
    
            <div class="foot text-center">
                <a href="/daftarprogram" class="btn btn-more">Program Lainnya</a>
            </div>
        </section>

@endsection 
@section('script')
    <script>
        var jumboHeight = $('.jumbotron-fluid').outerHeight();
                function parallax(){
                    var scrolled = $(window).scrollTop();
                        $('.jumbotron-fluid').css('height', (jumboHeight-scrolled) + 'px');
                        }
                        $(window).scroll(function(e){
                        parallax();
                });

            $(document).ready(function () {
                    $('div.hidden').fadeIn(300).removeClass('hidden');
                parallax();
            });
    </script>
@endsection

