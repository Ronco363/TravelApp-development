<!DOCTYPE html>
<html>
    <head>
            <title>Shop Travel Packet</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script> 
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
            <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        
        <h1 class="nomargin"><br><i>Benvenuto nel nostro store!</i></h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-12">
                    <div class="dropdown"><!-- Gestione carrello a lato-->

                        <button id="dLabel" type="button" class="btn btn-primary" data-bs-toggle="dropdown">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Carrello <span class="badge bg-danger">{{ count((array) session('cart')) }}</span>
                        </button>
                        
                        <div class="dropdown-menu" aria-labelledby="dLabel">
                          <div class="row total-header-section">
                            <!-- inizializzazione -->
                            @php 
                                $total = 0;
                            @endphp
                            <!-- Calcolo -->
                            @foreach((array)session('cart') as $id => $details)
                                @php $total += $details['prezzo'] * $details['quantity'] @endphp
                            @endforeach
                            <!-- Display -->
                            <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                                <p>Totale: <span class="text-success">€{{$total }}</span></p>
                            </div>
                          </div>
                          @if(session('cart')) 
                                @foreach(session('cart') as $id => $details)
                                    <div class="row cart-detail">
                                        <!--Gestione Immagini -->
                                        <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                            @if($details['tipologia'] == 'Escursionismo')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-signpost-split" viewBox="0 0 16 16">
                                                    <path d="M7 7V1.414a1 1 0 0 1 2 0V2h5a1 1 0 0 1 .8.4l.975 1.3a.5.5 0 0 1 0 .6L14.8 5.6a1 1 0 0 1-.8.4H9v10H7v-5H2a1 1 0 0 1-.8-.4L.225 9.3a.5.5 0 0 1 0-.6L1.2 7.4A1 1 0 0 1 2 7h5zm1 3V8H2l-.75 1L2 10h6zm0-5h6l.75-1L14 3H8v2z"/>
                                                </svg>
                                            @elseif($details['tipologia'] == 'Ciclismo')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bicycle" viewBox="0 0 16 16">
                                                    <path d="M4 4.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1v.5h4.14l.386-1.158A.5.5 0 0 1 11 4h1a.5.5 0 0 1 0 1h-.64l-.311.935.807 1.29a3 3 0 1 1-.848.53l-.508-.812-2.076 3.322A.5.5 0 0 1 8 10.5H5.959a3 3 0 1 1-1.815-3.274L5 5.856V5h-.5a.5.5 0 0 1-.5-.5zm1.5 2.443-.508.814c.5.444.85 1.054.967 1.743h1.139L5.5 6.943zM8 9.057 9.598 6.5H6.402L8 9.057zM4.937 9.5a1.997 1.997 0 0 0-.487-.877l-.548.877h1.035zM3.603 8.092A2 2 0 1 0 4.937 10.5H3a.5.5 0 0 1-.424-.765l1.027-1.643zm7.947.53a2 2 0 1 0 .848-.53l1.026 1.643a.5.5 0 1 1-.848.53L11.55 8.623z"/>
                                                </svg>
                                            @elseif($details['tipologia'] == 'Passeggiata')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-signpost" viewBox="0 0 16 16">
                                                    <path d="M7 1.414V4H2a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h5v6h2v-6h3.532a1 1 0 0 0 .768-.36l1.933-2.32a.5.5 0 0 0 0-.64L13.3 4.36a1 1 0 0 0-.768-.36H9V1.414a1 1 0 0 0-2 0zM12.532 5l1.666 2-1.666 2H2V5h10.532z"/>
                                                </svg>
                                            @endif
                                        </div>
                                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                        <p>{{$details['nome']}}</p>
                                        <span class="price text-success">€{{$details['prezzo']}}</span><span class="count">Quantità:{{$details['quantity']}}</span>
                                    </div>
                                    </div>   
                                @endforeach
                           @endif
                            <div class="row"> <!-- Pulsante -->
                                <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                    <a href="{{ route('cart')}}" class="btn btn-primary btn-block">Visualizza tutti</a>
                                </div> 
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br/>
        <div class="container">
            
            @if(session('success'))
                <div class="alert alert-success">
                {{session('success')}}
                </div>
            @endif
            @yield('content')
        </div>
        @yield('scripts')
    </body>
</html>