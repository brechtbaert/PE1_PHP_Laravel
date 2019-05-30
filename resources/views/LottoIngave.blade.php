@include('layout/header')
<h1 style="text-align: center;">Lottotrekking</h1>
<div class="container">
    <h2>Nieuwe Trekking</h2>
    <h3>Vull jouw getallen in:</h3>
    <form action="{{route('result')}}" method="post">
        {{csrf_field()}}
        <label>Getal 1:</label>
        <input type="text" name="num1" class="form-control" style="max-width: 150px;" required>
        <br>
        <label>Getal 2:</label>
        <input type="text" name="num2" class="form-control" style="max-width: 150px;" required>
        <br>
        <label>Getal 3:</label>
        <input type="text" name="num3" class="form-control" style="max-width: 150px;" required>
        <br>
        <label>Getal 4:</label>
        <input type="text" name="num4" class="form-control" style="max-width: 150px;" required>
        <br>
        <label>Getal 5:</label>
        <input type="text" name="num5" class="form-control" style="max-width: 150px;" required>
        <br>
        <label>Getal 6:</label>
        <input type="text" name="num6" class="form-control" style="max-width: 150px;" required>
        <br>
        <input type="submit" value="Resultaat" class="btn btn-block btn-lg" style="max-width: 150px;">
    </form>
</div>
@include('layout/footer')
