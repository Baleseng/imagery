@extends('layouts.admin')
<style type="text/css">

.hide {
  display: none;
}
p {
  font-weight: bold;
}

</style>

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

    <p>How many check boxes do you want when clicked on a radio button?</p>
    
    <input type="radio" name="tab" value="igotnone" onclick="show1();" />None
    <input type="radio" name="tab" value="igottwo" onclick="show2();" />Two
    
    <div id="div1" class="hide">
        <hr>
        <p>Okay Cool! Here are those two...</p>
        <input type="checkbox" value="Yes" name="one">One &nbsp;
        <input type="checkbox" value="Yes" name="two">Two
    </div>

@endsection

<script type="text/javascript">
 function show1(){
  document.getElementById('div1').style.display ='none';
}
function show2(){
  document.getElementById('div1').style.display = 'block';
}
</script>


