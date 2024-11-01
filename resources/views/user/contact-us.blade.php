@extends('user.layouts.app')
@section('title', 'Contact Us')
@section('body')
    <div class="map-wrapper pt-90">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8826.923787362664!2d-118.27754354757262!3d34.03471770929568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20California%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1566525118697!5m2!1svi!2s"
            width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div><!-- /#google-map -->

    <section class="contact-section bd-bottom padding">
        <div class="map"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-details-wrap">
                        <div class="contact-title">
                            <h2>Have Any <span>Questions?</span></h2>
                            <p>Get in touch to discuss your employee wellbeing needs today. Please give us a call, drop us
                                an email or fill out the contact form.</p>
                        </div>
                        <ul class="contact-details">
                            <li><i class="fas fa-map-marker-alt"></i>Level 5/55 Swanston St,<br> Melbourne VIC 3000</li>
                            <li><i class="fas fa-envelope"></i>info.MelAirshuttleCab@gmail.com <br></li>
                            <li><i class="fas fa-phone"></i><br>+923037887248</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-form">
                        <form action="{{ route('contact') }}" method="POST" id="ajax_contact" class="form-horizontal">
                            @csrf
                            <div class="contact-title">
                                <h2>Contact With Us! <span></span></h2>
                            </div>
                            <div class="contact-form-group">
                                <div class="form-field">
                                    <input type="text" id="firstname" name="firstname" class="form-control"
                                        placeholder="First Name" required>
                                </div>
                                <div class="form-field">
                                    <input type="text" id="lastname" name="lastname" class="form-control"
                                        placeholder="Last Name" required>
                                </div>
                                <div class="form-field">
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="Email" required>
                                </div>
                                <div class="form-field">
                                    <input type="text" id="phone" name="phone" class="form-control"
                                        placeholder="Phone Number" required>
                                </div>
                                <div class="form-field message">
                                    <textarea id="message" name="message" cols="30" rows="4" class="form-control" placeholder="Message"
                                        required></textarea>
                                </div>
                                <div class="form-field">
                                    <button id="submit" class="default-btn" type="submit">Send Message</button>
                                </div>
                            </div>
                            <div id="form-messages" class="alert" role="alert">
                                @if (session('success'))
                                    <div class="alert alert-success text-dark">{{ session('success') }}</div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger text-dark">
                                        @foreach ($errors->all() as $error)
                                            <p>{{ $error }}</p>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.contact-section-->

    {{-- <section class="branches-section bg-grey padding">
        <div class="container">
            <div class="row branches-lists">
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="branches-list">
                        <h3>Sydney (Head Office)</h3>
                        <ul>
                            <li>1 Epping Road</li>
                            <li>North Ryde, NSW 2113</li>
                            <li><a href="#">+61 2 9870 7689</a></li>
                            <li><a href="#">email@example.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="branches-list">
                        <h3>Brisbane</h3>
                        <ul>
                            <li>1 Epping Road</li>
                            <li>North Ryde, NSW 2113</li>
                            <li><a href="#">+61 2 9870 7689</a></li>
                            <li><a href="#">email@example.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="branches-list">
                        <h3>Hobart</h3>
                        <ul>
                            <li>1 Epping Road</li>
                            <li>North Ryde, NSW 2113</li>
                            <li><a href="#">+61 2 9870 7689</a></li>
                            <li><a href="#">email@example.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="branches-list">
                        <h3>Melbourne</h3>
                        <ul>
                            <li>1 Epping Road</li>
                            <li>North Ryde, NSW 2113</li>
                            <li><a href="#">+61 2 9870 7689</a></li>
                            <li><a href="#">email@example.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--/.branches-section-->

@endsection
