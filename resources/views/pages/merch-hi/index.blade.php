@extends('layout.app')

@section('title', 'Merchandise HI | House Ilmu Indonesia')

@section('head')

@section('content')
    <main class="container my-4 my-md-5">
        <h1 class="text-center mb-4 title-merch" data-text="Merchandise House Ilmu Indonesia">
            Merchandise House Ilmu Indonesia
        </h1>

        <section class="main-content rounded-4 p-3 p-md-4 p-lg-5 mb-4">
            <header class="text-center mb-4">
                <h2 class="stroke-text-effect" data-text="Single Product">Single Product</h2>
            </header>
            <div class="product-section">
                <div class="row g-4 g-lg-5 justify-content-center">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="product-card">
                            <div class="product-image-wrapper">
                                <img src="{{ asset('img/imej.png') }}" class="img-fluid" alt="Kipas Kerang" />
                            </div>
                            <a href="#" class="btn btn-get-now mt-3">Get now</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="product-card">
                            <div class="product-image-wrapper">
                                <img src="{{ asset('img/imej.png') }}" class="img-fluid" alt="Lanyard" />
                            </div>
                            <a href="#" class="btn btn-get-now mt-3">Get now</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="product-card">
                            <div class="product-image-wrapper">
                                <img src="{{ asset('img/imej.png') }}" class="img-fluid" alt="ToteBag" />
                            </div>
                            <a href="#" class="btn btn-get-now mt-3">Get now</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="product-card">
                            <div class="product-image-wrapper">
                                <img src="{{ asset('img/imej.png') }}" class="img-fluid" alt="Kalender Produktif" />
                            </div>
                            <a href="#" class="btn btn-get-now mt-3">Get now</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="product-card">
                            <div class="product-image-wrapper">
                                <img src="{{ asset('img/imej.png') }}" class="img-fluid" alt="Topi" />
                            </div>
                            <a href="#" class="btn btn-get-now mt-3">Get now</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="product-card">
                            <div class="product-image-wrapper">
                                <img src="{{ asset('img/imej.png') }}" class="img-fluid" alt="Card Holder" />
                            </div>
                            <a href="#" class="btn btn-get-now mt-3">Get now</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="product-card">
                            <div class="product-image-wrapper">
                                <img src="{{ asset('img/imej.png') }}" class="img-fluid" alt="Payung" />
                            </div>
                            <a href="#" class="btn btn-get-now mt-3">Get now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="main-content rounded-4 p-3 p-md-4 p-lg-5 mb-4">
            <header class="text-center mb-4">
                <h2 class="stroke-text-effect" data-text="Package">Package</h2>
            </header>
            <div class="package-section">
                <div class="row g-4 align-items-stretch package-item">
                    <div class="col-md-6">
                        <div class="package-box visuals">
                            <img src="{{ asset('img/imejs.png') }}" alt="Gambar Paket" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-box text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor.</p>
                            <a href="#" class="btn btn-get-now-package">Get now</a>
                        </div>
                    </div>
                </div>
                <div class="row g-4 align-items-stretch package-item">
                    <div class="col-md-6 order-md-2">
                        <div class="package-box visuals">
                            <img src="{{ asset('img/imejs.png') }}" alt="Gambar Paket" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-md-6 order-md-1">
                        <div class="package-box text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="#" class="btn btn-get-now-package">Get now</a>
                        </div>
                    </div>
                </div>
                <div class="row g-4 align-items-stretch package-item">
                    <div class="col-md-6">
                        <div class="package-box visuals">
                            <img src="{{ asset('img/imejs.png') }}" alt="Gambar Paket" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-box text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="#" class="btn btn-get-now-package">Get now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="main-content rounded-4 p-3 p-md-4 p-lg-5 mb-4">
            <header class="text-center mb-4">
                <h2 class="stroke-text-effect" data-text="How to Order">How to Order</h2>
            </header>
            <div class="how-to-order-section">
                <ol class="order-steps fw-bold">
                    <li>
                        <h3>Step 1: Choose Your Merchandise</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ducimus est perferendis cupiditate officia. In eos voluptatum fugiat.</p>
                    </li>
                    <li>
                        <h3>Step 2: Contact Us</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil dolorem consequuntur sit sed quidem iusto.</p>
                    </li>
                    <li>
                        <h3>Step 3: Payment & Confirmation</h3>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem. Lorem ipsum dolor sit amet consectetur.</p>
                    </li>
                </ol>
            </div>
        </section>

        <section class="rounded-4">
            <header class="text-center mb-4">
                <h2 class="faq-title stroke-text-effect" data-text="FAQ">FAQ</h2>
            </header>
            <div class="faq-section">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <a href="https://wa.me/62888888" class="whatsapp-float" target="_blank" rel="noopener noreferrer">
        <img src="{{ asset('img/whatsapp-icon.svg') }}" alt="Hubungi Kami di WhatsApp">
    </a>

@endsection