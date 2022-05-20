@extends('layouts.public')

@section('title', 'Faq')

@section('content')
    @isset($faq)
  <!-- Content FAQ-->
  <section id="aa-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
			<div class="aa-title">
				<h2>FAQ</h2>
				<p>Domande frequenti</p>
				<span></span>
			</div>
				<fieldset style="border: 1px solid black; padding-top:40px;">
				<div class="aa-blog-area">
				<ul>
                    @foreach($faq as $faq_singola)
                        <li><h3><span class="fa fa-question-circle"></span> {{$faq_singola->domanda}}</h3>
					<p><span class="fa fa-check-circle"></span>{{$faq_singola->risposta}}</p></li>
                    @endforeach
				</li></ul>
				</div>
				</fieldset>

		  </div>
        </div>
    </div>
  </section>
  <!-- / Content FAQ-->
    @endisset
@endsection
