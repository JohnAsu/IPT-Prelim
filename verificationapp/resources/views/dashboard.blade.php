@extends('base')

@section('content')

<style>
  body{
  background-color:#FFF8DC;
}
h1{
  color:green;
  text-align:center;
}
p{
  color:#4b0082;
  text-align:center;
}
table{
  background-color:#7cfc00;
  border-style:solid;
  border-color: #0000ff;
  text-align:center;
}
 .nm{
  color:#ffa500;
}
img{
  float:left;
}
li{
  color:#0000ff;
}
</style>

<div>
  <h1>srikanth's interests</h1>
<p> <b>Here</b> <em>you may be found <b>likes and dislikes</b> of srikanth</em></p>
  </div>
<div>
  <table>
    <tr>
      <th> Likes</th>
      <th>Dislikes</th>
    </tr>
    <tr>
      <td>books</td>
      <td>wasting time</td>
    </tr>
    <tr>
      <td>Food</td>
      <td>Roaming</td></tr>
    </tr>
  </table>
</div>
<div>
  <ol>
    <li>Novels</li>
    <ul>
      <li class="nm">chetan Bhagath <a href="htttps;//www.chetanbhagath.com">Click here to read</a></li>
      <li class="nm">Rohinton<a href="htttps;//www.Rohinton.com">Click here to read</a></li>
    </ul>
    <li>Articles</li>
  </ol>
</div>
<div>
  <p><em>My favourite tourist spot in india</em>  <b>Ladakh</b></p>
  <img src="https://dmgupcwbwy0wl.cloudfront.net/system/images/000/128/230/9a5de9e422361ccab2639b65cf8dbe66/x800gt/20170622_082300.jpg?1549279969"/>
</div>

@endsection

