@include('layout/header')
<div class="container">
    <h3>Jouw getallen:</h3>
    <p>{{$inputs['input1']}}
        {{$inputs['input2']}}
        {{$inputs['input3']}}
        {{$inputs['input4']}}
        {{$inputs['input5']}}
        {{$inputs['input6']}}
    </p>

    <h3>Getrokken getallen</h3>
    <p>{{$randomnumbers['rand1']}}
        {{$randomnumbers['rand2']}}
        {{$randomnumbers['rand3']}}
        {{$randomnumbers['rand4']}}
        {{$randomnumbers['rand5']}}
        {{$randomnumbers['rand6']}}
    </p>
    <br><br>

    <p>U heeft {{$counter}} getallen juist</p>

</div>



@include('layout/footer')
