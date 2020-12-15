@extends("app")

@section('head_title', 'HotSpring Search' .' | '.getcong('site_name') )

@section('head_url', Request::url())

@section("content")
<link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">

<div class="sub-banner" style="background:url({{ URL::asset('upload/'.getcong('page_bg_image')) }}) no-repeat center top;">
    <div class="overlay">
      <div class="container">
        <h1>{{$total_res}} results for {{$keyword}}</h1>
      </div>
    </div>
</div>

<div class="hotspring_list_detail">
    <div class="container">
      <div class="row"> 
        <div class="col-md-12 col-sm-12 col-xs-12">         
            <div id="main_menu" class="box_style_2">
                <h2 class="inner">Search Result</h2>
                <h3 id="" class="nomargin_top"></h3>
                <table id="data-table" class="table table-striped table-hover dt-responsive">
                    <thead>
                        <tr>
                            <th>Post Code</th>
                            <th>City</th>
                            <th>Minumum order Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($searchlist as $i => $zone)
                        <tr>
                            <td>{{ $zone->postcode }}</td> 
                            <td>{{ $zone->city }}</td>
                            <td>{{ $zone->amount }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>
            </div>
        </div>
    </div>
    </div>
  </div>


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>
    $('#data-table').DataTable();
</script>

@endsection
