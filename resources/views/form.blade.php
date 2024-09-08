@extends('layouts.app')

@section('content')

    <section class="mt-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <p class="text-primary text-uppercase fw-bold">Contact With us</p>
                        <h1>let&rsquo;s get connected</h1>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="shadow rounded p-5 bg-white">
                            {{-- ALert message --}}
                        @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            <strong>Sent Successfully!</strong> {{ session('success') }}
                        </div>
                        @endif
                            {{-- ALert message --}}

                        <div class="row">
                            <div class="col-12 mb-4">
                                <h4>Leave Us A Message</h4>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-form">
                                    <form action="submit" method="post">
                                        @csrf
                                        <div class="form-group mb-4 pb-2">
                                            <label for="name" class="form-label">Full Name</label>
                                            <input value="{{ old('name') }}" name="name" type="text" class="form-control shadow-none @error('name') is-invalid @enderror" id="name">
                                            @error('name')
                                               <p class="invalid-feedback">{{ $message }}</p> 
                                            @enderror
                                        </div>
                                        <div class="form-group mb-4 pb-2">
                                            <label for="email" class="form-label">Email address</label>
                                            <input value="{{ old('email') }}" name="email" type="text" class="form-control shadow-none @error('email') is-invalid @enderror" id="email">
                                            @error('email')
                                               <p class="invalid-feedback">{{ $message }}</p> 
                                            @enderror
                                        </div>
                                        <div class="form-group mb-4 pb-2">
                                            <label for="message" class="form-label">Write Message</label>
                                            <textarea name="message" class="form-control shadow-none  @error('message') is-invalid @enderror" id="message" rows="3">{{ old('message') }}</textarea>
                                            @error('message')
                                               <p class="invalid-feedback">{{ $message }}</p> 
                                            @enderror
                                        </div>
                                        <button class="btn btn-primary w-100" type="submit">Send Message</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-5 mt-lg-0">
                                <div class="contact-info">
                                    <div class="block mt-0">
                                        <h4 class="h5">Still Have Questions?</h4>
                                        <div class="content">We're happy to help! Call us at
                                            <br> <a href="tel:+XXX111222">+XXX111222</a> 
                                            <br>Monday to Friday
                                            <br>9AM TO 8PM (Eastern Time)</div>
                                    </div>
                                    <div class="block mt-4">
                                        <h4 class="h5">Canada Office</h4>
                                        <div class="content">Park Street.
                                            <br>455.
                                            <br>Salt lake</div>
                                    </div>
                                    <div class="block mt-4">
                                        <h4 class="h5">Demo Office</h4>
                                        <div class="content">22 Park Road,
                                            <br>23BX,
                                            <br>Demo</div>
                                    </div>
                                    <div class="block">
                                        <ul class="list-unstyled list-inline my-4 social-icons">
                                            <li class="list-inline-item me-3"><a title="Explorer Facebook Profile" class="text-black" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="list-inline-item me-3"><a title="Explorer Twitter Profile" class="text-black" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item me-3"><a title="Explorer Instagram Profile" class="text-black" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection