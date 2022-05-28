@extends('layouts.layout')

@section('title', 'Contatti')

@section('content')
    <section id="aa-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-title">
                        <h2>Pagina dei Contatti</h2>
                        <span></span>
                    </div>
                    <div class="aa-contact-area">
                        <div class="aa-contact-top">
                            <div class="aa-contact-top-left">
                                <iframe width="100%" height="450" frameborder="0" allowfullscreen="" style="border:0"
                                        src="https://maps.google.com/maps?q=Via%20brecce%20bianche%202-8,%20Ancona&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                            </div>
                            <div class="aa-contact-top-right">
                                <h2>Contatti</h2>
                                <p>Puoi torvarci all'Università Politecnica delle Marche, nel palazzo di ingegneria. <br>
                                    Oppure puoi contattarci per email, ti risponderemo il prima possibile. <br>
                                    Il nostro centralino è invece disponibile dal lunedì al venerdì dalle 9:30 alle 12:30 e dalle 15:30 alle 18:30.
                                </p>
                                <ul class="contact-info-list">
                                    <li><i class="fa fa-phone"></i> 1234567890</li>
                                    <a href="mailto:info@rentadvisor.com"><li><i class="fa fa-envelope-o"></i> info@rentadvisor.com</li></a>
                                    <li><i class="fa fa-map-marker"></i> Ancona, AN, 60131, Italia</li>
                                </ul>
                            </div>
                        </div>
                        <div class="aa-contact-bottom"> <!-- da modicare il nome nel .css-->
                            <div class="aa-title">
                                <fieldset style="border: 1px solid black">
                                    <h2>Email</h2>
                                    <p><strong>Servizio assistenza clienti </strong></p>
                                    <p></p>
                                    <a href="mailto:info@rentadvisor.com"><p>info@rentadvisor.com</p></a>
                                </fieldset>
                            </div>
                            <div class="aa-title">
                                <fieldset style="border: 1px solid black">
                                    <h2>Telefoni</h2>
                                    <p><strong>Servizio assistenza clienti </strong></p>
                                    <p></p>
                                    <p>1234567890</p>
                                    <p></p>
                                    <p>1234567890</p>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

