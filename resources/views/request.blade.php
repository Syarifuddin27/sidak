<!doctype html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap/css/bootstrap.css') }}">
<title>Laravel Ajax Test Example</title>
<script>
var csrf_token ='{{csrf_token()}}';
</script>
</head>
<body>
<h1>Laravel Ajax Test Example</h1>
<div id='see_resp'>
This message will be replaced with Ajax respose. A JSON array sent from server.<br>
Click the button to replace the message.
</div>

<button id='btn_ajax'>Test Ajax</button>

<table id="permintaan-table" class="table table-hover table table-responsive" >
                            <thead class="thead-dark">
                                <tr>
                                    <th width="30">No</th>
                                    <th>Kode</th>
                                    <th>Unit</th>
                                    <th>Tanggal Order</th>
                                    <th>Bagian Pekerjaan</th>
                                    <th>System Kerja</th>
                                    <th>Kebutuhan Unit</th>
                                    <th>Create By</th>
                                    <th>Proses</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                @foreach ($permintaan as $permin)

                                    <tr>
                                        <td>#</td>
                                        <td>{{ $permin->order_number }}</td>
                                        <td>{{ $permin->unit }}</td>
                                        <td>{{ $permin->tgl_order->toFormattedDateString() }}</td>
                                        <td>{{ $permin->jabatan->name }}</td>
                                        <td>{{ $permin->sistem_kerja }}</td>
                                        <td>{{ $permin->jumlah }}</td>
                                        

                                        <td>{{ $permin->user->name }}

                                            
                                        </td>

                                        <td>
                                            <a href="{{ route('ajax.show', $permin->id) }}" class="btn btn-danger">Edit</a>
                                        </td>
                                    </tr>

                                @endforeach 


                            </tbody>
                        </table>

<script>
  var buah = ['Mangga', 'Durian', 'Apel'];
  var see_resp = document.getElementById('see_resp');

  console.log(buah);

  //sends data to server, via POST, and displays the received answer
  function ajaxReq(){
    var req = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');  // XMLHttpRequest object

    //pairs index=value with data to be sent to server (including csrf_token)
    var data ='_token={{csrf_token()}}&buah='+buah;
    {{-- // var data ='_token={{csrf_token()}}&id=1'; --}}

    req.open('POST', '/laravellte/public/ajax/send', true); // set the request

    //adds header for POST request
    req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    req.send(data); //sends data

    // If the response is successfully received, will be added in #see_resp
    req.onreadystatechange = function(){
      if(req.readyState ==4){
        // alert(req.responseText); //just for debug
        see_resp.innerHTML = req.responseText;
      }
    }
  }

//register click event on #btn_ajax
document.getElementById('btn_ajax').addEventListener('click', ajaxReq);


</script>
</body>
</html>