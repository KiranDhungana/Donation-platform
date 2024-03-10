<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('globallink') 
</head>
<body>
    @foreach ($donationamount as $i)
    <div class="flex flex-row " >
        <div class="border-[2px]" >
            {{
    $i['postid']
  }}
            {{
    $i['total_amount']
  }}
           
           


        </div>

    </div>
  
        
    @endforeach
    
</body>
</html>