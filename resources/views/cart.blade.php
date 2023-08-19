@extends('layout')

@section('content')
<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width: 50%">Piano</th>
            <th style="width: 10%">Prezzo</th>
            <th style="width: 8%">Quantity</th>
            <th style="width: 22%" class="text-center">Subtotale</th>
            <th style="width:10%"></th>
        </tr>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                <!-- Calcolo prezzo Piano -->
                @php $total += $details['prezzo'] * $details['quantity'] @endphp
                <!-- Tabella -->
                <tr data-id="{{$id}}">
                    <td data-th="Piano">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ asset('images') }}/{{ $details['immagine'] }}"  width="100" height="100" class="img-responsive"/></div> 
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['nome'] }}<h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Prezzo">€{{$details['prezzo']}}</td>
                    <td data-th="Quantity"> <!--Bottone classe ajax modifica della quantità-->
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity cart_update" min="1" />
                    </td>
                    <td data-th="Subtotal" class="text-center">€{{$details['prezzo'] * $details['quantity']}}</td>
                    <td class="actions" data-th="">    <!-- Bottone classe ajax cancellazione -->
                        <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Delete</button>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot> <!-- prezzo totale di tutti i pacchetti -->
        <tr>
            <td colspan="5" style="text-align:right;"><h3><strong>Total €{{ $total }}</strong></h3></td>
        </tr>
        <tr>
            <td colspan="5" style="text-align:right;">
                <!-- Gestione -->
                <form action="/session" method="POST">
                    <a href="{{ url('shop') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continua lo Shopping</a> <!-- tornare indietro -->
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <button class="btn btn-success" type="submit" id="checkout-live-button"><i class="fa fa-money"></i> Checkout</button> <!-- prosegue a pagina -->
                </form>
            </td>
        </tr>
    </tfoot>
</table>
@endsection

@section('scripts')
<script type="text/javascript">

    $(".cart_update").change(function(e){
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ route('update_cart') }}',
            method: "patch",
            data:{
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function(response){
                window.location.reload();
            }
        });
    });

    $(".cart_remove").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Vuoi davvero rimuovere questo pacchetto viaggio dal carrello?")){
            //alert("success");
            $.ajax({
                url: '{{ route('remove_from_cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response){
                    window.location.reload();
                }
            });
        }
    });
    
</script>
@endsection
