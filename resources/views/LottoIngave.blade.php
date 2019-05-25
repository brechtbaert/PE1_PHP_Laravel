@include('layout/header')
<h1>Lottotrekking</h1>
<div class="container">
    <h2>Nieuwe Trekking</h2>
    <h3>Vull jouw getallen in:</h3>
</div>

<div class="container">
    <form action="{{route('result')}}" method="post">
        {{csrf_field()}}
        <input type="text" name="num1" class="form-control">
        <br>
        <input type="text" name="num2" class="form-control">
        <br>
        <input type="text" name="num3" class="form-control">
        <br>
        <input type="text" name="num4" class="form-control">
        <br>
        <input type="text" name="num5" class="form-control">
        <br>
        <input type="text" name="num6" class="form-control">
        <br>
        <input type="submit" value="Resultaat" class="btn btn-block btn-lg">
    </form>
</div>
@include('layout/footer')
