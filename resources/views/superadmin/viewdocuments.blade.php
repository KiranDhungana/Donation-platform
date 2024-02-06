
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RFG | Posts</title>
    @include('globallink')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/customcss.css') }}">
    <script src="{{ asset('assets/js/fetchProvience.js') }}"></script>

</head>

<body>
    @include('reusecomp/navbar')

    <div class="document_container text-blue pt-[5rem] w-4/5 mx-auto">
        <div class="images border-b pb-5 flex flex-col justify-center items-center">
                <h1 class="text-center text-xl text-blue font-bold my-4 ">Images</h1>
                <ul>
                    <?php 
                  $c=  json_decode($docs['citizenship']);
                   $clen =count($c);
                  $p=  json_decode($docs['photos']);
                   $plen =count($p);
                  $d=  json_decode($docs['officialdocs']);
                   $dlen =count($d);
                   ?>
      @for ($i = 0; $i < $clen; $i++)
        <a style="font-size: 22px;font-weight:bold" href="{{URL::asset('storage/citizenships/'.$c[$i])}}">Citizenship - file {{$i+1}}</a>
        <br>
          @endfor
          </ul>
        </div>

        <div class="citizenship  border-b pb-5 flex flex-col justify-center items-center">
            <h1 class="text-center text-xl text-blue font-bold my-4 ">Citizenship</h1>
            @for ($i = 0; $i < $plen; $i++)
        <a style="font-size: 22px;font-weight:bold" href="{{URL::asset('storage/photos/'.$p[$i])}}">Image  {{$i+1}}</a>
        <br>
          @endfor
        </div>
        <div class="official_docs  border-b pb-5 flex flex-col justify-center items-center">
            <h1 class="text-center text-xl text-blue font-bold my-4 ">Official Documents</h1>
            @for ($i = 0; $i < $dlen; $i++)
            <a style="font-size: 22px;font-weight:bold" href="{{URL::asset('storage/officialdocs/'.$d[$i])}}">Official Document {{$i+1}}</a>
            <br>
              @endfor
        </div>
    </div>
</body>
</html>
