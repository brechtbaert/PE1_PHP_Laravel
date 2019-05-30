@include('layout/header')
<div class="container">
    <h3>Jouw getallen:</h3>
    <p style="font-size: 20px;">{{$inputs[0]}}
        {{$inputs[1]}}
        {{$inputs[2]}}
        {{$inputs[3]}}
        {{$inputs[4]}}
        {{$inputs[5]}}
    </p>

    <h3>Getrokken getallen</h3>
    <p style="font-size: 20px;">{{$randomnumbers[0]}}
        {{$randomnumbers[1]}}
        {{$randomnumbers[2]}}
        {{$randomnumbers[3]}}
        {{$randomnumbers[4]}}
        {{$randomnumbers[5]}}
    </p>
    <br><br>

        <p>U heeft {{$counter}} getallen juist</p>


    <br><br>
    <form action="{{route('new')}}" method="post">
        {{csrf_field()}}
        <input type="submit" value="Nieuwe trekking" class="btn btn-block btn-lg" style="max-width: 150px;">
    </form>
</div>



@include('layout/footer')
